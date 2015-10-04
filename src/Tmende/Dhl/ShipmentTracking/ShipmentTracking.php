<?php namespace Tmende\Dhl\ShipmentTracking;

use Tmende\Dhl\Credentials\Credentials;
use Tmende\Dhl\Api\ShipmentTracking\CollectionPieceStatus;
use Illuminate\Http\RedirectResponse as Redirect;
use \SimpleXMLElement;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class ShipmentTracking {

	/**
     * @var Credentials
     */
    private $_credentials;

    /**
     * Constructor
     *
     * @param Credentials $credentials - (Dependency injection) If not provided, a Credentials instance will be constructed.
     */
    public function __construct(Credentials $credentials = null)
    {
        if ( null === $credentials ) {
            // Create the Credentials
            $credentials = Credentials::getInstance();
        }
        $this->_credentials = $credentials;
    }

    /**
     * XML-Request the current shipping status for everyone
     *
     * @param string $parameters
     * @access public
     */
    public function getStatusForPublicUserXml($parameters)
    {
    	//In Sandbox Environment for public Access default login data don't work
    	if ($this->_credentials->environment == 'sandbox') {
    		$this->_credentials->tnt_user = 'zt102845';
    		$this->_credentials->tnt_password = 'FrTdUs!5S3vE';
    	}

    	$this->_credentials->cig_endpoint_rest = 'https://nolp.dhl.de/nextt-online-public/direct/nexttjlibpublicservlet';

    	return $this->makeRequest('get-status-for-public-user', $parameters, true);
    }

    /**
     * the current shipping status for everyone as Collection
     *
     * @param string $parameters
     * @access public
     */
    public function getStatusForPublicUser($parameters)
    {
    	$response = $this->getStatusForPublicUserXml($parameters);

    	$collection = new CollectionPieceStatus();
    	$collection->generateFromXML($response);

    	return $collection;
    }

    /**
     * XML-Request the current shipping status with extended information
     *
     * @param string $parameters
     * @access public
     */
    public function getStatusXml($parameters)
    {
    	return $this->makeRequest('d-get-piece', $parameters);
    }

    /*
     * XML-Request the shipping progress with all of a shipment's individual events
     *
     * @param string $parameters
     * @access public
     */
    public function getStatusEventsXml($parameters)
    {
    	return $this->makeRequest('d-get-piece-events', $parameters);
    }

    /*
     * XML-Request of the shipping status and route
     *
     * @param string $parameters
     * @access public
     */
    public function getStatusDetailsXml($parameters)
    {
    	return $this->makeRequest('d-get-piece-detail', $parameters);
    }

    /*
     * XML-Request the signature of the recipient or substitute recipient (proof of delivery / POD)
     *
     * @param string $parameters
     * @access public
     */
    public function getSignatureXml($parameters)
    {
    	return $this->makeRequest('d-get-signature', $parameters);
    }

    /**
     * HTTP-Request the current shipping status for everyone
     *
     * @param string $trackingNumber
     * @param bool $internationalShipment
     * @param string $zip optional zip of national receiver
     * @param string $langCode Language for result page (ISO-Code)
     * @access public
     * @return string
     */
    public function getStatusForPublicUserHttp($trackingNumber, $internationalShipment = false, $zip = NULL, $langCode = NULL)
    {
    	$url = "http://nolp.dhl.de/nextt-online-public/set_identcodes.do?idc=" . $trackingNumber;

    	if ($international_shipment) {
    		$url .= "&internationalShipment=" . $internationalShipment;
    	}

    	if ($zip != NULL) {
    		$url .= "&zip=" . $zip;
    	}

    	if ($langCode != NULL) {
    		$url .= "&lang=" . $langCode;
    	}

    	return $url;
    }

    /**
     * Genarates XML for the request
     *
     * @param string $strOperationName
     * @param string $strAppname
     * @param string $strPasswd
     * @param string $strLangCode
     * @param string $strPieceCode
     * @param bool $public public operation
     * @access public
     * @return SimpleXMLElement
     */
    public function createRequestXML($strOperationName, $strAppname, $strPasswd, $strLangCode, $parameters, $public)
    {

        $xml = new SimpleXMLElement("<data/>");
        $xml->addAttribute("appname", $strAppname);
        $xml->addAttribute("password", $strPasswd);
        $xml->addAttribute("request", $strOperationName);
        $xml->addAttribute("language-code", $strLangCode);

        foreach ($parameters as $key => $value) {
        	//If piece-code chekc for public
        	if ($key == 'piece-code') {
        		if ($public) {
		        	$xml->addChild("data")->addAttribute("piece-code", $value);
		        } else {
		        	$xml->addAttribute("piece-code", $value);
		        }
        	} else {
        		$xml->addAttribute($key, $value);
        	}
        }

        return $xml->asXML();
    }

    /*
     * Parse the xml-stream string to xml-object or html string for output
     *
     * @param string $xml
     * @param bool $html_output
     * @access public
     */
    function xmlpp($xml, $htmlOutput = false)
    {
        $xmlObj = new SimpleXMLElement($xml);
        $level = 4;
        $indent = 0; // current indentation level
        $pretty = array();

        // get an array containing each XML element
        $xml = explode("\n", preg_replace('/>\s*</', ">\n<", $xmlObj->asXML()));

        // shift off opening XML tag if present
        if (count($xml) && preg_match('/^<\?\s*xml/', $xml[0])) {
            $pretty[] = array_shift($xml);
        }

        foreach ($xml as $el) {
            if (preg_match('/^<([\w])+[^>\/]*>$/U', $el)) {
                // opening tag, increase indent
                $pretty[] = str_repeat(' ', $indent) . $el;
                $indent += $level;
            } else {
                if (preg_match('/^<\/.+>$/', $el)) {
                    $indent -= $level;  // closing tag, decrease indent
                }
                if ($indent < 0) {
                    $indent += $level;
                }
                $pretty[] = str_repeat(' ', $indent) . $el;
            }
        }
        $xml = implode("\n", $pretty);
        return ($htmlOutput) ? htmlentities($xml) : $xml;
    }

    /*
     * Quering the request
     *
     * @param string $operation
     * @param array $parameters
     * @param bool $public
     * @return $response
     * @access public
     */
    public function makeRequest($operation, $parameters, $public = false)
    {
    	try {
    		$requestXML = $this->createRequestXML($operation, $this->_credentials->tnt_user, $this->_credentials->tnt_password, $this->_credentials->lang_code, $parameters, $public);

    		$requestOptions = array(
    							'auth' => array($this->_credentials->cig_user, $this->_credentials->cig_password),
    							'debug' => false,
    							'headers'  => array('content-type' => 'text/xml'),
    							'query' => array('xml' => $requestXML),
    							'stream' => true
    		);

    		$client = new Client();
    		$response = $client->request('GET', $this->_credentials->cig_endpoint_rest, $requestOptions);

    		$body = $response->getBody();

    		return $this->xmlpp($body->getContents(), false);
    	} catch (ClientException $e) {
		    //var_dump($e->getRequest());
		    //var_dump($e->getResponse());
		}
    }
}
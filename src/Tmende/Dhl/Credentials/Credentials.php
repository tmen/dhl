<?php namespace Tmende\Dhl\Credentials;

use \Config;

class Credentials {

	/**
	*
	* @var bool $debug
	* @access public
	*/
    public $debug;

	/**
	*
	* @var string $environment
	* @access public
	*/
    public $environment;

	/**
	*
	* @var string $cig_user
	* @access public
	*/
    public $cig_user;

    /**
     *
     * @var string $cig_password
     * @access public
     */
    public $cig_password;

    /**
     *
     * @var string $cig_endpoint_soap
     * @access public
     */
    public $cig_endpoint_soap;

    /**
     *
     * @var string $cig_endpoint_rest
     * @access public
     */
    public $cig_endpoint_rest;

    /**
	*
	* @var string $pcs_user
	* @access public
	*/
    public $pcs_user;

    /**
     *
     * @var string $pcs_password
     * @access public
     */
    public $pcs_password;

     /**
     *
     * @var string $pcs_partnerId
     * @access public
     */
    public $pcs_partnerId;

    /**
     *
     * @var string $pcs_subPartnerId
     * @access public
     */
    public $pcs_subPartnerId = "";

    /**
     *
     * @var bool $cig_sessionAuth
     * @access public
     */
    public $cig_sessionAuth;

    /**
     *
     * @var string $cig_accountId
     * @access public
     */
    public $cig_accountId;

    /**
     *
     * @var string $tnt_user
     * @access public
     */
    public $tnt_user;

    /**
     *
     * @var string $tnt_password
     * @access public
     */
    public $tnt_password;

     /**
     *
     * @var string $lang_code
     * @access public
     */
    public $lang_code;

     /**
     *
     * @var Credentials $instance
     * @access private
     */
    private static $instance = null;

	private function __clone(){}

    /**
     * Detect config and set data from it
     *
     * @access public
     */
    protected function __construct()
    {
    	// if config/dhl.php exists use this one
        if ( Config::get('dhl.cig') != null ) {
        	$this->debug = Config::get('dhl.debug', false);
        	$this->environment = Config::get('dhl.environment', 'sandbox');
	        $this->cig_user = Config::get('dhl.cig.user');
	        $this->cig_password = Config::get('dhl.cig.password');
	        $this->cig_endpoint_soap = Config::get('dhl.cig.endpoint.' . $this->environment . '.soap');
	        $this->cig_endpoint_rest = Config::get('dhl.cig.endpoint.' . $this->environment . '.rest');
	        $this->cig_sessionAuth = Config::get('dhl.cig.sessionAuth');
	        $this->cig_accountId = Config::get('dhl.cig.accountId');

	        $this->pcs_user = Config::get('dhl.pcs.' . $this->environment . '.user');
	        $this->pcs_password = Config::get('dhl.pcs.' . $this->environment . '.password');
	        $this->pcs_partnerId = Config::get('dhl.pcs.' . $this->environment . '.partnerid');
	        $this->pcs_subPartnerId = Config::get('dhl.pcs.' . $this->environment . '.subpartnerid');

	        $this->tnt_user = Config::get('dhl.tnt.user');
	        $this->tnt_password = Config::get('dhl.tnt.password');
	        $this->lang_code = Config::get('dhl.lang_code', 'de');


	    // esle try to find config in packages configs
	    } else {
	    	$this->debug = Config::get('dhl::debug', false);
	    	$this->environment = Config::get('dhl::environment', 'sandbox');
	    	$this->cig_user = Config::get('dhl::cig.user');
	        $this->cig_password = Config::get('dhl::cig.password');
	        $this->cig_endpoint_soap = Config::get('dhl::cig.endpoint.' . $this->environment . '.soap');
	        $this->cig_endpoint_rest = Config::get('dhl::cig.endpoint.' . $this->environment . '.rest');
	        $this->cig_sessionAuth = Config::get('dhl::cig.sessionAuth');
	        $this->cig_accountId = Config::get('dhl::cig.accountId');

	        $this->pcs_user = Config::get('dhl::pcs.' . $this->environment . '.user');
	        $this->pcs_password = Config::get('dhl::pcs.' . $this->environment . '.password');
	        $this->pcs_partnerId = Config::get('dhl::pcs.' . $this->environment . '.partnerid');
	        $this->pcs_subPartnerId = Config::get('dhl::pcs.' . $this->environment . '.subpartnerid');

	        $this->tnt_user = Config::get('dhl::tnt.user');
	        $this->tnt_password = Config::get('dhl::tnt.password');
	        $this->lang_code = Config::get('dhl::lang_code', 'de');
	    }
    }

    public static function getInstance()
    {
		if (self::$instance == null){
			self::$instance  = new Credentials();
		}
		return self::$instance;
	}

}
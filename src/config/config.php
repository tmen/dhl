<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| DHL Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * debug mode
	 */
	'debug' => true,

	/**
	 * environment
	 * in test environment => sandbox, production => production
	 */
	'environment' => 'sandbox',

	/**
	 * cig authentication
	 */
	'cig' => array(
				'user' => '',
				'password' => '',
				'endpoint' => array(
					'sandbox' => array(
						'soap' => 'https://cig.dhl.de/services/sandbox/soap',
						'rest' => 'https://cig.dhl.de/services/sandbox/rest/'
					),
					'production' => array(
						'soap' => 'https://cig.dhl.de/services/production/soap',
						'rest' => 'https://cig.dhl.de/services/production/rest/'
					)
				),
				'sessionAuth' => false,
				'accountId' => ''
	),

	/**
	 * pcs authentication
	 */
	'pcs' => array(
				'sandbox' => array(
					'user' => 'entwipor',
					'password' => 'SueARjhx',
					'partnerid' => 'ENTWICKLERPORTAL',
					'subpartnerid' => ''
				),
				'production' => array(
					'user' => '',
					'password' => '',
					'partnerid' => '',
					'subpartnerid' => ''
				)
	),

	/**
	 * IntraShip
	 */
	'IntraShip' => array(
					'user' => 'geschaeftskunden_api',
					'password' => 'Dhl_ep_test1'
	),

	/**
	 * tnt
	 */
	'tnt' => array(
				'user' => 'dhl_entwicklerportal',
				'password' => 'Dhl_123!'
	),

	/**
	 * lang_code: de,en,fr
	 */
	'lang_code' => 'de'

);
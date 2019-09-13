<?php

class TPConfig{

	const API_ENDPOINT_PROD = "https://api.tinypass.com/api/v3";
	const API_ENDPOINT_SANDBOX = "https://sandbox.tinypass.com/api/v3";

	public static $COOKIE_SUFFIX = "_TOKEN";
	public static $COOKIE_PREFIX = "__TP_";
	public static $TAC_PREFIX = "__tac";

	public $AID;
	public $API_TOKEN;
	public $PRIVATE_KEY;
	public $SANDBOX;

	public function __construct($aid, $apiToken, $privateKey, $sandbox){
		$this->AID = $aid;
		$this->API_TOKEN = $apiToken;
		$this->PRIVATE_KEY = $privateKey;
		$this->SANDBOX = $sandbox;
	}

	public function getEndpoint(){
		if ($this->SANDBOX === true){
			return self::API_ENDPOINT_SANDBOX;
		} elseif ($this->SANDBOX === false){
			return self::API_ENDPOINT_PROD;
		} else{
			return $this->SANDBOX;
		}
	}

	public static function getTokenCookieName($aid){
		return self::$COOKIE_PREFIX . $aid . self::$COOKIE_SUFFIX;
	}

	public static function getAppPrefix($aid){
		return self::$COOKIE_PREFIX . $aid;
	}

	public static function getTACPrefix(){
		return self::$TAC_PREFIX;
	}

}
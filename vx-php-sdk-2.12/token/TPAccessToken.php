<?php

/**
 * Requires PHP 5.2 or later (5.2.17 or 5.3.5 highly recommended) with the following extensions:
 * SimpleXML
 * JSON
 * PCRE
 * SPL
 * cURL with HTTPS support
 */
class TPAccessToken{

	private $token;
	private $accessState;

	public function __construct(){

		$numargs = func_num_args();
		$this->token = new TPTokenData();

		if ($numargs == 1&&func_get_arg(0) instanceof TPTokenData){
			$this->token = func_get_arg(0);
			return;
		}

		if ($numargs == 1){
			$rid = func_get_arg(0);
			$this->token->addField(TPTokenData::RID, $rid);
			return;
		}

		if ($numargs == 2){
			$rid = func_get_arg(0);
			$expiration = func_get_arg(1);
			$this->token->addField(TPTokenData::RID, $rid);
			$this->token->addField(TPTokenData::EX, $expiration != null ? TPTokenData::convertToEpochSeconds($expiration) : 0);
			return;
		}

		if ($numargs == 3){
			$rid = func_get_arg(0);
			$expiration = func_get_arg(1);
			$eex = func_get_arg(2);
			$this->token->addField(TPTokenData::RID, $rid);
			$this->token->addField(TPTokenData::EX, $expiration != null ? TPTokenData::convertToEpochSeconds($expiration) : 0);
			$this->token->addField(TPTokenData::EARLY_EX, $eex != null ? TPTokenData::convertToEpochSeconds($eex) : 0);
			return;
		}

	}

	public function getTokenData(){
		return $this->token;
	}

	public function getAccessID(){
		return $this->token->getField(TPTokenData::ACCESS_ID);
	}

	public function getRID(){
		return $this->token->getRID();
	}

	public function getBuildTime(){
		return $this->token->getFromMap(TPTokenData::BUILD_TIME, 0);
	}

	public function getExpirationInMillis(){
		return $this->getExpirationInSecs()*1000;
	}

	public function getExpirationInSecs(){
		return $this->token->getFromMap(TPTokenData::EX, 0);
	}

	public function getExpirationInSeconds(){
		return $this->token->getFromMap(TPTokenData::EX, 0);
	}

	public function getEarlyExpirationInSecs(){
		return $this->token->getFromMap(TPTokenData::EARLY_EX, 0);
	}

	public function getEarlyExpirationInSeconds(){
		return $this->token->getFromMap(TPTokenData::EARLY_EX, 0);
	}

	public function getCreatedTimeInSecs(){
		return $this->token->getFromMap(TPTokenData::CREATED_TIME, 0);
	}

	public function getUID(){
		return $this->token->getFromMap(TPTokenData::UID, 0);
	}

	/**
	 * Access checking functions
	 */
	public function isExpired(){
		$time = $this->getEarlyExpirationInSeconds();

		if ($time == null||$time == 0)
			$time = $this->getExpirationInSecs();

		if ($time == null||$time == 0)
			return false;

		return $time<=time();
	}

	public function isAccessGranted($clientIP = null){
		if ($this->getExpirationInSecs() == -1){
			//special case. RID_NOT_FOUND
			if ($this->accessState != TPAccessState::NO_TOKENS_FOUND) $this->accessState = TPAccessState::RID_NOT_FOUND;
			return false;
		}

		if ($this->isExpired()){
			$this->accessState = TPAccessState::EXPIRED;
			return false;
		} else{
			$this->accessState = TPAccessState::ACCESS_GRANTED;
			return true;
		}
	}


//V2-CHANGE moved from TinyPass class
	public function setAccessState($accessState){
		$this->accessState = $accessState;
	}

	public function getAccessState(){
		if ($this->accessState == null) $this->isAccessGranted();
		return $this->accessState;
	}

}


class TPAccessState{

	const ACCESS_GRANTED = 100;
	const RID_NOT_FOUND = 201;
	const NO_TOKENS_FOUND = 202;
	const EXPIRED = 204;

}

?>
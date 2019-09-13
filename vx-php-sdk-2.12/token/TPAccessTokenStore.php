<?php

class TPAccessTokenStore{

	protected $config;
	protected $tokens;
	protected $rawCookie;

	public function __construct(TPConfig $config){
		$this->config = $config;
		$this->tokens = new TPAccessTokenList();
	}

	public function getAccessToken($rid){

		$token = $this->tokens->getAccessTokenByRID($rid);

		if ($token != null){
			return $token;
		}

		$token = new TPAccessToken($rid);
		$token->getTokenData()->addField(TPTokenData::EX, -1);

		if ($token->getAccessState() == null){
			if ($this->tokens->size() == 0){
				$token->setAccessState(TPAccessState::NO_TOKENS_FOUND);
			} else{
				$token->setAccessState(TPAccessState::RID_NOT_FOUND);
			}
		}

		return $token;
	}

	public function loadTokensFromCookie($cookies, $cookieName = null){

		if ($cookieName == null){
			$cookieName = TPConfig::getTACPrefix();
		}

		$unparsedTokenValue = '';
		if (is_array($cookies)){
			foreach ($cookies as $name => $value){
				if ($name == $cookieName){
					$unparsedTokenValue = $value;
					break;
				}
			}
		} else{
			$unparsedTokenValue = $cookies;
		}

		$this->rawCookie = $unparsedTokenValue;

		if ($unparsedTokenValue != null){
			$parser = new TPClientParser($this->config);
			$this->tokens = $parser->parseAccessTokens(urldecode($unparsedTokenValue));
		}
	}

	public function getAccessTokens(){
		return $this->tokens;
	}

	public function hasToken($rid){
		return $this->tokens->getAccessTokenByRID($rid);
	}

	public function getUID(){
		$tokens = $this->tokens->getAccessTokens();
		foreach ($tokens as $rid => $token){
			return $token->getUID();
		}

		return null;
	}

}

?>
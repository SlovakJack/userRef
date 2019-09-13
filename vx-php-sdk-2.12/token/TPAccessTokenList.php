<?php

class TPAccessTokenList{

	public static $MAX = 20;
	private $tokens = array();

	function __construct(array $tokens = null){
		if ($tokens){
			foreach ($tokens as $token){
				$this->add($token, false);
			}
		}
	}

	/**
	 * @return TPAccessToken[]
	 */
	public function getAccessTokens(){
		return $this->tokens;
	}

	public function contains($rid){
		return array_key_exists($rid, $this->tokens);
	}

	public function remove($rid){
		unset($this->tokens[$rid]);
	}

	public function add(TPAccessToken $token, $checkLimit = true){
		if ($checkLimit&&count($this->tokens)>=TPAccessTokenList::$MAX){
			array_pop($this->tokens);
		}
		$this->tokens[$token->getRID()] = $token;
	}

	public function addAll($tokens){
		foreach ($tokens as $token){
			$this->add($token);
		}
	}

	/**
	 *
	 * @param string $rid String RID
	 * @return TPAccessToken
	 */
	public function getAccessTokenByRID($rid){
		if ($this->contains($rid)){
			return $this->tokens[$rid];
		}
		return null;
	}

	public function isEmpty(){
		return $this->tokens == null||count($this->tokens) == 0;
	}

	public function size(){
		return count($this->tokens);
	}

	/**
	 * @return TPAccessToken
	 */
	public function first(){
		foreach ($this->tokens as $key => $value)
			return $value;
	}

}

?>
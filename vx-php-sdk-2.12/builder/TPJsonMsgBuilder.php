<?php

class TPJsonMsgBuilder{

	public function parseAccessTokens($raw){

		if ($raw == null||$raw == "")
			return null;

		$json = (array)json_decode($raw);
		$accessTokenList = array();

		if (!is_array($json)){
			$tokenMap = $json;
			$rid = $tokenMap[TPTokenData::RID];
			$token = $this->parseAccessToken($rid, $tokenMap);
			$accessToken = new TPAccessToken($token);
			$accessTokenList[] = $accessToken;
		} else{
			try{
				//1.0 tokens cannot be parsed in this version
				if (isset($json['tokens']))
					return new TPAccessTokenList($accessTokenList);

				foreach ($json as $tokenMap){
					$tokenMap = (array)$tokenMap;

					if (isset($tokenMap['rid']) == false)
						continue;

					if (array_key_exists('rid', $tokenMap)&&$tokenMap['rid'] == '')
						continue;

					$rid = $tokenMap[TPTokenData::RID];
					$token = $this->parseAccessToken($rid, $tokenMap);
					$accessToken = new TPAccessToken($token);
					$accessTokenList[] = $accessToken;
				}
			} catch (Exception $e){
				return new TPAccessTokenList($accessTokenList);
			}
		}

		return new TPAccessTokenList($accessTokenList);
	}

	private function parseAccessToken($rid, $map){

		$token = new TPTokenData($rid);

		$fields = array(
			TPTokenData::ACCESS_ID,
			TPTokenData::EX,
			TPTokenData::UID,
			TPTokenData::EARLY_EX,
			TPTokenData::CREATED_TIME,
		);

		foreach ($fields as $f){
			if (isset($map[$f]))
				$token->addField($f, $map[$f]);
		}

		return $token;
	}

	public function buildAccessTokens(TPAccessTokenList $list){
		$tokens = array();

		foreach ($list->getAccessTokens() as $token){
			$tokens[] = $token->getTokenData()->getValues();
		}
		return json_encode($tokens);
	}

	public function buildAccessToken(TPAccessToken $accessToken){
		return json_encode($accessToken->getTokenData()->getValues());
	}

	private function nuller($value){
		return $value != null ? $value : "";
	}

}

?>

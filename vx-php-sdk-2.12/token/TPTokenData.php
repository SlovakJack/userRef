<?php

class TPTokenData{

	protected $map = array();

	const MARK_YEAR_MILLIS = 1293858000000;

	const ACCESS_ID = "id";
	const BUILD_TIME = "bt";
	const RID = "rid";
	const UID = "uid";
	const EX = "ex";
	const EARLY_EX = "eex";
	const CREATED_TIME = "ct";


	public function __construct($rid = null){
		$this->map[TPTokenData::RID] = $rid;
	}

	public function getRID(){
		return $this->map[TPTokenData::RID];
	}

	public function addField($s, $o){
		$this->map[$s] = $o;
	}

	public function addFields($map){
		$this->map = array_merge($this->map, $map);
	}

	public function getField($s){
		return $this->map[$s];
	}

	public function getValues(){
		return $this->map;
	}

	public function size(){
		return count($this->map);
	}

	public function getFromMap($key, $defaultValue){
		if (!array_key_exists($key, $this->map))
			return $defaultValue;
		return $this->map[$key];
	}

	public static function convertToEpochSeconds($time){
		if ($time>TPTokenData::MARK_YEAR_MILLIS)
			return $time/1000;
		return $time;
	}

}

?>

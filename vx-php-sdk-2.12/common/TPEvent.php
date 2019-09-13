<?php

/**
 * It is base class for all events
 */
class TPEvent{

	/**
	 * @var array @unused
	 */
	public static $dataTypes = array();

	const TEST_EVENT = "test";

	const ACCESS_EVENT = "access";
	const SUBSCRIPTION_EVENT = "subscription";
	const KEYING_CONTENT_EVENT = "content_algorithm";

	public $version, $type, $event;

	/**
	 * Version 1 or 2, version 1 is deprecated
	 * @return int
	 */
	public function getVersion(){
		return (null === $this->version) ? 1 : $this->version;
	}

	/**
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}

	public function getEvent() {
        return $this->event;
    }

	public static function getClassName(){
		return get_called_class();
	}

}


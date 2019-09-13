<?php

class TPAccessEvent extends TPEvent{
	public $aid;
	public $timestamp;
	public $expires;
	public $accessId;
	public $termId;
	public $rid;
	public $uid;


	/**
	 * @return bool
	 */
	public function isExpirationUnlimited() {
		return $this->expires == null;
	}

	/**
	 * @return bool
	 */
	public function isExpired() {
        $expires = intval($this->isExpired());
        return ($expires != null) && ($expires < time());
    }
}
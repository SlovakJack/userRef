<?php

class Webhook{

	/**
	 * @param $data
	 * @param $privateKey
	 * @return TPEvent
	 */
	public static function parse($data, $privateKey){

		$decryptedData = json_decode(TPSecurityUtils::decrypt($privateKey, $data));

		$eventClass = TPAccessEvent::getClassName();

		/**
		 * @var TPAccessEvent $event
		 */
		$event = TinypassClient::objectToInstance($decryptedData, $eventClass);

		switch ($event->getVersion()){
			case 2:
				switch ($event->getType()){
					case TPEvent::TEST_EVENT:
						$eventClass = TPTestEvent::getClassName();
						break;
					case TPEvent::KEYING_CONTENT_EVENT:
						$eventClass = TPContentEvent::getClassName();
				}
				break;

		}

		return TinypassClient::objectToInstance($decryptedData, $eventClass);
	}

}

<?php

/**
 * Class TPAPIBase
 */
abstract class TPAPIBase{
	/**
	 * @var TinypassClient
	 */
	protected $apiClient;

	/**
	 *
	 * @param TinypassClient $apiClient The API client to use
	 */
	public function __construct($apiClient){
		$this->apiClient = $apiClient;
	}

}

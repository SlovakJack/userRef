<?php
/**
 * Copyright (c) 2014, Tinypass, Inc.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or
 * without modification, are permitted provided that the following
 * conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright
 * notice, this list of conditions and the following disclaimer.
 *
 * 2. Redistributions in binary form must reproduce the above copyright
 * notice, this list of conditions and the following disclaimer in the
 * documentation and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS
 * OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
 * OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE
 * USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */
/**
 * The TPPublisherWebhookApi class.
 */
class TPPublisherWebhookApi  extends TPAPIBase {

    /**
     * @return eventsRequestTPPublisherWebhookApi
     */
    public function eventsRequest(){

        return new eventsRequestTPPublisherWebhookApi($this->apiClient);
    }
    /**
     * @return getEventRequestTPPublisherWebhookApi
     */
    public function getEventRequest(){

        return new getEventRequestTPPublisherWebhookApi($this->apiClient);
    }
    /**
     * @return listRequestTPPublisherWebhookApi
     */
    public function listRequest(){

        return new listRequestTPPublisherWebhookApi($this->apiClient);
    }
    /**
     * @return skipRequestTPPublisherWebhookApi
     */
    public function skipRequest(){

        return new skipRequestTPPublisherWebhookApi($this->apiClient);
    }
    /**
     * @return statusRequestTPPublisherWebhookApi
     */
    public function statusRequest(){

        return new statusRequestTPPublisherWebhookApi($this->apiClient);
    }

}

/**
 * Get webhook event types
 */
class eventsRequestTPPublisherWebhookApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return eventsRequestTPPublisherWebhookApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Execute request
     * @return string[]
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/webhook/events', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'string', 'array');
        
    }
}
/**
 * Get an event
 */
class getEventRequestTPPublisherWebhookApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Webhook id
     * @param string $webhookId
     * @return getEventRequestTPPublisherWebhookApi
     */
    public function webhookId($webhookId){
        $this->request['webhookId'] = $webhookId;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherWebhookEvent
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['webhookId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'webhookId' ) ] = $this->apiClient->toQueryValue($this->request['webhookId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/webhook/get', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherWebhookEvent');
        
    }
}
/**
 * Gets list of events
 */
class listRequestTPPublisherWebhookApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return listRequestTPPublisherWebhookApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Limit
     * @param int $limit
     * @return listRequestTPPublisherWebhookApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * Offset
     * @param int $offset
     * @return listRequestTPPublisherWebhookApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Order by
     * @param string $orderBy
     * @return listRequestTPPublisherWebhookApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    
    /**
     * Order direction
     * @param string $orderDirection
     * @return listRequestTPPublisherWebhookApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    
    /**
     * The status
     * @param string $status
     * @return listRequestTPPublisherWebhookApi
     */
    public function status($status){
        $this->request['status'] = $status;
        return $this;
    }
    
    /**
     * Search events by keyword
     * @param string $keyword
     * @return listRequestTPPublisherWebhookApi
     */
    public function keyword($keyword){
        $this->request['keyword'] = $keyword;
        return $this;
    }
    
    /**
     * Event type
     * @param string[] $eventType
     * @return listRequestTPPublisherWebhookApi
     */
    public function eventType($eventType){
        $this->request['eventType'] = $eventType;
        return $this;
    }
    
    /**
     * The type
     * @param string[] $type
     * @return listRequestTPPublisherWebhookApi
     */
    public function type($type){
        $this->request['type'] = $type;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherWebhookEvent[]
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['limit'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'limit' ) ] = $this->apiClient->toQueryValue($this->request['limit']);
        }
        
        if (isset($this->request['offset'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offset' ) ] = $this->apiClient->toQueryValue($this->request['offset']);
        }
        
        if (isset($this->request['orderBy'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderBy' ) ] = $this->apiClient->toQueryValue($this->request['orderBy']);
        }
        
        if (isset($this->request['orderDirection'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderDirection' ) ] = $this->apiClient->toQueryValue($this->request['orderDirection']);
        }
        
        if (isset($this->request['status'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'status' ) ] = $this->apiClient->toQueryValue($this->request['status']);
        }
        
        if (isset($this->request['keyword'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'keyword' ) ] = $this->apiClient->toQueryValue($this->request['keyword']);
        }
        
        if (isset($this->request['eventType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'eventType' ) ] = $this->apiClient->toQueryValue($this->request['eventType']);
        }
        
        if (isset($this->request['type'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'type' ) ] = $this->apiClient->toQueryValue($this->request['type']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/webhook/list', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherWebhookEvent', 'array');
        
    }
}
/**
 * Skips webhook
 */
class skipRequestTPPublisherWebhookApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Webhook id
     * @param string $webhookId
     * @return skipRequestTPPublisherWebhookApi
     */
    public function webhookId($webhookId){
        $this->request['webhookId'] = $webhookId;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherWebhookEvent
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['webhookId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'webhookId' ) ] = $this->apiClient->toQueryValue($this->request['webhookId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/webhook/skip', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherWebhookEvent');
        
    }
}
/**
 * Checks webhook status
 */
class statusRequestTPPublisherWebhookApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return statusRequestTPPublisherWebhookApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherWebhookStatus
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/webhook/status', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherWebhookStatus');
        
    }
}

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
 * The TPPublisherWebhookResponseApi class.
 */
class TPPublisherWebhookResponseApi  extends TPAPIBase {

    /**
     * @return getResponsesRequestTPPublisherWebhookResponseApi
     */
    public function getResponsesRequest(){

        return new getResponsesRequestTPPublisherWebhookResponseApi($this->apiClient);
    }
    /**
     * @return resendRequestTPPublisherWebhookResponseApi
     */
    public function resendRequest(){

        return new resendRequestTPPublisherWebhookResponseApi($this->apiClient);
    }

}

/**
 * Get responses for an event
 */
class getResponsesRequestTPPublisherWebhookResponseApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Webhook id
     * @param string $webhookId
     * @return getResponsesRequestTPPublisherWebhookResponseApi
     */
    public function webhookId($webhookId){
        $this->request['webhookId'] = $webhookId;
        return $this;
    }
    
    /**
     * Limit
     * @param int $limit
     * @return getResponsesRequestTPPublisherWebhookResponseApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * Offset
     * @param int $offset
     * @return getResponsesRequestTPPublisherWebhookResponseApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Order by
     * @param string $orderBy
     * @return getResponsesRequestTPPublisherWebhookResponseApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    
    /**
     * Order direction
     * @param string $orderDirection
     * @return getResponsesRequestTPPublisherWebhookResponseApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherWebhookResponse[]
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['webhookId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'webhookId' ) ] = $this->apiClient->toQueryValue($this->request['webhookId']);
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
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/webhook/response/list', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherWebhookResponse', 'array');
        
    }
}
/**
 * Resend an event
 */
class resendRequestTPPublisherWebhookResponseApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Webhook id
     * @param string $webhookId
     * @return resendRequestTPPublisherWebhookResponseApi
     */
    public function webhookId($webhookId){
        $this->request['webhookId'] = $webhookId;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherWebhookResponse
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
        $response = $this->apiClient->callAPI('/publisher/webhook/response/resend', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherWebhookResponse');
        
    }
}

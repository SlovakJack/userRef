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
 * The TPPublisherOfferApi class.
 */
class TPPublisherOfferApi  extends TPAPIBase {

    /**
     * @return countRequestTPPublisherOfferApi
     */
    public function countRequest(){

        return new countRequestTPPublisherOfferApi($this->apiClient);
    }
    /**
     * @return createRequestTPPublisherOfferApi
     */
    public function createRequest(){

        return new createRequestTPPublisherOfferApi($this->apiClient);
    }
    /**
     * @return deleteRequestTPPublisherOfferApi
     */
    public function deleteRequest(){

        return new deleteRequestTPPublisherOfferApi($this->apiClient);
    }
    /**
     * @return getRequestTPPublisherOfferApi
     */
    public function getRequest(){

        return new getRequestTPPublisherOfferApi($this->apiClient);
    }
    /**
     * @return listRequestTPPublisherOfferApi
     */
    public function listRequest(){

        return new listRequestTPPublisherOfferApi($this->apiClient);
    }
    /**
     * @return updateRequestTPPublisherOfferApi
     */
    public function updateRequest(){

        return new updateRequestTPPublisherOfferApi($this->apiClient);
    }

}

/**
 * Counts offers
 */
class countRequestTPPublisherOfferApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return countRequestTPPublisherOfferApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Execute request
     * @return int
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
        $response = $this->apiClient->callAPI('/publisher/offer/count', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'int');
        
    }
}
/**
 * Creates an offer
 */
class createRequestTPPublisherOfferApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return createRequestTPPublisherOfferApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * The offer name
     * @param string $name
     * @return createRequestTPPublisherOfferApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherOfferModel
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['name'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->apiClient->toQueryValue($this->request['name']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/create', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherOfferModel');
        
    }
}
/**
 * Deletes an offer
 */
class deleteRequestTPPublisherOfferApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * The offer ID
     * @param string $offerId
     * @return deleteRequestTPPublisherOfferApi
     */
    public function offerId($offerId){
        $this->request['offerId'] = $offerId;
        return $this;
    }
    
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['offerId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offerId' ) ] = $this->apiClient->toQueryValue($this->request['offerId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/delete', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
/**
 * Gets an offer
 */
class getRequestTPPublisherOfferApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * The offer ID
     * @param string $offerId
     * @return getRequestTPPublisherOfferApi
     */
    public function offerId($offerId){
        $this->request['offerId'] = $offerId;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherOfferModel
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['offerId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offerId' ) ] = $this->apiClient->toQueryValue($this->request['offerId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/get', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherOfferModel');
        
    }
}
/**
 * Lists offers
 */
class listRequestTPPublisherOfferApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return listRequestTPPublisherOfferApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listRequestTPPublisherOfferApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listRequestTPPublisherOfferApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return listRequestTPPublisherOfferApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * Field to order by
     * @param string $orderBy
     * @return listRequestTPPublisherOfferApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return listRequestTPPublisherOfferApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherOfferModel[]
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['offset'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offset' ) ] = $this->apiClient->toQueryValue($this->request['offset']);
        }
        
        if (isset($this->request['limit'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'limit' ) ] = $this->apiClient->toQueryValue($this->request['limit']);
        }
        
        if (isset($this->request['q'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'q' ) ] = $this->apiClient->toQueryValue($this->request['q']);
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
        $response = $this->apiClient->callAPI('/publisher/offer/list', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherOfferModel', 'array');
        
    }
}
/**
 * Updates an offer
 */
class updateRequestTPPublisherOfferApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * The offer ID
     * @param string $offerId
     * @return updateRequestTPPublisherOfferApi
     */
    public function offerId($offerId){
        $this->request['offerId'] = $offerId;
        return $this;
    }
    
    /**
     * Application aid
     * @param string $aid
     * @return updateRequestTPPublisherOfferApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * The offer name
     * @param string $name
     * @return updateRequestTPPublisherOfferApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherOfferModel
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['offerId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offerId' ) ] = $this->apiClient->toQueryValue($this->request['offerId']);
        }
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['name'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->apiClient->toQueryValue($this->request['name']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/update', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherOfferModel');
        
    }
}

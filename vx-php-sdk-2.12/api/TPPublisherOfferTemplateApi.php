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
 * The TPPublisherOfferTemplateApi class.
 */
class TPPublisherOfferTemplateApi  extends TPAPIBase {

    /**
     * @return countRequestTPPublisherOfferTemplateApi
     */
    public function countRequest(){

        return new countRequestTPPublisherOfferTemplateApi($this->apiClient);
    }
    /**
     * @return createRequestTPPublisherOfferTemplateApi
     */
    public function createRequest(){

        return new createRequestTPPublisherOfferTemplateApi($this->apiClient);
    }
    /**
     * @return deleteRequestTPPublisherOfferTemplateApi
     */
    public function deleteRequest(){

        return new deleteRequestTPPublisherOfferTemplateApi($this->apiClient);
    }
    /**
     * @return getRequestTPPublisherOfferTemplateApi
     */
    public function getRequest(){

        return new getRequestTPPublisherOfferTemplateApi($this->apiClient);
    }
    /**
     * @return listRequestTPPublisherOfferTemplateApi
     */
    public function listRequest(){

        return new listRequestTPPublisherOfferTemplateApi($this->apiClient);
    }
    /**
     * @return updateRequestTPPublisherOfferTemplateApi
     */
    public function updateRequest(){

        return new updateRequestTPPublisherOfferTemplateApi($this->apiClient);
    }

}

/**
 * Counts offer template
 */
class countRequestTPPublisherOfferTemplateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return countRequestTPPublisherOfferTemplateApi
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
        $response = $this->apiClient->callAPI('/publisher/offer/template/count', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'int');
        
    }
}
/**
 * Creates an offer template
 */
class createRequestTPPublisherOfferTemplateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return createRequestTPPublisherOfferTemplateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * The name
     * @param string $name
     * @return createRequestTPPublisherOfferTemplateApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    
    /**
     * The description
     * @param string $description
     * @return createRequestTPPublisherOfferTemplateApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherOfferTemplateVersion
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['name'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->apiClient->toQueryValue($this->request['name']);
        }
        
        if (isset($this->request['description'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->apiClient->toQueryValue($this->request['description']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/template/create', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherOfferTemplateVersion');
        
    }
}
/**
 * Delete offer template
 */
class deleteRequestTPPublisherOfferTemplateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return deleteRequestTPPublisherOfferTemplateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offer Template ID
     * @param string $offerTemplateId
     * @return deleteRequestTPPublisherOfferTemplateApi
     */
    public function offerTemplateId($offerTemplateId){
        $this->request['offerTemplateId'] = $offerTemplateId;
        return $this;
    }
    
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['offerTemplateId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offerTemplateId' ) ] = $this->apiClient->toQueryValue($this->request['offerTemplateId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/template/delete', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
/**
 * Gets an offer template
 */
class getRequestTPPublisherOfferTemplateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return getRequestTPPublisherOfferTemplateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offer Template ID
     * @param string $offerTemplateId
     * @return getRequestTPPublisherOfferTemplateApi
     */
    public function offerTemplateId($offerTemplateId){
        $this->request['offerTemplateId'] = $offerTemplateId;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherOfferTemplateVersion
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['offerTemplateId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offerTemplateId' ) ] = $this->apiClient->toQueryValue($this->request['offerTemplateId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/template/get', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherOfferTemplateVersion');
        
    }
}
/**
 * Lists offer templates
 */
class listRequestTPPublisherOfferTemplateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return listRequestTPPublisherOfferTemplateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listRequestTPPublisherOfferTemplateApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listRequestTPPublisherOfferTemplateApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return listRequestTPPublisherOfferTemplateApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * Field to order by
     * @param string $orderBy
     * @return listRequestTPPublisherOfferTemplateApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return listRequestTPPublisherOfferTemplateApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherOfferTemplate[]
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
        $response = $this->apiClient->callAPI('/publisher/offer/template/list', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherOfferTemplate', 'array');
        
    }
}
/**
 * Updates an offer template
 */
class updateRequestTPPublisherOfferTemplateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return updateRequestTPPublisherOfferTemplateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offer Template ID
     * @param string $offerTemplateId
     * @return updateRequestTPPublisherOfferTemplateApi
     */
    public function offerTemplateId($offerTemplateId){
        $this->request['offerTemplateId'] = $offerTemplateId;
        return $this;
    }
    
    /**
     * The name
     * @param string $name
     * @return updateRequestTPPublisherOfferTemplateApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    
    /**
     * The description
     * @param string $description
     * @return updateRequestTPPublisherOfferTemplateApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherOfferTemplateVersion
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['offerTemplateId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offerTemplateId' ) ] = $this->apiClient->toQueryValue($this->request['offerTemplateId']);
        }
        
        if (isset($this->request['name'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->apiClient->toQueryValue($this->request['name']);
        }
        
        if (isset($this->request['description'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->apiClient->toQueryValue($this->request['description']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/template/update', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherOfferTemplateVersion');
        
    }
}

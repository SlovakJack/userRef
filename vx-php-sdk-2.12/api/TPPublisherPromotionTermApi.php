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
 * The TPPublisherPromotionTermApi class.
 */
class TPPublisherPromotionTermApi  extends TPAPIBase {

    /**
     * @return addTermRequestTPPublisherPromotionTermApi
     */
    public function addTermRequest(){

        return new addTermRequestTPPublisherPromotionTermApi($this->apiClient);
    }
    /**
     * @return deleteTermsRequestTPPublisherPromotionTermApi
     */
    public function deleteTermsRequest(){

        return new deleteTermsRequestTPPublisherPromotionTermApi($this->apiClient);
    }
    /**
     * @return termListRequestTPPublisherPromotionTermApi
     */
    public function termListRequest(){

        return new termListRequestTPPublisherPromotionTermApi($this->apiClient);
    }

}

/**
 * Adds a term to a promotion
 */
class addTermRequestTPPublisherPromotionTermApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Term ID
     * @param string $termId
     * @return addTermRequestTPPublisherPromotionTermApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    
    /**
     * Promotion id
     * @param string $promotionId
     * @return addTermRequestTPPublisherPromotionTermApi
     */
    public function promotionId($promotionId){
        $this->request['promotionId'] = $promotionId;
        return $this;
    }
    
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['termId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->apiClient->toQueryValue($this->request['termId']);
        }
        
        if (isset($this->request['promotionId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'promotionId' ) ] = $this->apiClient->toQueryValue($this->request['promotionId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/promotion/term/add', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
/**
 * Deletes a term from a promotion
 */
class deleteTermsRequestTPPublisherPromotionTermApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Term ID
     * @param string $termId
     * @return deleteTermsRequestTPPublisherPromotionTermApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    
    /**
     * Promotion id
     * @param string $promotionId
     * @return deleteTermsRequestTPPublisherPromotionTermApi
     */
    public function promotionId($promotionId){
        $this->request['promotionId'] = $promotionId;
        return $this;
    }
    
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['termId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->apiClient->toQueryValue($this->request['termId']);
        }
        
        if (isset($this->request['promotionId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'promotionId' ) ] = $this->apiClient->toQueryValue($this->request['promotionId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/promotion/term/delete', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
/**
 * Lists terms assigned to promotion
 */
class termListRequestTPPublisherPromotionTermApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Promotion id
     * @param string $promotionId
     * @return termListRequestTPPublisherPromotionTermApi
     */
    public function promotionId($promotionId){
        $this->request['promotionId'] = $promotionId;
        return $this;
    }
    
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return termListRequestTPPublisherPromotionTermApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return termListRequestTPPublisherPromotionTermApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return termListRequestTPPublisherPromotionTermApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * Field to order by
     * @param string $orderBy
     * @return termListRequestTPPublisherPromotionTermApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return termListRequestTPPublisherPromotionTermApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherTerm[]
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['promotionId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'promotionId' ) ] = $this->apiClient->toQueryValue($this->request['promotionId']);
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
        $response = $this->apiClient->callAPI('/publisher/promotion/term/list', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherTerm', 'array');
        
    }
}

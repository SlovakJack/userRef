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
 * The TPPublisherTermCustomApi class.
 */
class TPPublisherTermCustomApi  extends TPAPIBase {

    /**
     * @return createCustomTermRequestTPPublisherTermCustomApi
     */
    public function createCustomTermRequest(){

        return new createCustomTermRequestTPPublisherTermCustomApi($this->apiClient);
    }
    /**
     * @return updateCustomTermRequestTPPublisherTermCustomApi
     */
    public function updateCustomTermRequest(){

        return new updateCustomTermRequestTPPublisherTermCustomApi($this->apiClient);
    }

}

/**
 * Creates a custom term
 */
class createCustomTermRequestTPPublisherTermCustomApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return createCustomTermRequestTPPublisherTermCustomApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Unique id for resource
     * @param string $rid
     * @return createCustomTermRequestTPPublisherTermCustomApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    
    /**
     * Term name
     * @param string $name
     * @return createCustomTermRequestTPPublisherTermCustomApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    
    /**
     * Whether a valid user is required to complete the term
     * @param bool $customRequireUser
     * @return createCustomTermRequestTPPublisherTermCustomApi
     */
    public function customRequireUser($customRequireUser){
        $this->request['customRequireUser'] = $customRequireUser;
        return $this;
    }
    
    /**
     * The default access period
     * @param int $customDefaultAccessPeriod
     * @return createCustomTermRequestTPPublisherTermCustomApi
     */
    public function customDefaultAccessPeriod($customDefaultAccessPeriod){
        $this->request['customDefaultAccessPeriod'] = $customDefaultAccessPeriod;
        return $this;
    }
    
    /**
     * Term description
     * @param string $description
     * @return createCustomTermRequestTPPublisherTermCustomApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherTerm
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['rid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->apiClient->toQueryValue($this->request['rid']);
        }
        
        if (isset($this->request['name'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->apiClient->toQueryValue($this->request['name']);
        }
        
        if (isset($this->request['customRequireUser'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'customRequireUser' ) ] = $this->apiClient->toQueryValue($this->request['customRequireUser']);
        }
        
        if (isset($this->request['customDefaultAccessPeriod'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'customDefaultAccessPeriod' ) ] = $this->apiClient->toQueryValue($this->request['customDefaultAccessPeriod']);
        }
        
        if (isset($this->request['description'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->apiClient->toQueryValue($this->request['description']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/custom/create', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherTerm');
        
    }
}
/**
 * Updates a custom term
 */
class updateCustomTermRequestTPPublisherTermCustomApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Term ID
     * @param string $termId
     * @return updateCustomTermRequestTPPublisherTermCustomApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    
    /**
     * Unique id for resource
     * @param string $rid
     * @return updateCustomTermRequestTPPublisherTermCustomApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    
    /**
     * Term name
     * @param string $name
     * @return updateCustomTermRequestTPPublisherTermCustomApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    
    /**
     * Whether a valid user is required to complete the term
     * @param bool $customRequireUser
     * @return updateCustomTermRequestTPPublisherTermCustomApi
     */
    public function customRequireUser($customRequireUser){
        $this->request['customRequireUser'] = $customRequireUser;
        return $this;
    }
    
    /**
     * The default access period
     * @param int $customDefaultAccessPeriod
     * @return updateCustomTermRequestTPPublisherTermCustomApi
     */
    public function customDefaultAccessPeriod($customDefaultAccessPeriod){
        $this->request['customDefaultAccessPeriod'] = $customDefaultAccessPeriod;
        return $this;
    }
    
    /**
     * Term description
     * @param string $description
     * @return updateCustomTermRequestTPPublisherTermCustomApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherTerm
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['termId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->apiClient->toQueryValue($this->request['termId']);
        }
        
        if (isset($this->request['rid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->apiClient->toQueryValue($this->request['rid']);
        }
        
        if (isset($this->request['name'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->apiClient->toQueryValue($this->request['name']);
        }
        
        if (isset($this->request['customRequireUser'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'customRequireUser' ) ] = $this->apiClient->toQueryValue($this->request['customRequireUser']);
        }
        
        if (isset($this->request['customDefaultAccessPeriod'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'customDefaultAccessPeriod' ) ] = $this->apiClient->toQueryValue($this->request['customDefaultAccessPeriod']);
        }
        
        if (isset($this->request['description'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->apiClient->toQueryValue($this->request['description']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/custom/update', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherTerm');
        
    }
}

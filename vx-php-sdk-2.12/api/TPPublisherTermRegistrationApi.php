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
 * The TPPublisherTermRegistrationApi class.
 */
class TPPublisherTermRegistrationApi  extends TPAPIBase {

    /**
     * @return createRegistrationTermRequestTPPublisherTermRegistrationApi
     */
    public function createRegistrationTermRequest(){

        return new createRegistrationTermRequestTPPublisherTermRegistrationApi($this->apiClient);
    }
    /**
     * @return updateRegistrationTermRequestTPPublisherTermRegistrationApi
     */
    public function updateRegistrationTermRequest(){

        return new updateRegistrationTermRequestTPPublisherTermRegistrationApi($this->apiClient);
    }

}

/**
 * Creates an registration term
 */
class createRegistrationTermRequestTPPublisherTermRegistrationApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return createRegistrationTermRequestTPPublisherTermRegistrationApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Unique id for resource
     * @param string $rid
     * @return createRegistrationTermRequestTPPublisherTermRegistrationApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    
    /**
     * Term name
     * @param string $name
     * @return createRegistrationTermRequestTPPublisherTermRegistrationApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    
    /**
     * Term description
     * @param string $description
     * @return createRegistrationTermRequestTPPublisherTermRegistrationApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    
    /**
     * The access time period 
     * @param int $registrationAccessPeriod
     * @return createRegistrationTermRequestTPPublisherTermRegistrationApi
     */
    public function registrationAccessPeriod($registrationAccessPeriod){
        $this->request['registrationAccessPeriod'] = $registrationAccessPeriod;
        return $this;
    }
    
    /**
     * The time period after registration that will count it as a valid registration conversion
     * @param int $registrationGracePeriod
     * @return createRegistrationTermRequestTPPublisherTermRegistrationApi
     */
    public function registrationGracePeriod($registrationGracePeriod){
        $this->request['registrationGracePeriod'] = $registrationGracePeriod;
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
        
        if (isset($this->request['description'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->apiClient->toQueryValue($this->request['description']);
        }
        
        if (isset($this->request['registrationAccessPeriod'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'registrationAccessPeriod' ) ] = $this->apiClient->toQueryValue($this->request['registrationAccessPeriod']);
        }
        
        if (isset($this->request['registrationGracePeriod'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'registrationGracePeriod' ) ] = $this->apiClient->toQueryValue($this->request['registrationGracePeriod']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/registration/create', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherTerm');
        
    }
}
/**
 * Updates a registration term
 */
class updateRegistrationTermRequestTPPublisherTermRegistrationApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Term ID
     * @param string $termId
     * @return updateRegistrationTermRequestTPPublisherTermRegistrationApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    
    /**
     * Unique id for resource
     * @param string $rid
     * @return updateRegistrationTermRequestTPPublisherTermRegistrationApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    
    /**
     * Term name
     * @param string $name
     * @return updateRegistrationTermRequestTPPublisherTermRegistrationApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    
    /**
     * Term description
     * @param string $description
     * @return updateRegistrationTermRequestTPPublisherTermRegistrationApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    
    /**
     * The access time period 
     * @param int $registrationAccessPeriod
     * @return updateRegistrationTermRequestTPPublisherTermRegistrationApi
     */
    public function registrationAccessPeriod($registrationAccessPeriod){
        $this->request['registrationAccessPeriod'] = $registrationAccessPeriod;
        return $this;
    }
    
    /**
     * The time period after registration that will count it as a valid registration conversion
     * @param int $registrationGracePeriod
     * @return updateRegistrationTermRequestTPPublisherTermRegistrationApi
     */
    public function registrationGracePeriod($registrationGracePeriod){
        $this->request['registrationGracePeriod'] = $registrationGracePeriod;
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
        
        if (isset($this->request['description'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->apiClient->toQueryValue($this->request['description']);
        }
        
        if (isset($this->request['registrationAccessPeriod'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'registrationAccessPeriod' ) ] = $this->apiClient->toQueryValue($this->request['registrationAccessPeriod']);
        }
        
        if (isset($this->request['registrationGracePeriod'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'registrationGracePeriod' ) ] = $this->apiClient->toQueryValue($this->request['registrationGracePeriod']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/registration/update', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherTerm');
        
    }
}

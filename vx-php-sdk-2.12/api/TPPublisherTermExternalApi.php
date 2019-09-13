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
 * The TPPublisherTermExternalApi class.
 */
class TPPublisherTermExternalApi  extends TPAPIBase {

    /**
     * @return createExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function createExternalVerificationTermRequest(){

        return new createExternalVerificationTermRequestTPPublisherTermExternalApi($this->apiClient);
    }
    /**
     * @return updateExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function updateExternalVerificationTermRequest(){

        return new updateExternalVerificationTermRequestTPPublisherTermExternalApi($this->apiClient);
    }

}

/**
 * Creates an external verified term
 */
class createExternalVerificationTermRequestTPPublisherTermExternalApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return createExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Unique id for resource
     * @param string $rid
     * @return createExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    
    /**
     * External API Configuration ID
     * @param string $externalApiId
     * @return createExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function externalApiId($externalApiId){
        $this->request['externalApiId'] = $externalApiId;
        return $this;
    }
    
    /**
     * Term name
     * @param string $name
     * @return createExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    
    /**
     * Term description
     * @param string $description
     * @return createExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    
    /**
     * Period to grant access for in days
     * @param int $evtFixedTimeAccessPeriod
     * @return createExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function evtFixedTimeAccessPeriod($evtFixedTimeAccessPeriod){
        $this->request['evtFixedTimeAccessPeriod'] = $evtFixedTimeAccessPeriod;
        return $this;
    }
    
    /**
     * External API grace period
     * @param int $evtGracePeriod
     * @return createExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function evtGracePeriod($evtGracePeriod){
        $this->request['evtGracePeriod'] = $evtGracePeriod;
        return $this;
    }
    
    /**
     * External verification period
     * @param int $evtVerificationPeriod
     * @return createExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function evtVerificationPeriod($evtVerificationPeriod){
        $this->request['evtVerificationPeriod'] = $evtVerificationPeriod;
        return $this;
    }
    
    /**
     * iTunes bundle id
     * @param string $evtItunesBundleId
     * @return createExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function evtItunesBundleId($evtItunesBundleId){
        $this->request['evtItunesBundleId'] = $evtItunesBundleId;
        return $this;
    }
    
    /**
     * iTunes  product id
     * @param string $evtItunesProductId
     * @return createExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function evtItunesProductId($evtItunesProductId){
        $this->request['evtItunesProductId'] = $evtItunesProductId;
        return $this;
    }
    
    /**
     * Google Play product id
     * @param string $evtGooglePlayProductId
     * @return createExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function evtGooglePlayProductId($evtGooglePlayProductId){
        $this->request['evtGooglePlayProductId'] = $evtGooglePlayProductId;
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
        
        if (isset($this->request['externalApiId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'externalApiId' ) ] = $this->apiClient->toQueryValue($this->request['externalApiId']);
        }
        
        if (isset($this->request['name'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->apiClient->toQueryValue($this->request['name']);
        }
        
        if (isset($this->request['description'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->apiClient->toQueryValue($this->request['description']);
        }
        
        if (isset($this->request['evtFixedTimeAccessPeriod'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'evtFixedTimeAccessPeriod' ) ] = $this->apiClient->toQueryValue($this->request['evtFixedTimeAccessPeriod']);
        }
        
        if (isset($this->request['evtGracePeriod'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'evtGracePeriod' ) ] = $this->apiClient->toQueryValue($this->request['evtGracePeriod']);
        }
        
        if (isset($this->request['evtVerificationPeriod'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'evtVerificationPeriod' ) ] = $this->apiClient->toQueryValue($this->request['evtVerificationPeriod']);
        }
        
        if (isset($this->request['evtItunesBundleId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'evtItunesBundleId' ) ] = $this->apiClient->toQueryValue($this->request['evtItunesBundleId']);
        }
        
        if (isset($this->request['evtItunesProductId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'evtItunesProductId' ) ] = $this->apiClient->toQueryValue($this->request['evtItunesProductId']);
        }
        
        if (isset($this->request['evtGooglePlayProductId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'evtGooglePlayProductId' ) ] = $this->apiClient->toQueryValue($this->request['evtGooglePlayProductId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/external/create', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherTerm');
        
    }
}
/**
 * Updates an external verified term
 */
class updateExternalVerificationTermRequestTPPublisherTermExternalApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Term ID
     * @param string $termId
     * @return updateExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    
    /**
     * External API Configuration ID
     * @param string $externalApiId
     * @return updateExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function externalApiId($externalApiId){
        $this->request['externalApiId'] = $externalApiId;
        return $this;
    }
    
    /**
     * Term name
     * @param string $name
     * @return updateExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    
    /**
     * Unique id for resource
     * @param string $rid
     * @return updateExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    
    /**
     * Term description
     * @param string $description
     * @return updateExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    
    /**
     * Period to grant access for in days
     * @param int $evtFixedTimeAccessPeriod
     * @return updateExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function evtFixedTimeAccessPeriod($evtFixedTimeAccessPeriod){
        $this->request['evtFixedTimeAccessPeriod'] = $evtFixedTimeAccessPeriod;
        return $this;
    }
    
    /**
     * External API grace period
     * @param int $evtGracePeriod
     * @return updateExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function evtGracePeriod($evtGracePeriod){
        $this->request['evtGracePeriod'] = $evtGracePeriod;
        return $this;
    }
    
    /**
     * External verification period
     * @param int $evtVerificationPeriod
     * @return updateExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function evtVerificationPeriod($evtVerificationPeriod){
        $this->request['evtVerificationPeriod'] = $evtVerificationPeriod;
        return $this;
    }
    
    /**
     * iTunes bundle id
     * @param string $evtItunesBundleId
     * @return updateExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function evtItunesBundleId($evtItunesBundleId){
        $this->request['evtItunesBundleId'] = $evtItunesBundleId;
        return $this;
    }
    
    /**
     * iTunes  product id
     * @param string $evtItunesProductId
     * @return updateExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function evtItunesProductId($evtItunesProductId){
        $this->request['evtItunesProductId'] = $evtItunesProductId;
        return $this;
    }
    
    /**
     * Google Play product id
     * @param string $evtGooglePlayProductId
     * @return updateExternalVerificationTermRequestTPPublisherTermExternalApi
     */
    public function evtGooglePlayProductId($evtGooglePlayProductId){
        $this->request['evtGooglePlayProductId'] = $evtGooglePlayProductId;
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
        
        if (isset($this->request['externalApiId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'externalApiId' ) ] = $this->apiClient->toQueryValue($this->request['externalApiId']);
        }
        
        if (isset($this->request['name'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->apiClient->toQueryValue($this->request['name']);
        }
        
        if (isset($this->request['rid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->apiClient->toQueryValue($this->request['rid']);
        }
        
        if (isset($this->request['description'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->apiClient->toQueryValue($this->request['description']);
        }
        
        if (isset($this->request['evtFixedTimeAccessPeriod'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'evtFixedTimeAccessPeriod' ) ] = $this->apiClient->toQueryValue($this->request['evtFixedTimeAccessPeriod']);
        }
        
        if (isset($this->request['evtGracePeriod'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'evtGracePeriod' ) ] = $this->apiClient->toQueryValue($this->request['evtGracePeriod']);
        }
        
        if (isset($this->request['evtVerificationPeriod'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'evtVerificationPeriod' ) ] = $this->apiClient->toQueryValue($this->request['evtVerificationPeriod']);
        }
        
        if (isset($this->request['evtItunesBundleId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'evtItunesBundleId' ) ] = $this->apiClient->toQueryValue($this->request['evtItunesBundleId']);
        }
        
        if (isset($this->request['evtItunesProductId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'evtItunesProductId' ) ] = $this->apiClient->toQueryValue($this->request['evtItunesProductId']);
        }
        
        if (isset($this->request['evtGooglePlayProductId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'evtGooglePlayProductId' ) ] = $this->apiClient->toQueryValue($this->request['evtGooglePlayProductId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/external/update', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherTerm');
        
    }
}

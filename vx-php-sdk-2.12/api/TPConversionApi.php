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
 * The TPConversionApi class.
 */
class TPConversionApi  extends TPAPIBase {

    /**
     * @return listRequestTPConversionApi
     */
    public function listRequest(){

        return new listRequestTPConversionApi($this->apiClient);
    }
    /**
     * @return logConversionRequestTPConversionApi
     */
    public function logConversionRequest(){

        return new logConversionRequestTPConversionApi($this->apiClient);
    }
    /**
     * @return logFunnelStepRequestTPConversionApi
     */
    public function logFunnelStepRequest(){

        return new logFunnelStepRequestTPConversionApi($this->apiClient);
    }
    /**
     * @return logMicroConversionRequestTPConversionApi
     */
    public function logMicroConversionRequest(){

        return new logMicroConversionRequestTPConversionApi($this->apiClient);
    }

}

/**
 * Returns the list of term conversions for user
 */
class listRequestTPConversionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return listRequestTPConversionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listRequestTPConversionApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listRequestTPConversionApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * User token
     * @param string $userToken
     * @return listRequestTPConversionApi
     */
    public function userToken($userToken){
        $this->request['userToken'] = $userToken;
        return $this;
    }
    
    /**
     * User token provider
     * @param string $userProvider
     * @return listRequestTPConversionApi
     */
    public function userProvider($userProvider){
        $this->request['userProvider'] = $userProvider;
        return $this;
    }
    
    /**
     * Encrypted user reference
     * @param string $userRef
     * @return listRequestTPConversionApi
     */
    public function userRef($userRef){
        $this->request['userRef'] = $userRef;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return listRequestTPConversionApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPAnonTermConversion[]
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
        
        if (isset($this->request['userToken'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'userToken' ) ] = $this->apiClient->toQueryValue($this->request['userToken']);
        }
        
        if (isset($this->request['userProvider'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'userProvider' ) ] = $this->apiClient->toQueryValue($this->request['userProvider']);
        }
        
        if (isset($this->request['userRef'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'userRef' ) ] = $this->apiClient->toQueryValue($this->request['userRef']);
        }
        
        if (isset($this->request['q'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'q' ) ] = $this->apiClient->toQueryValue($this->request['q']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/conversion/list', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPAnonTermConversion', 'array');
        
    }
}
/**
 * Log third party conversion
 */
class logConversionRequestTPConversionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Conversion tracking id
     * @param string $trackingId
     * @return logConversionRequestTPConversionApi
     */
    public function trackingId($trackingId){
        $this->request['trackingId'] = $trackingId;
        return $this;
    }
    
    /**
     * Term ID
     * @param string $termId
     * @return logConversionRequestTPConversionApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    
    /**
     * Term name
     * @param string $termName
     * @return logConversionRequestTPConversionApi
     */
    public function termName($termName){
        $this->request['termName'] = $termName;
        return $this;
    }
    
    /**
     * Checkout step number
     * @param int $stepNumber
     * @return logConversionRequestTPConversionApi
     */
    public function stepNumber($stepNumber){
        $this->request['stepNumber'] = $stepNumber;
        return $this;
    }
    
    /**
     * Conversion category
     * @param string $conversionCategory
     * @return logConversionRequestTPConversionApi
     */
    public function conversionCategory($conversionCategory){
        $this->request['conversionCategory'] = $conversionCategory;
        return $this;
    }
    
    /**
     * Conversion amount
     * @param Number $amount
     * @return logConversionRequestTPConversionApi
     */
    public function amount($amount){
        $this->request['amount'] = $amount;
        return $this;
    }
    
    /**
     * Conversion currency by ISO 4217 standard
     * @param string $currency
     * @return logConversionRequestTPConversionApi
     */
    public function currency($currency){
        $this->request['currency'] = $currency;
        return $this;
    }
    
    /**
     * Custom parameters (any key-value pairs) to save (this value should be a valid JSON object)
     * @param string $customParams
     * @return logConversionRequestTPConversionApi
     */
    public function customParams($customParams){
        $this->request['customParams'] = $customParams;
        return $this;
    }
    
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['trackingId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'trackingId' ) ] = $this->apiClient->toQueryValue($this->request['trackingId']);
        }
        
        if (isset($this->request['termId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->apiClient->toQueryValue($this->request['termId']);
        }
        
        if (isset($this->request['termName'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'termName' ) ] = $this->apiClient->toQueryValue($this->request['termName']);
        }
        
        if (isset($this->request['stepNumber'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'stepNumber' ) ] = $this->apiClient->toQueryValue($this->request['stepNumber']);
        }
        
        if (isset($this->request['conversionCategory'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'conversionCategory' ) ] = $this->apiClient->toQueryValue($this->request['conversionCategory']);
        }
        
        if (isset($this->request['amount'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'amount' ) ] = $this->apiClient->toQueryValue($this->request['amount']);
        }
        
        if (isset($this->request['currency'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'currency' ) ] = $this->apiClient->toQueryValue($this->request['currency']);
        }
        
        if (isset($this->request['customParams'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'customParams' ) ] = $this->apiClient->toQueryValue($this->request['customParams']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/conversion/log', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
/**
 * Log funnel step
 */
class logFunnelStepRequestTPConversionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Conversion tracking id
     * @param string $trackingId
     * @return logFunnelStepRequestTPConversionApi
     */
    public function trackingId($trackingId){
        $this->request['trackingId'] = $trackingId;
        return $this;
    }
    
    /**
     * Checkout step number
     * @param int $stepNumber
     * @return logFunnelStepRequestTPConversionApi
     */
    public function stepNumber($stepNumber){
        $this->request['stepNumber'] = $stepNumber;
        return $this;
    }
    
    /**
     * Checkout step name
     * @param string $stepName
     * @return logFunnelStepRequestTPConversionApi
     */
    public function stepName($stepName){
        $this->request['stepName'] = $stepName;
        return $this;
    }
    
    /**
     * Custom parameters (any key-value pairs) to save (this value should be a valid JSON object)
     * @param string $customParams
     * @return logFunnelStepRequestTPConversionApi
     */
    public function customParams($customParams){
        $this->request['customParams'] = $customParams;
        return $this;
    }
    
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['trackingId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'trackingId' ) ] = $this->apiClient->toQueryValue($this->request['trackingId']);
        }
        
        if (isset($this->request['stepNumber'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'stepNumber' ) ] = $this->apiClient->toQueryValue($this->request['stepNumber']);
        }
        
        if (isset($this->request['stepName'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'stepName' ) ] = $this->apiClient->toQueryValue($this->request['stepName']);
        }
        
        if (isset($this->request['customParams'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'customParams' ) ] = $this->apiClient->toQueryValue($this->request['customParams']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/conversion/logFunnelStep', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
/**
 * Log micro conversion
 */
class logMicroConversionRequestTPConversionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Conversion tracking id
     * @param string $trackingId
     * @return logMicroConversionRequestTPConversionApi
     */
    public function trackingId($trackingId){
        $this->request['trackingId'] = $trackingId;
        return $this;
    }
    
    /**
     * Event group
     * @param string $eventGroupId
     * @return logMicroConversionRequestTPConversionApi
     */
    public function eventGroupId($eventGroupId){
        $this->request['eventGroupId'] = $eventGroupId;
        return $this;
    }
    
    /**
     * Custom parameters (any key-value pairs) to save (this value should be a valid JSON object)
     * @param string $customParams
     * @return logMicroConversionRequestTPConversionApi
     */
    public function customParams($customParams){
        $this->request['customParams'] = $customParams;
        return $this;
    }
    
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['trackingId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'trackingId' ) ] = $this->apiClient->toQueryValue($this->request['trackingId']);
        }
        
        if (isset($this->request['eventGroupId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'eventGroupId' ) ] = $this->apiClient->toQueryValue($this->request['eventGroupId']);
        }
        
        if (isset($this->request['customParams'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'customParams' ) ] = $this->apiClient->toQueryValue($this->request['customParams']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/conversion/logMicroConversion', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}

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
 * The TPPublisherConversionApi class.
 */
class TPPublisherConversionApi  extends TPAPIBase {

    /**
     * @return countRequestTPPublisherConversionApi
     */
    public function countRequest(){

        return new countRequestTPPublisherConversionApi($this->apiClient);
    }
    /**
     * @return getLastRequestTPPublisherConversionApi
     */
    public function getLastRequest(){

        return new getLastRequestTPPublisherConversionApi($this->apiClient);
    }
    /**
     * @return getRequestTPPublisherConversionApi
     */
    public function getRequest(){

        return new getRequestTPPublisherConversionApi($this->apiClient);
    }
    /**
     * @return listAccessRequestTPPublisherConversionApi
     */
    public function listAccessRequest(){

        return new listAccessRequestTPPublisherConversionApi($this->apiClient);
    }
    /**
     * @return listRequestTPPublisherConversionApi
     */
    public function listRequest(){

        return new listRequestTPPublisherConversionApi($this->apiClient);
    }
    /**
     * @return logConversionRequestTPPublisherConversionApi
     */
    public function logConversionRequest(){

        return new logConversionRequestTPPublisherConversionApi($this->apiClient);
    }

}

/**
 * Counts conversions
 */
class countRequestTPPublisherConversionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return countRequestTPPublisherConversionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return countRequestTPPublisherConversionApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return countRequestTPPublisherConversionApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return countRequestTPPublisherConversionApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * Field to order by: term_name, resource_type, resource_name
     * @param string $orderBy
     * @return countRequestTPPublisherConversionApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return countRequestTPPublisherConversionApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    
    /**
     * Type of terms to include into the list
     * @param string[] $includeType
     * @return countRequestTPPublisherConversionApi
     */
    public function includeType($includeType){
        $this->request['includeType'] = $includeType;
        return $this;
    }
    
    /**
     * Type of terms to exclude from the list
     * @param string[] $excludeType
     * @return countRequestTPPublisherConversionApi
     */
    public function excludeType($excludeType){
        $this->request['excludeType'] = $excludeType;
        return $this;
    }
    
    /**
     * Term id to list
     * @param string $termId
     * @return countRequestTPPublisherConversionApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    
    /**
     * Type of resource
     * @param string $resourceType
     * @return countRequestTPPublisherConversionApi
     */
    public function resourceType($resourceType){
        $this->request['resourceType'] = $resourceType;
        return $this;
    }
    
    /**
     * Type of external API source
     * @param string[] $source
     * @return countRequestTPPublisherConversionApi
     */
    public function source($source){
        $this->request['source'] = $source;
        return $this;
    }
    
    /**
     * Type of term to list
     * @param string $type
     * @return countRequestTPPublisherConversionApi
     */
    public function type($type){
        $this->request['type'] = $type;
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
        
        if (isset($this->request['includeType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'includeType' ) ] = $this->apiClient->toQueryValue($this->request['includeType']);
        }
        
        if (isset($this->request['excludeType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'excludeType' ) ] = $this->apiClient->toQueryValue($this->request['excludeType']);
        }
        
        if (isset($this->request['termId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->apiClient->toQueryValue($this->request['termId']);
        }
        
        if (isset($this->request['resourceType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'resourceType' ) ] = $this->apiClient->toQueryValue($this->request['resourceType']);
        }
        
        if (isset($this->request['source'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'source' ) ] = $this->apiClient->toQueryValue($this->request['source']);
        }
        
        if (isset($this->request['type'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'type' ) ] = $this->apiClient->toQueryValue($this->request['type']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/conversion/count', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'int');
        
    }
}
/**
 * Last access
 */
class getLastRequestTPPublisherConversionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return getLastRequestTPPublisherConversionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Unique id for resource
     * @param string $rid
     * @return getLastRequestTPPublisherConversionApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    
    /**
     * User&#39;s uid
     * @param string $uid
     * @return getLastRequestTPPublisherConversionApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    
    /**
     * User subscription id
     * @param string $subscriptionId
     * @return getLastRequestTPPublisherConversionApi
     */
    public function subscriptionId($subscriptionId){
        $this->request['subscriptionId'] = $subscriptionId;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherTermConversion
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['rid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->apiClient->toQueryValue($this->request['rid']);
        }
        
        if (isset($this->request['uid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->apiClient->toQueryValue($this->request['uid']);
        }
        
        if (isset($this->request['subscriptionId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'subscriptionId' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/conversion/lastAccess', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherTermConversion');
        
    }
}
/**
 * Get a conversion
 */
class getRequestTPPublisherConversionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return getRequestTPPublisherConversionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Term conversion id
     * @param string $termConversionId
     * @return getRequestTPPublisherConversionApi
     */
    public function termConversionId($termConversionId){
        $this->request['termConversionId'] = $termConversionId;
        return $this;
    }
    
    /**
     * The access id
     * @param string $accessId
     * @return getRequestTPPublisherConversionApi
     */
    public function accessId($accessId){
        $this->request['accessId'] = $accessId;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherTermConversion
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['termConversionId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'termConversionId' ) ] = $this->apiClient->toQueryValue($this->request['termConversionId']);
        }
        
        if (isset($this->request['accessId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'accessId' ) ] = $this->apiClient->toQueryValue($this->request['accessId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/conversion/get', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherTermConversion');
        
    }
}
/**
 * Lists conversions. Deprecated - use &#39;list&#39;
 */
class listAccessRequestTPPublisherConversionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return listAccessRequestTPPublisherConversionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listAccessRequestTPPublisherConversionApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listAccessRequestTPPublisherConversionApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return listAccessRequestTPPublisherConversionApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherTermConversion[]
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
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/conversion/access', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherTermConversion', 'array');
        
    }
}
/**
 * Lists conversions for an app
 */
class listRequestTPPublisherConversionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return listRequestTPPublisherConversionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listRequestTPPublisherConversionApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listRequestTPPublisherConversionApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * User&#39;s uid
     * @param string $uid
     * @return listRequestTPPublisherConversionApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return listRequestTPPublisherConversionApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherTermConversion[]
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
        
        if (isset($this->request['uid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->apiClient->toQueryValue($this->request['uid']);
        }
        
        if (isset($this->request['q'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'q' ) ] = $this->apiClient->toQueryValue($this->request['q']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/conversion/list', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherTermConversion', 'array');
        
    }
}
/**
 * Log third party conversion
 */
class logConversionRequestTPPublisherConversionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Conversion tracking id
     * @param string $trackingId
     * @return logConversionRequestTPPublisherConversionApi
     */
    public function trackingId($trackingId){
        $this->request['trackingId'] = $trackingId;
        return $this;
    }
    
    /**
     * Term ID
     * @param string $termId
     * @return logConversionRequestTPPublisherConversionApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    
    /**
     * Term name
     * @param string $termName
     * @return logConversionRequestTPPublisherConversionApi
     */
    public function termName($termName){
        $this->request['termName'] = $termName;
        return $this;
    }
    
    /**
     * Checkout step number
     * @param int $stepNumber
     * @return logConversionRequestTPPublisherConversionApi
     */
    public function stepNumber($stepNumber){
        $this->request['stepNumber'] = $stepNumber;
        return $this;
    }
    
    /**
     * Conversion category
     * @param string $conversionCategory
     * @return logConversionRequestTPPublisherConversionApi
     */
    public function conversionCategory($conversionCategory){
        $this->request['conversionCategory'] = $conversionCategory;
        return $this;
    }
    
    /**
     * Conversion amount
     * @param Number $amount
     * @return logConversionRequestTPPublisherConversionApi
     */
    public function amount($amount){
        $this->request['amount'] = $amount;
        return $this;
    }
    
    /**
     * Conversion currency by ISO 4217 standard
     * @param string $currency
     * @return logConversionRequestTPPublisherConversionApi
     */
    public function currency($currency){
        $this->request['currency'] = $currency;
        return $this;
    }
    
    /**
     * Custom parameters (any key-value pairs) to save (this value should be a valid JSON object)
     * @param string $customParams
     * @return logConversionRequestTPPublisherConversionApi
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
        $response = $this->apiClient->callAPI('/publisher/conversion/log', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}

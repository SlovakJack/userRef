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
 * The TPPublisherConversionCustomApi class.
 */
class TPPublisherConversionCustomApi  extends TPAPIBase {

    /**
     * @return customCreateRequestTPPublisherConversionCustomApi
     */
    public function customCreateRequest(){

        return new customCreateRequestTPPublisherConversionCustomApi($this->apiClient);
    }

}

/**
 * Records a custom conversion
 */
class customCreateRequestTPPublisherConversionCustomApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return customCreateRequestTPPublisherConversionCustomApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Term ID
     * @param string $termId
     * @return customCreateRequestTPPublisherConversionCustomApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    
    /**
     * User&#39;s uid
     * @param string $uid
     * @return customCreateRequestTPPublisherConversionCustomApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    
    /**
     * The length of time to grant access for
     * @param int $accessPeriod
     * @return customCreateRequestTPPublisherConversionCustomApi
     */
    public function accessPeriod($accessPeriod){
        $this->request['accessPeriod'] = $accessPeriod;
        return $this;
    }
    
    /**
     * Flag that should be granted unlimited access
     * @param bool $unlimitedAccess
     * @return customCreateRequestTPPublisherConversionCustomApi
     */
    public function unlimitedAccess($unlimitedAccess){
        $this->request['unlimitedAccess'] = $unlimitedAccess;
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
        
        if (isset($this->request['termId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->apiClient->toQueryValue($this->request['termId']);
        }
        
        if (isset($this->request['uid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->apiClient->toQueryValue($this->request['uid']);
        }
        
        if (isset($this->request['accessPeriod'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'accessPeriod' ) ] = $this->apiClient->toQueryValue($this->request['accessPeriod']);
        }
        
        if (isset($this->request['unlimitedAccess'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'unlimitedAccess' ) ] = $this->apiClient->toQueryValue($this->request['unlimitedAccess']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/conversion/custom/create', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherTermConversion');
        
    }
}

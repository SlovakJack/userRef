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
 * The TPPublisherConversionExternalApi class.
 */
class TPPublisherConversionExternalApi  extends TPAPIBase {

    /**
     * @return externalVerificationCreateRequestTPPublisherConversionExternalApi
     */
    public function externalVerificationCreateRequest(){

        return new externalVerificationCreateRequestTPPublisherConversionExternalApi($this->apiClient);
    }

}

/**
 * Records an external conversion
 */
class externalVerificationCreateRequestTPPublisherConversionExternalApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return externalVerificationCreateRequestTPPublisherConversionExternalApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Term ID
     * @param string $termId
     * @return externalVerificationCreateRequestTPPublisherConversionExternalApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    
    /**
     * User&#39;s uid
     * @param string $uid
     * @return externalVerificationCreateRequestTPPublisherConversionExternalApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    
    /**
     * JSON object tht specify what fields have to be checked using external API
     * @param string $fields
     * @return externalVerificationCreateRequestTPPublisherConversionExternalApi
     */
    public function fields($fields){
        $this->request['fields'] = $fields;
        return $this;
    }
    
    /**
     * Check validity of passed values or use them forcely
     * @param bool $checkValidity
     * @return externalVerificationCreateRequestTPPublisherConversionExternalApi
     */
    public function checkValidity($checkValidity){
        $this->request['checkValidity'] = $checkValidity;
        return $this;
    }
    
    /**
     * access_to
     * @param string $accessTo
     * @return externalVerificationCreateRequestTPPublisherConversionExternalApi
     */
    public function accessTo($accessTo){
        $this->request['accessTo'] = $accessTo;
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
        
        if (isset($this->request['fields'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'fields' ) ] = $this->apiClient->toQueryValue($this->request['fields']);
        }
        
        if (isset($this->request['checkValidity'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'checkValidity' ) ] = $this->apiClient->toQueryValue($this->request['checkValidity']);
        }
        
        if (isset($this->request['accessTo'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'accessTo' ) ] = $this->apiClient->toQueryValue($this->request['accessTo']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/conversion/external/create', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherTermConversion');
        
    }
}

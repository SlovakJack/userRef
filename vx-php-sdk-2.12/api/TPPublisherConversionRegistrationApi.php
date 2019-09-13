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
 * The TPPublisherConversionRegistrationApi class.
 */
class TPPublisherConversionRegistrationApi  extends TPAPIBase {

    /**
     * @return createRegistrationConversionRequestTPPublisherConversionRegistrationApi
     */
    public function createRegistrationConversionRequest(){

        return new createRegistrationConversionRequestTPPublisherConversionRegistrationApi($this->apiClient);
    }

}

/**
 * Records a registration conversion
 */
class createRegistrationConversionRequestTPPublisherConversionRegistrationApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return createRegistrationConversionRequestTPPublisherConversionRegistrationApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * User&#39;s uid
     * @param string $uid
     * @return createRegistrationConversionRequestTPPublisherConversionRegistrationApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    
    /**
     * Term ID
     * @param string $termId
     * @return createRegistrationConversionRequestTPPublisherConversionRegistrationApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    
    /**
     * User&#39;s email address
     * @param string $email
     * @return createRegistrationConversionRequestTPPublisherConversionRegistrationApi
     */
    public function email($email){
        $this->request['email'] = $email;
        return $this;
    }
    
    /**
     * User&#39;s first name
     * @param string $firstName
     * @return createRegistrationConversionRequestTPPublisherConversionRegistrationApi
     */
    public function firstName($firstName){
        $this->request['firstName'] = $firstName;
        return $this;
    }
    
    /**
     * User&#39;s last name
     * @param string $lastName
     * @return createRegistrationConversionRequestTPPublisherConversionRegistrationApi
     */
    public function lastName($lastName){
        $this->request['lastName'] = $lastName;
        return $this;
    }
    
    /**
     * The creation date
     * @param string $createDate
     * @return createRegistrationConversionRequestTPPublisherConversionRegistrationApi
     */
    public function createDate($createDate){
        $this->request['createDate'] = $createDate;
        return $this;
    }
    
    /**
     * The Tinypass browser cookie (tbc)
     * @param string $tbc
     * @return createRegistrationConversionRequestTPPublisherConversionRegistrationApi
     */
    public function tbc($tbc){
        $this->request['tbc'] = $tbc;
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
        
        if (isset($this->request['uid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->apiClient->toQueryValue($this->request['uid']);
        }
        
        if (isset($this->request['termId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->apiClient->toQueryValue($this->request['termId']);
        }
        
        if (isset($this->request['email'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'email' ) ] = $this->apiClient->toQueryValue($this->request['email']);
        }
        
        if (isset($this->request['firstName'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'firstName' ) ] = $this->apiClient->toQueryValue($this->request['firstName']);
        }
        
        if (isset($this->request['lastName'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'lastName' ) ] = $this->apiClient->toQueryValue($this->request['lastName']);
        }
        
        if (isset($this->request['createDate'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'createDate' ) ] = $this->apiClient->toQueryValue($this->request['createDate']);
        }
        
        if (isset($this->request['tbc'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'tbc' ) ] = $this->apiClient->toQueryValue($this->request['tbc']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/conversion/registration/create', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherTermConversion');
        
    }
}

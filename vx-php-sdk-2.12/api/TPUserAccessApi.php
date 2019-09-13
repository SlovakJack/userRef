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
 * The TPUserAccessApi class.
 */
class TPUserAccessApi  extends TPAPIBase {

    /**
     * @return checkJWTRequestTPUserAccessApi
     */
    public function checkJWTRequest(){

        return new checkJWTRequestTPUserAccessApi($this->apiClient);
    }
    /**
     * @return getRequestTPUserAccessApi
     */
    public function getRequest(){

        return new getRequestTPUserAccessApi($this->apiClient);
    }
    /**
     * @return listRequestTPUserAccessApi
     */
    public function listRequest(){

        return new listRequestTPUserAccessApi($this->apiClient);
    }

}

/**
 * Returns the access details for aid and rid in JWS format
 */
class checkJWTRequestTPUserAccessApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return checkJWTRequestTPUserAccessApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Unique id for resource
     * @param string $rid
     * @return checkJWTRequestTPUserAccessApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    
    /**
     * Execute request
     * @return string
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['rid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->apiClient->toQueryValue($this->request['rid']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/user/access/check.jwt', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'string');
        
    }
}
/**
 * Gets access details for current user
 */
class getRequestTPUserAccessApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * The access id
     * @param string $accessId
     * @return getRequestTPUserAccessApi
     */
    public function accessId($accessId){
        $this->request['accessId'] = $accessId;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPUserAccess
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['accessId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'accessId' ) ] = $this->apiClient->toQueryValue($this->request['accessId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/user/access/get', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPUserAccess');
        
    }
}
/**
 * Query list of access for current user
 */
class listRequestTPUserAccessApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return listRequestTPUserAccessApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Expand bundled accesses
     * @param bool $expandBundled
     * @return listRequestTPUserAccessApi
     */
    public function expandBundled($expandBundled){
        $this->request['expandBundled'] = $expandBundled;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPUserAccess[]
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['expandBundled'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'expandBundled' ) ] = $this->apiClient->toQueryValue($this->request['expandBundled']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/user/access/list', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPUserAccess', 'array');
        
    }
}

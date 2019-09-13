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
 * The TPAccessTokenApi class.
 */
class TPAccessTokenApi  extends TPAPIBase {

    /**
     * @return tokenListRequestTPAccessTokenApi
     */
    public function tokenListRequest(){

        return new tokenListRequestTPAccessTokenApi($this->apiClient);
    }

}

/**
 * Returns the list of access tokens
 */
class tokenListRequestTPAccessTokenApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return tokenListRequestTPAccessTokenApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * User token
     * @param string $userToken
     * @return tokenListRequestTPAccessTokenApi
     */
    public function userToken($userToken){
        $this->request['userToken'] = $userToken;
        return $this;
    }
    
    /**
     * User token provider
     * @param string $userProvider
     * @return tokenListRequestTPAccessTokenApi
     */
    public function userProvider($userProvider){
        $this->request['userProvider'] = $userProvider;
        return $this;
    }
    
    /**
     * Encrypted user reference
     * @param string $userRef
     * @return tokenListRequestTPAccessTokenApi
     */
    public function userRef($userRef){
        $this->request['userRef'] = $userRef;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPAnonAccessTokenList
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
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
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/access/token/list', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPAnonAccessTokenList');
        
    }
}

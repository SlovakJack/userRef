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
 * The TPAnonUserApi class.
 */
class TPAnonUserApi  extends TPAPIBase {

    /**
     * @return getRequestTPAnonUserApi
     */
    public function getRequest(){

        return new getRequestTPAnonUserApi($this->apiClient);
    }

}

/**
 * Get an user
 */
class getRequestTPAnonUserApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return getRequestTPAnonUserApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * User token
     * @param string $userToken
     * @return getRequestTPAnonUserApi
     */
    public function userToken($userToken){
        $this->request['userToken'] = $userToken;
        return $this;
    }
    
    /**
     * User token provider
     * @param string $userProvider
     * @return getRequestTPAnonUserApi
     */
    public function userProvider($userProvider){
        $this->request['userProvider'] = $userProvider;
        return $this;
    }
    
    /**
     * Encrypted user reference
     * @param string $userRef
     * @return getRequestTPAnonUserApi
     */
    public function userRef($userRef){
        $this->request['userRef'] = $userRef;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPAnonUser
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
        $response = $this->apiClient->callAPI('/anon/user/get', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPAnonUser');
        
    }
}

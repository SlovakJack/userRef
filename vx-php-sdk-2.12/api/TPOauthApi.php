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
 * The TPOauthApi class.
 */
class TPOauthApi  extends TPAPIBase {

    /**
     * @return authTokenRequestTPOauthApi
     */
    public function authTokenRequest(){

        return new authTokenRequestTPOauthApi($this->apiClient);
    }

}

/**
 * OAuth 2.0 authorize
 */
class authTokenRequestTPOauthApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Client ID of OAuth authorize
     * @param string $clientId
     * @return authTokenRequestTPOauthApi
     */
    public function clientId($clientId){
        $this->request['clientId'] = $clientId;
        return $this;
    }
    
    /**
     * Client secret of OAuth authorize
     * @param string $clientSecret
     * @return authTokenRequestTPOauthApi
     */
    public function clientSecret($clientSecret){
        $this->request['clientSecret'] = $clientSecret;
        return $this;
    }
    
    /**
     * OAuth code of OAuth authorize
     * @param string $code
     * @return authTokenRequestTPOauthApi
     */
    public function code($code){
        $this->request['code'] = $code;
        return $this;
    }
    
    /**
     * OAuth refresh token of OAuth authorize
     * @param string $refreshToken
     * @return authTokenRequestTPOauthApi
     */
    public function refreshToken($refreshToken){
        $this->request['refreshToken'] = $refreshToken;
        return $this;
    }
    
    /**
     * Grant type of OAuth authorize
     * @param string $grantType
     * @return authTokenRequestTPOauthApi
     */
    public function grantType($grantType){
        $this->request['grantType'] = $grantType;
        return $this;
    }
    
    /**
     * Redirect URI of OAuth authorize
     * @param string $redirectUri
     * @return authTokenRequestTPOauthApi
     */
    public function redirectUri($redirectUri){
        $this->request['redirectUri'] = $redirectUri;
        return $this;
    }
    
    /**
     * Username
     * @param string $username
     * @return authTokenRequestTPOauthApi
     */
    public function username($username){
        $this->request['username'] = $username;
        return $this;
    }
    
    /**
     * Password
     * @param string $password
     * @return authTokenRequestTPOauthApi
     */
    public function password($password){
        $this->request['password'] = $password;
        return $this;
    }
    
    /**
     * State
     * @param string $state
     * @return authTokenRequestTPOauthApi
     */
    public function state($state){
        $this->request['state'] = $state;
        return $this;
    }
    
    /**
     * Device ID
     * @param string $deviceId
     * @return authTokenRequestTPOauthApi
     */
    public function deviceId($deviceId){
        $this->request['deviceId'] = $deviceId;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPAnonOAuthToken
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['clientId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'clientId' ) ] = $this->apiClient->toQueryValue($this->request['clientId']);
        }
        
        if (isset($this->request['clientSecret'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'clientSecret' ) ] = $this->apiClient->toQueryValue($this->request['clientSecret']);
        }
        
        if (isset($this->request['code'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'code' ) ] = $this->apiClient->toQueryValue($this->request['code']);
        }
        
        if (isset($this->request['refreshToken'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'refreshToken' ) ] = $this->apiClient->toQueryValue($this->request['refreshToken']);
        }
        
        if (isset($this->request['grantType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'grantType' ) ] = $this->apiClient->toQueryValue($this->request['grantType']);
        }
        
        if (isset($this->request['redirectUri'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'redirectUri' ) ] = $this->apiClient->toQueryValue($this->request['redirectUri']);
        }
        
        if (isset($this->request['username'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'username' ) ] = $this->apiClient->toQueryValue($this->request['username']);
        }
        
        if (isset($this->request['password'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'password' ) ] = $this->apiClient->toQueryValue($this->request['password']);
        }
        
        if (isset($this->request['state'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'state' ) ] = $this->apiClient->toQueryValue($this->request['state']);
        }
        
        if (isset($this->request['deviceId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'deviceId' ) ] = $this->apiClient->toQueryValue($this->request['deviceId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/oauth/authToken', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPAnonOAuthToken');
        
    }
}

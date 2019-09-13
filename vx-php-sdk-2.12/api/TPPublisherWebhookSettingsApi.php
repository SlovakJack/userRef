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
 * The TPPublisherWebhookSettingsApi class.
 */
class TPPublisherWebhookSettingsApi  extends TPAPIBase {

    /**
     * @return getSettingsRequestTPPublisherWebhookSettingsApi
     */
    public function getSettingsRequest(){

        return new getSettingsRequestTPPublisherWebhookSettingsApi($this->apiClient);
    }
    /**
     * @return updateSettingsRequestTPPublisherWebhookSettingsApi
     */
    public function updateSettingsRequest(){

        return new updateSettingsRequestTPPublisherWebhookSettingsApi($this->apiClient);
    }

}

/**
 * Get webhook settings
 */
class getSettingsRequestTPPublisherWebhookSettingsApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return getSettingsRequestTPPublisherWebhookSettingsApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherWebhookSettings
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/webhook/settings/get', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherWebhookSettings');
        
    }
}
/**
 * Update settings of endpoint
 */
class updateSettingsRequestTPPublisherWebhookSettingsApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return updateSettingsRequestTPPublisherWebhookSettingsApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Webhook endpoint url
     * @param string $url
     * @return updateSettingsRequestTPPublisherWebhookSettingsApi
     */
    public function url($url){
        $this->request['url'] = $url;
        return $this;
    }
    
    /**
     * Webhook endpoint enabled
     * @param bool $enabled
     * @return updateSettingsRequestTPPublisherWebhookSettingsApi
     */
    public function enabled($enabled){
        $this->request['enabled'] = $enabled;
        return $this;
    }
    
    /**
     * Execute request
     * @return bool
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['url'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'url' ) ] = $this->apiClient->toQueryValue($this->request['url']);
        }
        
        if (isset($this->request['enabled'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'enabled' ) ] = $this->apiClient->toQueryValue($this->request['enabled']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/webhook/settings/update', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'bool');
        
    }
}

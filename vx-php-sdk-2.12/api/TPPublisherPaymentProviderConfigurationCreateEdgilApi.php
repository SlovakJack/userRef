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
 * The TPPublisherPaymentProviderConfigurationCreateEdgilApi class.
 */
class TPPublisherPaymentProviderConfigurationCreateEdgilApi  extends TPAPIBase {

    /**
     * @return createEdgilPaywayConfigurationRequestTPPublisherPaymentProviderConfigurationCreateEdgilApi
     */
    public function createEdgilPaywayConfigurationRequest(){

        return new createEdgilPaywayConfigurationRequestTPPublisherPaymentProviderConfigurationCreateEdgilApi($this->apiClient);
    }

}

/**
 * Creates new payment provider configuration for Edgil Payway
 */
class createEdgilPaywayConfigurationRequestTPPublisherPaymentProviderConfigurationCreateEdgilApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return createEdgilPaywayConfigurationRequestTPPublisherPaymentProviderConfigurationCreateEdgilApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * The title
     * @param string $title
     * @return createEdgilPaywayConfigurationRequestTPPublisherPaymentProviderConfigurationCreateEdgilApi
     */
    public function title($title){
        $this->request['title'] = $title;
        return $this;
    }
    
    /**
     * Edgil Payway payment provider properties
     * @param string $properties
     * @return createEdgilPaywayConfigurationRequestTPPublisherPaymentProviderConfigurationCreateEdgilApi
     */
    public function properties($properties){
        $this->request['properties'] = $properties;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherEdgilPaywayConfiguration
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['title'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'title' ) ] = $this->apiClient->toQueryValue($this->request['title']);
        }
        
        if (isset($this->request['properties'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'properties' ) ] = $this->apiClient->toQueryValue($this->request['properties']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/payment/provider/configuration/create/edgil/payway', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherEdgilPaywayConfiguration');
        
    }
}
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
 * The TPAnonErrorApi class.
 */
class TPAnonErrorApi  extends TPAPIBase {

    /**
     * @return logErrorRequestTPAnonErrorApi
     */
    public function logErrorRequest(){

        return new logErrorRequestTPAnonErrorApi($this->apiClient);
    }

}

/**
 * Logs error to database
 */
class logErrorRequestTPAnonErrorApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * 
     * @param string $logMessage
     * @return logErrorRequestTPAnonErrorApi
     */
    public function logMessage($logMessage){
        $this->request['logMessage'] = $logMessage;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPAnonAccess
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['logMessage'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'logMessage' ) ] = $this->apiClient->toQueryValue($this->request['logMessage']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/anon/error/log', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPAnonAccess');
        
    }
}

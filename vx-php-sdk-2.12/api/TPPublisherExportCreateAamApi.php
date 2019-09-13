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
 * The TPPublisherExportCreateAamApi class.
 */
class TPPublisherExportCreateAamApi  extends TPAPIBase {

    /**
     * @return createAAMDailyProofOfAcessRequestTPPublisherExportCreateAamApi
     */
    public function createAAMDailyProofOfAcessRequest(){

        return new createAAMDailyProofOfAcessRequestTPPublisherExportCreateAamApi($this->apiClient);
    }
    /**
     * @return createAAMMonthlyReportRequestTPPublisherExportCreateAamApi
     */
    public function createAAMMonthlyReportRequest(){

        return new createAAMMonthlyReportRequestTPPublisherExportCreateAamApi($this->apiClient);
    }

}

/**
 * Create AAM daily proof of access
 */
class createAAMDailyProofOfAcessRequestTPPublisherExportCreateAamApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return createAAMDailyProofOfAcessRequestTPPublisherExportCreateAamApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Downloadable report name
     * @param string $exportName
     * @return createAAMDailyProofOfAcessRequestTPPublisherExportCreateAamApi
     */
    public function exportName($exportName){
        $this->request['exportName'] = $exportName;
        return $this;
    }
    
    /**
     * Report begin date
     * @param string $dateFrom
     * @return createAAMDailyProofOfAcessRequestTPPublisherExportCreateAamApi
     */
    public function dateFrom($dateFrom){
        $this->request['dateFrom'] = $dateFrom;
        return $this;
    }
    
    /**
     * Report end date
     * @param string $dateTo
     * @return createAAMDailyProofOfAcessRequestTPPublisherExportCreateAamApi
     */
    public function dateTo($dateTo){
        $this->request['dateTo'] = $dateTo;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherExport
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['exportName'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'exportName' ) ] = $this->apiClient->toQueryValue($this->request['exportName']);
        }
        
        if (isset($this->request['dateFrom'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'dateFrom' ) ] = $this->apiClient->toQueryValue($this->request['dateFrom']);
        }
        
        if (isset($this->request['dateTo'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'dateTo' ) ] = $this->apiClient->toQueryValue($this->request['dateTo']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/export/create/aam/daily', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherExport');
        
    }
}
/**
 * Create AAM monthly report
 */
class createAAMMonthlyReportRequestTPPublisherExportCreateAamApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return createAAMMonthlyReportRequestTPPublisherExportCreateAamApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Downloadable report name
     * @param string $exportName
     * @return createAAMMonthlyReportRequestTPPublisherExportCreateAamApi
     */
    public function exportName($exportName){
        $this->request['exportName'] = $exportName;
        return $this;
    }
    
    /**
     * Report begin date
     * @param string $dateFrom
     * @return createAAMMonthlyReportRequestTPPublisherExportCreateAamApi
     */
    public function dateFrom($dateFrom){
        $this->request['dateFrom'] = $dateFrom;
        return $this;
    }
    
    /**
     * Report end date
     * @param string $dateTo
     * @return createAAMMonthlyReportRequestTPPublisherExportCreateAamApi
     */
    public function dateTo($dateTo){
        $this->request['dateTo'] = $dateTo;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherExport
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['exportName'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'exportName' ) ] = $this->apiClient->toQueryValue($this->request['exportName']);
        }
        
        if (isset($this->request['dateFrom'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'dateFrom' ) ] = $this->apiClient->toQueryValue($this->request['dateFrom']);
        }
        
        if (isset($this->request['dateTo'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'dateTo' ) ] = $this->apiClient->toQueryValue($this->request['dateTo']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/export/create/aam/monthly', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherExport');
        
    }
}

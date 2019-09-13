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
 * The TPPublisherExportCreateApi class.
 */
class TPPublisherExportCreateApi  extends TPAPIBase {

    /**
     * @return createAccessReportExportRequestTPPublisherExportCreateApi
     */
    public function createAccessReportExportRequest(){

        return new createAccessReportExportRequestTPPublisherExportCreateApi($this->apiClient);
    }
    /**
     * @return createDailyActivityReportExportRequestTPPublisherExportCreateApi
     */
    public function createDailyActivityReportExportRequest(){

        return new createDailyActivityReportExportRequestTPPublisherExportCreateApi($this->apiClient);
    }
    /**
     * @return createMonthlyActivityReportExportRequestTPPublisherExportCreateApi
     */
    public function createMonthlyActivityReportExportRequest(){

        return new createMonthlyActivityReportExportRequestTPPublisherExportCreateApi($this->apiClient);
    }
    /**
     * @return createSubscriptionDetailedExportRequestTPPublisherExportCreateApi
     */
    public function createSubscriptionDetailedExportRequest(){

        return new createSubscriptionDetailedExportRequestTPPublisherExportCreateApi($this->apiClient);
    }
    /**
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function createSubscriptionDetailedReportRequest(){

        return new createSubscriptionDetailedReportRequestTPPublisherExportCreateApi($this->apiClient);
    }
    /**
     * @return createSubscriptionSummaryExportRequestTPPublisherExportCreateApi
     */
    public function createSubscriptionSummaryExportRequest(){

        return new createSubscriptionSummaryExportRequestTPPublisherExportCreateApi($this->apiClient);
    }
    /**
     * @return createSubscriptionSummaryReportRequestTPPublisherExportCreateApi
     */
    public function createSubscriptionSummaryReportRequest(){

        return new createSubscriptionSummaryReportRequestTPPublisherExportCreateApi($this->apiClient);
    }
    /**
     * @return createTransactionsExportRequestTPPublisherExportCreateApi
     */
    public function createTransactionsExportRequest(){

        return new createTransactionsExportRequestTPPublisherExportCreateApi($this->apiClient);
    }
    /**
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function createUserExportRequest(){

        return new createUserExportRequestTPPublisherExportCreateApi($this->apiClient);
    }

}

/**
 * Create access report
 */
class createAccessReportExportRequestTPPublisherExportCreateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return createAccessReportExportRequestTPPublisherExportCreateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Downloadable report name
     * @param string $exportName
     * @return createAccessReportExportRequestTPPublisherExportCreateApi
     */
    public function exportName($exportName){
        $this->request['exportName'] = $exportName;
        return $this;
    }
    
    /**
     * Date from
     * @param string $dateFrom
     * @return createAccessReportExportRequestTPPublisherExportCreateApi
     */
    public function dateFrom($dateFrom){
        $this->request['dateFrom'] = $dateFrom;
        return $this;
    }
    
    /**
     * Date to
     * @param string $dateTo
     * @return createAccessReportExportRequestTPPublisherExportCreateApi
     */
    public function dateTo($dateTo){
        $this->request['dateTo'] = $dateTo;
        return $this;
    }
    
    /**
     * Access status
     * @param string $accessStatus
     * @return createAccessReportExportRequestTPPublisherExportCreateApi
     */
    public function accessStatus($accessStatus){
        $this->request['accessStatus'] = $accessStatus;
        return $this;
    }
    
    /**
     * Term type
     * @param string[] $termType
     * @return createAccessReportExportRequestTPPublisherExportCreateApi
     */
    public function termType($termType){
        $this->request['termType'] = $termType;
        return $this;
    }
    
    /**
     * Term ID
     * @param string[] $termId
     * @return createAccessReportExportRequestTPPublisherExportCreateApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    
    /**
     * Next billing date
     * @param string $nextBillingDate
     * @return createAccessReportExportRequestTPPublisherExportCreateApi
     */
    public function nextBillingDate($nextBillingDate){
        $this->request['nextBillingDate'] = $nextBillingDate;
        return $this;
    }
    
    /**
     * Last payment status
     * @param string $lastPaymentStatus
     * @return createAccessReportExportRequestTPPublisherExportCreateApi
     */
    public function lastPaymentStatus($lastPaymentStatus){
        $this->request['lastPaymentStatus'] = $lastPaymentStatus;
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
        
        if (isset($this->request['accessStatus'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'accessStatus' ) ] = $this->apiClient->toQueryValue($this->request['accessStatus']);
        }
        
        if (isset($this->request['termType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'termType' ) ] = $this->apiClient->toQueryValue($this->request['termType']);
        }
        
        if (isset($this->request['termId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->apiClient->toQueryValue($this->request['termId']);
        }
        
        if (isset($this->request['nextBillingDate'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'nextBillingDate' ) ] = $this->apiClient->toQueryValue($this->request['nextBillingDate']);
        }
        
        if (isset($this->request['lastPaymentStatus'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'lastPaymentStatus' ) ] = $this->apiClient->toQueryValue($this->request['lastPaymentStatus']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/export/create/accessReportExport', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherExport');
        
    }
}
/**
 * Create daily activity report
 */
class createDailyActivityReportExportRequestTPPublisherExportCreateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return createDailyActivityReportExportRequestTPPublisherExportCreateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Downloadable report name
     * @param string $exportName
     * @return createDailyActivityReportExportRequestTPPublisherExportCreateApi
     */
    public function exportName($exportName){
        $this->request['exportName'] = $exportName;
        return $this;
    }
    
    /**
     * Date
     * @param string $date
     * @return createDailyActivityReportExportRequestTPPublisherExportCreateApi
     */
    public function date($date){
        $this->request['date'] = $date;
        return $this;
    }
    
    /**
     * Term type
     * @param string[] $termType
     * @return createDailyActivityReportExportRequestTPPublisherExportCreateApi
     */
    public function termType($termType){
        $this->request['termType'] = $termType;
        return $this;
    }
    
    /**
     * Currency
     * @param string $currency
     * @return createDailyActivityReportExportRequestTPPublisherExportCreateApi
     */
    public function currency($currency){
        $this->request['currency'] = $currency;
        return $this;
    }
    
    /**
     * Currency List
     * @param string[] $currencyList
     * @return createDailyActivityReportExportRequestTPPublisherExportCreateApi
     */
    public function currencyList($currencyList){
        $this->request['currencyList'] = $currencyList;
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
        
        if (isset($this->request['date'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'date' ) ] = $this->apiClient->toQueryValue($this->request['date']);
        }
        
        if (isset($this->request['termType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'termType' ) ] = $this->apiClient->toQueryValue($this->request['termType']);
        }
        
        if (isset($this->request['currency'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'currency' ) ] = $this->apiClient->toQueryValue($this->request['currency']);
        }
        
        if (isset($this->request['currencyList'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'currencyList' ) ] = $this->apiClient->toQueryValue($this->request['currencyList']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/export/create/dailyActivityReportExport', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherExport');
        
    }
}
/**
 * Create monthly activity report
 */
class createMonthlyActivityReportExportRequestTPPublisherExportCreateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return createMonthlyActivityReportExportRequestTPPublisherExportCreateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Downloadable report name
     * @param string $exportName
     * @return createMonthlyActivityReportExportRequestTPPublisherExportCreateApi
     */
    public function exportName($exportName){
        $this->request['exportName'] = $exportName;
        return $this;
    }
    
    /**
     * Number of month
     * @param int $month
     * @return createMonthlyActivityReportExportRequestTPPublisherExportCreateApi
     */
    public function month($month){
        $this->request['month'] = $month;
        return $this;
    }
    
    /**
     * Year
     * @param int $year
     * @return createMonthlyActivityReportExportRequestTPPublisherExportCreateApi
     */
    public function year($year){
        $this->request['year'] = $year;
        return $this;
    }
    
    /**
     * Term type
     * @param string[] $termType
     * @return createMonthlyActivityReportExportRequestTPPublisherExportCreateApi
     */
    public function termType($termType){
        $this->request['termType'] = $termType;
        return $this;
    }
    
    /**
     * Currency
     * @param string $currency
     * @return createMonthlyActivityReportExportRequestTPPublisherExportCreateApi
     */
    public function currency($currency){
        $this->request['currency'] = $currency;
        return $this;
    }
    
    /**
     * Currency list
     * @param string[] $currencyList
     * @return createMonthlyActivityReportExportRequestTPPublisherExportCreateApi
     */
    public function currencyList($currencyList){
        $this->request['currencyList'] = $currencyList;
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
        
        if (isset($this->request['month'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'month' ) ] = $this->apiClient->toQueryValue($this->request['month']);
        }
        
        if (isset($this->request['year'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'year' ) ] = $this->apiClient->toQueryValue($this->request['year']);
        }
        
        if (isset($this->request['termType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'termType' ) ] = $this->apiClient->toQueryValue($this->request['termType']);
        }
        
        if (isset($this->request['currency'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'currency' ) ] = $this->apiClient->toQueryValue($this->request['currency']);
        }
        
        if (isset($this->request['currencyList'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'currencyList' ) ] = $this->apiClient->toQueryValue($this->request['currencyList']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/export/create/monthlyActivityReportExport', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherExport');
        
    }
}
/**
 * Create subscription detail report
 */
class createSubscriptionDetailedExportRequestTPPublisherExportCreateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return createSubscriptionDetailedExportRequestTPPublisherExportCreateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Downloadable report name
     * @param string $exportName
     * @return createSubscriptionDetailedExportRequestTPPublisherExportCreateApi
     */
    public function exportName($exportName){
        $this->request['exportName'] = $exportName;
        return $this;
    }
    
    /**
     * Report begin date
     * @param string $dateFrom
     * @return createSubscriptionDetailedExportRequestTPPublisherExportCreateApi
     */
    public function dateFrom($dateFrom){
        $this->request['dateFrom'] = $dateFrom;
        return $this;
    }
    
    /**
     * Report end date
     * @param string $dateTo
     * @return createSubscriptionDetailedExportRequestTPPublisherExportCreateApi
     */
    public function dateTo($dateTo){
        $this->request['dateTo'] = $dateTo;
        return $this;
    }
    
    /**
     * Report filter field
     * @param string $selectBy
     * @return createSubscriptionDetailedExportRequestTPPublisherExportCreateApi
     */
    public function selectBy($selectBy){
        $this->request['selectBy'] = $selectBy;
        return $this;
    }
    
    /**
     * Search by keyword
     * @param string $searchKeyword
     * @return createSubscriptionDetailedExportRequestTPPublisherExportCreateApi
     */
    public function searchKeyword($searchKeyword){
        $this->request['searchKeyword'] = $searchKeyword;
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
        
        if (isset($this->request['selectBy'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'selectBy' ) ] = $this->apiClient->toQueryValue($this->request['selectBy']);
        }
        
        if (isset($this->request['searchKeyword'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'searchKeyword' ) ] = $this->apiClient->toQueryValue($this->request['searchKeyword']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/export/create/subscriptionDetailedExport', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherExport');
        
    }
}
/**
 * Create subscription details report
 */
class createSubscriptionDetailedReportRequestTPPublisherExportCreateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Downloadable report name
     * @param string $exportName
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function exportName($exportName){
        $this->request['exportName'] = $exportName;
        return $this;
    }
    
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * 
     * @param bool $searchNewSubscriptions
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function searchNewSubscriptions($searchNewSubscriptions){
        $this->request['searchNewSubscriptions'] = $searchNewSubscriptions;
        return $this;
    }
    
    /**
     * 
     * @param string $newSubscriptionsCreatedFrom
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function newSubscriptionsCreatedFrom($newSubscriptionsCreatedFrom){
        $this->request['newSubscriptionsCreatedFrom'] = $newSubscriptionsCreatedFrom;
        return $this;
    }
    
    /**
     * 
     * @param string $newSubscriptionsCreatedTo
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function newSubscriptionsCreatedTo($newSubscriptionsCreatedTo){
        $this->request['newSubscriptionsCreatedTo'] = $newSubscriptionsCreatedTo;
        return $this;
    }
    
    /**
     * 
     * @param bool $searchActiveNowSubscriptions
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function searchActiveNowSubscriptions($searchActiveNowSubscriptions){
        $this->request['searchActiveNowSubscriptions'] = $searchActiveNowSubscriptions;
        return $this;
    }
    
    /**
     * 
     * @param string[] $activeNowSubscriptionsStatuses
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function activeNowSubscriptionsStatuses($activeNowSubscriptionsStatuses){
        $this->request['activeNowSubscriptionsStatuses'] = $activeNowSubscriptionsStatuses;
        return $this;
    }
    
    /**
     * 
     * @param bool $searchInactiveSubscriptions
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function searchInactiveSubscriptions($searchInactiveSubscriptions){
        $this->request['searchInactiveSubscriptions'] = $searchInactiveSubscriptions;
        return $this;
    }
    
    /**
     * 
     * @param string[] $inactiveSubscriptionsStatuses
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function inactiveSubscriptionsStatuses($inactiveSubscriptionsStatuses){
        $this->request['inactiveSubscriptionsStatuses'] = $inactiveSubscriptionsStatuses;
        return $this;
    }
    
    /**
     * 
     * @param string $subscriptionsInactiveFrom
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function subscriptionsInactiveFrom($subscriptionsInactiveFrom){
        $this->request['subscriptionsInactiveFrom'] = $subscriptionsInactiveFrom;
        return $this;
    }
    
    /**
     * 
     * @param string $subscriptionsInactiveTo
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function subscriptionsInactiveTo($subscriptionsInactiveTo){
        $this->request['subscriptionsInactiveTo'] = $subscriptionsInactiveTo;
        return $this;
    }
    
    /**
     * 
     * @param bool $searchUpdatedSubscriptions
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function searchUpdatedSubscriptions($searchUpdatedSubscriptions){
        $this->request['searchUpdatedSubscriptions'] = $searchUpdatedSubscriptions;
        return $this;
    }
    
    /**
     * 
     * @param string[] $updatedSubscriptionsStatuses
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function updatedSubscriptionsStatuses($updatedSubscriptionsStatuses){
        $this->request['updatedSubscriptionsStatuses'] = $updatedSubscriptionsStatuses;
        return $this;
    }
    
    /**
     * 
     * @param string $subscriptionsUpdatedFrom
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function subscriptionsUpdatedFrom($subscriptionsUpdatedFrom){
        $this->request['subscriptionsUpdatedFrom'] = $subscriptionsUpdatedFrom;
        return $this;
    }
    
    /**
     * 
     * @param string $subscriptionsUpdatedTo
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function subscriptionsUpdatedTo($subscriptionsUpdatedTo){
        $this->request['subscriptionsUpdatedTo'] = $subscriptionsUpdatedTo;
        return $this;
    }
    
    /**
     * 
     * @param bool $searchAutoRenewingSubscriptions
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function searchAutoRenewingSubscriptions($searchAutoRenewingSubscriptions){
        $this->request['searchAutoRenewingSubscriptions'] = $searchAutoRenewingSubscriptions;
        return $this;
    }
    
    /**
     * 
     * @param bool $subscriptionsAutoRenewing
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function subscriptionsAutoRenewing($subscriptionsAutoRenewing){
        $this->request['subscriptionsAutoRenewing'] = $subscriptionsAutoRenewing;
        return $this;
    }
    
    /**
     * 
     * @param bool $searchSubscriptionsByNextBillingDate
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function searchSubscriptionsByNextBillingDate($searchSubscriptionsByNextBillingDate){
        $this->request['searchSubscriptionsByNextBillingDate'] = $searchSubscriptionsByNextBillingDate;
        return $this;
    }
    
    /**
     * 
     * @param string $subscriptionsNextBillingDateFrom
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function subscriptionsNextBillingDateFrom($subscriptionsNextBillingDateFrom){
        $this->request['subscriptionsNextBillingDateFrom'] = $subscriptionsNextBillingDateFrom;
        return $this;
    }
    
    /**
     * 
     * @param string $subscriptionsNextBillingDateTo
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function subscriptionsNextBillingDateTo($subscriptionsNextBillingDateTo){
        $this->request['subscriptionsNextBillingDateTo'] = $subscriptionsNextBillingDateTo;
        return $this;
    }
    
    /**
     * 
     * @param bool $searchSubscriptionsByTerms
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function searchSubscriptionsByTerms($searchSubscriptionsByTerms){
        $this->request['searchSubscriptionsByTerms'] = $searchSubscriptionsByTerms;
        return $this;
    }
    
    /**
     * 
     * @param string[] $subscriptionsTerms
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function subscriptionsTerms($subscriptionsTerms){
        $this->request['subscriptionsTerms'] = $subscriptionsTerms;
        return $this;
    }
    
    /**
     * 
     * @param string[] $subscriptionsTermTypes
     * @return createSubscriptionDetailedReportRequestTPPublisherExportCreateApi
     */
    public function subscriptionsTermTypes($subscriptionsTermTypes){
        $this->request['subscriptionsTermTypes'] = $subscriptionsTermTypes;
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
        
        if (isset($this->request['offset'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offset' ) ] = $this->apiClient->toQueryValue($this->request['offset']);
        }
        
        if (isset($this->request['limit'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'limit' ) ] = $this->apiClient->toQueryValue($this->request['limit']);
        }
        
        if (isset($this->request['q'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'q' ) ] = $this->apiClient->toQueryValue($this->request['q']);
        }
        
        if (isset($this->request['searchNewSubscriptions'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'searchNewSubscriptions' ) ] = $this->apiClient->toQueryValue($this->request['searchNewSubscriptions']);
        }
        
        if (isset($this->request['newSubscriptionsCreatedFrom'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'newSubscriptionsCreatedFrom' ) ] = $this->apiClient->toQueryValue($this->request['newSubscriptionsCreatedFrom']);
        }
        
        if (isset($this->request['newSubscriptionsCreatedTo'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'newSubscriptionsCreatedTo' ) ] = $this->apiClient->toQueryValue($this->request['newSubscriptionsCreatedTo']);
        }
        
        if (isset($this->request['searchActiveNowSubscriptions'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'searchActiveNowSubscriptions' ) ] = $this->apiClient->toQueryValue($this->request['searchActiveNowSubscriptions']);
        }
        
        if (isset($this->request['activeNowSubscriptionsStatuses'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'activeNowSubscriptionsStatuses' ) ] = $this->apiClient->toQueryValue($this->request['activeNowSubscriptionsStatuses']);
        }
        
        if (isset($this->request['searchInactiveSubscriptions'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'searchInactiveSubscriptions' ) ] = $this->apiClient->toQueryValue($this->request['searchInactiveSubscriptions']);
        }
        
        if (isset($this->request['inactiveSubscriptionsStatuses'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'inactiveSubscriptionsStatuses' ) ] = $this->apiClient->toQueryValue($this->request['inactiveSubscriptionsStatuses']);
        }
        
        if (isset($this->request['subscriptionsInactiveFrom'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'subscriptionsInactiveFrom' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionsInactiveFrom']);
        }
        
        if (isset($this->request['subscriptionsInactiveTo'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'subscriptionsInactiveTo' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionsInactiveTo']);
        }
        
        if (isset($this->request['searchUpdatedSubscriptions'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'searchUpdatedSubscriptions' ) ] = $this->apiClient->toQueryValue($this->request['searchUpdatedSubscriptions']);
        }
        
        if (isset($this->request['updatedSubscriptionsStatuses'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'updatedSubscriptionsStatuses' ) ] = $this->apiClient->toQueryValue($this->request['updatedSubscriptionsStatuses']);
        }
        
        if (isset($this->request['subscriptionsUpdatedFrom'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'subscriptionsUpdatedFrom' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionsUpdatedFrom']);
        }
        
        if (isset($this->request['subscriptionsUpdatedTo'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'subscriptionsUpdatedTo' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionsUpdatedTo']);
        }
        
        if (isset($this->request['searchAutoRenewingSubscriptions'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'searchAutoRenewingSubscriptions' ) ] = $this->apiClient->toQueryValue($this->request['searchAutoRenewingSubscriptions']);
        }
        
        if (isset($this->request['subscriptionsAutoRenewing'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'subscriptionsAutoRenewing' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionsAutoRenewing']);
        }
        
        if (isset($this->request['searchSubscriptionsByNextBillingDate'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'searchSubscriptionsByNextBillingDate' ) ] = $this->apiClient->toQueryValue($this->request['searchSubscriptionsByNextBillingDate']);
        }
        
        if (isset($this->request['subscriptionsNextBillingDateFrom'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'subscriptionsNextBillingDateFrom' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionsNextBillingDateFrom']);
        }
        
        if (isset($this->request['subscriptionsNextBillingDateTo'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'subscriptionsNextBillingDateTo' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionsNextBillingDateTo']);
        }
        
        if (isset($this->request['searchSubscriptionsByTerms'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'searchSubscriptionsByTerms' ) ] = $this->apiClient->toQueryValue($this->request['searchSubscriptionsByTerms']);
        }
        
        if (isset($this->request['subscriptionsTerms'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'subscriptionsTerms' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionsTerms']);
        }
        
        if (isset($this->request['subscriptionsTermTypes'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'subscriptionsTermTypes' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionsTermTypes']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/export/create/subscriptionDetailsReport', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherExport');
        
    }
}
/**
 * Create new downloadable subscription summary report and run it
 */
class createSubscriptionSummaryExportRequestTPPublisherExportCreateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return createSubscriptionSummaryExportRequestTPPublisherExportCreateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Downloadable report name
     * @param string $exportName
     * @return createSubscriptionSummaryExportRequestTPPublisherExportCreateApi
     */
    public function exportName($exportName){
        $this->request['exportName'] = $exportName;
        return $this;
    }
    
    /**
     * Report begin date
     * @param string $dateFrom
     * @return createSubscriptionSummaryExportRequestTPPublisherExportCreateApi
     */
    public function dateFrom($dateFrom){
        $this->request['dateFrom'] = $dateFrom;
        return $this;
    }
    
    /**
     * Report end date
     * @param string $dateTo
     * @return createSubscriptionSummaryExportRequestTPPublisherExportCreateApi
     */
    public function dateTo($dateTo){
        $this->request['dateTo'] = $dateTo;
        return $this;
    }
    
    /**
     * Report filter field
     * @param string $selectBy
     * @return createSubscriptionSummaryExportRequestTPPublisherExportCreateApi
     */
    public function selectBy($selectBy){
        $this->request['selectBy'] = $selectBy;
        return $this;
    }
    
    /**
     * Search by keyword
     * @param string $searchKeyword
     * @return createSubscriptionSummaryExportRequestTPPublisherExportCreateApi
     */
    public function searchKeyword($searchKeyword){
        $this->request['searchKeyword'] = $searchKeyword;
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
        
        if (isset($this->request['selectBy'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'selectBy' ) ] = $this->apiClient->toQueryValue($this->request['selectBy']);
        }
        
        if (isset($this->request['searchKeyword'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'searchKeyword' ) ] = $this->apiClient->toQueryValue($this->request['searchKeyword']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/export/create/subscriptionSummaryExport', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherExport');
        
    }
}
/**
 * Create subscription summary report
 */
class createSubscriptionSummaryReportRequestTPPublisherExportCreateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return createSubscriptionSummaryReportRequestTPPublisherExportCreateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Downloadable report name
     * @param string $exportName
     * @return createSubscriptionSummaryReportRequestTPPublisherExportCreateApi
     */
    public function exportName($exportName){
        $this->request['exportName'] = $exportName;
        return $this;
    }
    
    /**
     * Report begin date
     * @param string $dateFrom
     * @return createSubscriptionSummaryReportRequestTPPublisherExportCreateApi
     */
    public function dateFrom($dateFrom){
        $this->request['dateFrom'] = $dateFrom;
        return $this;
    }
    
    /**
     * Report end date
     * @param string $dateTo
     * @return createSubscriptionSummaryReportRequestTPPublisherExportCreateApi
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
        $response = $this->apiClient->callAPI('/publisher/export/create/subscriptionSummaryReport', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherExport');
        
    }
}
/**
 * Create new downloadable transactions report and run it
 */
class createTransactionsExportRequestTPPublisherExportCreateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return createTransactionsExportRequestTPPublisherExportCreateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Downloadable report name
     * @param string $exportName
     * @return createTransactionsExportRequestTPPublisherExportCreateApi
     */
    public function exportName($exportName){
        $this->request['exportName'] = $exportName;
        return $this;
    }
    
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return createTransactionsExportRequestTPPublisherExportCreateApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return createTransactionsExportRequestTPPublisherExportCreateApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * Transaction state
     * @param string $userPaymentState
     * @return createTransactionsExportRequestTPPublisherExportCreateApi
     */
    public function userPaymentState($userPaymentState){
        $this->request['userPaymentState'] = $userPaymentState;
        return $this;
    }
    
    /**
     * Date from
     * @param string $dateFrom
     * @return createTransactionsExportRequestTPPublisherExportCreateApi
     */
    public function dateFrom($dateFrom){
        $this->request['dateFrom'] = $dateFrom;
        return $this;
    }
    
    /**
     * Date to
     * @param string $dateTo
     * @return createTransactionsExportRequestTPPublisherExportCreateApi
     */
    public function dateTo($dateTo){
        $this->request['dateTo'] = $dateTo;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return createTransactionsExportRequestTPPublisherExportCreateApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * Field to order by
     * @param string $orderBy
     * @return createTransactionsExportRequestTPPublisherExportCreateApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return createTransactionsExportRequestTPPublisherExportCreateApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
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
        
        if (isset($this->request['offset'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offset' ) ] = $this->apiClient->toQueryValue($this->request['offset']);
        }
        
        if (isset($this->request['limit'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'limit' ) ] = $this->apiClient->toQueryValue($this->request['limit']);
        }
        
        if (isset($this->request['userPaymentState'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'userPaymentState' ) ] = $this->apiClient->toQueryValue($this->request['userPaymentState']);
        }
        
        if (isset($this->request['dateFrom'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'dateFrom' ) ] = $this->apiClient->toQueryValue($this->request['dateFrom']);
        }
        
        if (isset($this->request['dateTo'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'dateTo' ) ] = $this->apiClient->toQueryValue($this->request['dateTo']);
        }
        
        if (isset($this->request['q'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'q' ) ] = $this->apiClient->toQueryValue($this->request['q']);
        }
        
        if (isset($this->request['orderBy'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderBy' ) ] = $this->apiClient->toQueryValue($this->request['orderBy']);
        }
        
        if (isset($this->request['orderDirection'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderDirection' ) ] = $this->apiClient->toQueryValue($this->request['orderDirection']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/export/create/transactionsExport', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherExport');
        
    }
}
/**
 * Create user search report
 */
class createUserExportRequestTPPublisherExportCreateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Downloadable report name
     * @param string $exportName
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function exportName($exportName){
        $this->request['exportName'] = $exportName;
        return $this;
    }
    
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * Find users which contain a keyword in name
     * @param string $name
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    
    /**
     * Find users which contain a keyword in email
     * @param string $email
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function email($email){
        $this->request['email'] = $email;
        return $this;
    }
    
    /**
     * Find users which was registered from selected date
     * @param string $registeredFrom
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function registeredFrom($registeredFrom){
        $this->request['registeredFrom'] = $registeredFrom;
        return $this;
    }
    
    /**
     * Find users which was registered until selected date
     * @param string $registeredUntil
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function registeredUntil($registeredUntil){
        $this->request['registeredUntil'] = $registeredUntil;
        return $this;
    }
    
    /**
     * Find users which have access to selected resources
     * @param string[] $accessToResources
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function accessToResources($accessToResources){
        $this->request['accessToResources'] = $accessToResources;
        return $this;
    }
    
    /**
     * Find users which have conversion terms for selected terms
     * @param string[] $convertedTerms
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function convertedTerms($convertedTerms){
        $this->request['convertedTerms'] = $convertedTerms;
        return $this;
    }
    
    /**
     * Find users which have user access from selected date
     * @param string $accessFrom
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function accessFrom($accessFrom){
        $this->request['accessFrom'] = $accessFrom;
        return $this;
    }
    
    /**
     * Find users which have user access until selected date
     * @param string $accessUntil
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function accessUntil($accessUntil){
        $this->request['accessUntil'] = $accessUntil;
        return $this;
    }
    
    /**
     * Find users which have converted term from selected date
     * @param string $convertedTermFrom
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function convertedTermFrom($convertedTermFrom){
        $this->request['convertedTermFrom'] = $convertedTermFrom;
        return $this;
    }
    
    /**
     * Find users which have converted term until selected date
     * @param string $convertedTermUntil
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function convertedTermUntil($convertedTermUntil){
        $this->request['convertedTermUntil'] = $convertedTermUntil;
        return $this;
    }
    
    /**
     * Find users which have selected redeemed promotions
     * @param string[] $redeemedPromotions
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function redeemedPromotions($redeemedPromotions){
        $this->request['redeemedPromotions'] = $redeemedPromotions;
        return $this;
    }
    
    /**
     * Find users which have redeemed promotions from selected date
     * @param string $redeemedPromotionFrom
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function redeemedPromotionFrom($redeemedPromotionFrom){
        $this->request['redeemedPromotionFrom'] = $redeemedPromotionFrom;
        return $this;
    }
    
    /**
     * Find users which have redeemed promotions until selected date
     * @param string $redeemedPromotionUntil
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function redeemedPromotionUntil($redeemedPromotionUntil){
        $this->request['redeemedPromotionUntil'] = $redeemedPromotionUntil;
        return $this;
    }
    
    /**
     * Find users which have trial subscription
     * @param bool $trialPeriod
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function trialPeriod($trialPeriod){
        $this->request['trialPeriod'] = $trialPeriod;
        return $this;
    }
    
    /**
     * Find users which have user access (can be expired)
     * @param bool $hasAccess
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasAccess($hasAccess){
        $this->request['hasAccess'] = $hasAccess;
        return $this;
    }
    
    /**
     * Find users which have conversion term
     * @param bool $hasConversionTerm
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasConversionTerm($hasConversionTerm){
        $this->request['hasConversionTerm'] = $hasConversionTerm;
        return $this;
    }
    
    /**
     * Find users which have redeemed promotion
     * @param bool $hasRedeemedPromotion
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasRedeemedPromotion($hasRedeemedPromotion){
        $this->request['hasRedeemedPromotion'] = $hasRedeemedPromotion;
        return $this;
    }
    
    /**
     * Find users which have reserved trial redemptions. It works together with redeemed promotions and works as &#39;OR&#39; conditions 
     * @param bool $includeTrialRedemptions
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function includeTrialRedemptions($includeTrialRedemptions){
        $this->request['includeTrialRedemptions'] = $includeTrialRedemptions;
        return $this;
    }
    
    /**
     * Find users which have conversion terms for selected term types
     * @param string[] $convertedTermTypes
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function convertedTermTypes($convertedTermTypes){
        $this->request['convertedTermTypes'] = $convertedTermTypes;
        return $this;
    }
    
    /**
     * Find users which have conversion terms for selected term types
     * @param bool $hasConversionTermType
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasConversionTermType($hasConversionTermType){
        $this->request['hasConversionTermType'] = $hasConversionTermType;
        return $this;
    }
    
    /**
     * Currency of the payments to take into account
     * @param string $spentMoneyCurrency
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function spentMoneyCurrency($spentMoneyCurrency){
        $this->request['spentMoneyCurrency'] = $spentMoneyCurrency;
        return $this;
    }
    
    /**
     * Find users which spent money more than a value
     * @param Number $spentMoneyFrom
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function spentMoneyFrom($spentMoneyFrom){
        $this->request['spentMoneyFrom'] = $spentMoneyFrom;
        return $this;
    }
    
    /**
     * Find users which spent money less than a value
     * @param Number $spentMoneyUntil
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function spentMoneyUntil($spentMoneyUntil){
        $this->request['spentMoneyUntil'] = $spentMoneyUntil;
        return $this;
    }
    
    /**
     * Find users which bougth something from a date
     * @param string $spentFromDate
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function spentFromDate($spentFromDate){
        $this->request['spentFromDate'] = $spentFromDate;
        return $this;
    }
    
    /**
     * Find users which bougth something until a date
     * @param string $spentUntilDate
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function spentUntilDate($spentUntilDate){
        $this->request['spentUntilDate'] = $spentUntilDate;
        return $this;
    }
    
    /**
     * Find users which use selected payment methods
     * @param int[] $paymentMethods
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function paymentMethods($paymentMethods){
        $this->request['paymentMethods'] = $paymentMethods;
        return $this;
    }
    
    /**
     * Find users which have problems with autorenew of subscription from a date
     * @param string $billingFailureFrom
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function billingFailureFrom($billingFailureFrom){
        $this->request['billingFailureFrom'] = $billingFailureFrom;
        return $this;
    }
    
    /**
     * Find users which have problems with autorenew of subscription until a date
     * @param string $billingFailureUntil
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function billingFailureUntil($billingFailureUntil){
        $this->request['billingFailureUntil'] = $billingFailureUntil;
        return $this;
    }
    
    /**
     * Find users which had problems with billing
     * @param bool $hadBillingFailure
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hadBillingFailure($hadBillingFailure){
        $this->request['hadBillingFailure'] = $hadBillingFailure;
        return $this;
    }
    
    /**
     * Find users which have payment
     * @param bool $hasPayment
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasPayment($hasPayment){
        $this->request['hasPayment'] = $hasPayment;
        return $this;
    }
    
    /**
     * Find users which have given external customer id
     * @param string $upiExtCustomerId
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function upiExtCustomerId($upiExtCustomerId){
        $this->request['upiExtCustomerId'] = $upiExtCustomerId;
        return $this;
    }
    
    /**
     * Find users which have active subscription to selected resources
     * @param string[] $activeSubscriptionToResources
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function activeSubscriptionToResources($activeSubscriptionToResources){
        $this->request['activeSubscriptionToResources'] = $activeSubscriptionToResources;
        return $this;
    }
    
    /**
     * Find users which have active subscription
     * @param bool $hasActiveSubscription
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasActiveSubscription($hasActiveSubscription){
        $this->request['hasActiveSubscription'] = $hasActiveSubscription;
        return $this;
    }
    
    /**
     * Find users which have starting subscription from selected date
     * @param string $subscriptionStartFrom
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function subscriptionStartFrom($subscriptionStartFrom){
        $this->request['subscriptionStartFrom'] = $subscriptionStartFrom;
        return $this;
    }
    
    /**
     * Find users which have starting subscription until selected date
     * @param string $subscriptionStartUntil
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function subscriptionStartUntil($subscriptionStartUntil){
        $this->request['subscriptionStartUntil'] = $subscriptionStartUntil;
        return $this;
    }
    
    /**
     * Find users which have renewing subscription from selected date
     * @param string $subscriptionRenewFrom
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function subscriptionRenewFrom($subscriptionRenewFrom){
        $this->request['subscriptionRenewFrom'] = $subscriptionRenewFrom;
        return $this;
    }
    
    /**
     * Find users which have renewing subscription until selected date
     * @param string $subscriptionRenewUntil
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function subscriptionRenewUntil($subscriptionRenewUntil){
        $this->request['subscriptionRenewUntil'] = $subscriptionRenewUntil;
        return $this;
    }
    
    /**
     * Find users which have exipiring subscription from selected date
     * @param string $subscriptionExpireFrom
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function subscriptionExpireFrom($subscriptionExpireFrom){
        $this->request['subscriptionExpireFrom'] = $subscriptionExpireFrom;
        return $this;
    }
    
    /**
     * Find users which have expiring subscription until selected date
     * @param string $subscriptionExpireUntil
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function subscriptionExpireUntil($subscriptionExpireUntil){
        $this->request['subscriptionExpireUntil'] = $subscriptionExpireUntil;
        return $this;
    }
    
    /**
     * Find users which have expiring trial subscription from selected date
     * @param string $trialExpireFrom
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function trialExpireFrom($trialExpireFrom){
        $this->request['trialExpireFrom'] = $trialExpireFrom;
        return $this;
    }
    
    /**
     * Find users which have expiring trial subscription until selected date
     * @param string $trialExpireUntil
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function trialExpireUntil($trialExpireUntil){
        $this->request['trialExpireUntil'] = $trialExpireUntil;
        return $this;
    }
    
    /**
     * Find users with any subscriptions
     * @param bool $hasAnySubscriptions
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasAnySubscriptions($hasAnySubscriptions){
        $this->request['hasAnySubscriptions'] = $hasAnySubscriptions;
        return $this;
    }
    
    /**
     * Find users which have unresolved inquiry
     * @param bool $hasUnresolvedInquiry
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasUnresolvedInquiry($hasUnresolvedInquiry){
        $this->request['hasUnresolvedInquiry'] = $hasUnresolvedInquiry;
        return $this;
    }
    
    /**
     * Find users which have submitted inquiry from selected date
     * @param string $submittedInquiryFrom
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function submittedInquiryFrom($submittedInquiryFrom){
        $this->request['submittedInquiryFrom'] = $submittedInquiryFrom;
        return $this;
    }
    
    /**
     * Find users which have submitted inquiry until selected date
     * @param string $submittedInquiryUntil
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function submittedInquiryUntil($submittedInquiryUntil){
        $this->request['submittedInquiryUntil'] = $submittedInquiryUntil;
        return $this;
    }
    
    /**
     * Find users which received response from selected date
     * @param string $receivedResponseFrom
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function receivedResponseFrom($receivedResponseFrom){
        $this->request['receivedResponseFrom'] = $receivedResponseFrom;
        return $this;
    }
    
    /**
     * Find users which received response until selected date
     * @param string $receivedResponseUntil
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function receivedResponseUntil($receivedResponseUntil){
        $this->request['receivedResponseUntil'] = $receivedResponseUntil;
        return $this;
    }
    
    /**
     * Find users which have resolved inquiry from selected date
     * @param string $resolvedInquiryFrom
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function resolvedInquiryFrom($resolvedInquiryFrom){
        $this->request['resolvedInquiryFrom'] = $resolvedInquiryFrom;
        return $this;
    }
    
    /**
     * Find users which have resolved inquiry until selected date
     * @param string $resolvedInquiryUntil
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function resolvedInquiryUntil($resolvedInquiryUntil){
        $this->request['resolvedInquiryUntil'] = $resolvedInquiryUntil;
        return $this;
    }
    
    /**
     * Find users with submitted inquries
     * @param bool $hasSubmittedInquiry
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasSubmittedInquiry($hasSubmittedInquiry){
        $this->request['hasSubmittedInquiry'] = $hasSubmittedInquiry;
        return $this;
    }
    
    /**
     * Find users with inquiries with response
     * @param bool $hasReceivedResponseInquiry
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasReceivedResponseInquiry($hasReceivedResponseInquiry){
        $this->request['hasReceivedResponseInquiry'] = $hasReceivedResponseInquiry;
        return $this;
    }
    
    /**
     * Defines searching field
     * @param string[] $dataType
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function dataType($dataType){
        $this->request['dataType'] = $dataType;
        return $this;
    }
    
    /**
     * Defines search data
     * @param string $data
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function data($data){
        $this->request['data'] = $data;
        return $this;
    }
    
    /**
     * Find users with any data
     * @param bool $hasData
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasData($hasData){
        $this->request['hasData'] = $hasData;
        return $this;
    }
    
    /**
     * Find user who accept list of consentDataType
     * @param string[] $selectedConsentsMap
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function selectedConsentsMap($selectedConsentsMap){
        $this->request['selectedConsentsMap'] = $selectedConsentsMap;
        return $this;
    }
    
    /**
     * Find checked or unchecked consents
     * @param bool $consentChecked
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function consentChecked($consentChecked){
        $this->request['consentChecked'] = $consentChecked;
        return $this;
    }
    
    /**
     * Find users with resolved inquiries
     * @param bool $hasResolvedInquiry
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function hasResolvedInquiry($hasResolvedInquiry){
        $this->request['hasResolvedInquiry'] = $hasResolvedInquiry;
        return $this;
    }
    
    /**
     * Find users with accepted consents
     * @param bool $consentHasData
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function consentHasData($consentHasData){
        $this->request['consentHasData'] = $consentHasData;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * Field to order by
     * @param string $orderBy
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return createUserExportRequestTPPublisherExportCreateApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
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
        
        if (isset($this->request['offset'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offset' ) ] = $this->apiClient->toQueryValue($this->request['offset']);
        }
        
        if (isset($this->request['limit'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'limit' ) ] = $this->apiClient->toQueryValue($this->request['limit']);
        }
        
        if (isset($this->request['name'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->apiClient->toQueryValue($this->request['name']);
        }
        
        if (isset($this->request['email'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'email' ) ] = $this->apiClient->toQueryValue($this->request['email']);
        }
        
        if (isset($this->request['registeredFrom'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'registeredFrom' ) ] = $this->apiClient->toQueryValue($this->request['registeredFrom']);
        }
        
        if (isset($this->request['registeredUntil'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'registeredUntil' ) ] = $this->apiClient->toQueryValue($this->request['registeredUntil']);
        }
        
        if (isset($this->request['accessToResources'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'accessToResources' ) ] = $this->apiClient->toQueryValue($this->request['accessToResources']);
        }
        
        if (isset($this->request['convertedTerms'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'convertedTerms' ) ] = $this->apiClient->toQueryValue($this->request['convertedTerms']);
        }
        
        if (isset($this->request['accessFrom'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'accessFrom' ) ] = $this->apiClient->toQueryValue($this->request['accessFrom']);
        }
        
        if (isset($this->request['accessUntil'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'accessUntil' ) ] = $this->apiClient->toQueryValue($this->request['accessUntil']);
        }
        
        if (isset($this->request['convertedTermFrom'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'convertedTermFrom' ) ] = $this->apiClient->toQueryValue($this->request['convertedTermFrom']);
        }
        
        if (isset($this->request['convertedTermUntil'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'convertedTermUntil' ) ] = $this->apiClient->toQueryValue($this->request['convertedTermUntil']);
        }
        
        if (isset($this->request['redeemedPromotions'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'redeemedPromotions' ) ] = $this->apiClient->toQueryValue($this->request['redeemedPromotions']);
        }
        
        if (isset($this->request['redeemedPromotionFrom'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'redeemedPromotionFrom' ) ] = $this->apiClient->toQueryValue($this->request['redeemedPromotionFrom']);
        }
        
        if (isset($this->request['redeemedPromotionUntil'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'redeemedPromotionUntil' ) ] = $this->apiClient->toQueryValue($this->request['redeemedPromotionUntil']);
        }
        
        if (isset($this->request['trialPeriod'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'trialPeriod' ) ] = $this->apiClient->toQueryValue($this->request['trialPeriod']);
        }
        
        if (isset($this->request['hasAccess'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'hasAccess' ) ] = $this->apiClient->toQueryValue($this->request['hasAccess']);
        }
        
        if (isset($this->request['hasConversionTerm'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'hasConversionTerm' ) ] = $this->apiClient->toQueryValue($this->request['hasConversionTerm']);
        }
        
        if (isset($this->request['hasRedeemedPromotion'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'hasRedeemedPromotion' ) ] = $this->apiClient->toQueryValue($this->request['hasRedeemedPromotion']);
        }
        
        if (isset($this->request['includeTrialRedemptions'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'includeTrialRedemptions' ) ] = $this->apiClient->toQueryValue($this->request['includeTrialRedemptions']);
        }
        
        if (isset($this->request['convertedTermTypes'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'convertedTermTypes' ) ] = $this->apiClient->toQueryValue($this->request['convertedTermTypes']);
        }
        
        if (isset($this->request['hasConversionTermType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'hasConversionTermType' ) ] = $this->apiClient->toQueryValue($this->request['hasConversionTermType']);
        }
        
        if (isset($this->request['spentMoneyCurrency'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'spentMoneyCurrency' ) ] = $this->apiClient->toQueryValue($this->request['spentMoneyCurrency']);
        }
        
        if (isset($this->request['spentMoneyFrom'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'spentMoneyFrom' ) ] = $this->apiClient->toQueryValue($this->request['spentMoneyFrom']);
        }
        
        if (isset($this->request['spentMoneyUntil'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'spentMoneyUntil' ) ] = $this->apiClient->toQueryValue($this->request['spentMoneyUntil']);
        }
        
        if (isset($this->request['spentFromDate'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'spentFromDate' ) ] = $this->apiClient->toQueryValue($this->request['spentFromDate']);
        }
        
        if (isset($this->request['spentUntilDate'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'spentUntilDate' ) ] = $this->apiClient->toQueryValue($this->request['spentUntilDate']);
        }
        
        if (isset($this->request['paymentMethods'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'paymentMethods' ) ] = $this->apiClient->toQueryValue($this->request['paymentMethods']);
        }
        
        if (isset($this->request['billingFailureFrom'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'billingFailureFrom' ) ] = $this->apiClient->toQueryValue($this->request['billingFailureFrom']);
        }
        
        if (isset($this->request['billingFailureUntil'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'billingFailureUntil' ) ] = $this->apiClient->toQueryValue($this->request['billingFailureUntil']);
        }
        
        if (isset($this->request['hadBillingFailure'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'hadBillingFailure' ) ] = $this->apiClient->toQueryValue($this->request['hadBillingFailure']);
        }
        
        if (isset($this->request['hasPayment'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'hasPayment' ) ] = $this->apiClient->toQueryValue($this->request['hasPayment']);
        }
        
        if (isset($this->request['upiExtCustomerId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'upiExtCustomerId' ) ] = $this->apiClient->toQueryValue($this->request['upiExtCustomerId']);
        }
        
        if (isset($this->request['activeSubscriptionToResources'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'activeSubscriptionToResources' ) ] = $this->apiClient->toQueryValue($this->request['activeSubscriptionToResources']);
        }
        
        if (isset($this->request['hasActiveSubscription'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'hasActiveSubscription' ) ] = $this->apiClient->toQueryValue($this->request['hasActiveSubscription']);
        }
        
        if (isset($this->request['subscriptionStartFrom'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'subscriptionStartFrom' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionStartFrom']);
        }
        
        if (isset($this->request['subscriptionStartUntil'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'subscriptionStartUntil' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionStartUntil']);
        }
        
        if (isset($this->request['subscriptionRenewFrom'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'subscriptionRenewFrom' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionRenewFrom']);
        }
        
        if (isset($this->request['subscriptionRenewUntil'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'subscriptionRenewUntil' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionRenewUntil']);
        }
        
        if (isset($this->request['subscriptionExpireFrom'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'subscriptionExpireFrom' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionExpireFrom']);
        }
        
        if (isset($this->request['subscriptionExpireUntil'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'subscriptionExpireUntil' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionExpireUntil']);
        }
        
        if (isset($this->request['trialExpireFrom'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'trialExpireFrom' ) ] = $this->apiClient->toQueryValue($this->request['trialExpireFrom']);
        }
        
        if (isset($this->request['trialExpireUntil'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'trialExpireUntil' ) ] = $this->apiClient->toQueryValue($this->request['trialExpireUntil']);
        }
        
        if (isset($this->request['hasAnySubscriptions'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'hasAnySubscriptions' ) ] = $this->apiClient->toQueryValue($this->request['hasAnySubscriptions']);
        }
        
        if (isset($this->request['hasUnresolvedInquiry'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'hasUnresolvedInquiry' ) ] = $this->apiClient->toQueryValue($this->request['hasUnresolvedInquiry']);
        }
        
        if (isset($this->request['submittedInquiryFrom'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'submittedInquiryFrom' ) ] = $this->apiClient->toQueryValue($this->request['submittedInquiryFrom']);
        }
        
        if (isset($this->request['submittedInquiryUntil'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'submittedInquiryUntil' ) ] = $this->apiClient->toQueryValue($this->request['submittedInquiryUntil']);
        }
        
        if (isset($this->request['receivedResponseFrom'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'receivedResponseFrom' ) ] = $this->apiClient->toQueryValue($this->request['receivedResponseFrom']);
        }
        
        if (isset($this->request['receivedResponseUntil'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'receivedResponseUntil' ) ] = $this->apiClient->toQueryValue($this->request['receivedResponseUntil']);
        }
        
        if (isset($this->request['resolvedInquiryFrom'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'resolvedInquiryFrom' ) ] = $this->apiClient->toQueryValue($this->request['resolvedInquiryFrom']);
        }
        
        if (isset($this->request['resolvedInquiryUntil'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'resolvedInquiryUntil' ) ] = $this->apiClient->toQueryValue($this->request['resolvedInquiryUntil']);
        }
        
        if (isset($this->request['hasSubmittedInquiry'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'hasSubmittedInquiry' ) ] = $this->apiClient->toQueryValue($this->request['hasSubmittedInquiry']);
        }
        
        if (isset($this->request['hasReceivedResponseInquiry'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'hasReceivedResponseInquiry' ) ] = $this->apiClient->toQueryValue($this->request['hasReceivedResponseInquiry']);
        }
        
        if (isset($this->request['dataType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'dataType' ) ] = $this->apiClient->toQueryValue($this->request['dataType']);
        }
        
        if (isset($this->request['data'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'data' ) ] = $this->apiClient->toQueryValue($this->request['data']);
        }
        
        if (isset($this->request['hasData'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'hasData' ) ] = $this->apiClient->toQueryValue($this->request['hasData']);
        }
        
        if (isset($this->request['selectedConsentsMap'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'selectedConsentsMap' ) ] = $this->apiClient->toQueryValue($this->request['selectedConsentsMap']);
        }
        
        if (isset($this->request['consentChecked'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'consentChecked' ) ] = $this->apiClient->toQueryValue($this->request['consentChecked']);
        }
        
        if (isset($this->request['hasResolvedInquiry'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'hasResolvedInquiry' ) ] = $this->apiClient->toQueryValue($this->request['hasResolvedInquiry']);
        }
        
        if (isset($this->request['consentHasData'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'consentHasData' ) ] = $this->apiClient->toQueryValue($this->request['consentHasData']);
        }
        
        if (isset($this->request['q'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'q' ) ] = $this->apiClient->toQueryValue($this->request['q']);
        }
        
        if (isset($this->request['orderBy'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderBy' ) ] = $this->apiClient->toQueryValue($this->request['orderBy']);
        }
        
        if (isset($this->request['orderDirection'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderDirection' ) ] = $this->apiClient->toQueryValue($this->request['orderDirection']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/export/create/userExport', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherExport');
        
    }
}

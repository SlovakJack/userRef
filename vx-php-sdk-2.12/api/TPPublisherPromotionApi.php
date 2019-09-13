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
 * The TPPublisherPromotionApi class.
 */
class TPPublisherPromotionApi  extends TPAPIBase {

    /**
     * @return codeExistsRequestTPPublisherPromotionApi
     */
    public function codeExistsRequest(){

        return new codeExistsRequestTPPublisherPromotionApi($this->apiClient);
    }
    /**
     * @return countRequestTPPublisherPromotionApi
     */
    public function countRequest(){

        return new countRequestTPPublisherPromotionApi($this->apiClient);
    }
    /**
     * @return createRequestTPPublisherPromotionApi
     */
    public function createRequest(){

        return new createRequestTPPublisherPromotionApi($this->apiClient);
    }
    /**
     * @return deleteRequestTPPublisherPromotionApi
     */
    public function deleteRequest(){

        return new deleteRequestTPPublisherPromotionApi($this->apiClient);
    }
    /**
     * @return generateCodesRequestTPPublisherPromotionApi
     */
    public function generateCodesRequest(){

        return new generateCodesRequestTPPublisherPromotionApi($this->apiClient);
    }
    /**
     * @return getRequestTPPublisherPromotionApi
     */
    public function getRequest(){

        return new getRequestTPPublisherPromotionApi($this->apiClient);
    }
    /**
     * @return listRequestTPPublisherPromotionApi
     */
    public function listRequest(){

        return new listRequestTPPublisherPromotionApi($this->apiClient);
    }
    /**
     * @return totalSaleRequestTPPublisherPromotionApi
     */
    public function totalSaleRequest(){

        return new totalSaleRequestTPPublisherPromotionApi($this->apiClient);
    }
    /**
     * @return updateRequestTPPublisherPromotionApi
     */
    public function updateRequest(){

        return new updateRequestTPPublisherPromotionApi($this->apiClient);
    }

}

/**
 * Check whether promo code for given email exists
 */
class codeExistsRequestTPPublisherPromotionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Promotion id
     * @param string $promotionId
     * @return codeExistsRequestTPPublisherPromotionApi
     */
    public function promotionId($promotionId){
        $this->request['promotionId'] = $promotionId;
        return $this;
    }
    
    /**
     * User&#39;s email address
     * @param string $email
     * @return codeExistsRequestTPPublisherPromotionApi
     */
    public function email($email){
        $this->request['email'] = $email;
        return $this;
    }
    
    /**
     * Execute request
     * @return bool
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['promotionId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'promotionId' ) ] = $this->apiClient->toQueryValue($this->request['promotionId']);
        }
        
        if (isset($this->request['email'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'email' ) ] = $this->apiClient->toQueryValue($this->request['email']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/promotion/exists', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'bool');
        
    }
}
/**
 * Lists total number of promotions
 */
class countRequestTPPublisherPromotionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return countRequestTPPublisherPromotionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Promotion is expired
     * @param string $expired
     * @return countRequestTPPublisherPromotionApi
     */
    public function expired($expired){
        $this->request['expired'] = $expired;
        return $this;
    }
    
    /**
     * Execute request
     * @return int
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['expired'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'expired' ) ] = $this->apiClient->toQueryValue($this->request['expired']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/promotion/count', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'int');
        
    }
}
/**
 * Create promotion
 */
class createRequestTPPublisherPromotionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return createRequestTPPublisherPromotionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Promotion name
     * @param string $name
     * @return createRequestTPPublisherPromotionApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    
    /**
     * whether promotion allows new customers only
     * @param bool $newCustomersOnly
     * @return createRequestTPPublisherPromotionApi
     */
    public function newCustomersOnly($newCustomersOnly){
        $this->request['newCustomersOnly'] = $newCustomersOnly;
        return $this;
    }
    
    /**
     * The start date.
     * @param string $startDate
     * @return createRequestTPPublisherPromotionApi
     */
    public function startDate($startDate){
        $this->request['startDate'] = $startDate;
        return $this;
    }
    
    /**
     * The end date
     * @param string $endDate
     * @return createRequestTPPublisherPromotionApi
     */
    public function endDate($endDate){
        $this->request['endDate'] = $endDate;
        return $this;
    }
    
    /**
     * Type of promotion discount 
     * @param string $discountType
     * @return createRequestTPPublisherPromotionApi
     */
    public function discountType($discountType){
        $this->request['discountType'] = $discountType;
        return $this;
    }
    
    /**
     * Promotion percentage discount
     * @param Number $percentageDiscount
     * @return createRequestTPPublisherPromotionApi
     */
    public function percentageDiscount($percentageDiscount){
        $this->request['percentageDiscount'] = $percentageDiscount;
        return $this;
    }
    
    /**
     * Whether to allow unlimited uses
     * @param bool $unlimitedUses
     * @return createRequestTPPublisherPromotionApi
     */
    public function unlimitedUses($unlimitedUses){
        $this->request['unlimitedUses'] = $unlimitedUses;
        return $this;
    }
    
    /**
     * Number of uses allowed by promotion
     * @param int $usesAllowed
     * @return createRequestTPPublisherPromotionApi
     */
    public function usesAllowed($usesAllowed){
        $this->request['usesAllowed'] = $usesAllowed;
        return $this;
    }
    
    /**
     * Never allow the value of checkout to be zero
     * @param bool $neverAllowZero
     * @return createRequestTPPublisherPromotionApi
     */
    public function neverAllowZero($neverAllowZero){
        $this->request['neverAllowZero'] = $neverAllowZero;
        return $this;
    }
    
    /**
     * Fixed value for all promotion codes
     * @param string $fixedPromotionCode
     * @return createRequestTPPublisherPromotionApi
     */
    public function fixedPromotionCode($fixedPromotionCode){
        $this->request['fixedPromotionCode'] = $fixedPromotionCode;
        return $this;
    }
    
    /**
     * Prefix for all codes
     * @param string $promotionCodePrefix
     * @return createRequestTPPublisherPromotionApi
     */
    public function promotionCodePrefix($promotionCodePrefix){
        $this->request['promotionCodePrefix'] = $promotionCodePrefix;
        return $this;
    }
    
    /**
     * Type of dependency to terms
     * @param string $termDependencyType
     * @return createRequestTPPublisherPromotionApi
     */
    public function termDependencyType($termDependencyType){
        $this->request['termDependencyType'] = $termDependencyType;
        return $this;
    }
    
    /**
     * Promotion discount applies to first billing period or all billing periods
     * @param bool $applyToAllBillingPeriods
     * @return createRequestTPPublisherPromotionApi
     */
    public function applyToAllBillingPeriods($applyToAllBillingPeriods){
        $this->request['applyToAllBillingPeriods'] = $applyToAllBillingPeriods;
        return $this;
    }
    
    /**
     * Promotion can be applied on renewal
     * @param bool $canBeAppliedOnRenewal
     * @return createRequestTPPublisherPromotionApi
     */
    public function canBeAppliedOnRenewal($canBeAppliedOnRenewal){
        $this->request['canBeAppliedOnRenewal'] = $canBeAppliedOnRenewal;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherPromotion
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['name'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->apiClient->toQueryValue($this->request['name']);
        }
        
        if (isset($this->request['newCustomersOnly'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'newCustomersOnly' ) ] = $this->apiClient->toQueryValue($this->request['newCustomersOnly']);
        }
        
        if (isset($this->request['startDate'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'startDate' ) ] = $this->apiClient->toQueryValue($this->request['startDate']);
        }
        
        if (isset($this->request['endDate'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'endDate' ) ] = $this->apiClient->toQueryValue($this->request['endDate']);
        }
        
        if (isset($this->request['discountType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'discountType' ) ] = $this->apiClient->toQueryValue($this->request['discountType']);
        }
        
        if (isset($this->request['percentageDiscount'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'percentageDiscount' ) ] = $this->apiClient->toQueryValue($this->request['percentageDiscount']);
        }
        
        if (isset($this->request['unlimitedUses'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'unlimitedUses' ) ] = $this->apiClient->toQueryValue($this->request['unlimitedUses']);
        }
        
        if (isset($this->request['usesAllowed'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'usesAllowed' ) ] = $this->apiClient->toQueryValue($this->request['usesAllowed']);
        }
        
        if (isset($this->request['neverAllowZero'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'neverAllowZero' ) ] = $this->apiClient->toQueryValue($this->request['neverAllowZero']);
        }
        
        if (isset($this->request['fixedPromotionCode'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'fixedPromotionCode' ) ] = $this->apiClient->toQueryValue($this->request['fixedPromotionCode']);
        }
        
        if (isset($this->request['promotionCodePrefix'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'promotionCodePrefix' ) ] = $this->apiClient->toQueryValue($this->request['promotionCodePrefix']);
        }
        
        if (isset($this->request['termDependencyType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'termDependencyType' ) ] = $this->apiClient->toQueryValue($this->request['termDependencyType']);
        }
        
        if (isset($this->request['applyToAllBillingPeriods'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'applyToAllBillingPeriods' ) ] = $this->apiClient->toQueryValue($this->request['applyToAllBillingPeriods']);
        }
        
        if (isset($this->request['canBeAppliedOnRenewal'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'canBeAppliedOnRenewal' ) ] = $this->apiClient->toQueryValue($this->request['canBeAppliedOnRenewal']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/promotion/create', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherPromotion');
        
    }
}
/**
 * Deletes a promotion
 */
class deleteRequestTPPublisherPromotionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Promotion id
     * @param string $promotionId
     * @return deleteRequestTPPublisherPromotionApi
     */
    public function promotionId($promotionId){
        $this->request['promotionId'] = $promotionId;
        return $this;
    }
    
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['promotionId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'promotionId' ) ] = $this->apiClient->toQueryValue($this->request['promotionId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/promotion/delete', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
/**
 * Generate promo codes
 */
class generateCodesRequestTPPublisherPromotionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Promotion id
     * @param string $promotionId
     * @return generateCodesRequestTPPublisherPromotionApi
     */
    public function promotionId($promotionId){
        $this->request['promotionId'] = $promotionId;
        return $this;
    }
    
    /**
     * Fixed value for all promotion codes
     * @param string $fixedPromotionCode
     * @return generateCodesRequestTPPublisherPromotionApi
     */
    public function fixedPromotionCode($fixedPromotionCode){
        $this->request['fixedPromotionCode'] = $fixedPromotionCode;
        return $this;
    }
    
    /**
     * Prefix for all codes
     * @param string $promotionCodePrefix
     * @return generateCodesRequestTPPublisherPromotionApi
     */
    public function promotionCodePrefix($promotionCodePrefix){
        $this->request['promotionCodePrefix'] = $promotionCodePrefix;
        return $this;
    }
    
    /**
     * Amount of promotion codes to generate
     * @param int $amount
     * @return generateCodesRequestTPPublisherPromotionApi
     */
    public function amount($amount){
        $this->request['amount'] = $amount;
        return $this;
    }
    
    /**
     * asset id
     * @param string $assetId
     * @return generateCodesRequestTPPublisherPromotionApi
     */
    public function assetId($assetId){
        $this->request['assetId'] = $assetId;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherPromotion
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['promotionId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'promotionId' ) ] = $this->apiClient->toQueryValue($this->request['promotionId']);
        }
        
        if (isset($this->request['fixedPromotionCode'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'fixedPromotionCode' ) ] = $this->apiClient->toQueryValue($this->request['fixedPromotionCode']);
        }
        
        if (isset($this->request['promotionCodePrefix'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'promotionCodePrefix' ) ] = $this->apiClient->toQueryValue($this->request['promotionCodePrefix']);
        }
        
        if (isset($this->request['amount'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'amount' ) ] = $this->apiClient->toQueryValue($this->request['amount']);
        }
        
        if (isset($this->request['assetId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'assetId' ) ] = $this->apiClient->toQueryValue($this->request['assetId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/promotion/generate', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherPromotion');
        
    }
}
/**
 * Gets a prommotion
 */
class getRequestTPPublisherPromotionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Promotion id
     * @param string $promotionId
     * @return getRequestTPPublisherPromotionApi
     */
    public function promotionId($promotionId){
        $this->request['promotionId'] = $promotionId;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherPromotion
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['promotionId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'promotionId' ) ] = $this->apiClient->toQueryValue($this->request['promotionId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/promotion/get', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherPromotion');
        
    }
}
/**
 * Lists promotions
 */
class listRequestTPPublisherPromotionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return listRequestTPPublisherPromotionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listRequestTPPublisherPromotionApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listRequestTPPublisherPromotionApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * Promotion is expired
     * @param string $expired
     * @return listRequestTPPublisherPromotionApi
     */
    public function expired($expired){
        $this->request['expired'] = $expired;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return listRequestTPPublisherPromotionApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * Field to order by
     * @param string $orderBy
     * @return listRequestTPPublisherPromotionApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return listRequestTPPublisherPromotionApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherPromotion[]
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['offset'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offset' ) ] = $this->apiClient->toQueryValue($this->request['offset']);
        }
        
        if (isset($this->request['limit'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'limit' ) ] = $this->apiClient->toQueryValue($this->request['limit']);
        }
        
        if (isset($this->request['expired'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'expired' ) ] = $this->apiClient->toQueryValue($this->request['expired']);
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
        $response = $this->apiClient->callAPI('/publisher/promotion/list', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherPromotion', 'array');
        
    }
}
/**
 * Get total sales for promotion
 */
class totalSaleRequestTPPublisherPromotionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Promotion id
     * @param string $promotionId
     * @return totalSaleRequestTPPublisherPromotionApi
     */
    public function promotionId($promotionId){
        $this->request['promotionId'] = $promotionId;
        return $this;
    }
    
    /**
     * Currency code by ISO 4217 standard
     * @param string $currencyCode
     * @return totalSaleRequestTPPublisherPromotionApi
     */
    public function currencyCode($currencyCode){
        $this->request['currencyCode'] = $currencyCode;
        return $this;
    }
    
    /**
     * Execute request
     * @return string
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['promotionId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'promotionId' ) ] = $this->apiClient->toQueryValue($this->request['promotionId']);
        }
        
        if (isset($this->request['currencyCode'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'currencyCode' ) ] = $this->apiClient->toQueryValue($this->request['currencyCode']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/promotion/total', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'string');
        
    }
}
/**
 * Update a promotion
 */
class updateRequestTPPublisherPromotionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Promotion id
     * @param string $promotionId
     * @return updateRequestTPPublisherPromotionApi
     */
    public function promotionId($promotionId){
        $this->request['promotionId'] = $promotionId;
        return $this;
    }
    
    /**
     * Application aid
     * @param string $aid
     * @return updateRequestTPPublisherPromotionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Promotion name
     * @param string $name
     * @return updateRequestTPPublisherPromotionApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    
    /**
     * Type of promotion discount 
     * @param string $discountType
     * @return updateRequestTPPublisherPromotionApi
     */
    public function discountType($discountType){
        $this->request['discountType'] = $discountType;
        return $this;
    }
    
    /**
     * The start date.
     * @param string $startDate
     * @return updateRequestTPPublisherPromotionApi
     */
    public function startDate($startDate){
        $this->request['startDate'] = $startDate;
        return $this;
    }
    
    /**
     * The end date
     * @param string $endDate
     * @return updateRequestTPPublisherPromotionApi
     */
    public function endDate($endDate){
        $this->request['endDate'] = $endDate;
        return $this;
    }
    
    /**
     * whether promotion allows new customers only
     * @param bool $newCustomersOnly
     * @return updateRequestTPPublisherPromotionApi
     */
    public function newCustomersOnly($newCustomersOnly){
        $this->request['newCustomersOnly'] = $newCustomersOnly;
        return $this;
    }
    
    /**
     * Promotion percentage discount
     * @param Number $percentageDiscount
     * @return updateRequestTPPublisherPromotionApi
     */
    public function percentageDiscount($percentageDiscount){
        $this->request['percentageDiscount'] = $percentageDiscount;
        return $this;
    }
    
    /**
     * Whether to allow unlimited uses
     * @param bool $unlimitedUses
     * @return updateRequestTPPublisherPromotionApi
     */
    public function unlimitedUses($unlimitedUses){
        $this->request['unlimitedUses'] = $unlimitedUses;
        return $this;
    }
    
    /**
     * Number of uses allowed by promotion
     * @param int $usesAllowed
     * @return updateRequestTPPublisherPromotionApi
     */
    public function usesAllowed($usesAllowed){
        $this->request['usesAllowed'] = $usesAllowed;
        return $this;
    }
    
    /**
     * Never allow the value of checkout to be zero
     * @param bool $neverAllowZero
     * @return updateRequestTPPublisherPromotionApi
     */
    public function neverAllowZero($neverAllowZero){
        $this->request['neverAllowZero'] = $neverAllowZero;
        return $this;
    }
    
    /**
     * Fixed value for all promotion codes
     * @param string $fixedPromotionCode
     * @return updateRequestTPPublisherPromotionApi
     */
    public function fixedPromotionCode($fixedPromotionCode){
        $this->request['fixedPromotionCode'] = $fixedPromotionCode;
        return $this;
    }
    
    /**
     * Prefix for all codes
     * @param string $promotionCodePrefix
     * @return updateRequestTPPublisherPromotionApi
     */
    public function promotionCodePrefix($promotionCodePrefix){
        $this->request['promotionCodePrefix'] = $promotionCodePrefix;
        return $this;
    }
    
    /**
     * Type of dependency to terms
     * @param string $termDependencyType
     * @return updateRequestTPPublisherPromotionApi
     */
    public function termDependencyType($termDependencyType){
        $this->request['termDependencyType'] = $termDependencyType;
        return $this;
    }
    
    /**
     * Promotion discount applies to first billing period or all billing periods
     * @param bool $applyToAllBillingPeriods
     * @return updateRequestTPPublisherPromotionApi
     */
    public function applyToAllBillingPeriods($applyToAllBillingPeriods){
        $this->request['applyToAllBillingPeriods'] = $applyToAllBillingPeriods;
        return $this;
    }
    
    /**
     * Promotion can be applied on renewal
     * @param bool $canBeAppliedOnRenewal
     * @return updateRequestTPPublisherPromotionApi
     */
    public function canBeAppliedOnRenewal($canBeAppliedOnRenewal){
        $this->request['canBeAppliedOnRenewal'] = $canBeAppliedOnRenewal;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherPromotion
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['promotionId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'promotionId' ) ] = $this->apiClient->toQueryValue($this->request['promotionId']);
        }
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['name'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->apiClient->toQueryValue($this->request['name']);
        }
        
        if (isset($this->request['discountType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'discountType' ) ] = $this->apiClient->toQueryValue($this->request['discountType']);
        }
        
        if (isset($this->request['startDate'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'startDate' ) ] = $this->apiClient->toQueryValue($this->request['startDate']);
        }
        
        if (isset($this->request['endDate'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'endDate' ) ] = $this->apiClient->toQueryValue($this->request['endDate']);
        }
        
        if (isset($this->request['newCustomersOnly'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'newCustomersOnly' ) ] = $this->apiClient->toQueryValue($this->request['newCustomersOnly']);
        }
        
        if (isset($this->request['percentageDiscount'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'percentageDiscount' ) ] = $this->apiClient->toQueryValue($this->request['percentageDiscount']);
        }
        
        if (isset($this->request['unlimitedUses'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'unlimitedUses' ) ] = $this->apiClient->toQueryValue($this->request['unlimitedUses']);
        }
        
        if (isset($this->request['usesAllowed'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'usesAllowed' ) ] = $this->apiClient->toQueryValue($this->request['usesAllowed']);
        }
        
        if (isset($this->request['neverAllowZero'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'neverAllowZero' ) ] = $this->apiClient->toQueryValue($this->request['neverAllowZero']);
        }
        
        if (isset($this->request['fixedPromotionCode'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'fixedPromotionCode' ) ] = $this->apiClient->toQueryValue($this->request['fixedPromotionCode']);
        }
        
        if (isset($this->request['promotionCodePrefix'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'promotionCodePrefix' ) ] = $this->apiClient->toQueryValue($this->request['promotionCodePrefix']);
        }
        
        if (isset($this->request['termDependencyType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'termDependencyType' ) ] = $this->apiClient->toQueryValue($this->request['termDependencyType']);
        }
        
        if (isset($this->request['applyToAllBillingPeriods'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'applyToAllBillingPeriods' ) ] = $this->apiClient->toQueryValue($this->request['applyToAllBillingPeriods']);
        }
        
        if (isset($this->request['canBeAppliedOnRenewal'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'canBeAppliedOnRenewal' ) ] = $this->apiClient->toQueryValue($this->request['canBeAppliedOnRenewal']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/promotion/update', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherPromotion');
        
    }
}

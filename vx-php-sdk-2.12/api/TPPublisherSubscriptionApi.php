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
 * The TPPublisherSubscriptionApi class.
 */
class TPPublisherSubscriptionApi  extends TPAPIBase {

    /**
     * @return cancelSubscriptionRequestTPPublisherSubscriptionApi
     */
    public function cancelSubscriptionRequest(){

        return new cancelSubscriptionRequestTPPublisherSubscriptionApi($this->apiClient);
    }
    /**
     * @return countRequestTPPublisherSubscriptionApi
     */
    public function countRequest(){

        return new countRequestTPPublisherSubscriptionApi($this->apiClient);
    }
    /**
     * @return listRequestTPPublisherSubscriptionApi
     */
    public function listRequest(){

        return new listRequestTPPublisherSubscriptionApi($this->apiClient);
    }
    /**
     * @return statsRequestTPPublisherSubscriptionApi
     */
    public function statsRequest(){

        return new statsRequestTPPublisherSubscriptionApi($this->apiClient);
    }
    /**
     * @return updateRequestTPPublisherSubscriptionApi
     */
    public function updateRequest(){

        return new updateRequestTPPublisherSubscriptionApi($this->apiClient);
    }

}

/**
 * Cancels a user&#39;s subscription
 */
class cancelSubscriptionRequestTPPublisherSubscriptionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return cancelSubscriptionRequestTPPublisherSubscriptionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * User subscription id
     * @param string $subscriptionId
     * @return cancelSubscriptionRequestTPPublisherSubscriptionApi
     */
    public function subscriptionId($subscriptionId){
        $this->request['subscriptionId'] = $subscriptionId;
        return $this;
    }
    
    /**
     * Refund last payment
     * @param bool $refundLastPayment
     * @return cancelSubscriptionRequestTPPublisherSubscriptionApi
     */
    public function refundLastPayment($refundLastPayment){
        $this->request['refundLastPayment'] = $refundLastPayment;
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
        
        if (isset($this->request['subscriptionId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'subscriptionId' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionId']);
        }
        
        if (isset($this->request['refundLastPayment'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'refundLastPayment' ) ] = $this->apiClient->toQueryValue($this->request['refundLastPayment']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/subscription/cancel', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'bool');
        
    }
}
/**
 * Count active subscriptions
 */
class countRequestTPPublisherSubscriptionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return countRequestTPPublisherSubscriptionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
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
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/subscription/count', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'int');
        
    }
}
/**
 * Lists subscriptions.
 */
class listRequestTPPublisherSubscriptionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return listRequestTPPublisherSubscriptionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listRequestTPPublisherSubscriptionApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listRequestTPPublisherSubscriptionApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * The type
     * @param string $type
     * @return listRequestTPPublisherSubscriptionApi
     */
    public function type($type){
        $this->request['type'] = $type;
        return $this;
    }
    
    /**
     * The start date. If you use a date-range filter without &#39;select_by&#39; parameter, method will return result filtered by &#39;update date&#39;.To specify filter field use &#39;select_by&#39; parameter.
     * @param string $startDate
     * @return listRequestTPPublisherSubscriptionApi
     */
    public function startDate($startDate){
        $this->request['startDate'] = $startDate;
        return $this;
    }
    
    /**
     * The end date. If you use a date-range filter without &#39;select_by&#39; parameter, method will return result filtered by &#39;update date&#39;.To specify filter field use &#39;select_by&#39; parameter.
     * @param string $endDate
     * @return listRequestTPPublisherSubscriptionApi
     */
    public function endDate($endDate){
        $this->request['endDate'] = $endDate;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return listRequestTPPublisherSubscriptionApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * Filter subscription date field
     * @param string $selectBy
     * @return listRequestTPPublisherSubscriptionApi
     */
    public function selectBy($selectBy){
        $this->request['selectBy'] = $selectBy;
        return $this;
    }
    
    /**
     * Subscription status
     * @param string $status
     * @return listRequestTPPublisherSubscriptionApi
     */
    public function status($status){
        $this->request['status'] = $status;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherUserSubscription[]
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
        
        if (isset($this->request['type'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'type' ) ] = $this->apiClient->toQueryValue($this->request['type']);
        }
        
        if (isset($this->request['startDate'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'startDate' ) ] = $this->apiClient->toQueryValue($this->request['startDate']);
        }
        
        if (isset($this->request['endDate'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'endDate' ) ] = $this->apiClient->toQueryValue($this->request['endDate']);
        }
        
        if (isset($this->request['q'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'q' ) ] = $this->apiClient->toQueryValue($this->request['q']);
        }
        
        if (isset($this->request['selectBy'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'selectBy' ) ] = $this->apiClient->toQueryValue($this->request['selectBy']);
        }
        
        if (isset($this->request['status'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'status' ) ] = $this->apiClient->toQueryValue($this->request['status']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/subscription/list', 'GET', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherUserSubscription', 'array');
        
    }
}
/**
 * Lists subscriptions summary stats
 */
class statsRequestTPPublisherSubscriptionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return statsRequestTPPublisherSubscriptionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * User&#39;s uid
     * @param string $uid
     * @return statsRequestTPPublisherSubscriptionApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return statsRequestTPPublisherSubscriptionApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return statsRequestTPPublisherSubscriptionApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return statsRequestTPPublisherSubscriptionApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherUserSubscriptionDto[]
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['uid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->apiClient->toQueryValue($this->request['uid']);
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
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/subscription/stats', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherUserSubscriptionDto', 'array');
        
    }
}
/**
 * Updates a user&#39;s subscription
 */
class updateRequestTPPublisherSubscriptionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return updateRequestTPPublisherSubscriptionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Subscription id
     * @param string $subscriptionId
     * @return updateRequestTPPublisherSubscriptionApi
     */
    public function subscriptionId($subscriptionId){
        $this->request['subscriptionId'] = $subscriptionId;
        return $this;
    }
    
    /**
     * Date of next bill
     * @param string $nextBillDate
     * @return updateRequestTPPublisherSubscriptionApi
     */
    public function nextBillDate($nextBillDate){
        $this->request['nextBillDate'] = $nextBillDate;
        return $this;
    }
    
    /**
     * Subscription auto renew
     * @param bool $autoRenew
     * @return updateRequestTPPublisherSubscriptionApi
     */
    public function autoRenew($autoRenew){
        $this->request['autoRenew'] = $autoRenew;
        return $this;
    }
    
    /**
     * Payment method id
     * @param string $paymentMethodId
     * @return updateRequestTPPublisherSubscriptionApi
     */
    public function paymentMethodId($paymentMethodId){
        $this->request['paymentMethodId'] = $paymentMethodId;
        return $this;
    }
    
    /**
     * Public id of specific user address
     * @param string $userAddressId
     * @return updateRequestTPPublisherSubscriptionApi
     */
    public function userAddressId($userAddressId){
        $this->request['userAddressId'] = $userAddressId;
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
        
        if (isset($this->request['subscriptionId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'subscriptionId' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionId']);
        }
        
        if (isset($this->request['nextBillDate'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'nextBillDate' ) ] = $this->apiClient->toQueryValue($this->request['nextBillDate']);
        }
        
        if (isset($this->request['autoRenew'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'autoRenew' ) ] = $this->apiClient->toQueryValue($this->request['autoRenew']);
        }
        
        if (isset($this->request['paymentMethodId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'paymentMethodId' ) ] = $this->apiClient->toQueryValue($this->request['paymentMethodId']);
        }
        
        if (isset($this->request['userAddressId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'userAddressId' ) ] = $this->apiClient->toQueryValue($this->request['userAddressId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/subscription/update', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'bool');
        
    }
}

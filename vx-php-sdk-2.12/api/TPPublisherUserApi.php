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
 * The TPPublisherUserApi class.
 */
class TPPublisherUserApi  extends TPAPIBase {

    /**
     * @return createRequestTPPublisherUserApi
     */
    public function createRequest(){

        return new createRequestTPPublisherUserApi($this->apiClient);
    }
    /**
     * @return disableRequestTPPublisherUserApi
     */
    public function disableRequest(){

        return new disableRequestTPPublisherUserApi($this->apiClient);
    }
    /**
     * @return getRequestTPPublisherUserApi
     */
    public function getRequest(){

        return new getRequestTPPublisherUserApi($this->apiClient);
    }
    /**
     * @return listRequestTPPublisherUserApi
     */
    public function listRequest(){

        return new listRequestTPPublisherUserApi($this->apiClient);
    }
    /**
     * @return searchRequestTPPublisherUserApi
     */
    public function searchRequest(){

        return new searchRequestTPPublisherUserApi($this->apiClient);
    }
    /**
     * @return updateRequestTPPublisherUserApi
     */
    public function updateRequest(){

        return new updateRequestTPPublisherUserApi($this->apiClient);
    }

}

/**
 * Creates a user
 */
class createRequestTPPublisherUserApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return createRequestTPPublisherUserApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * User&#39;s uid
     * @param string $uid
     * @return createRequestTPPublisherUserApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    
    /**
     * User&#39;s email address
     * @param string $email
     * @return createRequestTPPublisherUserApi
     */
    public function email($email){
        $this->request['email'] = $email;
        return $this;
    }
    
    /**
     * User&#39;s first name
     * @param string $firstName
     * @return createRequestTPPublisherUserApi
     */
    public function firstName($firstName){
        $this->request['firstName'] = $firstName;
        return $this;
    }
    
    /**
     * User&#39;s last name
     * @param string $lastName
     * @return createRequestTPPublisherUserApi
     */
    public function lastName($lastName){
        $this->request['lastName'] = $lastName;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherUser
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['uid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->apiClient->toQueryValue($this->request['uid']);
        }
        
        if (isset($this->request['email'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'email' ) ] = $this->apiClient->toQueryValue($this->request['email']);
        }
        
        if (isset($this->request['firstName'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'firstName' ) ] = $this->apiClient->toQueryValue($this->request['firstName']);
        }
        
        if (isset($this->request['lastName'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'lastName' ) ] = $this->apiClient->toQueryValue($this->request['lastName']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/create', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherUser');
        
    }
}
/**
 * Disables a user
 */
class disableRequestTPPublisherUserApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return disableRequestTPPublisherUserApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * User&#39;s uid
     * @param string $uid
     * @return disableRequestTPPublisherUserApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['uid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->apiClient->toQueryValue($this->request['uid']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/disable', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
/**
 * Gets a user
 */
class getRequestTPPublisherUserApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return getRequestTPPublisherUserApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * User&#39;s uid
     * @param string $uid
     * @return getRequestTPPublisherUserApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    
    /**
     * If the object is disabled
     * @param bool $disabled
     * @return getRequestTPPublisherUserApi
     */
    public function disabled($disabled){
        $this->request['disabled'] = $disabled;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherUser
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['uid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->apiClient->toQueryValue($this->request['uid']);
        }
        
        if (isset($this->request['disabled'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'disabled' ) ] = $this->apiClient->toQueryValue($this->request['disabled']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/get', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherUser');
        
    }
}
/**
 * Lists an app&#39;s users
 */
class listRequestTPPublisherUserApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return listRequestTPPublisherUserApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listRequestTPPublisherUserApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listRequestTPPublisherUserApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * If the object is disabled
     * @param bool $disabled
     * @return listRequestTPPublisherUserApi
     */
    public function disabled($disabled){
        $this->request['disabled'] = $disabled;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return listRequestTPPublisherUserApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherUser[]
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
        
        if (isset($this->request['disabled'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'disabled' ) ] = $this->apiClient->toQueryValue($this->request['disabled']);
        }
        
        if (isset($this->request['q'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'q' ) ] = $this->apiClient->toQueryValue($this->request['q']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/list', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherUser', 'array');
        
    }
}
/**
 * Searches an app&#39;s users
 */
class searchRequestTPPublisherUserApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return searchRequestTPPublisherUserApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return searchRequestTPPublisherUserApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return searchRequestTPPublisherUserApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * User&#39;s uid
     * @param string $uid
     * @return searchRequestTPPublisherUserApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    
    /**
     * Find users which contain a keyword in name
     * @param string $name
     * @return searchRequestTPPublisherUserApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    
    /**
     * Find users which contain a keyword in email
     * @param string $email
     * @return searchRequestTPPublisherUserApi
     */
    public function email($email){
        $this->request['email'] = $email;
        return $this;
    }
    
    /**
     * Find users which was registered from selected date
     * @param string $registeredFrom
     * @return searchRequestTPPublisherUserApi
     */
    public function registeredFrom($registeredFrom){
        $this->request['registeredFrom'] = $registeredFrom;
        return $this;
    }
    
    /**
     * Find users which was registered until selected date
     * @param string $registeredUntil
     * @return searchRequestTPPublisherUserApi
     */
    public function registeredUntil($registeredUntil){
        $this->request['registeredUntil'] = $registeredUntil;
        return $this;
    }
    
    /**
     * Find users which have access to selected resources
     * @param string[] $accessToResources
     * @return searchRequestTPPublisherUserApi
     */
    public function accessToResources($accessToResources){
        $this->request['accessToResources'] = $accessToResources;
        return $this;
    }
    
    /**
     * Find users which have conversion terms for selected terms
     * @param string[] $convertedTerms
     * @return searchRequestTPPublisherUserApi
     */
    public function convertedTerms($convertedTerms){
        $this->request['convertedTerms'] = $convertedTerms;
        return $this;
    }
    
    /**
     * Find users which have user access from selected date
     * @param string $accessFrom
     * @return searchRequestTPPublisherUserApi
     */
    public function accessFrom($accessFrom){
        $this->request['accessFrom'] = $accessFrom;
        return $this;
    }
    
    /**
     * Find users which have user access until selected date
     * @param string $accessUntil
     * @return searchRequestTPPublisherUserApi
     */
    public function accessUntil($accessUntil){
        $this->request['accessUntil'] = $accessUntil;
        return $this;
    }
    
    /**
     * Find users which have converted term from selected date
     * @param string $convertedTermFrom
     * @return searchRequestTPPublisherUserApi
     */
    public function convertedTermFrom($convertedTermFrom){
        $this->request['convertedTermFrom'] = $convertedTermFrom;
        return $this;
    }
    
    /**
     * Find users which have converted term until selected date
     * @param string $convertedTermUntil
     * @return searchRequestTPPublisherUserApi
     */
    public function convertedTermUntil($convertedTermUntil){
        $this->request['convertedTermUntil'] = $convertedTermUntil;
        return $this;
    }
    
    /**
     * Find users which have selected redeemed promotions
     * @param string[] $redeemedPromotions
     * @return searchRequestTPPublisherUserApi
     */
    public function redeemedPromotions($redeemedPromotions){
        $this->request['redeemedPromotions'] = $redeemedPromotions;
        return $this;
    }
    
    /**
     * Find users which have redeemed promotions from selected date
     * @param string $redeemedPromotionFrom
     * @return searchRequestTPPublisherUserApi
     */
    public function redeemedPromotionFrom($redeemedPromotionFrom){
        $this->request['redeemedPromotionFrom'] = $redeemedPromotionFrom;
        return $this;
    }
    
    /**
     * Find users which have redeemed promotions until selected date
     * @param string $redeemedPromotionUntil
     * @return searchRequestTPPublisherUserApi
     */
    public function redeemedPromotionUntil($redeemedPromotionUntil){
        $this->request['redeemedPromotionUntil'] = $redeemedPromotionUntil;
        return $this;
    }
    
    /**
     * Find users which have trial subscription
     * @param bool $trialPeriod
     * @return searchRequestTPPublisherUserApi
     */
    public function trialPeriod($trialPeriod){
        $this->request['trialPeriod'] = $trialPeriod;
        return $this;
    }
    
    /**
     * Find users which have user access (can be expired)
     * @param bool $hasAccess
     * @return searchRequestTPPublisherUserApi
     */
    public function hasAccess($hasAccess){
        $this->request['hasAccess'] = $hasAccess;
        return $this;
    }
    
    /**
     * Find users which have conversion term
     * @param bool $hasConversionTerm
     * @return searchRequestTPPublisherUserApi
     */
    public function hasConversionTerm($hasConversionTerm){
        $this->request['hasConversionTerm'] = $hasConversionTerm;
        return $this;
    }
    
    /**
     * Find users which have redeemed promotion
     * @param bool $hasRedeemedPromotion
     * @return searchRequestTPPublisherUserApi
     */
    public function hasRedeemedPromotion($hasRedeemedPromotion){
        $this->request['hasRedeemedPromotion'] = $hasRedeemedPromotion;
        return $this;
    }
    
    /**
     * Find users which have reserved trial redemptions. It works together with redeemed promotions and works as &#39;OR&#39; conditions 
     * @param bool $includeTrialRedemptions
     * @return searchRequestTPPublisherUserApi
     */
    public function includeTrialRedemptions($includeTrialRedemptions){
        $this->request['includeTrialRedemptions'] = $includeTrialRedemptions;
        return $this;
    }
    
    /**
     * Find users which have conversion terms for selected term types
     * @param string[] $convertedTermTypes
     * @return searchRequestTPPublisherUserApi
     */
    public function convertedTermTypes($convertedTermTypes){
        $this->request['convertedTermTypes'] = $convertedTermTypes;
        return $this;
    }
    
    /**
     * Find users which have conversion terms for selected term types
     * @param bool $hasConversionTermType
     * @return searchRequestTPPublisherUserApi
     */
    public function hasConversionTermType($hasConversionTermType){
        $this->request['hasConversionTermType'] = $hasConversionTermType;
        return $this;
    }
    
    /**
     * Currency of the payments to take into account
     * @param string $spentMoneyCurrency
     * @return searchRequestTPPublisherUserApi
     */
    public function spentMoneyCurrency($spentMoneyCurrency){
        $this->request['spentMoneyCurrency'] = $spentMoneyCurrency;
        return $this;
    }
    
    /**
     * Find users which spent money more than a value
     * @param Number $spentMoneyFrom
     * @return searchRequestTPPublisherUserApi
     */
    public function spentMoneyFrom($spentMoneyFrom){
        $this->request['spentMoneyFrom'] = $spentMoneyFrom;
        return $this;
    }
    
    /**
     * Find users which spent money less than a value
     * @param Number $spentMoneyUntil
     * @return searchRequestTPPublisherUserApi
     */
    public function spentMoneyUntil($spentMoneyUntil){
        $this->request['spentMoneyUntil'] = $spentMoneyUntil;
        return $this;
    }
    
    /**
     * Find users which bougth something from a date
     * @param string $spentFromDate
     * @return searchRequestTPPublisherUserApi
     */
    public function spentFromDate($spentFromDate){
        $this->request['spentFromDate'] = $spentFromDate;
        return $this;
    }
    
    /**
     * Find users which bougth something until a date
     * @param string $spentUntilDate
     * @return searchRequestTPPublisherUserApi
     */
    public function spentUntilDate($spentUntilDate){
        $this->request['spentUntilDate'] = $spentUntilDate;
        return $this;
    }
    
    /**
     * Find users which use selected payment methods
     * @param int[] $paymentMethods
     * @return searchRequestTPPublisherUserApi
     */
    public function paymentMethods($paymentMethods){
        $this->request['paymentMethods'] = $paymentMethods;
        return $this;
    }
    
    /**
     * Find users which have problems with autorenew of subscription from a date
     * @param string $billingFailureFrom
     * @return searchRequestTPPublisherUserApi
     */
    public function billingFailureFrom($billingFailureFrom){
        $this->request['billingFailureFrom'] = $billingFailureFrom;
        return $this;
    }
    
    /**
     * Find users which have problems with autorenew of subscription until a date
     * @param string $billingFailureUntil
     * @return searchRequestTPPublisherUserApi
     */
    public function billingFailureUntil($billingFailureUntil){
        $this->request['billingFailureUntil'] = $billingFailureUntil;
        return $this;
    }
    
    /**
     * Find users which had problems with billing
     * @param bool $hadBillingFailure
     * @return searchRequestTPPublisherUserApi
     */
    public function hadBillingFailure($hadBillingFailure){
        $this->request['hadBillingFailure'] = $hadBillingFailure;
        return $this;
    }
    
    /**
     * Find users which have payment
     * @param bool $hasPayment
     * @return searchRequestTPPublisherUserApi
     */
    public function hasPayment($hasPayment){
        $this->request['hasPayment'] = $hasPayment;
        return $this;
    }
    
    /**
     * Find users which have given external customer id
     * @param string $upiExtCustomerId
     * @return searchRequestTPPublisherUserApi
     */
    public function upiExtCustomerId($upiExtCustomerId){
        $this->request['upiExtCustomerId'] = $upiExtCustomerId;
        return $this;
    }
    
    /**
     * Find users which have active subscription to selected resources
     * @param string[] $activeSubscriptionToResources
     * @return searchRequestTPPublisherUserApi
     */
    public function activeSubscriptionToResources($activeSubscriptionToResources){
        $this->request['activeSubscriptionToResources'] = $activeSubscriptionToResources;
        return $this;
    }
    
    /**
     * Find users which have active subscription
     * @param bool $hasActiveSubscription
     * @return searchRequestTPPublisherUserApi
     */
    public function hasActiveSubscription($hasActiveSubscription){
        $this->request['hasActiveSubscription'] = $hasActiveSubscription;
        return $this;
    }
    
    /**
     * Find users which have starting subscription from selected date
     * @param string $subscriptionStartFrom
     * @return searchRequestTPPublisherUserApi
     */
    public function subscriptionStartFrom($subscriptionStartFrom){
        $this->request['subscriptionStartFrom'] = $subscriptionStartFrom;
        return $this;
    }
    
    /**
     * Find users which have starting subscription until selected date
     * @param string $subscriptionStartUntil
     * @return searchRequestTPPublisherUserApi
     */
    public function subscriptionStartUntil($subscriptionStartUntil){
        $this->request['subscriptionStartUntil'] = $subscriptionStartUntil;
        return $this;
    }
    
    /**
     * Find users which have renewing subscription from selected date
     * @param string $subscriptionRenewFrom
     * @return searchRequestTPPublisherUserApi
     */
    public function subscriptionRenewFrom($subscriptionRenewFrom){
        $this->request['subscriptionRenewFrom'] = $subscriptionRenewFrom;
        return $this;
    }
    
    /**
     * Find users which have renewing subscription until selected date
     * @param string $subscriptionRenewUntil
     * @return searchRequestTPPublisherUserApi
     */
    public function subscriptionRenewUntil($subscriptionRenewUntil){
        $this->request['subscriptionRenewUntil'] = $subscriptionRenewUntil;
        return $this;
    }
    
    /**
     * Find users which have exipiring subscription from selected date
     * @param string $subscriptionExpireFrom
     * @return searchRequestTPPublisherUserApi
     */
    public function subscriptionExpireFrom($subscriptionExpireFrom){
        $this->request['subscriptionExpireFrom'] = $subscriptionExpireFrom;
        return $this;
    }
    
    /**
     * Find users which have expiring subscription until selected date
     * @param string $subscriptionExpireUntil
     * @return searchRequestTPPublisherUserApi
     */
    public function subscriptionExpireUntil($subscriptionExpireUntil){
        $this->request['subscriptionExpireUntil'] = $subscriptionExpireUntil;
        return $this;
    }
    
    /**
     * Find users which have expiring trial subscription from selected date
     * @param string $trialExpireFrom
     * @return searchRequestTPPublisherUserApi
     */
    public function trialExpireFrom($trialExpireFrom){
        $this->request['trialExpireFrom'] = $trialExpireFrom;
        return $this;
    }
    
    /**
     * Find users which have expiring trial subscription until selected date
     * @param string $trialExpireUntil
     * @return searchRequestTPPublisherUserApi
     */
    public function trialExpireUntil($trialExpireUntil){
        $this->request['trialExpireUntil'] = $trialExpireUntil;
        return $this;
    }
    
    /**
     * Find users with any subscriptions
     * @param bool $hasAnySubscriptions
     * @return searchRequestTPPublisherUserApi
     */
    public function hasAnySubscriptions($hasAnySubscriptions){
        $this->request['hasAnySubscriptions'] = $hasAnySubscriptions;
        return $this;
    }
    
    /**
     * Find users which have unresolved inquiry
     * @param bool $hasUnresolvedInquiry
     * @return searchRequestTPPublisherUserApi
     */
    public function hasUnresolvedInquiry($hasUnresolvedInquiry){
        $this->request['hasUnresolvedInquiry'] = $hasUnresolvedInquiry;
        return $this;
    }
    
    /**
     * Find users which have submitted inquiry from selected date
     * @param string $submittedInquiryFrom
     * @return searchRequestTPPublisherUserApi
     */
    public function submittedInquiryFrom($submittedInquiryFrom){
        $this->request['submittedInquiryFrom'] = $submittedInquiryFrom;
        return $this;
    }
    
    /**
     * Find users which have submitted inquiry until selected date
     * @param string $submittedInquiryUntil
     * @return searchRequestTPPublisherUserApi
     */
    public function submittedInquiryUntil($submittedInquiryUntil){
        $this->request['submittedInquiryUntil'] = $submittedInquiryUntil;
        return $this;
    }
    
    /**
     * Find users which received response from selected date
     * @param string $receivedResponseFrom
     * @return searchRequestTPPublisherUserApi
     */
    public function receivedResponseFrom($receivedResponseFrom){
        $this->request['receivedResponseFrom'] = $receivedResponseFrom;
        return $this;
    }
    
    /**
     * Find users which received response until selected date
     * @param string $receivedResponseUntil
     * @return searchRequestTPPublisherUserApi
     */
    public function receivedResponseUntil($receivedResponseUntil){
        $this->request['receivedResponseUntil'] = $receivedResponseUntil;
        return $this;
    }
    
    /**
     * Find users which have resolved inquiry from selected date
     * @param string $resolvedInquiryFrom
     * @return searchRequestTPPublisherUserApi
     */
    public function resolvedInquiryFrom($resolvedInquiryFrom){
        $this->request['resolvedInquiryFrom'] = $resolvedInquiryFrom;
        return $this;
    }
    
    /**
     * Find users which have resolved inquiry until selected date
     * @param string $resolvedInquiryUntil
     * @return searchRequestTPPublisherUserApi
     */
    public function resolvedInquiryUntil($resolvedInquiryUntil){
        $this->request['resolvedInquiryUntil'] = $resolvedInquiryUntil;
        return $this;
    }
    
    /**
     * Find users with submitted inquries
     * @param bool $hasSubmittedInquiry
     * @return searchRequestTPPublisherUserApi
     */
    public function hasSubmittedInquiry($hasSubmittedInquiry){
        $this->request['hasSubmittedInquiry'] = $hasSubmittedInquiry;
        return $this;
    }
    
    /**
     * Find users with inquiries with response
     * @param bool $hasReceivedResponseInquiry
     * @return searchRequestTPPublisherUserApi
     */
    public function hasReceivedResponseInquiry($hasReceivedResponseInquiry){
        $this->request['hasReceivedResponseInquiry'] = $hasReceivedResponseInquiry;
        return $this;
    }
    
    /**
     * Defines searching field
     * @param string[] $dataType
     * @return searchRequestTPPublisherUserApi
     */
    public function dataType($dataType){
        $this->request['dataType'] = $dataType;
        return $this;
    }
    
    /**
     * Defines search data
     * @param string $data
     * @return searchRequestTPPublisherUserApi
     */
    public function data($data){
        $this->request['data'] = $data;
        return $this;
    }
    
    /**
     * Find users with any data
     * @param bool $hasData
     * @return searchRequestTPPublisherUserApi
     */
    public function hasData($hasData){
        $this->request['hasData'] = $hasData;
        return $this;
    }
    
    /**
     * Find user who accept list of consentDataType
     * @param string[] $selectedConsentsMap
     * @return searchRequestTPPublisherUserApi
     */
    public function selectedConsentsMap($selectedConsentsMap){
        $this->request['selectedConsentsMap'] = $selectedConsentsMap;
        return $this;
    }
    
    /**
     * Find checked or unchecked consents
     * @param bool $consentChecked
     * @return searchRequestTPPublisherUserApi
     */
    public function consentChecked($consentChecked){
        $this->request['consentChecked'] = $consentChecked;
        return $this;
    }
    
    /**
     * Find users with resolved inquiries
     * @param bool $hasResolvedInquiry
     * @return searchRequestTPPublisherUserApi
     */
    public function hasResolvedInquiry($hasResolvedInquiry){
        $this->request['hasResolvedInquiry'] = $hasResolvedInquiry;
        return $this;
    }
    
    /**
     * Find users with accepted consents
     * @param bool $consentHasData
     * @return searchRequestTPPublisherUserApi
     */
    public function consentHasData($consentHasData){
        $this->request['consentHasData'] = $consentHasData;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return searchRequestTPPublisherUserApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * Field to order by
     * @param string $orderBy
     * @return searchRequestTPPublisherUserApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return searchRequestTPPublisherUserApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherUser[]
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
        
        if (isset($this->request['uid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->apiClient->toQueryValue($this->request['uid']);
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
        $response = $this->apiClient->callAPI('/publisher/user/search', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherUser', 'array');
        
    }
}
/**
 * Updates a user
 */
class updateRequestTPPublisherUserApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return updateRequestTPPublisherUserApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * User&#39;s uid
     * @param string $uid
     * @return updateRequestTPPublisherUserApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    
    /**
     * User&#39;s email address
     * @param string $email
     * @return updateRequestTPPublisherUserApi
     */
    public function email($email){
        $this->request['email'] = $email;
        return $this;
    }
    
    /**
     * User&#39;s first name
     * @param string $firstName
     * @return updateRequestTPPublisherUserApi
     */
    public function firstName($firstName){
        $this->request['firstName'] = $firstName;
        return $this;
    }
    
    /**
     * User&#39;s last name
     * @param string $lastName
     * @return updateRequestTPPublisherUserApi
     */
    public function lastName($lastName){
        $this->request['lastName'] = $lastName;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherUser
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['uid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->apiClient->toQueryValue($this->request['uid']);
        }
        
        if (isset($this->request['email'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'email' ) ] = $this->apiClient->toQueryValue($this->request['email']);
        }
        
        if (isset($this->request['firstName'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'firstName' ) ] = $this->apiClient->toQueryValue($this->request['firstName']);
        }
        
        if (isset($this->request['lastName'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'lastName' ) ] = $this->apiClient->toQueryValue($this->request['lastName']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/user/update', 'POST', $queryParams, $headerParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherUser');
        
    }
}

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
 * The TPPublisherTerm model.
 * model
 */
class TPPublisherTerm {

    public static $dataTypes = array(
    
        "termId" => "string",
    
        "aid" => "string",
    
        "resource" => "TPPublisherResource",
    
        "type" => "string",
    
        "typeName" => "string",
    
        "name" => "string",
    
        "description" => "string",
    
        "verifyOnRenewal" => "bool",
    
        "createDate" => "string",
    
        "paymentBillingPlan" => "string",
    
        "paymentBillingPlanDescription" => "string",
    
        "paymentBillingPlanTable" => "array[]",
    
        "paymentAllowRenewDays" => "int",
    
        "paymentForceAutoRenew" => "bool",
    
        "paymentIsCustomPriceAvailable" => "bool",
    
        "paymentIsSubscription" => "bool",
    
        "paymentHasFreeTrial" => "bool",
    
        "paymentNewCustomersOnly" => "bool",
    
        "paymentTrialNewCustomersOnly" => "bool",
    
        "paymentAllowPromoCodes" => "bool",
    
        "paymentRenewGracePeriod" => "int",
    
        "paymentAllowGift" => "bool",
    
        "paymentCurrency" => "string",
    
        "paymentFirstPrice" => "double",
    
        "schedule" => "TPPublisherSchedule",
    
        "scheduleBilling" => "string",
    
        "customRequireUser" => "bool",
    
        "customDefaultAccessPeriod" => "int",
    
        "adviewVastUrl" => "string",
    
        "adviewAccessPeriod" => "int",
    
        "registrationAccessPeriod" => "int",
    
        "registrationGracePeriod" => "int",
    
        "externalApiId" => "string",
    
        "externalApiName" => "string",
    
        "evtVerificationPeriod" => "int",
    
        "evtFixedTimeAccessPeriod" => "int",
    
        "evtGracePeriod" => "int",
    
        "evtItunesBundleId" => "string",
    
        "evtItunesProductId" => "string",
    
        "evtGooglePlayProductId" => "string",
    
        "collectAddress" => "bool",
    
        "deliveryZone" => "TPPublisherDeliveryZone[]",
    
        "defaultCountry" => "TPPublisherCountry",
    
        "voucheringPolicy" => "TPPublisherVoucheringPolicy",
    
        "billingConfig" => "string",
    
        "isAllowedToChangeSchedulePeriodInPast" => "bool",
    
    );
    
    /**
     * @var string $termId  Term ID
     */
    public $termId;
    
    /**
     * @var string $aid  Application aid
     */
    public $aid;
    
    /**
     * @var TPPublisherResource $resource  The resource
     */
    public $resource;
    
    /**
     * @var string $type  Term type
     */
    public $type;
    
    /**
     * @var string $typeName  Term type name
     */
    public $typeName;
    
    /**
     * @var string $name  Term name
     */
    public $name;
    
    /**
     * @var string $description  Term description
     */
    public $description;
    
    /**
     * @var bool $verifyOnRenewal  Is term should be verified before renewal or it skips this step
     */
    public $verifyOnRenewal;
    
    /**
     * @var string $createDate  The creation date
     */
    public $createDate;
    
    /**
     * @var string $paymentBillingPlan  Term billing plan
     */
    public $paymentBillingPlan;
    
    /**
     * @var string $paymentBillingPlanDescription  Term billing plan description
     */
    public $paymentBillingPlanDescription;
    
    /**
     * @var array[] $paymentBillingPlanTable  
     */
    public $paymentBillingPlanTable;
    
    /**
     * @var int $paymentAllowRenewDays  How many days in advance a user can renew
     */
    public $paymentAllowRenewDays;
    
    /**
     * @var bool $paymentForceAutoRenew  Payment forces the auto renewal of subscriptions
     */
    public $paymentForceAutoRenew;
    
    /**
     * @var bool $paymentIsCustomPriceAvailable  Payment is available custom price
     */
    public $paymentIsCustomPriceAvailable;
    
    /**
     * @var bool $paymentIsSubscription  Payment is subscription
     */
    public $paymentIsSubscription;
    
    /**
     * @var bool $paymentHasFreeTrial  Payment has free trial
     */
    public $paymentHasFreeTrial;
    
    /**
     * @var bool $paymentNewCustomersOnly  Whether to allow buy only first time
     */
    public $paymentNewCustomersOnly;
    
    /**
     * @var bool $paymentTrialNewCustomersOnly  Whether to allow trial period only first time
     */
    public $paymentTrialNewCustomersOnly;
    
    /**
     * @var bool $paymentAllowPromoCodes  Whether to allow promo codes to be applied
     */
    public $paymentAllowPromoCodes;
    
    /**
     * @var int $paymentRenewGracePeriod  The number of days after expiration to still allow access to the resource
     */
    public $paymentRenewGracePeriod;
    
    /**
     * @var bool $paymentAllowGift  Whether the term can be gifted
     */
    public $paymentAllowGift;
    
    /**
     * @var string $paymentCurrency  Currency of the term
     */
    public $paymentCurrency;
    
    /**
     * @var double $paymentFirstPrice  First price of the term
     */
    public $paymentFirstPrice;
    
    /**
     * @var TPPublisherSchedule $schedule  
     */
    public $schedule;
    
    /**
     * @var string $scheduleBilling  The schedule billing
     */
    public $scheduleBilling;
    
    /**
     * @var bool $customRequireUser  Whether a valid user is required to complete the term
     */
    public $customRequireUser;
    
    /**
     * @var int $customDefaultAccessPeriod  The default access period
     */
    public $customDefaultAccessPeriod;
    
    /**
     * @var string $adviewVastUrl  The VAST URL to use
     */
    public $adviewVastUrl;
    
    /**
     * @var int $adviewAccessPeriod  The length of time a user gets access for
     */
    public $adviewAccessPeriod;
    
    /**
     * @var int $registrationAccessPeriod  The access time period 
     */
    public $registrationAccessPeriod;
    
    /**
     * @var int $registrationGracePeriod  The time period after registration that will count it as a valid registration conversion
     */
    public $registrationGracePeriod;
    
    /**
     * @var string $externalApiId  External API Configuration ID
     */
    public $externalApiId;
    
    /**
     * @var string $externalApiName  External API Configuration name
     */
    public $externalApiName;
    
    /**
     * @var int $evtVerificationPeriod  External verification period
     */
    public $evtVerificationPeriod;
    
    /**
     * @var int $evtFixedTimeAccessPeriod  Period to grant access for in days
     */
    public $evtFixedTimeAccessPeriod;
    
    /**
     * @var int $evtGracePeriod  External API grace period
     */
    public $evtGracePeriod;
    
    /**
     * @var string $evtItunesBundleId  iTunes bundle id
     */
    public $evtItunesBundleId;
    
    /**
     * @var string $evtItunesProductId  iTunes  product id
     */
    public $evtItunesProductId;
    
    /**
     * @var string $evtGooglePlayProductId  Google Play product id
     */
    public $evtGooglePlayProductId;
    
    /**
     * @var bool $collectAddress  Collect address for this term
     */
    public $collectAddress;
    
    /**
     * @var TPPublisherDeliveryZone[] $deliveryZone  
     */
    public $deliveryZone;
    
    /**
     * @var TPPublisherCountry $defaultCountry  
     */
    public $defaultCountry;
    
    /**
     * @var TPPublisherVoucheringPolicy $voucheringPolicy  Vouchering policy for term
     */
    public $voucheringPolicy;
    
    /**
     * @var string $billingConfig  The type of billing config
     */
    public $billingConfig;
    
    /**
     * @var bool $isAllowedToChangeSchedulePeriodInPast  Whether term allows to change its schedule period which was created in past
     */
    public $isAllowedToChangeSchedulePeriodInPast;
    

}

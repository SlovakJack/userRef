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
 * The TPPublisherUserSubscriptionDto model.
 * model
 */
class TPPublisherUserSubscriptionDto {

    public static $dataTypes = array(
    
        "termName" => "string",
    
        "paymentBillingPlan" => "string",
    
        "imageUrl" => "string",
    
        "resourceName" => "string",
    
        "rid" => "string",
    
        "nextBillDate" => "string",
    
        "subscriptionLastPayment" => "string",
    
        "status" => "string",
    
        "statusLabel" => "string",
    
        "creaditCardExpire" => "string",
    
        "creaditCardExpireSoon" => "bool",
    
        "subscriptionId" => "string",
    
        "paymentMethod" => "string",
    
        "accessExpired" => "bool",
    
        "inAppPayment" => "bool",
    
        "pscSubscriberNumber" => "string",
    
        "conversionResult" => "string",
    
        "externalApiName" => "string",
    
        "chargeCount" => "int",
    
    );
    
    /**
     * @var string $termName  User subscription term name
     */
    public $termName;
    
    /**
     * @var string $paymentBillingPlan  Term billing plan
     */
    public $paymentBillingPlan;
    
    /**
     * @var string $imageUrl  Resource image URL
     */
    public $imageUrl;
    
    /**
     * @var string $resourceName  User subscription resource name
     */
    public $resourceName;
    
    /**
     * @var string $rid  Unique id for resource
     */
    public $rid;
    
    /**
     * @var string $nextBillDate  User subscription next bill date
     */
    public $nextBillDate;
    
    /**
     * @var string $subscriptionLastPayment  Subscription last payment
     */
    public $subscriptionLastPayment;
    
    /**
     * @var string $status  User subscription status
     */
    public $status;
    
    /**
     * @var string $statusLabel  User subscription status label
     */
    public $statusLabel;
    
    /**
     * @var string $creaditCardExpire  Credit card expire
     */
    public $creaditCardExpire;
    
    /**
     * @var bool $creaditCardExpireSoon  Credit card expires soon
     */
    public $creaditCardExpireSoon;
    
    /**
     * @var string $subscriptionId  User subscription id
     */
    public $subscriptionId;
    
    /**
     * @var string $paymentMethod  User subscription payment method
     */
    public $paymentMethod;
    
    /**
     * @var bool $accessExpired  The access item expired 
     */
    public $accessExpired;
    
    /**
     * @var bool $inAppPayment  In app payment method
     */
    public $inAppPayment;
    
    /**
     * @var string $pscSubscriberNumber  PSC subscriber number
     */
    public $pscSubscriberNumber;
    
    /**
     * @var string $conversionResult  Conversion result
     */
    public $conversionResult;
    
    /**
     * @var string $externalApiName  External API Configuration name
     */
    public $externalApiName;
    
    /**
     * @var int $chargeCount  User subscription charge count
     */
    public $chargeCount;
    

}

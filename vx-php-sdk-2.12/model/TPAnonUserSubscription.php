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
 * The TPAnonUserSubscription model.
 * model
 */
class TPAnonUserSubscription {

    public static $dataTypes = array(
    
        "subscriptionId" => "string",
    
        "term" => "TPAnonTerm",
    
        "autoRenew" => "bool",
    
        "gracePeriodStartDate" => "string",
    
        "nextBillDate" => "string",
    
        "startDate" => "string",
    
        "status" => "string",
    
        "cancelable" => "bool",
    
        "cancelableAndRefundadle" => "bool",
    
        "paymentBillingPlanDescription" => "string",
    
    );
    
    /**
     * @var string $subscriptionId  User subscription id
     */
    public $subscriptionId;
    
    /**
     * @var TPAnonTerm $term  
     */
    public $term;
    
    /**
     * @var bool $autoRenew  User subscription auto renew
     */
    public $autoRenew;
    
    /**
     * @var string $gracePeriodStartDate  Grace period start date
     */
    public $gracePeriodStartDate;
    
    /**
     * @var string $nextBillDate  User subscription next bill date
     */
    public $nextBillDate;
    
    /**
     * @var string $startDate  The start date.
     */
    public $startDate;
    
    /**
     * @var string $status  User subscription status
     */
    public $status;
    
    /**
     * @var bool $cancelable  Whether this subscription could be cancelled. Cancel means that access no longer be prolongated and current access will be revoked
     */
    public $cancelable;
    
    /**
     * @var bool $cancelableAndRefundadle  Whether this subscription could be cancelled and the payment for the last period could be refunded. Cancel means that access no longer be prolongated and current access will be revoked
     */
    public $cancelableAndRefundadle;
    
    /**
     * @var string $paymentBillingPlanDescription  Term billing plan description
     */
    public $paymentBillingPlanDescription;
    

}

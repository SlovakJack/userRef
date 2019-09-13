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
 * The TPPublisherSubscriptionRestrictions model.
 * model
 */
class TPPublisherSubscriptionRestrictions {

    public static $dataTypes = array(
    
        "allowChangeNextBillDate" => "bool",
    
        "allowEnableAutoRenew" => "bool",
    
        "allowSwitchPaymentMethod" => "bool",
    
        "allowSchedulerRenewals" => "bool",
    
        "allowFutureRenewals" => "bool",
    
    );
    
    /**
     * @var bool $allowChangeNextBillDate  Is app allowed to change the next billing date for the subscription
     */
    public $allowChangeNextBillDate;
    
    /**
     * @var bool $allowEnableAutoRenew  Is app CAN disable auto-renew BUT cannot enable auto renew if it is disabled
     */
    public $allowEnableAutoRenew;
    
    /**
     * @var bool $allowSwitchPaymentMethod  Is app allowed to change their user's payemnt method for subscriptions
     */
    public $allowSwitchPaymentMethod;
    
    /**
     * @var bool $allowSchedulerRenewals  Is app allowed to run manually scheduler renewal for the subscription
     */
    public $allowSchedulerRenewals;
    
    /**
     * @var bool $allowFutureRenewals  Is app allowed to manually renew subscriptions whcih has next billing date in the future
     */
    public $allowFutureRenewals;
    

}

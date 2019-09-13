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
 * The TPPublisherAppFeatures model.
 * model
 */
class TPPublisherAppFeatures {

    public static $dataTypes = array(
    
        "contentAlgorithm" => "TPPublisherContentAlgorithm",
    
        "myAccount" => "TPPublisherMyAccount",
    
        "composer" => "TPPublisherComposer",
    
        "subscriptionRestrictions" => "TPPublisherSubscriptionRestrictions",
    
        "redemptionPage" => "TPPublisherRedemptionPage",
    
        "isPaymentMockEnabled" => "bool",
    
        "isPublisherDashboardLocalizationEnabled" => "bool",
    
    );
    
    /**
     * @var TPPublisherContentAlgorithm $contentAlgorithm  Content algorithm enabled
     */
    public $contentAlgorithm;
    
    /**
     * @var TPPublisherMyAccount $myAccount  My account enabled
     */
    public $myAccount;
    
    /**
     * @var TPPublisherComposer $composer  Composer enabled
     */
    public $composer;
    
    /**
     * @var TPPublisherSubscriptionRestrictions $subscriptionRestrictions  What restrictions are appliable for the app
     */
    public $subscriptionRestrictions;
    
    /**
     * @var TPPublisherRedemptionPage $redemptionPage  Is app allowed to use system redemption page
     */
    public $redemptionPage;
    
    /**
     * @var bool $isPaymentMockEnabled  Is Mock instead of real payment providers enabled
     */
    public $isPaymentMockEnabled;
    
    /**
     * @var bool $isPublisherDashboardLocalizationEnabled  Is publisher dashboard localization enabled
     */
    public $isPublisherDashboardLocalizationEnabled;
    

}

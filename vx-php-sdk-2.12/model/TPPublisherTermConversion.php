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
 * The TPPublisherTermConversion model.
 * model
 */
class TPPublisherTermConversion {

    public static $dataTypes = array(
    
        "termConversionId" => "string",
    
        "term" => "TPPublisherTerm",
    
        "type" => "string",
    
        "aid" => "string",
    
        "userAccess" => "TPPublisherAccess",
    
        "userPayment" => "TPPublisherUserPayment",
    
        "createDate" => "string",
    
        "browserId" => "string",
    
        "subscription" => "TPPublisherUserSubscription",
    
        "promoCode" => "TPPublisherPromoCode",
    
        "userPaymentInfo" => "TPPublisherUserPaymentInfo",
    
    );
    
    /**
     * @var string $termConversionId  Term conversion id
     */
    public $termConversionId;
    
    /**
     * @var TPPublisherTerm $term  The term that was converted
     */
    public $term;
    
    /**
     * @var string $type  The term conversion type
     */
    public $type;
    
    /**
     * @var string $aid  Application aid
     */
    public $aid;
    
    /**
     * @var TPPublisherAccess $userAccess  The access that was created as a result of the term conversion
     */
    public $userAccess;
    
    /**
     * @var TPPublisherUserPayment $userPayment  The payment that was created during term conversion
     */
    public $userPayment;
    
    /**
     * @var string $createDate  The creation date
     */
    public $createDate;
    
    /**
     * @var string $browserId  Unique browser identifier
     */
    public $browserId;
    
    /**
     * @var TPPublisherUserSubscription $subscription  User subscription
     */
    public $subscription;
    
    /**
     * @var TPPublisherPromoCode $promoCode  Promo code, if applicable
     */
    public $promoCode;
    
    /**
     * @var TPPublisherUserPaymentInfo $userPaymentInfo  The payment info that was used during term conversion
     */
    public $userPaymentInfo;
    

}

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
 * The TPPublisherOfferModel model.
 * model
 */
class TPPublisherOfferModel {

    public static $dataTypes = array(
    
        "aid" => "string",
    
        "name" => "string",
    
        "offerId" => "string",
    
        "status" => "string",
    
        "deleted" => "bool",
    
        "createDate" => "string",
    
        "createBy" => "TPPublisherUser",
    
        "updateDate" => "string",
    
        "updateBy" => "TPPublisherUser",
    
        "terms" => "TPPublisherTerm[]",
    
    );
    
    /**
     * @var string $aid  Application aid
     */
    public $aid;
    
    /**
     * @var string $name  The offer name
     */
    public $name;
    
    /**
     * @var string $offerId  The offer ID
     */
    public $offerId;
    
    /**
     * @var string $status  The status
     */
    public $status;
    
    /**
     * @var bool $deleted  If the object is deleted
     */
    public $deleted;
    
    /**
     * @var string $createDate  The creation date
     */
    public $createDate;
    
    /**
     * @var TPPublisherUser $createBy  
     */
    public $createBy;
    
    /**
     * @var string $updateDate  The update date
     */
    public $updateDate;
    
    /**
     * @var TPPublisherUser $updateBy  
     */
    public $updateBy;
    
    /**
     * @var TPPublisherTerm[] $terms  
     */
    public $terms;
    

}

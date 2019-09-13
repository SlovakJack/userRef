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
 * The TPPublisherPeriod model.
 * model
 */
class TPPublisherPeriod {

    public static $dataTypes = array(
    
        "name" => "string",
    
        "periodId" => "string",
    
        "sellDate" => "string",
    
        "beginDate" => "string",
    
        "endDate" => "string",
    
        "deleted" => "bool",
    
        "createDate" => "string",
    
        "updateDate" => "string",
    
        "isSaleStarted" => "bool",
    
        "isActive" => "bool",
    
    );
    
    /**
     * @var string $name  The period name
     */
    public $name;
    
    /**
     * @var string $periodId  The period ID
     */
    public $periodId;
    
    /**
     * @var string $sellDate  The period sell date
     */
    public $sellDate;
    
    /**
     * @var string $beginDate  The period begin date
     */
    public $beginDate;
    
    /**
     * @var string $endDate  The period end date
     */
    public $endDate;
    
    /**
     * @var bool $deleted  If the object is deleted
     */
    public $deleted;
    
    /**
     * @var string $createDate  The creation date
     */
    public $createDate;
    
    /**
     * @var string $updateDate  The update date
     */
    public $updateDate;
    
    /**
     * @var bool $isSaleStarted  The sale is started for the period
     */
    public $isSaleStarted;
    
    /**
     * @var bool $isActive  Is period active. Period is in active state if the sell date is passed but end date is not reached
     */
    public $isActive;
    

}

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
 * The TPPublisherMailLog model.
 * model
 */
class TPPublisherMailLog {

    public static $dataTypes = array(
    
        "emailId" => "string",
    
        "app" => "TPPublisherApp",
    
        "user" => "TPPublisherUser",
    
        "sender" => "string",
    
        "recipient" => "string",
    
        "replyTo" => "string",
    
        "createDate" => "string",
    
        "openDate" => "string",
    
        "status" => "string",
    
        "rejectReason" => "string",
    
        "emailName" => "string",
    
        "subject" => "string",
    
        "body" => "string",
    
    );
    
    /**
     * @var string $emailId  Email id
     */
    public $emailId;
    
    /**
     * @var TPPublisherApp $app  Application ref
     */
    public $app;
    
    /**
     * @var TPPublisherUser $user  The user
     */
    public $user;
    
    /**
     * @var string $sender  Sender
     */
    public $sender;
    
    /**
     * @var string $recipient  Recipient
     */
    public $recipient;
    
    /**
     * @var string $replyTo  Reply to
     */
    public $replyTo;
    
    /**
     * @var string $createDate  The creation date
     */
    public $createDate;
    
    /**
     * @var string $openDate  Date opened
     */
    public $openDate;
    
    /**
     * @var string $status  Status
     */
    public $status;
    
    /**
     * @var string $rejectReason  Reject reason
     */
    public $rejectReason;
    
    /**
     * @var string $emailName  Email name
     */
    public $emailName;
    
    /**
     * @var string $subject  Subject
     */
    public $subject;
    
    /**
     * @var string $body  Body
     */
    public $body;
    

}

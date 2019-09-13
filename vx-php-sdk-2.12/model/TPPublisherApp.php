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
 * The TPPublisherApp model.
 * model
 */
class TPPublisherApp {

    public static $dataTypes = array(
    
        "aid" => "string",
    
        "defaultLang" => "string",
    
        "details" => "string",
    
        "email" => "string",
    
        "name" => "string",
    
        "userProvider" => "string",
    
        "url" => "string",
    
        "logo1" => "string",
    
        "logo2" => "string",
    
        "state" => "string",
    
        "privateKey" => "string",
    
        "apiToken" => "string",
    
    );
    
    /**
     * @var string $aid  Application aid
     */
    public $aid;
    
    /**
     * @var string $defaultLang  Default language
     */
    public $defaultLang;
    
    /**
     * @var string $details  Application details
     */
    public $details;
    
    /**
     * @var string $email  Email address associated with this app
     */
    public $email;
    
    /**
     * @var string $name  Application name
     */
    public $name;
    
    /**
     * @var string $userProvider  User token provider
     */
    public $userProvider;
    
    /**
     * @var string $url  Application website
     */
    public $url;
    
    /**
     * @var string $logo1  Primary image displayed within the dashboard
     */
    public $logo1;
    
    /**
     * @var string $logo2  Secondary image dispalyed within the ticket
     */
    public $logo2;
    
    /**
     * @var string $state  Current state of the app
     */
    public $state;
    
    /**
     * @var string $privateKey  The app's private key
     */
    public $privateKey;
    
    /**
     * @var string $apiToken  API token
     */
    public $apiToken;
    

}

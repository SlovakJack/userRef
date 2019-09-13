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
 * The TPPublisherResource model.
 * model
 */
class TPPublisherResource {

    public static $dataTypes = array(
    
        "rid" => "string",
    
        "aid" => "string",
    
        "deleted" => "bool",
    
        "disabled" => "bool",
    
        "createDate" => "string",
    
        "updateDate" => "string",
    
        "publishDate" => "string",
    
        "name" => "string",
    
        "description" => "string",
    
        "imageUrl" => "string",
    
        "type" => "string",
    
        "typeLabel" => "string",
    
        "bundleType" => "string",
    
        "bundleTypeLabel" => "string",
    
        "purchaseUrl" => "string",
    
        "resourceUrl" => "string",
    
    );
    
    /**
     * @var string $rid  Unique id for resource
     */
    public $rid;
    
    /**
     * @var string $aid  Application aid
     */
    public $aid;
    
    /**
     * @var bool $deleted  If the object is deleted
     */
    public $deleted;
    
    /**
     * @var bool $disabled  If the object is disabled
     */
    public $disabled;
    
    /**
     * @var string $createDate  The creation date
     */
    public $createDate;
    
    /**
     * @var string $updateDate  The update date
     */
    public $updateDate;
    
    /**
     * @var string $publishDate  The publish date
     */
    public $publishDate;
    
    /**
     * @var string $name  The name
     */
    public $name;
    
    /**
     * @var string $description  Resource description
     */
    public $description;
    
    /**
     * @var string $imageUrl  Resource image URL
     */
    public $imageUrl;
    
    /**
     * @var string $type  Type of resource
     */
    public $type;
    
    /**
     * @var string $typeLabel  Label of resource type
     */
    public $typeLabel;
    
    /**
     * @var string $bundleType  Type of resource bundle
     */
    public $bundleType;
    
    /**
     * @var string $bundleTypeLabel  Label of resource bundle type
     */
    public $bundleTypeLabel;
    
    /**
     * @var string $purchaseUrl  Purchase page URL
     */
    public $purchaseUrl;
    
    /**
     * @var string $resourceUrl  Resource URL
     */
    public $resourceUrl;
    

}

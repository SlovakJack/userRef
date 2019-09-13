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
 * The TPPublisherExport model.
 * model
 */
class TPPublisherExport {

    public static $dataTypes = array(
    
        "exportId" => "string",
    
        "exportName" => "string",
    
        "exportCreated" => "string",
    
        "exportCompleted" => "string",
    
        "exportPercentage" => "int",
    
        "exportRecords" => "int",
    
        "exportStatus" => "string",
    
        "reportType" => "string",
    
        "exportRepeatable" => "bool",
    
        "filterData" => "string",
    
    );
    
    /**
     * @var string $exportId  Downloadable report ID
     */
    public $exportId;
    
    /**
     * @var string $exportName  Downloadable report name
     */
    public $exportName;
    
    /**
     * @var string $exportCreated  Time stamp of downloadable report creation
     */
    public $exportCreated;
    
    /**
     * @var string $exportCompleted  Time stamp of downloadable report completeon
     */
    public $exportCompleted;
    
    /**
     * @var int $exportPercentage  Downloadable report completion percent
     */
    public $exportPercentage;
    
    /**
     * @var int $exportRecords  Number of records in a downloadable report
     */
    public $exportRecords;
    
    /**
     * @var string $exportStatus  Downloadable report completion status
     */
    public $exportStatus;
    
    /**
     * @var string $reportType  Report type
     */
    public $reportType;
    
    /**
     * @var bool $exportRepeatable  If downloadable report is repeatable
     */
    public $exportRepeatable;
    
    /**
     * @var string $filterData  Filter data
     */
    public $filterData;
    

}

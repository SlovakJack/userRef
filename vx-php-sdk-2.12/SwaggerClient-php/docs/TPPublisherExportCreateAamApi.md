# \TPPublisherExportCreateAamApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAAMDailyProofOfAcessRequest**](TPPublisherExportCreateAamApi.md#createAAMDailyProofOfAcessRequest) | **POST** /publisher/export/create/aam/daily | Create AAM daily proof of access
[**createAAMMonthlyReportRequest**](TPPublisherExportCreateAamApi.md#createAAMMonthlyReportRequest) | **POST** /publisher/export/create/aam/monthly | Create AAM monthly report


# **createAAMDailyProofOfAcessRequest**
> \model\TPPublisherExport createAAMDailyProofOfAcessRequest($aid, $exportName, $dateFrom, $dateTo)

Create AAM daily proof of access



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherExportCreateAamApi();
$aid = "aid_example"; // string | Application aid
$exportName = "exportName_example"; // string | Downloadable report name
$dateFrom = "2013-10-20T19:20:30+01:00"; // string | Report begin date
$dateTo = "2013-10-20T19:20:30+01:00"; // string | Report end date

try { 
    $result = $api_instance->createAAMDailyProofOfAcessRequest($aid, $exportName, $dateFrom, $dateTo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherExportCreateAamApi->createAAMDailyProofOfAcessRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **exportName** | **string**| Downloadable report name | 
 **dateFrom** | **string**| Report begin date | 
 **dateTo** | **string**| Report end date | 

### Return type

[**\model\TPPublisherExport**](TPPublisherExport.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createAAMMonthlyReportRequest**
> \model\TPPublisherExport createAAMMonthlyReportRequest($aid, $exportName, $dateFrom, $dateTo)

Create AAM monthly report



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherExportCreateAamApi();
$aid = "aid_example"; // string | Application aid
$exportName = "exportName_example"; // string | Downloadable report name
$dateFrom = "2013-10-20T19:20:30+01:00"; // string | Report begin date
$dateTo = "2013-10-20T19:20:30+01:00"; // string | Report end date

try { 
    $result = $api_instance->createAAMMonthlyReportRequest($aid, $exportName, $dateFrom, $dateTo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherExportCreateAamApi->createAAMMonthlyReportRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **exportName** | **string**| Downloadable report name | 
 **dateFrom** | **string**| Report begin date | 
 **dateTo** | **string**| Report end date | 

### Return type

[**\model\TPPublisherExport**](TPPublisherExport.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


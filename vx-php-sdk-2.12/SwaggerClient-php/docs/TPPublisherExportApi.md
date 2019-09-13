# \TPPublisherExportApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteRequest**](TPPublisherExportApi.md#deleteRequest) | **GET** /publisher/export/delete | Delete export/report
[**downloadRequest**](TPPublisherExportApi.md#downloadRequest) | **GET** /publisher/export/download | Get URL for download
[**getRequest**](TPPublisherExportApi.md#getRequest) | **GET** /publisher/export/get | Get report
[**listRequest**](TPPublisherExportApi.md#listRequest) | **GET** /publisher/export/list | List all reports
[**runAgainRequest**](TPPublisherExportApi.md#runAgainRequest) | **GET** /publisher/export/run | Re-run the export generator


# **deleteRequest**
> bool deleteRequest($aid, $exportId)

Delete export/report



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherExportApi();
$aid = "aid_example"; // string | Application aid
$exportId = "exportId_example"; // string | Downloadable report ID

try { 
    $result = $api_instance->deleteRequest($aid, $exportId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherExportApi->deleteRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **exportId** | **string**| Downloadable report ID | 

### Return type

**bool**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **downloadRequest**
> string downloadRequest($aid, $exportId)

Get URL for download



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherExportApi();
$aid = "aid_example"; // string | Application aid
$exportId = "exportId_example"; // string | Downloadable report ID

try { 
    $result = $api_instance->downloadRequest($aid, $exportId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherExportApi->downloadRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **exportId** | **string**| Downloadable report ID | 

### Return type

**string**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getRequest**
> \model\TPPublisherExport getRequest($aid, $exportId)

Get report



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherExportApi();
$aid = "aid_example"; // string | Application aid
$exportId = "exportId_example"; // string | Downloadable report ID

try { 
    $result = $api_instance->getRequest($aid, $exportId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherExportApi->getRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **exportId** | **string**| Downloadable report ID | 

### Return type

[**\model\TPPublisherExport**](TPPublisherExport.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listRequest**
> \model\TPPublisherExport[] listRequest($aid, $offset, $limit, $q, $orderBy, $orderDirection)

List all reports



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherExportApi();
$aid = "aid_example"; // string | Application aid
$offset = 0; // int | Offset from which to start returning results
$limit = 25; // int | Maximum index of returned results
$q = "q_example"; // string | Search value
$orderBy = "orderBy_example"; // string | Field to order by
$orderDirection = "orderDirection_example"; // string | Order direction (asc/desc)

try { 
    $result = $api_instance->listRequest($aid, $offset, $limit, $q, $orderBy, $orderDirection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherExportApi->listRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **offset** | **int**| Offset from which to start returning results | [default to 0]
 **limit** | **int**| Maximum index of returned results | [default to 25]
 **q** | **string**| Search value | [optional] 
 **orderBy** | **string**| Field to order by | [optional] 
 **orderDirection** | **string**| Order direction (asc/desc) | [optional] 

### Return type

[**\model\TPPublisherExport[]**](TPPublisherExport.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **runAgainRequest**
> bool runAgainRequest($aid, $exportId)

Re-run the export generator



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherExportApi();
$aid = "aid_example"; // string | Application aid
$exportId = "exportId_example"; // string | Downloadable report ID

try { 
    $result = $api_instance->runAgainRequest($aid, $exportId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherExportApi->runAgainRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **exportId** | **string**| Downloadable report ID | 

### Return type

**bool**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# \TPAnonErrorApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**logErrorRequest**](TPAnonErrorApi.md#logErrorRequest) | **GET** /anon/error/log | Logs error to database


# **logErrorRequest**
> \model\TPAnonAccess logErrorRequest($logMessage)

Logs error to database



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPAnonErrorApi();
$logMessage = "logMessage_example"; // string | 

try { 
    $result = $api_instance->logErrorRequest($logMessage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPAnonErrorApi->logErrorRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **logMessage** | **string**|  | 

### Return type

[**\model\TPAnonAccess**](TPAnonAccess.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


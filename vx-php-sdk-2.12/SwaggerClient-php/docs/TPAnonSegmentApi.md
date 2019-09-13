# \TPAnonSegmentApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**notifyRequest**](TPAnonSegmentApi.md#notifyRequest) | **POST** /anon/segment/notify | Push segmentation data to DynamoDB


# **notifyRequest**
> string notifyRequest($segmentationFiles)

Push segmentation data to DynamoDB



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPAnonSegmentApi();
$segmentationFiles = array("segmentationFiles_example"); // string[] | 

try { 
    $result = $api_instance->notifyRequest($segmentationFiles);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPAnonSegmentApi->notifyRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **segmentationFiles** | [**string[]**](string.md)|  | 

### Return type

**string**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


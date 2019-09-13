# \TPPublisherConversionDataApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDataRequest**](TPPublisherConversionDataApi.md#getDataRequest) | **GET** /publisher/conversion/data/get | Get a conversion data


# **getDataRequest**
> \model\TPPublisherTermConversionData getDataRequest($aid, $termConversionId)

Get a conversion data



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherConversionDataApi();
$aid = "aid_example"; // string | Application aid
$termConversionId = "termConversionId_example"; // string | Term conversion id

try { 
    $result = $api_instance->getDataRequest($aid, $termConversionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherConversionDataApi->getDataRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **termConversionId** | **string**| Term conversion id | 

### Return type

[**\model\TPPublisherTermConversionData**](TPPublisherTermConversionData.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


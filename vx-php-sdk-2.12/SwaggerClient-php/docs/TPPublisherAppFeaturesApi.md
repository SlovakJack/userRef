# \TPPublisherAppFeaturesApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appFeaturesRequest**](TPPublisherAppFeaturesApi.md#appFeaturesRequest) | **GET** /publisher/app/features/get | Gets app features


# **appFeaturesRequest**
> \model\TPPublisherAppFeatures appFeaturesRequest($aid)

Gets app features



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherAppFeaturesApi();
$aid = "aid_example"; // string | Application aid

try { 
    $result = $api_instance->appFeaturesRequest($aid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherAppFeaturesApi->appFeaturesRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 

### Return type

[**\model\TPPublisherAppFeatures**](TPPublisherAppFeatures.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# \TPPublisherConversionCustomApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customCreateRequest**](TPPublisherConversionCustomApi.md#customCreateRequest) | **POST** /publisher/conversion/custom/create | Records a custom conversion


# **customCreateRequest**
> \model\TPPublisherTermConversion customCreateRequest($aid, $termId, $uid, $accessPeriod, $unlimitedAccess)

Records a custom conversion



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherConversionCustomApi();
$aid = "aid_example"; // string | Application aid
$termId = "termId_example"; // string | Term ID
$uid = "uid_example"; // string | User's uid
$accessPeriod = 56; // int | The length of time to grant access for
$unlimitedAccess = false; // bool | Flag that should be granted unlimited access

try { 
    $result = $api_instance->customCreateRequest($aid, $termId, $uid, $accessPeriod, $unlimitedAccess);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherConversionCustomApi->customCreateRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **termId** | **string**| Term ID | 
 **uid** | **string**| User&#39;s uid | 
 **accessPeriod** | **int**| The length of time to grant access for | [optional] 
 **unlimitedAccess** | **bool**| Flag that should be granted unlimited access | [optional] [default to false]

### Return type

[**\model\TPPublisherTermConversion**](TPPublisherTermConversion.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


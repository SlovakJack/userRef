# \TPPublisherConversionExternalApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**externalVerificationCreateRequest**](TPPublisherConversionExternalApi.md#externalVerificationCreateRequest) | **POST** /publisher/conversion/external/create | Records an external conversion


# **externalVerificationCreateRequest**
> \model\TPPublisherTermConversion externalVerificationCreateRequest($aid, $termId, $uid, $fields, $checkValidity, $accessTo)

Records an external conversion



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherConversionExternalApi();
$aid = "aid_example"; // string | Application aid
$termId = "termId_example"; // string | Term ID
$uid = "uid_example"; // string | User's uid
$fields = "fields_example"; // string | JSON object tht specify what fields have to be checked using external API
$checkValidity = false; // bool | Check validity of passed values or use them forcely
$accessTo = "2013-10-20T19:20:30+01:00"; // string | access_to

try { 
    $result = $api_instance->externalVerificationCreateRequest($aid, $termId, $uid, $fields, $checkValidity, $accessTo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherConversionExternalApi->externalVerificationCreateRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **termId** | **string**| Term ID | 
 **uid** | **string**| User&#39;s uid | 
 **fields** | **string**| JSON object tht specify what fields have to be checked using external API | 
 **checkValidity** | **bool**| Check validity of passed values or use them forcely | [optional] [default to false]
 **accessTo** | **string**| access_to | [optional] 

### Return type

[**\model\TPPublisherTermConversion**](TPPublisherTermConversion.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


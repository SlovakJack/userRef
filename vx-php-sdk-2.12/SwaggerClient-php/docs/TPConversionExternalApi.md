# \TPConversionExternalApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**externalVerifiedCreateRequest**](TPConversionExternalApi.md#externalVerifiedCreateRequest) | **POST** /conversion/external/create | Records an external conversion


# **externalVerifiedCreateRequest**
> \model\TPAnonTermConversion externalVerifiedCreateRequest($aid, $termId, $fields, $userToken, $userProvider, $userRef)

Records an external conversion



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPConversionExternalApi();
$aid = "aid_example"; // string | Application aid
$termId = "termId_example"; // string | Term ID
$fields = "fields_example"; // string | JSON object tht specify what fields have to be checked using external API
$userToken = "userToken_example"; // string | User token
$userProvider = "userProvider_example"; // string | User token provider
$userRef = "userRef_example"; // string | Encrypted user reference

try { 
    $result = $api_instance->externalVerifiedCreateRequest($aid, $termId, $fields, $userToken, $userProvider, $userRef);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPConversionExternalApi->externalVerifiedCreateRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **termId** | **string**| Term ID | 
 **fields** | **string**| JSON object tht specify what fields have to be checked using external API | 
 **userToken** | **string**| User token | [optional] 
 **userProvider** | **string**| User token provider | [optional] 
 **userRef** | **string**| Encrypted user reference | [optional] 

### Return type

[**\model\TPAnonTermConversion**](TPAnonTermConversion.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


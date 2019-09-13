# \TPConversionRegistrationApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRegistrationConversionRequest**](TPConversionRegistrationApi.md#createRegistrationConversionRequest) | **GET** /conversion/registration/create | Creates registration term conversion


# **createRegistrationConversionRequest**
> \model\TPAnonTermConversion createRegistrationConversionRequest($aid, $termId, $userToken, $userProvider, $userRef, $tbc)

Creates registration term conversion



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPConversionRegistrationApi();
$aid = "aid_example"; // string | Application aid
$termId = "termId_example"; // string | Term ID
$userToken = "userToken_example"; // string | User token
$userProvider = "userProvider_example"; // string | User token provider
$userRef = "userRef_example"; // string | Encrypted user reference
$tbc = "tbc_example"; // string | The Tinypass browser cookie (tbc)

try { 
    $result = $api_instance->createRegistrationConversionRequest($aid, $termId, $userToken, $userProvider, $userRef, $tbc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPConversionRegistrationApi->createRegistrationConversionRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **termId** | **string**| Term ID | 
 **userToken** | **string**| User token | [optional] 
 **userProvider** | **string**| User token provider | [optional] 
 **userRef** | **string**| Encrypted user reference | [optional] 
 **tbc** | **string**| The Tinypass browser cookie (tbc) | [optional] 

### Return type

[**\model\TPAnonTermConversion**](TPAnonTermConversion.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


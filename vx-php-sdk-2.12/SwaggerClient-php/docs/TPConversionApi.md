# \TPConversionApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listRequest**](TPConversionApi.md#listRequest) | **GET** /conversion/list | Returns the list of term conversions for user
[**logConversionRequest**](TPConversionApi.md#logConversionRequest) | **POST** /conversion/log | Log third party conversion
[**logFunnelStepRequest**](TPConversionApi.md#logFunnelStepRequest) | **POST** /conversion/logFunnelStep | Log funnel step
[**logMicroConversionRequest**](TPConversionApi.md#logMicroConversionRequest) | **POST** /conversion/logMicroConversion | Log micro conversion


# **listRequest**
> \model\TPAnonTermConversion[] listRequest($aid, $offset, $limit, $userToken, $userProvider, $userRef, $q)

Returns the list of term conversions for user



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPConversionApi();
$aid = "aid_example"; // string | Application aid
$offset = 0; // int | Offset from which to start returning results
$limit = 100; // int | Maximum index of returned results
$userToken = "userToken_example"; // string | User token
$userProvider = "userProvider_example"; // string | User token provider
$userRef = "userRef_example"; // string | Encrypted user reference
$q = "q_example"; // string | Search value

try { 
    $result = $api_instance->listRequest($aid, $offset, $limit, $userToken, $userProvider, $userRef, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPConversionApi->listRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **offset** | **int**| Offset from which to start returning results | [default to 0]
 **limit** | **int**| Maximum index of returned results | [default to 100]
 **userToken** | **string**| User token | [optional] 
 **userProvider** | **string**| User token provider | [optional] 
 **userRef** | **string**| Encrypted user reference | [optional] 
 **q** | **string**| Search value | [optional] 

### Return type

[**\model\TPAnonTermConversion[]**](TPAnonTermConversion.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **logConversionRequest**
> logConversionRequest($trackingId, $termId, $termName, $stepNumber, $conversionCategory, $amount, $currency, $customParams)

Log third party conversion



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPConversionApi();
$trackingId = "trackingId_example"; // string | Conversion tracking id
$termId = "termId_example"; // string | Term ID
$termName = "termName_example"; // string | Term name
$stepNumber = 56; // int | Checkout step number
$conversionCategory = "conversionCategory_example"; // string | Conversion category
$amount = new Number(); // Number | Conversion amount
$currency = "currency_example"; // string | Conversion currency by ISO 4217 standard
$customParams = "customParams_example"; // string | Custom parameters (any key-value pairs) to save (this value should be a valid JSON object)

try { 
    $api_instance->logConversionRequest($trackingId, $termId, $termName, $stepNumber, $conversionCategory, $amount, $currency, $customParams);
} catch (Exception $e) {
    echo 'Exception when calling TPConversionApi->logConversionRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trackingId** | **string**| Conversion tracking id | 
 **termId** | **string**| Term ID | 
 **termName** | **string**| Term name | 
 **stepNumber** | **int**| Checkout step number | [optional] 
 **conversionCategory** | **string**| Conversion category | [optional] 
 **amount** | [**Number**](.md)| Conversion amount | [optional] 
 **currency** | **string**| Conversion currency by ISO 4217 standard | [optional] 
 **customParams** | **string**| Custom parameters (any key-value pairs) to save (this value should be a valid JSON object) | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **logFunnelStepRequest**
> logFunnelStepRequest($trackingId, $stepNumber, $stepName, $customParams)

Log funnel step



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPConversionApi();
$trackingId = "trackingId_example"; // string | Conversion tracking id
$stepNumber = 56; // int | Checkout step number
$stepName = "stepName_example"; // string | Checkout step name
$customParams = "customParams_example"; // string | Custom parameters (any key-value pairs) to save (this value should be a valid JSON object)

try { 
    $api_instance->logFunnelStepRequest($trackingId, $stepNumber, $stepName, $customParams);
} catch (Exception $e) {
    echo 'Exception when calling TPConversionApi->logFunnelStepRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trackingId** | **string**| Conversion tracking id | 
 **stepNumber** | **int**| Checkout step number | 
 **stepName** | **string**| Checkout step name | 
 **customParams** | **string**| Custom parameters (any key-value pairs) to save (this value should be a valid JSON object) | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **logMicroConversionRequest**
> logMicroConversionRequest($trackingId, $eventGroupId, $customParams)

Log micro conversion



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPConversionApi();
$trackingId = "trackingId_example"; // string | Conversion tracking id
$eventGroupId = "eventGroupId_example"; // string | Event group
$customParams = "customParams_example"; // string | Custom parameters (any key-value pairs) to save (this value should be a valid JSON object)

try { 
    $api_instance->logMicroConversionRequest($trackingId, $eventGroupId, $customParams);
} catch (Exception $e) {
    echo 'Exception when calling TPConversionApi->logMicroConversionRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trackingId** | **string**| Conversion tracking id | 
 **eventGroupId** | **string**| Event group | 
 **customParams** | **string**| Custom parameters (any key-value pairs) to save (this value should be a valid JSON object) | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


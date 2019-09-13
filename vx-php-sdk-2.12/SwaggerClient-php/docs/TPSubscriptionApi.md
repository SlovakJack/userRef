# \TPSubscriptionApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listRequest**](TPSubscriptionApi.md#listRequest) | **POST** /subscription/list | Lists a user&#39;s subscription


# **listRequest**
> \model\TPAnonUserSubscription[] listRequest($aid, $userToken, $userProvider, $userRef)

Lists a user's subscription



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPSubscriptionApi();
$aid = "aid_example"; // string | Application aid
$userToken = "userToken_example"; // string | User token
$userProvider = "userProvider_example"; // string | User token provider
$userRef = "userRef_example"; // string | Encrypted user reference

try { 
    $result = $api_instance->listRequest($aid, $userToken, $userProvider, $userRef);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPSubscriptionApi->listRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **userToken** | **string**| User token | [optional] 
 **userProvider** | **string**| User token provider | [optional] 
 **userRef** | **string**| Encrypted user reference | [optional] 

### Return type

[**\model\TPAnonUserSubscription[]**](TPAnonUserSubscription.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


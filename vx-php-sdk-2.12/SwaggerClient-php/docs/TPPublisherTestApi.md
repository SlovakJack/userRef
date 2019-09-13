# \TPPublisherTestApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userRefRequest**](TPPublisherTestApi.md#userRefRequest) | **GET** /publisher/test/userRef | Check a user ref is valid


# **userRefRequest**
> \model\TPPublisherUserRef userRefRequest($aid, $userRef)

Check a user ref is valid



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherTestApi();
$aid = "aid_example"; // string | Application aid
$userRef = "userRef_example"; // string | Encrypted user reference

try { 
    $result = $api_instance->userRefRequest($aid, $userRef);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherTestApi->userRefRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **userRef** | **string**| Encrypted user reference | 

### Return type

[**\model\TPPublisherUserRef**](TPPublisherUserRef.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


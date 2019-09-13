# \TPPublisherUserAppApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**countRequest**](TPPublisherUserAppApi.md#countRequest) | **POST** /publisher/user/app/count | Gets total number of users for app


# **countRequest**
> int countRequest($aid, $includeDisabled)

Gets total number of users for app



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherUserAppApi();
$aid = "aid_example"; // string | Application aid
$includeDisabled = false; // bool | Whether to include disabled users

try { 
    $result = $api_instance->countRequest($aid, $includeDisabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherUserAppApi->countRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **includeDisabled** | **bool**| Whether to include disabled users | [default to false]

### Return type

**int**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


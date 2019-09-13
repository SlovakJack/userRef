# \TPPublisherAppApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**currenciesRequest**](TPPublisherAppApi.md#currenciesRequest) | **GET** /publisher/app/currencies | Gets available currencies for the app
[**getRequest**](TPPublisherAppApi.md#getRequest) | **GET** /publisher/app/get | Gets an app for a given aid
[**listRequest**](TPPublisherAppApi.md#listRequest) | **GET** /publisher/app/list | Gets all publisher apps


# **currenciesRequest**
> string[] currenciesRequest($aid)

Gets available currencies for the app



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherAppApi();
$aid = "aid_example"; // string | Application aid

try { 
    $result = $api_instance->currenciesRequest($aid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherAppApi->currenciesRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 

### Return type

**string[]**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getRequest**
> \model\TPPublisherApp getRequest($aid)

Gets an app for a given aid



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherAppApi();
$aid = "aid_example"; // string | Application aid

try { 
    $result = $api_instance->getRequest($aid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherAppApi->getRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 

### Return type

[**\model\TPPublisherApp**](TPPublisherApp.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listRequest**
> \model\TPPublisherApp[] listRequest()

Gets all publisher apps



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherAppApi();

try { 
    $result = $api_instance->listRequest();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherAppApi->listRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\model\TPPublisherApp[]**](TPPublisherApp.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


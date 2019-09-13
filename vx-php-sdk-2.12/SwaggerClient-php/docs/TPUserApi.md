# \TPUserApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRequest**](TPUserApi.md#getRequest) | **POST** /user/get | Get a user


# **getRequest**
> \model\TPUserUser getRequest()

Get a user



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPUserApi();

try { 
    $result = $api_instance->getRequest();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPUserApi->getRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\model\TPUserUser**](TPUserUser.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


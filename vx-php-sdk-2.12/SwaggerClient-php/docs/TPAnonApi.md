# \TPAnonApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authenticateRequest**](TPAnonApi.md#authenticateRequest) | **GET** /anon/authenticate | Authenticates a user using an email address and password


# **authenticateRequest**
> \model\TPAnonUser authenticateRequest($email, $password)

Authenticates a user using an email address and password



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPAnonApi();
$email = "email_example"; // string | User's email address
$password = "password_example"; // string | User's current password

try { 
    $result = $api_instance->authenticateRequest($email, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPAnonApi->authenticateRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| User&#39;s email address | 
 **password** | **string**| User&#39;s current password | 

### Return type

[**\model\TPAnonUser**](TPAnonUser.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


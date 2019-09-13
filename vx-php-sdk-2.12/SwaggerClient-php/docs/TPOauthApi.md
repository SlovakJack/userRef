# \TPOauthApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authTokenRequest**](TPOauthApi.md#authTokenRequest) | **POST** /oauth/authToken | OAuth 2.0 authorize


# **authTokenRequest**
> \model\TPAnonOAuthToken authTokenRequest($clientId, $clientSecret, $code, $refreshToken, $grantType, $redirectUri, $username, $password, $state, $deviceId)

OAuth 2.0 authorize



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPOauthApi();
$clientId = "clientId_example"; // string | Client ID of OAuth authorize
$clientSecret = "clientSecret_example"; // string | Client secret of OAuth authorize
$code = "code_example"; // string | OAuth code of OAuth authorize
$refreshToken = "refreshToken_example"; // string | OAuth refresh token of OAuth authorize
$grantType = "grantType_example"; // string | Grant type of OAuth authorize
$redirectUri = "redirectUri_example"; // string | Redirect URI of OAuth authorize
$username = "username_example"; // string | Username
$password = "password_example"; // string | Password
$state = "state_example"; // string | State
$deviceId = "deviceId_example"; // string | Device ID

try { 
    $result = $api_instance->authTokenRequest($clientId, $clientSecret, $code, $refreshToken, $grantType, $redirectUri, $username, $password, $state, $deviceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPOauthApi->authTokenRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientId** | **string**| Client ID of OAuth authorize | [optional] 
 **clientSecret** | **string**| Client secret of OAuth authorize | [optional] 
 **code** | **string**| OAuth code of OAuth authorize | [optional] 
 **refreshToken** | **string**| OAuth refresh token of OAuth authorize | [optional] 
 **grantType** | **string**| Grant type of OAuth authorize | [optional] 
 **redirectUri** | **string**| Redirect URI of OAuth authorize | [optional] 
 **username** | **string**| Username | [optional] 
 **password** | **string**| Password | [optional] 
 **state** | **string**| State | [optional] 
 **deviceId** | **string**| Device ID | [optional] 

### Return type

[**\model\TPAnonOAuthToken**](TPAnonOAuthToken.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


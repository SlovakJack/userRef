# \TPAccessApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkRequest**](TPAccessApi.md#checkRequest) | **GET** /access/check | Returns the access details for user and rid
[**listRequest**](TPAccessApi.md#listRequest) | **GET** /access/list | Returns access list for user


# **checkRequest**
> \model\TPAnonAccess checkRequest($rid, $aid, $tpAccessTokenV2, $umc, $userToken, $userProvider, $userRef)

Returns the access details for user and rid



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPAccessApi();
$rid = "rid_example"; // string | Unique id for resource
$aid = "aid_example"; // string | Application aid
$tpAccessTokenV2 = "tpAccessTokenV2_example"; // string | The Tinypass access token (v2)
$umc = "umc_example"; // string | The Tinypass user meter cookie (umc)
$userToken = "userToken_example"; // string | User token
$userProvider = "userProvider_example"; // string | User token provider
$userRef = "userRef_example"; // string | Encrypted user reference

try { 
    $result = $api_instance->checkRequest($rid, $aid, $tpAccessTokenV2, $umc, $userToken, $userProvider, $userRef);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPAccessApi->checkRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rid** | **string**| Unique id for resource | 
 **aid** | **string**| Application aid | 
 **tpAccessTokenV2** | **string**| The Tinypass access token (v2) | [optional] 
 **umc** | **string**| The Tinypass user meter cookie (umc) | [optional] 
 **userToken** | **string**| User token | [optional] 
 **userProvider** | **string**| User token provider | [optional] 
 **userRef** | **string**| Encrypted user reference | [optional] 

### Return type

[**\model\TPAnonAccess**](TPAnonAccess.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listRequest**
> \model\TPAnonAccess[] listRequest($aid, $offset, $limit, $active, $expandBundled, $q, $userToken, $userProvider, $userRef)

Returns access list for user



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPAccessApi();
$aid = "aid_example"; // string | Application aid
$offset = 0; // int | Offset from which to start returning results
$limit = 100; // int | Maximum index of returned results
$active = true; // bool | whether the object is active
$expandBundled = false; // bool | Expand bundled accesses
$q = "q_example"; // string | Search value
$userToken = "userToken_example"; // string | User token
$userProvider = "userProvider_example"; // string | User token provider
$userRef = "userRef_example"; // string | Encrypted user reference

try { 
    $result = $api_instance->listRequest($aid, $offset, $limit, $active, $expandBundled, $q, $userToken, $userProvider, $userRef);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPAccessApi->listRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **offset** | **int**| Offset from which to start returning results | [default to 0]
 **limit** | **int**| Maximum index of returned results | [default to 100]
 **active** | **bool**| whether the object is active | [optional] [default to true]
 **expandBundled** | **bool**| Expand bundled accesses | [optional] [default to false]
 **q** | **string**| Search value | [optional] 
 **userToken** | **string**| User token | [optional] 
 **userProvider** | **string**| User token provider | [optional] 
 **userRef** | **string**| Encrypted user reference | [optional] 

### Return type

[**\model\TPAnonAccess[]**](TPAnonAccess.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


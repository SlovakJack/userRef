# \TPUserAccessApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkJWTRequest**](TPUserAccessApi.md#checkJWTRequest) | **GET** /user/access/check.jwt | Returns the access details for aid and rid in JWS format
[**getRequest**](TPUserAccessApi.md#getRequest) | **GET** /user/access/get | Gets access details for current user
[**listRequest**](TPUserAccessApi.md#listRequest) | **GET** /user/access/list | Query list of access for current user


# **checkJWTRequest**
> string checkJWTRequest($aid, $rid)

Returns the access details for aid and rid in JWS format



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPUserAccessApi();
$aid = "aid_example"; // string | Application aid
$rid = "rid_example"; // string | Unique id for resource

try { 
    $result = $api_instance->checkJWTRequest($aid, $rid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPUserAccessApi->checkJWTRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **rid** | **string**| Unique id for resource | 

### Return type

**string**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getRequest**
> \model\TPUserAccess getRequest($accessId)

Gets access details for current user



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPUserAccessApi();
$accessId = "accessId_example"; // string | The access id

try { 
    $result = $api_instance->getRequest($accessId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPUserAccessApi->getRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessId** | **string**| The access id | 

### Return type

[**\model\TPUserAccess**](TPUserAccess.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listRequest**
> \model\TPUserAccess[] listRequest($aid, $expandBundled)

Query list of access for current user



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPUserAccessApi();
$aid = "aid_example"; // string | Application aid
$expandBundled = false; // bool | Expand bundled accesses

try { 
    $result = $api_instance->listRequest($aid, $expandBundled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPUserAccessApi->listRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **expandBundled** | **bool**| Expand bundled accesses | [optional] [default to false]

### Return type

[**\model\TPUserAccess[]**](TPUserAccess.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


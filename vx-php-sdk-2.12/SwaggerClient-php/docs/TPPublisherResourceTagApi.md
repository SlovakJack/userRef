# \TPPublisherResourceTagApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachTagRequest**](TPPublisherResourceTagApi.md#attachTagRequest) | **POST** /publisher/resource/tag/attach | Attach a resource tag to a resource
[**createTagRequest**](TPPublisherResourceTagApi.md#createTagRequest) | **GET** /publisher/resource/tag/create | Creates a resource tag
[**deleteTagRequest**](TPPublisherResourceTagApi.md#deleteTagRequest) | **POST** /publisher/resource/tag/delete | Delete a resource tag
[**detachTagRequest**](TPPublisherResourceTagApi.md#detachTagRequest) | **POST** /publisher/resource/tag/detach | Detach a resource tag from a resource
[**getTagRequest**](TPPublisherResourceTagApi.md#getTagRequest) | **GET** /publisher/resource/tag/get | Get a resource tag
[**listBundlesForTagsRequest**](TPPublisherResourceTagApi.md#listBundlesForTagsRequest) | **GET** /publisher/resource/tag/bundles | Lists bundles for tags
[**listTagsRequest**](TPPublisherResourceTagApi.md#listTagsRequest) | **GET** /publisher/resource/tag/list | Lists resource tags for an app or a resource


# **attachTagRequest**
> attachTagRequest($resourceTagId, $aid, $rid)

Attach a resource tag to a resource



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherResourceTagApi();
$resourceTagId = "resourceTagId_example"; // string | Id for resource tag
$aid = "aid_example"; // string | Application aid
$rid = "rid_example"; // string | Unique id for resource

try { 
    $api_instance->attachTagRequest($resourceTagId, $aid, $rid);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherResourceTagApi->attachTagRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resourceTagId** | **string**| Id for resource tag | 
 **aid** | **string**| Application aid | 
 **rid** | **string**| Unique id for resource | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createTagRequest**
> \model\TPPublisherResourceTag createTagRequest($aid, $rid, $name, $type)

Creates a resource tag



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherResourceTagApi();
$aid = "aid_example"; // string | Application aid
$rid = "rid_example"; // string | Unique id for resource
$name = "name_example"; // string | The name
$type = "standard"; // string | The type

try { 
    $result = $api_instance->createTagRequest($aid, $rid, $name, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherResourceTagApi->createTagRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **rid** | **string**| Unique id for resource | 
 **name** | **string**| The name | 
 **type** | **string**| The type | [optional] [default to standard]

### Return type

[**\model\TPPublisherResourceTag**](TPPublisherResourceTag.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteTagRequest**
> deleteTagRequest($resourceTagId, $aid)

Delete a resource tag



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherResourceTagApi();
$resourceTagId = "resourceTagId_example"; // string | Id for resource tag
$aid = "aid_example"; // string | Application aid

try { 
    $api_instance->deleteTagRequest($resourceTagId, $aid);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherResourceTagApi->deleteTagRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resourceTagId** | **string**| Id for resource tag | 
 **aid** | **string**| Application aid | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **detachTagRequest**
> detachTagRequest($resourceTagId, $aid, $rid)

Detach a resource tag from a resource



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherResourceTagApi();
$resourceTagId = "resourceTagId_example"; // string | Id for resource tag
$aid = "aid_example"; // string | Application aid
$rid = "rid_example"; // string | Unique id for resource

try { 
    $api_instance->detachTagRequest($resourceTagId, $aid, $rid);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherResourceTagApi->detachTagRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resourceTagId** | **string**| Id for resource tag | 
 **aid** | **string**| Application aid | 
 **rid** | **string**| Unique id for resource | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getTagRequest**
> \model\TPPublisherResourceTag getTagRequest($resourceTagId, $aid)

Get a resource tag



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherResourceTagApi();
$resourceTagId = "resourceTagId_example"; // string | Id for resource tag
$aid = "aid_example"; // string | Application aid

try { 
    $result = $api_instance->getTagRequest($resourceTagId, $aid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherResourceTagApi->getTagRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resourceTagId** | **string**| Id for resource tag | 
 **aid** | **string**| Application aid | 

### Return type

[**\model\TPPublisherResourceTag**](TPPublisherResourceTag.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listBundlesForTagsRequest**
> \model\TPPublisherResource[] listBundlesForTagsRequest($aid, $includedTagId, $offset, $limit, $orderBy, $orderDirection, $type, $q, $disabled, $bundleType)

Lists bundles for tags



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherResourceTagApi();
$aid = "aid_example"; // string | Application aid
$includedTagId = array("includedTagId_example"); // string[] | Included tag IDs
$offset = 0; // int | Offset from which to start returning results
$limit = 25; // int | Maximum index of returned results
$orderBy = "name"; // string | Field to order by
$orderDirection = "asc"; // string | Order direction (asc/desc)
$type = "NA"; // string | Resource type
$q = "q_example"; // string | Search value
$disabled = false; // bool | Disabled flag
$bundleType = 56; // int | Bundle type

try { 
    $result = $api_instance->listBundlesForTagsRequest($aid, $includedTagId, $offset, $limit, $orderBy, $orderDirection, $type, $q, $disabled, $bundleType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherResourceTagApi->listBundlesForTagsRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **includedTagId** | [**string[]**](string.md)| Included tag IDs | 
 **offset** | **int**| Offset from which to start returning results | [default to 0]
 **limit** | **int**| Maximum index of returned results | [default to 25]
 **orderBy** | **string**| Field to order by | [default to name]
 **orderDirection** | **string**| Order direction (asc/desc) | [default to asc]
 **type** | **string**| Resource type | [default to NA]
 **q** | **string**| Search value | [optional] 
 **disabled** | **bool**| Disabled flag | [optional] [default to false]
 **bundleType** | **int**| Bundle type | [optional] 

### Return type

[**\model\TPPublisherResource[]**](TPPublisherResource.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listTagsRequest**
> \model\TPPublisherResourceTag[] listTagsRequest($aid, $offset, $limit, $tagType, $rid, $q, $orderBy, $orderDirection)

Lists resource tags for an app or a resource



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherResourceTagApi();
$aid = "aid_example"; // string | Application aid
$offset = 0; // int | Offset from which to start returning results
$limit = 25; // int | Maximum index of returned results
$tagType = 56; // int | Resource tag type
$rid = "rid_example"; // string | Unique id for resource
$q = "q_example"; // string | Search value
$orderBy = "orderBy_example"; // string | Field to order by
$orderDirection = "orderDirection_example"; // string | Order direction (asc/desc)

try { 
    $result = $api_instance->listTagsRequest($aid, $offset, $limit, $tagType, $rid, $q, $orderBy, $orderDirection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherResourceTagApi->listTagsRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **offset** | **int**| Offset from which to start returning results | [default to 0]
 **limit** | **int**| Maximum index of returned results | [default to 25]
 **tagType** | **int**| Resource tag type | 
 **rid** | **string**| Unique id for resource | [optional] 
 **q** | **string**| Search value | [optional] 
 **orderBy** | **string**| Field to order by | [optional] 
 **orderDirection** | **string**| Order direction (asc/desc) | [optional] 

### Return type

[**\model\TPPublisherResourceTag[]**](TPPublisherResourceTag.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


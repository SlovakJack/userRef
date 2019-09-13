# \TPPublisherResourceApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachResourceToFixedBundleRequest**](TPPublisherResourceApi.md#attachResourceToFixedBundleRequest) | **GET** /publisher/resource/attach | Attach resource(s) to a fixed bundle
[**countRequest**](TPPublisherResourceApi.md#countRequest) | **GET** /publisher/resource/count | Lists total number of resources
[**createResourceRequest**](TPPublisherResourceApi.md#createResourceRequest) | **POST** /publisher/resource/create | Creates a resource
[**deleteResourceRequest**](TPPublisherResourceApi.md#deleteResourceRequest) | **POST** /publisher/resource/delete | Delete a resource
[**detachResourceFromFixedBundleRequest**](TPPublisherResourceApi.md#detachResourceFromFixedBundleRequest) | **GET** /publisher/resource/detach | Detach a resource from a fixed bundle
[**disableResourceRequest**](TPPublisherResourceApi.md#disableResourceRequest) | **POST** /publisher/resource/disable | Disable one or more resources
[**enableResourceRequest**](TPPublisherResourceApi.md#enableResourceRequest) | **POST** /publisher/resource/enable | Enable one or more resources
[**getResourceRequest**](TPPublisherResourceApi.md#getResourceRequest) | **GET** /publisher/resource/get | Get a resource
[**listBundlesRequest**](TPPublisherResourceApi.md#listBundlesRequest) | **GET** /publisher/resource/bundles | Lists bundles that a resource belongs to
[**listResourcesRequest**](TPPublisherResourceApi.md#listResourcesRequest) | **GET** /publisher/resource/list | Lists resources
[**updateResourceRequest**](TPPublisherResourceApi.md#updateResourceRequest) | **POST** /publisher/resource/update | Update a resource


# **attachResourceToFixedBundleRequest**
> attachResourceToFixedBundleRequest($aid, $includedRid, $bundleRid)

Attach resource(s) to a fixed bundle



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherResourceApi();
$aid = "aid_example"; // string | Application aid
$includedRid = array("includedRid_example"); // string[] | Included RIDs
$bundleRid = "bundleRid_example"; // string | Unique id for resource bundle

try { 
    $api_instance->attachResourceToFixedBundleRequest($aid, $includedRid, $bundleRid);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherResourceApi->attachResourceToFixedBundleRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **includedRid** | [**string[]**](string.md)| Included RIDs | 
 **bundleRid** | **string**| Unique id for resource bundle | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **countRequest**
> int countRequest($aid)

Lists total number of resources



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherResourceApi();
$aid = "aid_example"; // string | Application aid

try { 
    $result = $api_instance->countRequest($aid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherResourceApi->countRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 

### Return type

**int**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createResourceRequest**
> \model\TPPublisherResource createResourceRequest($aid, $name, $rid, $description, $type, $imageUrl, $bundleType, $resourceTagId, $publishDate, $resourceUrl)

Creates a resource



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherResourceApi();
$aid = "aid_example"; // string | Application aid
$name = "name_example"; // string | The name
$rid = "rid_example"; // string | Unique id for resource
$description = "description_example"; // string | Resource description
$type = "standard"; // string | Type of resource
$imageUrl = "imageUrl_example"; // string | Resource image URL
$bundleType = "bundleType_example"; // string | Type of resource bundle
$resourceTagId = array("resourceTagId_example"); // string[] | Id for resource tag
$publishDate = "2013-10-20T19:20:30+01:00"; // string | The publish date
$resourceUrl = "resourceUrl_example"; // string | Resource URL

try { 
    $result = $api_instance->createResourceRequest($aid, $name, $rid, $description, $type, $imageUrl, $bundleType, $resourceTagId, $publishDate, $resourceUrl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherResourceApi->createResourceRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **name** | **string**| The name | 
 **rid** | **string**| Unique id for resource | [optional] 
 **description** | **string**| Resource description | [optional] 
 **type** | **string**| Type of resource | [optional] [default to standard]
 **imageUrl** | **string**| Resource image URL | [optional] 
 **bundleType** | **string**| Type of resource bundle | [optional] 
 **resourceTagId** | [**string[]**](string.md)| Id for resource tag | [optional] 
 **publishDate** | **string**| The publish date | [optional] 
 **resourceUrl** | **string**| Resource URL | [optional] 

### Return type

[**\model\TPPublisherResource**](TPPublisherResource.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteResourceRequest**
> deleteResourceRequest($aid, $rid)

Delete a resource



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherResourceApi();
$aid = "aid_example"; // string | Application aid
$rid = "rid_example"; // string | Unique id for resource

try { 
    $api_instance->deleteResourceRequest($aid, $rid);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherResourceApi->deleteResourceRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

# **detachResourceFromFixedBundleRequest**
> detachResourceFromFixedBundleRequest($aid, $rid, $bundleRid)

Detach a resource from a fixed bundle



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherResourceApi();
$aid = "aid_example"; // string | Application aid
$rid = "rid_example"; // string | Unique id for resource
$bundleRid = "bundleRid_example"; // string | Unique id for resource bundle

try { 
    $api_instance->detachResourceFromFixedBundleRequest($aid, $rid, $bundleRid);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherResourceApi->detachResourceFromFixedBundleRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **rid** | **string**| Unique id for resource | 
 **bundleRid** | **string**| Unique id for resource bundle | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **disableResourceRequest**
> disableResourceRequest($aid, $includedRid)

Disable one or more resources



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherResourceApi();
$aid = "aid_example"; // string | Application aid
$includedRid = array("includedRid_example"); // string[] | Included RIDs

try { 
    $api_instance->disableResourceRequest($aid, $includedRid);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherResourceApi->disableResourceRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **includedRid** | [**string[]**](string.md)| Included RIDs | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **enableResourceRequest**
> enableResourceRequest($aid, $includedRid)

Enable one or more resources



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherResourceApi();
$aid = "aid_example"; // string | Application aid
$includedRid = array("includedRid_example"); // string[] | Included RIDs

try { 
    $api_instance->enableResourceRequest($aid, $includedRid);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherResourceApi->enableResourceRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **includedRid** | [**string[]**](string.md)| Included RIDs | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getResourceRequest**
> \model\TPPublisherResource getResourceRequest($aid, $rid)

Get a resource



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherResourceApi();
$aid = "aid_example"; // string | Application aid
$rid = "rid_example"; // string | Unique id for resource

try { 
    $result = $api_instance->getResourceRequest($aid, $rid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherResourceApi->getResourceRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **rid** | **string**| Unique id for resource | 

### Return type

[**\model\TPPublisherResource**](TPPublisherResource.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listBundlesRequest**
> \model\TPPublisherResource[] listBundlesRequest($aid, $rid, $offset, $limit, $orderBy, $orderDirection, $type, $q, $disabled, $bundleType)

Lists bundles that a resource belongs to



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherResourceApi();
$aid = "aid_example"; // string | Application aid
$rid = "rid_example"; // string | Unique id for resource
$offset = 0; // int | Offset from which to start returning results
$limit = 25; // int | Maximum index of returned results
$orderBy = "name"; // string | Field to order by
$orderDirection = "asc"; // string | Order direction (asc/desc)
$type = "NA"; // string | Resource type
$q = "q_example"; // string | Search value
$disabled = false; // bool | Disabled flag
$bundleType = 56; // int | Bundle type

try { 
    $result = $api_instance->listBundlesRequest($aid, $rid, $offset, $limit, $orderBy, $orderDirection, $type, $q, $disabled, $bundleType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherResourceApi->listBundlesRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **rid** | **string**| Unique id for resource | 
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

# **listResourcesRequest**
> \model\TPPublisherResource[] listResourcesRequest($aid, $offset, $limit, $orderBy, $orderDirection, $type, $includedTagId, $excludedRid, $includedRid, $q, $disabled, $bundleType)

Lists resources



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherResourceApi();
$aid = "aid_example"; // string | Application aid
$offset = 0; // int | Offset from which to start returning results
$limit = 25; // int | Maximum index of returned results
$orderBy = "name"; // string | Field to order by
$orderDirection = "asc"; // string | Order direction (asc/desc)
$type = "NA"; // string | Resource type
$includedTagId = array("includedTagId_example"); // string[] | Included tag IDs
$excludedRid = array("excludedRid_example"); // string[] | Excluded RIDs
$includedRid = array("includedRid_example"); // string[] | Included RIDs
$q = "q_example"; // string | Search value
$disabled = false; // bool | Disabled flag
$bundleType = 56; // int | Bundle type

try { 
    $result = $api_instance->listResourcesRequest($aid, $offset, $limit, $orderBy, $orderDirection, $type, $includedTagId, $excludedRid, $includedRid, $q, $disabled, $bundleType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherResourceApi->listResourcesRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **offset** | **int**| Offset from which to start returning results | [default to 0]
 **limit** | **int**| Maximum index of returned results | [default to 25]
 **orderBy** | **string**| Field to order by | [default to name]
 **orderDirection** | **string**| Order direction (asc/desc) | [default to asc]
 **type** | **string**| Resource type | [default to NA]
 **includedTagId** | [**string[]**](string.md)| Included tag IDs | [optional] 
 **excludedRid** | [**string[]**](string.md)| Excluded RIDs | [optional] 
 **includedRid** | [**string[]**](string.md)| Included RIDs | [optional] 
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

# **updateResourceRequest**
> \model\TPPublisherResource updateResourceRequest($aid, $rid, $name, $newRid, $imageUrl, $description, $disabled, $publishDate, $includedRid, $fixedBundleRid, $addTermId, $delTermId, $includedTagId, $includedTagName, $resourceUrl)

Update a resource



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherResourceApi();
$aid = "aid_example"; // string | Application aid
$rid = "rid_example"; // string | Unique id for resource
$name = "name_example"; // string | The name
$newRid = "newRid_example"; // string | New rid
$imageUrl = "imageUrl_example"; // string | Resource image URL
$description = "description_example"; // string | Resource description
$disabled = true; // bool | If the object is disabled
$publishDate = "2013-10-20T19:20:30+01:00"; // string | The publish date
$includedRid = array("includedRid_example"); // string[] | Included RIDs
$fixedBundleRid = array("fixedBundleRid_example"); // string[] | Fixed bundle RIDs
$addTermId = array("addTermId_example"); // string[] | Term IDs to add
$delTermId = array("delTermId_example"); // string[] | Term IDs to delete
$includedTagId = array("includedTagId_example"); // string[] | Included tag IDs
$includedTagName = array("includedTagName_example"); // string[] | Included tag names
$resourceUrl = "resourceUrl_example"; // string | Resource URL

try { 
    $result = $api_instance->updateResourceRequest($aid, $rid, $name, $newRid, $imageUrl, $description, $disabled, $publishDate, $includedRid, $fixedBundleRid, $addTermId, $delTermId, $includedTagId, $includedTagName, $resourceUrl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherResourceApi->updateResourceRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **rid** | **string**| Unique id for resource | 
 **name** | **string**| The name | [optional] 
 **newRid** | **string**| New rid | [optional] 
 **imageUrl** | **string**| Resource image URL | [optional] 
 **description** | **string**| Resource description | [optional] 
 **disabled** | **bool**| If the object is disabled | [optional] 
 **publishDate** | **string**| The publish date | [optional] 
 **includedRid** | [**string[]**](string.md)| Included RIDs | [optional] 
 **fixedBundleRid** | [**string[]**](string.md)| Fixed bundle RIDs | [optional] 
 **addTermId** | [**string[]**](string.md)| Term IDs to add | [optional] 
 **delTermId** | [**string[]**](string.md)| Term IDs to delete | [optional] 
 **includedTagId** | [**string[]**](string.md)| Included tag IDs | [optional] 
 **includedTagName** | [**string[]**](string.md)| Included tag names | [optional] 
 **resourceUrl** | **string**| Resource URL | [optional] 

### Return type

[**\model\TPPublisherResource**](TPPublisherResource.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


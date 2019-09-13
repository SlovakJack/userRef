# \TPPublisherTermApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**applicableRequest**](TPPublisherTermApi.md#applicableRequest) | **GET** /publisher/term/applicable | Lists terms applicable to promotion
[**countRequest**](TPPublisherTermApi.md#countRequest) | **GET** /publisher/term/count | Returns a count of terms
[**deleteRequest**](TPPublisherTermApi.md#deleteRequest) | **POST** /publisher/term/delete | Delete a term
[**getRequest**](TPPublisherTermApi.md#getRequest) | **GET** /publisher/term/get | Get a term
[**listRequest**](TPPublisherTermApi.md#listRequest) | **GET** /publisher/term/list | Lists terms


# **applicableRequest**
> \model\TPPublisherTerm[] applicableRequest($offset, $limit, $promotionId, $q, $orderBy, $orderDirection, $includeType, $excludeType, $termId, $resourceType, $source, $type)

Lists terms applicable to promotion



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherTermApi();
$offset = 0; // int | Offset from which to start returning results
$limit = 25; // int | Maximum index of returned results
$promotionId = "promotionId_example"; // string | Promotion id
$q = "q_example"; // string | Search value
$orderBy = "orderBy_example"; // string | Field to order by: term_name, resource_type, resource_name
$orderDirection = "orderDirection_example"; // string | Order direction (asc/desc)
$includeType = array("includeType_example"); // string[] | Type of terms to include into the list
$excludeType = array("excludeType_example"); // string[] | Type of terms to exclude from the list
$termId = "termId_example"; // string | Term id to list
$resourceType = "resourceType_example"; // string | Type of resource
$source = array("source_example"); // string[] | Type of external API source
$type = "type_example"; // string | Type of term to list

try { 
    $result = $api_instance->applicableRequest($offset, $limit, $promotionId, $q, $orderBy, $orderDirection, $includeType, $excludeType, $termId, $resourceType, $source, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherTermApi->applicableRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Offset from which to start returning results | [default to 0]
 **limit** | **int**| Maximum index of returned results | [default to 25]
 **promotionId** | **string**| Promotion id | [optional] 
 **q** | **string**| Search value | [optional] 
 **orderBy** | **string**| Field to order by: term_name, resource_type, resource_name | [optional] 
 **orderDirection** | **string**| Order direction (asc/desc) | [optional] 
 **includeType** | [**string[]**](string.md)| Type of terms to include into the list | [optional] 
 **excludeType** | [**string[]**](string.md)| Type of terms to exclude from the list | [optional] 
 **termId** | **string**| Term id to list | [optional] 
 **resourceType** | **string**| Type of resource | [optional] 
 **source** | [**string[]**](string.md)| Type of external API source | [optional] 
 **type** | **string**| Type of term to list | [optional] 

### Return type

[**\model\TPPublisherTerm[]**](TPPublisherTerm.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **countRequest**
> int countRequest($aid, $offset, $limit, $q, $orderBy, $orderDirection, $includeType, $excludeType, $termId, $resourceType, $source, $type)

Returns a count of terms



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherTermApi();
$aid = "aid_example"; // string | Application aid
$offset = 0; // int | Offset from which to start returning results
$limit = 25; // int | Maximum index of returned results
$q = "q_example"; // string | Search value
$orderBy = "orderBy_example"; // string | Field to order by: term_name, resource_type, resource_name
$orderDirection = "orderDirection_example"; // string | Order direction (asc/desc)
$includeType = array("includeType_example"); // string[] | Type of terms to include into the list
$excludeType = array("excludeType_example"); // string[] | Type of terms to exclude from the list
$termId = "termId_example"; // string | Term id to list
$resourceType = "resourceType_example"; // string | Type of resource
$source = array("source_example"); // string[] | Type of external API source
$type = "type_example"; // string | Type of term to list

try { 
    $result = $api_instance->countRequest($aid, $offset, $limit, $q, $orderBy, $orderDirection, $includeType, $excludeType, $termId, $resourceType, $source, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherTermApi->countRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **offset** | **int**| Offset from which to start returning results | [default to 0]
 **limit** | **int**| Maximum index of returned results | [default to 25]
 **q** | **string**| Search value | [optional] 
 **orderBy** | **string**| Field to order by: term_name, resource_type, resource_name | [optional] 
 **orderDirection** | **string**| Order direction (asc/desc) | [optional] 
 **includeType** | [**string[]**](string.md)| Type of terms to include into the list | [optional] 
 **excludeType** | [**string[]**](string.md)| Type of terms to exclude from the list | [optional] 
 **termId** | **string**| Term id to list | [optional] 
 **resourceType** | **string**| Type of resource | [optional] 
 **source** | [**string[]**](string.md)| Type of external API source | [optional] 
 **type** | **string**| Type of term to list | [optional] 

### Return type

**int**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteRequest**
> deleteRequest($termId)

Delete a term



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherTermApi();
$termId = "termId_example"; // string | Term ID

try { 
    $api_instance->deleteRequest($termId);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherTermApi->deleteRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **termId** | **string**| Term ID | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getRequest**
> \model\TPPublisherTerm getRequest($termId)

Get a term



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherTermApi();
$termId = "termId_example"; // string | Term ID

try { 
    $result = $api_instance->getRequest($termId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherTermApi->getRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **termId** | **string**| Term ID | 

### Return type

[**\model\TPPublisherTerm**](TPPublisherTerm.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listRequest**
> \model\TPPublisherTerm[] listRequest($aid, $offset, $limit, $rid, $q, $orderBy, $orderDirection, $includeType, $excludeType, $termId, $resourceType, $source, $type)

Lists terms



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherTermApi();
$aid = "aid_example"; // string | Application aid
$offset = 0; // int | Offset from which to start returning results
$limit = 25; // int | Maximum index of returned results
$rid = "rid_example"; // string | Unique id for resource
$q = "q_example"; // string | Search value
$orderBy = "orderBy_example"; // string | Field to order by: term_name, resource_type, resource_name
$orderDirection = "orderDirection_example"; // string | Order direction (asc/desc)
$includeType = array("includeType_example"); // string[] | Type of terms to include into the list
$excludeType = array("excludeType_example"); // string[] | Type of terms to exclude from the list
$termId = "termId_example"; // string | Term id to list
$resourceType = "resourceType_example"; // string | Type of resource
$source = array("source_example"); // string[] | Type of external API source
$type = "type_example"; // string | Type of term to list

try { 
    $result = $api_instance->listRequest($aid, $offset, $limit, $rid, $q, $orderBy, $orderDirection, $includeType, $excludeType, $termId, $resourceType, $source, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherTermApi->listRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **offset** | **int**| Offset from which to start returning results | [default to 0]
 **limit** | **int**| Maximum index of returned results | [default to 25]
 **rid** | **string**| Unique id for resource | [optional] 
 **q** | **string**| Search value | [optional] 
 **orderBy** | **string**| Field to order by: term_name, resource_type, resource_name | [optional] 
 **orderDirection** | **string**| Order direction (asc/desc) | [optional] 
 **includeType** | [**string[]**](string.md)| Type of terms to include into the list | [optional] 
 **excludeType** | [**string[]**](string.md)| Type of terms to exclude from the list | [optional] 
 **termId** | **string**| Term id to list | [optional] 
 **resourceType** | **string**| Type of resource | [optional] 
 **source** | [**string[]**](string.md)| Type of external API source | [optional] 
 **type** | **string**| Type of term to list | [optional] 

### Return type

[**\model\TPPublisherTerm[]**](TPPublisherTerm.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


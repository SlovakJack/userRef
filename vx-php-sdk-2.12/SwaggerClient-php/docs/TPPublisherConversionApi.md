# \TPPublisherConversionApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**countRequest**](TPPublisherConversionApi.md#countRequest) | **GET** /publisher/conversion/count | Counts conversions
[**getLastRequest**](TPPublisherConversionApi.md#getLastRequest) | **GET** /publisher/conversion/lastAccess | Last access
[**getRequest**](TPPublisherConversionApi.md#getRequest) | **GET** /publisher/conversion/get | Get a conversion
[**listAccessRequest**](TPPublisherConversionApi.md#listAccessRequest) | **GET** /publisher/conversion/access | Lists conversions. Deprecated - use &#39;list&#39;
[**listRequest**](TPPublisherConversionApi.md#listRequest) | **GET** /publisher/conversion/list | Lists conversions for an app
[**logConversionRequest**](TPPublisherConversionApi.md#logConversionRequest) | **POST** /publisher/conversion/log | Log third party conversion


# **countRequest**
> int countRequest($aid, $offset, $limit, $q, $orderBy, $orderDirection, $includeType, $excludeType, $termId, $resourceType, $source, $type)

Counts conversions



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherConversionApi();
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
    echo 'Exception when calling TPPublisherConversionApi->countRequest: ', $e->getMessage(), "\n";
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

# **getLastRequest**
> \model\TPPublisherTermConversion getLastRequest($aid, $rid, $uid, $subscriptionId)

Last access



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherConversionApi();
$aid = "aid_example"; // string | Application aid
$rid = "rid_example"; // string | Unique id for resource
$uid = "uid_example"; // string | User's uid
$subscriptionId = "subscriptionId_example"; // string | User subscription id

try { 
    $result = $api_instance->getLastRequest($aid, $rid, $uid, $subscriptionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherConversionApi->getLastRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **rid** | **string**| Unique id for resource | [optional] 
 **uid** | **string**| User&#39;s uid | [optional] 
 **subscriptionId** | **string**| User subscription id | [optional] 

### Return type

[**\model\TPPublisherTermConversion**](TPPublisherTermConversion.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getRequest**
> \model\TPPublisherTermConversion getRequest($aid, $termConversionId, $accessId)

Get a conversion



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherConversionApi();
$aid = "aid_example"; // string | Application aid
$termConversionId = "termConversionId_example"; // string | Term conversion id
$accessId = "accessId_example"; // string | The access id

try { 
    $result = $api_instance->getRequest($aid, $termConversionId, $accessId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherConversionApi->getRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **termConversionId** | **string**| Term conversion id | [optional] 
 **accessId** | **string**| The access id | [optional] 

### Return type

[**\model\TPPublisherTermConversion**](TPPublisherTermConversion.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listAccessRequest**
> \model\TPPublisherTermConversion[] listAccessRequest($aid, $offset, $limit, $q)

Lists conversions. Deprecated - use 'list'



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherConversionApi();
$aid = "aid_example"; // string | Application aid
$offset = 0; // int | Offset from which to start returning results
$limit = 100; // int | Maximum index of returned results
$q = "q_example"; // string | Search value

try { 
    $result = $api_instance->listAccessRequest($aid, $offset, $limit, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherConversionApi->listAccessRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **offset** | **int**| Offset from which to start returning results | [default to 0]
 **limit** | **int**| Maximum index of returned results | [default to 100]
 **q** | **string**| Search value | [optional] 

### Return type

[**\model\TPPublisherTermConversion[]**](TPPublisherTermConversion.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listRequest**
> \model\TPPublisherTermConversion[] listRequest($aid, $offset, $limit, $uid, $q)

Lists conversions for an app



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherConversionApi();
$aid = "aid_example"; // string | Application aid
$offset = 0; // int | Offset from which to start returning results
$limit = 100; // int | Maximum index of returned results
$uid = "uid_example"; // string | User's uid
$q = "q_example"; // string | Search value

try { 
    $result = $api_instance->listRequest($aid, $offset, $limit, $uid, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherConversionApi->listRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **offset** | **int**| Offset from which to start returning results | [default to 0]
 **limit** | **int**| Maximum index of returned results | [default to 100]
 **uid** | **string**| User&#39;s uid | [optional] 
 **q** | **string**| Search value | [optional] 

### Return type

[**\model\TPPublisherTermConversion[]**](TPPublisherTermConversion.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **logConversionRequest**
> logConversionRequest($trackingId, $termId, $termName, $stepNumber, $conversionCategory, $amount, $currency, $customParams)

Log third party conversion



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherConversionApi();
$trackingId = "trackingId_example"; // string | Conversion tracking id
$termId = "termId_example"; // string | Term ID
$termName = "termName_example"; // string | Term name
$stepNumber = 56; // int | Checkout step number
$conversionCategory = "conversionCategory_example"; // string | Conversion category
$amount = new Number(); // Number | Conversion amount
$currency = "currency_example"; // string | Conversion currency by ISO 4217 standard
$customParams = "customParams_example"; // string | Custom parameters (any key-value pairs) to save (this value should be a valid JSON object)

try { 
    $api_instance->logConversionRequest($trackingId, $termId, $termName, $stepNumber, $conversionCategory, $amount, $currency, $customParams);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherConversionApi->logConversionRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trackingId** | **string**| Conversion tracking id | 
 **termId** | **string**| Term ID | 
 **termName** | **string**| Term name | 
 **stepNumber** | **int**| Checkout step number | [optional] 
 **conversionCategory** | **string**| Conversion category | [optional] 
 **amount** | [**Number**](.md)| Conversion amount | [optional] 
 **currency** | **string**| Conversion currency by ISO 4217 standard | [optional] 
 **customParams** | **string**| Custom parameters (any key-value pairs) to save (this value should be a valid JSON object) | [optional] 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


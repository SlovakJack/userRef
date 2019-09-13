# \TPPublisherOfferTemplateApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**countRequest**](TPPublisherOfferTemplateApi.md#countRequest) | **GET** /publisher/offer/template/count | Counts offer template
[**createRequest**](TPPublisherOfferTemplateApi.md#createRequest) | **POST** /publisher/offer/template/create | Creates an offer template
[**deleteRequest**](TPPublisherOfferTemplateApi.md#deleteRequest) | **POST** /publisher/offer/template/delete | Delete offer template
[**getRequest**](TPPublisherOfferTemplateApi.md#getRequest) | **GET** /publisher/offer/template/get | Gets an offer template
[**listRequest**](TPPublisherOfferTemplateApi.md#listRequest) | **GET** /publisher/offer/template/list | Lists offer templates
[**updateRequest**](TPPublisherOfferTemplateApi.md#updateRequest) | **POST** /publisher/offer/template/update | Updates an offer template


# **countRequest**
> int countRequest($aid)

Counts offer template



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherOfferTemplateApi();
$aid = "aid_example"; // string | Application aid

try { 
    $result = $api_instance->countRequest($aid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherOfferTemplateApi->countRequest: ', $e->getMessage(), "\n";
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

# **createRequest**
> \model\TPPublisherOfferTemplateVersion createRequest($aid, $name, $description)

Creates an offer template



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherOfferTemplateApi();
$aid = "aid_example"; // string | Application aid
$name = "name_example"; // string | The name
$description = "description_example"; // string | The description

try { 
    $result = $api_instance->createRequest($aid, $name, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherOfferTemplateApi->createRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **name** | **string**| The name | 
 **description** | **string**| The description | [optional] 

### Return type

[**\model\TPPublisherOfferTemplateVersion**](TPPublisherOfferTemplateVersion.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteRequest**
> deleteRequest($aid, $offerTemplateId)

Delete offer template



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherOfferTemplateApi();
$aid = "aid_example"; // string | Application aid
$offerTemplateId = "offerTemplateId_example"; // string | Offer Template ID

try { 
    $api_instance->deleteRequest($aid, $offerTemplateId);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherOfferTemplateApi->deleteRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **offerTemplateId** | **string**| Offer Template ID | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getRequest**
> \model\TPPublisherOfferTemplateVersion getRequest($aid, $offerTemplateId)

Gets an offer template



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherOfferTemplateApi();
$aid = "aid_example"; // string | Application aid
$offerTemplateId = "offerTemplateId_example"; // string | Offer Template ID

try { 
    $result = $api_instance->getRequest($aid, $offerTemplateId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherOfferTemplateApi->getRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **offerTemplateId** | **string**| Offer Template ID | 

### Return type

[**\model\TPPublisherOfferTemplateVersion**](TPPublisherOfferTemplateVersion.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listRequest**
> \model\TPPublisherOfferTemplate[] listRequest($aid, $offset, $limit, $q, $orderBy, $orderDirection)

Lists offer templates



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherOfferTemplateApi();
$aid = "aid_example"; // string | Application aid
$offset = 0; // int | Offset from which to start returning results
$limit = 25; // int | Maximum index of returned results
$q = "q_example"; // string | Search value
$orderBy = "orderBy_example"; // string | Field to order by
$orderDirection = "orderDirection_example"; // string | Order direction (asc/desc)

try { 
    $result = $api_instance->listRequest($aid, $offset, $limit, $q, $orderBy, $orderDirection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherOfferTemplateApi->listRequest: ', $e->getMessage(), "\n";
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
 **orderBy** | **string**| Field to order by | [optional] 
 **orderDirection** | **string**| Order direction (asc/desc) | [optional] 

### Return type

[**\model\TPPublisherOfferTemplate[]**](TPPublisherOfferTemplate.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateRequest**
> \model\TPPublisherOfferTemplateVersion updateRequest($aid, $offerTemplateId, $name, $description)

Updates an offer template



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherOfferTemplateApi();
$aid = "aid_example"; // string | Application aid
$offerTemplateId = "offerTemplateId_example"; // string | Offer Template ID
$name = "name_example"; // string | The name
$description = "description_example"; // string | The description

try { 
    $result = $api_instance->updateRequest($aid, $offerTemplateId, $name, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherOfferTemplateApi->updateRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **offerTemplateId** | **string**| Offer Template ID | 
 **name** | **string**| The name | 
 **description** | **string**| The description | [optional] 

### Return type

[**\model\TPPublisherOfferTemplateVersion**](TPPublisherOfferTemplateVersion.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


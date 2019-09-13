# \TPPublisherPromotionTermApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTermRequest**](TPPublisherPromotionTermApi.md#addTermRequest) | **POST** /publisher/promotion/term/add | Adds a term to a promotion
[**deleteTermsRequest**](TPPublisherPromotionTermApi.md#deleteTermsRequest) | **POST** /publisher/promotion/term/delete | Deletes a term from a promotion
[**termListRequest**](TPPublisherPromotionTermApi.md#termListRequest) | **GET** /publisher/promotion/term/list | Lists terms assigned to promotion


# **addTermRequest**
> addTermRequest($termId, $promotionId)

Adds a term to a promotion



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherPromotionTermApi();
$termId = "termId_example"; // string | Term ID
$promotionId = "promotionId_example"; // string | Promotion id

try { 
    $api_instance->addTermRequest($termId, $promotionId);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherPromotionTermApi->addTermRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **termId** | **string**| Term ID | 
 **promotionId** | **string**| Promotion id | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteTermsRequest**
> deleteTermsRequest($termId, $promotionId)

Deletes a term from a promotion



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherPromotionTermApi();
$termId = "termId_example"; // string | Term ID
$promotionId = "promotionId_example"; // string | Promotion id

try { 
    $api_instance->deleteTermsRequest($termId, $promotionId);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherPromotionTermApi->deleteTermsRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **termId** | **string**| Term ID | 
 **promotionId** | **string**| Promotion id | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **termListRequest**
> \model\TPPublisherTerm[] termListRequest($promotionId, $offset, $limit, $q, $orderBy, $orderDirection)

Lists terms assigned to promotion



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherPromotionTermApi();
$promotionId = "promotionId_example"; // string | Promotion id
$offset = 0; // int | Offset from which to start returning results
$limit = 25; // int | Maximum index of returned results
$q = "q_example"; // string | Search value
$orderBy = "orderBy_example"; // string | Field to order by
$orderDirection = "orderDirection_example"; // string | Order direction (asc/desc)

try { 
    $result = $api_instance->termListRequest($promotionId, $offset, $limit, $q, $orderBy, $orderDirection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherPromotionTermApi->termListRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotionId** | **string**| Promotion id | 
 **offset** | **int**| Offset from which to start returning results | [default to 0]
 **limit** | **int**| Maximum index of returned results | [default to 25]
 **q** | **string**| Search value | [optional] 
 **orderBy** | **string**| Field to order by | [optional] 
 **orderDirection** | **string**| Order direction (asc/desc) | [optional] 

### Return type

[**\model\TPPublisherTerm[]**](TPPublisherTerm.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# \TPPublisherPromotionCodeApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**countRequest**](TPPublisherPromotionCodeApi.md#countRequest) | **GET** /publisher/promotion/code/count | Get total number of promo codes
[**createRequest**](TPPublisherPromotionCodeApi.md#createRequest) | **GET** /publisher/promotion/code/create | Create promo code
[**deleteRequest**](TPPublisherPromotionCodeApi.md#deleteRequest) | **POST** /publisher/promotion/code/delete | Delete a promo code 
[**getRequest**](TPPublisherPromotionCodeApi.md#getRequest) | **GET** /publisher/promotion/code/get | Get a promo code
[**listRequest**](TPPublisherPromotionCodeApi.md#listRequest) | **GET** /publisher/promotion/code/list | List promo codes
[**updateRequest**](TPPublisherPromotionCodeApi.md#updateRequest) | **POST** /publisher/promotion/code/update | Update a promo code


# **countRequest**
> int countRequest($promotionId, $q, $state)

Get total number of promo codes



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherPromotionCodeApi();
$promotionId = "promotionId_example"; // string | Promotion id
$q = "q_example"; // string | Search value
$state = "state_example"; // string | Promo code state

try { 
    $result = $api_instance->countRequest($promotionId, $q, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherPromotionCodeApi->countRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotionId** | **string**| Promotion id | 
 **q** | **string**| Search value | [optional] 
 **state** | **string**| Promo code state | [optional] 

### Return type

**int**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createRequest**
> \model\TPPublisherPromoCode createRequest($promotionId, $code)

Create promo code



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherPromotionCodeApi();
$promotionId = "promotionId_example"; // string | Promotion id
$code = "code_example"; // string | Promo code

try { 
    $result = $api_instance->createRequest($promotionId, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherPromotionCodeApi->createRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotionId** | **string**| Promotion id | 
 **code** | **string**| Promo code | 

### Return type

[**\model\TPPublisherPromoCode**](TPPublisherPromoCode.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteRequest**
> deleteRequest($promoCodeId)

Delete a promo code 



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherPromotionCodeApi();
$promoCodeId = array("promoCodeId_example"); // string[] | Promo code id

try { 
    $api_instance->deleteRequest($promoCodeId);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherPromotionCodeApi->deleteRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promoCodeId** | [**string[]**](string.md)| Promo code id | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getRequest**
> \model\TPPublisherPromoCode getRequest($promoCodeId)

Get a promo code



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherPromotionCodeApi();
$promoCodeId = "promoCodeId_example"; // string | Promo code id

try { 
    $result = $api_instance->getRequest($promoCodeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherPromotionCodeApi->getRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promoCodeId** | **string**| Promo code id | 

### Return type

[**\model\TPPublisherPromoCode**](TPPublisherPromoCode.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listRequest**
> \model\TPPublisherPromoCode[] listRequest($promotionId, $offset, $limit, $state, $q, $orderBy, $orderDirection)

List promo codes



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherPromotionCodeApi();
$promotionId = "promotionId_example"; // string | Promotion id
$offset = 0; // int | Offset from which to start returning results
$limit = 25; // int | Maximum index of returned results
$state = array("state_example"); // string[] | Promo code state
$q = "q_example"; // string | Search value
$orderBy = "orderBy_example"; // string | Field to order by
$orderDirection = "orderDirection_example"; // string | Order direction (asc/desc)

try { 
    $result = $api_instance->listRequest($promotionId, $offset, $limit, $state, $q, $orderBy, $orderDirection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherPromotionCodeApi->listRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotionId** | **string**| Promotion id | 
 **offset** | **int**| Offset from which to start returning results | [default to 0]
 **limit** | **int**| Maximum index of returned results | [default to 25]
 **state** | [**string[]**](string.md)| Promo code state | [optional] 
 **q** | **string**| Search value | [optional] 
 **orderBy** | **string**| Field to order by | [optional] 
 **orderDirection** | **string**| Order direction (asc/desc) | [optional] 

### Return type

[**\model\TPPublisherPromoCode[]**](TPPublisherPromoCode.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateRequest**
> \model\TPPublisherPromoCode updateRequest($promoCodeId, $promotionId, $code)

Update a promo code



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherPromotionCodeApi();
$promoCodeId = "promoCodeId_example"; // string | Promo code id
$promotionId = "promotionId_example"; // string | Promotion id
$code = "code_example"; // string | Promo code

try { 
    $result = $api_instance->updateRequest($promoCodeId, $promotionId, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherPromotionCodeApi->updateRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promoCodeId** | **string**| Promo code id | 
 **promotionId** | **string**| Promotion id | 
 **code** | **string**| Promo code | 

### Return type

[**\model\TPPublisherPromoCode**](TPPublisherPromoCode.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


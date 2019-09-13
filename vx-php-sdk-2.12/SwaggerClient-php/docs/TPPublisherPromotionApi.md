# \TPPublisherPromotionApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**codeExistsRequest**](TPPublisherPromotionApi.md#codeExistsRequest) | **POST** /publisher/promotion/exists | Check whether promo code for given email exists
[**countRequest**](TPPublisherPromotionApi.md#countRequest) | **GET** /publisher/promotion/count | Lists total number of promotions
[**createRequest**](TPPublisherPromotionApi.md#createRequest) | **POST** /publisher/promotion/create | Create promotion
[**deleteRequest**](TPPublisherPromotionApi.md#deleteRequest) | **POST** /publisher/promotion/delete | Deletes a promotion
[**generateCodesRequest**](TPPublisherPromotionApi.md#generateCodesRequest) | **POST** /publisher/promotion/generate | Generate promo codes
[**getRequest**](TPPublisherPromotionApi.md#getRequest) | **GET** /publisher/promotion/get | Gets a prommotion
[**listRequest**](TPPublisherPromotionApi.md#listRequest) | **GET** /publisher/promotion/list | Lists promotions
[**totalSaleRequest**](TPPublisherPromotionApi.md#totalSaleRequest) | **GET** /publisher/promotion/total | Get total sales for promotion
[**updateRequest**](TPPublisherPromotionApi.md#updateRequest) | **POST** /publisher/promotion/update | Update a promotion


# **codeExistsRequest**
> bool codeExistsRequest($promotionId, $email)

Check whether promo code for given email exists



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherPromotionApi();
$promotionId = "promotionId_example"; // string | Promotion id
$email = "email_example"; // string | User's email address

try { 
    $result = $api_instance->codeExistsRequest($promotionId, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherPromotionApi->codeExistsRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotionId** | **string**| Promotion id | 
 **email** | **string**| User&#39;s email address | 

### Return type

**bool**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **countRequest**
> int countRequest($aid, $expired)

Lists total number of promotions



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherPromotionApi();
$aid = "aid_example"; // string | Application aid
$expired = "all"; // string | Promotion is expired

try { 
    $result = $api_instance->countRequest($aid, $expired);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherPromotionApi->countRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **expired** | **string**| Promotion is expired | [optional] [default to all]

### Return type

**int**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createRequest**
> \model\TPPublisherPromotion createRequest($aid, $name, $newCustomersOnly, $startDate, $endDate, $discountType, $percentageDiscount, $unlimitedUses, $usesAllowed, $neverAllowZero, $fixedPromotionCode, $promotionCodePrefix, $termDependencyType, $applyToAllBillingPeriods, $canBeAppliedOnRenewal)

Create promotion



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherPromotionApi();
$aid = "aid_example"; // string | Application aid
$name = "name_example"; // string | Promotion name
$newCustomersOnly = false; // bool | whether promotion allows new customers only
$startDate = "2013-10-20T19:20:30+01:00"; // string | The start date.
$endDate = "2013-10-20T19:20:30+01:00"; // string | The end date
$discountType = "discountType_example"; // string | Type of promotion discount 
$percentageDiscount = new Number(); // Number | Promotion percentage discount
$unlimitedUses = false; // bool | Whether to allow unlimited uses
$usesAllowed = 56; // int | Number of uses allowed by promotion
$neverAllowZero = false; // bool | Never allow the value of checkout to be zero
$fixedPromotionCode = "fixedPromotionCode_example"; // string | Fixed value for all promotion codes
$promotionCodePrefix = "promotionCodePrefix_example"; // string | Prefix for all codes
$termDependencyType = "termDependencyType_example"; // string | Type of dependency to terms
$applyToAllBillingPeriods = false; // bool | Promotion discount applies to first billing period or all billing periods
$canBeAppliedOnRenewal = false; // bool | Promotion can be applied on renewal

try { 
    $result = $api_instance->createRequest($aid, $name, $newCustomersOnly, $startDate, $endDate, $discountType, $percentageDiscount, $unlimitedUses, $usesAllowed, $neverAllowZero, $fixedPromotionCode, $promotionCodePrefix, $termDependencyType, $applyToAllBillingPeriods, $canBeAppliedOnRenewal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherPromotionApi->createRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **name** | **string**| Promotion name | 
 **newCustomersOnly** | **bool**| whether promotion allows new customers only | [default to false]
 **startDate** | **string**| The start date. | [optional] 
 **endDate** | **string**| The end date | [optional] 
 **discountType** | **string**| Type of promotion discount  | [optional] 
 **percentageDiscount** | [**Number**](.md)| Promotion percentage discount | [optional] 
 **unlimitedUses** | **bool**| Whether to allow unlimited uses | [optional] [default to false]
 **usesAllowed** | **int**| Number of uses allowed by promotion | [optional] 
 **neverAllowZero** | **bool**| Never allow the value of checkout to be zero | [optional] [default to false]
 **fixedPromotionCode** | **string**| Fixed value for all promotion codes | [optional] 
 **promotionCodePrefix** | **string**| Prefix for all codes | [optional] 
 **termDependencyType** | **string**| Type of dependency to terms | [optional] 
 **applyToAllBillingPeriods** | **bool**| Promotion discount applies to first billing period or all billing periods | [optional] [default to false]
 **canBeAppliedOnRenewal** | **bool**| Promotion can be applied on renewal | [optional] [default to false]

### Return type

[**\model\TPPublisherPromotion**](TPPublisherPromotion.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteRequest**
> deleteRequest($promotionId)

Deletes a promotion



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherPromotionApi();
$promotionId = "promotionId_example"; // string | Promotion id

try { 
    $api_instance->deleteRequest($promotionId);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherPromotionApi->deleteRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotionId** | **string**| Promotion id | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **generateCodesRequest**
> \model\TPPublisherPromotion generateCodesRequest($promotionId, $fixedPromotionCode, $promotionCodePrefix, $amount, $assetId)

Generate promo codes



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherPromotionApi();
$promotionId = "promotionId_example"; // string | Promotion id
$fixedPromotionCode = "fixedPromotionCode_example"; // string | Fixed value for all promotion codes
$promotionCodePrefix = "promotionCodePrefix_example"; // string | Prefix for all codes
$amount = 789; // int | Amount of promotion codes to generate
$assetId = "assetId_example"; // string | asset id

try { 
    $result = $api_instance->generateCodesRequest($promotionId, $fixedPromotionCode, $promotionCodePrefix, $amount, $assetId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherPromotionApi->generateCodesRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotionId** | **string**| Promotion id | 
 **fixedPromotionCode** | **string**| Fixed value for all promotion codes | [optional] 
 **promotionCodePrefix** | **string**| Prefix for all codes | [optional] 
 **amount** | **int**| Amount of promotion codes to generate | [optional] 
 **assetId** | **string**| asset id | [optional] 

### Return type

[**\model\TPPublisherPromotion**](TPPublisherPromotion.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getRequest**
> \model\TPPublisherPromotion getRequest($promotionId)

Gets a prommotion



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherPromotionApi();
$promotionId = "promotionId_example"; // string | Promotion id

try { 
    $result = $api_instance->getRequest($promotionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherPromotionApi->getRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotionId** | **string**| Promotion id | 

### Return type

[**\model\TPPublisherPromotion**](TPPublisherPromotion.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listRequest**
> \model\TPPublisherPromotion[] listRequest($aid, $offset, $limit, $expired, $q, $orderBy, $orderDirection)

Lists promotions



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherPromotionApi();
$aid = "aid_example"; // string | Application aid
$offset = 0; // int | Offset from which to start returning results
$limit = 25; // int | Maximum index of returned results
$expired = "active"; // string | Promotion is expired
$q = "q_example"; // string | Search value
$orderBy = "orderBy_example"; // string | Field to order by
$orderDirection = "orderDirection_example"; // string | Order direction (asc/desc)

try { 
    $result = $api_instance->listRequest($aid, $offset, $limit, $expired, $q, $orderBy, $orderDirection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherPromotionApi->listRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **offset** | **int**| Offset from which to start returning results | [default to 0]
 **limit** | **int**| Maximum index of returned results | [default to 25]
 **expired** | **string**| Promotion is expired | [optional] [default to active]
 **q** | **string**| Search value | [optional] 
 **orderBy** | **string**| Field to order by | [optional] 
 **orderDirection** | **string**| Order direction (asc/desc) | [optional] 

### Return type

[**\model\TPPublisherPromotion[]**](TPPublisherPromotion.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **totalSaleRequest**
> string totalSaleRequest($promotionId, $currencyCode)

Get total sales for promotion



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherPromotionApi();
$promotionId = "promotionId_example"; // string | Promotion id
$currencyCode = "USD"; // string | Currency code by ISO 4217 standard

try { 
    $result = $api_instance->totalSaleRequest($promotionId, $currencyCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherPromotionApi->totalSaleRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotionId** | **string**| Promotion id | 
 **currencyCode** | **string**| Currency code by ISO 4217 standard | [optional] [default to USD]

### Return type

**string**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateRequest**
> \model\TPPublisherPromotion updateRequest($promotionId, $aid, $name, $discountType, $startDate, $endDate, $newCustomersOnly, $percentageDiscount, $unlimitedUses, $usesAllowed, $neverAllowZero, $fixedPromotionCode, $promotionCodePrefix, $termDependencyType, $applyToAllBillingPeriods, $canBeAppliedOnRenewal)

Update a promotion



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherPromotionApi();
$promotionId = "promotionId_example"; // string | Promotion id
$aid = "aid_example"; // string | Application aid
$name = "name_example"; // string | Promotion name
$discountType = "discountType_example"; // string | Type of promotion discount 
$startDate = "2013-10-20T19:20:30+01:00"; // string | The start date.
$endDate = "2013-10-20T19:20:30+01:00"; // string | The end date
$newCustomersOnly = false; // bool | whether promotion allows new customers only
$percentageDiscount = new Number(); // Number | Promotion percentage discount
$unlimitedUses = false; // bool | Whether to allow unlimited uses
$usesAllowed = 56; // int | Number of uses allowed by promotion
$neverAllowZero = false; // bool | Never allow the value of checkout to be zero
$fixedPromotionCode = "fixedPromotionCode_example"; // string | Fixed value for all promotion codes
$promotionCodePrefix = "promotionCodePrefix_example"; // string | Prefix for all codes
$termDependencyType = "termDependencyType_example"; // string | Type of dependency to terms
$applyToAllBillingPeriods = true; // bool | Promotion discount applies to first billing period or all billing periods
$canBeAppliedOnRenewal = false; // bool | Promotion can be applied on renewal

try { 
    $result = $api_instance->updateRequest($promotionId, $aid, $name, $discountType, $startDate, $endDate, $newCustomersOnly, $percentageDiscount, $unlimitedUses, $usesAllowed, $neverAllowZero, $fixedPromotionCode, $promotionCodePrefix, $termDependencyType, $applyToAllBillingPeriods, $canBeAppliedOnRenewal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherPromotionApi->updateRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **promotionId** | **string**| Promotion id | 
 **aid** | **string**| Application aid | 
 **name** | **string**| Promotion name | 
 **discountType** | **string**| Type of promotion discount  | 
 **startDate** | **string**| The start date. | [optional] 
 **endDate** | **string**| The end date | [optional] 
 **newCustomersOnly** | **bool**| whether promotion allows new customers only | [optional] [default to false]
 **percentageDiscount** | [**Number**](.md)| Promotion percentage discount | [optional] 
 **unlimitedUses** | **bool**| Whether to allow unlimited uses | [optional] [default to false]
 **usesAllowed** | **int**| Number of uses allowed by promotion | [optional] 
 **neverAllowZero** | **bool**| Never allow the value of checkout to be zero | [optional] [default to false]
 **fixedPromotionCode** | **string**| Fixed value for all promotion codes | [optional] 
 **promotionCodePrefix** | **string**| Prefix for all codes | [optional] 
 **termDependencyType** | **string**| Type of dependency to terms | [optional] 
 **applyToAllBillingPeriods** | **bool**| Promotion discount applies to first billing period or all billing periods | [optional] 
 **canBeAppliedOnRenewal** | **bool**| Promotion can be applied on renewal | [optional] [default to false]

### Return type

[**\model\TPPublisherPromotion**](TPPublisherPromotion.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


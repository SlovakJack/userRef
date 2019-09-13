# \TPPublisherTermGiftApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createGiftTermRequest**](TPPublisherTermGiftApi.md#createGiftTermRequest) | **POST** /publisher/term/gift/create | Creates a gift term
[**updateGiftTermRequest**](TPPublisherTermGiftApi.md#updateGiftTermRequest) | **POST** /publisher/term/gift/update | Updates a gift term


# **createGiftTermRequest**
> \model\TPPublisherTerm createGiftTermRequest($aid, $name, $rid, $billingPlanPeriod, $billingPlanPrice, $billingPlanCurrency, $description, $voucheringPolicyRedemptionUrl)

Creates a gift term



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherTermGiftApi();
$aid = "aid_example"; // string | Application aid
$name = "name_example"; // string | Term name
$rid = "rid_example"; // string | Unique id for resource
$billingPlanPeriod = "billingPlanPeriod_example"; // string | Period of billing plan
$billingPlanPrice = new Number(); // Number | Price of billing plan
$billingPlanCurrency = "billingPlanCurrency_example"; // string | Currency of billing plan
$description = "description_example"; // string | Term description
$voucheringPolicyRedemptionUrl = "voucheringPolicyRedemptionUrl_example"; // string | Redemption URL of vouchering policy

try { 
    $result = $api_instance->createGiftTermRequest($aid, $name, $rid, $billingPlanPeriod, $billingPlanPrice, $billingPlanCurrency, $description, $voucheringPolicyRedemptionUrl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherTermGiftApi->createGiftTermRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **name** | **string**| Term name | 
 **rid** | **string**| Unique id for resource | 
 **billingPlanPeriod** | **string**| Period of billing plan | 
 **billingPlanPrice** | [**Number**](.md)| Price of billing plan | 
 **billingPlanCurrency** | **string**| Currency of billing plan | 
 **description** | **string**| Term description | [optional] 
 **voucheringPolicyRedemptionUrl** | **string**| Redemption URL of vouchering policy | [optional] 

### Return type

[**\model\TPPublisherTerm**](TPPublisherTerm.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateGiftTermRequest**
> \model\TPPublisherTerm updateGiftTermRequest($aid, $termId, $name, $rid, $description, $billingPlanPeriod, $billingPlanPrice, $billingPlanCurrency, $voucheringPolicyRedemptionUrl)

Updates a gift term



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherTermGiftApi();
$aid = "aid_example"; // string | Application aid
$termId = "termId_example"; // string | Term ID
$name = "name_example"; // string | Term name
$rid = "rid_example"; // string | Unique id for resource
$description = "description_example"; // string | Term description
$billingPlanPeriod = "billingPlanPeriod_example"; // string | Period of billing plan
$billingPlanPrice = new Number(); // Number | Price of billing plan
$billingPlanCurrency = "billingPlanCurrency_example"; // string | Currency of billing plan
$voucheringPolicyRedemptionUrl = "voucheringPolicyRedemptionUrl_example"; // string | Redemption URL of vouchering policy

try { 
    $result = $api_instance->updateGiftTermRequest($aid, $termId, $name, $rid, $description, $billingPlanPeriod, $billingPlanPrice, $billingPlanCurrency, $voucheringPolicyRedemptionUrl);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherTermGiftApi->updateGiftTermRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **termId** | **string**| Term ID | 
 **name** | **string**| Term name | 
 **rid** | **string**| Unique id for resource | 
 **description** | **string**| Term description | [optional] 
 **billingPlanPeriod** | **string**| Period of billing plan | [optional] 
 **billingPlanPrice** | [**Number**](.md)| Price of billing plan | [optional] 
 **billingPlanCurrency** | **string**| Currency of billing plan | [optional] 
 **voucheringPolicyRedemptionUrl** | **string**| Redemption URL of vouchering policy | [optional] 

### Return type

[**\model\TPPublisherTerm**](TPPublisherTerm.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# \TPPublisherTermExternalApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createExternalVerificationTermRequest**](TPPublisherTermExternalApi.md#createExternalVerificationTermRequest) | **POST** /publisher/term/external/create | Creates an external verified term
[**updateExternalVerificationTermRequest**](TPPublisherTermExternalApi.md#updateExternalVerificationTermRequest) | **POST** /publisher/term/external/update | Updates an external verified term


# **createExternalVerificationTermRequest**
> \model\TPPublisherTerm createExternalVerificationTermRequest($aid, $rid, $externalApiId, $name, $description, $evtFixedTimeAccessPeriod, $evtGracePeriod, $evtVerificationPeriod, $evtItunesBundleId, $evtItunesProductId, $evtGooglePlayProductId)

Creates an external verified term



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherTermExternalApi();
$aid = "aid_example"; // string | Application aid
$rid = "rid_example"; // string | Unique id for resource
$externalApiId = "externalApiId_example"; // string | External API Configuration ID
$name = "name_example"; // string | Term name
$description = "description_example"; // string | Term description
$evtFixedTimeAccessPeriod = 56; // int | Period to grant access for in days
$evtGracePeriod = 56; // int | External API grace period
$evtVerificationPeriod = 56; // int | External verification period
$evtItunesBundleId = "evtItunesBundleId_example"; // string | iTunes bundle id
$evtItunesProductId = "evtItunesProductId_example"; // string | iTunes  product id
$evtGooglePlayProductId = "evtGooglePlayProductId_example"; // string | Google Play product id

try { 
    $result = $api_instance->createExternalVerificationTermRequest($aid, $rid, $externalApiId, $name, $description, $evtFixedTimeAccessPeriod, $evtGracePeriod, $evtVerificationPeriod, $evtItunesBundleId, $evtItunesProductId, $evtGooglePlayProductId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherTermExternalApi->createExternalVerificationTermRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **rid** | **string**| Unique id for resource | 
 **externalApiId** | **string**| External API Configuration ID | 
 **name** | **string**| Term name | 
 **description** | **string**| Term description | [optional] 
 **evtFixedTimeAccessPeriod** | **int**| Period to grant access for in days | [optional] 
 **evtGracePeriod** | **int**| External API grace period | [optional] 
 **evtVerificationPeriod** | **int**| External verification period | [optional] 
 **evtItunesBundleId** | **string**| iTunes bundle id | [optional] 
 **evtItunesProductId** | **string**| iTunes  product id | [optional] 
 **evtGooglePlayProductId** | **string**| Google Play product id | [optional] 

### Return type

[**\model\TPPublisherTerm**](TPPublisherTerm.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateExternalVerificationTermRequest**
> \model\TPPublisherTerm updateExternalVerificationTermRequest($termId, $externalApiId, $name, $rid, $description, $evtFixedTimeAccessPeriod, $evtGracePeriod, $evtVerificationPeriod, $evtItunesBundleId, $evtItunesProductId, $evtGooglePlayProductId)

Updates an external verified term



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherTermExternalApi();
$termId = "termId_example"; // string | Term ID
$externalApiId = "externalApiId_example"; // string | External API Configuration ID
$name = "name_example"; // string | Term name
$rid = "rid_example"; // string | Unique id for resource
$description = "description_example"; // string | Term description
$evtFixedTimeAccessPeriod = 56; // int | Period to grant access for in days
$evtGracePeriod = 56; // int | External API grace period
$evtVerificationPeriod = 56; // int | External verification period
$evtItunesBundleId = "evtItunesBundleId_example"; // string | iTunes bundle id
$evtItunesProductId = "evtItunesProductId_example"; // string | iTunes  product id
$evtGooglePlayProductId = "evtGooglePlayProductId_example"; // string | Google Play product id

try { 
    $result = $api_instance->updateExternalVerificationTermRequest($termId, $externalApiId, $name, $rid, $description, $evtFixedTimeAccessPeriod, $evtGracePeriod, $evtVerificationPeriod, $evtItunesBundleId, $evtItunesProductId, $evtGooglePlayProductId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherTermExternalApi->updateExternalVerificationTermRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **termId** | **string**| Term ID | 
 **externalApiId** | **string**| External API Configuration ID | 
 **name** | **string**| Term name | 
 **rid** | **string**| Unique id for resource | [optional] 
 **description** | **string**| Term description | [optional] 
 **evtFixedTimeAccessPeriod** | **int**| Period to grant access for in days | [optional] 
 **evtGracePeriod** | **int**| External API grace period | [optional] 
 **evtVerificationPeriod** | **int**| External verification period | [optional] 
 **evtItunesBundleId** | **string**| iTunes bundle id | [optional] 
 **evtItunesProductId** | **string**| iTunes  product id | [optional] 
 **evtGooglePlayProductId** | **string**| Google Play product id | [optional] 

### Return type

[**\model\TPPublisherTerm**](TPPublisherTerm.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# \TPPublisherPaymentProviderConfigurationGetEdgilApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEdgilPaywayConfigurationRequest**](TPPublisherPaymentProviderConfigurationGetEdgilApi.md#getEdgilPaywayConfigurationRequest) | **GET** /publisher/payment/provider/configuration/get/edgil/payway | Gets payment provider configuration for Edgil Payway


# **getEdgilPaywayConfigurationRequest**
> \model\TPPublisherEdgilPaywayConfiguration getEdgilPaywayConfigurationRequest($aid)

Gets payment provider configuration for Edgil Payway



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherPaymentProviderConfigurationGetEdgilApi();
$aid = "aid_example"; // string | Application aid

try { 
    $result = $api_instance->getEdgilPaywayConfigurationRequest($aid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherPaymentProviderConfigurationGetEdgilApi->getEdgilPaywayConfigurationRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 

### Return type

[**\model\TPPublisherEdgilPaywayConfiguration**](TPPublisherEdgilPaywayConfiguration.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


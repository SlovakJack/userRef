# \TPPublisherPaymentProviderConfigurationCreateEdgilApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createEdgilPaywayConfigurationRequest**](TPPublisherPaymentProviderConfigurationCreateEdgilApi.md#createEdgilPaywayConfigurationRequest) | **POST** /publisher/payment/provider/configuration/create/edgil/payway | Creates new payment provider configuration for Edgil Payway


# **createEdgilPaywayConfigurationRequest**
> \model\TPPublisherEdgilPaywayConfiguration createEdgilPaywayConfigurationRequest($aid, $title, $properties)

Creates new payment provider configuration for Edgil Payway



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherPaymentProviderConfigurationCreateEdgilApi();
$aid = "aid_example"; // string | Application aid
$title = "title_example"; // string | The title
$properties = "properties_example"; // string | Edgil Payway payment provider properties

try { 
    $result = $api_instance->createEdgilPaywayConfigurationRequest($aid, $title, $properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherPaymentProviderConfigurationCreateEdgilApi->createEdgilPaywayConfigurationRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **title** | **string**| The title | 
 **properties** | **string**| Edgil Payway payment provider properties | 

### Return type

[**\model\TPPublisherEdgilPaywayConfiguration**](TPPublisherEdgilPaywayConfiguration.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


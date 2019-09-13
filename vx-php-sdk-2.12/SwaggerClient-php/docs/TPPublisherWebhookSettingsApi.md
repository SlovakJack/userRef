# \TPPublisherWebhookSettingsApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSettingsRequest**](TPPublisherWebhookSettingsApi.md#getSettingsRequest) | **GET** /publisher/webhook/settings/get | Get webhook settings
[**updateSettingsRequest**](TPPublisherWebhookSettingsApi.md#updateSettingsRequest) | **POST** /publisher/webhook/settings/update | Update settings of endpoint


# **getSettingsRequest**
> \model\TPPublisherWebhookSettings getSettingsRequest($aid)

Get webhook settings



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherWebhookSettingsApi();
$aid = "aid_example"; // string | Application aid

try { 
    $result = $api_instance->getSettingsRequest($aid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherWebhookSettingsApi->getSettingsRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 

### Return type

[**\model\TPPublisherWebhookSettings**](TPPublisherWebhookSettings.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateSettingsRequest**
> bool updateSettingsRequest($aid, $url, $enabled)

Update settings of endpoint



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherWebhookSettingsApi();
$aid = "aid_example"; // string | Application aid
$url = "url_example"; // string | Webhook endpoint url
$enabled = true; // bool | Webhook endpoint enabled

try { 
    $result = $api_instance->updateSettingsRequest($aid, $url, $enabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherWebhookSettingsApi->updateSettingsRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **url** | **string**| Webhook endpoint url | [optional] 
 **enabled** | **bool**| Webhook endpoint enabled | [optional] 

### Return type

**bool**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


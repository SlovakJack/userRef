# \TPPublisherWebhookResponseApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getResponsesRequest**](TPPublisherWebhookResponseApi.md#getResponsesRequest) | **GET** /publisher/webhook/response/list | Get responses for an event
[**resendRequest**](TPPublisherWebhookResponseApi.md#resendRequest) | **GET** /publisher/webhook/response/resend | Resend an event


# **getResponsesRequest**
> \model\TPPublisherWebhookResponse[] getResponsesRequest($webhookId, $limit, $offset, $orderBy, $orderDirection)

Get responses for an event



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherWebhookResponseApi();
$webhookId = "webhookId_example"; // string | Webhook id
$limit = 100; // int | Limit
$offset = 0; // int | Offset
$orderBy = "create_date"; // string | Order by
$orderDirection = "desc"; // string | Order direction

try { 
    $result = $api_instance->getResponsesRequest($webhookId, $limit, $offset, $orderBy, $orderDirection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherWebhookResponseApi->getResponsesRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhookId** | **string**| Webhook id | 
 **limit** | **int**| Limit | [default to 100]
 **offset** | **int**| Offset | [default to 0]
 **orderBy** | **string**| Order by | [default to create_date]
 **orderDirection** | **string**| Order direction | [default to desc]

### Return type

[**\model\TPPublisherWebhookResponse[]**](TPPublisherWebhookResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **resendRequest**
> \model\TPPublisherWebhookResponse resendRequest($webhookId)

Resend an event



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherWebhookResponseApi();
$webhookId = "webhookId_example"; // string | Webhook id

try { 
    $result = $api_instance->resendRequest($webhookId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherWebhookResponseApi->resendRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhookId** | **string**| Webhook id | 

### Return type

[**\model\TPPublisherWebhookResponse**](TPPublisherWebhookResponse.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


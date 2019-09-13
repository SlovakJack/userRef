# \TPPublisherWebhookApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventsRequest**](TPPublisherWebhookApi.md#eventsRequest) | **GET** /publisher/webhook/events | Get webhook event types
[**getEventRequest**](TPPublisherWebhookApi.md#getEventRequest) | **GET** /publisher/webhook/get | Get an event
[**listRequest**](TPPublisherWebhookApi.md#listRequest) | **GET** /publisher/webhook/list | Gets list of events
[**skipRequest**](TPPublisherWebhookApi.md#skipRequest) | **GET** /publisher/webhook/skip | Skips webhook
[**statusRequest**](TPPublisherWebhookApi.md#statusRequest) | **GET** /publisher/webhook/status | Checks webhook status


# **eventsRequest**
> string[] eventsRequest($aid)

Get webhook event types



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherWebhookApi();
$aid = "aid_example"; // string | Application aid

try { 
    $result = $api_instance->eventsRequest($aid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherWebhookApi->eventsRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 

### Return type

**string[]**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getEventRequest**
> \model\TPPublisherWebhookEvent getEventRequest($webhookId)

Get an event



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherWebhookApi();
$webhookId = "webhookId_example"; // string | Webhook id

try { 
    $result = $api_instance->getEventRequest($webhookId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherWebhookApi->getEventRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhookId** | **string**| Webhook id | 

### Return type

[**\model\TPPublisherWebhookEvent**](TPPublisherWebhookEvent.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listRequest**
> \model\TPPublisherWebhookEvent[] listRequest($aid, $limit, $offset, $orderBy, $orderDirection, $status, $keyword, $eventType, $type)

Gets list of events



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherWebhookApi();
$aid = "aid_example"; // string | Application aid
$limit = 100; // int | Limit
$offset = 0; // int | Offset
$orderBy = "create_date"; // string | Order by
$orderDirection = "desc"; // string | Order direction
$status = "status_example"; // string | The status
$keyword = "keyword_example"; // string | Search events by keyword
$eventType = array("eventType_example"); // string[] | Event type
$type = array("type_example"); // string[] | The type

try { 
    $result = $api_instance->listRequest($aid, $limit, $offset, $orderBy, $orderDirection, $status, $keyword, $eventType, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherWebhookApi->listRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **limit** | **int**| Limit | [default to 100]
 **offset** | **int**| Offset | [default to 0]
 **orderBy** | **string**| Order by | [default to create_date]
 **orderDirection** | **string**| Order direction | [default to desc]
 **status** | **string**| The status | [optional] 
 **keyword** | **string**| Search events by keyword | [optional] 
 **eventType** | [**string[]**](string.md)| Event type | [optional] 
 **type** | [**string[]**](string.md)| The type | [optional] 

### Return type

[**\model\TPPublisherWebhookEvent[]**](TPPublisherWebhookEvent.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **skipRequest**
> \model\TPPublisherWebhookEvent skipRequest($webhookId)

Skips webhook



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherWebhookApi();
$webhookId = "webhookId_example"; // string | Webhook id

try { 
    $result = $api_instance->skipRequest($webhookId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherWebhookApi->skipRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhookId** | **string**| Webhook id | 

### Return type

[**\model\TPPublisherWebhookEvent**](TPPublisherWebhookEvent.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **statusRequest**
> \model\TPPublisherWebhookStatus statusRequest($aid)

Checks webhook status



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherWebhookApi();
$aid = "aid_example"; // string | Application aid

try { 
    $result = $api_instance->statusRequest($aid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherWebhookApi->statusRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 

### Return type

[**\model\TPPublisherWebhookStatus**](TPPublisherWebhookStatus.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


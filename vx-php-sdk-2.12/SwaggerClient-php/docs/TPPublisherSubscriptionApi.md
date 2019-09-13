# \TPPublisherSubscriptionApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelSubscriptionRequest**](TPPublisherSubscriptionApi.md#cancelSubscriptionRequest) | **POST** /publisher/subscription/cancel | Cancels a user&#39;s subscription
[**countRequest**](TPPublisherSubscriptionApi.md#countRequest) | **POST** /publisher/subscription/count | Count active subscriptions
[**listRequest**](TPPublisherSubscriptionApi.md#listRequest) | **GET** /publisher/subscription/list | Lists subscriptions.
[**statsRequest**](TPPublisherSubscriptionApi.md#statsRequest) | **POST** /publisher/subscription/stats | Lists subscriptions summary stats
[**updateRequest**](TPPublisherSubscriptionApi.md#updateRequest) | **POST** /publisher/subscription/update | Updates a user&#39;s subscription


# **cancelSubscriptionRequest**
> bool cancelSubscriptionRequest($aid, $subscriptionId, $refundLastPayment)

Cancels a user's subscription



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherSubscriptionApi();
$aid = "aid_example"; // string | Application aid
$subscriptionId = "subscriptionId_example"; // string | User subscription id
$refundLastPayment = false; // bool | Refund last payment

try { 
    $result = $api_instance->cancelSubscriptionRequest($aid, $subscriptionId, $refundLastPayment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherSubscriptionApi->cancelSubscriptionRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **subscriptionId** | **string**| User subscription id | 
 **refundLastPayment** | **bool**| Refund last payment | [default to false]

### Return type

**bool**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **countRequest**
> int countRequest($aid)

Count active subscriptions



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherSubscriptionApi();
$aid = "aid_example"; // string | Application aid

try { 
    $result = $api_instance->countRequest($aid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherSubscriptionApi->countRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 

### Return type

**int**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listRequest**
> \model\TPPublisherUserSubscription[] listRequest($aid, $offset, $limit, $type, $startDate, $endDate, $q, $selectBy, $status)

Lists subscriptions.



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherSubscriptionApi();
$aid = "aid_example"; // string | Application aid
$offset = 0; // int | Offset from which to start returning results
$limit = 100; // int | Maximum index of returned results
$type = "type_example"; // string | The type
$startDate = "2013-10-20T19:20:30+01:00"; // string | The start date. If you use a date-range filter without 'select_by' parameter, method will return result filtered by 'update date'.To specify filter field use 'select_by' parameter.
$endDate = "2013-10-20T19:20:30+01:00"; // string | The end date. If you use a date-range filter without 'select_by' parameter, method will return result filtered by 'update date'.To specify filter field use 'select_by' parameter.
$q = "q_example"; // string | Search value
$selectBy = "selectBy_example"; // string | Filter subscription date field
$status = "status_example"; // string | Subscription status

try { 
    $result = $api_instance->listRequest($aid, $offset, $limit, $type, $startDate, $endDate, $q, $selectBy, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherSubscriptionApi->listRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **offset** | **int**| Offset from which to start returning results | [default to 0]
 **limit** | **int**| Maximum index of returned results | [default to 100]
 **type** | **string**| The type | [optional] 
 **startDate** | **string**| The start date. If you use a date-range filter without &#39;select_by&#39; parameter, method will return result filtered by &#39;update date&#39;.To specify filter field use &#39;select_by&#39; parameter. | [optional] 
 **endDate** | **string**| The end date. If you use a date-range filter without &#39;select_by&#39; parameter, method will return result filtered by &#39;update date&#39;.To specify filter field use &#39;select_by&#39; parameter. | [optional] 
 **q** | **string**| Search value | [optional] 
 **selectBy** | **string**| Filter subscription date field | [optional] 
 **status** | **string**| Subscription status | [optional] 

### Return type

[**\model\TPPublisherUserSubscription[]**](TPPublisherUserSubscription.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **statsRequest**
> \model\TPPublisherUserSubscriptionDto[] statsRequest($aid, $uid, $offset, $limit, $q)

Lists subscriptions summary stats



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherSubscriptionApi();
$aid = "aid_example"; // string | Application aid
$uid = "uid_example"; // string | User's uid
$offset = 0; // int | Offset from which to start returning results
$limit = 100; // int | Maximum index of returned results
$q = "q_example"; // string | Search value

try { 
    $result = $api_instance->statsRequest($aid, $uid, $offset, $limit, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherSubscriptionApi->statsRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **uid** | **string**| User&#39;s uid | 
 **offset** | **int**| Offset from which to start returning results | [default to 0]
 **limit** | **int**| Maximum index of returned results | [default to 100]
 **q** | **string**| Search value | [optional] 

### Return type

[**\model\TPPublisherUserSubscriptionDto[]**](TPPublisherUserSubscriptionDto.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateRequest**
> bool updateRequest($aid, $subscriptionId, $nextBillDate, $autoRenew, $paymentMethodId, $userAddressId)

Updates a user's subscription



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherSubscriptionApi();
$aid = "aid_example"; // string | Application aid
$subscriptionId = "subscriptionId_example"; // string | Subscription id
$nextBillDate = "2013-10-20T19:20:30+01:00"; // string | Date of next bill
$autoRenew = true; // bool | Subscription auto renew
$paymentMethodId = "paymentMethodId_example"; // string | Payment method id
$userAddressId = "userAddressId_example"; // string | Public id of specific user address

try { 
    $result = $api_instance->updateRequest($aid, $subscriptionId, $nextBillDate, $autoRenew, $paymentMethodId, $userAddressId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherSubscriptionApi->updateRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **subscriptionId** | **string**| Subscription id | 
 **nextBillDate** | **string**| Date of next bill | [optional] 
 **autoRenew** | **bool**| Subscription auto renew | [optional] 
 **paymentMethodId** | **string**| Payment method id | [optional] 
 **userAddressId** | **string**| Public id of specific user address | [optional] 

### Return type

**bool**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


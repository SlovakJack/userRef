# \TPPublisherUserEmailApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMailLogRequest**](TPPublisherUserEmailApi.md#getMailLogRequest) | **GET** /publisher/user/email/get | Gets a mail log
[**listMailLogRequest**](TPPublisherUserEmailApi.md#listMailLogRequest) | **GET** /publisher/user/email/list | Lists mail log


# **getMailLogRequest**
> \model\TPPublisherMailLog getMailLogRequest($aid, $mailLogId)

Gets a mail log



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherUserEmailApi();
$aid = "aid_example"; // string | Application aid
$mailLogId = "mailLogId_example"; // string | Mail log id

try { 
    $result = $api_instance->getMailLogRequest($aid, $mailLogId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherUserEmailApi->getMailLogRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **mailLogId** | **string**| Mail log id | [optional] 

### Return type

[**\model\TPPublisherMailLog**](TPPublisherMailLog.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listMailLogRequest**
> \model\TPPublisherMailLog[] listMailLogRequest($aid, $offset, $limit, $uid, $q, $orderBy, $orderDirection)

Lists mail log



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherUserEmailApi();
$aid = "aid_example"; // string | Application aid
$offset = 0; // int | Offset from which to start returning results
$limit = 25; // int | Maximum index of returned results
$uid = "uid_example"; // string | User's uid
$q = "q_example"; // string | Search value
$orderBy = "orderBy_example"; // string | Field to order by
$orderDirection = "orderDirection_example"; // string | Order direction (asc/desc)

try { 
    $result = $api_instance->listMailLogRequest($aid, $offset, $limit, $uid, $q, $orderBy, $orderDirection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherUserEmailApi->listMailLogRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **offset** | **int**| Offset from which to start returning results | [default to 0]
 **limit** | **int**| Maximum index of returned results | [default to 25]
 **uid** | **string**| User&#39;s uid | [optional] 
 **q** | **string**| Search value | [optional] 
 **orderBy** | **string**| Field to order by | [optional] 
 **orderDirection** | **string**| Order direction (asc/desc) | [optional] 

### Return type

[**\model\TPPublisherMailLog[]**](TPPublisherMailLog.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


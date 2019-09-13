# \TPPublisherInquiryApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCommentRequest**](TPPublisherInquiryApi.md#addCommentRequest) | **GET** /publisher/inquiry/add | Adds comment
[**commentsRequest**](TPPublisherInquiryApi.md#commentsRequest) | **GET** /publisher/inquiry/comments | Lists inquiry comments
[**detailsRequest**](TPPublisherInquiryApi.md#detailsRequest) | **GET** /publisher/inquiry/details | Get inqiury
[**getInquiryActionsRequest**](TPPublisherInquiryApi.md#getInquiryActionsRequest) | **GET** /publisher/inquiry/inquiryActions | Available actions for an inquiry
[**lastCommentRequest**](TPPublisherInquiryApi.md#lastCommentRequest) | **GET** /publisher/inquiry/lastComment | Get last inquiry comment for user
[**listRequest**](TPPublisherInquiryApi.md#listRequest) | **GET** /publisher/inquiry/list | Lists inquiries
[**unresolvedCountRequest**](TPPublisherInquiryApi.md#unresolvedCountRequest) | **GET** /publisher/inquiry/unresolvedCount | Get unresolved inquiries count


# **addCommentRequest**
> \model\TPPublisherPaymentInquiry addCommentRequest($aid, $paymentInquiryId, $action, $comment, $internal)

Adds comment



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherInquiryApi();
$aid = "aid_example"; // string | Application aid
$paymentInquiryId = "paymentInquiryId_example"; // string | Payment inquiry public id
$action = array("action_example"); // string[] | The action
$comment = "comment_example"; // string | Inquiry comment
$internal = true; // bool | Internal comment

try { 
    $result = $api_instance->addCommentRequest($aid, $paymentInquiryId, $action, $comment, $internal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherInquiryApi->addCommentRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **paymentInquiryId** | **string**| Payment inquiry public id | 
 **action** | [**string[]**](string.md)| The action | 
 **comment** | **string**| Inquiry comment | 
 **internal** | **bool**| Internal comment | 

### Return type

[**\model\TPPublisherPaymentInquiry**](TPPublisherPaymentInquiry.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **commentsRequest**
> \model\TPPublisherInquiryComment[] commentsRequest($aid, $paymentInquiryId)

Lists inquiry comments



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherInquiryApi();
$aid = "aid_example"; // string | Application aid
$paymentInquiryId = "paymentInquiryId_example"; // string | Payment inquiry public id

try { 
    $result = $api_instance->commentsRequest($aid, $paymentInquiryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherInquiryApi->commentsRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **paymentInquiryId** | **string**| Payment inquiry public id | 

### Return type

[**\model\TPPublisherInquiryComment[]**](TPPublisherInquiryComment.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **detailsRequest**
> \model\TPPublisherPaymentInquiry detailsRequest($aid, $paymentInquiryId)

Get inqiury



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherInquiryApi();
$aid = "aid_example"; // string | Application aid
$paymentInquiryId = "paymentInquiryId_example"; // string | Payment inquiry public id

try { 
    $result = $api_instance->detailsRequest($aid, $paymentInquiryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherInquiryApi->detailsRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **paymentInquiryId** | **string**| Payment inquiry public id | 

### Return type

[**\model\TPPublisherPaymentInquiry**](TPPublisherPaymentInquiry.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getInquiryActionsRequest**
> \model\TPPublisherCommentAction[] getInquiryActionsRequest($aid, $paymentInquiryId)

Available actions for an inquiry



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherInquiryApi();
$aid = "aid_example"; // string | Application aid
$paymentInquiryId = "paymentInquiryId_example"; // string | Payment inquiry public id

try { 
    $result = $api_instance->getInquiryActionsRequest($aid, $paymentInquiryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherInquiryApi->getInquiryActionsRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **paymentInquiryId** | **string**| Payment inquiry public id | 

### Return type

[**\model\TPPublisherCommentAction[]**](TPPublisherCommentAction.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **lastCommentRequest**
> \model\TPPublisherPaymentInquiry lastCommentRequest($aid, $uid)

Get last inquiry comment for user



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherInquiryApi();
$aid = "aid_example"; // string | Application aid
$uid = "uid_example"; // string | User's uid

try { 
    $result = $api_instance->lastCommentRequest($aid, $uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherInquiryApi->lastCommentRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **uid** | **string**| User&#39;s uid | 

### Return type

[**\model\TPPublisherPaymentInquiry**](TPPublisherPaymentInquiry.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listRequest**
> \model\TPPublisherPaymentInquiry[] listRequest($aid, $uid, $offset, $limit, $q)

Lists inquiries



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherInquiryApi();
$aid = "aid_example"; // string | Application aid
$uid = "uid_example"; // string | User's uid
$offset = 0; // int | Offset from which to start returning results
$limit = 100; // int | Maximum index of returned results
$q = "q_example"; // string | Search value

try { 
    $result = $api_instance->listRequest($aid, $uid, $offset, $limit, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherInquiryApi->listRequest: ', $e->getMessage(), "\n";
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

[**\model\TPPublisherPaymentInquiry[]**](TPPublisherPaymentInquiry.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **unresolvedCountRequest**
> int unresolvedCountRequest($aid, $uid)

Get unresolved inquiries count



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherInquiryApi();
$aid = "aid_example"; // string | Application aid
$uid = "uid_example"; // string | User's uid

try { 
    $result = $api_instance->unresolvedCountRequest($aid, $uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherInquiryApi->unresolvedCountRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **uid** | **string**| User&#39;s uid | [optional] 

### Return type

**int**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


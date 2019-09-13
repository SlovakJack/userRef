# \TPPublisherUserAccessApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkAccessRequest**](TPPublisherUserAccessApi.md#checkAccessRequest) | **GET** /publisher/user/access/check | Check if user has access to a specific resource
[**grantAccessRequest**](TPPublisherUserAccessApi.md#grantAccessRequest) | **GET** /publisher/user/access/grant | Grants access to a user
[**grantAccessToUsersRequest**](TPPublisherUserAccessApi.md#grantAccessToUsersRequest) | **GET** /publisher/user/access/grantToUsers | Grant access to users
[**listAccessRequest**](TPPublisherUserAccessApi.md#listAccessRequest) | **GET** /publisher/user/access/list | Lists a user&#39;s access
[**revokeAccessRequest**](TPPublisherUserAccessApi.md#revokeAccessRequest) | **GET** /publisher/user/access/revoke | Revokes a user&#39;s access
[**updateRequest**](TPPublisherUserAccessApi.md#updateRequest) | **POST** /publisher/user/access/update | Update user access


# **checkAccessRequest**
> \model\TPPublisherAccess checkAccessRequest($aid, $uid, $rid)

Check if user has access to a specific resource

Returns an Access object if the user has access to specific resource

### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherUserAccessApi();
$aid = "aid_example"; // string | Application aid
$uid = "uid_example"; // string | User's uid
$rid = "rid_example"; // string | Unique id for resource

try { 
    $result = $api_instance->checkAccessRequest($aid, $uid, $rid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherUserAccessApi->checkAccessRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **uid** | **string**| User&#39;s uid | 
 **rid** | **string**| Unique id for resource | 

### Return type

[**\model\TPPublisherAccess**](TPPublisherAccess.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **grantAccessRequest**
> \model\TPPublisherAccess[] grantAccessRequest($aid, $rid, $sendEmail, $uid, $emails, $expireDate, $url, $message)

Grants access to a user



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherUserAccessApi();
$aid = "aid_example"; // string | Application aid
$rid = "rid_example"; // string | Unique id for resource
$sendEmail = false; // bool | Flag that email should be sent
$uid = "uid_example"; // string | User's uid
$emails = "emails_example"; // string | User's email addresses
$expireDate = 56; // int | The access item expire date; null means unlimited
$url = "url_example"; // string | The URL of the page
$message = "message_example"; // string | Message

try { 
    $result = $api_instance->grantAccessRequest($aid, $rid, $sendEmail, $uid, $emails, $expireDate, $url, $message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherUserAccessApi->grantAccessRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **rid** | **string**| Unique id for resource | 
 **sendEmail** | **bool**| Flag that email should be sent | [default to false]
 **uid** | **string**| User&#39;s uid | [optional] 
 **emails** | **string**| User&#39;s email addresses | [optional] 
 **expireDate** | **int**| The access item expire date; null means unlimited | [optional] 
 **url** | **string**| The URL of the page | [optional] 
 **message** | **string**| Message | [optional] 

### Return type

[**\model\TPPublisherAccess[]**](TPPublisherAccess.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **grantAccessToUsersRequest**
> int grantAccessToUsersRequest($aid, $rid, $sendEmail, $emails, $fileId, $expireDate, $message)

Grant access to users



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherUserAccessApi();
$aid = "aid_example"; // string | Application aid
$rid = array("rid_example"); // string[] | Unique id for resource
$sendEmail = false; // bool | Flag that email should be sent
$emails = array("emails_example"); // string[] | User's email addresses
$fileId = "fileId_example"; // string | The file id
$expireDate = "2013-10-20T19:20:30+01:00"; // string | The access item expire date; null means unlimited
$message = "message_example"; // string | Message

try { 
    $result = $api_instance->grantAccessToUsersRequest($aid, $rid, $sendEmail, $emails, $fileId, $expireDate, $message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherUserAccessApi->grantAccessToUsersRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **rid** | [**string[]**](string.md)| Unique id for resource | 
 **sendEmail** | **bool**| Flag that email should be sent | [default to false]
 **emails** | [**string[]**](string.md)| User&#39;s email addresses | [optional] 
 **fileId** | **string**| The file id | [optional] 
 **expireDate** | **string**| The access item expire date; null means unlimited | [optional] 
 **message** | **string**| Message | [optional] 

### Return type

**int**

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listAccessRequest**
> \model\TPPublisherAccess[] listAccessRequest($aid, $uid, $offset, $limit, $expandBundled, $q)

Lists a user's access



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherUserAccessApi();
$aid = "aid_example"; // string | Application aid
$uid = "uid_example"; // string | User's uid
$offset = 0; // int | Offset from which to start returning results
$limit = 100; // int | Maximum index of returned results
$expandBundled = false; // bool | Expand bundled accesses
$q = "q_example"; // string | Search value

try { 
    $result = $api_instance->listAccessRequest($aid, $uid, $offset, $limit, $expandBundled, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherUserAccessApi->listAccessRequest: ', $e->getMessage(), "\n";
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
 **expandBundled** | **bool**| Expand bundled accesses | [optional] [default to false]
 **q** | **string**| Search value | [optional] 

### Return type

[**\model\TPPublisherAccess[]**](TPPublisherAccess.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **revokeAccessRequest**
> \model\TPPublisherAccess revokeAccessRequest($accessId)

Revokes a user's access



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherUserAccessApi();
$accessId = "accessId_example"; // string | The access id

try { 
    $result = $api_instance->revokeAccessRequest($accessId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherUserAccessApi->revokeAccessRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessId** | **string**| The access id | 

### Return type

[**\model\TPPublisherAccess**](TPPublisherAccess.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateRequest**
> \model\TPPublisherAccess updateRequest($accessId, $expireDate)

Update user access



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherUserAccessApi();
$accessId = "accessId_example"; // string | The access id
$expireDate = "2013-10-20T19:20:30+01:00"; // string | Expire date

try { 
    $result = $api_instance->updateRequest($accessId, $expireDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherUserAccessApi->updateRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accessId** | **string**| The access id | 
 **expireDate** | **string**| Expire date | [optional] 

### Return type

[**\model\TPPublisherAccess**](TPPublisherAccess.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


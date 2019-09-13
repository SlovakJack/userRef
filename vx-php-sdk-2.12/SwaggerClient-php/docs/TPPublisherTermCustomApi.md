# \TPPublisherTermCustomApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCustomTermRequest**](TPPublisherTermCustomApi.md#createCustomTermRequest) | **POST** /publisher/term/custom/create | Creates a custom term
[**updateCustomTermRequest**](TPPublisherTermCustomApi.md#updateCustomTermRequest) | **POST** /publisher/term/custom/update | Updates a custom term


# **createCustomTermRequest**
> \model\TPPublisherTerm createCustomTermRequest($aid, $rid, $name, $customRequireUser, $customDefaultAccessPeriod, $description)

Creates a custom term



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherTermCustomApi();
$aid = "aid_example"; // string | Application aid
$rid = "rid_example"; // string | Unique id for resource
$name = "name_example"; // string | Term name
$customRequireUser = false; // bool | Whether a valid user is required to complete the term
$customDefaultAccessPeriod = 56; // int | The default access period
$description = "description_example"; // string | Term description

try { 
    $result = $api_instance->createCustomTermRequest($aid, $rid, $name, $customRequireUser, $customDefaultAccessPeriod, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherTermCustomApi->createCustomTermRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **rid** | **string**| Unique id for resource | 
 **name** | **string**| Term name | 
 **customRequireUser** | **bool**| Whether a valid user is required to complete the term | [optional] [default to false]
 **customDefaultAccessPeriod** | **int**| The default access period | [optional] 
 **description** | **string**| Term description | [optional] 

### Return type

[**\model\TPPublisherTerm**](TPPublisherTerm.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateCustomTermRequest**
> \model\TPPublisherTerm updateCustomTermRequest($termId, $rid, $name, $customRequireUser, $customDefaultAccessPeriod, $description)

Updates a custom term



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherTermCustomApi();
$termId = "termId_example"; // string | Term ID
$rid = "rid_example"; // string | Unique id for resource
$name = "name_example"; // string | Term name
$customRequireUser = true; // bool | Whether a valid user is required to complete the term
$customDefaultAccessPeriod = 56; // int | The default access period
$description = "description_example"; // string | Term description

try { 
    $result = $api_instance->updateCustomTermRequest($termId, $rid, $name, $customRequireUser, $customDefaultAccessPeriod, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherTermCustomApi->updateCustomTermRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **termId** | **string**| Term ID | 
 **rid** | **string**| Unique id for resource | [optional] 
 **name** | **string**| Term name | [optional] 
 **customRequireUser** | **bool**| Whether a valid user is required to complete the term | [optional] 
 **customDefaultAccessPeriod** | **int**| The default access period | [optional] 
 **description** | **string**| Term description | [optional] 

### Return type

[**\model\TPPublisherTerm**](TPPublisherTerm.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


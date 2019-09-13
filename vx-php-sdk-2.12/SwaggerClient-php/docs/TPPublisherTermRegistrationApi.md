# \TPPublisherTermRegistrationApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRegistrationTermRequest**](TPPublisherTermRegistrationApi.md#createRegistrationTermRequest) | **POST** /publisher/term/registration/create | Creates an registration term
[**updateRegistrationTermRequest**](TPPublisherTermRegistrationApi.md#updateRegistrationTermRequest) | **POST** /publisher/term/registration/update | Updates a registration term


# **createRegistrationTermRequest**
> \model\TPPublisherTerm createRegistrationTermRequest($aid, $rid, $name, $description, $registrationAccessPeriod, $registrationGracePeriod)

Creates an registration term



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherTermRegistrationApi();
$aid = "aid_example"; // string | Application aid
$rid = "rid_example"; // string | Unique id for resource
$name = "name_example"; // string | Term name
$description = "description_example"; // string | Term description
$registrationAccessPeriod = 789; // int | The access time period 
$registrationGracePeriod = 789; // int | The time period after registration that will count it as a valid registration conversion

try { 
    $result = $api_instance->createRegistrationTermRequest($aid, $rid, $name, $description, $registrationAccessPeriod, $registrationGracePeriod);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherTermRegistrationApi->createRegistrationTermRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **rid** | **string**| Unique id for resource | 
 **name** | **string**| Term name | 
 **description** | **string**| Term description | [optional] 
 **registrationAccessPeriod** | **int**| The access time period  | [optional] 
 **registrationGracePeriod** | **int**| The time period after registration that will count it as a valid registration conversion | [optional] 

### Return type

[**\model\TPPublisherTerm**](TPPublisherTerm.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateRegistrationTermRequest**
> \model\TPPublisherTerm updateRegistrationTermRequest($termId, $rid, $name, $description, $registrationAccessPeriod, $registrationGracePeriod)

Updates a registration term



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherTermRegistrationApi();
$termId = "termId_example"; // string | Term ID
$rid = "rid_example"; // string | Unique id for resource
$name = "name_example"; // string | Term name
$description = "description_example"; // string | Term description
$registrationAccessPeriod = 789; // int | The access time period 
$registrationGracePeriod = 789; // int | The time period after registration that will count it as a valid registration conversion

try { 
    $result = $api_instance->updateRegistrationTermRequest($termId, $rid, $name, $description, $registrationAccessPeriod, $registrationGracePeriod);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherTermRegistrationApi->updateRegistrationTermRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **termId** | **string**| Term ID | 
 **rid** | **string**| Unique id for resource | [optional] 
 **name** | **string**| Term name | [optional] 
 **description** | **string**| Term description | [optional] 
 **registrationAccessPeriod** | **int**| The access time period  | [optional] 
 **registrationGracePeriod** | **int**| The time period after registration that will count it as a valid registration conversion | [optional] 

### Return type

[**\model\TPPublisherTerm**](TPPublisherTerm.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


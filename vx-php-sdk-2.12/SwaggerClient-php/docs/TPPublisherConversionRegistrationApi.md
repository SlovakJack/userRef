# \TPPublisherConversionRegistrationApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRegistrationConversionRequest**](TPPublisherConversionRegistrationApi.md#createRegistrationConversionRequest) | **POST** /publisher/conversion/registration/create | Records a registration conversion


# **createRegistrationConversionRequest**
> \model\TPPublisherTermConversion createRegistrationConversionRequest($aid, $uid, $termId, $email, $firstName, $lastName, $createDate, $tbc)

Records a registration conversion



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherConversionRegistrationApi();
$aid = "aid_example"; // string | Application aid
$uid = "uid_example"; // string | User's uid
$termId = "termId_example"; // string | Term ID
$email = "email_example"; // string | User's email address
$firstName = "firstName_example"; // string | User's first name
$lastName = "lastName_example"; // string | User's last name
$createDate = "2013-10-20T19:20:30+01:00"; // string | The creation date
$tbc = "tbc_example"; // string | The Tinypass browser cookie (tbc)

try { 
    $result = $api_instance->createRegistrationConversionRequest($aid, $uid, $termId, $email, $firstName, $lastName, $createDate, $tbc);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherConversionRegistrationApi->createRegistrationConversionRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **uid** | **string**| User&#39;s uid | 
 **termId** | **string**| Term ID | 
 **email** | **string**| User&#39;s email address | 
 **firstName** | **string**| User&#39;s first name | [optional] 
 **lastName** | **string**| User&#39;s last name | [optional] 
 **createDate** | **string**| The creation date | [optional] 
 **tbc** | **string**| The Tinypass browser cookie (tbc) | [optional] 

### Return type

[**\model\TPPublisherTermConversion**](TPPublisherTermConversion.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


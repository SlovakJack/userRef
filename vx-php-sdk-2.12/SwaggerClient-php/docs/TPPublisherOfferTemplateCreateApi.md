# \TPPublisherOfferTemplateCreateApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createEmptyRequest**](TPPublisherOfferTemplateCreateApi.md#createEmptyRequest) | **POST** /publisher/offer/template/create/empty | Creates an empty template


# **createEmptyRequest**
> \model\TPPublisherOfferTemplateVersion createEmptyRequest($aid, $name, $description)

Creates an empty template



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherOfferTemplateCreateApi();
$aid = "aid_example"; // string | Application aid
$name = "name_example"; // string | The name
$description = "description_example"; // string | The description

try { 
    $result = $api_instance->createEmptyRequest($aid, $name, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherOfferTemplateCreateApi->createEmptyRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **name** | **string**| The name | 
 **description** | **string**| The description | [optional] 

### Return type

[**\model\TPPublisherOfferTemplateVersion**](TPPublisherOfferTemplateVersion.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


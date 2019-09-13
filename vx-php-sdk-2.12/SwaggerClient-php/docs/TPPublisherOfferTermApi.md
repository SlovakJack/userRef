# \TPPublisherOfferTermApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTermsRequest**](TPPublisherOfferTermApi.md#addTermsRequest) | **POST** /publisher/offer/term/add | Add a term to an offer
[**listTermsRequest**](TPPublisherOfferTermApi.md#listTermsRequest) | **GET** /publisher/offer/term/list | Lists terms in an offer
[**reorderTermsRequest**](TPPublisherOfferTermApi.md#reorderTermsRequest) | **POST** /publisher/offer/term/reorder | Reorder terms in offer
[**unlinkTermsRequest**](TPPublisherOfferTermApi.md#unlinkTermsRequest) | **POST** /publisher/offer/term/remove | Remove a term from an offer


# **addTermsRequest**
> addTermsRequest($offerId, $termId)

Add a term to an offer



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherOfferTermApi();
$offerId = "offerId_example"; // string | The offer ID
$termId = array("termId_example"); // string[] | Term ID

try { 
    $api_instance->addTermsRequest($offerId, $termId);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherOfferTermApi->addTermsRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerId** | **string**| The offer ID | 
 **termId** | [**string[]**](string.md)| Term ID | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listTermsRequest**
> \model\TPPublisherTerm[] listTermsRequest($offerId)

Lists terms in an offer



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherOfferTermApi();
$offerId = "offerId_example"; // string | The offer ID

try { 
    $result = $api_instance->listTermsRequest($offerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherOfferTermApi->listTermsRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerId** | **string**| The offer ID | 

### Return type

[**\model\TPPublisherTerm[]**](TPPublisherTerm.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **reorderTermsRequest**
> reorderTermsRequest($offerId, $termId)

Reorder terms in offer



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherOfferTermApi();
$offerId = "offerId_example"; // string | The offer ID
$termId = array("termId_example"); // string[] | Term ID

try { 
    $api_instance->reorderTermsRequest($offerId, $termId);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherOfferTermApi->reorderTermsRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerId** | **string**| The offer ID | 
 **termId** | [**string[]**](string.md)| Term ID | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **unlinkTermsRequest**
> unlinkTermsRequest($offerId, $termId)

Remove a term from an offer



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherOfferTermApi();
$offerId = "offerId_example"; // string | The offer ID
$termId = array("termId_example"); // string[] | Term ID

try { 
    $api_instance->unlinkTermsRequest($offerId, $termId);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherOfferTermApi->unlinkTermsRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerId** | **string**| The offer ID | 
 **termId** | [**string[]**](string.md)| Term ID | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


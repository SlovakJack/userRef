# \TPPublisherOfferApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**countRequest**](TPPublisherOfferApi.md#countRequest) | **GET** /publisher/offer/count | Counts offers
[**createRequest**](TPPublisherOfferApi.md#createRequest) | **POST** /publisher/offer/create | Creates an offer
[**deleteRequest**](TPPublisherOfferApi.md#deleteRequest) | **POST** /publisher/offer/delete | Deletes an offer
[**getRequest**](TPPublisherOfferApi.md#getRequest) | **GET** /publisher/offer/get | Gets an offer
[**listRequest**](TPPublisherOfferApi.md#listRequest) | **GET** /publisher/offer/list | Lists offers
[**updateRequest**](TPPublisherOfferApi.md#updateRequest) | **POST** /publisher/offer/update | Updates an offer


# **countRequest**
> int countRequest($aid)

Counts offers



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherOfferApi();
$aid = "aid_example"; // string | Application aid

try { 
    $result = $api_instance->countRequest($aid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherOfferApi->countRequest: ', $e->getMessage(), "\n";
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

# **createRequest**
> \model\TPPublisherOfferModel createRequest($aid, $name)

Creates an offer



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherOfferApi();
$aid = "aid_example"; // string | Application aid
$name = "name_example"; // string | The offer name

try { 
    $result = $api_instance->createRequest($aid, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherOfferApi->createRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **name** | **string**| The offer name | 

### Return type

[**\model\TPPublisherOfferModel**](TPPublisherOfferModel.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **deleteRequest**
> deleteRequest($offerId)

Deletes an offer



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherOfferApi();
$offerId = "offerId_example"; // string | The offer ID

try { 
    $api_instance->deleteRequest($offerId);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherOfferApi->deleteRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerId** | **string**| The offer ID | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getRequest**
> \model\TPPublisherOfferModel getRequest($offerId)

Gets an offer



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherOfferApi();
$offerId = "offerId_example"; // string | The offer ID

try { 
    $result = $api_instance->getRequest($offerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherOfferApi->getRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerId** | **string**| The offer ID | 

### Return type

[**\model\TPPublisherOfferModel**](TPPublisherOfferModel.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listRequest**
> \model\TPPublisherOfferModel[] listRequest($aid, $offset, $limit, $q, $orderBy, $orderDirection)

Lists offers



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherOfferApi();
$aid = "aid_example"; // string | Application aid
$offset = 0; // int | Offset from which to start returning results
$limit = 25; // int | Maximum index of returned results
$q = "q_example"; // string | Search value
$orderBy = "orderBy_example"; // string | Field to order by
$orderDirection = "orderDirection_example"; // string | Order direction (asc/desc)

try { 
    $result = $api_instance->listRequest($aid, $offset, $limit, $q, $orderBy, $orderDirection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherOfferApi->listRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **offset** | **int**| Offset from which to start returning results | [default to 0]
 **limit** | **int**| Maximum index of returned results | [default to 25]
 **q** | **string**| Search value | [optional] 
 **orderBy** | **string**| Field to order by | [optional] 
 **orderDirection** | **string**| Order direction (asc/desc) | [optional] 

### Return type

[**\model\TPPublisherOfferModel[]**](TPPublisherOfferModel.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateRequest**
> \model\TPPublisherOfferModel updateRequest($offerId, $aid, $name)

Updates an offer



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherOfferApi();
$offerId = "offerId_example"; // string | The offer ID
$aid = "aid_example"; // string | Application aid
$name = "name_example"; // string | The offer name

try { 
    $result = $api_instance->updateRequest($offerId, $aid, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherOfferApi->updateRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offerId** | **string**| The offer ID | 
 **aid** | **string**| Application aid | 
 **name** | **string**| The offer name | 

### Return type

[**\model\TPPublisherOfferModel**](TPPublisherOfferModel.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


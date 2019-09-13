# \TPPublisherOfferTermOfferApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listOfferByTermRequest**](TPPublisherOfferTermOfferApi.md#listOfferByTermRequest) | **GET** /publisher/offer/term/offer/list | Lists offer by term


# **listOfferByTermRequest**
> \model\TPPublisherOfferModel[] listOfferByTermRequest($aid, $termId, $offset, $limit, $q)

Lists offer by term



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherOfferTermOfferApi();
$aid = "aid_example"; // string | Application aid
$termId = "termId_example"; // string | Term ID
$offset = 0; // int | Offset from which to start returning results
$limit = 100; // int | Maximum index of returned results
$q = "q_example"; // string | Search value

try { 
    $result = $api_instance->listOfferByTermRequest($aid, $termId, $offset, $limit, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherOfferTermOfferApi->listOfferByTermRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **termId** | **string**| Term ID | 
 **offset** | **int**| Offset from which to start returning results | [default to 0]
 **limit** | **int**| Maximum index of returned results | [default to 100]
 **q** | **string**| Search value | [optional] 

### Return type

[**\model\TPPublisherOfferModel[]**](TPPublisherOfferModel.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


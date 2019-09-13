# \TPPublisherTermStatsApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listTermStatsRequest**](TPPublisherTermStatsApi.md#listTermStatsRequest) | **GET** /publisher/term/stats/list | Lists term stats


# **listTermStatsRequest**
> \model\TPPublisherTermStats[] listTermStatsRequest($aid, $termId)

Lists term stats



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherTermStatsApi();
$aid = "aid_example"; // string | Application aid
$termId = array("termId_example"); // string[] | Term ID

try { 
    $result = $api_instance->listTermStatsRequest($aid, $termId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherTermStatsApi->listTermStatsRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **termId** | [**string[]**](string.md)| Term ID | [optional] 

### Return type

[**\model\TPPublisherTermStats[]**](TPPublisherTermStats.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# \TPPublisherResourceStatsApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listResourceStatsRequest**](TPPublisherResourceStatsApi.md#listResourceStatsRequest) | **GET** /publisher/resource/stats/list | Lists resource stats


# **listResourceStatsRequest**
> \model\TPPublisherResourceStats[] listResourceStatsRequest($aid, $includedRid)

Lists resource stats



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherResourceStatsApi();
$aid = "aid_example"; // string | Application aid
$includedRid = array("includedRid_example"); // string[] | Included RIDs

try { 
    $result = $api_instance->listResourceStatsRequest($aid, $includedRid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherResourceStatsApi->listResourceStatsRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **includedRid** | [**string[]**](string.md)| Included RIDs | [optional] 

### Return type

[**\model\TPPublisherResourceStats[]**](TPPublisherResourceStats.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


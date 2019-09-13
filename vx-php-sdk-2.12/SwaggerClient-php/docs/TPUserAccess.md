# TPUserAccess

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accessId** | **string** | The access id | 
**parentAccessId** | **string** | The access parent id (for accesses from bundled resources) | 
**granted** | **bool** | Granted == true if the user has access | 
**user** | [**\model\TPUserUser**](TPUserUser.md) | The user | 
**resource** | [**\model\TPUserResource**](TPUserResource.md) | The resource | 
**expireDate** | **string** | The access item expire date; null means unlimited | 
**startDate** | **string** | The start date. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



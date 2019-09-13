# \TPPublisherTermPaymentApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPaymentTermRequest**](TPPublisherTermPaymentApi.md#createPaymentTermRequest) | **POST** /publisher/term/payment/create | Creates a payment term
[**updatePaymentTermRequest**](TPPublisherTermPaymentApi.md#updatePaymentTermRequest) | **POST** /publisher/term/payment/update | Update a payment term


# **createPaymentTermRequest**
> \model\TPPublisherTerm createPaymentTermRequest($aid, $rid, $name, $paymentBillingPlan, $paymentAllowRenewDays, $paymentForceAutoRenew, $paymentNewCustomersOnly, $paymentTrialNewCustomersOnly, $paymentAllowPromoCodes, $paymentRenewGracePeriod, $paymentAllowGift, $description, $verifyOnRenewal, $evtVerificationPeriod, $collectAddress, $deliveryZone, $defaultCountry, $scheduleId, $scheduleBillingModel)

Creates a payment term



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherTermPaymentApi();
$aid = "aid_example"; // string | Application aid
$rid = "rid_example"; // string | Unique id for resource
$name = "name_example"; // string | Term name
$paymentBillingPlan = "paymentBillingPlan_example"; // string | Term billing plan
$paymentAllowRenewDays = 56; // int | How many days in advance a user can renew
$paymentForceAutoRenew = false; // bool | Payment forces the auto renewal of subscriptions
$paymentNewCustomersOnly = true; // bool | Whether to allow buy only first time
$paymentTrialNewCustomersOnly = true; // bool | Whether to allow trial period only first time
$paymentAllowPromoCodes = true; // bool | Whether to allow promo codes to be applied
$paymentRenewGracePeriod = 56; // int | The number of days after expiration to still allow access to the resource
$paymentAllowGift = false; // bool | Whether the term can be gifted
$description = "description_example"; // string | Term description
$verifyOnRenewal = false; // bool | Is term should be verified before renewal or it skips this step
$evtVerificationPeriod = 56; // int | External verification period
$collectAddress = false; // bool | Collect address for this term
$deliveryZone = array("deliveryZone_example"); // string[] | List of delivery zones for this term
$defaultCountry = "defaultCountry_example"; // string | Pre-selected country for consumers outside of delivery zones
$scheduleId = "scheduleId_example"; // string | The schedule ID
$scheduleBillingModel = "scheduleBillingModel_example"; // string | The schedule billing model

try { 
    $result = $api_instance->createPaymentTermRequest($aid, $rid, $name, $paymentBillingPlan, $paymentAllowRenewDays, $paymentForceAutoRenew, $paymentNewCustomersOnly, $paymentTrialNewCustomersOnly, $paymentAllowPromoCodes, $paymentRenewGracePeriod, $paymentAllowGift, $description, $verifyOnRenewal, $evtVerificationPeriod, $collectAddress, $deliveryZone, $defaultCountry, $scheduleId, $scheduleBillingModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherTermPaymentApi->createPaymentTermRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **rid** | **string**| Unique id for resource | 
 **name** | **string**| Term name | 
 **paymentBillingPlan** | **string**| Term billing plan | [optional] 
 **paymentAllowRenewDays** | **int**| How many days in advance a user can renew | [optional] 
 **paymentForceAutoRenew** | **bool**| Payment forces the auto renewal of subscriptions | [optional] [default to false]
 **paymentNewCustomersOnly** | **bool**| Whether to allow buy only first time | [optional] [default to true]
 **paymentTrialNewCustomersOnly** | **bool**| Whether to allow trial period only first time | [optional] [default to true]
 **paymentAllowPromoCodes** | **bool**| Whether to allow promo codes to be applied | [optional] [default to true]
 **paymentRenewGracePeriod** | **int**| The number of days after expiration to still allow access to the resource | [optional] 
 **paymentAllowGift** | **bool**| Whether the term can be gifted | [optional] [default to false]
 **description** | **string**| Term description | [optional] 
 **verifyOnRenewal** | **bool**| Is term should be verified before renewal or it skips this step | [optional] [default to false]
 **evtVerificationPeriod** | **int**| External verification period | [optional] 
 **collectAddress** | **bool**| Collect address for this term | [optional] [default to false]
 **deliveryZone** | [**string[]**](string.md)| List of delivery zones for this term | [optional] 
 **defaultCountry** | **string**| Pre-selected country for consumers outside of delivery zones | [optional] 
 **scheduleId** | **string**| The schedule ID | [optional] 
 **scheduleBillingModel** | **string**| The schedule billing model | [optional] 

### Return type

[**\model\TPPublisherTerm**](TPPublisherTerm.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updatePaymentTermRequest**
> \model\TPPublisherTerm updatePaymentTermRequest($termId, $rid, $name, $paymentBillingPlan, $paymentAllowRenewDays, $paymentForceAutoRenew, $paymentNewCustomersOnly, $paymentTrialNewCustomersOnly, $paymentAllowPromoCodes, $paymentRenewGracePeriod, $paymentAllowGift, $description, $verifyOnRenewal, $evtVerificationPeriod, $collectAddress, $deliveryZone, $defaultCountry, $scheduleId, $scheduleBillingModel)

Update a payment term



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherTermPaymentApi();
$termId = "termId_example"; // string | Term ID
$rid = "rid_example"; // string | Unique id for resource
$name = "name_example"; // string | Term name
$paymentBillingPlan = "paymentBillingPlan_example"; // string | Term billing plan
$paymentAllowRenewDays = 56; // int | How many days in advance a user can renew
$paymentForceAutoRenew = true; // bool | Payment forces the auto renewal of subscriptions
$paymentNewCustomersOnly = true; // bool | Whether to allow buy only first time
$paymentTrialNewCustomersOnly = true; // bool | Whether to allow trial period only first time
$paymentAllowPromoCodes = true; // bool | Whether to allow promo codes to be applied
$paymentRenewGracePeriod = 56; // int | The number of days after expiration to still allow access to the resource
$paymentAllowGift = true; // bool | Whether the term can be gifted
$description = "description_example"; // string | Term description
$verifyOnRenewal = false; // bool | Is term should be verified before renewal or it skips this step
$evtVerificationPeriod = 56; // int | External verification period
$collectAddress = false; // bool | Collect address for this term
$deliveryZone = array("deliveryZone_example"); // string[] | List of delivery zones for this term
$defaultCountry = "defaultCountry_example"; // string | Pre-selected country for consumers outside of delivery zones
$scheduleId = "scheduleId_example"; // string | The schedule ID
$scheduleBillingModel = "scheduleBillingModel_example"; // string | The schedule billing model

try { 
    $result = $api_instance->updatePaymentTermRequest($termId, $rid, $name, $paymentBillingPlan, $paymentAllowRenewDays, $paymentForceAutoRenew, $paymentNewCustomersOnly, $paymentTrialNewCustomersOnly, $paymentAllowPromoCodes, $paymentRenewGracePeriod, $paymentAllowGift, $description, $verifyOnRenewal, $evtVerificationPeriod, $collectAddress, $deliveryZone, $defaultCountry, $scheduleId, $scheduleBillingModel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherTermPaymentApi->updatePaymentTermRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **termId** | **string**| Term ID | 
 **rid** | **string**| Unique id for resource | [optional] 
 **name** | **string**| Term name | [optional] 
 **paymentBillingPlan** | **string**| Term billing plan | [optional] 
 **paymentAllowRenewDays** | **int**| How many days in advance a user can renew | [optional] 
 **paymentForceAutoRenew** | **bool**| Payment forces the auto renewal of subscriptions | [optional] 
 **paymentNewCustomersOnly** | **bool**| Whether to allow buy only first time | [optional] 
 **paymentTrialNewCustomersOnly** | **bool**| Whether to allow trial period only first time | [optional] 
 **paymentAllowPromoCodes** | **bool**| Whether to allow promo codes to be applied | [optional] 
 **paymentRenewGracePeriod** | **int**| The number of days after expiration to still allow access to the resource | [optional] 
 **paymentAllowGift** | **bool**| Whether the term can be gifted | [optional] 
 **description** | **string**| Term description | [optional] 
 **verifyOnRenewal** | **bool**| Is term should be verified before renewal or it skips this step | [optional] [default to false]
 **evtVerificationPeriod** | **int**| External verification period | [optional] 
 **collectAddress** | **bool**| Collect address for this term | [optional] [default to false]
 **deliveryZone** | [**string[]**](string.md)| List of delivery zones for this term | [optional] 
 **defaultCountry** | **string**| Pre-selected country for consumers outside of delivery zones | [optional] 
 **scheduleId** | **string**| The schedule ID | [optional] 
 **scheduleBillingModel** | **string**| The schedule billing model | [optional] 

### Return type

[**\model\TPPublisherTerm**](TPPublisherTerm.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


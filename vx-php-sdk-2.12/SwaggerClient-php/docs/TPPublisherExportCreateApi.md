# \TPPublisherExportCreateApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAccessReportExportRequest**](TPPublisherExportCreateApi.md#createAccessReportExportRequest) | **GET** /publisher/export/create/accessReportExport | Create access report
[**createDailyActivityReportExportRequest**](TPPublisherExportCreateApi.md#createDailyActivityReportExportRequest) | **GET** /publisher/export/create/dailyActivityReportExport | Create daily activity report
[**createMonthlyActivityReportExportRequest**](TPPublisherExportCreateApi.md#createMonthlyActivityReportExportRequest) | **GET** /publisher/export/create/monthlyActivityReportExport | Create monthly activity report
[**createSubscriptionDetailedExportRequest**](TPPublisherExportCreateApi.md#createSubscriptionDetailedExportRequest) | **POST** /publisher/export/create/subscriptionDetailedExport | Create subscription detail report
[**createSubscriptionDetailedReportRequest**](TPPublisherExportCreateApi.md#createSubscriptionDetailedReportRequest) | **POST** /publisher/export/create/subscriptionDetailsReport | Create subscription details report
[**createSubscriptionSummaryExportRequest**](TPPublisherExportCreateApi.md#createSubscriptionSummaryExportRequest) | **POST** /publisher/export/create/subscriptionSummaryExport | Create new downloadable subscription summary report and run it
[**createSubscriptionSummaryReportRequest**](TPPublisherExportCreateApi.md#createSubscriptionSummaryReportRequest) | **POST** /publisher/export/create/subscriptionSummaryReport | Create subscription summary report
[**createTransactionsExportRequest**](TPPublisherExportCreateApi.md#createTransactionsExportRequest) | **POST** /publisher/export/create/transactionsExport | Create new downloadable transactions report and run it
[**createUserExportRequest**](TPPublisherExportCreateApi.md#createUserExportRequest) | **POST** /publisher/export/create/userExport | Create user search report


# **createAccessReportExportRequest**
> \model\TPPublisherExport createAccessReportExportRequest($aid, $exportName, $dateFrom, $dateTo, $accessStatus, $termType, $termId, $nextBillingDate, $lastPaymentStatus)

Create access report



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherExportCreateApi();
$aid = "aid_example"; // string | Application aid
$exportName = "exportName_example"; // string | Downloadable report name
$dateFrom = "2013-10-20T19:20:30+01:00"; // string | Date from
$dateTo = "2013-10-20T19:20:30+01:00"; // string | Date to
$accessStatus = "accessStatus_example"; // string | Access status
$termType = array("termType_example"); // string[] | Term type
$termId = array("termId_example"); // string[] | Term ID
$nextBillingDate = "2013-10-20T19:20:30+01:00"; // string | Next billing date
$lastPaymentStatus = "lastPaymentStatus_example"; // string | Last payment status

try { 
    $result = $api_instance->createAccessReportExportRequest($aid, $exportName, $dateFrom, $dateTo, $accessStatus, $termType, $termId, $nextBillingDate, $lastPaymentStatus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherExportCreateApi->createAccessReportExportRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **exportName** | **string**| Downloadable report name | 
 **dateFrom** | **string**| Date from | 
 **dateTo** | **string**| Date to | 
 **accessStatus** | **string**| Access status | [optional] 
 **termType** | [**string[]**](string.md)| Term type | [optional] 
 **termId** | [**string[]**](string.md)| Term ID | [optional] 
 **nextBillingDate** | **string**| Next billing date | [optional] 
 **lastPaymentStatus** | **string**| Last payment status | [optional] 

### Return type

[**\model\TPPublisherExport**](TPPublisherExport.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createDailyActivityReportExportRequest**
> \model\TPPublisherExport createDailyActivityReportExportRequest($aid, $exportName, $date, $termType, $currency, $currencyList)

Create daily activity report



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherExportCreateApi();
$aid = "aid_example"; // string | Application aid
$exportName = "exportName_example"; // string | Downloadable report name
$date = "2013-10-20T19:20:30+01:00"; // string | Date
$termType = array("termType_example"); // string[] | Term type
$currency = "currency_example"; // string | Currency
$currencyList = array("currencyList_example"); // string[] | Currency List

try { 
    $result = $api_instance->createDailyActivityReportExportRequest($aid, $exportName, $date, $termType, $currency, $currencyList);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherExportCreateApi->createDailyActivityReportExportRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **exportName** | **string**| Downloadable report name | 
 **date** | **string**| Date | 
 **termType** | [**string[]**](string.md)| Term type | [optional] 
 **currency** | **string**| Currency | [optional] 
 **currencyList** | [**string[]**](string.md)| Currency List | [optional] 

### Return type

[**\model\TPPublisherExport**](TPPublisherExport.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createMonthlyActivityReportExportRequest**
> \model\TPPublisherExport createMonthlyActivityReportExportRequest($aid, $exportName, $month, $year, $termType, $currency, $currencyList)

Create monthly activity report



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherExportCreateApi();
$aid = "aid_example"; // string | Application aid
$exportName = "exportName_example"; // string | Downloadable report name
$month = 56; // int | Number of month
$year = 56; // int | Year
$termType = array("termType_example"); // string[] | Term type
$currency = "currency_example"; // string | Currency
$currencyList = array("currencyList_example"); // string[] | Currency list

try { 
    $result = $api_instance->createMonthlyActivityReportExportRequest($aid, $exportName, $month, $year, $termType, $currency, $currencyList);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherExportCreateApi->createMonthlyActivityReportExportRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **exportName** | **string**| Downloadable report name | 
 **month** | **int**| Number of month | 
 **year** | **int**| Year | 
 **termType** | [**string[]**](string.md)| Term type | [optional] 
 **currency** | **string**| Currency | [optional] 
 **currencyList** | [**string[]**](string.md)| Currency list | [optional] 

### Return type

[**\model\TPPublisherExport**](TPPublisherExport.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createSubscriptionDetailedExportRequest**
> \model\TPPublisherExport createSubscriptionDetailedExportRequest($aid, $exportName, $dateFrom, $dateTo, $selectBy, $searchKeyword)

Create subscription detail report



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherExportCreateApi();
$aid = "aid_example"; // string | Application aid
$exportName = "exportName_example"; // string | Downloadable report name
$dateFrom = "2013-10-20T19:20:30+01:00"; // string | Report begin date
$dateTo = "2013-10-20T19:20:30+01:00"; // string | Report end date
$selectBy = "selectBy_example"; // string | Report filter field
$searchKeyword = "searchKeyword_example"; // string | Search by keyword

try { 
    $result = $api_instance->createSubscriptionDetailedExportRequest($aid, $exportName, $dateFrom, $dateTo, $selectBy, $searchKeyword);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherExportCreateApi->createSubscriptionDetailedExportRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **exportName** | **string**| Downloadable report name | 
 **dateFrom** | **string**| Report begin date | 
 **dateTo** | **string**| Report end date | 
 **selectBy** | **string**| Report filter field | 
 **searchKeyword** | **string**| Search by keyword | [optional] 

### Return type

[**\model\TPPublisherExport**](TPPublisherExport.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createSubscriptionDetailedReportRequest**
> \model\TPPublisherExport createSubscriptionDetailedReportRequest($aid, $exportName, $offset, $limit, $q, $searchNewSubscriptions, $newSubscriptionsCreatedFrom, $newSubscriptionsCreatedTo, $searchActiveNowSubscriptions, $activeNowSubscriptionsStatuses, $searchInactiveSubscriptions, $inactiveSubscriptionsStatuses, $subscriptionsInactiveFrom, $subscriptionsInactiveTo, $searchUpdatedSubscriptions, $updatedSubscriptionsStatuses, $subscriptionsUpdatedFrom, $subscriptionsUpdatedTo, $searchAutoRenewingSubscriptions, $subscriptionsAutoRenewing, $searchSubscriptionsByNextBillingDate, $subscriptionsNextBillingDateFrom, $subscriptionsNextBillingDateTo, $searchSubscriptionsByTerms, $subscriptionsTerms, $subscriptionsTermTypes)

Create subscription details report



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherExportCreateApi();
$aid = "aid_example"; // string | Application aid
$exportName = "exportName_example"; // string | Downloadable report name
$offset = 0; // int | Offset from which to start returning results
$limit = 100; // int | Maximum index of returned results
$q = "q_example"; // string | Search value
$searchNewSubscriptions = true; // bool | 
$newSubscriptionsCreatedFrom = "2013-10-20T19:20:30+01:00"; // string | 
$newSubscriptionsCreatedTo = "2013-10-20T19:20:30+01:00"; // string | 
$searchActiveNowSubscriptions = true; // bool | 
$activeNowSubscriptionsStatuses = array("activeNowSubscriptionsStatuses_example"); // string[] | 
$searchInactiveSubscriptions = true; // bool | 
$inactiveSubscriptionsStatuses = array("inactiveSubscriptionsStatuses_example"); // string[] | 
$subscriptionsInactiveFrom = "2013-10-20T19:20:30+01:00"; // string | 
$subscriptionsInactiveTo = "2013-10-20T19:20:30+01:00"; // string | 
$searchUpdatedSubscriptions = true; // bool | 
$updatedSubscriptionsStatuses = array("updatedSubscriptionsStatuses_example"); // string[] | 
$subscriptionsUpdatedFrom = "2013-10-20T19:20:30+01:00"; // string | 
$subscriptionsUpdatedTo = "2013-10-20T19:20:30+01:00"; // string | 
$searchAutoRenewingSubscriptions = true; // bool | 
$subscriptionsAutoRenewing = true; // bool | 
$searchSubscriptionsByNextBillingDate = true; // bool | 
$subscriptionsNextBillingDateFrom = "2013-10-20T19:20:30+01:00"; // string | 
$subscriptionsNextBillingDateTo = "2013-10-20T19:20:30+01:00"; // string | 
$searchSubscriptionsByTerms = true; // bool | 
$subscriptionsTerms = array("subscriptionsTerms_example"); // string[] | 
$subscriptionsTermTypes = array("subscriptionsTermTypes_example"); // string[] | 

try { 
    $result = $api_instance->createSubscriptionDetailedReportRequest($aid, $exportName, $offset, $limit, $q, $searchNewSubscriptions, $newSubscriptionsCreatedFrom, $newSubscriptionsCreatedTo, $searchActiveNowSubscriptions, $activeNowSubscriptionsStatuses, $searchInactiveSubscriptions, $inactiveSubscriptionsStatuses, $subscriptionsInactiveFrom, $subscriptionsInactiveTo, $searchUpdatedSubscriptions, $updatedSubscriptionsStatuses, $subscriptionsUpdatedFrom, $subscriptionsUpdatedTo, $searchAutoRenewingSubscriptions, $subscriptionsAutoRenewing, $searchSubscriptionsByNextBillingDate, $subscriptionsNextBillingDateFrom, $subscriptionsNextBillingDateTo, $searchSubscriptionsByTerms, $subscriptionsTerms, $subscriptionsTermTypes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherExportCreateApi->createSubscriptionDetailedReportRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **exportName** | **string**| Downloadable report name | 
 **offset** | **int**| Offset from which to start returning results | [default to 0]
 **limit** | **int**| Maximum index of returned results | [default to 100]
 **q** | **string**| Search value | [optional] 
 **searchNewSubscriptions** | **bool**|  | [optional] 
 **newSubscriptionsCreatedFrom** | **string**|  | [optional] 
 **newSubscriptionsCreatedTo** | **string**|  | [optional] 
 **searchActiveNowSubscriptions** | **bool**|  | [optional] 
 **activeNowSubscriptionsStatuses** | [**string[]**](string.md)|  | [optional] 
 **searchInactiveSubscriptions** | **bool**|  | [optional] 
 **inactiveSubscriptionsStatuses** | [**string[]**](string.md)|  | [optional] 
 **subscriptionsInactiveFrom** | **string**|  | [optional] 
 **subscriptionsInactiveTo** | **string**|  | [optional] 
 **searchUpdatedSubscriptions** | **bool**|  | [optional] 
 **updatedSubscriptionsStatuses** | [**string[]**](string.md)|  | [optional] 
 **subscriptionsUpdatedFrom** | **string**|  | [optional] 
 **subscriptionsUpdatedTo** | **string**|  | [optional] 
 **searchAutoRenewingSubscriptions** | **bool**|  | [optional] 
 **subscriptionsAutoRenewing** | **bool**|  | [optional] 
 **searchSubscriptionsByNextBillingDate** | **bool**|  | [optional] 
 **subscriptionsNextBillingDateFrom** | **string**|  | [optional] 
 **subscriptionsNextBillingDateTo** | **string**|  | [optional] 
 **searchSubscriptionsByTerms** | **bool**|  | [optional] 
 **subscriptionsTerms** | [**string[]**](string.md)|  | [optional] 
 **subscriptionsTermTypes** | [**string[]**](string.md)|  | [optional] 

### Return type

[**\model\TPPublisherExport**](TPPublisherExport.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createSubscriptionSummaryExportRequest**
> \model\TPPublisherExport createSubscriptionSummaryExportRequest($aid, $exportName, $dateFrom, $dateTo, $selectBy, $searchKeyword)

Create new downloadable subscription summary report and run it



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherExportCreateApi();
$aid = "aid_example"; // string | Application aid
$exportName = "exportName_example"; // string | Downloadable report name
$dateFrom = "2013-10-20T19:20:30+01:00"; // string | Report begin date
$dateTo = "2013-10-20T19:20:30+01:00"; // string | Report end date
$selectBy = "selectBy_example"; // string | Report filter field
$searchKeyword = "searchKeyword_example"; // string | Search by keyword

try { 
    $result = $api_instance->createSubscriptionSummaryExportRequest($aid, $exportName, $dateFrom, $dateTo, $selectBy, $searchKeyword);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherExportCreateApi->createSubscriptionSummaryExportRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **exportName** | **string**| Downloadable report name | 
 **dateFrom** | **string**| Report begin date | 
 **dateTo** | **string**| Report end date | 
 **selectBy** | **string**| Report filter field | 
 **searchKeyword** | **string**| Search by keyword | [optional] 

### Return type

[**\model\TPPublisherExport**](TPPublisherExport.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createSubscriptionSummaryReportRequest**
> \model\TPPublisherExport createSubscriptionSummaryReportRequest($aid, $exportName, $dateFrom, $dateTo)

Create subscription summary report



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherExportCreateApi();
$aid = "aid_example"; // string | Application aid
$exportName = "exportName_example"; // string | Downloadable report name
$dateFrom = "2013-10-20T19:20:30+01:00"; // string | Report begin date
$dateTo = "2013-10-20T19:20:30+01:00"; // string | Report end date

try { 
    $result = $api_instance->createSubscriptionSummaryReportRequest($aid, $exportName, $dateFrom, $dateTo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherExportCreateApi->createSubscriptionSummaryReportRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **exportName** | **string**| Downloadable report name | 
 **dateFrom** | **string**| Report begin date | 
 **dateTo** | **string**| Report end date | 

### Return type

[**\model\TPPublisherExport**](TPPublisherExport.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createTransactionsExportRequest**
> \model\TPPublisherExport createTransactionsExportRequest($aid, $exportName, $offset, $limit, $userPaymentState, $dateFrom, $dateTo, $q, $orderBy, $orderDirection)

Create new downloadable transactions report and run it



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherExportCreateApi();
$aid = "aid_example"; // string | Application aid
$exportName = "exportName_example"; // string | Downloadable report name
$offset = 0; // int | Offset from which to start returning results
$limit = 25; // int | Maximum index of returned results
$userPaymentState = "userPaymentState_example"; // string | Transaction state
$dateFrom = "2013-10-20T19:20:30+01:00"; // string | Date from
$dateTo = "2013-10-20T19:20:30+01:00"; // string | Date to
$q = "q_example"; // string | Search value
$orderBy = "orderBy_example"; // string | Field to order by
$orderDirection = "orderDirection_example"; // string | Order direction (asc/desc)

try { 
    $result = $api_instance->createTransactionsExportRequest($aid, $exportName, $offset, $limit, $userPaymentState, $dateFrom, $dateTo, $q, $orderBy, $orderDirection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherExportCreateApi->createTransactionsExportRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **exportName** | **string**| Downloadable report name | 
 **offset** | **int**| Offset from which to start returning results | [default to 0]
 **limit** | **int**| Maximum index of returned results | [default to 25]
 **userPaymentState** | **string**| Transaction state | [optional] 
 **dateFrom** | **string**| Date from | [optional] 
 **dateTo** | **string**| Date to | [optional] 
 **q** | **string**| Search value | [optional] 
 **orderBy** | **string**| Field to order by | [optional] 
 **orderDirection** | **string**| Order direction (asc/desc) | [optional] 

### Return type

[**\model\TPPublisherExport**](TPPublisherExport.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **createUserExportRequest**
> \model\TPPublisherExport createUserExportRequest($aid, $exportName, $offset, $limit, $name, $email, $registeredFrom, $registeredUntil, $accessToResources, $convertedTerms, $accessFrom, $accessUntil, $convertedTermFrom, $convertedTermUntil, $redeemedPromotions, $redeemedPromotionFrom, $redeemedPromotionUntil, $trialPeriod, $hasAccess, $hasConversionTerm, $hasRedeemedPromotion, $includeTrialRedemptions, $convertedTermTypes, $hasConversionTermType, $spentMoneyCurrency, $spentMoneyFrom, $spentMoneyUntil, $spentFromDate, $spentUntilDate, $paymentMethods, $billingFailureFrom, $billingFailureUntil, $hadBillingFailure, $hasPayment, $upiExtCustomerId, $activeSubscriptionToResources, $hasActiveSubscription, $subscriptionStartFrom, $subscriptionStartUntil, $subscriptionRenewFrom, $subscriptionRenewUntil, $subscriptionExpireFrom, $subscriptionExpireUntil, $trialExpireFrom, $trialExpireUntil, $hasAnySubscriptions, $hasUnresolvedInquiry, $submittedInquiryFrom, $submittedInquiryUntil, $receivedResponseFrom, $receivedResponseUntil, $resolvedInquiryFrom, $resolvedInquiryUntil, $hasSubmittedInquiry, $hasReceivedResponseInquiry, $dataType, $data, $hasData, $selectedConsentsMap, $consentChecked, $hasResolvedInquiry, $consentHasData, $q, $orderBy, $orderDirection)

Create user search report



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherExportCreateApi();
$aid = "aid_example"; // string | Application aid
$exportName = "exportName_example"; // string | Downloadable report name
$offset = 0; // int | Offset from which to start returning results
$limit = 25; // int | Maximum index of returned results
$name = "name_example"; // string | Find users which contain a keyword in name
$email = "email_example"; // string | Find users which contain a keyword in email
$registeredFrom = "2013-10-20T19:20:30+01:00"; // string | Find users which was registered from selected date
$registeredUntil = "2013-10-20T19:20:30+01:00"; // string | Find users which was registered until selected date
$accessToResources = array("accessToResources_example"); // string[] | Find users which have access to selected resources
$convertedTerms = array("convertedTerms_example"); // string[] | Find users which have conversion terms for selected terms
$accessFrom = "2013-10-20T19:20:30+01:00"; // string | Find users which have user access from selected date
$accessUntil = "2013-10-20T19:20:30+01:00"; // string | Find users which have user access until selected date
$convertedTermFrom = "2013-10-20T19:20:30+01:00"; // string | Find users which have converted term from selected date
$convertedTermUntil = "2013-10-20T19:20:30+01:00"; // string | Find users which have converted term until selected date
$redeemedPromotions = array("redeemedPromotions_example"); // string[] | Find users which have selected redeemed promotions
$redeemedPromotionFrom = "2013-10-20T19:20:30+01:00"; // string | Find users which have redeemed promotions from selected date
$redeemedPromotionUntil = "2013-10-20T19:20:30+01:00"; // string | Find users which have redeemed promotions until selected date
$trialPeriod = true; // bool | Find users which have trial subscription
$hasAccess = true; // bool | Find users which have user access (can be expired)
$hasConversionTerm = true; // bool | Find users which have conversion term
$hasRedeemedPromotion = true; // bool | Find users which have redeemed promotion
$includeTrialRedemptions = true; // bool | Find users which have reserved trial redemptions. It works together with redeemed promotions and works as 'OR' conditions 
$convertedTermTypes = array("convertedTermTypes_example"); // string[] | Find users which have conversion terms for selected term types
$hasConversionTermType = true; // bool | Find users which have conversion terms for selected term types
$spentMoneyCurrency = "spentMoneyCurrency_example"; // string | Currency of the payments to take into account
$spentMoneyFrom = new Number(); // Number | Find users which spent money more than a value
$spentMoneyUntil = new Number(); // Number | Find users which spent money less than a value
$spentFromDate = "2013-10-20T19:20:30+01:00"; // string | Find users which bougth something from a date
$spentUntilDate = "2013-10-20T19:20:30+01:00"; // string | Find users which bougth something until a date
$paymentMethods = array(56); // int[] | Find users which use selected payment methods
$billingFailureFrom = "2013-10-20T19:20:30+01:00"; // string | Find users which have problems with autorenew of subscription from a date
$billingFailureUntil = "2013-10-20T19:20:30+01:00"; // string | Find users which have problems with autorenew of subscription until a date
$hadBillingFailure = true; // bool | Find users which had problems with billing
$hasPayment = true; // bool | Find users which have payment
$upiExtCustomerId = "upiExtCustomerId_example"; // string | Find users which have given external customer id
$activeSubscriptionToResources = array("activeSubscriptionToResources_example"); // string[] | Find users which have active subscription to selected resources
$hasActiveSubscription = true; // bool | Find users which have active subscription
$subscriptionStartFrom = "2013-10-20T19:20:30+01:00"; // string | Find users which have starting subscription from selected date
$subscriptionStartUntil = "2013-10-20T19:20:30+01:00"; // string | Find users which have starting subscription until selected date
$subscriptionRenewFrom = "2013-10-20T19:20:30+01:00"; // string | Find users which have renewing subscription from selected date
$subscriptionRenewUntil = "2013-10-20T19:20:30+01:00"; // string | Find users which have renewing subscription until selected date
$subscriptionExpireFrom = "2013-10-20T19:20:30+01:00"; // string | Find users which have exipiring subscription from selected date
$subscriptionExpireUntil = "2013-10-20T19:20:30+01:00"; // string | Find users which have expiring subscription until selected date
$trialExpireFrom = "2013-10-20T19:20:30+01:00"; // string | Find users which have expiring trial subscription from selected date
$trialExpireUntil = "2013-10-20T19:20:30+01:00"; // string | Find users which have expiring trial subscription until selected date
$hasAnySubscriptions = true; // bool | Find users with any subscriptions
$hasUnresolvedInquiry = true; // bool | Find users which have unresolved inquiry
$submittedInquiryFrom = "2013-10-20T19:20:30+01:00"; // string | Find users which have submitted inquiry from selected date
$submittedInquiryUntil = "2013-10-20T19:20:30+01:00"; // string | Find users which have submitted inquiry until selected date
$receivedResponseFrom = "2013-10-20T19:20:30+01:00"; // string | Find users which received response from selected date
$receivedResponseUntil = "2013-10-20T19:20:30+01:00"; // string | Find users which received response until selected date
$resolvedInquiryFrom = "2013-10-20T19:20:30+01:00"; // string | Find users which have resolved inquiry from selected date
$resolvedInquiryUntil = "2013-10-20T19:20:30+01:00"; // string | Find users which have resolved inquiry until selected date
$hasSubmittedInquiry = true; // bool | Find users with submitted inquries
$hasReceivedResponseInquiry = true; // bool | Find users with inquiries with response
$dataType = array("dataType_example"); // string[] | Defines searching field
$data = "data_example"; // string | Defines search data
$hasData = true; // bool | Find users with any data
$selectedConsentsMap = array("selectedConsentsMap_example"); // string[] | Find user who accept list of consentDataType
$consentChecked = true; // bool | Find checked or unchecked consents
$hasResolvedInquiry = true; // bool | Find users with resolved inquiries
$consentHasData = true; // bool | Find users with accepted consents
$q = "q_example"; // string | Search value
$orderBy = "orderBy_example"; // string | Field to order by
$orderDirection = "orderDirection_example"; // string | Order direction (asc/desc)

try { 
    $result = $api_instance->createUserExportRequest($aid, $exportName, $offset, $limit, $name, $email, $registeredFrom, $registeredUntil, $accessToResources, $convertedTerms, $accessFrom, $accessUntil, $convertedTermFrom, $convertedTermUntil, $redeemedPromotions, $redeemedPromotionFrom, $redeemedPromotionUntil, $trialPeriod, $hasAccess, $hasConversionTerm, $hasRedeemedPromotion, $includeTrialRedemptions, $convertedTermTypes, $hasConversionTermType, $spentMoneyCurrency, $spentMoneyFrom, $spentMoneyUntil, $spentFromDate, $spentUntilDate, $paymentMethods, $billingFailureFrom, $billingFailureUntil, $hadBillingFailure, $hasPayment, $upiExtCustomerId, $activeSubscriptionToResources, $hasActiveSubscription, $subscriptionStartFrom, $subscriptionStartUntil, $subscriptionRenewFrom, $subscriptionRenewUntil, $subscriptionExpireFrom, $subscriptionExpireUntil, $trialExpireFrom, $trialExpireUntil, $hasAnySubscriptions, $hasUnresolvedInquiry, $submittedInquiryFrom, $submittedInquiryUntil, $receivedResponseFrom, $receivedResponseUntil, $resolvedInquiryFrom, $resolvedInquiryUntil, $hasSubmittedInquiry, $hasReceivedResponseInquiry, $dataType, $data, $hasData, $selectedConsentsMap, $consentChecked, $hasResolvedInquiry, $consentHasData, $q, $orderBy, $orderDirection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherExportCreateApi->createUserExportRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **exportName** | **string**| Downloadable report name | 
 **offset** | **int**| Offset from which to start returning results | [default to 0]
 **limit** | **int**| Maximum index of returned results | [default to 25]
 **name** | **string**| Find users which contain a keyword in name | [optional] 
 **email** | **string**| Find users which contain a keyword in email | [optional] 
 **registeredFrom** | **string**| Find users which was registered from selected date | [optional] 
 **registeredUntil** | **string**| Find users which was registered until selected date | [optional] 
 **accessToResources** | [**string[]**](string.md)| Find users which have access to selected resources | [optional] 
 **convertedTerms** | [**string[]**](string.md)| Find users which have conversion terms for selected terms | [optional] 
 **accessFrom** | **string**| Find users which have user access from selected date | [optional] 
 **accessUntil** | **string**| Find users which have user access until selected date | [optional] 
 **convertedTermFrom** | **string**| Find users which have converted term from selected date | [optional] 
 **convertedTermUntil** | **string**| Find users which have converted term until selected date | [optional] 
 **redeemedPromotions** | [**string[]**](string.md)| Find users which have selected redeemed promotions | [optional] 
 **redeemedPromotionFrom** | **string**| Find users which have redeemed promotions from selected date | [optional] 
 **redeemedPromotionUntil** | **string**| Find users which have redeemed promotions until selected date | [optional] 
 **trialPeriod** | **bool**| Find users which have trial subscription | [optional] 
 **hasAccess** | **bool**| Find users which have user access (can be expired) | [optional] 
 **hasConversionTerm** | **bool**| Find users which have conversion term | [optional] 
 **hasRedeemedPromotion** | **bool**| Find users which have redeemed promotion | [optional] 
 **includeTrialRedemptions** | **bool**| Find users which have reserved trial redemptions. It works together with redeemed promotions and works as &#39;OR&#39; conditions  | [optional] 
 **convertedTermTypes** | [**string[]**](string.md)| Find users which have conversion terms for selected term types | [optional] 
 **hasConversionTermType** | **bool**| Find users which have conversion terms for selected term types | [optional] 
 **spentMoneyCurrency** | **string**| Currency of the payments to take into account | [optional] 
 **spentMoneyFrom** | [**Number**](.md)| Find users which spent money more than a value | [optional] 
 **spentMoneyUntil** | [**Number**](.md)| Find users which spent money less than a value | [optional] 
 **spentFromDate** | **string**| Find users which bougth something from a date | [optional] 
 **spentUntilDate** | **string**| Find users which bougth something until a date | [optional] 
 **paymentMethods** | [**int[]**](int.md)| Find users which use selected payment methods | [optional] 
 **billingFailureFrom** | **string**| Find users which have problems with autorenew of subscription from a date | [optional] 
 **billingFailureUntil** | **string**| Find users which have problems with autorenew of subscription until a date | [optional] 
 **hadBillingFailure** | **bool**| Find users which had problems with billing | [optional] 
 **hasPayment** | **bool**| Find users which have payment | [optional] 
 **upiExtCustomerId** | **string**| Find users which have given external customer id | [optional] 
 **activeSubscriptionToResources** | [**string[]**](string.md)| Find users which have active subscription to selected resources | [optional] 
 **hasActiveSubscription** | **bool**| Find users which have active subscription | [optional] 
 **subscriptionStartFrom** | **string**| Find users which have starting subscription from selected date | [optional] 
 **subscriptionStartUntil** | **string**| Find users which have starting subscription until selected date | [optional] 
 **subscriptionRenewFrom** | **string**| Find users which have renewing subscription from selected date | [optional] 
 **subscriptionRenewUntil** | **string**| Find users which have renewing subscription until selected date | [optional] 
 **subscriptionExpireFrom** | **string**| Find users which have exipiring subscription from selected date | [optional] 
 **subscriptionExpireUntil** | **string**| Find users which have expiring subscription until selected date | [optional] 
 **trialExpireFrom** | **string**| Find users which have expiring trial subscription from selected date | [optional] 
 **trialExpireUntil** | **string**| Find users which have expiring trial subscription until selected date | [optional] 
 **hasAnySubscriptions** | **bool**| Find users with any subscriptions | [optional] 
 **hasUnresolvedInquiry** | **bool**| Find users which have unresolved inquiry | [optional] 
 **submittedInquiryFrom** | **string**| Find users which have submitted inquiry from selected date | [optional] 
 **submittedInquiryUntil** | **string**| Find users which have submitted inquiry until selected date | [optional] 
 **receivedResponseFrom** | **string**| Find users which received response from selected date | [optional] 
 **receivedResponseUntil** | **string**| Find users which received response until selected date | [optional] 
 **resolvedInquiryFrom** | **string**| Find users which have resolved inquiry from selected date | [optional] 
 **resolvedInquiryUntil** | **string**| Find users which have resolved inquiry until selected date | [optional] 
 **hasSubmittedInquiry** | **bool**| Find users with submitted inquries | [optional] 
 **hasReceivedResponseInquiry** | **bool**| Find users with inquiries with response | [optional] 
 **dataType** | [**string[]**](string.md)| Defines searching field | [optional] 
 **data** | **string**| Defines search data | [optional] 
 **hasData** | **bool**| Find users with any data | [optional] 
 **selectedConsentsMap** | [**string[]**](string.md)| Find user who accept list of consentDataType | [optional] 
 **consentChecked** | **bool**| Find checked or unchecked consents | [optional] 
 **hasResolvedInquiry** | **bool**| Find users with resolved inquiries | [optional] 
 **consentHasData** | **bool**| Find users with accepted consents | [optional] 
 **q** | **string**| Search value | [optional] 
 **orderBy** | **string**| Field to order by | [optional] 
 **orderDirection** | **string**| Order direction (asc/desc) | [optional] 

### Return type

[**\model\TPPublisherExport**](TPPublisherExport.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


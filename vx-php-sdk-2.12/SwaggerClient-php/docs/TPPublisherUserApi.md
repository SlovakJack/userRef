# \TPPublisherUserApi

All URIs are relative to *https://localhost/api/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRequest**](TPPublisherUserApi.md#createRequest) | **POST** /publisher/user/create | Creates a user
[**disableRequest**](TPPublisherUserApi.md#disableRequest) | **POST** /publisher/user/disable | Disables a user
[**getRequest**](TPPublisherUserApi.md#getRequest) | **POST** /publisher/user/get | Gets a user
[**listRequest**](TPPublisherUserApi.md#listRequest) | **POST** /publisher/user/list | Lists an app&#39;s users
[**searchRequest**](TPPublisherUserApi.md#searchRequest) | **POST** /publisher/user/search | Searches an app&#39;s users
[**updateRequest**](TPPublisherUserApi.md#updateRequest) | **POST** /publisher/user/update | Updates a user


# **createRequest**
> \model\TPPublisherUser createRequest($aid, $uid, $email, $firstName, $lastName)

Creates a user



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherUserApi();
$aid = "aid_example"; // string | Application aid
$uid = "uid_example"; // string | User's uid
$email = "email_example"; // string | User's email address
$firstName = "firstName_example"; // string | User's first name
$lastName = "lastName_example"; // string | User's last name

try { 
    $result = $api_instance->createRequest($aid, $uid, $email, $firstName, $lastName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherUserApi->createRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **uid** | **string**| User&#39;s uid | 
 **email** | **string**| User&#39;s email address | 
 **firstName** | **string**| User&#39;s first name | [optional] 
 **lastName** | **string**| User&#39;s last name | [optional] 

### Return type

[**\model\TPPublisherUser**](TPPublisherUser.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **disableRequest**
> disableRequest($aid, $uid)

Disables a user



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherUserApi();
$aid = "aid_example"; // string | Application aid
$uid = "uid_example"; // string | User's uid

try { 
    $api_instance->disableRequest($aid, $uid);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherUserApi->disableRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **uid** | **string**| User&#39;s uid | 

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **getRequest**
> \model\TPPublisherUser getRequest($aid, $uid, $disabled)

Gets a user



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherUserApi();
$aid = "aid_example"; // string | Application aid
$uid = "uid_example"; // string | User's uid
$disabled = false; // bool | If the object is disabled

try { 
    $result = $api_instance->getRequest($aid, $uid, $disabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherUserApi->getRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **uid** | **string**| User&#39;s uid | 
 **disabled** | **bool**| If the object is disabled | [optional] [default to false]

### Return type

[**\model\TPPublisherUser**](TPPublisherUser.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **listRequest**
> \model\TPPublisherUser[] listRequest($aid, $offset, $limit, $disabled, $q)

Lists an app's users



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherUserApi();
$aid = "aid_example"; // string | Application aid
$offset = 0; // int | Offset from which to start returning results
$limit = 100; // int | Maximum index of returned results
$disabled = false; // bool | If the object is disabled
$q = "q_example"; // string | Search value

try { 
    $result = $api_instance->listRequest($aid, $offset, $limit, $disabled, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherUserApi->listRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **offset** | **int**| Offset from which to start returning results | [default to 0]
 **limit** | **int**| Maximum index of returned results | [default to 100]
 **disabled** | **bool**| If the object is disabled | [optional] [default to false]
 **q** | **string**| Search value | [optional] 

### Return type

[**\model\TPPublisherUser[]**](TPPublisherUser.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **searchRequest**
> \model\TPPublisherUser[] searchRequest($aid, $offset, $limit, $uid, $name, $email, $registeredFrom, $registeredUntil, $accessToResources, $convertedTerms, $accessFrom, $accessUntil, $convertedTermFrom, $convertedTermUntil, $redeemedPromotions, $redeemedPromotionFrom, $redeemedPromotionUntil, $trialPeriod, $hasAccess, $hasConversionTerm, $hasRedeemedPromotion, $includeTrialRedemptions, $convertedTermTypes, $hasConversionTermType, $spentMoneyCurrency, $spentMoneyFrom, $spentMoneyUntil, $spentFromDate, $spentUntilDate, $paymentMethods, $billingFailureFrom, $billingFailureUntil, $hadBillingFailure, $hasPayment, $upiExtCustomerId, $activeSubscriptionToResources, $hasActiveSubscription, $subscriptionStartFrom, $subscriptionStartUntil, $subscriptionRenewFrom, $subscriptionRenewUntil, $subscriptionExpireFrom, $subscriptionExpireUntil, $trialExpireFrom, $trialExpireUntil, $hasAnySubscriptions, $hasUnresolvedInquiry, $submittedInquiryFrom, $submittedInquiryUntil, $receivedResponseFrom, $receivedResponseUntil, $resolvedInquiryFrom, $resolvedInquiryUntil, $hasSubmittedInquiry, $hasReceivedResponseInquiry, $dataType, $data, $hasData, $selectedConsentsMap, $consentChecked, $hasResolvedInquiry, $consentHasData, $q, $orderBy, $orderDirection)

Searches an app's users



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherUserApi();
$aid = "aid_example"; // string | Application aid
$offset = 0; // int | Offset from which to start returning results
$limit = 25; // int | Maximum index of returned results
$uid = "uid_example"; // string | User's uid
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
    $result = $api_instance->searchRequest($aid, $offset, $limit, $uid, $name, $email, $registeredFrom, $registeredUntil, $accessToResources, $convertedTerms, $accessFrom, $accessUntil, $convertedTermFrom, $convertedTermUntil, $redeemedPromotions, $redeemedPromotionFrom, $redeemedPromotionUntil, $trialPeriod, $hasAccess, $hasConversionTerm, $hasRedeemedPromotion, $includeTrialRedemptions, $convertedTermTypes, $hasConversionTermType, $spentMoneyCurrency, $spentMoneyFrom, $spentMoneyUntil, $spentFromDate, $spentUntilDate, $paymentMethods, $billingFailureFrom, $billingFailureUntil, $hadBillingFailure, $hasPayment, $upiExtCustomerId, $activeSubscriptionToResources, $hasActiveSubscription, $subscriptionStartFrom, $subscriptionStartUntil, $subscriptionRenewFrom, $subscriptionRenewUntil, $subscriptionExpireFrom, $subscriptionExpireUntil, $trialExpireFrom, $trialExpireUntil, $hasAnySubscriptions, $hasUnresolvedInquiry, $submittedInquiryFrom, $submittedInquiryUntil, $receivedResponseFrom, $receivedResponseUntil, $resolvedInquiryFrom, $resolvedInquiryUntil, $hasSubmittedInquiry, $hasReceivedResponseInquiry, $dataType, $data, $hasData, $selectedConsentsMap, $consentChecked, $hasResolvedInquiry, $consentHasData, $q, $orderBy, $orderDirection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherUserApi->searchRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **offset** | **int**| Offset from which to start returning results | [default to 0]
 **limit** | **int**| Maximum index of returned results | [default to 25]
 **uid** | **string**| User&#39;s uid | [optional] 
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

[**\model\TPPublisherUser[]**](TPPublisherUser.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **updateRequest**
> \model\TPPublisherUser updateRequest($aid, $uid, $email, $firstName, $lastName)

Updates a user



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \Api\TPPublisherUserApi();
$aid = "aid_example"; // string | Application aid
$uid = "uid_example"; // string | User's uid
$email = "email_example"; // string | User's email address
$firstName = "firstName_example"; // string | User's first name
$lastName = "lastName_example"; // string | User's last name

try { 
    $result = $api_instance->updateRequest($aid, $uid, $email, $firstName, $lastName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TPPublisherUserApi->updateRequest: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **aid** | **string**| Application aid | 
 **uid** | **string**| User&#39;s uid | 
 **email** | **string**| User&#39;s email address | [optional] 
 **firstName** | **string**| User&#39;s first name | [optional] 
 **lastName** | **string**| User&#39;s last name | [optional] 

### Return type

[**\model\TPPublisherUser**](TPPublisherUser.md)

### Authorization

No authorization required

### HTTP reuqest headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


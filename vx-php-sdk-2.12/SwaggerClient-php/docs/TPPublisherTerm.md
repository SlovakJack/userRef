# TPPublisherTerm

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**termId** | **string** | Term ID | 
**aid** | **string** | Application aid | 
**resource** | [**\model\TPPublisherResource**](TPPublisherResource.md) | The resource | 
**type** | **string** | Term type | 
**typeName** | **string** | Term type name | 
**name** | **string** | Term name | 
**description** | **string** | Term description | 
**verifyOnRenewal** | **bool** | Is term should be verified before renewal or it skips this step | 
**createDate** | **string** | The creation date | 
**paymentBillingPlan** | **string** | Term billing plan | 
**paymentBillingPlanDescription** | **string** | Term billing plan description | 
**paymentBillingPlanTable** | **object[]** |  | 
**paymentAllowRenewDays** | **int** | How many days in advance a user can renew | 
**paymentForceAutoRenew** | **bool** | Payment forces the auto renewal of subscriptions | 
**paymentIsCustomPriceAvailable** | **bool** | Payment is available custom price | 
**paymentIsSubscription** | **bool** | Payment is subscription | 
**paymentHasFreeTrial** | **bool** | Payment has free trial | 
**paymentNewCustomersOnly** | **bool** | Whether to allow buy only first time | 
**paymentTrialNewCustomersOnly** | **bool** | Whether to allow trial period only first time | 
**paymentAllowPromoCodes** | **bool** | Whether to allow promo codes to be applied | 
**paymentRenewGracePeriod** | **int** | The number of days after expiration to still allow access to the resource | 
**paymentAllowGift** | **bool** | Whether the term can be gifted | 
**paymentCurrency** | **string** | Currency of the term | 
**paymentFirstPrice** | **double** | First price of the term | 
**schedule** | [**\model\TPPublisherSchedule**](TPPublisherSchedule.md) |  | 
**scheduleBilling** | **string** | The schedule billing | 
**customRequireUser** | **bool** | Whether a valid user is required to complete the term | 
**customDefaultAccessPeriod** | **int** | The default access period | 
**adviewVastUrl** | **string** | The VAST URL to use | 
**adviewAccessPeriod** | **int** | The length of time a user gets access for | 
**registrationAccessPeriod** | **int** | The access time period  | 
**registrationGracePeriod** | **int** | The time period after registration that will count it as a valid registration conversion | 
**externalApiId** | **string** | External API Configuration ID | 
**externalApiName** | **string** | External API Configuration name | 
**evtVerificationPeriod** | **int** | External verification period | 
**evtFixedTimeAccessPeriod** | **int** | Period to grant access for in days | 
**evtGracePeriod** | **int** | External API grace period | 
**evtItunesBundleId** | **string** | iTunes bundle id | 
**evtItunesProductId** | **string** | iTunes  product id | 
**evtGooglePlayProductId** | **string** | Google Play product id | 
**collectAddress** | **bool** | Collect address for this term | 
**deliveryZone** | [**\model\TPPublisherDeliveryZone[]**](TPPublisherDeliveryZone.md) |  | 
**defaultCountry** | [**\model\TPPublisherCountry**](TPPublisherCountry.md) |  | 
**voucheringPolicy** | [**\model\TPPublisherVoucheringPolicy**](TPPublisherVoucheringPolicy.md) | Vouchering policy for term | 
**billingConfig** | **string** | The type of billing config | 
**isAllowedToChangeSchedulePeriodInPast** | **bool** | Whether term allows to change its schedule period which was created in past | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



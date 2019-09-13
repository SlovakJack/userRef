# TPPublisherUserSubscription

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subscriptionId** | **string** | User subscription id | 
**autoRenew** | **bool** | User subscription auto renew | 
**nextBillDate** | **string** | User subscription next bill date | 
**paymentMethod** | **string** | User subscription payment method | 
**billingPlan** | **string** | User subscription billing plan | 
**userPaymentInfoId** | **string** | User payment info id | 
**status** | **string** | User subscription status | 
**statusName** | **string** | User subscription status displayable | 
**statusNameInReports** | **string** | User subscription status displayable in reports | 
**term** | [**\model\TPPublisherTerm**](TPPublisherTerm.md) |  | 
**resource** | [**\model\TPPublisherResource**](TPPublisherResource.md) | The resource | 
**user** | [**\model\TPPublisherUser**](TPPublisherUser.md) | The user | 
**startDate** | **string** | The start date. | 
**cancelable** | **bool** | Whether this subscription could be cancelled. Cancel means that access no longer be prolongated and current access will be revoked | 
**cancelableAndRefundadle** | **bool** | Whether this subscription could be cancelled and the payment for the last period could be refunded. Cancel means that access no longer be prolongated and current access will be revoked | 
**userAddress** | [**\model\TPPublisherUserAddress**](TPPublisherUserAddress.md) | User address entity | 
**pscSubscriberNumber** | **string** | PSC subscriber number | 
**externalApiName** | **string** | External API Configuration name | 
**conversionResult** | **string** | Conversion result | 
**isInTrial** | **bool** | Is the user currently in trial period | 
**trialPeriodEndDate** | **string** | Date when trial period ends | 
**trialAmount** | **double** | Price of the trial period | 
**trialCurrency** | **string** | Currency of the trial period | 
**endDate** | **string** | Subscription end date | 
**chargeCount** | **int** | User subscription charge count | 
**upiExtCustomerId** | **string** | External customer id | 
**upiExtCustomerIdLabel** | **string** | Label for external customer id | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



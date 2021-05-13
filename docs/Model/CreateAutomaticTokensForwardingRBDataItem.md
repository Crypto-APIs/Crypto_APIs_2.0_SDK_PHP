# # CreateAutomaticTokensForwardingRBDataItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**callback_secret_key** | **string** | Represents the Secret Key value provided by the customer. This field is used for security purposes during the callback notification, in order to prove the sender of the callback as Crypto APIs. | [optional]
**callback_url** | **string** | Represents the URL that is set by the customer where the callback will be received at. The callback notification will be received only if and when the event occurs. |
**confirmations_count** | **string** | Represents the number of confirmations, i.e. the amount of blocks that have been built on top of this block. |
**fee_priority** | **string** | Represents the fee priority of the automation, whether it is \&quot;SLOW\&quot;, \&quot;STANDARD\&quot; or \&quot;FAST\&quot;. |
**minimum_transfer_amount** | **string** | Represents the minimum transfer amount of the currency in the &#x60;fromAddress&#x60; that can be allowed for an automatic forwarding. |
**to_address** | **string** | Represents the hash of the address the currency is forwarded to. |
**token_data** | [**\CryptoAPIs\Model\CreateAutomaticTokensForwardingRBTokenData**](CreateAutomaticTokensForwardingRBTokenData.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

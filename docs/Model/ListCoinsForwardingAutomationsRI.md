# # ListCoinsForwardingAutomationsRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**callback_url** | **string** | Represents the URL that is set by the customer where the callback will be received at. The callback notification will be received only if and when the event occurs. |
**confirmations_count_trigger** | **int** | Represents the total count of the transaction confirmations before triggering the event. |
**created_timestamp** | **int** | Defines the specific time/date when the automatic forwarding was created in Unix Timestamp. |
**fee_priority** | **string** | Represents the fee priority of the automation, whether it is \&quot;SLOW\&quot;, \&quot;STANDARD\&quot; OR \&quot;FAST\&quot;. |
**from_address** | **string** | Represents the hash of the address that forwards the currency. |
**minimum_transfer_amount** | **string** | Represents the minimum transfer amount of the currency in the &#x60;fromAddress&#x60; that can be allowed for an automatic forwarding. |
**reference_id** | **string** | Represents a unique ID used to reference the specific forwarding automation. |
**to_address** | **string** | Represents the hash of the address the currency is forwarded to. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

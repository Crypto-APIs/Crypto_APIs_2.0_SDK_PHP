# # NewBlockRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**callback_secret_key** | **string** | Represents the Secret Key value provided by the customer. This field is used for security purposes during the callback notification, in order to prove the sender of the callback as Crypto APIs. For more information please see our [Documentation](https://developers.cryptoapis.io/technical-documentation/general-information/callbacks#callback-security). |
**callback_url** | **string** | Represents the URL that is set by the customer where the callback will be received at. The callback notification will be received only if and when the event occurs. |
**created_timestamp** | **int** | Defines the specific time/date when the subscription was created in Unix Timestamp. |
**is_active** | **bool** | Defines whether the subscription is active or not. Set as boolean. |
**reference_id** | **string** | Represents a unique ID used to reference the specific callback subscription. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

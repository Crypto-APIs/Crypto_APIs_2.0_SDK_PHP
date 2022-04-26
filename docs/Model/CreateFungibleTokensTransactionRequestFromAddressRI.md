# # CreateFungibleTokensTransactionRequestFromAddressRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**callback_secret_key** | **string** | Represents the Secret Key value provided by the customer. This field is used for security purposes during the callback notification, in order to prove the sender of the callback as Crypto APIs. For more information please see our [Documentation](https://developers.cryptoapis.io/technical-documentation/general-information/callbacks#callback-security). |
**callback_url** | **string** | Represents the URL that is set by the customer where the callback will be received at. The callback notification will be received only if and when the event occurs. &#x60;We support ONLY httpS type of protocol&#x60;. |
**fee_priority** | **string** | Represents the fee priority of the automation, whether it is \&quot;slow\&quot;, \&quot;standard\&quot; or \&quot;fast\&quot;. |
**note** | **string** | Represents an optional note to add a free text in, explaining or providing additional detail on the transaction request. | [optional]
**recipients** | [**\CryptoAPIs\Model\CreateFungibleTokensTransactionRequestFromAddressRIRecipients[]**](CreateFungibleTokensTransactionRequestFromAddressRIRecipients.md) | Defines the destination for the transaction, i.e. the recipient(s). |
**senders** | [**\CryptoAPIs\Model\CreateFungibleTokensTransactionRequestFromAddressRISenders**](CreateFungibleTokensTransactionRequestFromAddressRISenders.md) |  |
**token_type_specific_data** | [**\CryptoAPIs\Model\CreateFungibleTokensTransactionRequestFromAddressRIS**](CreateFungibleTokensTransactionRequestFromAddressRIS.md) |  |
**transaction_request_id** | **string** | Represents a unique identifier of the transaction request (the request sent to make a transaction), which helps in identifying which callback and which &#x60;referenceId&#x60; concern that specific transaction request. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

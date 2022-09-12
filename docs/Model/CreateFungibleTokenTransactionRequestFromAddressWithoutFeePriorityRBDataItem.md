# # CreateFungibleTokenTransactionRequestFromAddressWithoutFeePriorityRBDataItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **string** | Represents the specific amount of the transaction. |
**callback_secret_key** | **string** | Represents the Secret Key value provided by the customer. This field is used for security purposes during the callback notification, in order to prove the sender of the callback as Crypto APIs. For more information please see our [Documentation](https://developers.cryptoapis.io/technical-documentation/general-information/callbacks#callback-security). | [optional]
**callback_url** | **string** | Represents the URL that is set by the customer where the callback will be received at. The callback notification will be received only if and when the event occurs. &#x60;We support ONLY httpS type of protocol&#x60;. | [optional]
**fee_limit** | **string** | Fee limit of the smart contract |
**note** | **string** | Represents an optional note to add a free text in, explaining or providing additional detail on the transaction request. | [optional]
**recipient_address** | **string** | Defines the specific recipient address for the transaction. |
**token_identifier** | **string** | Token identifier - for BITCOIN BASED should be property id e.g 31 for ETHEREUM BASED shoud be contract e.g 0xdac17f958d2ee523a2206206994597c13d831ec7 |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

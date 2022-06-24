# # NewConfirmedTokenTransactionsForSpecificAmountRBDataItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allow_duplicates** | **bool** | Specifies a flag that permits or denies the creation of duplicate addresses. | [optional] [default to false]
**amount_higher_than** | **int** | Represents a specific amount of tokens after which the system have to send a callback to customers&#39; callbackUrl. |
**callback_secret_key** | **string** | Represents the Secret Key value provided by the customer. This field is used for security purposes during the callback notification, in order to prove the sender of the callback as Crypto APIs 2.0. For more information please see our [Documentation](https://developers.cryptoapis.io/technical-documentation/general-information/callbacks#callback-security). | [optional]
**callback_url** | **string** | Represents the URL that is set by the customer where the callback will be received at. The callback notification will be received only if and when the event occurs. &#x60;We support ONLY httpS type of protocol&#x60;. |
**contract_address** | **string** | Represents the contract address of the token, which controls its logic. It is not the address that holds the tokens. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

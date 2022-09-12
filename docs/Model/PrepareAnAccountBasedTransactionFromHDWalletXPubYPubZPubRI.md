# # PrepareAnAccountBasedTransactionFromHDWalletXPubYPubZPubRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **string** | Representation of the amount of the transaction |
**data_hex** | **string** | Representation of the data in hex value |
**derivation_index** | **int** | Representation of the derivation index of the xpub address |
**fee** | [**\CryptoAPIs\Model\PrepareAnAccountBasedTransactionFromHDWalletXPubYPubZPubRIFee**](PrepareAnAccountBasedTransactionFromHDWalletXPubYPubZPubRIFee.md) |  |
**nonce** | **string** | Represents the sequential running number for an address, starting from 0 for the first transaction. E.g., if the nonce of a transaction is 10, it would be the 11th transaction sent from the sender&#39;s address. |
**recipient** | **string** | Represents a recipient addresses. In account-based protocols like Ethereum there is only one address in this list. |
**sender** | **string** | Represents a sender address. In account-based protocols like Ethereum there is only one address in this list. |
**sig_hash** | **string** | Representation of the hash that should be signed. |
**transaction_type** | **string** | Representation of the transaction type |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

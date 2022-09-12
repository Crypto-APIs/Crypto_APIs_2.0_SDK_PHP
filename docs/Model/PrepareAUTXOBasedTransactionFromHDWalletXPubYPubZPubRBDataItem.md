# # PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubRBDataItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_data** | **string** | Representation of the additional data. | [optional]
**fee** | [**\CryptoAPIs\Model\PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubRBDataItemFee**](PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubRBDataItemFee.md) |  |
**locktime** | **int** | Represents the time at which a particular transaction can be added to the blockchain. | [optional]
**prepare_strategy** | **string** | Representation of the transaction&#39;s strategy type | [optional]
**recipients** | [**\CryptoAPIs\Model\PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubRBDataItemRecipients[]**](PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubRBDataItemRecipients.md) | Represents a list of recipient addresses with the respective amounts. In account-based protocols like Ethereum there is only one address in this list. |
**replaceable** | **bool** | Representation of whether the transaction is replaceable | [optional]
**xpub** | **string** | Defines the account extended publicly known key which is used to derive all child public keys. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

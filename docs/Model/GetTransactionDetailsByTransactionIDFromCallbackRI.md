# # GetTransactionDetailsByTransactionIDFromCallbackRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**index** | **int** | Represents the index position of the transaction in the specific block. |
**mined_in_block_hash** | **string** | Represents the hash of the block where this transaction was mined/confirmed for first time. The hash is defined as a cryptographic digital fingerprint made by hashing the block header twice through the SHA256 algorithm. |
**mined_in_block_height** | **int** | Represents the hight of the block where this transaction was mined/confirmed for first time. The height is defined as the number of blocks in the blockchain preceding this specific block. |
**recipients** | [**\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDFromCallbackRIRecipients[]**](GetTransactionDetailsByTransactionIDFromCallbackRIRecipients.md) | Represents a list of recipient addresses with the respective amounts. In account-based protocols like Ethereum there is only one address in this list. |
**senders** | [**\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDFromCallbackRISenders[]**](GetTransactionDetailsByTransactionIDFromCallbackRISenders.md) | Represents a list of sender addresses with the respective amounts. In account-based protocols like Ethereum there is only one address in this list. |
**timestamp** | **int** | Defines the exact date/time in Unix Timestamp when this transaction was mined, confirmed or first seen in Mempool, if it is unconfirmed. |
**transaction_hash** | **string** | Represents the same as transactionId for account-based protocols like Ethereum, while it could be different in UTXO-based protocols like Bitcoin. E.g., in UTXO-based protocols hash is different from transactionId for SegWit transactions. |
**fee** | [**\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDFromCallbackRIFee**](GetTransactionDetailsByTransactionIDFromCallbackRIFee.md) |  |
**is_confirmed** | **bool** | Represents the state of the transaction whether it is confirmed or not confirmed. |
**blockchain_specific** | [**\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDFromCallbackRIBS**](GetTransactionDetailsByTransactionIDFromCallbackRIBS.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

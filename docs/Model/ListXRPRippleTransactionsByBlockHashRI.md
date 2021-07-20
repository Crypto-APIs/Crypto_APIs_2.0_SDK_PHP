# # ListXRPRippleTransactionsByBlockHashRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_data** | **string** | Represents any additional data that may be needed. | [optional]
**index** | **int** | Represents the index position of the transaction in the specific block. |
**mined_in_block_height** | **int** | Represents the hight of the block where this transaction was mined/confirmed for first time. The height is defined as the number of blocks in the blockchain preceding this specific block. |
**recipients** | [**\CryptoAPIs\Model\ListXRPRippleTransactionsByBlockHashRIRecipients[]**](ListXRPRippleTransactionsByBlockHashRIRecipients.md) | Represents an object of addresses that receive the transactions. |
**senders** | [**\CryptoAPIs\Model\ListXRPRippleTransactionsByBlockHashRISenders[]**](ListXRPRippleTransactionsByBlockHashRISenders.md) | Represents an object of addresses that provide the funds. |
**sequence** | **int** | Defines the transaction input&#39;s sequence as an integer, which is is used when transactions are replaced with newer versions before LockTime. |
**status** | **string** | Defines the status of the transaction. |
**timestamp** | **int** | Defines the exact date/time in Unix Timestamp when this transaction was mined, confirmed or first seen in Mempool, if it is unconfirmed. |
**transaction_hash** | **string** | Represents the same as &#x60;transactionId&#x60; for account-based protocols like Ethereum, while it could be different in UTXO-based protocols like Bitcoin. E.g., in UTXO-based protocols &#x60;hash&#x60; is different from &#x60;transactionId&#x60; for SegWit transactions. |
**type** | **string** | Defines the type of the transaction. |
**fee** | [**\CryptoAPIs\Model\ListXRPRippleTransactionsByBlockHashRIFee**](ListXRPRippleTransactionsByBlockHashRIFee.md) |  |
**offer** | [**\CryptoAPIs\Model\ListXRPRippleTransactionsByBlockHashRIOffer**](ListXRPRippleTransactionsByBlockHashRIOffer.md) |  |
**receive** | [**\CryptoAPIs\Model\ListXRPRippleTransactionsByBlockHashRIReceive**](ListXRPRippleTransactionsByBlockHashRIReceive.md) |  |
**value** | [**\CryptoAPIs\Model\ListXRPRippleTransactionsByBlockHashRIValue**](ListXRPRippleTransactionsByBlockHashRIValue.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

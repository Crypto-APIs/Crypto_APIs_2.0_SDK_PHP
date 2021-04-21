# # GetXRPRippleTransactionDetailsByTransactionIDResponseItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_data** | **string** | Represents additional data that may be needed. |
**index** | **string** | Defines the index of the transaction, i.e. the consecutive place it takes in the blockchain. |
**mined_in_block_hash** | **string** | Represents the hash of the block where this transaction was mined/confirmed for first time. The hash is defined as a cryptographic digital fingerprint made by hashing the block header twice through the SHA256 algorithm. |
**mined_in_block_height** | **string** | Represents the hight of the block where this transaction was mined/confirmed for first time. The height is defined as the number of blocks in the blockchain preceding this specific block. |
**offer** | [**\OpenAPI\Client\Model\GetXRPRippleTransactionDetailsByTransactionIDResponseItemOffer**](GetXRPRippleTransactionDetailsByTransactionIDResponseItemOffer.md) |  |
**receive** | [**\OpenAPI\Client\Model\GetXRPRippleTransactionDetailsByTransactionIDResponseItemReceive**](GetXRPRippleTransactionDetailsByTransactionIDResponseItemReceive.md) |  |
**recipients** | [**\OpenAPI\Client\Model\GetXRPRippleTransactionDetailsByTransactionIDResponseItemRecipients[]**](GetXRPRippleTransactionDetailsByTransactionIDResponseItemRecipients.md) | Represents an object of addresses that receive the transactions. |
**senders** | [**\OpenAPI\Client\Model\GetXRPRippleTransactionDetailsByTransactionIDResponseItemSenders[]**](GetXRPRippleTransactionDetailsByTransactionIDResponseItemSenders.md) | Represents an object of addresses that provide the funds. |
**sequence** | **int** | Defines the transaction input&#39;s sequence as an integer, which is is used when transactions are replaced with newer versions before LockTime. |
**status** | **string** | Defines the status of the transaction. | [optional]
**timestamp** | **int** | Defines the exact date/time in Unix Timestamp when this transaction was mined, confirmed or first seen in Mempool, if it is unconfirmed. |
**transaction_hash** | **string** | Represents the same as &#x60;transactionId&#x60; for account-based protocols like Ethereum, while it could be different in UTXO-based protocols like Bitcoin. E.g., in UTXO-based protocols &#x60;hash&#x60; is different from &#x60;transactionId&#x60; for SegWit transactions. |
**type** | **string** | Defines the type of the transaction. |
**fee** | [**\OpenAPI\Client\Model\GetXRPRippleTransactionDetailsByTransactionIDResponseItemFee**](GetXRPRippleTransactionDetailsByTransactionIDResponseItemFee.md) |  |
**value** | [**\OpenAPI\Client\Model\GetXRPRippleTransactionDetailsByTransactionIDResponseItemValue**](GetXRPRippleTransactionDetailsByTransactionIDResponseItemValue.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

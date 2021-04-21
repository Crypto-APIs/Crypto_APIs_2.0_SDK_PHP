# # ListXRPRippleTransactionsByAddressResponseItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_data** | **string** | Represents any additional data that may be needed. |
**index** | **int** | Represents the index position of the transaction in the block. |
**mined_in_block_hash** | **string** | Represents the hash of the block where this transaction was mined/confirmed for first time. The hash is defined as a cryptographic digital fingerprint made by hashing the block header twice through the SHA256 algorithm. |
**mined_in_block_height** | **int** | Represents the hight of the block where this transaction was mined/confirmed for first time. The height is defined as the number of blocks in the blockchain preceding this specific block. |
**recipients** | [**\OpenAPI\Client\Model\GetXRPRippleTransactionDetailsByTransactionIDResponseItemRecipients[]**](GetXRPRippleTransactionDetailsByTransactionIDResponseItemRecipients.md) | Represents an object of addresses that receive the transactions. |
**senders** | [**\OpenAPI\Client\Model\GetXRPRippleTransactionDetailsByTransactionIDResponseItemSenders[]**](GetXRPRippleTransactionDetailsByTransactionIDResponseItemSenders.md) | Represents an object of addresses that provide the funds. |
**sequence** | **int** | Defines the transaction input&#39;s sequence as an integer, which is is used when transactions are replaced with newer versions before LockTime. |
**status** | **string** | Defines the status of the transaction. |
**timestamp** | **int** | Defines the exact date/time in Unix Timestamp when this transaction was mined, confirmed or first seen in Mempool, if it is unconfirmed. |
**transaction_hash** | **string** | Represents the hash of the XRP transaction. |
**type** | **string** | Specifies the type of the transaction. |
**fee** | [**\OpenAPI\Client\Model\ListXRPRippleTransactionsByAddressResponseItemFee**](ListXRPRippleTransactionsByAddressResponseItemFee.md) |  |
**offer** | [**\OpenAPI\Client\Model\ListXRPRippleTransactionsByAddressResponseItemOffer**](ListXRPRippleTransactionsByAddressResponseItemOffer.md) |  |
**receive** | [**\OpenAPI\Client\Model\ListXRPRippleTransactionsByAddressResponseItemReceive**](ListXRPRippleTransactionsByAddressResponseItemReceive.md) |  |
**value** | [**\OpenAPI\Client\Model\ListXRPRippleTransactionsByAddressResponseItemValue**](ListXRPRippleTransactionsByAddressResponseItemValue.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

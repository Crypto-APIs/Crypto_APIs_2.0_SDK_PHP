# # ListInternalTransactionDetailsByTransactionHashRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **string** | Defines the specific amount of the transaction. |
**block_hash** | **string** | Represents the hash of the block, which is its unique identifier. It represents a cryptographic digital fingerprint made by hashing the block header twice through the SHA256 algorithm. |
**block_height** | **int** | Represents the number of blocks in the blockchain preceding this specific block. Block numbers have no gaps. A blockchain usually starts with block 0 called the \&quot;Genesis block\&quot;. |
**operation_id** | **string** | Represents the unique internal transaction ID in regards to the parent transaction (type trace address). |
**operation_type** | **string** | Defines the call type of the internal transaction. |
**parent_hash** | **string** | Defines the specific hash of the parent transaction. |
**recipient** | **string** | Represents the recipient address with the respective amount. |
**sender** | **string** | Represents the sender address with the respective amount. |
**timestamp** | **int** | Defines the exact date/time in Unix Timestamp when this transaction was mined, confirmed or first seen in Mempool, if it is unconfirmed. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

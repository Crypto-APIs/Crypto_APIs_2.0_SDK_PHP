# # GetBlockDetailsByBlockHeightResponseItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hash** | **string** | Represents the hash of the block, which is its unique identifier. It represents a cryptographic digital fingerprint made by hashing the block header twice through the SHA256 algorithm. |
**height** | **int** | Represents the number of blocks in the blockchain preceding this specific block. Block numbers have no gaps. A blockchain usually starts with block 0 called the \&quot;Genesis block\&quot;. |
**next_block_hash** | **string** | Represents the hash of the next block. When this is the last block of the blockchain this value will be an empty string. |
**previous_block_hash** | **string** | Represents the hash of the previous block, also known as the parent block. |
**timestamp** | **int** | Defines the exact date/time when this block was mined in Unix Timestamp. |
**transactions_count** | **int** | Represents the total number of all transactions as part of this block. |
**blockchain_specific** | [**\OpenAPI\Client\Model\GetBlockDetailsByBlockHeightResponseItemBlockchainSpecific**](GetBlockDetailsByBlockHeightResponseItemBlockchainSpecific.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

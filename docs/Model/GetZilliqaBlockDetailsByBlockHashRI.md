# # GetZilliqaBlockDetailsByBlockHashRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**block_height** | **int** | Represents the number of blocks in the blockchain preceding this specific block. Block numbers have no gaps. A blockchain usually starts with block 0 called the \&quot;Genesis block\&quot;. |
**difficulty** | **string** | Defines how difficult it is for a specific miner to mine the block. |
**ds_block** | **int** | Represents the Directory Service block which contains metadata about the miners who participate in the consensus protocol. |
**ds_difficulty** | **string** | Defines how difficult it is to mine the dsBlocks. |
**ds_leader** | **string** | Represents a part of the DS Committee which leads the consensus protocol for the epoch. |
**gas_limit** | **int** | Represents the maximum amount of gas allowed in the block in order to determine how many transactions it can fit. |
**gas_used** | **int** | Defines how much of the gas for the block has been used. |
**micro_blocks** | **string[]** |  |
**next_block_hash** | **string** | Defines the hash of the next block from the specific blockchain. |
**previous_block_hash** | **string** | Represents the hash of the previous block, also known as the parent block. |
**timestamp** | **int** | Defines the exact date/time when this block was mined in Unix Timestamp. |
**transactions_count** | **int** | Represents the total number of all transactions as part of this block. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

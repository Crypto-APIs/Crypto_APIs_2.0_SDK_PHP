# # ListLatestMinedBlocksRIBS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bits** | **string** | Represents a specific sub-unit of Zcash. Bits have two-decimal precision |
**chainwork** | **string** | Represents a hexadecimal number of all the hashes necessary to produce the current chain. E.g., when converting 0000000000000000000000000000000000000000000086859f7a841475b236fd to a decimal you get 635262017308958427068157 hashes, or 635262 exahashes. |
**difficulty** | **string** | Represents a mathematical value of how hard it is to find a valid hash for this block. |
**merkle_root** | **string** | Defines the single and final (root) node of a Merkle tree. It is the combined hash of all transactions&#39; hashes that are part of a blockchain block. |
**nonce** | **string** | Represents a random value that can be adjusted to satisfy the proof of work |
**size** | **int** | Represents the total size of the block in Bytes. |
**stripped_size** | **int** | Defines the numeric representation of the block size excluding the witness data. |
**version** | **int** | Represents the transaction version number. |
**version_hex** | **string** | Is the hexadecimal string representation of the block&#39;s version. |
**weight** | **int** | Represents a measurement to compare the size of different transactions to each other in proportion to the block size limit. |
**extra_data** | **string** | Represents any data that can be included by the miner in the block. |
**gas_limit** | **int** | Represents the maximum amount of gas allowed in the block in order to determine how many transactions it can fit. |
**gas_used** | **int** | Defines how much of the gas for the block has been used. |
**mined_in_seconds** | **int** | Specifies the amount of time required for the block to be mined in second |
**sha3_uncles** | **string** | Defines the combined hash of all uncles for a given parent. |
**total_difficulty** | **string** | Defines the total difficulty of the chain until this block, i.e. how difficult it is for a specific miner to mine a new block |
**uncles** | **string[]** |  |
**ds_block** | **int** | Represents the Directory Service block which contains metadata about the miners who participate in the consensus protocol. |
**ds_difficulty** | **string** | Defines how difficult it is to mine the dsBlocks. |
**ds_leader** | **string** | Represents a part of the DS Committee which leads the consensus protocol for the epoch. |
**micro_blocks** | **string[]** |  |
**total_coins** | [**\CryptoAPIs\Model\ListLatestMinedBlocksRIBSXTotalCoins**](ListLatestMinedBlocksRIBSXTotalCoins.md) |  | [optional]
**total_fees** | [**\CryptoAPIs\Model\ListLatestMinedBlocksRIBSXTotalFees**](ListLatestMinedBlocksRIBSXTotalFees.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

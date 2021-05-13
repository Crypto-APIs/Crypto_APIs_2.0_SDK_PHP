# # GetBlockDetailsByBlockHeightRIBSBC

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**difficulty** | **string** | Represents a mathematical value of how hard it is to find a valid hash for this block. |
**nonce** | **string** | Represents a random value that can be adjusted to satisfy the Proof of Work |
**size** | **int** | Represents the total size of the block in Bytes. |
**bits** | **string** | A sub-unit of BTC equal to 0.000001 BTC, or 100 Satoshi, and is the same as microbitcoin (μBTC). Bits have two-decimal precision. |
**chainwork** | **string** | Represents a hexadecimal number of all the hashes necessary to produce the current chain. E.g., when converting 0000000000000000000000000000000000000000000086859f7a841475b236fd to a decimal you get 635262017308958427068157 hashes, or 635262 exahashes. |
**merkle_root** | **string** | Defines the single and final (root) node of a Merkle tree. It is the combined hash of all transactions&#39; hashes that are part of a blockchain block. |
**version** | **int** | Represents the version of the specific block on the blockchain. |
**version_hex** | **string** | Is the hexadecimal string representation of the block&#39;s version. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

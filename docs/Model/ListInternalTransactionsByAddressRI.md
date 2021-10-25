# # ListInternalTransactionsByAddressRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **string** | Defines the specific amount of the transaction. |
**mined_in_block_hash** | **string** | Represents the hash of the block where this transaction was mined/confirmed for first time. The hash is defined as a cryptographic digital fingerprint made by hashing the block header twice through the SHA256 algorithm. |
**mined_in_block_height** | **int** | Represents the hight of the block where this transaction was mined/confirmed for first time. The height is defined as the number of blocks in the blockchain preceding this specific block. |
**operation_id** | **string** | Represents the unique internal transaction ID in regards to the parent transaction (type trace address). |
**operation_type** | **string** | Defines the call type of the internal transaction. |
**parent_hash** | **string** | Defines the specific hash of the parent transaction. |
**recipient** | **string** | Represents the recipient address with the respective amount. |
**sender** | **string** | Represents the sender address with the respective amount. |
**timestamp** | **int** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

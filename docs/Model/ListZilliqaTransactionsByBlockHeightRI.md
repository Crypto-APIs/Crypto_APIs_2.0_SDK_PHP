# # ListZilliqaTransactionsByBlockHeightRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fee** | [**\CryptoAPIs\Model\GetZilliqaTransactionDetailsByTransactionIDRIFee**](GetZilliqaTransactionDetailsByTransactionIDRIFee.md) |  |
**gas_limit** | **int** | Represents the maximum amount of gas allowed in the block in order to determine how many transactions it can fit. |
**gas_price** | **int** | Defines the price of the gas. |
**gas_used** | **int** | Defines how much of the gas for the block has been used. |
**mined_in_block_hash** | **string** | Represents the hash of the block, which is its unique identifier. It represents a cryptographic digital fingerprint made by hashing the block header twice through the SHA256 algorithm. |
**nonce** | **int** | Represents a random value that can be adjusted to satisfy the Proof of Work. |
**recipients** | [**\CryptoAPIs\Model\ListZilliqaTransactionsByAddressRIRecipients[]**](ListZilliqaTransactionsByAddressRIRecipients.md) | Defines an object array of the transaction recipients. |
**senders** | [**\CryptoAPIs\Model\ListZilliqaTransactionsByAddressRISenders[]**](ListZilliqaTransactionsByAddressRISenders.md) | Represents an object of addresses that provide the funds. |
**timestamp** | **int** | Defines the exact date/time when this block was mined in Unix Timestamp. |
**transaction_hash** | **string** | Represents the hash of the transaction, which is its unique identifier. |
**transaction_index** | **int** | Defines the numeric representation of the transaction index. |
**transaction_status** | **string** | Defines the status of the transaction, whether it is e.g. pending or complete. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

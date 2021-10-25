# # ListUnspentTransactionOutputsByAddressRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**index** | **int** | Represents the index position of the transaction in the block. |
**locktime** | **int** | Represents the time at which a particular transaction can be added to the blockchain |
**mined_in_block_hash** | **string** | Represents the hash of the block where this transaction was mined/confirmed for first time. The hash is defined as a cryptographic digital fingerprint made by hashing the block header twice through the SHA256 algorithm. |
**mined_in_block_height** | **int** | Represents the hight of the block where this transaction was mined/confirmed for first time. The height is defined as the number of blocks in the blockchain preceding this specific block. |
**recipients** | [**\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIRecipients[]**](GetTransactionDetailsByTransactionIDRIRecipients.md) | Represents a list of recipient addresses with the respective amounts. In account-based protocols like Ethereum there is only one address in this list. |
**senders** | [**\CryptoAPIs\Model\ListUnspentTransactionOutputsByAddressRISenders[]**](ListUnspentTransactionOutputsByAddressRISenders.md) | Object Array representation of transaction senders |
**size** | **int** | Represents the total size of this transaction |
**timestamp** | **int** | Defines the exact date/time in Unix Timestamp when this transaction was mined, confirmed or first seen in Mempool, if it is unconfirmed. |
**transaction_hash** | **string** | Represents the same as &#x60;transactionId&#x60; for account-based protocols like Ethereum, while it could be different in UTXO-based protocols like Bitcoin. E.g., in UTXO-based protocols &#x60;hash&#x60; is different from &#x60;transactionId&#x60; for SegWit transactions. |
**transaction_id** | **string** | Represents the unique identifier of a transaction, i.e. it could be &#x60;transactionId&#x60; in UTXO-based protocols like Bitcoin, and transaction &#x60;hash&#x60; in Ethereum blockchain. |
**version** | **int** | Represents the transaction version number. |
**vin** | [**\CryptoAPIs\Model\ListUnspentTransactionOutputsByAddressRIVin[]**](ListUnspentTransactionOutputsByAddressRIVin.md) | Represents the transaction inputs. |
**vout** | [**\CryptoAPIs\Model\ListConfirmedTransactionsByAddressRIBSBVout[]**](ListConfirmedTransactionsByAddressRIBSBVout.md) | Represents the transaction outputs. |
**fee** | [**\CryptoAPIs\Model\ListUnspentTransactionOutputsByAddressRIFee**](ListUnspentTransactionOutputsByAddressRIFee.md) |  |
**blockchain_specific** | [**\CryptoAPIs\Model\ListUnspentTransactionOutputsByAddressRIBlockchainSpecific**](ListUnspentTransactionOutputsByAddressRIBlockchainSpecific.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

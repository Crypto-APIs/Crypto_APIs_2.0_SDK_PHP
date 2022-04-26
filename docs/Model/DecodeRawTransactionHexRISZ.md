# # DecodeRawTransactionHexRISZ

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**expiry_height** | **int** | Represents a block height after which the transaction will expire. |
**locktime** | **int** | Represents the locktime on the transaction on the specific blockchain, i.e. the blockheight at which the transaction is valid. |
**overwintered** | **bool** | \&quot;Overwinter\&quot; is the network upgrade for the Zcash blockchain. |
**saplinged** | **bool** | Defines if the transaction includes sapling or not. |
**transaction_hash** | **string** | Represents the same as transactionId for account-based protocols like Ethereum, while it could be different in UTXO-based protocols like Bitcoin. E.g., in UTXO-based protocols hash is different from transactionId for SegWit transactions. |
**value_balance** | **string** | Defines the transaction value balance. |
**version** | **int** | Represents the transaction version number. |
**version_group_id** | **string** | Represents the transaction version group ID |
**vin** | [**\CryptoAPIs\Model\DecodeRawTransactionHexRISZVin[]**](DecodeRawTransactionHexRISZVin.md) | Represents the Inputs of the transaction |
**vout** | [**\CryptoAPIs\Model\DecodeRawTransactionHexRISZVout[]**](DecodeRawTransactionHexRISZVout.md) | Represents the Inputs of the transaction |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

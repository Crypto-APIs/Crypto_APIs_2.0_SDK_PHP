# # ListTransactionsByBlockHashRIBS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**locktime** | **int** | Represents the time at which a particular transaction can be added to the blockchain. |
**size** | **int** | Represents the total size of this transaction. |
**v_size** | **int** | Represents the virtual size of this transaction. |
**version** | **int** | Represents transaction version number. |
**vin** | [**\CryptoAPIs\Model\ListTransactionsByBlockHashRIBSD2Vin[]**](ListTransactionsByBlockHashRIBSD2Vin.md) | Represents the transaction inputs. |
**vout** | [**\CryptoAPIs\Model\ListTransactionsByBlockHashRIBSD2Vout[]**](ListTransactionsByBlockHashRIBSD2Vout.md) | Represents the transaction outputs. |
**vsize** | **int** | Represents the virtual size of this transaction. |
**contract** | **string** | Represents the specific transaction contract. |
**gas_limit** | **string** | Represents the amount of gas used by this specific transaction alone. |
**gas_price** | [**\CryptoAPIs\Model\ListTransactionsByBlockHashRIBSEGasPrice**](ListTransactionsByBlockHashRIBSEGasPrice.md) |  |
**gas_used** | **string** | Represents the exact unit of gas that was used for the transaction. |
**input_data** | **string** | Represents additional information that is required for the transaction. |
**nonce** | **string** | Represents the sequential running number for an address, starting from 0 for the first transaction. E.g., if the nonce of a transaction is 10, it would be the 11th transaction sent from the sender&#39;s address. |
**transaction_status** | **string** | String representation of the transaction status |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

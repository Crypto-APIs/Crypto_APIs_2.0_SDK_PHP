# # GetTransactionDetailsByTransactionIDFromCallbackRIBSP

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **string** | Representation of the amount value. |
**contract** | **string** | Represents the specific transaction contract. |
**gas** | **string** | Represents the price offered to the miner to purchase this amount of gas. |
**gas_price** | **string** | Represents the price offered to the miner to purchase this amount of gas. |
**gas_used** | **string** | Represents the exact unit of gas that was used for the transaction. |
**input** | **string** | Represents additional information that is required for the transaction. |
**nonce** | **int** | Represents the sequential running number for an address, starting from 0 for the first transaction. E.g., if the nonce of a transaction is 10, it would be the 11th transaction sent from the sender&#39;s address. |
**recipients** | **string** | Represents a list of recipient addresses with the respective amounts. In account-based protocols like Ethereum there is only one address in this list. |
**senders** | **string** | Represents a list of sender addresses with the respective amounts. In account-based protocols like Ethereum there is only one address in this list. |
**transaction_status** | **string** | Represents the status of this transaction. |
**txid** | **string** | Represents the unique identifier of a transaction, i.e. it could be transactionId in UTXO-based protocols like Bitcoin, and transaction hash in Ethereum blockchain. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

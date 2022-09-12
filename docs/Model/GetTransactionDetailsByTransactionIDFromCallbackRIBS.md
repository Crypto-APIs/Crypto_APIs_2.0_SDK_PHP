# # GetTransactionDetailsByTransactionIDFromCallbackRIBS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**locktime** | **int** | Represents the locktime on the transaction on the specific blockchain, i.e. the blockheight at which the transaction is valid. |
**size** | **int** | Represents the total size of this transaction. |
**v_size** | **int** | Represents the virtual size of this transaction. |
**version** | **int** | Defines the version of the transaction. |
**vin** | [**\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSZVin[]**](GetTransactionDetailsByTransactionIDRIBSZVin.md) | Object Array representation of transaction inputs |
**vout** | [**\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDFromCallbackRIBSZVout[]**](GetTransactionDetailsByTransactionIDFromCallbackRIBSZVout.md) | Object Array representation of transaction outputs |
**contract** | **string** | Represents the specific transaction contract. |
**gas_limit** | **int** | Represents the maximum amount of gas allowed in the block in order to determine how many transactions it can fit. |
**gas_price** | **string** | Represents the price offered to the miner to purchase this amount of gas. |
**gas_used** | **string** | Represents the exact unit of gas that was used for the transaction. |
**input_data** | **string** | Represents additional information that is required for the transaction. |
**nonce** | **int** | Represents the sequential running number for an address, starting from 0 for the first transaction. E.g., if the nonce of a transaction is 10, it would be the 11th transaction sent from the sender&#39;s address. |
**transaction_status** | **string** | Represents the status of this transaction. |
**binding_sig** | **string** | It is used to enforce balance of Spend and Output transfers, in order to prevent their replay across transactions. |
**expiry_height** | **int** | Represents a block height after which the transaction will expire. |
**join_split_pub_key** | **string** | Represents an encoding of a JoinSplitSig public validating key. |
**join_split_sig** | **string** | Is used to sign transactions that contain at least one JoinSplit description. |
**overwintered** | **bool** | \&quot;Overwinter\&quot; is the network upgrade for the Zcash blockchain. |
**v_join_split** | [**\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSZVJoinSplit[]**](GetTransactionDetailsByTransactionIDRIBSZVJoinSplit.md) | Represents a sequence of JoinSplit descriptions using BCTV14 proofs. |
**v_shielded_output** | [**\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSZVShieldedOutput[]**](GetTransactionDetailsByTransactionIDRIBSZVShieldedOutput.md) | Object Array representation of transaction output descriptions |
**v_shielded_spend** | [**\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSZVShieldedSpend[]**](GetTransactionDetailsByTransactionIDRIBSZVShieldedSpend.md) | Object Array representation of transaction spend descriptions |
**value_balance** | **string** | String representation of the transaction value balance |
**version_group_id** | **string** | Represents the transaction version group ID |
**additional_data** | **string** | Represents additional data that may be needed. |
**destination_tag** | **int** | Defines the destination tag value. | [optional]
**offer** | [**\CryptoAPIs\Model\GetXRPRippleTransactionDetailsByTransactionIDRIOffer**](GetXRPRippleTransactionDetailsByTransactionIDRIOffer.md) |  |
**receive** | [**\CryptoAPIs\Model\GetXRPRippleTransactionDetailsByTransactionIDRIReceive**](GetXRPRippleTransactionDetailsByTransactionIDRIReceive.md) |  |
**sequence** | **int** | Defines the transaction input&#39;s sequence as an integer, which is is used when transactions are replaced with newer versions before LockTime. |
**status** | **string** | Defines the status of the transaction. |
**type** | **string** | Defines the type of the transaction. |
**value** | [**\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDFromCallbackRIBSXValue**](GetTransactionDetailsByTransactionIDFromCallbackRIBSXValue.md) |  |
**amount** | **string** | Representation of the amount value. |
**bandwidth_used** | [**\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDFromCallbackRIBSTBandwidthUsed**](GetTransactionDetailsByTransactionIDFromCallbackRIBSTBandwidthUsed.md) |  |
**energy_used** | [**\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDFromCallbackRIBSTEnergyUsed**](GetTransactionDetailsByTransactionIDFromCallbackRIBSTEnergyUsed.md) |  |
**has_internal_transactions** | **bool** | Defines if the transaction includes internal transactions (true) or not (false). |
**has_token_transfers** | **string** | Defines if the transaction includes token transfers (true) or not (false). |
**input** | **string** | Represents additional information that is required for the transaction. |
**recipients** | **string** | Represents a list of recipient addresses with the respective amounts. In account-based protocols like Ethereum there is only one address in this list. |
**senders** | **string** | Represents a list of sender addresses with the respective amounts. In account-based protocols like Ethereum there is only one address in this list. |
**gas** | **string** | Represents the price offered to the miner to purchase this amount of gas. |
**txid** | **string** | Represents the unique identifier of a transaction, i.e. it could be transactionId in UTXO-based protocols like Bitcoin, and transaction hash in Ethereum blockchain. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

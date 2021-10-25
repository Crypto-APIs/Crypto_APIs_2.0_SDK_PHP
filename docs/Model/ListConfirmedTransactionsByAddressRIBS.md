# # ListConfirmedTransactionsByAddressRIBS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**locktime** | **int** | Represents the locktime on the transaction on the specific blockchain, i.e. the blockheight at which the transaction is valid. |
**size** | **int** | Represents the total size of this transaction. |
**v_size** | **int** | Represents the virtual size of this transaction. |
**version** | **int** | Defines the version of the transaction. |
**vin** | [**\CryptoAPIs\Model\ListConfirmedTransactionsByAddressRIBSZVin[]**](ListConfirmedTransactionsByAddressRIBSZVin.md) | Object Array representation of transaction inputs |
**vout** | [**\CryptoAPIs\Model\ListConfirmedTransactionsByAddressRIBSZVout[]**](ListConfirmedTransactionsByAddressRIBSZVout.md) | Object Array representation of transaction outputs |
**contract** | **string** | Represents the specific transaction contract. |
**gas_limit** | **string** | Represents the amount of gas used by this specific transaction alone. |
**gas_price** | [**\CryptoAPIs\Model\ListConfirmedTransactionsByAddressRIBSBSCGasPrice**](ListConfirmedTransactionsByAddressRIBSBSCGasPrice.md) |  |
**gas_used** | **string** | Represents the exact unit of gas that was used for the transaction. |
**input_data** | **string** | Represents additional information that is required for the transaction. |
**nonce** | **int** | Represents the sequential running number for an address, starting from 0 for the first transaction. E.g., if the nonce of a transaction is 10, it would be the 11th transaction sent from the sender&#39;s address. |
**transaction_status** | **string** | String representation of the transaction status |
**binding_sig** | **string** | It is used to enforce balance of Spend and Output transfers, in order to prevent their replay across transactions. |
**expiry_height** | **int** | Represents a block height after which the transaction will expire. |
**join_split_pub_key** | **string** | Represents an encoding of a JoinSplitSig public validating key. |
**join_split_sig** | **string** | Is used to sign transactions that contain at least one JoinSplit description. |
**overwintered** | **bool** | \&quot;Overwinter\&quot; is the network upgrade for the Zcash blockchain. |
**v_join_split** | [**\CryptoAPIs\Model\ListConfirmedTransactionsByAddressRIBSZVJoinSplit[]**](ListConfirmedTransactionsByAddressRIBSZVJoinSplit.md) | Represents a sequence of JoinSplit descriptions using BCTV14 proofs. |
**v_shielded_output** | [**\CryptoAPIs\Model\ListConfirmedTransactionsByAddressRIBSZVShieldedOutput[]**](ListConfirmedTransactionsByAddressRIBSZVShieldedOutput.md) | Object Array representation of transaction output descriptions |
**v_shielded_spend** | [**\CryptoAPIs\Model\ListConfirmedTransactionsByAddressRIBSZVShieldedSpend[]**](ListConfirmedTransactionsByAddressRIBSZVShieldedSpend.md) | Object Array representation of transaction spend descriptions |
**value_balance** | **string** | Defines the transaction value balance. |
**version_group_id** | **string** | Represents the transaction version group ID. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

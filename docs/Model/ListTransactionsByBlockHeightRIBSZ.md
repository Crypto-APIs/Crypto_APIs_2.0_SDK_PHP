# # ListTransactionsByBlockHeightRIBSZ

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**binding_sig** | **string** | It is used to enforce balance of Spend and Output transfers, in order to prevent their replay across transactions. |
**expiry_height** | **int** | Represents a block height after which the transaction will expire. |
**join_split_pub_key** | **string** | Represents an encoding of a JoinSplitSig public validating key. |
**join_split_sig** | **string** | Is used to sign transactions that contain at least one JoinSplit description. |
**locktime** | **int** | Represents the time at which a particular transaction can be added to the blockchain. |
**overwintered** | **bool** | \&quot;Overwinter\&quot; is the network upgrade for the Zcash blockchain. |
**size** | **int** | Represents the total size of this transaction. |
**v_join_split** | [**\CryptoAPIs\Model\ListTransactionsByBlockHeightRIBSZVJoinSplit[]**](ListTransactionsByBlockHeightRIBSZVJoinSplit.md) | Represents a sequence of JoinSplit descriptions using BCTV14 proofs. |
**v_shielded_output** | [**\CryptoAPIs\Model\ListTransactionsByBlockHeightRIBSZVShieldedOutput[]**](ListTransactionsByBlockHeightRIBSZVShieldedOutput.md) | Object Array representation of transaction output descriptions |
**v_shielded_spend** | [**\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSZVShieldedSpend[]**](GetTransactionDetailsByTransactionIDRIBSZVShieldedSpend.md) | Object Array representation of transaction spend descriptions |
**value_balance** | **string** | Defines the transaction value balance. |
**version** | **int** | Represents the transaction version number. |
**version_group_id** | **string** | Represents the transaction version group ID. |
**vin** | [**\CryptoAPIs\Model\ListTransactionsByBlockHeightRIBSZVin[]**](ListTransactionsByBlockHeightRIBSZVin.md) | Object Array representation of transaction inputs |
**vout** | [**\CryptoAPIs\Model\ListTransactionsByBlockHeightRIBSZVout[]**](ListTransactionsByBlockHeightRIBSZVout.md) | Object Array representation of transaction outputs |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

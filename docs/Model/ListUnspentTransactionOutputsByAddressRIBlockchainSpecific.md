# # ListUnspentTransactionOutputsByAddressRIBlockchainSpecific

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**v_size** | **int** | Represents the virtual size of this transaction |
**binding_sig** | **string** | It is used to enforce balance of Spend and Output transfers, in order to prevent their replay across transactions. |
**expiry_height** | **int** | Represents a block height after which the transaction will expire. |
**join_split_pub_key** | **string** | Represents an encoding of a JoinSplitSig public validating key. |
**join_split_sig** | **string** | Is used to sign transactions that contain at least one JoinSplit description. |
**overwintered** | **bool** | \&quot;Overwinter\&quot; is the network upgrade for the Zcash blockchain. |
**v_join_split** | [**\CryptoAPIs\Model\ListUnspentTransactionOutputsByAddressRIBlockchainSpecificVJoinSplit[]**](ListUnspentTransactionOutputsByAddressRIBlockchainSpecificVJoinSplit.md) | Represents a sequence of JoinSplit descriptions using BCTV14 proofs. | [optional]
**v_shielded_output** | [**\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBSZVShieldedOutput[]**](GetTransactionDetailsByTransactionIDRIBSZVShieldedOutput.md) | Object Array representation of transaction output descriptions | [optional]
**v_shielded_spend** | [**\CryptoAPIs\Model\ListUnspentTransactionOutputsByAddressRIBlockchainSpecificVShieldedSpend[]**](ListUnspentTransactionOutputsByAddressRIBlockchainSpecificVShieldedSpend.md) | Object Array representation of transaction spend descriptions |
**value_balance** | **string** | Defines the transaction value balance. |
**version_group_id** | **string** | Represents the transaction version group ID. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

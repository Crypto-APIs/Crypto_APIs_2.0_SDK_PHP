# # ListTransactionsByBlockHeightRIBSZVJoinSplit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**anchor** | **string** | Defines a Merkle tree root of a note commitment tree which uniquely identifies a note commitment tree state given the assumed security properties of the Merkle tree’s  hash function. |
**cipher_texts** | **string[]** |  |
**commitments** | **string[]** |  |
**macs** | **string[]** |  |
**nullifiers** | **string[]** |  |
**one_time_pub_key** | **string** | Defines the one time public key. |
**proof** | **string** | Defines the proof. |
**random_seed** | **string** | Represents a 256-bit seed that must be chosen independently at random for each JoinSplit description. |
**v_pub_new** | **string** | Defines the value that the joinSplit transfer will insert into the transparent transaction value pool. |
**v_pub_old** | **string** | Defines the value that the joinSplit transfer will remove from the transparent transaction value pool. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # ListUnspentTransactionOutputsByAddressRIBlockchainSpecificVShieldedSpend

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**anchor** | **string** | Defines a Merkle tree root of a note commitment tree which uniquely identifies a note commitment tree state given the assumed security properties of the Merkle tree’s hash function. |
**cv** | **string** | Defines a value commitment to the value of the input note. |
**nullifier** | **string** | Represents a sequence of nullifiers of the input notes. |
**proof** | **string** | Represents the proof. |
**rk** | **string** | Represents the randomized validating key for spendAuthSig. |
**spend_auth_sig** | **string** | Used to prove knowledge of the spending key authorizing spending of an input note. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

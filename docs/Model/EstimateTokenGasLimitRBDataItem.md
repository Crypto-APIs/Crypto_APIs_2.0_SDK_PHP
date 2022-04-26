# # EstimateTokenGasLimitRBDataItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **string** | Represents transactions&#39; amount. |
**contract** | **string** | Defines the specific token identifier.  For Ethereum-based transactions it is the contract. |
**contract_type** | **string** | Represents the ERC contract type. It can be ERC20 or ERC721 |
**recipient** | **string** | The address which receives this transaction. In UTXO-based protocols like Bitcoin there could be several senders while in account-based protocols like Ethereum there is always only one recipient. |
**sender** | **string** | Represents the address which sends this transaction. In UTXO-based protocols like Bitcoin there could be several senders while in account-based protocols like Ethereum there is always only one sender. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

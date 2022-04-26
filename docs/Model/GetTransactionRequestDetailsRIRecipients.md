# # GetTransactionRequestDetailsRIRecipients

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | **string** | The address which receives this transaction. In UTXO-based protocols like Bitcoin there could be several senders while in account-based protocols like Ethereum there is always only one recipient. |
**address_tag** | **int** | Defines a specific Tag that is an additional XRP address feature. It helps identify a transaction recipient beyond a wallet address. The tag that was encoded into the x-Address along with the Classic Address. | [optional]
**amount** | **string** | Represents the amount received to this address. |
**classic_address** | **string** | Represents the public address, which is a compressed and shortened form of a public key. A classic address is shown when the destination address is an x-Address. | [optional]
**unit** | **string** | Defines the unit of the amount. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_data** | **string** | Representation of the additional data | [optional]
**fee** | **string** | When isConfirmed is True - Defines the amount of the transaction fee When isConfirmed is False - For ETH-based blockchains this attribute represents the max fee value. |
**fee_per_byte** | **string** | Defines the fee per byte value | [optional]
**locktime** | **int** | Represents the time at which a particular transaction can be added to the blockchain. |
**replaceable** | **bool** | Representation of whether the transaction is replaceable |
**size** | **int** | Represents the total size of this transaction. |
**vin** | [**\CryptoAPIs\Model\PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubRIVin[]**](PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubRIVin.md) | Represents the transaction inputs. |
**vout** | [**\CryptoAPIs\Model\PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubRIVout[]**](PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubRIVout.md) | Represents the transaction outputs. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

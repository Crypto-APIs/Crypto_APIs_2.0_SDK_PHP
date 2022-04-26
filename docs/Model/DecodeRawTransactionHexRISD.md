# # DecodeRawTransactionHexRISD

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**locktime** | **int** | Represents the time at which a particular transaction can be added to the blockchain. |
**transaction_hash** | **string** | Represents the same as transactionId for account-based protocols like Ethereum, while it could be different in UTXO-based protocols like Bitcoin. E.g., in UTXO-based protocols hash is different from transactionId for SegWit transactions. |
**v_size** | **int** | Represents the virtual size of this transaction. |
**version** | **int** | Represents transaction version number. |
**vin** | [**\CryptoAPIs\Model\DecodeRawTransactionHexRISDVin[]**](DecodeRawTransactionHexRISDVin.md) | Represents the transaction inputs. |
**vout** | [**\CryptoAPIs\Model\DecodeRawTransactionHexRISDVout[]**](DecodeRawTransactionHexRISDVout.md) | Represents the transaction outputs. |
**weight** | **int** | Represents the size of a block, measured in weight units and including the segwit discount. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

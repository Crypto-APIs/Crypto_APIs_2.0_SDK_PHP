# # DecodeRawTransactionHexRISE2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**approximate_fee** | **string** | Defines the approximate fee value. When isConfirmed is True - Defines the amount of the transaction fee When isConfirmed is False - For ETH-based blockchains this attribute represents the max fee value. | [optional]
**approximate_minimum_required_fee** | **string** | Defines the approximate minimum fee that is required for the transaction. | [optional]
**gas_limit** | **string** | Represents the amount of gas used by this specific transaction alone. |
**gas_paid_for_data** | **string** | Represents the amount of gas paid for the data in the transaction. | [optional]
**gas_price** | **string** | Represents the price offered to the miner to purchase this amount of gas. | [optional]
**input_data** | **string** | Represents additional information that is required for the transaction. | [optional]
**nonce** | **int** | Represents the sequential running number for an address, starting from 0 for the first transaction. E.g., if the nonce of a transaction is 10, it would be the 11th transaction sent from the sender&#39;s address. |
**r** | **string** | Represents output of an ECDSA signature. | [optional]
**recipient** | **string** | The address which receives this transaction. In UTXO-based protocols like Bitcoin there could be several senders while in account-based protocols like Ethereum there is always only one recipient. |
**s** | **string** | Represents output of an ECDSA signature. | [optional]
**sender** | **string** | Represents the address which sends this transaction. In UTXO-based protocols like Bitcoin there could be several senders while in account-based protocols like Ethereum there is always only one sender. |
**type** | **int** | Specifies the transaction type as one from three options: if response returns a &#x60;\&quot;0\&quot;&#x60; it means the raw transaction includes legacy transaction data, if it is &#x60;\&quot;1\&quot;&#x60; - includes access lists for EIP2930, and if it is &#x60;\&quot;2\&quot;&#x60; - EIP1559 data. |
**v** | **string** | Defines the the recovery id. | [optional]
**value** | **string** | Represents the sent/received amount. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

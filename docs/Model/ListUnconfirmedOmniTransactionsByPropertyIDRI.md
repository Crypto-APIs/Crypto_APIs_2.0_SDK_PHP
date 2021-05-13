# # ListUnconfirmedOmniTransactionsByPropertyIDRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **string** | Defines the amount of the sent tokens. |
**divisible** | **bool** | Defines whether the attribute can be divisible or not, as boolean. E.g., if it is \&quot;true\&quot;, the attribute is divisible. |
**mined** | **bool** | Defines whether the transaction has been mined or not, as boolean. E.g. if set to \&quot;true\&quot;, it means the transaction is mined. |
**property_id** | **int** | Represents the identifier of the tokens to send. |
**recipients** | [**\CryptoAPIs\Model\ListOmniTransactionsByAddressRIRecipients[]**](ListOmniTransactionsByAddressRIRecipients.md) | Represents an object of addresses that receive the transactions. |
**senders** | [**\CryptoAPIs\Model\GetUnconfirmedOmniTransactionByTransactionIDTxidRISenders[]**](GetUnconfirmedOmniTransactionByTransactionIDTxidRISenders.md) | Represents an object of addresses that provide the funds. |
**sent** | **bool** | Defines whether the transaction has been sent or not, as boolean. E.g. if set to \&quot;true\&quot;, it means the transaction is sent. |
**timestamp** | **int** | Defines the exact date/time in Unix Timestamp when this transaction was mined, confirmed or first seen in Mempool, if it is unconfirmed. |
**transaction_id** | **string** | Represents the unique identifier of a transaction, i.e. it could be &#x60;transactionId&#x60; in UTXO-based protocols like Bitcoin, and transaction &#x60;hash&#x60; in Ethereum blockchain. |
**type** | **string** | Defines the type of the transaction as a string. |
**type_iint** | **int** | Defines the type of the transaction as a number. |
**version** | **int** | Defines the specific version. |
**fee** | [**\CryptoAPIs\Model\ListUnconfirmedOmniTransactionsByAddressRIFee**](ListUnconfirmedOmniTransactionsByAddressRIFee.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

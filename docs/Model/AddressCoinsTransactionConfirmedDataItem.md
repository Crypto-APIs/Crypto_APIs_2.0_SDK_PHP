# # AddressCoinsTransactionConfirmedDataItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**blockchain** | **string** | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
**network** | **string** | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot;, \&quot;rinkeby\&quot; are test networks. |
**address** | **string** | Defines the specific address to which the coin transaction has been sent and is confirmed. |
**mined_in_block** | [**\OpenAPI\Client\Model\AddressCoinsTransactionConfirmedDataItemMinedInBlock**](AddressCoinsTransactionConfirmedDataItemMinedInBlock.md) |  |
**transaction_id** | **string** | Defines the unique ID of the specific transaction, i.e. its identification number. |
**amount** | **string** | Defines the amount of coins sent with the confirmed transaction. |
**unit** | **string** | Defines the unit of the transaction, e.g. BTC. |
**direction** | **string** | Defines whether the transaction is \&quot;incoming\&quot; or \&quot;outgoing\&quot;. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

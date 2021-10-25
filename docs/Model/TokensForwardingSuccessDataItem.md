# # TokensForwardingSuccessDataItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**blockchain** | **string** | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
**network** | **string** | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
**from_address** | **string** | Represents the hash of the address that provides the tokens. |
**to_address** | **string** | Represents the hash of the address to forward the tokens to. |
**spent_fees_amount** | **string** | Represents the amount of the fee spent for the tokens to be forwarded. |
**spent_fees_unit** | **string** | Represents the unit of the fee spent for the tokens to be forwarded, e.g. BTC. |
**trigger_transaction_id** | **string** | Defines the unique Transaction ID that triggered the token forwarding. |
**forwarding_transaction_id** | **string** | Defines the unique Transaction ID that forwarded the tokens. |
**token_type** | **string** | Defines the type of token sent with the transaction, e.g. ERC 20. |
**token** | [**\CryptoAPIs\Model\TokensForwardingSuccessToken**](TokensForwardingSuccessToken.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # CoinsForwardingFailDataItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**blockchain** | **string** | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
**network** | **string** | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot;, \&quot;rinkeby\&quot; are test networks. |
**from_address** | **string** | Represents the hash of the address that provides the coins. |
**to_address** | **string** | Represents the hash of the address to forward the coins to. |
**trigger_transaction_id** | **string** | Defines the unique Transaction ID that triggered the coin forwarding. |
**error_code** | **string** | Represents the error code received for the failed coin forwarding. |
**error_message** | **string** | Represents the error message received for the failed coin forwarding. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

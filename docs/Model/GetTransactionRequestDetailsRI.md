# # GetTransactionRequestDetailsRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_details** | **string** | Defines an optional note for additional details. |
**blockchain** | **string** | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
**fee_priority** | **string** | Defines the priority for the fee, if it is \&quot;slow\&quot;, \&quot;standard\&quot; or \&quot;fast\&quot;. |
**network** | **string** | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
**recipients** | [**\CryptoAPIs\Model\GetTransactionRequestDetailsRIRecipients[]**](GetTransactionRequestDetailsRIRecipients.md) | Represents a list of recipient addresses with the respective amounts. In account-based protocols like Ethereum there is only one address in this list. |
**total_transaction_amount** | **string** | Defines the total transaction amount. |
**transaction_request_status** | **string** | Defines the status of the transaction request, e.g. pending. |
**transaction_type** | **string** | Defines the transaction type, if it is for coins or tokens. |
**unit** | **string** | Defines the unit of the amount. |
**wallet_id** | **string** | Defines the unique ID of the Wallet. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

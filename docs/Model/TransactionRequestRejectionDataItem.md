# # TransactionRequestRejectionDataItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**blockchain** | **string** | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
**network** | **string** | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot;, \&quot;rinkeby\&quot; are test networks. |
**required_approvals** | **int** | The required number of approvals needed to approve the transaction. |
**required_rejections** | **int** | The required number of rejections needed to reject the transaction. |
**current_approvals** | **int** | The current number of approvals given for the transaction. |
**current_rejections** | **int** | The current number of rejections given for the transaction. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

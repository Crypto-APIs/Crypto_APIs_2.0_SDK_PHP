# # ListTransactionsByAddressResponseItemBlockchainSpecific

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**locktime** | **int** | Represents the locktime on the transaction on the specific blockchain, i.e. the blockheight at which the transaction is valid. |
**size** | **int** | Represents the total size of this transaction. |
**v_size** | **int** | Represents the virtual size of this transaction. |
**version** | **int** | Represents the transaction&#39;s version number. |
**vin** | [**\OpenAPI\Client\Model\ListTransactionsByAddressResponseItemBlockchainSpecificDashVin[]**](ListTransactionsByAddressResponseItemBlockchainSpecificDashVin.md) | Represents the transaction inputs. |
**vout** | [**\OpenAPI\Client\Model\ListTransactionsByAddressResponseItemBlockchainSpecificDashVout[]**](ListTransactionsByAddressResponseItemBlockchainSpecificDashVout.md) | Represents the transaction outputs. |
**contract** | **string** | Represents the specific transaction contract. |
**gas_limit** | **string** | Represents the amount of gas used by this specific transaction alone. |
**gas_price** | [**\OpenAPI\Client\Model\ListTransactionsByAddressResponseItemBlockchainSpecificEthereumGasPrice**](ListTransactionsByAddressResponseItemBlockchainSpecificEthereumGasPrice.md) |  |
**gas_used** | **string** | Represents the exact unit of gas that was used for the transaction. |
**input_data** | **string** | Represents additional information that is required for the transaction. |
**nonce** | **int** | Represents the sequential running number for an address, starting from 0 for the first transaction. E.g., if the nonce of a transaction is 10, it would be the 11th transaction sent from the sender&#39;s address. |
**transaction_status** | **string** | String representation of the transaction status |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # GetAddressDetailsRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transactions_count** | **int** | Represents the total number of confirmed coins transactions for this address, both incoming and outgoing. Applies for coins only **and not** tokens transfers e.g. for Ethereum. &#x60;transactionsCount&#x60; could result as less than incoming and outgoing transactions put together (e.g. in Bitcoin), due to the fact that one and the same address could be in senders and receivers addresses. |
**confirmed_balance** | [**\CryptoAPIs\Model\GetAddressDetailsRIConfirmedBalance**](GetAddressDetailsRIConfirmedBalance.md) |  |
**total_received** | [**\CryptoAPIs\Model\GetAddressDetailsRITotalReceived**](GetAddressDetailsRITotalReceived.md) |  |
**total_spent** | [**\CryptoAPIs\Model\GetAddressDetailsRITotalSpent**](GetAddressDetailsRITotalSpent.md) |  |
**incoming_transactions_count** | **int** | Defines the received transaction count to the address. |
**outgoing_transactions_count** | **int** | Defines the sent transaction count from the address. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # GetAddressDetailsFromCallbackRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**incoming_transactions_count** | **int** | Defines the received transaction count to the address. |
**outgoing_transactions_count** | **int** | Defines the sent transaction count from the address. |
**transactions_count** | **int** | Represents the total number of confirmed coins transactions for this address, both incoming and outgoing. Applies for coins only and not tokens transfers e.g. for Ethereum. transactionsCount could result as less than incoming and outgoing transactions put together (e.g. in Bitcoin), due to the fact that one and the same address could be in senders and receivers addresses. |
**confirmed_balance** | [**\CryptoAPIs\Model\GetAddressDetailsFromCallbackRIConfirmedBalance**](GetAddressDetailsFromCallbackRIConfirmedBalance.md) |  |
**total_received** | [**\CryptoAPIs\Model\GetAddressDetailsFromCallbackRITotalReceived**](GetAddressDetailsFromCallbackRITotalReceived.md) |  |
**total_spent** | [**\CryptoAPIs\Model\GetAddressDetailsFromCallbackRITotalSpent**](GetAddressDetailsFromCallbackRITotalSpent.md) |  |
**sequence** | **int** | Defines the transaction input&#39;s sequence as an integer, which is is used when transactions are replaced with newer versions before LockTime. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

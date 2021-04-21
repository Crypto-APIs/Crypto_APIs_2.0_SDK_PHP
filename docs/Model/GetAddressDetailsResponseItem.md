# # GetAddressDetailsResponseItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transactions_count** | **int** | Represents the total number of confirmed coins transactions for this address, both incoming and outgoing. Applies for coins only **and not** tokens transfers e.g. for Ethereum. &#x60;transactionsCount&#x60; could result as less than incoming and outgoing transactions put together (e.g. in Bitcoin), due to the fact that one and the same address could be in senders and receivers addresses. |
**confirmed_balance** | [**\OpenAPI\Client\Model\GetAddressDetailsResponseItemConfirmedBalance**](GetAddressDetailsResponseItemConfirmedBalance.md) |  |
**total_received** | [**\OpenAPI\Client\Model\GetAddressDetailsResponseItemTotalReceived**](GetAddressDetailsResponseItemTotalReceived.md) |  |
**total_spent** | [**\OpenAPI\Client\Model\GetAddressDetailsResponseItemTotalSpent**](GetAddressDetailsResponseItemTotalSpent.md) |  |
**incoming_transactions_count** | **int** | Defines the count of all confirmed incoming transactions from the address for coins. This applies to **coins** only, **not** to tokens transfers e.g. for Ethereum. |
**outgoing_transactions_count** | **int** | Defines the count of all confirmed outgoing transactions from the address for coins. This applies to **coins** only, **not** to tokens transfers e.g. for Ethereum. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

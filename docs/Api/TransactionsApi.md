# CryptoAPIs\TransactionsApi

All URIs are relative to https://rest.cryptoapis.io/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCoinsTransactionFromAddressForWholeAmount()**](TransactionsApi.md#createCoinsTransactionFromAddressForWholeAmount) | **POST** /wallet-as-a-service/wallets/{walletId}/{blockchain}/{network}/addresses/{address}/all-transaction-requests | Create Coins Transaction From Address For Whole Amount
[**createCoinsTransactionRequestFromAddress()**](TransactionsApi.md#createCoinsTransactionRequestFromAddress) | **POST** /wallet-as-a-service/wallets/{walletId}/{blockchain}/{network}/addresses/{address}/transaction-requests | Create Coins Transaction Request from Address
[**createCoinsTransactionRequestFromWallet()**](TransactionsApi.md#createCoinsTransactionRequestFromWallet) | **POST** /wallet-as-a-service/wallets/{walletId}/{blockchain}/{network}/transaction-requests | Create Coins Transaction Request from Wallet
[**createTokensTransactionRequestFromAddress()**](TransactionsApi.md#createTokensTransactionRequestFromAddress) | **POST** /wallet-as-a-service/wallets/{walletId}/{blockchain}/{network}/addresses/{senderAddress}/token-transaction-requests | Create Tokens Transaction Request from Address


## `createCoinsTransactionFromAddressForWholeAmount()`

```php
createCoinsTransactionFromAddressForWholeAmount($address, $blockchain, $network, $wallet_id, $context, $create_coins_transaction_from_address_for_whole_amount_rb): \CryptoAPIs\Model\CreateCoinsTransactionFromAddressForWholeAmountR
```

Create Coins Transaction From Address For Whole Amount

Through this endpoint customers can create a new transaction from address for **coins** specifically, which will transfer over the entire available amount.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = 0x6f61e3c2fbb8c8be698bd0907ba6c04b62800fe5; // string | Defines the source address.
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = ropsten; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$wallet_id = 609e221675d04500068718dc; // string | Represents the sender's specific and unique Wallet ID of the sender.
$context = 'context_example'; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$create_coins_transaction_from_address_for_whole_amount_rb = new \CryptoAPIs\Model\CreateCoinsTransactionFromAddressForWholeAmountRB(); // \CryptoAPIs\Model\CreateCoinsTransactionFromAddressForWholeAmountRB

try {
    $result = $apiInstance->createCoinsTransactionFromAddressForWholeAmount($address, $blockchain, $network, $wallet_id, $context, $create_coins_transaction_from_address_for_whole_amount_rb);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->createCoinsTransactionFromAddressForWholeAmount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Defines the source address. |
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **wallet_id** | **string**| Represents the sender&#39;s specific and unique Wallet ID of the sender. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **create_coins_transaction_from_address_for_whole_amount_rb** | [**\CryptoAPIs\Model\CreateCoinsTransactionFromAddressForWholeAmountRB**](../Model/CreateCoinsTransactionFromAddressForWholeAmountRB.md)|  | [optional]

### Return type

[**\CryptoAPIs\Model\CreateCoinsTransactionFromAddressForWholeAmountR**](../Model/CreateCoinsTransactionFromAddressForWholeAmountR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCoinsTransactionRequestFromAddress()`

```php
createCoinsTransactionRequestFromAddress($address, $blockchain, $network, $wallet_id, $context, $create_coins_transaction_request_from_address_rb): \CryptoAPIs\Model\CreateCoinsTransactionRequestFromAddressR
```

Create Coins Transaction Request from Address

Through this endpoint users can create a new single transaction request from one address to another.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = 0x6f61e3c2fbb8c8be698bd0907ba6c04b62800fe5; // string | Defines the specific source address for the transaction.
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = ropsten; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$wallet_id = 609e221675d04500068718dc; // string | Represents the sender's specific and unique Wallet ID of the sender.
$context = 'context_example'; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$create_coins_transaction_request_from_address_rb = new \CryptoAPIs\Model\CreateCoinsTransactionRequestFromAddressRB(); // \CryptoAPIs\Model\CreateCoinsTransactionRequestFromAddressRB

try {
    $result = $apiInstance->createCoinsTransactionRequestFromAddress($address, $blockchain, $network, $wallet_id, $context, $create_coins_transaction_request_from_address_rb);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->createCoinsTransactionRequestFromAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**| Defines the specific source address for the transaction. |
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **wallet_id** | **string**| Represents the sender&#39;s specific and unique Wallet ID of the sender. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **create_coins_transaction_request_from_address_rb** | [**\CryptoAPIs\Model\CreateCoinsTransactionRequestFromAddressRB**](../Model/CreateCoinsTransactionRequestFromAddressRB.md)|  | [optional]

### Return type

[**\CryptoAPIs\Model\CreateCoinsTransactionRequestFromAddressR**](../Model/CreateCoinsTransactionRequestFromAddressR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCoinsTransactionRequestFromWallet()`

```php
createCoinsTransactionRequestFromWallet($blockchain, $network, $wallet_id, $context, $create_coins_transaction_request_from_wallet_rb): \CryptoAPIs\Model\CreateCoinsTransactionRequestFromWalletR
```

Create Coins Transaction Request from Wallet

Through this endpoint users can create a new transaction request from the entire Wallet instead from just a specific address. This endpoint can generate transactions from multiple to multiple addresses.    {warning}This is available **only** for UTXO-based protocols such as Bitcoin, Bitcoin Cash, Litecoin, etc. It **is not** available for Account-based protocols like Ethereum.{/warning}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$wallet_id = 609e221675d04500068718dc; // string | Represents the sender's specific and unique Wallet ID of the sender.
$context = 'context_example'; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$create_coins_transaction_request_from_wallet_rb = new \CryptoAPIs\Model\CreateCoinsTransactionRequestFromWalletRB(); // \CryptoAPIs\Model\CreateCoinsTransactionRequestFromWalletRB

try {
    $result = $apiInstance->createCoinsTransactionRequestFromWallet($blockchain, $network, $wallet_id, $context, $create_coins_transaction_request_from_wallet_rb);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->createCoinsTransactionRequestFromWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. | [default to &#39;testnet&#39;]
 **wallet_id** | **string**| Represents the sender&#39;s specific and unique Wallet ID of the sender. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **create_coins_transaction_request_from_wallet_rb** | [**\CryptoAPIs\Model\CreateCoinsTransactionRequestFromWalletRB**](../Model/CreateCoinsTransactionRequestFromWalletRB.md)|  | [optional]

### Return type

[**\CryptoAPIs\Model\CreateCoinsTransactionRequestFromWalletR**](../Model/CreateCoinsTransactionRequestFromWalletR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTokensTransactionRequestFromAddress()`

```php
createTokensTransactionRequestFromAddress($blockchain, $network, $sender_address, $wallet_id, $context, $create_tokens_transaction_request_from_address_rb): \CryptoAPIs\Model\CreateTokensTransactionRequestFromAddressR
```

Create Tokens Transaction Request from Address

Through this endpoint users can make a single token transaction.    {warning}This applies only to **fungible** tokens, **not** NFTs (non-fungible tokens).{/warning}    {note}To have an operational callback subscription, you need to first verify a domain for the Callback URL. Please see more information on Callbacks [here](https://developers.cryptoapis.io/technical-documentation/general-information/callbacks#callback-url).{/note}    {warning}Crypto APIs will notify the user **only when** the event occurs. There are cases when the specific event doesn't happen at all, or takes a long time to do so. A callback notification **will not** be sent if the event does not or cannot occur, or will take long time to occur.{/warning}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = mainnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$sender_address = 0x6f61e3c2fbb8c8be698bd0907ba6c04b62800fe5; // string | Defines the specific source address for the transaction.
$wallet_id = 609e221675d04500068718dc; // string | Defines the unique ID of the Wallet.
$context = 'context_example'; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$create_tokens_transaction_request_from_address_rb = new \CryptoAPIs\Model\CreateTokensTransactionRequestFromAddressRB(); // \CryptoAPIs\Model\CreateTokensTransactionRequestFromAddressRB

try {
    $result = $apiInstance->createTokensTransactionRequestFromAddress($blockchain, $network, $sender_address, $wallet_id, $context, $create_tokens_transaction_request_from_address_rb);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->createTokensTransactionRequestFromAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. | [default to &#39;ethereum&#39;]
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. | [default to &#39;mainnet&#39;]
 **sender_address** | **string**| Defines the specific source address for the transaction. |
 **wallet_id** | **string**| Defines the unique ID of the Wallet. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **create_tokens_transaction_request_from_address_rb** | [**\CryptoAPIs\Model\CreateTokensTransactionRequestFromAddressRB**](../Model/CreateTokensTransactionRequestFromAddressRB.md)|  | [optional]

### Return type

[**\CryptoAPIs\Model\CreateTokensTransactionRequestFromAddressR**](../Model/CreateTokensTransactionRequestFromAddressR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

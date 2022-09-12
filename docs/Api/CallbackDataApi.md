# CryptoAPIs\CallbackDataApi

All URIs are relative to https://rest.cryptoapis.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAddressDetailsFromCallback()**](CallbackDataApi.md#getAddressDetailsFromCallback) | **GET** /blockchain-events/{blockchain}/{network}/addresses/{address} | Get Address Details From Callback
[**getBlockDetailsByBlockHashFromCallback()**](CallbackDataApi.md#getBlockDetailsByBlockHashFromCallback) | **GET** /blockchain-events/{blockchain}/{network}/blocks/hash/{blockHash} | Get Block Details By Block Hash From Callback
[**getBlockDetailsByBlockHeightFromCallback()**](CallbackDataApi.md#getBlockDetailsByBlockHeightFromCallback) | **GET** /blockchain-events/{blockchain}/{network}/blocks/height/{blockHeight} | Get Block Details By Block Height From Callback
[**getTransactionDetailsByTransactionIDFromCallback()**](CallbackDataApi.md#getTransactionDetailsByTransactionIDFromCallback) | **GET** /blockchain-events/{blockchain}/{network}/transactions/{transactionId} | Get Transaction Details By Transaction ID From Callback


## `getAddressDetailsFromCallback()`

```php
getAddressDetailsFromCallback($blockchain, $network, $address, $context): \CryptoAPIs\Model\GetAddressDetailsFromCallbackR
```

Get Address Details From Callback

This endpoint creates a shortcut to obtain information from Blockchain data by going through Blockchain Events and a specific Event Subscription. It provides data for a specific address from the Event it takes part in only if the address already exists in the blockchain events subscriptions. It applies only for Events related to that customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\CallbackDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$address = mzYijhgmzZrmuB7wBDazRKirnChKyow4M3; // string | Represents the public address, which is a compressed and shortened form of a public key.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->getAddressDetailsFromCallback($blockchain, $network, $address, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallbackDataApi->getAddressDetailsFromCallback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **address** | **string**| Represents the public address, which is a compressed and shortened form of a public key. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]

### Return type

[**\CryptoAPIs\Model\GetAddressDetailsFromCallbackR**](../Model/GetAddressDetailsFromCallbackR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBlockDetailsByBlockHashFromCallback()`

```php
getBlockDetailsByBlockHashFromCallback($blockchain, $network, $block_hash, $context): \CryptoAPIs\Model\GetBlockDetailsByBlockHashFromCallbackR
```

Get Block Details By Block Hash From Callback

This endpoint creates a shortcut to obtain information from Blockchain data by going through Blockchain Events and a specific Event Subscription. It provides data for a specific block by providing the `blockHash` attribute from the Event it takes part in and after making check that the customer in question does have a subscription for this block. It applies only for Events related to that user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\CallbackDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$block_hash = 000000000000000bdea8ba7df4bfd9f398e428fde8ee47152bcf93834ee48e8a; // string | Represents the hash of the block, which is its unique identifier. It represents a cryptographic digital fingerprint made by hashing the block header twice through the SHA256 algorithm.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->getBlockDetailsByBlockHashFromCallback($blockchain, $network, $block_hash, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallbackDataApi->getBlockDetailsByBlockHashFromCallback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **block_hash** | **string**| Represents the hash of the block, which is its unique identifier. It represents a cryptographic digital fingerprint made by hashing the block header twice through the SHA256 algorithm. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]

### Return type

[**\CryptoAPIs\Model\GetBlockDetailsByBlockHashFromCallbackR**](../Model/GetBlockDetailsByBlockHashFromCallbackR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBlockDetailsByBlockHeightFromCallback()`

```php
getBlockDetailsByBlockHeightFromCallback($blockchain, $network, $block_height, $context): \CryptoAPIs\Model\GetBlockDetailsByBlockHeightFromCallbackR
```

Get Block Details By Block Height From Callback

This endpoint creates a shortcut to obtain information from Blockchain data by going through Blockchain Events and a specific Event Subscription. It provides data for the specific Block by providing the `blockHeight` attribute from the Event it takes part in. It applies only for Events related to that user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\CallbackDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$block_height = 673852; // string | Represents the number of blocks in the blockchain preceding this specific block. Block numbers have no gaps. A blockchain usually starts with block 0 called the \"Genesis block\".
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->getBlockDetailsByBlockHeightFromCallback($blockchain, $network, $block_height, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallbackDataApi->getBlockDetailsByBlockHeightFromCallback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **block_height** | **string**| Represents the number of blocks in the blockchain preceding this specific block. Block numbers have no gaps. A blockchain usually starts with block 0 called the \&quot;Genesis block\&quot;. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]

### Return type

[**\CryptoAPIs\Model\GetBlockDetailsByBlockHeightFromCallbackR**](../Model/GetBlockDetailsByBlockHeightFromCallbackR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionDetailsByTransactionIDFromCallback()`

```php
getTransactionDetailsByTransactionIDFromCallback($blockchain, $network, $transaction_id, $context): \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDFromCallbackR
```

Get Transaction Details By Transaction ID From Callback

This endpoint creates a shortcut to obtain information from Blockchain data by going through Blockchain Events and a specific Event Subscription. It provides data for a specific transaction from the Event it takes part in by providing the `transactionId` attribute. It applies only for Events related to that user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\CallbackDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$transaction_id = 8888f6c8168ff69aaf6438ab185c690e8c76c63e5f9c472c1c86f08406ea74f2; // string | Represents the unique identifier of a transaction, i.e. it could be transactionId in UTXO-based protocols like Bitcoin, and transaction hash in Ethereum blockchain.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->getTransactionDetailsByTransactionIDFromCallback($blockchain, $network, $transaction_id, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallbackDataApi->getTransactionDetailsByTransactionIDFromCallback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **transaction_id** | **string**| Represents the unique identifier of a transaction, i.e. it could be transactionId in UTXO-based protocols like Bitcoin, and transaction hash in Ethereum blockchain. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]

### Return type

[**\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDFromCallbackR**](../Model/GetTransactionDetailsByTransactionIDFromCallbackR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

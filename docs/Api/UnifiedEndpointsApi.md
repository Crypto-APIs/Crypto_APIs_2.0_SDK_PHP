# CryptoAPIs\UnifiedEndpointsApi

All URIs are relative to https://rest.cryptoapis.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**estimateTransactionSmartFee()**](UnifiedEndpointsApi.md#estimateTransactionSmartFee) | **GET** /blockchain-data/{blockchain}/{network}/estimate-transaction-smart-fee | Estimate Transaction Smart Fee
[**getAddressBalance()**](UnifiedEndpointsApi.md#getAddressBalance) | **GET** /blockchain-data/{blockchain}/{network}/addresses/{address}/balance | Get Address Balance
[**getAddressDetails()**](UnifiedEndpointsApi.md#getAddressDetails) | **GET** /blockchain-data/{blockchain}/{network}/addresses/{address} | Get Address Details
[**getBlockDetailsByBlockHash()**](UnifiedEndpointsApi.md#getBlockDetailsByBlockHash) | **GET** /blockchain-data/{blockchain}/{network}/blocks/hash/{blockHash} | Get Block Details By Block Hash
[**getBlockDetailsByBlockHeight()**](UnifiedEndpointsApi.md#getBlockDetailsByBlockHeight) | **GET** /blockchain-data/{blockchain}/{network}/blocks/height/{height} | Get Block Details By Block Height
[**getFeeRecommendations()**](UnifiedEndpointsApi.md#getFeeRecommendations) | **GET** /blockchain-data/{blockchain}/{network}/mempool/fees | Get Fee Recommendations
[**getLastMinedBlock()**](UnifiedEndpointsApi.md#getLastMinedBlock) | **GET** /blockchain-data/{blockchain}/{network}/blocks/last | Get Last Mined Block
[**getNextAvailableNonce()**](UnifiedEndpointsApi.md#getNextAvailableNonce) | **GET** /blockchain-data/{blockchain}/{network}/addresses/{address}/next-available-nonce | Get Next Available Nonce
[**getRawTransactionData()**](UnifiedEndpointsApi.md#getRawTransactionData) | **GET** /blockchain-data/{blockchain}/{network}/transactions/{transactionId}/raw-data | Get Raw Transaction Data
[**getTransactionDetailsByTransactionID()**](UnifiedEndpointsApi.md#getTransactionDetailsByTransactionID) | **GET** /blockchain-data/{blockchain}/{network}/transactions/{transactionId} | Get Transaction Details By Transaction ID
[**listConfirmedTokensTransfersByAddressAndTimeRange()**](UnifiedEndpointsApi.md#listConfirmedTokensTransfersByAddressAndTimeRange) | **GET** /blockchain-data/{blockchain}/{network}/addresses/{address}/tokens-transfers-by-time-range | List Confirmed Tokens Transfers By Address And Time Range
[**listConfirmedTransactionsByAddress()**](UnifiedEndpointsApi.md#listConfirmedTransactionsByAddress) | **GET** /blockchain-data/{blockchain}/{network}/addresses/{address}/transactions | List Confirmed Transactions By Address
[**listConfirmedTransactionsByAddressAndTimeRange()**](UnifiedEndpointsApi.md#listConfirmedTransactionsByAddressAndTimeRange) | **GET** /blockchain-data/{blockchain}/{network}/addresses/{address}/transactions-by-time-range | List Confirmed Transactions By Address And Time Range
[**listInternalTransactionsByAddressAndTimeRange()**](UnifiedEndpointsApi.md#listInternalTransactionsByAddressAndTimeRange) | **GET** /blockchain-data/{blockchain}/{network}/addresses/{address}/internal-by-time-range | List Internal Transactions By Address And Time Range
[**listLatestMinedBlocks()**](UnifiedEndpointsApi.md#listLatestMinedBlocks) | **GET** /blockchain-data/{blockchain}/{network}/blocks/last/{count} | List Latest Mined Blocks
[**listTransactionsByBlockHash()**](UnifiedEndpointsApi.md#listTransactionsByBlockHash) | **GET** /blockchain-data/{blockchain}/{network}/blocks/hash/{blockHash}/transactions | List Transactions by Block Hash
[**listTransactionsByBlockHeight()**](UnifiedEndpointsApi.md#listTransactionsByBlockHeight) | **GET** /blockchain-data/{blockchain}/{network}/blocks/height/{height}/transactions | List Transactions by Block Height
[**listUnconfirmedTransactionsByAddress()**](UnifiedEndpointsApi.md#listUnconfirmedTransactionsByAddress) | **GET** /blockchain-data/{blockchain}/{network}/address-transactions-unconfirmed/{address} | List Unconfirmed Transactions by Address
[**listUnspentTransactionOutputsByAddress()**](UnifiedEndpointsApi.md#listUnspentTransactionOutputsByAddress) | **GET** /blockchain-data/{blockchain}/{network}/addresses/{address}/unspent-outputs | List Unspent Transaction Outputs By Address


## `estimateTransactionSmartFee()`

```php
estimateTransactionSmartFee($blockchain, $network, $context, $confirmation_target, $estimate_mode): \CryptoAPIs\Model\EstimateTransactionSmartFeeR
```

Estimate Transaction Smart Fee

Through this endpoint, customers can estimate the approximate fee per kilobyte needed for a transaction to begin confirmation within the `confirmationTarget` blocks when possible. After which it will return the number of blocks for which the estimate is valid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\UnifiedEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string
$network = testnet; // string
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$confirmation_target = 2; // int | Integer representation of confirmation target in blocks that estimation will be valid for
$estimate_mode = economical; // string | String representation of the address

try {
    $result = $apiInstance->estimateTransactionSmartFee($blockchain, $network, $context, $confirmation_target, $estimate_mode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnifiedEndpointsApi->estimateTransactionSmartFee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**|  |
 **network** | **string**|  |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **confirmation_target** | **int**| Integer representation of confirmation target in blocks that estimation will be valid for | [optional]
 **estimate_mode** | **string**| String representation of the address | [optional]

### Return type

[**\CryptoAPIs\Model\EstimateTransactionSmartFeeR**](../Model/EstimateTransactionSmartFeeR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAddressBalance()`

```php
getAddressBalance($blockchain, $network, $address, $context): \CryptoAPIs\Model\GetAddressBalanceR
```

Get Address Balance

Through this endpoint the customer can receive the balance of a given address based on confirmed/synced blocks only. In the case where there are any incoming or outgoing unconfirmed transactions for the specific address, they will not be counted or calculated here. Applies only for coins.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\UnifiedEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = goerli; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$address = 0x0902a667d6a3f287835e0a4593cae4167384abc6; // string | Represents the public address, which is a compressed and shortened form of a public key.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->getAddressBalance($blockchain, $network, $address, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnifiedEndpointsApi->getAddressBalance: ', $e->getMessage(), PHP_EOL;
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

[**\CryptoAPIs\Model\GetAddressBalanceR**](../Model/GetAddressBalanceR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAddressDetails()`

```php
getAddressDetails($blockchain, $network, $address, $context): \CryptoAPIs\Model\GetAddressDetailsR
```

Get Address Details

Through this endpoint the customer can receive basic information about a given address based on confirmed/synced blocks only. In the case where there are any incoming or outgoing **unconfirmed** transactions for the specific address, they **will not** be counted or calculated here. Applies only for coins.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\UnifiedEndpointsApi(
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
    $result = $apiInstance->getAddressDetails($blockchain, $network, $address, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnifiedEndpointsApi->getAddressDetails: ', $e->getMessage(), PHP_EOL;
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

[**\CryptoAPIs\Model\GetAddressDetailsR**](../Model/GetAddressDetailsR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBlockDetailsByBlockHash()`

```php
getBlockDetailsByBlockHash($blockchain, $network, $block_hash, $context): \CryptoAPIs\Model\GetBlockDetailsByBlockHashR
```

Get Block Details By Block Hash

Through this endpoint customers can obtain basic information about a given mined block, specifically by using the `hash` parameter. These block details could include the hash of the specific, the previous and the next block, its transactions count, its height, etc.     Blockchain specific data is information such as version, nonce, size, bits, merkleroot, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\UnifiedEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$block_hash = 0000000006b3f483bec16b8a85c632bdd30a14a202c83a9148002c9ee441dd0c; // string | Represents the hash of the block, which is its unique identifier. It represents a cryptographic digital fingerprint made by hashing the block header twice through the SHA256 algorithm.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->getBlockDetailsByBlockHash($blockchain, $network, $block_hash, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnifiedEndpointsApi->getBlockDetailsByBlockHash: ', $e->getMessage(), PHP_EOL;
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

[**\CryptoAPIs\Model\GetBlockDetailsByBlockHashR**](../Model/GetBlockDetailsByBlockHashR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBlockDetailsByBlockHeight()`

```php
getBlockDetailsByBlockHeight($blockchain, $network, $height, $context): \CryptoAPIs\Model\GetBlockDetailsByBlockHeightR
```

Get Block Details By Block Height

Through this endpoint customers can obtain basic information about a given mined block, specifically by using the `height` parameter. These block details could include the hash of the specific, the previous and the next block, its transactions count, its height, etc.     Blockchain specific data is information such as version, nonce, size, bits, merkleroot, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\UnifiedEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$height = 673852; // int | Represents the number of blocks in the blockchain preceding this specific block. Block numbers have no gaps. A blockchain usually starts with block 0 called the \"Genesis block\".
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->getBlockDetailsByBlockHeight($blockchain, $network, $height, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnifiedEndpointsApi->getBlockDetailsByBlockHeight: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **height** | **int**| Represents the number of blocks in the blockchain preceding this specific block. Block numbers have no gaps. A blockchain usually starts with block 0 called the \&quot;Genesis block\&quot;. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]

### Return type

[**\CryptoAPIs\Model\GetBlockDetailsByBlockHeightR**](../Model/GetBlockDetailsByBlockHeightR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFeeRecommendations()`

```php
getFeeRecommendations($blockchain, $network, $context): \CryptoAPIs\Model\GetFeeRecommendationsR
```

Get Fee Recommendations

Through this endpoint customers can obtain fee recommendations. Our fees recommendations are based on Mempool data which makes them much more accurate than fees based on already mined blocks. Calculations are done in real time live. Using this endpoint customers can get gas price for Ethereum, fee per byte for Bitcoin, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\UnifiedEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->getFeeRecommendations($blockchain, $network, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnifiedEndpointsApi->getFeeRecommendations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]

### Return type

[**\CryptoAPIs\Model\GetFeeRecommendationsR**](../Model/GetFeeRecommendationsR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLastMinedBlock()`

```php
getLastMinedBlock($blockchain, $network, $context): \CryptoAPIs\Model\GetLastMinedBlockR
```

Get Last Mined Block

Through this endpoint customers can fetch the last mined block in a specific blockchain network, along with its details. These could include the hash of the specific, the previous and the next block, its transactions count, its height, etc.     Blockchain specific data is information such as version, nonce, size, bits, merkleroot, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\UnifiedEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->getLastMinedBlock($blockchain, $network, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnifiedEndpointsApi->getLastMinedBlock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]

### Return type

[**\CryptoAPIs\Model\GetLastMinedBlockR**](../Model/GetLastMinedBlockR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNextAvailableNonce()`

```php
getNextAvailableNonce($blockchain, $network, $address, $context): \CryptoAPIs\Model\GetNextAvailableNonceR
```

Get Next Available Nonce

Through this endpoint customers can get information about the next available nonce by providing the specific blockchain, network and address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\UnifiedEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = ropsten; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$address = 0x626b046b0ce356f248b215b01b459f8b8d59e1a4; // string | Represents the public address, which is a compressed and shortened form of a public key.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->getNextAvailableNonce($blockchain, $network, $address, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnifiedEndpointsApi->getNextAvailableNonce: ', $e->getMessage(), PHP_EOL;
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

[**\CryptoAPIs\Model\GetNextAvailableNonceR**](../Model/GetNextAvailableNonceR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRawTransactionData()`

```php
getRawTransactionData($blockchain, $network, $transaction_id, $context): \CryptoAPIs\Model\GetRawTransactionDataR
```

Get Raw Transaction Data

Through this endpoint customers can get information on a transaction in its raw format by providing its `transactionId`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\UnifiedEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$transaction_id = 4b66461bf88b61e1e4326356534c135129defb504c7acb2fd6c92697d79eb250; // string | Represents the unique identifier of a transaction, i.e. it could be transactionId in UTXO-based protocols like Bitcoin, and transaction hash in Ethereum blockchain.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->getRawTransactionData($blockchain, $network, $transaction_id, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnifiedEndpointsApi->getRawTransactionData: ', $e->getMessage(), PHP_EOL;
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

[**\CryptoAPIs\Model\GetRawTransactionDataR**](../Model/GetRawTransactionDataR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionDetailsByTransactionID()`

```php
getTransactionDetailsByTransactionID($blockchain, $network, $transaction_id, $context): \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDR
```

Get Transaction Details By Transaction ID

Through this endpoint customers can obtain details about a transaction by the transaction's unique identifier. In UTXO-based protocols like BTC there are attributes such as `transactionId` and transaction `hash`. They still could be different. In protocols like Ethereum there is only one unique value and it's `hash`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\UnifiedEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$transaction_id = 4b66461bf88b61e1e4326356534c135129defb504c7acb2fd6c92697d79eb250; // string | Represents the unique identifier of a transaction, i.e. it could be `transactionId` in UTXO-based protocols like Bitcoin, and transaction `hash` in Ethereum blockchain.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->getTransactionDetailsByTransactionID($blockchain, $network, $transaction_id, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnifiedEndpointsApi->getTransactionDetailsByTransactionID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **transaction_id** | **string**| Represents the unique identifier of a transaction, i.e. it could be &#x60;transactionId&#x60; in UTXO-based protocols like Bitcoin, and transaction &#x60;hash&#x60; in Ethereum blockchain. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]

### Return type

[**\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDR**](../Model/GetTransactionDetailsByTransactionIDR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConfirmedTokensTransfersByAddressAndTimeRange()`

```php
listConfirmedTokensTransfersByAddressAndTimeRange($blockchain, $network, $address, $from_timestamp, $to_timestamp, $context, $limit, $offset): \CryptoAPIs\Model\ListConfirmedTokensTransfersByAddressAndTimeRangeR
```

List Confirmed Tokens Transfers By Address And Time Range

Through this endpoint customers can obtain a list with **confirmed** token transfers by the `address` attribute and the query parameters `fromTimestamp` and `toTimestamp` which gives customers the opportunity to filter the results by a specified time period.    {note}This refers only to transfers done for **confirmed tokens** not coins.{/note}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\UnifiedEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Ethereum Classic, etc.
$network = ropsten; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$address = 0x033ef6db9fbd0ee60e2931906b987fe0280471a0; // string | Represents the public address, which is a compressed and shortened form of a public key.
$from_timestamp = 1236238648; // int | Defines the specific time/date from which the results will start being listed.
$to_timestamp = 1644417868; // int | Defines the specific time/date to which the results will be listed.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$limit = 50; // int | Defines how many items should be returned in the response per page basis.
$offset = 0; // int | The starting index of the response items, i.e. where the response should start listing the returned items.

try {
    $result = $apiInstance->listConfirmedTokensTransfersByAddressAndTimeRange($blockchain, $network, $address, $from_timestamp, $to_timestamp, $context, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnifiedEndpointsApi->listConfirmedTokensTransfersByAddressAndTimeRange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Ethereum Classic, etc. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **address** | **string**| Represents the public address, which is a compressed and shortened form of a public key. |
 **from_timestamp** | **int**| Defines the specific time/date from which the results will start being listed. |
 **to_timestamp** | **int**| Defines the specific time/date to which the results will be listed. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 50]
 **offset** | **int**| The starting index of the response items, i.e. where the response should start listing the returned items. | [optional] [default to 0]

### Return type

[**\CryptoAPIs\Model\ListConfirmedTokensTransfersByAddressAndTimeRangeR**](../Model/ListConfirmedTokensTransfersByAddressAndTimeRangeR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConfirmedTransactionsByAddress()`

```php
listConfirmedTransactionsByAddress($blockchain, $network, $address, $context, $limit, $offset): \CryptoAPIs\Model\ListConfirmedTransactionsByAddressR
```

List Confirmed Transactions By Address

This endpoint will list transactions by an attribute `address`. The transactions listed will detail additional information such as hash, height, time of creation in Unix timestamp, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\UnifiedEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$address = mho4jHBcrNCncKt38trJahXakuaBnS7LK5; // string | Represents the public address, which is a compressed and shortened form of a public key.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$limit = 50; // int | Defines how many items should be returned in the response per page basis.
$offset = 0; // int | The starting index of the response items, i.e. where the response should start listing the returned items.

try {
    $result = $apiInstance->listConfirmedTransactionsByAddress($blockchain, $network, $address, $context, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnifiedEndpointsApi->listConfirmedTransactionsByAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **address** | **string**| Represents the public address, which is a compressed and shortened form of a public key. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 50]
 **offset** | **int**| The starting index of the response items, i.e. where the response should start listing the returned items. | [optional] [default to 0]

### Return type

[**\CryptoAPIs\Model\ListConfirmedTransactionsByAddressR**](../Model/ListConfirmedTransactionsByAddressR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listConfirmedTransactionsByAddressAndTimeRange()`

```php
listConfirmedTransactionsByAddressAndTimeRange($blockchain, $network, $address, $from_timestamp, $to_timestamp, $context, $limit, $offset): \CryptoAPIs\Model\ListConfirmedTransactionsByAddressAndTimeRangeR
```

List Confirmed Transactions By Address And Time Range

This endpoint will list confirmed transactions by the attribute `address` and the query parameters `fromTimestamp` and `toTimestamp` which gives customers the opportunity to filter the results by a specified time period.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\UnifiedEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$address = mho4jHBcrNCncKt38trJahXakuaBnS7LK5; // string | Represents the public address, which is a compressed and shortened form of a public key.
$from_timestamp = 1236238648; // int | Defines the specific time/date from which the results will start being listed.
$to_timestamp = 1644417868; // int | Defines the specific time/date to which the results will be listed.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$limit = 50; // int | Defines how many items should be returned in the response per page basis.
$offset = 0; // int | The starting index of the response items, i.e. where the response should start listing the returned items.

try {
    $result = $apiInstance->listConfirmedTransactionsByAddressAndTimeRange($blockchain, $network, $address, $from_timestamp, $to_timestamp, $context, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnifiedEndpointsApi->listConfirmedTransactionsByAddressAndTimeRange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **address** | **string**| Represents the public address, which is a compressed and shortened form of a public key. |
 **from_timestamp** | **int**| Defines the specific time/date from which the results will start being listed. |
 **to_timestamp** | **int**| Defines the specific time/date to which the results will be listed. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 50]
 **offset** | **int**| The starting index of the response items, i.e. where the response should start listing the returned items. | [optional] [default to 0]

### Return type

[**\CryptoAPIs\Model\ListConfirmedTransactionsByAddressAndTimeRangeR**](../Model/ListConfirmedTransactionsByAddressAndTimeRangeR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInternalTransactionsByAddressAndTimeRange()`

```php
listInternalTransactionsByAddressAndTimeRange($blockchain, $network, $address, $from_timestamp, $to_timestamp, $context, $limit, $offset): \CryptoAPIs\Model\ListInternalTransactionsByAddressAndTimeRangeR
```

List Internal Transactions By Address And Time Range

Through this endpoint customers can list internal transactions by the `address` attribute and the query parameters `fromTimestamp` and `toTimestamp`  which gives customers the opportunity to filter the results by a specified time period.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\UnifiedEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = ropsten; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$address = 0xc8fe2ceac93ad50e496b497357ae5385192dd28d; // string | String identifier of the address document represented in CryptoAPIs
$from_timestamp = 1635979828; // int | Defines the specific time/date from which the results will start being listed.
$to_timestamp = 1643329896; // int | Defines the specific time/date to which the results will be listed.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$limit = 50; // int | Defines how many items should be returned in the response per page basis.
$offset = 0; // int | The starting index of the response items, i.e. where the response should start listing the returned items.

try {
    $result = $apiInstance->listInternalTransactionsByAddressAndTimeRange($blockchain, $network, $address, $from_timestamp, $to_timestamp, $context, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnifiedEndpointsApi->listInternalTransactionsByAddressAndTimeRange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **address** | **string**| String identifier of the address document represented in CryptoAPIs |
 **from_timestamp** | **int**| Defines the specific time/date from which the results will start being listed. |
 **to_timestamp** | **int**| Defines the specific time/date to which the results will be listed. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 50]
 **offset** | **int**| The starting index of the response items, i.e. where the response should start listing the returned items. | [optional] [default to 0]

### Return type

[**\CryptoAPIs\Model\ListInternalTransactionsByAddressAndTimeRangeR**](../Model/ListInternalTransactionsByAddressAndTimeRangeR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listLatestMinedBlocks()`

```php
listLatestMinedBlocks($network, $blockchain, $count, $context): \CryptoAPIs\Model\ListLatestMinedBlocksR
```

List Latest Mined Blocks

Through this endpoint customers can list **up to 50** from the latest blocks that were mined.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\UnifiedEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = ropsten; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$count = 2; // int | Specifies how many records were requested.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->listLatestMinedBlocks($network, $blockchain, $count, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnifiedEndpointsApi->listLatestMinedBlocks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks |
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **count** | **int**| Specifies how many records were requested. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]

### Return type

[**\CryptoAPIs\Model\ListLatestMinedBlocksR**](../Model/ListLatestMinedBlocksR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTransactionsByBlockHash()`

```php
listTransactionsByBlockHash($blockchain, $network, $block_hash, $context, $limit, $offset): \CryptoAPIs\Model\ListTransactionsByBlockHashR
```

List Transactions by Block Hash

This endpoint will list transactions by an attribute `transactionHash`. The transactions listed will detail additional information such as addresses, height, time of creation in Unix timestamp, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\UnifiedEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$block_hash = 00000000000000127080d8bcf84f4ad830a71ea0aadce3632579b6b2f26cd94b; // string | Represents the hash of the block, which is its unique identifier. It represents a cryptographic digital fingerprint made by hashing the block header twice through the SHA256 algorithm.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$limit = 50; // int | Defines how many items should be returned in the response per page basis.
$offset = 0; // int | The starting index of the response items, i.e. where the response should start listing the returned items.

try {
    $result = $apiInstance->listTransactionsByBlockHash($blockchain, $network, $block_hash, $context, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnifiedEndpointsApi->listTransactionsByBlockHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **block_hash** | **string**| Represents the hash of the block, which is its unique identifier. It represents a cryptographic digital fingerprint made by hashing the block header twice through the SHA256 algorithm. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 50]
 **offset** | **int**| The starting index of the response items, i.e. where the response should start listing the returned items. | [optional] [default to 0]

### Return type

[**\CryptoAPIs\Model\ListTransactionsByBlockHashR**](../Model/ListTransactionsByBlockHashR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTransactionsByBlockHeight()`

```php
listTransactionsByBlockHeight($blockchain, $network, $height, $context, $limit, $offset): \CryptoAPIs\Model\ListTransactionsByBlockHeightR
```

List Transactions by Block Height

This endpoint will list transactions by an attribute `blockHeight`. The transactions listed will detail additional information such as hash, addresses, time of creation in Unix timestamp, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\UnifiedEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$height = 673852; // int | Represents the number of blocks in the blockchain preceding this specific block. Block numbers have no gaps. A blockchain usually starts with block 0 called the \"Genesis block\".
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$limit = 50; // int | Defines how many items should be returned in the response per page basis.
$offset = 0; // int | The starting index of the response items, i.e. where the response should start listing the returned items.

try {
    $result = $apiInstance->listTransactionsByBlockHeight($blockchain, $network, $height, $context, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnifiedEndpointsApi->listTransactionsByBlockHeight: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **height** | **int**| Represents the number of blocks in the blockchain preceding this specific block. Block numbers have no gaps. A blockchain usually starts with block 0 called the \&quot;Genesis block\&quot;. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 50]
 **offset** | **int**| The starting index of the response items, i.e. where the response should start listing the returned items. | [optional] [default to 0]

### Return type

[**\CryptoAPIs\Model\ListTransactionsByBlockHeightR**](../Model/ListTransactionsByBlockHeightR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUnconfirmedTransactionsByAddress()`

```php
listUnconfirmedTransactionsByAddress($blockchain, $network, $address, $context, $limit, $offset): \CryptoAPIs\Model\ListUnconfirmedTransactionsByAddressR
```

List Unconfirmed Transactions by Address

Through this endpoint customers can list transactions by `address` that are **unconfirmed**.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\UnifiedEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$address = 2NDt6eztswLiVgVYaGUhkTPmugUGovVypAe; // string | Represents the public address, which is a compressed and shortened form of a public key.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$limit = 50; // int | Defines how many items should be returned in the response per page basis.
$offset = 0; // int | The starting index of the response items, i.e. where the response should start listing the returned items.

try {
    $result = $apiInstance->listUnconfirmedTransactionsByAddress($blockchain, $network, $address, $context, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnifiedEndpointsApi->listUnconfirmedTransactionsByAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **address** | **string**| Represents the public address, which is a compressed and shortened form of a public key. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 50]
 **offset** | **int**| The starting index of the response items, i.e. where the response should start listing the returned items. | [optional] [default to 0]

### Return type

[**\CryptoAPIs\Model\ListUnconfirmedTransactionsByAddressR**](../Model/ListUnconfirmedTransactionsByAddressR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUnspentTransactionOutputsByAddress()`

```php
listUnspentTransactionOutputsByAddress($blockchain, $network, $address, $context, $limit, $offset): \CryptoAPIs\Model\ListUnspentTransactionOutputsByAddressR
```

List Unspent Transaction Outputs By Address

Through this endpoint customers can list their transactions' unspent outputs by `address`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\UnifiedEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$address = 2MtzNEqm2D9jcbPJ5mW7Z3AUNwqt3afZH66; // string | Represents the address that has unspend funds per which the result is returned.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$limit = 50; // int | Defines how many items should be returned in the response per page basis.
$offset = 0; // int | The starting index of the response items, i.e. where the response should start listing the returned items.

try {
    $result = $apiInstance->listUnspentTransactionOutputsByAddress($blockchain, $network, $address, $context, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnifiedEndpointsApi->listUnspentTransactionOutputsByAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **address** | **string**| Represents the address that has unspend funds per which the result is returned. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 50]
 **offset** | **int**| The starting index of the response items, i.e. where the response should start listing the returned items. | [optional] [default to 0]

### Return type

[**\CryptoAPIs\Model\ListUnspentTransactionOutputsByAddressR**](../Model/ListUnspentTransactionOutputsByAddressR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

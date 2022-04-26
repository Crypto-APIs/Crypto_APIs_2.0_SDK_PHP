# CryptoAPIs\OmniLayerApi

All URIs are relative to https://rest.cryptoapis.io/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOmniTransactionDetailsByTransactionIDTxid()**](OmniLayerApi.md#getOmniTransactionDetailsByTransactionIDTxid) | **GET** /blockchain-data/{blockchain}/{network}/omni/transactions/{transactionId} | Get Omni Transaction Details By Transaction ID (Txid)
[**getUnconfirmedOmniTransactionByTransactionIDTxid()**](OmniLayerApi.md#getUnconfirmedOmniTransactionByTransactionIDTxid) | **GET** /blockchain-data/{blockchain}/{network}/omni/transactions-unconfirmed/{transactionId} | Get Unconfirmed Omni Transaction By Transaction ID (Txid)
[**listOmniTokensByAddress()**](OmniLayerApi.md#listOmniTokensByAddress) | **GET** /blockchain-data/{blockchain}/{network}/omni/addresses/{address} | List Omni Tokens By Address
[**listOmniTransactionsByAddress()**](OmniLayerApi.md#listOmniTransactionsByAddress) | **GET** /blockchain-data/{blockchain}/{network}/omni/addresses/{address}/transactions | List Omni Transactions By Address
[**listOmniTransactionsByBlockHash()**](OmniLayerApi.md#listOmniTransactionsByBlockHash) | **GET** /blockchain-data/{blockchain}/{network}/omni/blocks/hash/{blockHash}/transactions | List Omni Transactions By Block Hash
[**listOmniTransactionsByBlockHeight()**](OmniLayerApi.md#listOmniTransactionsByBlockHeight) | **GET** /blockchain-data/{blockchain}/{network}/omni/blocks/height/{blockHeight}/transactions | List Omni Transactions By Block Height
[**listUnconfirmedOmniTransactionsByAddress()**](OmniLayerApi.md#listUnconfirmedOmniTransactionsByAddress) | **GET** /blockchain-data/{blockchain}/{network}/omni/address-transactions-unconfirmed/{address} | List Unconfirmed Omni Transactions By Address
[**listUnconfirmedOmniTransactionsByPropertyID()**](OmniLayerApi.md#listUnconfirmedOmniTransactionsByPropertyID) | **GET** /blockchain-data/{blockchain}/{network}/omni/properties/{propertyId}/transactions | List Unconfirmed Omni Transactions By Property ID


## `getOmniTransactionDetailsByTransactionIDTxid()`

```php
getOmniTransactionDetailsByTransactionIDTxid($network, $blockchain, $transaction_id, $context): \CryptoAPIs\Model\GetOmniTransactionDetailsByTransactionIDTxidR
```

Get Omni Transaction Details By Transaction ID (Txid)

Through this endpoint customers can obtain details about an Omni transaction by the transaction's unique identifier. The transaction can return information such as hash, height, time of creation in Unix timestamp, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\OmniLayerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$transaction_id = d237ff4a681617b767bf22c4e1e8f5115b95c8c168d6cf53bbdec68529f91ecb; // string | Represents the unique identifier of a transaction, i.e. it could be `transactionId` in UTXO-based protocols like Bitcoin, and transaction `hash` in Ethereum blockchain.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->getOmniTransactionDetailsByTransactionIDTxid($network, $blockchain, $transaction_id, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmniLayerApi->getOmniTransactionDetailsByTransactionIDTxid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **transaction_id** | **string**| Represents the unique identifier of a transaction, i.e. it could be &#x60;transactionId&#x60; in UTXO-based protocols like Bitcoin, and transaction &#x60;hash&#x60; in Ethereum blockchain. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]

### Return type

[**\CryptoAPIs\Model\GetOmniTransactionDetailsByTransactionIDTxidR**](../Model/GetOmniTransactionDetailsByTransactionIDTxidR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUnconfirmedOmniTransactionByTransactionIDTxid()`

```php
getUnconfirmedOmniTransactionByTransactionIDTxid($network, $blockchain, $transaction_id, $context): \CryptoAPIs\Model\GetUnconfirmedOmniTransactionByTransactionIDTxidR
```

Get Unconfirmed Omni Transaction By Transaction ID (Txid)

Through this endpoint customers can obtain information on unconfirmed Omni transactions by an attribute `transactionId`. The transaction can have information such as hash, height, time of creation in Unix timestamp, etc.    Unconfirmed transactions are usually put in the Mempool and await verification so that they can be added to a block.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\OmniLayerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$transaction_id = 92f17d3d16a1baf7de570a86179cc263cb9866c66778feec2dce111430f41c08; // string | Represents the unique identifier of a transaction, i.e. it could be `transactionId` in UTXO-based protocols like Bitcoin, and transaction `hash` in Ethereum blockchain.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->getUnconfirmedOmniTransactionByTransactionIDTxid($network, $blockchain, $transaction_id, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmniLayerApi->getUnconfirmedOmniTransactionByTransactionIDTxid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **transaction_id** | **string**| Represents the unique identifier of a transaction, i.e. it could be &#x60;transactionId&#x60; in UTXO-based protocols like Bitcoin, and transaction &#x60;hash&#x60; in Ethereum blockchain. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]

### Return type

[**\CryptoAPIs\Model\GetUnconfirmedOmniTransactionByTransactionIDTxidR**](../Model/GetUnconfirmedOmniTransactionByTransactionIDTxidR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOmniTokensByAddress()`

```php
listOmniTokensByAddress($network, $blockchain, $address, $context): \CryptoAPIs\Model\ListOmniTokensByAddressR
```

List Omni Tokens By Address

Through this endpoint the customer can receive basic information about a given Omni address based on confirmed/synced blocks only. In the case where there are any incoming or outgoing **unconfirmed** transactions for the specific address, they **will not** be counted or calculated here.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\OmniLayerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$address = mi7iSsKcvyFYNsiYdDZqJmH75RmoHomwmo; // string | Represents the public address, which is a compressed and shortened form of a public key.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->listOmniTokensByAddress($network, $blockchain, $address, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmniLayerApi->listOmniTokensByAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **address** | **string**| Represents the public address, which is a compressed and shortened form of a public key. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]

### Return type

[**\CryptoAPIs\Model\ListOmniTokensByAddressR**](../Model/ListOmniTokensByAddressR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOmniTransactionsByAddress()`

```php
listOmniTransactionsByAddress($network, $blockchain, $address, $context, $limit, $offset): \CryptoAPIs\Model\ListOmniTransactionsByAddressR
```

List Omni Transactions By Address

This endpoint will list Omni transactions by an attribute `address`. The transactions listed will detail additional information such as hash, height, time of creation in Unix timestamp, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\OmniLayerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$address = mi7iSsKcvyFYNsiYdDZqJmH75RmoHomwmo; // string | Represents the public address, which is a compressed and shortened form of a public key.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$limit = 50; // int | Defines how many items should be returned in the response per page basis.
$offset = 0; // int | The starting index of the response items, i.e. where the response should start listing the returned items.

try {
    $result = $apiInstance->listOmniTransactionsByAddress($network, $blockchain, $address, $context, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmniLayerApi->listOmniTransactionsByAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **address** | **string**| Represents the public address, which is a compressed and shortened form of a public key. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 50]
 **offset** | **int**| The starting index of the response items, i.e. where the response should start listing the returned items. | [optional] [default to 0]

### Return type

[**\CryptoAPIs\Model\ListOmniTransactionsByAddressR**](../Model/ListOmniTransactionsByAddressR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOmniTransactionsByBlockHash()`

```php
listOmniTransactionsByBlockHash($network, $blockchain, $block_hash, $context, $limit, $offset): \CryptoAPIs\Model\ListOmniTransactionsByBlockHashR
```

List Omni Transactions By Block Hash

This endpoint will list Omni transactions by an attribute `transactionHash`. The transactions listed will detail additional information such as addresses, height, time of creation in Unix timestamp, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\OmniLayerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$block_hash = 000000000000001f50c9d33d122562daa7fc9582df0b415e626216c37d015818; // string | Represents the hash of the block, which is its unique identifier. It represents a cryptographic digital fingerprint made by hashing the block header twice through the SHA256 algorithm.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$limit = 50; // int | Defines how many items should be returned in the response per page basis.
$offset = 0; // int | The starting index of the response items, i.e. where the response should start listing the returned items.

try {
    $result = $apiInstance->listOmniTransactionsByBlockHash($network, $blockchain, $block_hash, $context, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmniLayerApi->listOmniTransactionsByBlockHash: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **block_hash** | **string**| Represents the hash of the block, which is its unique identifier. It represents a cryptographic digital fingerprint made by hashing the block header twice through the SHA256 algorithm. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 50]
 **offset** | **int**| The starting index of the response items, i.e. where the response should start listing the returned items. | [optional] [default to 0]

### Return type

[**\CryptoAPIs\Model\ListOmniTransactionsByBlockHashR**](../Model/ListOmniTransactionsByBlockHashR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOmniTransactionsByBlockHeight()`

```php
listOmniTransactionsByBlockHeight($network, $blockchain, $block_height, $context, $limit, $offset): \CryptoAPIs\Model\ListOmniTransactionsByBlockHeightR
```

List Omni Transactions By Block Height

This endpoint will list Omni transactions by an attribute `blockHeight`. The transactions listed will detail additional information such as hash, addresses, time of creation in Unix timestamp, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\OmniLayerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$block_height = 1941222; // string | Represents the number of blocks in the blockchain preceding this specific block. Block numbers have no gaps. A blockchain usually starts with block 0 called the \"Genesis block\".
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$limit = 50; // int | Defines how many items should be returned in the response per page basis.
$offset = 0; // int | The starting index of the response items, i.e. where the response should start listing the returned items.

try {
    $result = $apiInstance->listOmniTransactionsByBlockHeight($network, $blockchain, $block_height, $context, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmniLayerApi->listOmniTransactionsByBlockHeight: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **block_height** | **string**| Represents the number of blocks in the blockchain preceding this specific block. Block numbers have no gaps. A blockchain usually starts with block 0 called the \&quot;Genesis block\&quot;. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 50]
 **offset** | **int**| The starting index of the response items, i.e. where the response should start listing the returned items. | [optional] [default to 0]

### Return type

[**\CryptoAPIs\Model\ListOmniTransactionsByBlockHeightR**](../Model/ListOmniTransactionsByBlockHeightR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUnconfirmedOmniTransactionsByAddress()`

```php
listUnconfirmedOmniTransactionsByAddress($network, $blockchain, $address, $context, $limit, $offset): \CryptoAPIs\Model\ListUnconfirmedOmniTransactionsByAddressR
```

List Unconfirmed Omni Transactions By Address

This endpoint will list unconfirmed Omni transactions by an attribute `address`. The transactions listed will detail additional information such as hash, height, time of creation in Unix timestamp, etc.    Unconfirmed transactions are usually put in the Mempool and await verification so that they can be added to a block.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\OmniLayerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$address = mi7iSsKcvyFYNsiYdDZqJmH75RmoHomwmo; // string | Represents the public address, which is a compressed and shortened form of a public key.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$limit = 50; // int | Defines how many items should be returned in the response per page basis.
$offset = 0; // int | The starting index of the response items, i.e. where the response should start listing the returned items.

try {
    $result = $apiInstance->listUnconfirmedOmniTransactionsByAddress($network, $blockchain, $address, $context, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmniLayerApi->listUnconfirmedOmniTransactionsByAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **address** | **string**| Represents the public address, which is a compressed and shortened form of a public key. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 50]
 **offset** | **int**| The starting index of the response items, i.e. where the response should start listing the returned items. | [optional] [default to 0]

### Return type

[**\CryptoAPIs\Model\ListUnconfirmedOmniTransactionsByAddressR**](../Model/ListUnconfirmedOmniTransactionsByAddressR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUnconfirmedOmniTransactionsByPropertyID()`

```php
listUnconfirmedOmniTransactionsByPropertyID($network, $blockchain, $property_id, $context, $limit, $offset): \CryptoAPIs\Model\ListUnconfirmedOmniTransactionsByPropertyIDR
```

List Unconfirmed Omni Transactions By Property ID

This endpoint will list unconfirmed Omni transactions by an attribute `propertyId`. The transactions listed will detail additional information such as hash, height, time of creation in Unix timestamp, etc.    Unconfirmed transactions are usually put in the Mempool and await verification so that they can be added to a block.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\OmniLayerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$property_id = 2; // string | Represents the identifier of the tokens to send.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$limit = 50; // int | Defines how many items should be returned in the response per page basis.
$offset = 0; // int | The starting index of the response items, i.e. where the response should start listing the returned items.

try {
    $result = $apiInstance->listUnconfirmedOmniTransactionsByPropertyID($network, $blockchain, $property_id, $context, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmniLayerApi->listUnconfirmedOmniTransactionsByPropertyID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **property_id** | **string**| Represents the identifier of the tokens to send. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 50]
 **offset** | **int**| The starting index of the response items, i.e. where the response should start listing the returned items. | [optional] [default to 0]

### Return type

[**\CryptoAPIs\Model\ListUnconfirmedOmniTransactionsByPropertyIDR**](../Model/ListUnconfirmedOmniTransactionsByPropertyIDR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

# CryptoAPIs\FeaturesApi

All URIs are relative to https://rest.cryptoapis.io/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**broadcastLocallySignedTransaction()**](FeaturesApi.md#broadcastLocallySignedTransaction) | **POST** /blockchain-tools/{blockchain}/{network}/transactions/broadcast | Broadcast Locally Signed Transaction
[**decodeRawTransactionHex()**](FeaturesApi.md#decodeRawTransactionHex) | **POST** /blockchain-tools/{blockchain}/{network}/decode-raw-transaction | Decode Raw Transaction Hex
[**decodeXAddress()**](FeaturesApi.md#decodeXAddress) | **GET** /blockchain-tools/{blockchain}/{network}/decode-x-address/{xAddress} | Decode X-Address
[**deriveHDWalletXPubYPubZPubChangeOrReceivingAddresses()**](FeaturesApi.md#deriveHDWalletXPubYPubZPubChangeOrReceivingAddresses) | **GET** /blockchain-tools/{blockchain}/{network}/hd/{extendedPublicKey}/addresses/derive-address | Derive HD Wallet (xPub, yPub, zPub) Change Or Receiving Addresses
[**encodeXAddress()**](FeaturesApi.md#encodeXAddress) | **GET** /blockchain-tools/{blockchain}/{network}/encode-x-address/{classicAddress}/{addressTag} | Encode X-Address
[**estimateGasLimit()**](FeaturesApi.md#estimateGasLimit) | **POST** /blockchain-tools/{blockchain}/{network}/gas-limit | Estimate Gas Limit
[**estimateTokenGasLimit()**](FeaturesApi.md#estimateTokenGasLimit) | **POST** /blockchain-tools/{blockchain}/{network}/gas-limit/contract | Estimate Token Gas Limit
[**getEIP1559FeeRecommendations()**](FeaturesApi.md#getEIP1559FeeRecommendations) | **GET** /blockchain-tools/{blockchain}/{network}/fees/eip1559 | Get EIP 1559 Fee Recommendations
[**validateAddress()**](FeaturesApi.md#validateAddress) | **POST** /blockchain-tools/{blockchain}/{network}/addresses/validate | Validate Address


## `broadcastLocallySignedTransaction()`

```php
broadcastLocallySignedTransaction($blockchain, $network, $context, $broadcast_locally_signed_transaction_rb): \CryptoAPIs\Model\BroadcastLocallySignedTransactionR
```

Broadcast Locally Signed Transaction

Through this endpoint customers can broadcast transactions that have been already signed locally. Instead of using a node for broadcasting a signed transaction users can use this endpoint. We then keep the user posted about the status by sending you a callback with a success or failure status.    {warning}This can be prepared and signed **only** locally, not through the API. We can provide support only for the process of broadcasting.{/warning}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\FeaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$broadcast_locally_signed_transaction_rb = new \CryptoAPIs\Model\BroadcastLocallySignedTransactionRB(); // \CryptoAPIs\Model\BroadcastLocallySignedTransactionRB

try {
    $result = $apiInstance->broadcastLocallySignedTransaction($blockchain, $network, $context, $broadcast_locally_signed_transaction_rb);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->broadcastLocallySignedTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **broadcast_locally_signed_transaction_rb** | [**\CryptoAPIs\Model\BroadcastLocallySignedTransactionRB**](../Model/BroadcastLocallySignedTransactionRB.md)|  | [optional]

### Return type

[**\CryptoAPIs\Model\BroadcastLocallySignedTransactionR**](../Model/BroadcastLocallySignedTransactionR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `decodeRawTransactionHex()`

```php
decodeRawTransactionHex($blockchain, $network, $context, $decode_raw_transaction_hex_rb): \CryptoAPIs\Model\DecodeRawTransactionHexR
```

Decode Raw Transaction Hex

Through this endpoint customers can decode a raw transaction hex and see the decoded transactions' details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\FeaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$decode_raw_transaction_hex_rb = new \CryptoAPIs\Model\DecodeRawTransactionHexRB(); // \CryptoAPIs\Model\DecodeRawTransactionHexRB

try {
    $result = $apiInstance->decodeRawTransactionHex($blockchain, $network, $context, $decode_raw_transaction_hex_rb);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->decodeRawTransactionHex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **decode_raw_transaction_hex_rb** | [**\CryptoAPIs\Model\DecodeRawTransactionHexRB**](../Model/DecodeRawTransactionHexRB.md)|  | [optional]

### Return type

[**\CryptoAPIs\Model\DecodeRawTransactionHexR**](../Model/DecodeRawTransactionHexR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `decodeXAddress()`

```php
decodeXAddress($blockchain, $network, $x_address, $context): \CryptoAPIs\Model\DecodeXAddressR
```

Decode X-Address

Through this endpoint, customers can decode an encoded XRP address with tag, by providing the specific x-address. The response includes the decoded classic address and the tag.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\FeaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = xrp; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$x_address = TVTMSyg6nRscAm2JtRd8hnpF9nD21CgZx6ibb9iy3EWHotV; // string | Represents the encoded classic address with its destination tag.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->decodeXAddress($blockchain, $network, $x_address, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->decodeXAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **x_address** | **string**| Represents the encoded classic address with its destination tag. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]

### Return type

[**\CryptoAPIs\Model\DecodeXAddressR**](../Model/DecodeXAddressR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deriveHDWalletXPubYPubZPubChangeOrReceivingAddresses()`

```php
deriveHDWalletXPubYPubZPubChangeOrReceivingAddresses($blockchain, $extended_public_key, $network, $context, $address_format, $addresses_count, $is_change, $start_index): \CryptoAPIs\Model\DeriveHDWalletXPubYPubZPubChangeOrReceivingAddressesR
```

Derive HD Wallet (xPub, yPub, zPub) Change Or Receiving Addresses

Through this endpoint, customers can derive up to 10 addresses - both change and receive, from a certain HD Wallet (xPub, yPub, zPub), by providing an extended public key. By default the system creates a receiving/deposit address, unless the isChange attribute is set to 'true'. In that case the system derives a 'change' address. The change address can be derived only for UTXO based blockchains, for all the rest, this endpoint always creates a deposit/receiving address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\FeaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$extended_public_key = upub5Ei6bRNneqozk6smK7dvtXHC5PjUyEL4ynCfMKvjznLcXi9DQaikETzQjHvJC43XexMvQs64jxB1njMjCHpRZ4xQWAmv3ge9cVtjfsHmbvQ; // string | Defines the account extended publicly known key which is used to derive all child public keys.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$address_format = p2sh; // string | Represents the format of the address.
$addresses_count = 2; // int | Represents the addresses count.
$is_change = true; // bool | Defines if the specific address is a change or deposit address. If the value is True - it is a change address, if it is False - it is a Deposit address.
$start_index = 3; // int | The starting index of the response items, i.e. where the response should start listing the returned items.

try {
    $result = $apiInstance->deriveHDWalletXPubYPubZPubChangeOrReceivingAddresses($blockchain, $extended_public_key, $network, $context, $address_format, $addresses_count, $is_change, $start_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->deriveHDWalletXPubYPubZPubChangeOrReceivingAddresses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **extended_public_key** | **string**| Defines the account extended publicly known key which is used to derive all child public keys. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **address_format** | **string**| Represents the format of the address. | [optional]
 **addresses_count** | **int**| Represents the addresses count. | [optional]
 **is_change** | **bool**| Defines if the specific address is a change or deposit address. If the value is True - it is a change address, if it is False - it is a Deposit address. | [optional]
 **start_index** | **int**| The starting index of the response items, i.e. where the response should start listing the returned items. | [optional]

### Return type

[**\CryptoAPIs\Model\DeriveHDWalletXPubYPubZPubChangeOrReceivingAddressesR**](../Model/DeriveHDWalletXPubYPubZPubChangeOrReceivingAddressesR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `encodeXAddress()`

```php
encodeXAddress($address_tag, $blockchain, $classic_address, $network, $context): \CryptoAPIs\Model\EncodeXAddressR
```

Encode X-Address

Through this endpoint, customers can encode an encoded XRP address with tag, by providing the specific x-address. The response includes the encoded classic address and the tag.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\FeaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_tag = 3999472835; // int | Defines a specific Tag that is an additional XRP address feature. It helps identifying a transaction recipient beyond a wallet address.
$blockchain = xrp; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$classic_address = rA9bXGJcXvZKaWofrRphdJsBWzhyCfH3z; // string | Represents the public address, which is a compressed and shortened form of a public key.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->encodeXAddress($address_tag, $blockchain, $classic_address, $network, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->encodeXAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_tag** | **int**| Defines a specific Tag that is an additional XRP address feature. It helps identifying a transaction recipient beyond a wallet address. |
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **classic_address** | **string**| Represents the public address, which is a compressed and shortened form of a public key. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]

### Return type

[**\CryptoAPIs\Model\EncodeXAddressR**](../Model/EncodeXAddressR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `estimateGasLimit()`

```php
estimateGasLimit($blockchain, $network, $context, $estimate_gas_limit_rb): \CryptoAPIs\Model\EstimateGasLimitR
```

Estimate Gas Limit

This endpoint helps customer in estimating the gas limit needed for a transaction. It gives information for gas expenses when sending ether to contracts or making a transaction with additional data in it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\FeaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum.
$network = ropsten; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$estimate_gas_limit_rb = new \CryptoAPIs\Model\EstimateGasLimitRB(); // \CryptoAPIs\Model\EstimateGasLimitRB

try {
    $result = $apiInstance->estimateGasLimit($blockchain, $network, $context, $estimate_gas_limit_rb);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->estimateGasLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **estimate_gas_limit_rb** | [**\CryptoAPIs\Model\EstimateGasLimitRB**](../Model/EstimateGasLimitRB.md)|  | [optional]

### Return type

[**\CryptoAPIs\Model\EstimateGasLimitR**](../Model/EstimateGasLimitR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `estimateTokenGasLimit()`

```php
estimateTokenGasLimit($blockchain, $network, $context, $estimate_token_gas_limit_rb): \CryptoAPIs\Model\EstimateTokenGasLimitR
```

Estimate Token Gas Limit

This endpoint helps customer in estimating the Contract Gas Limit needed for a transaction. It gives information for gas expenses for a specific contract when sending ethers or making a transaction with additional data in it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\FeaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum.
$network = ropsten; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$estimate_token_gas_limit_rb = new \CryptoAPIs\Model\EstimateTokenGasLimitRB(); // \CryptoAPIs\Model\EstimateTokenGasLimitRB

try {
    $result = $apiInstance->estimateTokenGasLimit($blockchain, $network, $context, $estimate_token_gas_limit_rb);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->estimateTokenGasLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **estimate_token_gas_limit_rb** | [**\CryptoAPIs\Model\EstimateTokenGasLimitRB**](../Model/EstimateTokenGasLimitRB.md)|  | [optional]

### Return type

[**\CryptoAPIs\Model\EstimateTokenGasLimitR**](../Model/EstimateTokenGasLimitR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEIP1559FeeRecommendations()`

```php
getEIP1559FeeRecommendations($network, $blockchain, $context): \CryptoAPIs\Model\GetEIP1559FeeRecommendationsR
```

Get EIP 1559 Fee Recommendations

Through this endpoint customers can obtain fee recommendations specifically for EIP 1559.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\FeaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = ropsten; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->getEIP1559FeeRecommendations($network, $blockchain, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->getEIP1559FeeRecommendations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]

### Return type

[**\CryptoAPIs\Model\GetEIP1559FeeRecommendationsR**](../Model/GetEIP1559FeeRecommendationsR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateAddress()`

```php
validateAddress($blockchain, $network, $context, $validate_address_rb): \CryptoAPIs\Model\ValidateAddressR
```

Validate Address

This endpoint checks user public addresses whether they are valid or not.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\FeaturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$validate_address_rb = new \CryptoAPIs\Model\ValidateAddressRB(); // \CryptoAPIs\Model\ValidateAddressRB

try {
    $result = $apiInstance->validateAddress($blockchain, $network, $context, $validate_address_rb);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeaturesApi->validateAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **validate_address_rb** | [**\CryptoAPIs\Model\ValidateAddressRB**](../Model/ValidateAddressRB.md)|  | [optional]

### Return type

[**\CryptoAPIs\Model\ValidateAddressR**](../Model/ValidateAddressR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

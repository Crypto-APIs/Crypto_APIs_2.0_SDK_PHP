# CryptoAPIs\UTXOBasedApi

All URIs are relative to https://rest.cryptoapis.io/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listUnspentTransactionOutputsByAddress()**](UTXOBasedApi.md#listUnspentTransactionOutputsByAddress) | **GET** /blockchain-data/{blockchain}/{network}/addresses/{address}/unspent | List Unspent Transaction Outputs By Address


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


$apiInstance = new CryptoAPIs\Api\UTXOBasedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$address = 2MtzNEqm2D9jcbPJ5mW7Z3AUNwqt3afZH66; // string | Represents the public address, which is a compressed and shortened form of a public key.
$context = 'context_example'; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$limit = 50; // int | Defines how many items should be returned in the response per page basis.
$offset = 0; // int | The starting index of the response items, i.e. where the response should start listing the returned items.

try {
    $result = $apiInstance->listUnspentTransactionOutputsByAddress($blockchain, $network, $address, $context, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UTXOBasedApi->listUnspentTransactionOutputsByAddress: ', $e->getMessage(), PHP_EOL;
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

[**\CryptoAPIs\Model\ListUnspentTransactionOutputsByAddressR**](../Model/ListUnspentTransactionOutputsByAddressR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

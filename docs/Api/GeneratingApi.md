# CryptoAPIs\GeneratingApi

All URIs are relative to https://rest.cryptoapis.io/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateReceivingAddress()**](GeneratingApi.md#generateReceivingAddress) | **POST** /wallet-as-a-service/wallets/{walletId}/{blockchain}/{network}/addresses | Generate Receiving Address


## `generateReceivingAddress()`

```php
generateReceivingAddress($blockchain, $network, $wallet_id, $context, $generate_receiving_address_rb): \CryptoAPIs\Model\GenerateReceivingAddressR
```

Generate Receiving Address

Through this endpoint customers can generate a new Receiving/Deposit Addresses into their Wallet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\GeneratingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\", \"rinkeby\" are test networks.
$wallet_id = 60c9d9921c38030006675ff6; // string | Represents the unique ID of the specific Wallet.
$context = 'context_example'; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$generate_receiving_address_rb = new \CryptoAPIs\Model\GenerateReceivingAddressRB(); // \CryptoAPIs\Model\GenerateReceivingAddressRB

try {
    $result = $apiInstance->generateReceivingAddress($blockchain, $network, $wallet_id, $context, $generate_receiving_address_rb);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneratingApi->generateReceivingAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot;, \&quot;rinkeby\&quot; are test networks. |
 **wallet_id** | **string**| Represents the unique ID of the specific Wallet. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **generate_receiving_address_rb** | [**\CryptoAPIs\Model\GenerateReceivingAddressRB**](../Model/GenerateReceivingAddressRB.md)|  | [optional]

### Return type

[**\CryptoAPIs\Model\GenerateReceivingAddressR**](../Model/GenerateReceivingAddressR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

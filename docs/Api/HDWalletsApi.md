# CryptoAPIs\HDWalletsApi

All URIs are relative to https://rest.cryptoapis.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deriveAndSyncNewChangeAddresses()**](HDWalletsApi.md#deriveAndSyncNewChangeAddresses) | **POST** /blockchain-data/{blockchain}/{network}/hd/derive-sync-change | Derive And Sync New Change Addresses
[**deriveAndSyncNewReceivingAddresses()**](HDWalletsApi.md#deriveAndSyncNewReceivingAddresses) | **POST** /blockchain-data/{blockchain}/{network}/hd/derive-and-sync | Derive And Sync New Receiving Addresses
[**getHDWalletXPubYPubZPubAssets()**](HDWalletsApi.md#getHDWalletXPubYPubZPubAssets) | **GET** /blockchain-data/{blockchain}/{network}/hd/{extendedPublicKey}/assets | Get HD Wallet (xPub, yPub, zPub) Assets
[**getHDWalletXPubYPubZPubDetails()**](HDWalletsApi.md#getHDWalletXPubYPubZPubDetails) | **GET** /blockchain-data/{blockchain}/{network}/hd/{extendedPublicKey}/details | Get HD Wallet (xPub, yPub, zPub) Details
[**listHDWalletXPubYPubZPubTransactions()**](HDWalletsApi.md#listHDWalletXPubYPubZPubTransactions) | **GET** /blockchain-data/{blockchain}/{network}/hd/{extendedPublicKey}/transactions | List HD Wallet (xPub, yPub, zPub) Transactions
[**listHDWalletXPubYPubZPubUTXOs()**](HDWalletsApi.md#listHDWalletXPubYPubZPubUTXOs) | **GET** /blockchain-data/{blockchain}/{network}/hd/{extendedPublicKey}/utxos | List HD Wallet (xPub, yPub, zPub) UTXOs
[**listSyncedAddresses()**](HDWalletsApi.md#listSyncedAddresses) | **GET** /blockchain-data/{blockchain}/{network}/hd/{extendedPublicKey}/synced-addresses | List Synced Addresses
[**prepareAUTXOBasedTransactionFromHDWalletXPubYPubZPub()**](HDWalletsApi.md#prepareAUTXOBasedTransactionFromHDWalletXPubYPubZPub) | **POST** /blockchain-data/{blockchain}/{network}/transactions/prepare-utxo-transaction | Prepare A UTXO-Based Transaction From HD Wallet (xPub, yPub, zPub)
[**prepareAnAccountBasedTransactionFromHDWalletXPubYPubZPub()**](HDWalletsApi.md#prepareAnAccountBasedTransactionFromHDWalletXPubYPubZPub) | **POST** /blockchain-data/{blockchain}/{network}/transactions/prepare-account-based-transaction | Prepare An Account-Based Transaction From HD Wallet (xPub, yPub, zPub)
[**syncHDWalletXPubYPubZPub()**](HDWalletsApi.md#syncHDWalletXPubYPubZPub) | **POST** /blockchain-data/{blockchain}/{network}/hd/sync | Sync HD Wallet (xPub, yPub, zPub)
[**syncNewHDWalletXPubYPubZPub()**](HDWalletsApi.md#syncNewHDWalletXPubYPubZPub) | **POST** /blockchain-data/{blockchain}/{network}/hd/sync-new | Sync New HD Wallet (xPub, yPub, zPub)


## `deriveAndSyncNewChangeAddresses()`

```php
deriveAndSyncNewChangeAddresses($blockchain, $network, $context, $derive_and_sync_new_change_addresses_rb): \CryptoAPIs\Model\DeriveAndSyncNewChangeAddressesR
```

Derive And Sync New Change Addresses

Through this endpoint users can derive 100 change addresses, starting from the last index we have data for, which are then added to the xPub, subscribed for syncing, and start recording data. If no data is available, it will start from index 0.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\HDWalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$derive_and_sync_new_change_addresses_rb = new \CryptoAPIs\Model\DeriveAndSyncNewChangeAddressesRB(); // \CryptoAPIs\Model\DeriveAndSyncNewChangeAddressesRB

try {
    $result = $apiInstance->deriveAndSyncNewChangeAddresses($blockchain, $network, $context, $derive_and_sync_new_change_addresses_rb);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletsApi->deriveAndSyncNewChangeAddresses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **derive_and_sync_new_change_addresses_rb** | [**\CryptoAPIs\Model\DeriveAndSyncNewChangeAddressesRB**](../Model/DeriveAndSyncNewChangeAddressesRB.md)|  | [optional]

### Return type

[**\CryptoAPIs\Model\DeriveAndSyncNewChangeAddressesR**](../Model/DeriveAndSyncNewChangeAddressesR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deriveAndSyncNewReceivingAddresses()`

```php
deriveAndSyncNewReceivingAddresses($blockchain, $network, $context, $derive_and_sync_new_receiving_addresses_rb): \CryptoAPIs\Model\DeriveAndSyncNewReceivingAddressesR
```

Derive And Sync New Receiving Addresses

Through this endpoint users can derive 100 receiving addresses, starting from the last index we have data for, which are then added to the xPub, subscribed for syncing, and start recording data. If no data is available, it will start from index 0.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\HDWalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$derive_and_sync_new_receiving_addresses_rb = new \CryptoAPIs\Model\DeriveAndSyncNewReceivingAddressesRB(); // \CryptoAPIs\Model\DeriveAndSyncNewReceivingAddressesRB

try {
    $result = $apiInstance->deriveAndSyncNewReceivingAddresses($blockchain, $network, $context, $derive_and_sync_new_receiving_addresses_rb);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletsApi->deriveAndSyncNewReceivingAddresses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **derive_and_sync_new_receiving_addresses_rb** | [**\CryptoAPIs\Model\DeriveAndSyncNewReceivingAddressesRB**](../Model/DeriveAndSyncNewReceivingAddressesRB.md)|  | [optional]

### Return type

[**\CryptoAPIs\Model\DeriveAndSyncNewReceivingAddressesR**](../Model/DeriveAndSyncNewReceivingAddressesR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHDWalletXPubYPubZPubAssets()`

```php
getHDWalletXPubYPubZPubAssets($blockchain, $extended_public_key, $network, $context, $derivation): \CryptoAPIs\Model\GetHDWalletXPubYPubZPubAssetsR
```

Get HD Wallet (xPub, yPub, zPub) Assets

This endpoint will return details on assets we support for a specified from the customer extended public key (xPub). These could be cryptocurrencies, fungible or non-fungible (NFT) tokens. Each asset has a unique identifier - assetId, and a unique symbol in the form of a string, e.g. \"USDT\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\HDWalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$extended_public_key = xpub68SyZPMPpZUy9QB2fk2J28b5Rwd6jeWKind3K8oziZuVcL7wWZiXZNCPKuh42ejSpTLYngQ9Gbzj9a1Ap2QQmoFs2sMSbUvkEr8D3GW7MrR; // string | Defines the account extended publicly known key which is used to derive all child public keys.
$network = ropsten; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$derivation = account; // string | The way how the HD walled derives, for example when the type is ACCOUNT, it derives change and receive addresses while when the type is BIP32 it derives directly.

try {
    $result = $apiInstance->getHDWalletXPubYPubZPubAssets($blockchain, $extended_public_key, $network, $context, $derivation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletsApi->getHDWalletXPubYPubZPubAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **extended_public_key** | **string**| Defines the account extended publicly known key which is used to derive all child public keys. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **derivation** | **string**| The way how the HD walled derives, for example when the type is ACCOUNT, it derives change and receive addresses while when the type is BIP32 it derives directly. | [optional]

### Return type

[**\CryptoAPIs\Model\GetHDWalletXPubYPubZPubAssetsR**](../Model/GetHDWalletXPubYPubZPubAssetsR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHDWalletXPubYPubZPubDetails()`

```php
getHDWalletXPubYPubZPubDetails($blockchain, $extended_public_key, $network, $context, $derivation): \CryptoAPIs\Model\GetHDWalletXPubYPubZPubDetailsR
```

Get HD Wallet (xPub, yPub, zPub) Details

HD wallet details is useful endpoint to get the most important data about HD wallet without the need to do a lot of calculations, once the HD Wallet is synced using Sync endpoint we keep it up to date and we calculate these details in advance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\HDWalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$extended_public_key = upub5Ei6bRNneqozk6smK7dvtXHC5PjUyEL4ynCfMKvjznLcXi9DQaikETzQjHvJC43XexMvQs64jxB1njMjCHpRZ4xQWAmv3ge9cVtjfsHmbvQ; // string | Defines the account extended publicly known key which is used to derive all child public keys.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$derivation = 'derivation_example'; // string | The way how the HD walled derives, for example when the type is ACCOUNT, it derives change and receive addresses while when the type is BIP32 it derives directly.

try {
    $result = $apiInstance->getHDWalletXPubYPubZPubDetails($blockchain, $extended_public_key, $network, $context, $derivation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletsApi->getHDWalletXPubYPubZPubDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **extended_public_key** | **string**| Defines the account extended publicly known key which is used to derive all child public keys. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **derivation** | **string**| The way how the HD walled derives, for example when the type is ACCOUNT, it derives change and receive addresses while when the type is BIP32 it derives directly. | [optional]

### Return type

[**\CryptoAPIs\Model\GetHDWalletXPubYPubZPubDetailsR**](../Model/GetHDWalletXPubYPubZPubDetailsR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listHDWalletXPubYPubZPubTransactions()`

```php
listHDWalletXPubYPubZPubTransactions($blockchain, $extended_public_key, $network, $context, $derivation, $limit, $offset): \CryptoAPIs\Model\ListHDWalletXPubYPubZPubTransactionsR
```

List HD Wallet (xPub, yPub, zPub) Transactions

This endpoint will list HD Wallet transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\HDWalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain.
$extended_public_key = tpubD9GMECjiZHCaF9NHSMAeMbQMXnM7CviEJZsYBuztVwsUjPHWjxewWAUXWV2UExaAtoEvQGXDBmVWo6ZHGtj6TsH6Pop7D9DskQwGHA1gu1w; // string | Defines the master public key (xPub) of the account.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$derivation = 'derivation_example'; // string | The way how the HD walled derives, for example when the type is ACCOUNT, it derives change and receive addresses while when the type is BIP32 it derives directly.
$limit = 50; // int | Defines how many items should be returned in the response per page basis.
$offset = 0; // int | The starting index of the response items, i.e. where the response should start listing the returned items.

try {
    $result = $apiInstance->listHDWalletXPubYPubZPubTransactions($blockchain, $extended_public_key, $network, $context, $derivation, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletsApi->listHDWalletXPubYPubZPubTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain. |
 **extended_public_key** | **string**| Defines the master public key (xPub) of the account. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **derivation** | **string**| The way how the HD walled derives, for example when the type is ACCOUNT, it derives change and receive addresses while when the type is BIP32 it derives directly. | [optional]
 **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 50]
 **offset** | **int**| The starting index of the response items, i.e. where the response should start listing the returned items. | [optional] [default to 0]

### Return type

[**\CryptoAPIs\Model\ListHDWalletXPubYPubZPubTransactionsR**](../Model/ListHDWalletXPubYPubZPubTransactionsR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listHDWalletXPubYPubZPubUTXOs()`

```php
listHDWalletXPubYPubZPubUTXOs($blockchain, $extended_public_key, $network, $context, $derivation, $limit, $offset): \CryptoAPIs\Model\ListHDWalletXPubYPubZPubUTXOsR
```

List HD Wallet (xPub, yPub, zPub) UTXOs

Through this endpoint you can list HD wallet's UTXOs (Unspent Transaction Outputs) by providing extended public key of an already synced HD wallet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\HDWalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$extended_public_key = tpubDDCs6jf3Tg8VTts6EBCNpibVanPQpSkmYRLAXVvuhcuC6ZcbYtEizqERj8D4TBukuvjNSjtjEbKYdtFuRG5WuisrirZG9m5L8wUvf4bHhgQ; // string | Defines the account extended publicly known key which is used to derive all child public keys.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$derivation = account; // string | The way how the HD walled derives, for example when the type is ACCOUNT, it derives change and receive addresses while when the type is BIP32 it derives directly.
$limit = 50; // int | Defines how many items should be returned in the response per page basis.
$offset = 0; // int | The starting index of the response items, i.e. where the response should start listing the returned items.

try {
    $result = $apiInstance->listHDWalletXPubYPubZPubUTXOs($blockchain, $extended_public_key, $network, $context, $derivation, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletsApi->listHDWalletXPubYPubZPubUTXOs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **extended_public_key** | **string**| Defines the account extended publicly known key which is used to derive all child public keys. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **derivation** | **string**| The way how the HD walled derives, for example when the type is ACCOUNT, it derives change and receive addresses while when the type is BIP32 it derives directly. | [optional]
 **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 50]
 **offset** | **int**| The starting index of the response items, i.e. where the response should start listing the returned items. | [optional] [default to 0]

### Return type

[**\CryptoAPIs\Model\ListHDWalletXPubYPubZPubUTXOsR**](../Model/ListHDWalletXPubYPubZPubUTXOsR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSyncedAddresses()`

```php
listSyncedAddresses($blockchain, $extended_public_key, $network, $context, $address_format, $is_change_address, $limit, $offset): \CryptoAPIs\Model\ListSyncedAddressesR
```

List Synced Addresses

Through this endpoint users can list all addresses that Crypto APIs has synced for a specific xPub. This includes previous and current/new xPubs, what addresses we’ve synced for them, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\HDWalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$extended_public_key = tpubD9GMECjiZHCaF9NHSMAeMbQMXnM7CviEJZsYBuztVwsUjPHWjxewWAUXWV2UExaAtoEvQGXDBmVWo6ZHGtj6TsH6Pop7D9DskQwGHA1gu1w; // string | Defines the account extended publicly known key which is used to derive all child public keys.
$network = ropsten; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$address_format = standard; // string | Defines the address format value.
$is_change_address = false; // bool | Defines if the address is change addres or not.
$limit = 50; // int | Defines how many items should be returned in the response per page basis.
$offset = 0; // int | The starting index of the response items, i.e. where the response should start listing the returned items.

try {
    $result = $apiInstance->listSyncedAddresses($blockchain, $extended_public_key, $network, $context, $address_format, $is_change_address, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletsApi->listSyncedAddresses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **extended_public_key** | **string**| Defines the account extended publicly known key which is used to derive all child public keys. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **address_format** | **string**| Defines the address format value. | [optional]
 **is_change_address** | **bool**| Defines if the address is change addres or not. | [optional] [default to true]
 **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 50]
 **offset** | **int**| The starting index of the response items, i.e. where the response should start listing the returned items. | [optional] [default to 0]

### Return type

[**\CryptoAPIs\Model\ListSyncedAddressesR**](../Model/ListSyncedAddressesR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `prepareAUTXOBasedTransactionFromHDWalletXPubYPubZPub()`

```php
prepareAUTXOBasedTransactionFromHDWalletXPubYPubZPub($blockchain, $network, $context, $prepare_autxo_based_transaction_from_hd_wallet_x_pub_y_pub_z_pub_rb): \CryptoAPIs\Model\PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubR
```

Prepare A UTXO-Based Transaction From HD Wallet (xPub, yPub, zPub)

Through the “Prepare a UTXO-based transaction from xPub” endpoint users can prepare a transaction for signing from all synced with Crypto APIs addresses for the specific xPub. This is based on the `selectionStrategy` and the addresses’ balances. In the case a user has an address not synced with Crypto APIs, it will not be included. This endpoint applies to all supported UTXO-based blockchain protocols, e.g. Bitcoin, Litecoin, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\HDWalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string
$network = testnet; // string
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$prepare_autxo_based_transaction_from_hd_wallet_x_pub_y_pub_z_pub_rb = new \CryptoAPIs\Model\PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubRB(); // \CryptoAPIs\Model\PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubRB

try {
    $result = $apiInstance->prepareAUTXOBasedTransactionFromHDWalletXPubYPubZPub($blockchain, $network, $context, $prepare_autxo_based_transaction_from_hd_wallet_x_pub_y_pub_z_pub_rb);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletsApi->prepareAUTXOBasedTransactionFromHDWalletXPubYPubZPub: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**|  |
 **network** | **string**|  |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **prepare_autxo_based_transaction_from_hd_wallet_x_pub_y_pub_z_pub_rb** | [**\CryptoAPIs\Model\PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubRB**](../Model/PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubRB.md)|  | [optional]

### Return type

[**\CryptoAPIs\Model\PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubR**](../Model/PrepareAUTXOBasedTransactionFromHDWalletXPubYPubZPubR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `prepareAnAccountBasedTransactionFromHDWalletXPubYPubZPub()`

```php
prepareAnAccountBasedTransactionFromHDWalletXPubYPubZPub($blockchain, $network, $context, $prepare_an_account_based_transaction_from_hd_wallet_x_pub_y_pub_z_pub_rb): \CryptoAPIs\Model\PrepareAnAccountBasedTransactionFromHDWalletXPubYPubZPubR
```

Prepare An Account-Based Transaction From HD Wallet (xPub, yPub, zPub)

Through the “Prepare an account-based transaction from xPub” endpoint users can prepare a transaction for signing from a synced with Crypto APIs address from the specific xPub. This endpoint applies to all supported account-based blockchain protocols, e.g. Ethereum, BSC, etc

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\HDWalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = ethereum; // string
$network = ropsten; // string
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$prepare_an_account_based_transaction_from_hd_wallet_x_pub_y_pub_z_pub_rb = new \CryptoAPIs\Model\PrepareAnAccountBasedTransactionFromHDWalletXPubYPubZPubRB(); // \CryptoAPIs\Model\PrepareAnAccountBasedTransactionFromHDWalletXPubYPubZPubRB

try {
    $result = $apiInstance->prepareAnAccountBasedTransactionFromHDWalletXPubYPubZPub($blockchain, $network, $context, $prepare_an_account_based_transaction_from_hd_wallet_x_pub_y_pub_z_pub_rb);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletsApi->prepareAnAccountBasedTransactionFromHDWalletXPubYPubZPub: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**|  |
 **network** | **string**|  |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **prepare_an_account_based_transaction_from_hd_wallet_x_pub_y_pub_z_pub_rb** | [**\CryptoAPIs\Model\PrepareAnAccountBasedTransactionFromHDWalletXPubYPubZPubRB**](../Model/PrepareAnAccountBasedTransactionFromHDWalletXPubYPubZPubRB.md)|  | [optional]

### Return type

[**\CryptoAPIs\Model\PrepareAnAccountBasedTransactionFromHDWalletXPubYPubZPubR**](../Model/PrepareAnAccountBasedTransactionFromHDWalletXPubYPubZPubR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `syncHDWalletXPubYPubZPub()`

```php
syncHDWalletXPubYPubZPub($blockchain, $network, $context, $sync_hd_wallet_x_pub_y_pub_z_pub_rb): \CryptoAPIs\Model\SyncHDWalletXPubYPubZPubR
```

Sync HD Wallet (xPub, yPub, zPub)

HD wallets usually have a lot of addresses and transactions, getting the data on demand is a heavy operation. That's why we have created this feature, to be able to get HD wallet details or transactions this HD wallet must be synced first. In addition to the initial sync we keep updating the synced HD wallets all the time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\HDWalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$sync_hd_wallet_x_pub_y_pub_z_pub_rb = new \CryptoAPIs\Model\SyncHDWalletXPubYPubZPubRB(); // \CryptoAPIs\Model\SyncHDWalletXPubYPubZPubRB

try {
    $result = $apiInstance->syncHDWalletXPubYPubZPub($blockchain, $network, $context, $sync_hd_wallet_x_pub_y_pub_z_pub_rb);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletsApi->syncHDWalletXPubYPubZPub: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **sync_hd_wallet_x_pub_y_pub_z_pub_rb** | [**\CryptoAPIs\Model\SyncHDWalletXPubYPubZPubRB**](../Model/SyncHDWalletXPubYPubZPubRB.md)|  | [optional]

### Return type

[**\CryptoAPIs\Model\SyncHDWalletXPubYPubZPubR**](../Model/SyncHDWalletXPubYPubZPubR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `syncNewHDWalletXPubYPubZPub()`

```php
syncNewHDWalletXPubYPubZPub($blockchain, $network, $context, $sync_new_hd_wallet_x_pub_y_pub_z_pub_rb): \CryptoAPIs\Model\SyncNewHDWalletXPubYPubZPubR
```

Sync New HD Wallet (xPub, yPub, zPub)

Through this endpoint users can add a brand new xPub to the Crypto APIs system to be ready for deriving. Unlike our other similar endpoint “Sync HD Wallet (xPub, yPub, zPub)”, this endpoint does not create new addresses nor syncs old data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\HDWalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = bitcoin; // string | Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc.
$network = testnet; // string | Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \"mainnet\" is the live network with actual data while networks like \"testnet\", \"ropsten\" are test networks.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$sync_new_hd_wallet_x_pub_y_pub_z_pub_rb = new \CryptoAPIs\Model\SyncNewHDWalletXPubYPubZPubRB(); // \CryptoAPIs\Model\SyncNewHDWalletXPubYPubZPubRB

try {
    $result = $apiInstance->syncNewHDWalletXPubYPubZPub($blockchain, $network, $context, $sync_new_hd_wallet_x_pub_y_pub_z_pub_rb);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HDWalletsApi->syncNewHDWalletXPubYPubZPub: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**| Represents the specific blockchain protocol name, e.g. Ethereum, Bitcoin, etc. |
 **network** | **string**| Represents the name of the blockchain network used; blockchain networks are usually identical as technology and software, but they differ in data, e.g. - \&quot;mainnet\&quot; is the live network with actual data while networks like \&quot;testnet\&quot;, \&quot;ropsten\&quot; are test networks. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **sync_new_hd_wallet_x_pub_y_pub_z_pub_rb** | [**\CryptoAPIs\Model\SyncNewHDWalletXPubYPubZPubRB**](../Model/SyncNewHDWalletXPubYPubZPubRB.md)|  | [optional]

### Return type

[**\CryptoAPIs\Model\SyncNewHDWalletXPubYPubZPubR**](../Model/SyncNewHDWalletXPubYPubZPubR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

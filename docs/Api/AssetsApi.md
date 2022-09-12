# CryptoAPIs\AssetsApi

All URIs are relative to https://rest.cryptoapis.io.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAssetDetailsByAssetID()**](AssetsApi.md#getAssetDetailsByAssetID) | **GET** /market-data/assets/assetId/{assetId} | Get Asset Details By Asset ID
[**getAssetDetailsByAssetSymbol()**](AssetsApi.md#getAssetDetailsByAssetSymbol) | **GET** /market-data/assets/{assetSymbol} | Get Asset Details By Asset Symbol


## `getAssetDetailsByAssetID()`

```php
getAssetDetailsByAssetID($asset_id, $context): \CryptoAPIs\Model\GetAssetDetailsByAssetIDR
```

Get Asset Details By Asset ID

Through this endpoint users can obtain information on assets by `assetId`.    The details returned could include information on the latest rate and rate fluctuation of different periods of time - 24 hours, a week, one hour, the encoding of the logo, and more.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_id = 5b1ea92e584bf50020130612; // string | Defines the unique ID of the specific asset.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->getAssetDetailsByAssetID($asset_id, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAssetDetailsByAssetID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_id** | **string**| Defines the unique ID of the specific asset. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]

### Return type

[**\CryptoAPIs\Model\GetAssetDetailsByAssetIDR**](../Model/GetAssetDetailsByAssetIDR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetDetailsByAssetSymbol()`

```php
getAssetDetailsByAssetSymbol($asset_symbol, $context): \CryptoAPIs\Model\GetAssetDetailsByAssetSymbolR
```

Get Asset Details By Asset Symbol

Through this endpoint users can obtain information on assets by asset symbol.    The details returned could include information on the latest rate and rate fluctuation of different periods of time - 24 hours, a week, one hour, the encoding of the logo, and more.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CryptoAPIs\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new CryptoAPIs\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asset_symbol = BTC; // string | Specifies the asset's unique symbol in the Crypto APIs listings.
$context = yourExampleString; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->getAssetDetailsByAssetSymbol($asset_symbol, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAssetDetailsByAssetSymbol: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asset_symbol** | **string**| Specifies the asset&#39;s unique symbol in the Crypto APIs listings. |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]

### Return type

[**\CryptoAPIs\Model\GetAssetDetailsByAssetSymbolR**](../Model/GetAssetDetailsByAssetSymbolR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

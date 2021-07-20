# CryptoAPIs\AssetsApi

All URIs are relative to https://rest.cryptoapis.io/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listAssetsDetails()**](AssetsApi.md#listAssetsDetails) | **GET** /market-data/assets/details | List Assets Details


## `listAssetsDetails()`

```php
listAssetsDetails($context, $asset_type, $crypto_type, $limit, $offset, $waas_enabled): \CryptoAPIs\Model\ListAssetsDetailsR
```

List Assets Details

This endpoint will return details on a requested asset. The asset could be a cryptocurrency or FIAT asset that we support. Each asset has a unique identifier - `assetId` and a unique symbol in the form of a string, e.g. \"BTC\".    The details returned could include information on the latest rate and rate fluctuation of different periods of time - 24 hours, a week, one hour, the encoding of the logo, and more.    {note}Please note that listing data from the same type will apply pagination on the results.{/note}

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
$context = 'context_example'; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$asset_type = crypto; // string | Defines the type of the supported asset. This could be either \"crypto\" or \"fiat\".
$crypto_type = coin; // string | Subtype of the crypto assets. Could be COIN or TOKEN
$limit = 50; // int | Defines how many items should be returned in the response per page basis.
$offset = 10; // int | The starting index of the response items, i.e. where the response should start listing the returned items.
$waas_enabled = true; // bool | Show only if WaaS is/not enabled

try {
    $result = $apiInstance->listAssetsDetails($context, $asset_type, $crypto_type, $limit, $offset, $waas_enabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->listAssetsDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]
 **asset_type** | **string**| Defines the type of the supported asset. This could be either \&quot;crypto\&quot; or \&quot;fiat\&quot;. | [optional]
 **crypto_type** | **string**| Subtype of the crypto assets. Could be COIN or TOKEN | [optional]
 **limit** | **int**| Defines how many items should be returned in the response per page basis. | [optional] [default to 50]
 **offset** | **int**| The starting index of the response items, i.e. where the response should start listing the returned items. | [optional] [default to 0]
 **waas_enabled** | **bool**| Show only if WaaS is/not enabled | [optional]

### Return type

[**\CryptoAPIs\Model\ListAssetsDetailsR**](../Model/ListAssetsDetailsR.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

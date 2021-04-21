# OpenAPI\Client\DefaultApi

All URIs are relative to https://rest.cryptoapis.io/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getContractDetailsByAddress()**](DefaultApi.md#getContractDetailsByAddress) | **GET** /blockchain-data/{blockchain}/{network}/addresses/{contractAddress}/contract | Get Contract Details by Address


## `getContractDetailsByAddress()`

```php
getContractDetailsByAddress($blockchain, $network, $contract_address, $context): \OpenAPI\Client\Model\GetContractDetailsByAddressResponse
```

Get Contract Details by Address

This endpoint will return a smart contract details by address, this address is the address of the smart contract. It's not the same as the smart contract creator address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blockchain = 'blockchain_example'; // string
$network = 'network_example'; // string
$contract_address = 'contract_address_example'; // string | String identifier of the token
$context = 'context_example'; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.

try {
    $result = $apiInstance->getContractDetailsByAddress($blockchain, $network, $contract_address, $context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getContractDetailsByAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockchain** | **string**|  |
 **network** | **string**|  |
 **contract_address** | **string**| String identifier of the token |
 **context** | **string**| In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. &#x60;context&#x60; is specified by the user. | [optional]

### Return type

[**\OpenAPI\Client\Model\GetContractDetailsByAddressResponse**](../Model/GetContractDetailsByAddressResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

# Crypto_APIs_2.0_SDK_PHP

Crypto APIs 2.0 is a complex and innovative infrastructure layer that radically simplifies the development of any Blockchain and Crypto related applications. Organized around REST, Crypto APIs 2.0 can assist both novice Bitcoin/Ethereum enthusiasts and crypto experts with the development of their blockchain applications. Crypto APIs 2.0 provides unified endpoints and data, raw data, automatic tokens and coins forwardings, callback functionalities, and much more.

For more information, please visit [https://cryptoapis.io](https://cryptoapis.io).

## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$context = 'context_example'; // string | In batch situations the user can use the context to correlate responses with requests. This property is present regardless of whether the response was successful or returned as an error. `context` is specified by the user.
$asset_type = crypto; // string | Defines the type of the supported asset. This could be either \"crypto\" or \"fiat\".
$limit = 50; // int | Defines how many items should be returned in the response per page basis.
$offset = 10; // int | The starting index of the response items, i.e. where the response should start listing the returned items.

try {
    $result = $apiInstance->listAssetsDetails($context, $asset_type, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->listAssetsDetails: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://rest.cryptoapis.io/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AssetsApi* | [**listAssetsDetails**](docs/Api/AssetsApi.md#listassetsdetails) | **GET** /market-data/assets/details | List Assets Details
*AutomaticCoinsForwardingApi* | [**createAutomaticCoinsForwarding**](docs/Api/AutomaticCoinsForwardingApi.md#createautomaticcoinsforwarding) | **POST** /blockchain-automations/{blockchain}/{network}/coins-forwarding/automations | Create Automatic Coins Forwarding
*AutomaticCoinsForwardingApi* | [**deleteAutomaticCoinsForwarding**](docs/Api/AutomaticCoinsForwardingApi.md#deleteautomaticcoinsforwarding) | **DELETE** /blockchain-automations/{blockchain}/{network}/coins-forwarding/automations/{referenceId} | Delete Automatic Coins Forwarding
*AutomaticCoinsForwardingApi* | [**listCoinsForwardingAutomations**](docs/Api/AutomaticCoinsForwardingApi.md#listcoinsforwardingautomations) | **GET** /blockchain-automations/{blockchain}/{network}/coins-forwarding/automations | List Coins Forwarding Automations
*AutomaticTokensForwardingApi* | [**addTokensToExistingFromAddress**](docs/Api/AutomaticTokensForwardingApi.md#addtokenstoexistingfromaddress) | **POST** /blockchain-automations/{blockchain}/{network}/tokens-forwarding/automations/add-token | Add Tokens To Existing fromAddress
*AutomaticTokensForwardingApi* | [**createAutomaticTokensForwarding**](docs/Api/AutomaticTokensForwardingApi.md#createautomatictokensforwarding) | **POST** /blockchain-automations/{blockchain}/{network}/tokens-forwarding/automations | Create Automatic Tokens Forwarding
*AutomaticTokensForwardingApi* | [**deleteAutomaticTokensForwarding**](docs/Api/AutomaticTokensForwardingApi.md#deleteautomatictokensforwarding) | **DELETE** /blockchain-automations/{blockchain}/{network}/tokens-forwarding/automations/{referenceId} | Delete Automatic Tokens Forwarding
*AutomaticTokensForwardingApi* | [**getFeeAddressDetails**](docs/Api/AutomaticTokensForwardingApi.md#getfeeaddressdetails) | **GET** /blockchain-automations/{blockchain}/{network}/tokens-forwarding/fee-addresses | Get Fee Address Details
*AutomaticTokensForwardingApi* | [**listTokensForwardingAutomations**](docs/Api/AutomaticTokensForwardingApi.md#listtokensforwardingautomations) | **GET** /blockchain-automations/{blockchain}/{network}/tokens-forwarding/automations | List Tokens Forwarding Automations
*CreateSubscriptionsForApi* | [**minedTransaction**](docs/Api/CreateSubscriptionsForApi.md#minedtransaction) | **POST** /blockchain-events/{blockchain}/{network}/subscriptions/transaction-mined | Mined transaction
*CreateSubscriptionsForApi* | [**newBlock**](docs/Api/CreateSubscriptionsForApi.md#newblock) | **POST** /blockchain-events/{blockchain}/{network}/subscriptions/block-mined | New Block
*CreateSubscriptionsForApi* | [**newConfirmedCoinsTransactions**](docs/Api/CreateSubscriptionsForApi.md#newconfirmedcoinstransactions) | **POST** /blockchain-events/{blockchain}/{network}/subscriptions/address-coins-transactions-confirmed | New confirmed coins transactions
*CreateSubscriptionsForApi* | [**newConfirmedCoinsTransactionsAndEachConfirmation**](docs/Api/CreateSubscriptionsForApi.md#newconfirmedcoinstransactionsandeachconfirmation) | **POST** /blockchain-events/{blockchain}/{network}/subscriptions/address-coins-transactions-confirmed-each-confirmation | New confirmed coins transactions and each confirmation
*CreateSubscriptionsForApi* | [**newConfirmedTokensTransactions**](docs/Api/CreateSubscriptionsForApi.md#newconfirmedtokenstransactions) | **POST** /blockchain-events/{blockchain}/{network}/subscriptions/address-tokens-transactions-confirmed | New confirmed tokens transactions
*CreateSubscriptionsForApi* | [**newConfirmedTokensTransactionsAndEachConfirmation**](docs/Api/CreateSubscriptionsForApi.md#newconfirmedtokenstransactionsandeachconfirmation) | **POST** /blockchain-events/{blockchain}/{network}/subscriptions/address-tokens-transactions-confirmed-each-confirmation | New confirmed tokens transactions and each confirmation
*CreateSubscriptionsForApi* | [**newUnconfirmedCoinsTransactions**](docs/Api/CreateSubscriptionsForApi.md#newunconfirmedcoinstransactions) | **POST** /blockchain-events/{blockchain}/{network}/subscriptions/address-coins-transactions-unconfirmed | New unconfirmed coins transactions
*CreateSubscriptionsForApi* | [**newUnconfirmedTokensTransactions**](docs/Api/CreateSubscriptionsForApi.md#newunconfirmedtokenstransactions) | **POST** /blockchain-events/{blockchain}/{network}/subscriptions/address-tokens-transactions-unconfirmed | New unconfirmed tokens transactions
*DefaultApi* | [**getContractDetailsByAddress**](docs/Api/DefaultApi.md#getcontractdetailsbyaddress) | **GET** /blockchain-data/{blockchain}/{network}/addresses/{contractAddress}/contract | Get Contract Details by Address
*ExchangeRatesApi* | [**getExchangeRateByAssetSymbols**](docs/Api/ExchangeRatesApi.md#getexchangeratebyassetsymbols) | **GET** /market-data/exchange-rates/by-symbols/{fromAssetSymbol}/{toAssetSymbol} | Get Exchange Rate By Asset Symbols
*ExchangeRatesApi* | [**getExchangeRateByAssetsIDs**](docs/Api/ExchangeRatesApi.md#getexchangeratebyassetsids) | **GET** /market-data/exchange-rates/by-asset-ids/{fromAssetId}/{toAssetId} | Get Exchange Rate By Assets IDs
*ManageSubscriptionsApi* | [**deleteBlockchainEventSubscription**](docs/Api/ManageSubscriptionsApi.md#deleteblockchaineventsubscription) | **DELETE** /blockchain-events/{blockchain}/{network}/subscriptions/{referenceId} | Delete Blockchain Event Subscription
*ManageSubscriptionsApi* | [**listBlockchainEventsSubscriptions**](docs/Api/ManageSubscriptionsApi.md#listblockchaineventssubscriptions) | **GET** /blockchain-events/{blockchain}/{network}/subscriptions | List Blockchain Events Subscriptions
*MetadataApi* | [**listSupportedAssets**](docs/Api/MetadataApi.md#listsupportedassets) | **GET** /market-data/assets/supported | List Supported Assets
*OmniLayerApi* | [**getOmniTransactionDetailsByTransactionIDTxid**](docs/Api/OmniLayerApi.md#getomnitransactiondetailsbytransactionidtxid) | **GET** /blockchain-data/{blockchain}/{network}/omni/transactions/{transactionId} | Get Omni Transaction Details By Transaction ID (Txid)
*OmniLayerApi* | [**getUnconfirmedOmniTransactionByTransactionIDTxid**](docs/Api/OmniLayerApi.md#getunconfirmedomnitransactionbytransactionidtxid) | **GET** /blockchain-data/{blockchain}/{network}/omni/transactions-unconfirmed/{transactionId} | Get Unconfirmed Omni Transaction By Transaction ID (Txid)
*OmniLayerApi* | [**listOmniTokensByAddress**](docs/Api/OmniLayerApi.md#listomnitokensbyaddress) | **GET** /blockchain-data/{blockchain}/{network}/omni/addresses/{address} | List Omni Tokens By Address
*OmniLayerApi* | [**listOmniTransactionsByAddress**](docs/Api/OmniLayerApi.md#listomnitransactionsbyaddress) | **GET** /blockchain-data/{blockchain}/{network}/omni/addresses/{address}/transactions | List Omni Transactions By Address
*OmniLayerApi* | [**listOmniTransactionsByBlockHash**](docs/Api/OmniLayerApi.md#listomnitransactionsbyblockhash) | **GET** /blockchain-data/{blockchain}/{network}/omni/blocks/hash/{blockHash}/transactions | List Omni Transactions By Block Hash
*OmniLayerApi* | [**listOmniTransactionsByBlockHeight**](docs/Api/OmniLayerApi.md#listomnitransactionsbyblockheight) | **GET** /blockchain-data/{blockchain}/{network}/omni/blocks/height/{blockHeight}/transactions | List Omni Transactions By Block Height
*OmniLayerApi* | [**listUnconfirmedOmniTransactionsByAddress**](docs/Api/OmniLayerApi.md#listunconfirmedomnitransactionsbyaddress) | **GET** /blockchain-data/{blockchain}/{network}/omni/address-transactions-unconfirmed/{address} | List Unconfirmed Omni Transactions By Address
*OmniLayerApi* | [**listUnconfirmedOmniTransactionsByPropertyID**](docs/Api/OmniLayerApi.md#listunconfirmedomnitransactionsbypropertyid) | **GET** /blockchain-data/{blockchain}/{network}/omni/properties/{propertyId}/transactions | List Unconfirmed Omni Transactions By Property ID
*TokensApi* | [**listTokensByAddress**](docs/Api/TokensApi.md#listtokensbyaddress) | **GET** /blockchain-data/{blockchain}/{network}/addresses/{address}/tokens | List Tokens By Address
*TokensApi* | [**listTokensTransfersByAddress**](docs/Api/TokensApi.md#listtokenstransfersbyaddress) | **GET** /blockchain-data/{blockchain}/{network}/addresses/{address}/tokens-transfers | List Tokens Transfers By Address
*TokensApi* | [**listTokensTransfersByTransactionHash**](docs/Api/TokensApi.md#listtokenstransfersbytransactionhash) | **GET** /blockchain-data/{blockchain}/{network}/transactions/{transactionHash}/tokens-transfers | List Tokens Transfers By Transaction Hash
*UTXOBasedApi* | [**getHDWalletXPubYPubZPubDetails**](docs/Api/UTXOBasedApi.md#gethdwalletxpubypubzpubdetails) | **GET** /blockchain-data/{blockchain}/{network}/hd/{extendedPublicKey}/details | Get HD Wallet (xPub, yPub, zPub) Details
*UTXOBasedApi* | [**listHDWalletXPubYPubZPubTransactions**](docs/Api/UTXOBasedApi.md#listhdwalletxpubypubzpubtransactions) | **GET** /blockchain-data/{blockchain}/{network}/hd/{extendedPublicKey}/transactions | List HD Wallet (xPub, yPub, zPub) Transactions
*UTXOBasedApi* | [**syncHDWalletXPubYPubZPub**](docs/Api/UTXOBasedApi.md#synchdwalletxpubypubzpub) | **POST** /blockchain-data/{blockchain}/{network}/hd/sync | Sync HD Wallet (xPub, yPub, zPub)
*UnifiedEndpointsApi* | [**getAddressDetails**](docs/Api/UnifiedEndpointsApi.md#getaddressdetails) | **GET** /blockchain-data/{blockchain}/{network}/addresses/{address} | Get Address Details
*UnifiedEndpointsApi* | [**getBlockDetailsByBlockHash**](docs/Api/UnifiedEndpointsApi.md#getblockdetailsbyblockhash) | **GET** /blockchain-data/{blockchain}/{network}/blocks/hash/{blockHash} | Get Block Details By Block Hash
*UnifiedEndpointsApi* | [**getBlockDetailsByBlockHeight**](docs/Api/UnifiedEndpointsApi.md#getblockdetailsbyblockheight) | **GET** /blockchain-data/{blockchain}/{network}/blocks/height/{height} | Get Block Details By Block Height
*UnifiedEndpointsApi* | [**getFeeRecommendations**](docs/Api/UnifiedEndpointsApi.md#getfeerecommendations) | **GET** /blockchain-data/{blockchain}/{network}/mempool/fees | Get Fee Recommendations
*UnifiedEndpointsApi* | [**getLatestMinedBlock**](docs/Api/UnifiedEndpointsApi.md#getlatestminedblock) | **GET** /blockchain-data/{blockchain}/{network}/blocks/last | Get Latest Mined Block
*UnifiedEndpointsApi* | [**getTransactionDetailsByTransactionID**](docs/Api/UnifiedEndpointsApi.md#gettransactiondetailsbytransactionid) | **GET** /blockchain-data/{blockchain}/{network}/transactions/{transactionId} | Get Transaction Details By Transaction ID
*UnifiedEndpointsApi* | [**listTransactionsByAddress**](docs/Api/UnifiedEndpointsApi.md#listtransactionsbyaddress) | **GET** /blockchain-data/{blockchain}/{network}/addresses/{address}/transactions | List Transactions By Address
*UnifiedEndpointsApi* | [**listTransactionsByBlockHash**](docs/Api/UnifiedEndpointsApi.md#listtransactionsbyblockhash) | **GET** /blockchain-data/{blockchain}/{network}/blocks/hash/{blockHash}/transactions | List Transactions by Block Hash
*UnifiedEndpointsApi* | [**listTransactionsByBlockHeight**](docs/Api/UnifiedEndpointsApi.md#listtransactionsbyblockheight) | **GET** /blockchain-data/{blockchain}/{network}/blocks/height/{height}/transactions | List Transactions by Block Height
*ValidatingApi* | [**validateAddress**](docs/Api/ValidatingApi.md#validateaddress) | **POST** /blockchain-tools/{blockchain}/{network}/addresses/validate | Validate Address
*XRPRippleApi* | [**getLatestMinedXRPRippleBlock**](docs/Api/XRPRippleApi.md#getlatestminedxrprippleblock) | **GET** /blockchain-data/xrp/{network}/blocks/last | Get Latest Mined XRP (Ripple) Block
*XRPRippleApi* | [**getXRPRippleAddressDetails**](docs/Api/XRPRippleApi.md#getxrprippleaddressdetails) | **GET** /blockchain-data/xrp/{network}/addresses/{address} | Get XRP (Ripple) Address Details
*XRPRippleApi* | [**getXRPRippleBlockDetailsByBlockHash**](docs/Api/XRPRippleApi.md#getxrprippleblockdetailsbyblockhash) | **GET** /blockchain-data/xrp/{network}/blocks/hash/{blockHash} | Get XRP (Ripple) Block Details By Block Hash
*XRPRippleApi* | [**getXRPRippleBlockDetailsByBlockHeight**](docs/Api/XRPRippleApi.md#getxrprippleblockdetailsbyblockheight) | **GET** /blockchain-data/xrp/{network}/blocks/height/{height} | Get XRP (Ripple) Block Details By Block Height
*XRPRippleApi* | [**getXRPRippleTransactionDetailsByTransactionID**](docs/Api/XRPRippleApi.md#getxrprippletransactiondetailsbytransactionid) | **GET** /blockchain-data/xrp/{network}/transactions/{transactionHash} | Get XRP (Ripple) Transaction Details By Transaction ID
*XRPRippleApi* | [**listXRPRippleTransactionsByAddress**](docs/Api/XRPRippleApi.md#listxrprippletransactionsbyaddress) | **GET** /blockchain-data/xrp/{network}/addresses/{address}/transactions | List XRP (Ripple) Transactions by Address
*XRPRippleApi* | [**listXRPRippleTransactionsByBlockHash**](docs/Api/XRPRippleApi.md#listxrprippletransactionsbyblockhash) | **GET** /blockchain-data/xrp/{network}/blocks/hash/{blockHash}/transactions | List XRP (Ripple) Transactions By Block Hash

## Models

- [AddTokensToExistingFromAddressRequestBody](docs/Model/AddTokensToExistingFromAddressRequestBody.md)
- [AddTokensToExistingFromAddressRequestBodyData](docs/Model/AddTokensToExistingFromAddressRequestBodyData.md)
- [AddTokensToExistingFromAddressRequestBodyDataItem](docs/Model/AddTokensToExistingFromAddressRequestBodyDataItem.md)
- [AddTokensToExistingFromAddressRequestBodyTokenData](docs/Model/AddTokensToExistingFromAddressRequestBodyTokenData.md)
- [AddTokensToExistingFromAddressRequestBodyTokenDataBitcoinOmniToken](docs/Model/AddTokensToExistingFromAddressRequestBodyTokenDataBitcoinOmniToken.md)
- [AddTokensToExistingFromAddressRequestBodyTokenDataEthereumErc20Token](docs/Model/AddTokensToExistingFromAddressRequestBodyTokenDataEthereumErc20Token.md)
- [AddTokensToExistingFromAddressResponse](docs/Model/AddTokensToExistingFromAddressResponse.md)
- [AddTokensToExistingFromAddressResponseData](docs/Model/AddTokensToExistingFromAddressResponseData.md)
- [AddTokensToExistingFromAddressResponseItem](docs/Model/AddTokensToExistingFromAddressResponseItem.md)
- [AddTokensToExistingFromAddressResponseItemTokenData](docs/Model/AddTokensToExistingFromAddressResponseItemTokenData.md)
- [AddTokensToExistingFromAddressResponseItemTokenDataBitcoinOmniToken](docs/Model/AddTokensToExistingFromAddressResponseItemTokenDataBitcoinOmniToken.md)
- [AddTokensToExistingFromAddressResponseItemTokenDataEthereumErc20Token](docs/Model/AddTokensToExistingFromAddressResponseItemTokenDataEthereumErc20Token.md)
- [AddressCoinsTransactionConfirmed](docs/Model/AddressCoinsTransactionConfirmed.md)
- [AddressCoinsTransactionConfirmedData](docs/Model/AddressCoinsTransactionConfirmedData.md)
- [AddressCoinsTransactionConfirmedDataItem](docs/Model/AddressCoinsTransactionConfirmedDataItem.md)
- [AddressCoinsTransactionConfirmedDataItemMinedInBlock](docs/Model/AddressCoinsTransactionConfirmedDataItemMinedInBlock.md)
- [AddressCoinsTransactionConfirmedEachConfirmation](docs/Model/AddressCoinsTransactionConfirmedEachConfirmation.md)
- [AddressCoinsTransactionConfirmedEachConfirmationData](docs/Model/AddressCoinsTransactionConfirmedEachConfirmationData.md)
- [AddressCoinsTransactionConfirmedEachConfirmationDataItem](docs/Model/AddressCoinsTransactionConfirmedEachConfirmationDataItem.md)
- [AddressCoinsTransactionConfirmedEachConfirmationDataItemMinedInBlock](docs/Model/AddressCoinsTransactionConfirmedEachConfirmationDataItemMinedInBlock.md)
- [AddressCoinsTransactionUnconfirmed](docs/Model/AddressCoinsTransactionUnconfirmed.md)
- [AddressCoinsTransactionUnconfirmedData](docs/Model/AddressCoinsTransactionUnconfirmedData.md)
- [AddressCoinsTransactionUnconfirmedDataItem](docs/Model/AddressCoinsTransactionUnconfirmedDataItem.md)
- [AddressTokensTransactionConfirmed](docs/Model/AddressTokensTransactionConfirmed.md)
- [AddressTokensTransactionConfirmedData](docs/Model/AddressTokensTransactionConfirmedData.md)
- [AddressTokensTransactionConfirmedDataItem](docs/Model/AddressTokensTransactionConfirmedDataItem.md)
- [AddressTokensTransactionConfirmedDataItemMinedInBlock](docs/Model/AddressTokensTransactionConfirmedDataItemMinedInBlock.md)
- [AddressTokensTransactionConfirmedEachConfirmation](docs/Model/AddressTokensTransactionConfirmedEachConfirmation.md)
- [AddressTokensTransactionConfirmedEachConfirmationData](docs/Model/AddressTokensTransactionConfirmedEachConfirmationData.md)
- [AddressTokensTransactionConfirmedEachConfirmationDataItem](docs/Model/AddressTokensTransactionConfirmedEachConfirmationDataItem.md)
- [AddressTokensTransactionConfirmedEachConfirmationDataItemMinedInBlock](docs/Model/AddressTokensTransactionConfirmedEachConfirmationDataItemMinedInBlock.md)
- [AddressTokensTransactionConfirmedEachConfirmationEthereumerc20token](docs/Model/AddressTokensTransactionConfirmedEachConfirmationEthereumerc20token.md)
- [AddressTokensTransactionConfirmedEachConfirmationEthereumerc721token](docs/Model/AddressTokensTransactionConfirmedEachConfirmationEthereumerc721token.md)
- [AddressTokensTransactionConfirmedEachConfirmationOmnilayertoken](docs/Model/AddressTokensTransactionConfirmedEachConfirmationOmnilayertoken.md)
- [AddressTokensTransactionConfirmedEachConfirmationToken](docs/Model/AddressTokensTransactionConfirmedEachConfirmationToken.md)
- [AddressTokensTransactionConfirmedEthereumerc20token](docs/Model/AddressTokensTransactionConfirmedEthereumerc20token.md)
- [AddressTokensTransactionConfirmedEthereumerc721token](docs/Model/AddressTokensTransactionConfirmedEthereumerc721token.md)
- [AddressTokensTransactionConfirmedOmnilayertoken](docs/Model/AddressTokensTransactionConfirmedOmnilayertoken.md)
- [AddressTokensTransactionConfirmedToken](docs/Model/AddressTokensTransactionConfirmedToken.md)
- [AddressTokensTransactionUnconfirmed](docs/Model/AddressTokensTransactionUnconfirmed.md)
- [AddressTokensTransactionUnconfirmedData](docs/Model/AddressTokensTransactionUnconfirmedData.md)
- [AddressTokensTransactionUnconfirmedDataItem](docs/Model/AddressTokensTransactionUnconfirmedDataItem.md)
- [AddressTokensTransactionUnconfirmedEthereumerc20token](docs/Model/AddressTokensTransactionUnconfirmedEthereumerc20token.md)
- [AddressTokensTransactionUnconfirmedEthereumerc721token](docs/Model/AddressTokensTransactionUnconfirmedEthereumerc721token.md)
- [AddressTokensTransactionUnconfirmedOmnilayertoken](docs/Model/AddressTokensTransactionUnconfirmedOmnilayertoken.md)
- [AddressTokensTransactionUnconfirmedToken](docs/Model/AddressTokensTransactionUnconfirmedToken.md)
- [AlreadyExists](docs/Model/AlreadyExists.md)
- [AlreadyExistsError](docs/Model/AlreadyExistsError.md)
- [BannedIpAddress](docs/Model/BannedIpAddress.md)
- [BannedIpAddressError](docs/Model/BannedIpAddressError.md)
- [BannedIpAddressErrorDetails](docs/Model/BannedIpAddressErrorDetails.md)
- [BlockMined](docs/Model/BlockMined.md)
- [BlockMinedData](docs/Model/BlockMinedData.md)
- [BlockMinedDataItem](docs/Model/BlockMinedDataItem.md)
- [BlockchainDataBlockNotFound](docs/Model/BlockchainDataBlockNotFound.md)
- [BlockchainDataBlockNotFoundError](docs/Model/BlockchainDataBlockNotFoundError.md)
- [BlockchainDataTransactionNotFound](docs/Model/BlockchainDataTransactionNotFound.md)
- [BlockchainDataTransactionNotFoundError](docs/Model/BlockchainDataTransactionNotFoundError.md)
- [BlockchainEventsCallbacksLimitReached](docs/Model/BlockchainEventsCallbacksLimitReached.md)
- [BlockchainEventsCallbacksLimitReachedError](docs/Model/BlockchainEventsCallbacksLimitReachedError.md)
- [CoinsForwardingAutomationsLimitReached](docs/Model/CoinsForwardingAutomationsLimitReached.md)
- [CoinsForwardingAutomationsLimitReachedError](docs/Model/CoinsForwardingAutomationsLimitReachedError.md)
- [CoinsForwardingFail](docs/Model/CoinsForwardingFail.md)
- [CoinsForwardingFailData](docs/Model/CoinsForwardingFailData.md)
- [CoinsForwardingFailDataItem](docs/Model/CoinsForwardingFailDataItem.md)
- [CoinsForwardingSuccess](docs/Model/CoinsForwardingSuccess.md)
- [CoinsForwardingSuccessData](docs/Model/CoinsForwardingSuccessData.md)
- [CoinsForwardingSuccessDataItem](docs/Model/CoinsForwardingSuccessDataItem.md)
- [CouldNotCalculateRateForPair](docs/Model/CouldNotCalculateRateForPair.md)
- [CouldNotCalculateRateForPairError](docs/Model/CouldNotCalculateRateForPairError.md)
- [CreateAutomaticCoinsForwardingRequestBody](docs/Model/CreateAutomaticCoinsForwardingRequestBody.md)
- [CreateAutomaticCoinsForwardingRequestBodyData](docs/Model/CreateAutomaticCoinsForwardingRequestBodyData.md)
- [CreateAutomaticCoinsForwardingRequestBodyDataItem](docs/Model/CreateAutomaticCoinsForwardingRequestBodyDataItem.md)
- [CreateAutomaticCoinsForwardingResponse](docs/Model/CreateAutomaticCoinsForwardingResponse.md)
- [CreateAutomaticCoinsForwardingResponseData](docs/Model/CreateAutomaticCoinsForwardingResponseData.md)
- [CreateAutomaticCoinsForwardingResponseItem](docs/Model/CreateAutomaticCoinsForwardingResponseItem.md)
- [CreateAutomaticTokensForwardingRequestBody](docs/Model/CreateAutomaticTokensForwardingRequestBody.md)
- [CreateAutomaticTokensForwardingRequestBodyData](docs/Model/CreateAutomaticTokensForwardingRequestBodyData.md)
- [CreateAutomaticTokensForwardingRequestBodyDataItem](docs/Model/CreateAutomaticTokensForwardingRequestBodyDataItem.md)
- [CreateAutomaticTokensForwardingRequestBodyTokenData](docs/Model/CreateAutomaticTokensForwardingRequestBodyTokenData.md)
- [CreateAutomaticTokensForwardingRequestBodyTokenDataBitcoinOmniToken](docs/Model/CreateAutomaticTokensForwardingRequestBodyTokenDataBitcoinOmniToken.md)
- [CreateAutomaticTokensForwardingRequestBodyTokenDataEthereumToken](docs/Model/CreateAutomaticTokensForwardingRequestBodyTokenDataEthereumToken.md)
- [CreateAutomaticTokensForwardingResponse](docs/Model/CreateAutomaticTokensForwardingResponse.md)
- [CreateAutomaticTokensForwardingResponseData](docs/Model/CreateAutomaticTokensForwardingResponseData.md)
- [CreateAutomaticTokensForwardingResponseItem](docs/Model/CreateAutomaticTokensForwardingResponseItem.md)
- [CreateAutomaticTokensForwardingResponseItemTokenData](docs/Model/CreateAutomaticTokensForwardingResponseItemTokenData.md)
- [CreateAutomaticTokensForwardingResponseItemTokenDataBitcoinOmniToken](docs/Model/CreateAutomaticTokensForwardingResponseItemTokenDataBitcoinOmniToken.md)
- [CreateAutomaticTokensForwardingResponseItemTokenDataEthereumToken](docs/Model/CreateAutomaticTokensForwardingResponseItemTokenDataEthereumToken.md)
- [DeleteAutomaticCoinsForwardingResponse](docs/Model/DeleteAutomaticCoinsForwardingResponse.md)
- [DeleteAutomaticCoinsForwardingResponseData](docs/Model/DeleteAutomaticCoinsForwardingResponseData.md)
- [DeleteAutomaticCoinsForwardingResponseItem](docs/Model/DeleteAutomaticCoinsForwardingResponseItem.md)
- [DeleteAutomaticTokensForwardingResponse](docs/Model/DeleteAutomaticTokensForwardingResponse.md)
- [DeleteAutomaticTokensForwardingResponseData](docs/Model/DeleteAutomaticTokensForwardingResponseData.md)
- [DeleteAutomaticTokensForwardingResponseItem](docs/Model/DeleteAutomaticTokensForwardingResponseItem.md)
- [DeleteAutomaticTokensForwardingResponseItemTokenData](docs/Model/DeleteAutomaticTokensForwardingResponseItemTokenData.md)
- [DeleteAutomaticTokensForwardingResponseItemTokenDataBitcoinOmniToken](docs/Model/DeleteAutomaticTokensForwardingResponseItemTokenDataBitcoinOmniToken.md)
- [DeleteAutomaticTokensForwardingResponseItemTokenDataEthereumToken](docs/Model/DeleteAutomaticTokensForwardingResponseItemTokenDataEthereumToken.md)
- [DeleteBlockchainEventSubscriptionResponse](docs/Model/DeleteBlockchainEventSubscriptionResponse.md)
- [DeleteBlockchainEventSubscriptionResponseData](docs/Model/DeleteBlockchainEventSubscriptionResponseData.md)
- [DeleteBlockchainEventSubscriptionResponseItem](docs/Model/DeleteBlockchainEventSubscriptionResponseItem.md)
- [EndpointNotAllowedForApiKey](docs/Model/EndpointNotAllowedForApiKey.md)
- [EndpointNotAllowedForApiKeyError](docs/Model/EndpointNotAllowedForApiKeyError.md)
- [EndpointNotAllowedForPlan](docs/Model/EndpointNotAllowedForPlan.md)
- [EndpointNotAllowedForPlanError](docs/Model/EndpointNotAllowedForPlanError.md)
- [FeatureMainnetsNotAllowedForPlan](docs/Model/FeatureMainnetsNotAllowedForPlan.md)
- [FeatureMainnetsNotAllowedForPlanError](docs/Model/FeatureMainnetsNotAllowedForPlanError.md)
- [GetAddressDetailsResponse](docs/Model/GetAddressDetailsResponse.md)
- [GetAddressDetailsResponseData](docs/Model/GetAddressDetailsResponseData.md)
- [GetAddressDetailsResponseItem](docs/Model/GetAddressDetailsResponseItem.md)
- [GetAddressDetailsResponseItemConfirmedBalance](docs/Model/GetAddressDetailsResponseItemConfirmedBalance.md)
- [GetAddressDetailsResponseItemTotalReceived](docs/Model/GetAddressDetailsResponseItemTotalReceived.md)
- [GetAddressDetailsResponseItemTotalSpent](docs/Model/GetAddressDetailsResponseItemTotalSpent.md)
- [GetBlockDetailsByBlockHashResponse](docs/Model/GetBlockDetailsByBlockHashResponse.md)
- [GetBlockDetailsByBlockHashResponseData](docs/Model/GetBlockDetailsByBlockHashResponseData.md)
- [GetBlockDetailsByBlockHashResponseItem](docs/Model/GetBlockDetailsByBlockHashResponseItem.md)
- [GetBlockDetailsByBlockHashResponseItemBlockchainSpecific](docs/Model/GetBlockDetailsByBlockHashResponseItemBlockchainSpecific.md)
- [GetBlockDetailsByBlockHashResponseItemBlockchainSpecificBitcoin](docs/Model/GetBlockDetailsByBlockHashResponseItemBlockchainSpecificBitcoin.md)
- [GetBlockDetailsByBlockHashResponseItemBlockchainSpecificBitcoinCash](docs/Model/GetBlockDetailsByBlockHashResponseItemBlockchainSpecificBitcoinCash.md)
- [GetBlockDetailsByBlockHashResponseItemBlockchainSpecificDash](docs/Model/GetBlockDetailsByBlockHashResponseItemBlockchainSpecificDash.md)
- [GetBlockDetailsByBlockHashResponseItemBlockchainSpecificDogecoin](docs/Model/GetBlockDetailsByBlockHashResponseItemBlockchainSpecificDogecoin.md)
- [GetBlockDetailsByBlockHashResponseItemBlockchainSpecificEthereum](docs/Model/GetBlockDetailsByBlockHashResponseItemBlockchainSpecificEthereum.md)
- [GetBlockDetailsByBlockHashResponseItemBlockchainSpecificEthereumClassic](docs/Model/GetBlockDetailsByBlockHashResponseItemBlockchainSpecificEthereumClassic.md)
- [GetBlockDetailsByBlockHashResponseItemBlockchainSpecificLitecoin](docs/Model/GetBlockDetailsByBlockHashResponseItemBlockchainSpecificLitecoin.md)
- [GetBlockDetailsByBlockHeightResponse](docs/Model/GetBlockDetailsByBlockHeightResponse.md)
- [GetBlockDetailsByBlockHeightResponseData](docs/Model/GetBlockDetailsByBlockHeightResponseData.md)
- [GetBlockDetailsByBlockHeightResponseItem](docs/Model/GetBlockDetailsByBlockHeightResponseItem.md)
- [GetBlockDetailsByBlockHeightResponseItemBlockchainSpecific](docs/Model/GetBlockDetailsByBlockHeightResponseItemBlockchainSpecific.md)
- [GetBlockDetailsByBlockHeightResponseItemBlockchainSpecificBitcoin](docs/Model/GetBlockDetailsByBlockHeightResponseItemBlockchainSpecificBitcoin.md)
- [GetBlockDetailsByBlockHeightResponseItemBlockchainSpecificBitcoinCash](docs/Model/GetBlockDetailsByBlockHeightResponseItemBlockchainSpecificBitcoinCash.md)
- [GetBlockDetailsByBlockHeightResponseItemBlockchainSpecificDash](docs/Model/GetBlockDetailsByBlockHeightResponseItemBlockchainSpecificDash.md)
- [GetBlockDetailsByBlockHeightResponseItemBlockchainSpecificDogecoin](docs/Model/GetBlockDetailsByBlockHeightResponseItemBlockchainSpecificDogecoin.md)
- [GetBlockDetailsByBlockHeightResponseItemBlockchainSpecificEthereum](docs/Model/GetBlockDetailsByBlockHeightResponseItemBlockchainSpecificEthereum.md)
- [GetBlockDetailsByBlockHeightResponseItemBlockchainSpecificEthereumClassic](docs/Model/GetBlockDetailsByBlockHeightResponseItemBlockchainSpecificEthereumClassic.md)
- [GetBlockDetailsByBlockHeightResponseItemBlockchainSpecificLitecoin](docs/Model/GetBlockDetailsByBlockHeightResponseItemBlockchainSpecificLitecoin.md)
- [GetContractDetailsByAddressResponse](docs/Model/GetContractDetailsByAddressResponse.md)
- [GetContractDetailsByAddressResponseData](docs/Model/GetContractDetailsByAddressResponseData.md)
- [GetContractDetailsByAddressResponseItem](docs/Model/GetContractDetailsByAddressResponseItem.md)
- [GetExchangeRateByAssetSymbolsResponse](docs/Model/GetExchangeRateByAssetSymbolsResponse.md)
- [GetExchangeRateByAssetSymbolsResponseData](docs/Model/GetExchangeRateByAssetSymbolsResponseData.md)
- [GetExchangeRateByAssetSymbolsResponseItem](docs/Model/GetExchangeRateByAssetSymbolsResponseItem.md)
- [GetExchangeRateByAssetsIDsResponse](docs/Model/GetExchangeRateByAssetsIDsResponse.md)
- [GetExchangeRateByAssetsIDsResponseData](docs/Model/GetExchangeRateByAssetsIDsResponseData.md)
- [GetExchangeRateByAssetsIDsResponseItem](docs/Model/GetExchangeRateByAssetsIDsResponseItem.md)
- [GetFeeAddressDetailsResponse](docs/Model/GetFeeAddressDetailsResponse.md)
- [GetFeeAddressDetailsResponseData](docs/Model/GetFeeAddressDetailsResponseData.md)
- [GetFeeAddressDetailsResponseItem](docs/Model/GetFeeAddressDetailsResponseItem.md)
- [GetFeeAddressDetailsResponseItemBalance](docs/Model/GetFeeAddressDetailsResponseItemBalance.md)
- [GetFeeRecommendationsResponse](docs/Model/GetFeeRecommendationsResponse.md)
- [GetFeeRecommendationsResponseData](docs/Model/GetFeeRecommendationsResponseData.md)
- [GetFeeRecommendationsResponseItem](docs/Model/GetFeeRecommendationsResponseItem.md)
- [GetHDWalletxPubYPubZPubDetailsResponse](docs/Model/GetHDWalletxPubYPubZPubDetailsResponse.md)
- [GetHDWalletxPubYPubZPubDetailsResponseData](docs/Model/GetHDWalletxPubYPubZPubDetailsResponseData.md)
- [GetHDWalletxPubYPubZPubDetailsResponseItem](docs/Model/GetHDWalletxPubYPubZPubDetailsResponseItem.md)
- [GetLatestMinedBlockResponse](docs/Model/GetLatestMinedBlockResponse.md)
- [GetLatestMinedBlockResponseData](docs/Model/GetLatestMinedBlockResponseData.md)
- [GetLatestMinedBlockResponseItem](docs/Model/GetLatestMinedBlockResponseItem.md)
- [GetLatestMinedBlockResponseItemBlockchainSpecific](docs/Model/GetLatestMinedBlockResponseItemBlockchainSpecific.md)
- [GetLatestMinedBlockResponseItemBlockchainSpecificBitcoin](docs/Model/GetLatestMinedBlockResponseItemBlockchainSpecificBitcoin.md)
- [GetLatestMinedBlockResponseItemBlockchainSpecificBitcoinCash](docs/Model/GetLatestMinedBlockResponseItemBlockchainSpecificBitcoinCash.md)
- [GetLatestMinedBlockResponseItemBlockchainSpecificDash](docs/Model/GetLatestMinedBlockResponseItemBlockchainSpecificDash.md)
- [GetLatestMinedBlockResponseItemBlockchainSpecificDogecoin](docs/Model/GetLatestMinedBlockResponseItemBlockchainSpecificDogecoin.md)
- [GetLatestMinedBlockResponseItemBlockchainSpecificEthereum](docs/Model/GetLatestMinedBlockResponseItemBlockchainSpecificEthereum.md)
- [GetLatestMinedBlockResponseItemBlockchainSpecificEthereumClassic](docs/Model/GetLatestMinedBlockResponseItemBlockchainSpecificEthereumClassic.md)
- [GetLatestMinedBlockResponseItemBlockchainSpecificLitecoin](docs/Model/GetLatestMinedBlockResponseItemBlockchainSpecificLitecoin.md)
- [GetLatestMinedXRPRippleBlockResponse](docs/Model/GetLatestMinedXRPRippleBlockResponse.md)
- [GetLatestMinedXRPRippleBlockResponseData](docs/Model/GetLatestMinedXRPRippleBlockResponseData.md)
- [GetLatestMinedXRPRippleBlockResponseItem](docs/Model/GetLatestMinedXRPRippleBlockResponseItem.md)
- [GetLatestMinedXRPRippleBlockResponseItemTotalCoins](docs/Model/GetLatestMinedXRPRippleBlockResponseItemTotalCoins.md)
- [GetLatestMinedXRPRippleBlockResponseItemTotalFees](docs/Model/GetLatestMinedXRPRippleBlockResponseItemTotalFees.md)
- [GetOmniTransactionDetailsByTransactionIDTxidResponse](docs/Model/GetOmniTransactionDetailsByTransactionIDTxidResponse.md)
- [GetOmniTransactionDetailsByTransactionIDTxidResponseData](docs/Model/GetOmniTransactionDetailsByTransactionIDTxidResponseData.md)
- [GetOmniTransactionDetailsByTransactionIDTxidResponseItem](docs/Model/GetOmniTransactionDetailsByTransactionIDTxidResponseItem.md)
- [GetOmniTransactionDetailsByTransactionIDTxidResponseItemSenders](docs/Model/GetOmniTransactionDetailsByTransactionIDTxidResponseItemSenders.md)
- [GetTransactionDetailsByTransactionIDResponse](docs/Model/GetTransactionDetailsByTransactionIDResponse.md)
- [GetTransactionDetailsByTransactionIDResponseData](docs/Model/GetTransactionDetailsByTransactionIDResponseData.md)
- [GetTransactionDetailsByTransactionIDResponseItem](docs/Model/GetTransactionDetailsByTransactionIDResponseItem.md)
- [GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecific](docs/Model/GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecific.md)
- [GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificBitcoin](docs/Model/GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificBitcoin.md)
- [GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificBitcoinCash](docs/Model/GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificBitcoinCash.md)
- [GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificBitcoinCashScriptPubKey](docs/Model/GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificBitcoinCashScriptPubKey.md)
- [GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificBitcoinCashVin](docs/Model/GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificBitcoinCashVin.md)
- [GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificBitcoinCashVout](docs/Model/GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificBitcoinCashVout.md)
- [GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificBitcoinScriptPubKey](docs/Model/GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificBitcoinScriptPubKey.md)
- [GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificBitcoinScriptSig](docs/Model/GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificBitcoinScriptSig.md)
- [GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificBitcoinVin](docs/Model/GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificBitcoinVin.md)
- [GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificBitcoinVout](docs/Model/GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificBitcoinVout.md)
- [GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificDash](docs/Model/GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificDash.md)
- [GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificDashScriptPubKey](docs/Model/GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificDashScriptPubKey.md)
- [GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificDashScriptSig](docs/Model/GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificDashScriptSig.md)
- [GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificDashVin](docs/Model/GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificDashVin.md)
- [GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificDashVout](docs/Model/GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificDashVout.md)
- [GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificDogecoin](docs/Model/GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificDogecoin.md)
- [GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificDogecoinScriptPubKey](docs/Model/GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificDogecoinScriptPubKey.md)
- [GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificDogecoinScriptSig](docs/Model/GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificDogecoinScriptSig.md)
- [GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificDogecoinVin](docs/Model/GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificDogecoinVin.md)
- [GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificDogecoinVout](docs/Model/GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificDogecoinVout.md)
- [GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificEthereum](docs/Model/GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificEthereum.md)
- [GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificEthereumClassic](docs/Model/GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificEthereumClassic.md)
- [GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificEthereumClassicGasPrice](docs/Model/GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificEthereumClassicGasPrice.md)
- [GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificEthereumGasPrice](docs/Model/GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificEthereumGasPrice.md)
- [GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificLitecoin](docs/Model/GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificLitecoin.md)
- [GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificLitecoinScriptPubKey](docs/Model/GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificLitecoinScriptPubKey.md)
- [GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificLitecoinScriptSig](docs/Model/GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificLitecoinScriptSig.md)
- [GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificLitecoinVin](docs/Model/GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificLitecoinVin.md)
- [GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificLitecoinVout](docs/Model/GetTransactionDetailsByTransactionIDResponseItemBlockchainSpecificLitecoinVout.md)
- [GetTransactionDetailsByTransactionIDResponseItemFee](docs/Model/GetTransactionDetailsByTransactionIDResponseItemFee.md)
- [GetTransactionDetailsByTransactionIDResponseItemRecipients](docs/Model/GetTransactionDetailsByTransactionIDResponseItemRecipients.md)
- [GetTransactionDetailsByTransactionIDResponseItemSenders](docs/Model/GetTransactionDetailsByTransactionIDResponseItemSenders.md)
- [GetUnconfirmedOmniTransactionByTransactionIDTxidResponse](docs/Model/GetUnconfirmedOmniTransactionByTransactionIDTxidResponse.md)
- [GetUnconfirmedOmniTransactionByTransactionIDTxidResponseData](docs/Model/GetUnconfirmedOmniTransactionByTransactionIDTxidResponseData.md)
- [GetUnconfirmedOmniTransactionByTransactionIDTxidResponseItem](docs/Model/GetUnconfirmedOmniTransactionByTransactionIDTxidResponseItem.md)
- [GetUnconfirmedOmniTransactionByTransactionIDTxidResponseItemRecipients](docs/Model/GetUnconfirmedOmniTransactionByTransactionIDTxidResponseItemRecipients.md)
- [GetUnconfirmedOmniTransactionByTransactionIDTxidResponseItemSenders](docs/Model/GetUnconfirmedOmniTransactionByTransactionIDTxidResponseItemSenders.md)
- [GetXRPRippleAddressDetailsResponse](docs/Model/GetXRPRippleAddressDetailsResponse.md)
- [GetXRPRippleAddressDetailsResponseData](docs/Model/GetXRPRippleAddressDetailsResponseData.md)
- [GetXRPRippleAddressDetailsResponseItem](docs/Model/GetXRPRippleAddressDetailsResponseItem.md)
- [GetXRPRippleAddressDetailsResponseItemBalance](docs/Model/GetXRPRippleAddressDetailsResponseItemBalance.md)
- [GetXRPRippleBlockDetailsByBlockHashResponse](docs/Model/GetXRPRippleBlockDetailsByBlockHashResponse.md)
- [GetXRPRippleBlockDetailsByBlockHashResponseData](docs/Model/GetXRPRippleBlockDetailsByBlockHashResponseData.md)
- [GetXRPRippleBlockDetailsByBlockHashResponseItem](docs/Model/GetXRPRippleBlockDetailsByBlockHashResponseItem.md)
- [GetXRPRippleBlockDetailsByBlockHashResponseItemTotalCoins](docs/Model/GetXRPRippleBlockDetailsByBlockHashResponseItemTotalCoins.md)
- [GetXRPRippleBlockDetailsByBlockHeightResponse](docs/Model/GetXRPRippleBlockDetailsByBlockHeightResponse.md)
- [GetXRPRippleBlockDetailsByBlockHeightResponseData](docs/Model/GetXRPRippleBlockDetailsByBlockHeightResponseData.md)
- [GetXRPRippleBlockDetailsByBlockHeightResponseItem](docs/Model/GetXRPRippleBlockDetailsByBlockHeightResponseItem.md)
- [GetXRPRippleBlockDetailsByBlockHeightResponseItemTotalCoins](docs/Model/GetXRPRippleBlockDetailsByBlockHeightResponseItemTotalCoins.md)
- [GetXRPRippleBlockDetailsByBlockHeightResponseItemTotalFees](docs/Model/GetXRPRippleBlockDetailsByBlockHeightResponseItemTotalFees.md)
- [GetXRPRippleTransactionDetailsByTransactionIDResponse](docs/Model/GetXRPRippleTransactionDetailsByTransactionIDResponse.md)
- [GetXRPRippleTransactionDetailsByTransactionIDResponseData](docs/Model/GetXRPRippleTransactionDetailsByTransactionIDResponseData.md)
- [GetXRPRippleTransactionDetailsByTransactionIDResponseItem](docs/Model/GetXRPRippleTransactionDetailsByTransactionIDResponseItem.md)
- [GetXRPRippleTransactionDetailsByTransactionIDResponseItemFee](docs/Model/GetXRPRippleTransactionDetailsByTransactionIDResponseItemFee.md)
- [GetXRPRippleTransactionDetailsByTransactionIDResponseItemOffer](docs/Model/GetXRPRippleTransactionDetailsByTransactionIDResponseItemOffer.md)
- [GetXRPRippleTransactionDetailsByTransactionIDResponseItemReceive](docs/Model/GetXRPRippleTransactionDetailsByTransactionIDResponseItemReceive.md)
- [GetXRPRippleTransactionDetailsByTransactionIDResponseItemRecipients](docs/Model/GetXRPRippleTransactionDetailsByTransactionIDResponseItemRecipients.md)
- [GetXRPRippleTransactionDetailsByTransactionIDResponseItemSenders](docs/Model/GetXRPRippleTransactionDetailsByTransactionIDResponseItemSenders.md)
- [GetXRPRippleTransactionDetailsByTransactionIDResponseItemValue](docs/Model/GetXRPRippleTransactionDetailsByTransactionIDResponseItemValue.md)
- [InsufficientCredits](docs/Model/InsufficientCredits.md)
- [InsufficientCreditsError](docs/Model/InsufficientCreditsError.md)
- [InvalidApiKey](docs/Model/InvalidApiKey.md)
- [InvalidApiKeyError](docs/Model/InvalidApiKeyError.md)
- [InvalidBlockchain](docs/Model/InvalidBlockchain.md)
- [InvalidBlockchainError](docs/Model/InvalidBlockchainError.md)
- [InvalidData](docs/Model/InvalidData.md)
- [InvalidDataError](docs/Model/InvalidDataError.md)
- [InvalidNetwork](docs/Model/InvalidNetwork.md)
- [InvalidNetworkError](docs/Model/InvalidNetworkError.md)
- [InvalidPagination](docs/Model/InvalidPagination.md)
- [InvalidPaginationError](docs/Model/InvalidPaginationError.md)
- [InvalidRequestBodyStructure](docs/Model/InvalidRequestBodyStructure.md)
- [InvalidRequestBodyStructureError](docs/Model/InvalidRequestBodyStructureError.md)
- [InvalidXpub](docs/Model/InvalidXpub.md)
- [InvalidXpubError](docs/Model/InvalidXpubError.md)
- [LimitGreaterThanAllowed](docs/Model/LimitGreaterThanAllowed.md)
- [LimitGreaterThanAllowedError](docs/Model/LimitGreaterThanAllowedError.md)
- [ListAssetsDetailsResponse](docs/Model/ListAssetsDetailsResponse.md)
- [ListAssetsDetailsResponseData](docs/Model/ListAssetsDetailsResponseData.md)
- [ListAssetsDetailsResponseItem](docs/Model/ListAssetsDetailsResponseItem.md)
- [ListAssetsDetailsResponseItemAssetLogo](docs/Model/ListAssetsDetailsResponseItemAssetLogo.md)
- [ListAssetsDetailsResponseItemLatestRate](docs/Model/ListAssetsDetailsResponseItemLatestRate.md)
- [ListAssetsDetailsResponseItemSpecificData](docs/Model/ListAssetsDetailsResponseItemSpecificData.md)
- [ListAssetsDetailsResponseItemSpecificDataCryptoTypeData](docs/Model/ListAssetsDetailsResponseItemSpecificDataCryptoTypeData.md)
- [ListBlockchainEventsSubscriptionsResponse](docs/Model/ListBlockchainEventsSubscriptionsResponse.md)
- [ListBlockchainEventsSubscriptionsResponseData](docs/Model/ListBlockchainEventsSubscriptionsResponseData.md)
- [ListBlockchainEventsSubscriptionsResponseItem](docs/Model/ListBlockchainEventsSubscriptionsResponseItem.md)
- [ListCoinsForwardingAutomationsResponse](docs/Model/ListCoinsForwardingAutomationsResponse.md)
- [ListCoinsForwardingAutomationsResponseData](docs/Model/ListCoinsForwardingAutomationsResponseData.md)
- [ListCoinsForwardingAutomationsResponseItem](docs/Model/ListCoinsForwardingAutomationsResponseItem.md)
- [ListHDWalletxPubYPubZPubTransactionsResponse](docs/Model/ListHDWalletxPubYPubZPubTransactionsResponse.md)
- [ListHDWalletxPubYPubZPubTransactionsResponseData](docs/Model/ListHDWalletxPubYPubZPubTransactionsResponseData.md)
- [ListHDWalletxPubYPubZPubTransactionsResponseItem](docs/Model/ListHDWalletxPubYPubZPubTransactionsResponseItem.md)
- [ListHDWalletxPubYPubZPubTransactionsResponseItemFee](docs/Model/ListHDWalletxPubYPubZPubTransactionsResponseItemFee.md)
- [ListHDWalletxPubYPubZPubTransactionsResponseItemRecipients](docs/Model/ListHDWalletxPubYPubZPubTransactionsResponseItemRecipients.md)
- [ListHDWalletxPubYPubZPubTransactionsResponseItemSenders](docs/Model/ListHDWalletxPubYPubZPubTransactionsResponseItemSenders.md)
- [ListOmniTokensByAddressResponse](docs/Model/ListOmniTokensByAddressResponse.md)
- [ListOmniTokensByAddressResponseData](docs/Model/ListOmniTokensByAddressResponseData.md)
- [ListOmniTokensByAddressResponseItem](docs/Model/ListOmniTokensByAddressResponseItem.md)
- [ListOmniTransactionsByAddressResponse](docs/Model/ListOmniTransactionsByAddressResponse.md)
- [ListOmniTransactionsByAddressResponseData](docs/Model/ListOmniTransactionsByAddressResponseData.md)
- [ListOmniTransactionsByAddressResponseItem](docs/Model/ListOmniTransactionsByAddressResponseItem.md)
- [ListOmniTransactionsByAddressResponseItemFee](docs/Model/ListOmniTransactionsByAddressResponseItemFee.md)
- [ListOmniTransactionsByAddressResponseItemRecipients](docs/Model/ListOmniTransactionsByAddressResponseItemRecipients.md)
- [ListOmniTransactionsByAddressResponseItemSenders](docs/Model/ListOmniTransactionsByAddressResponseItemSenders.md)
- [ListOmniTransactionsByBlockHashResponse](docs/Model/ListOmniTransactionsByBlockHashResponse.md)
- [ListOmniTransactionsByBlockHashResponseData](docs/Model/ListOmniTransactionsByBlockHashResponseData.md)
- [ListOmniTransactionsByBlockHashResponseItem](docs/Model/ListOmniTransactionsByBlockHashResponseItem.md)
- [ListOmniTransactionsByBlockHashResponseItemFee](docs/Model/ListOmniTransactionsByBlockHashResponseItemFee.md)
- [ListOmniTransactionsByBlockHeightResponse](docs/Model/ListOmniTransactionsByBlockHeightResponse.md)
- [ListOmniTransactionsByBlockHeightResponseData](docs/Model/ListOmniTransactionsByBlockHeightResponseData.md)
- [ListOmniTransactionsByBlockHeightResponseItem](docs/Model/ListOmniTransactionsByBlockHeightResponseItem.md)
- [ListOmniTransactionsByBlockHeightResponseItemFee](docs/Model/ListOmniTransactionsByBlockHeightResponseItemFee.md)
- [ListOmniTransactionsByBlockHeightResponseItemRecipients](docs/Model/ListOmniTransactionsByBlockHeightResponseItemRecipients.md)
- [ListOmniTransactionsByBlockHeightResponseItemSenders](docs/Model/ListOmniTransactionsByBlockHeightResponseItemSenders.md)
- [ListSupportedAssetsResponse](docs/Model/ListSupportedAssetsResponse.md)
- [ListSupportedAssetsResponseData](docs/Model/ListSupportedAssetsResponseData.md)
- [ListSupportedAssetsResponseItem](docs/Model/ListSupportedAssetsResponseItem.md)
- [ListTokensByAddressResponse](docs/Model/ListTokensByAddressResponse.md)
- [ListTokensByAddressResponseData](docs/Model/ListTokensByAddressResponseData.md)
- [ListTokensByAddressResponseItem](docs/Model/ListTokensByAddressResponseItem.md)
- [ListTokensForwardingAutomationsResponse](docs/Model/ListTokensForwardingAutomationsResponse.md)
- [ListTokensForwardingAutomationsResponseData](docs/Model/ListTokensForwardingAutomationsResponseData.md)
- [ListTokensForwardingAutomationsResponseItem](docs/Model/ListTokensForwardingAutomationsResponseItem.md)
- [ListTokensForwardingAutomationsResponseItemTokenData](docs/Model/ListTokensForwardingAutomationsResponseItemTokenData.md)
- [ListTokensForwardingAutomationsResponseItemTokenDataBitcoinOmniToken](docs/Model/ListTokensForwardingAutomationsResponseItemTokenDataBitcoinOmniToken.md)
- [ListTokensForwardingAutomationsResponseItemTokenDataEthereumToken](docs/Model/ListTokensForwardingAutomationsResponseItemTokenDataEthereumToken.md)
- [ListTokensTransfersByAddressResponse](docs/Model/ListTokensTransfersByAddressResponse.md)
- [ListTokensTransfersByAddressResponseData](docs/Model/ListTokensTransfersByAddressResponseData.md)
- [ListTokensTransfersByAddressResponseItem](docs/Model/ListTokensTransfersByAddressResponseItem.md)
- [ListTokensTransfersByTransactionHashResponse](docs/Model/ListTokensTransfersByTransactionHashResponse.md)
- [ListTokensTransfersByTransactionHashResponseData](docs/Model/ListTokensTransfersByTransactionHashResponseData.md)
- [ListTokensTransfersByTransactionHashResponseItem](docs/Model/ListTokensTransfersByTransactionHashResponseItem.md)
- [ListTransactionsByAddressResponse](docs/Model/ListTransactionsByAddressResponse.md)
- [ListTransactionsByAddressResponseData](docs/Model/ListTransactionsByAddressResponseData.md)
- [ListTransactionsByAddressResponseItem](docs/Model/ListTransactionsByAddressResponseItem.md)
- [ListTransactionsByAddressResponseItemBlockchainSpecific](docs/Model/ListTransactionsByAddressResponseItemBlockchainSpecific.md)
- [ListTransactionsByAddressResponseItemBlockchainSpecificBitcoin](docs/Model/ListTransactionsByAddressResponseItemBlockchainSpecificBitcoin.md)
- [ListTransactionsByAddressResponseItemBlockchainSpecificBitcoinCash](docs/Model/ListTransactionsByAddressResponseItemBlockchainSpecificBitcoinCash.md)
- [ListTransactionsByAddressResponseItemBlockchainSpecificBitcoinCashVin](docs/Model/ListTransactionsByAddressResponseItemBlockchainSpecificBitcoinCashVin.md)
- [ListTransactionsByAddressResponseItemBlockchainSpecificBitcoinScriptPubKey](docs/Model/ListTransactionsByAddressResponseItemBlockchainSpecificBitcoinScriptPubKey.md)
- [ListTransactionsByAddressResponseItemBlockchainSpecificBitcoinVin](docs/Model/ListTransactionsByAddressResponseItemBlockchainSpecificBitcoinVin.md)
- [ListTransactionsByAddressResponseItemBlockchainSpecificBitcoinVout](docs/Model/ListTransactionsByAddressResponseItemBlockchainSpecificBitcoinVout.md)
- [ListTransactionsByAddressResponseItemBlockchainSpecificDash](docs/Model/ListTransactionsByAddressResponseItemBlockchainSpecificDash.md)
- [ListTransactionsByAddressResponseItemBlockchainSpecificDashScriptPubKey](docs/Model/ListTransactionsByAddressResponseItemBlockchainSpecificDashScriptPubKey.md)
- [ListTransactionsByAddressResponseItemBlockchainSpecificDashScriptSig](docs/Model/ListTransactionsByAddressResponseItemBlockchainSpecificDashScriptSig.md)
- [ListTransactionsByAddressResponseItemBlockchainSpecificDashVin](docs/Model/ListTransactionsByAddressResponseItemBlockchainSpecificDashVin.md)
- [ListTransactionsByAddressResponseItemBlockchainSpecificDashVout](docs/Model/ListTransactionsByAddressResponseItemBlockchainSpecificDashVout.md)
- [ListTransactionsByAddressResponseItemBlockchainSpecificDogecoin](docs/Model/ListTransactionsByAddressResponseItemBlockchainSpecificDogecoin.md)
- [ListTransactionsByAddressResponseItemBlockchainSpecificDogecoinScriptSig](docs/Model/ListTransactionsByAddressResponseItemBlockchainSpecificDogecoinScriptSig.md)
- [ListTransactionsByAddressResponseItemBlockchainSpecificDogecoinVin](docs/Model/ListTransactionsByAddressResponseItemBlockchainSpecificDogecoinVin.md)
- [ListTransactionsByAddressResponseItemBlockchainSpecificEthereum](docs/Model/ListTransactionsByAddressResponseItemBlockchainSpecificEthereum.md)
- [ListTransactionsByAddressResponseItemBlockchainSpecificEthereumClassic](docs/Model/ListTransactionsByAddressResponseItemBlockchainSpecificEthereumClassic.md)
- [ListTransactionsByAddressResponseItemBlockchainSpecificEthereumClassicGasPrice](docs/Model/ListTransactionsByAddressResponseItemBlockchainSpecificEthereumClassicGasPrice.md)
- [ListTransactionsByAddressResponseItemBlockchainSpecificEthereumGasPrice](docs/Model/ListTransactionsByAddressResponseItemBlockchainSpecificEthereumGasPrice.md)
- [ListTransactionsByAddressResponseItemBlockchainSpecificLitecoin](docs/Model/ListTransactionsByAddressResponseItemBlockchainSpecificLitecoin.md)
- [ListTransactionsByAddressResponseItemBlockchainSpecificLitecoinScriptSig](docs/Model/ListTransactionsByAddressResponseItemBlockchainSpecificLitecoinScriptSig.md)
- [ListTransactionsByAddressResponseItemBlockchainSpecificLitecoinVin](docs/Model/ListTransactionsByAddressResponseItemBlockchainSpecificLitecoinVin.md)
- [ListTransactionsByBlockHashResponse](docs/Model/ListTransactionsByBlockHashResponse.md)
- [ListTransactionsByBlockHashResponseData](docs/Model/ListTransactionsByBlockHashResponseData.md)
- [ListTransactionsByBlockHashResponseItem](docs/Model/ListTransactionsByBlockHashResponseItem.md)
- [ListTransactionsByBlockHashResponseItemBlockchainSpecific](docs/Model/ListTransactionsByBlockHashResponseItemBlockchainSpecific.md)
- [ListTransactionsByBlockHashResponseItemBlockchainSpecificBitcoin](docs/Model/ListTransactionsByBlockHashResponseItemBlockchainSpecificBitcoin.md)
- [ListTransactionsByBlockHashResponseItemBlockchainSpecificBitcoinCash](docs/Model/ListTransactionsByBlockHashResponseItemBlockchainSpecificBitcoinCash.md)
- [ListTransactionsByBlockHashResponseItemBlockchainSpecificBitcoinCashScriptPubKey](docs/Model/ListTransactionsByBlockHashResponseItemBlockchainSpecificBitcoinCashScriptPubKey.md)
- [ListTransactionsByBlockHashResponseItemBlockchainSpecificBitcoinCashVin](docs/Model/ListTransactionsByBlockHashResponseItemBlockchainSpecificBitcoinCashVin.md)
- [ListTransactionsByBlockHashResponseItemBlockchainSpecificBitcoinCashVout](docs/Model/ListTransactionsByBlockHashResponseItemBlockchainSpecificBitcoinCashVout.md)
- [ListTransactionsByBlockHashResponseItemBlockchainSpecificBitcoinVin](docs/Model/ListTransactionsByBlockHashResponseItemBlockchainSpecificBitcoinVin.md)
- [ListTransactionsByBlockHashResponseItemBlockchainSpecificDash](docs/Model/ListTransactionsByBlockHashResponseItemBlockchainSpecificDash.md)
- [ListTransactionsByBlockHashResponseItemBlockchainSpecificDashScriptPubKey](docs/Model/ListTransactionsByBlockHashResponseItemBlockchainSpecificDashScriptPubKey.md)
- [ListTransactionsByBlockHashResponseItemBlockchainSpecificDashScriptSig](docs/Model/ListTransactionsByBlockHashResponseItemBlockchainSpecificDashScriptSig.md)
- [ListTransactionsByBlockHashResponseItemBlockchainSpecificDashVin](docs/Model/ListTransactionsByBlockHashResponseItemBlockchainSpecificDashVin.md)
- [ListTransactionsByBlockHashResponseItemBlockchainSpecificDashVout](docs/Model/ListTransactionsByBlockHashResponseItemBlockchainSpecificDashVout.md)
- [ListTransactionsByBlockHashResponseItemBlockchainSpecificDogecoin](docs/Model/ListTransactionsByBlockHashResponseItemBlockchainSpecificDogecoin.md)
- [ListTransactionsByBlockHashResponseItemBlockchainSpecificDogecoinScriptPubKey](docs/Model/ListTransactionsByBlockHashResponseItemBlockchainSpecificDogecoinScriptPubKey.md)
- [ListTransactionsByBlockHashResponseItemBlockchainSpecificDogecoinVin](docs/Model/ListTransactionsByBlockHashResponseItemBlockchainSpecificDogecoinVin.md)
- [ListTransactionsByBlockHashResponseItemBlockchainSpecificDogecoinVout](docs/Model/ListTransactionsByBlockHashResponseItemBlockchainSpecificDogecoinVout.md)
- [ListTransactionsByBlockHashResponseItemBlockchainSpecificEthereum](docs/Model/ListTransactionsByBlockHashResponseItemBlockchainSpecificEthereum.md)
- [ListTransactionsByBlockHashResponseItemBlockchainSpecificEthereumClassic](docs/Model/ListTransactionsByBlockHashResponseItemBlockchainSpecificEthereumClassic.md)
- [ListTransactionsByBlockHashResponseItemBlockchainSpecificEthereumGasPrice](docs/Model/ListTransactionsByBlockHashResponseItemBlockchainSpecificEthereumGasPrice.md)
- [ListTransactionsByBlockHashResponseItemBlockchainSpecificLitecoin](docs/Model/ListTransactionsByBlockHashResponseItemBlockchainSpecificLitecoin.md)
- [ListTransactionsByBlockHashResponseItemBlockchainSpecificLitecoinScriptPubKey](docs/Model/ListTransactionsByBlockHashResponseItemBlockchainSpecificLitecoinScriptPubKey.md)
- [ListTransactionsByBlockHashResponseItemBlockchainSpecificLitecoinVin](docs/Model/ListTransactionsByBlockHashResponseItemBlockchainSpecificLitecoinVin.md)
- [ListTransactionsByBlockHashResponseItemBlockchainSpecificLitecoinVout](docs/Model/ListTransactionsByBlockHashResponseItemBlockchainSpecificLitecoinVout.md)
- [ListTransactionsByBlockHashResponseItemFee](docs/Model/ListTransactionsByBlockHashResponseItemFee.md)
- [ListTransactionsByBlockHashResponseItemRecipients](docs/Model/ListTransactionsByBlockHashResponseItemRecipients.md)
- [ListTransactionsByBlockHashResponseItemSenders](docs/Model/ListTransactionsByBlockHashResponseItemSenders.md)
- [ListTransactionsByBlockHeightResponse](docs/Model/ListTransactionsByBlockHeightResponse.md)
- [ListTransactionsByBlockHeightResponseData](docs/Model/ListTransactionsByBlockHeightResponseData.md)
- [ListTransactionsByBlockHeightResponseItem](docs/Model/ListTransactionsByBlockHeightResponseItem.md)
- [ListTransactionsByBlockHeightResponseItemBlockchainSpecific](docs/Model/ListTransactionsByBlockHeightResponseItemBlockchainSpecific.md)
- [ListTransactionsByBlockHeightResponseItemBlockchainSpecificBitcoin](docs/Model/ListTransactionsByBlockHeightResponseItemBlockchainSpecificBitcoin.md)
- [ListTransactionsByBlockHeightResponseItemBlockchainSpecificBitcoinCash](docs/Model/ListTransactionsByBlockHeightResponseItemBlockchainSpecificBitcoinCash.md)
- [ListTransactionsByBlockHeightResponseItemBlockchainSpecificBitcoinScriptPubKey](docs/Model/ListTransactionsByBlockHeightResponseItemBlockchainSpecificBitcoinScriptPubKey.md)
- [ListTransactionsByBlockHeightResponseItemBlockchainSpecificBitcoinVout](docs/Model/ListTransactionsByBlockHeightResponseItemBlockchainSpecificBitcoinVout.md)
- [ListTransactionsByBlockHeightResponseItemBlockchainSpecificDash](docs/Model/ListTransactionsByBlockHeightResponseItemBlockchainSpecificDash.md)
- [ListTransactionsByBlockHeightResponseItemBlockchainSpecificDashScriptPubKey](docs/Model/ListTransactionsByBlockHeightResponseItemBlockchainSpecificDashScriptPubKey.md)
- [ListTransactionsByBlockHeightResponseItemBlockchainSpecificDashScriptSig](docs/Model/ListTransactionsByBlockHeightResponseItemBlockchainSpecificDashScriptSig.md)
- [ListTransactionsByBlockHeightResponseItemBlockchainSpecificDashVin](docs/Model/ListTransactionsByBlockHeightResponseItemBlockchainSpecificDashVin.md)
- [ListTransactionsByBlockHeightResponseItemBlockchainSpecificDashVout](docs/Model/ListTransactionsByBlockHeightResponseItemBlockchainSpecificDashVout.md)
- [ListTransactionsByBlockHeightResponseItemBlockchainSpecificDogecoin](docs/Model/ListTransactionsByBlockHeightResponseItemBlockchainSpecificDogecoin.md)
- [ListTransactionsByBlockHeightResponseItemBlockchainSpecificDogecoinVin](docs/Model/ListTransactionsByBlockHeightResponseItemBlockchainSpecificDogecoinVin.md)
- [ListTransactionsByBlockHeightResponseItemBlockchainSpecificEthereum](docs/Model/ListTransactionsByBlockHeightResponseItemBlockchainSpecificEthereum.md)
- [ListTransactionsByBlockHeightResponseItemBlockchainSpecificEthereumClassic](docs/Model/ListTransactionsByBlockHeightResponseItemBlockchainSpecificEthereumClassic.md)
- [ListTransactionsByBlockHeightResponseItemBlockchainSpecificEthereumClassicGasPrice](docs/Model/ListTransactionsByBlockHeightResponseItemBlockchainSpecificEthereumClassicGasPrice.md)
- [ListTransactionsByBlockHeightResponseItemBlockchainSpecificLitecoin](docs/Model/ListTransactionsByBlockHeightResponseItemBlockchainSpecificLitecoin.md)
- [ListTransactionsByBlockHeightResponseItemBlockchainSpecificLitecoinScriptPubKey](docs/Model/ListTransactionsByBlockHeightResponseItemBlockchainSpecificLitecoinScriptPubKey.md)
- [ListTransactionsByBlockHeightResponseItemBlockchainSpecificLitecoinScriptSig](docs/Model/ListTransactionsByBlockHeightResponseItemBlockchainSpecificLitecoinScriptSig.md)
- [ListTransactionsByBlockHeightResponseItemBlockchainSpecificLitecoinVin](docs/Model/ListTransactionsByBlockHeightResponseItemBlockchainSpecificLitecoinVin.md)
- [ListTransactionsByBlockHeightResponseItemBlockchainSpecificLitecoinVout](docs/Model/ListTransactionsByBlockHeightResponseItemBlockchainSpecificLitecoinVout.md)
- [ListTransactionsByBlockHeightResponseItemFee](docs/Model/ListTransactionsByBlockHeightResponseItemFee.md)
- [ListUnconfirmedOmniTransactionsByAddressResponse](docs/Model/ListUnconfirmedOmniTransactionsByAddressResponse.md)
- [ListUnconfirmedOmniTransactionsByAddressResponseData](docs/Model/ListUnconfirmedOmniTransactionsByAddressResponseData.md)
- [ListUnconfirmedOmniTransactionsByAddressResponseItem](docs/Model/ListUnconfirmedOmniTransactionsByAddressResponseItem.md)
- [ListUnconfirmedOmniTransactionsByAddressResponseItemFee](docs/Model/ListUnconfirmedOmniTransactionsByAddressResponseItemFee.md)
- [ListUnconfirmedOmniTransactionsByAddressResponseItemSenders](docs/Model/ListUnconfirmedOmniTransactionsByAddressResponseItemSenders.md)
- [ListUnconfirmedOmniTransactionsByPropertyIDResponse](docs/Model/ListUnconfirmedOmniTransactionsByPropertyIDResponse.md)
- [ListUnconfirmedOmniTransactionsByPropertyIDResponseData](docs/Model/ListUnconfirmedOmniTransactionsByPropertyIDResponseData.md)
- [ListUnconfirmedOmniTransactionsByPropertyIDResponseItem](docs/Model/ListUnconfirmedOmniTransactionsByPropertyIDResponseItem.md)
- [ListXRPRippleTransactionsByAddressResponse](docs/Model/ListXRPRippleTransactionsByAddressResponse.md)
- [ListXRPRippleTransactionsByAddressResponseData](docs/Model/ListXRPRippleTransactionsByAddressResponseData.md)
- [ListXRPRippleTransactionsByAddressResponseItem](docs/Model/ListXRPRippleTransactionsByAddressResponseItem.md)
- [ListXRPRippleTransactionsByAddressResponseItemFee](docs/Model/ListXRPRippleTransactionsByAddressResponseItemFee.md)
- [ListXRPRippleTransactionsByAddressResponseItemOffer](docs/Model/ListXRPRippleTransactionsByAddressResponseItemOffer.md)
- [ListXRPRippleTransactionsByAddressResponseItemReceive](docs/Model/ListXRPRippleTransactionsByAddressResponseItemReceive.md)
- [ListXRPRippleTransactionsByAddressResponseItemValue](docs/Model/ListXRPRippleTransactionsByAddressResponseItemValue.md)
- [ListXRPRippleTransactionsByBlockHashResponse](docs/Model/ListXRPRippleTransactionsByBlockHashResponse.md)
- [ListXRPRippleTransactionsByBlockHashResponseData](docs/Model/ListXRPRippleTransactionsByBlockHashResponseData.md)
- [ListXRPRippleTransactionsByBlockHashResponseItem](docs/Model/ListXRPRippleTransactionsByBlockHashResponseItem.md)
- [ListXRPRippleTransactionsByBlockHashResponseItemFee](docs/Model/ListXRPRippleTransactionsByBlockHashResponseItemFee.md)
- [ListXRPRippleTransactionsByBlockHashResponseItemOffer](docs/Model/ListXRPRippleTransactionsByBlockHashResponseItemOffer.md)
- [ListXRPRippleTransactionsByBlockHashResponseItemReceive](docs/Model/ListXRPRippleTransactionsByBlockHashResponseItemReceive.md)
- [ListXRPRippleTransactionsByBlockHashResponseItemRecipients](docs/Model/ListXRPRippleTransactionsByBlockHashResponseItemRecipients.md)
- [ListXRPRippleTransactionsByBlockHashResponseItemSenders](docs/Model/ListXRPRippleTransactionsByBlockHashResponseItemSenders.md)
- [ListXRPRippleTransactionsByBlockHashResponseItemValue](docs/Model/ListXRPRippleTransactionsByBlockHashResponseItemValue.md)
- [MinedTransactionRequestBody](docs/Model/MinedTransactionRequestBody.md)
- [MinedTransactionRequestBodyData](docs/Model/MinedTransactionRequestBodyData.md)
- [MinedTransactionRequestBodyDataItem](docs/Model/MinedTransactionRequestBodyDataItem.md)
- [MinedTransactionResponse](docs/Model/MinedTransactionResponse.md)
- [MinedTransactionResponseData](docs/Model/MinedTransactionResponseData.md)
- [MinedTransactionResponseItem](docs/Model/MinedTransactionResponseItem.md)
- [MissingApiKey](docs/Model/MissingApiKey.md)
- [MissingApiKeyError](docs/Model/MissingApiKeyError.md)
- [NewBlockRequestBody](docs/Model/NewBlockRequestBody.md)
- [NewBlockRequestBodyData](docs/Model/NewBlockRequestBodyData.md)
- [NewBlockRequestBodyDataItem](docs/Model/NewBlockRequestBodyDataItem.md)
- [NewBlockResponse](docs/Model/NewBlockResponse.md)
- [NewBlockResponseData](docs/Model/NewBlockResponseData.md)
- [NewBlockResponseItem](docs/Model/NewBlockResponseItem.md)
- [NewConfirmedCoinsTransactionsAndEachConfirmationRequestBody](docs/Model/NewConfirmedCoinsTransactionsAndEachConfirmationRequestBody.md)
- [NewConfirmedCoinsTransactionsAndEachConfirmationRequestBodyData](docs/Model/NewConfirmedCoinsTransactionsAndEachConfirmationRequestBodyData.md)
- [NewConfirmedCoinsTransactionsAndEachConfirmationRequestBodyDataItem](docs/Model/NewConfirmedCoinsTransactionsAndEachConfirmationRequestBodyDataItem.md)
- [NewConfirmedCoinsTransactionsAndEachConfirmationResponse](docs/Model/NewConfirmedCoinsTransactionsAndEachConfirmationResponse.md)
- [NewConfirmedCoinsTransactionsAndEachConfirmationResponseData](docs/Model/NewConfirmedCoinsTransactionsAndEachConfirmationResponseData.md)
- [NewConfirmedCoinsTransactionsAndEachConfirmationResponseItem](docs/Model/NewConfirmedCoinsTransactionsAndEachConfirmationResponseItem.md)
- [NewConfirmedCoinsTransactionsRequestBody](docs/Model/NewConfirmedCoinsTransactionsRequestBody.md)
- [NewConfirmedCoinsTransactionsRequestBodyData](docs/Model/NewConfirmedCoinsTransactionsRequestBodyData.md)
- [NewConfirmedCoinsTransactionsRequestBodyDataItem](docs/Model/NewConfirmedCoinsTransactionsRequestBodyDataItem.md)
- [NewConfirmedCoinsTransactionsResponse](docs/Model/NewConfirmedCoinsTransactionsResponse.md)
- [NewConfirmedCoinsTransactionsResponseData](docs/Model/NewConfirmedCoinsTransactionsResponseData.md)
- [NewConfirmedCoinsTransactionsResponseItem](docs/Model/NewConfirmedCoinsTransactionsResponseItem.md)
- [NewConfirmedTokensTransactionsAndEachConfirmationRequestBody](docs/Model/NewConfirmedTokensTransactionsAndEachConfirmationRequestBody.md)
- [NewConfirmedTokensTransactionsAndEachConfirmationRequestBodyData](docs/Model/NewConfirmedTokensTransactionsAndEachConfirmationRequestBodyData.md)
- [NewConfirmedTokensTransactionsAndEachConfirmationRequestBodyDataItem](docs/Model/NewConfirmedTokensTransactionsAndEachConfirmationRequestBodyDataItem.md)
- [NewConfirmedTokensTransactionsAndEachConfirmationResponse](docs/Model/NewConfirmedTokensTransactionsAndEachConfirmationResponse.md)
- [NewConfirmedTokensTransactionsAndEachConfirmationResponseData](docs/Model/NewConfirmedTokensTransactionsAndEachConfirmationResponseData.md)
- [NewConfirmedTokensTransactionsAndEachConfirmationResponseItem](docs/Model/NewConfirmedTokensTransactionsAndEachConfirmationResponseItem.md)
- [NewConfirmedTokensTransactionsRequestBody](docs/Model/NewConfirmedTokensTransactionsRequestBody.md)
- [NewConfirmedTokensTransactionsResponse](docs/Model/NewConfirmedTokensTransactionsResponse.md)
- [NewConfirmedTokensTransactionsResponseData](docs/Model/NewConfirmedTokensTransactionsResponseData.md)
- [NewConfirmedTokensTransactionsResponseItem](docs/Model/NewConfirmedTokensTransactionsResponseItem.md)
- [NewUnconfirmedCoinsTransactionsRequestBody](docs/Model/NewUnconfirmedCoinsTransactionsRequestBody.md)
- [NewUnconfirmedCoinsTransactionsRequestBodyData](docs/Model/NewUnconfirmedCoinsTransactionsRequestBodyData.md)
- [NewUnconfirmedCoinsTransactionsRequestBodyDataItem](docs/Model/NewUnconfirmedCoinsTransactionsRequestBodyDataItem.md)
- [NewUnconfirmedCoinsTransactionsResponse](docs/Model/NewUnconfirmedCoinsTransactionsResponse.md)
- [NewUnconfirmedCoinsTransactionsResponseData](docs/Model/NewUnconfirmedCoinsTransactionsResponseData.md)
- [NewUnconfirmedCoinsTransactionsResponseItem](docs/Model/NewUnconfirmedCoinsTransactionsResponseItem.md)
- [NewUnconfirmedTokensTransactionsRequestBody](docs/Model/NewUnconfirmedTokensTransactionsRequestBody.md)
- [NewUnconfirmedTokensTransactionsRequestBodyData](docs/Model/NewUnconfirmedTokensTransactionsRequestBodyData.md)
- [NewUnconfirmedTokensTransactionsRequestBodyDataItem](docs/Model/NewUnconfirmedTokensTransactionsRequestBodyDataItem.md)
- [NewUnconfirmedTokensTransactionsResponse](docs/Model/NewUnconfirmedTokensTransactionsResponse.md)
- [NewUnconfirmedTokensTransactionsResponseData](docs/Model/NewUnconfirmedTokensTransactionsResponseData.md)
- [NewUnconfirmedTokensTransactionsResponseItem](docs/Model/NewUnconfirmedTokensTransactionsResponseItem.md)
- [RequestLimitReached](docs/Model/RequestLimitReached.md)
- [RequestLimitReachedError](docs/Model/RequestLimitReachedError.md)
- [ResourceNotFound](docs/Model/ResourceNotFound.md)
- [ResourceNotFoundError](docs/Model/ResourceNotFoundError.md)
- [SyncHDWalletxPubYPubZPubRequestBody](docs/Model/SyncHDWalletxPubYPubZPubRequestBody.md)
- [SyncHDWalletxPubYPubZPubRequestBodyData](docs/Model/SyncHDWalletxPubYPubZPubRequestBodyData.md)
- [SyncHDWalletxPubYPubZPubRequestBodyDataItem](docs/Model/SyncHDWalletxPubYPubZPubRequestBodyDataItem.md)
- [SyncHDWalletxPubYPubZPubResponse](docs/Model/SyncHDWalletxPubYPubZPubResponse.md)
- [SyncHDWalletxPubYPubZPubResponseData](docs/Model/SyncHDWalletxPubYPubZPubResponseData.md)
- [SyncHDWalletxPubYPubZPubResponseItem](docs/Model/SyncHDWalletxPubYPubZPubResponseItem.md)
- [TokensForwardingAutomationsLimitReached](docs/Model/TokensForwardingAutomationsLimitReached.md)
- [TokensForwardingAutomationsLimitReachedError](docs/Model/TokensForwardingAutomationsLimitReachedError.md)
- [TokensForwardingFail](docs/Model/TokensForwardingFail.md)
- [TokensForwardingFailData](docs/Model/TokensForwardingFailData.md)
- [TokensForwardingFailDataItem](docs/Model/TokensForwardingFailDataItem.md)
- [TokensForwardingSuccess](docs/Model/TokensForwardingSuccess.md)
- [TokensForwardingSuccessData](docs/Model/TokensForwardingSuccessData.md)
- [TokensForwardingSuccessDataItem](docs/Model/TokensForwardingSuccessDataItem.md)
- [TokensForwardingSuccessEthereumerc20token](docs/Model/TokensForwardingSuccessEthereumerc20token.md)
- [TokensForwardingSuccessEthereumerc721token](docs/Model/TokensForwardingSuccessEthereumerc721token.md)
- [TokensForwardingSuccessOmnilayertoken](docs/Model/TokensForwardingSuccessOmnilayertoken.md)
- [TokensForwardingSuccessToken](docs/Model/TokensForwardingSuccessToken.md)
- [TransactionMined](docs/Model/TransactionMined.md)
- [TransactionMinedData](docs/Model/TransactionMinedData.md)
- [TransactionMinedDataItem](docs/Model/TransactionMinedDataItem.md)
- [TransactionMinedDataItemMinedInBlock](docs/Model/TransactionMinedDataItemMinedInBlock.md)
- [UnexpectedServerError](docs/Model/UnexpectedServerError.md)
- [UnexpectedServerErrorError](docs/Model/UnexpectedServerErrorError.md)
- [UnsupportedMediaType](docs/Model/UnsupportedMediaType.md)
- [UnsupportedMediaTypeError](docs/Model/UnsupportedMediaTypeError.md)
- [UriNotFound](docs/Model/UriNotFound.md)
- [UriNotFoundError](docs/Model/UriNotFoundError.md)
- [ValidateAddressRequestBody](docs/Model/ValidateAddressRequestBody.md)
- [ValidateAddressRequestBodyData](docs/Model/ValidateAddressRequestBodyData.md)
- [ValidateAddressRequestBodyDataItem](docs/Model/ValidateAddressRequestBodyDataItem.md)
- [ValidateAddressResponse](docs/Model/ValidateAddressResponse.md)
- [ValidateAddressResponseData](docs/Model/ValidateAddressResponseData.md)
- [ValidateAddressResponseItem](docs/Model/ValidateAddressResponseItem.md)
- [XpubNotSynced](docs/Model/XpubNotSynced.md)
- [XpubNotSyncedError](docs/Model/XpubNotSyncedError.md)
- [XpubSyncInProgress](docs/Model/XpubSyncInProgress.md)
- [XpubSyncInProgressError](docs/Model/XpubSyncInProgressError.md)

## Authorization

### ApiKey

- **Type**: API key
- **API key parameter name**: x-api-key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

developers@cryptoapis.io

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`

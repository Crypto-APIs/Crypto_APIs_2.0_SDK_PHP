# cryptoapis/sdk

Crypto APIs 2.0 is a complex and innovative infrastructure layer that radically simplifies the development of any Blockchain and Crypto related applications. Organized around REST, Crypto APIs 2.0 can assist both novice Bitcoin/Ethereum enthusiasts and crypto experts with the development of their blockchain applications. Crypto APIs 2.0 provides unified endpoints and data, raw data, automatic tokens and coins forwardings, callback functionalities, and much more.

For more information, please visit [https://cryptoapis.io](https://cryptoapis.io).

## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "require": {
    "cryptoapis/sdk": "^1.1.0"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/cryptoapis/sdk/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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
*CreateSubscriptionsForApi* | [**newConfirmedInternalTransactions**](docs/Api/CreateSubscriptionsForApi.md#newconfirmedinternaltransactions) | **POST** /blockchain-events/{blockchain}/{network}/subscriptions/address-internal-transactions-confirmed | New confirmed internal transactions
*CreateSubscriptionsForApi* | [**newConfirmedInternalTransactionsAndEachConfirmation**](docs/Api/CreateSubscriptionsForApi.md#newconfirmedinternaltransactionsandeachconfirmation) | **POST** /blockchain-events/{blockchain}/{network}/subscriptions/address-internal-transactions-confirmed-each-confirmation | New confirmed internal transactions and each confirmation
*CreateSubscriptionsForApi* | [**newConfirmedTokensTransactions**](docs/Api/CreateSubscriptionsForApi.md#newconfirmedtokenstransactions) | **POST** /blockchain-events/{blockchain}/{network}/subscriptions/address-tokens-transactions-confirmed | New confirmed tokens transactions
*CreateSubscriptionsForApi* | [**newConfirmedTokensTransactionsAndEachConfirmation**](docs/Api/CreateSubscriptionsForApi.md#newconfirmedtokenstransactionsandeachconfirmation) | **POST** /blockchain-events/{blockchain}/{network}/subscriptions/address-tokens-transactions-confirmed-each-confirmation | New confirmed tokens transactions and each confirmation
*CreateSubscriptionsForApi* | [**newUnconfirmedCoinsTransactions**](docs/Api/CreateSubscriptionsForApi.md#newunconfirmedcoinstransactions) | **POST** /blockchain-events/{blockchain}/{network}/subscriptions/address-coins-transactions-unconfirmed | New unconfirmed coins transactions
*CreateSubscriptionsForApi* | [**newUnconfirmedTokensTransactions**](docs/Api/CreateSubscriptionsForApi.md#newunconfirmedtokenstransactions) | **POST** /blockchain-events/{blockchain}/{network}/subscriptions/address-tokens-transactions-unconfirmed | New unconfirmed tokens transactions
*ExchangeRatesApi* | [**getExchangeRateByAssetSymbols**](docs/Api/ExchangeRatesApi.md#getexchangeratebyassetsymbols) | **GET** /market-data/exchange-rates/by-symbols/{fromAssetSymbol}/{toAssetSymbol} | Get Exchange Rate By Asset Symbols
*ExchangeRatesApi* | [**getExchangeRateByAssetsIDs**](docs/Api/ExchangeRatesApi.md#getexchangeratebyassetsids) | **GET** /market-data/exchange-rates/by-asset-ids/{fromAssetId}/{toAssetId} | Get Exchange Rate By Assets IDs
*GeneratingApi* | [**generateReceivingAddress**](docs/Api/GeneratingApi.md#generatereceivingaddress) | **POST** /wallet-as-a-service/wallets/{walletId}/{blockchain}/{network}/addresses | Generate Receiving Address
*InformativeApi* | [**getWalletAssetDetails**](docs/Api/InformativeApi.md#getwalletassetdetails) | **GET** /wallet-as-a-service/wallets/{walletId}/{blockchain}/{network} | Get Wallet Asset Details
*InformativeApi* | [**listReceivingAddresses**](docs/Api/InformativeApi.md#listreceivingaddresses) | **GET** /wallet-as-a-service/wallets/{walletId}/{blockchain}/{network}/addresses | List Receiving Addresses
*InformativeApi* | [**listSupportedTokens**](docs/Api/InformativeApi.md#listsupportedtokens) | **GET** /wallet-as-a-service/info/{blockchain}/{network}/supported-tokens | List Supported Tokens
*InternalApi* | [**getInternalTransactionByTransactionHashAndOperationId**](docs/Api/InternalApi.md#getinternaltransactionbytransactionhashandoperationid) | **GET** /blockchain-data/{blockchain}/{network}/transactions/{transactionHash}/internal/{operationId} | Get Internal Transaction by Transaction Hash and Operation Id
*InternalApi* | [**listInternalTransactionDetailsByTransactionHash**](docs/Api/InternalApi.md#listinternaltransactiondetailsbytransactionhash) | **GET** /blockchain-data/{blockchain}/{network}/transactions/{transactionHash}/internal | List Internal Transaction Details by Transaction Hash
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
*TokensApi* | [**getContractDetailsByAddress**](docs/Api/TokensApi.md#getcontractdetailsbyaddress) | **GET** /blockchain-data/{blockchain}/{network}/addresses/{contractAddress}/contract | Get Contract Details by Address
*TokensApi* | [**listTokensByAddress**](docs/Api/TokensApi.md#listtokensbyaddress) | **GET** /blockchain-data/{blockchain}/{network}/addresses/{address}/tokens | List Tokens By Address
*TokensApi* | [**listTokensTransfersByAddress**](docs/Api/TokensApi.md#listtokenstransfersbyaddress) | **GET** /blockchain-data/{blockchain}/{network}/addresses/{address}/tokens-transfers | List Tokens Transfers By Address
*TokensApi* | [**listTokensTransfersByTransactionHash**](docs/Api/TokensApi.md#listtokenstransfersbytransactionhash) | **GET** /blockchain-data/{blockchain}/{network}/transactions/{transactionHash}/tokens-transfers | List Tokens Transfers By Transaction Hash
*TransactionsApi* | [**createCoinsTransactionRequestFromAddress**](docs/Api/TransactionsApi.md#createcoinstransactionrequestfromaddress) | **POST** /wallet-as-a-service/wallets/{walletId}/{blockchain}/{network}/addresses/{address}/transaction-requests | Create Coins Transaction Request from Address
*TransactionsApi* | [**createCoinsTransactionRequestFromWallet**](docs/Api/TransactionsApi.md#createcoinstransactionrequestfromwallet) | **POST** /wallet-as-a-service/wallets/{walletId}/{blockchain}/{network}/transaction-requests | Create Coins Transaction Request from Wallet
*TransactionsApi* | [**createTokensTransactionRequestFromAddress**](docs/Api/TransactionsApi.md#createtokenstransactionrequestfromaddress) | **POST** /wallet-as-a-service/wallets/{walletId}/{blockchain}/{network}/addresses/{address}/token-transaction-requests | Create Tokens Transaction Request from Address
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
*XRPRippleApi* | [**getLatestMinedXRPRippleBlock**](docs/Api/XRPRippleApi.md#getlatestminedxrprippleblock) | **GET** /blockchain-data/xrp-specific/{network}/blocks/last | Get Latest Mined XRP (Ripple) Block
*XRPRippleApi* | [**getXRPRippleAddressDetails**](docs/Api/XRPRippleApi.md#getxrprippleaddressdetails) | **GET** /blockchain-data/xrp-specific/{network}/addresses/{address} | Get XRP (Ripple) Address Details
*XRPRippleApi* | [**getXRPRippleBlockDetailsByBlockHash**](docs/Api/XRPRippleApi.md#getxrprippleblockdetailsbyblockhash) | **GET** /blockchain-data/xrp-specific/{network}/blocks/hash/{blockHash} | Get XRP (Ripple) Block Details By Block Hash
*XRPRippleApi* | [**getXRPRippleBlockDetailsByBlockHeight**](docs/Api/XRPRippleApi.md#getxrprippleblockdetailsbyblockheight) | **GET** /blockchain-data/xrp-specific/{network}/blocks/height/{blockHeight} | Get XRP (Ripple) Block Details By Block Height
*XRPRippleApi* | [**getXRPRippleTransactionDetailsByTransactionID**](docs/Api/XRPRippleApi.md#getxrprippletransactiondetailsbytransactionid) | **GET** /blockchain-data/xrp-specific/{network}/transactions/{transactionHash} | Get XRP (Ripple) Transaction Details By Transaction ID
*XRPRippleApi* | [**listXRPRippleTransactionsByAddress**](docs/Api/XRPRippleApi.md#listxrprippletransactionsbyaddress) | **GET** /blockchain-data/xrp-specific/{network}/addresses/{address}/transactions | List XRP (Ripple) Transactions by Address
*XRPRippleApi* | [**listXRPRippleTransactionsByBlockHash**](docs/Api/XRPRippleApi.md#listxrprippletransactionsbyblockhash) | **GET** /blockchain-data/xrp-specific/{network}/blocks/hash/{blockHash}/transactions | List XRP (Ripple) Transactions By Block Hash
*XRPRippleApi* | [**listXRPRippleTransactionsByBlockHeight**](docs/Api/XRPRippleApi.md#listxrprippletransactionsbyblockheight) | **GET** /blockchain-data/xrp-specific/{network}/blocks/height/{blockHeight}/transactions | List XRP (Ripple) Transactions By Block Height
*ZilliqaApi* | [**getLatestMinedZilliqaBlock**](docs/Api/ZilliqaApi.md#getlatestminedzilliqablock) | **GET** /blockchain-data/zilliqa-specific/{network}/blocks/last | Get Latest Mined Zilliqa Block
*ZilliqaApi* | [**getZilliqaAddressDetails**](docs/Api/ZilliqaApi.md#getzilliqaaddressdetails) | **GET** /blockchain-data/zilliqa-specific/{network}/addresses/{address} | Get Zilliqa Address Details
*ZilliqaApi* | [**getZilliqaBlockDetailsByBlockHash**](docs/Api/ZilliqaApi.md#getzilliqablockdetailsbyblockhash) | **GET** /blockchain-data/zilliqa-specific/{network}/blocks/hash/{blockHash} | Get Zilliqa Block Details By Block Hash
*ZilliqaApi* | [**getZilliqaBlockDetailsByBlockHeight**](docs/Api/ZilliqaApi.md#getzilliqablockdetailsbyblockheight) | **GET** /blockchain-data/zilliqa-specific/{network}/blocks/height/{blockHeight} | Get Zilliqa Block Details By Block Height
*ZilliqaApi* | [**getZilliqaTransactionDetailsByTransactionID**](docs/Api/ZilliqaApi.md#getzilliqatransactiondetailsbytransactionid) | **GET** /blockchain-data/zilliqa-specific/{network}/transactions/{transactionHash} | Get Zilliqa Transaction Details by Transaction ID
*ZilliqaApi* | [**listZilliqaTransactionsByAddress**](docs/Api/ZilliqaApi.md#listzilliqatransactionsbyaddress) | **GET** /blockchain-data/zilliqa-specific/{network}/addresses/{address}/transactions | List Zilliqa Transactions by Address
*ZilliqaApi* | [**listZilliqaTransactionsByBlockHash**](docs/Api/ZilliqaApi.md#listzilliqatransactionsbyblockhash) | **GET** /blockchain-data/zilliqa-specific/{network}/blocks/hash/{blockHash}/transactions | List Zilliqa Transactions By Block Hash
*ZilliqaApi* | [**listZilliqaTransactionsByBlockHeight**](docs/Api/ZilliqaApi.md#listzilliqatransactionsbyblockheight) | **GET** /blockchain-data/zilliqa-specific/{network}/blocks/height/{blockHeight}/transactions | List Zilliqa Transactions By Block Height

## Models

- [AddTokensToExistingFromAddressR](docs/Model/AddTokensToExistingFromAddressR.md)
- [AddTokensToExistingFromAddressRB](docs/Model/AddTokensToExistingFromAddressRB.md)
- [AddTokensToExistingFromAddressRBData](docs/Model/AddTokensToExistingFromAddressRBData.md)
- [AddTokensToExistingFromAddressRBDataItem](docs/Model/AddTokensToExistingFromAddressRBDataItem.md)
- [AddTokensToExistingFromAddressRBTokenData](docs/Model/AddTokensToExistingFromAddressRBTokenData.md)
- [AddTokensToExistingFromAddressRBTokenDataBitcoinOmniToken](docs/Model/AddTokensToExistingFromAddressRBTokenDataBitcoinOmniToken.md)
- [AddTokensToExistingFromAddressRBTokenDataEthereumErc20Token](docs/Model/AddTokensToExistingFromAddressRBTokenDataEthereumErc20Token.md)
- [AddTokensToExistingFromAddressRData](docs/Model/AddTokensToExistingFromAddressRData.md)
- [AddTokensToExistingFromAddressRI](docs/Model/AddTokensToExistingFromAddressRI.md)
- [AddTokensToExistingFromAddressRITS](docs/Model/AddTokensToExistingFromAddressRITS.md)
- [AddTokensToExistingFromAddressRITSBOT](docs/Model/AddTokensToExistingFromAddressRITSBOT.md)
- [AddTokensToExistingFromAddressRITSEET](docs/Model/AddTokensToExistingFromAddressRITSEET.md)
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
- [BlockchainDataInternalTransactionNotFound](docs/Model/BlockchainDataInternalTransactionNotFound.md)
- [BlockchainDataInternalTransactionNotFoundError](docs/Model/BlockchainDataInternalTransactionNotFoundError.md)
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
- [CreateAutomaticCoinsForwardingR](docs/Model/CreateAutomaticCoinsForwardingR.md)
- [CreateAutomaticCoinsForwardingRB](docs/Model/CreateAutomaticCoinsForwardingRB.md)
- [CreateAutomaticCoinsForwardingRBData](docs/Model/CreateAutomaticCoinsForwardingRBData.md)
- [CreateAutomaticCoinsForwardingRBDataItem](docs/Model/CreateAutomaticCoinsForwardingRBDataItem.md)
- [CreateAutomaticCoinsForwardingRData](docs/Model/CreateAutomaticCoinsForwardingRData.md)
- [CreateAutomaticCoinsForwardingRI](docs/Model/CreateAutomaticCoinsForwardingRI.md)
- [CreateAutomaticTokensForwardingR](docs/Model/CreateAutomaticTokensForwardingR.md)
- [CreateAutomaticTokensForwardingRB](docs/Model/CreateAutomaticTokensForwardingRB.md)
- [CreateAutomaticTokensForwardingRBData](docs/Model/CreateAutomaticTokensForwardingRBData.md)
- [CreateAutomaticTokensForwardingRBDataItem](docs/Model/CreateAutomaticTokensForwardingRBDataItem.md)
- [CreateAutomaticTokensForwardingRBTokenData](docs/Model/CreateAutomaticTokensForwardingRBTokenData.md)
- [CreateAutomaticTokensForwardingRBTokenDataBitcoinOmniToken](docs/Model/CreateAutomaticTokensForwardingRBTokenDataBitcoinOmniToken.md)
- [CreateAutomaticTokensForwardingRBTokenDataEthereumToken](docs/Model/CreateAutomaticTokensForwardingRBTokenDataEthereumToken.md)
- [CreateAutomaticTokensForwardingRData](docs/Model/CreateAutomaticTokensForwardingRData.md)
- [CreateAutomaticTokensForwardingRI](docs/Model/CreateAutomaticTokensForwardingRI.md)
- [CreateAutomaticTokensForwardingRITS](docs/Model/CreateAutomaticTokensForwardingRITS.md)
- [CreateAutomaticTokensForwardingRITSBOT](docs/Model/CreateAutomaticTokensForwardingRITSBOT.md)
- [CreateAutomaticTokensForwardingRITSET](docs/Model/CreateAutomaticTokensForwardingRITSET.md)
- [CreateCoinsTransactionRequestFromAddressR](docs/Model/CreateCoinsTransactionRequestFromAddressR.md)
- [CreateCoinsTransactionRequestFromAddressRB](docs/Model/CreateCoinsTransactionRequestFromAddressRB.md)
- [CreateCoinsTransactionRequestFromAddressRBData](docs/Model/CreateCoinsTransactionRequestFromAddressRBData.md)
- [CreateCoinsTransactionRequestFromAddressRBDataItem](docs/Model/CreateCoinsTransactionRequestFromAddressRBDataItem.md)
- [CreateCoinsTransactionRequestFromAddressRData](docs/Model/CreateCoinsTransactionRequestFromAddressRData.md)
- [CreateCoinsTransactionRequestFromAddressRI](docs/Model/CreateCoinsTransactionRequestFromAddressRI.md)
- [CreateCoinsTransactionRequestFromAddressRIRecipients](docs/Model/CreateCoinsTransactionRequestFromAddressRIRecipients.md)
- [CreateCoinsTransactionRequestFromAddressRISenders](docs/Model/CreateCoinsTransactionRequestFromAddressRISenders.md)
- [CreateCoinsTransactionRequestFromWalletR](docs/Model/CreateCoinsTransactionRequestFromWalletR.md)
- [CreateCoinsTransactionRequestFromWalletRB](docs/Model/CreateCoinsTransactionRequestFromWalletRB.md)
- [CreateCoinsTransactionRequestFromWalletRBData](docs/Model/CreateCoinsTransactionRequestFromWalletRBData.md)
- [CreateCoinsTransactionRequestFromWalletRBDataItem](docs/Model/CreateCoinsTransactionRequestFromWalletRBDataItem.md)
- [CreateCoinsTransactionRequestFromWalletRBDataItemDestinations](docs/Model/CreateCoinsTransactionRequestFromWalletRBDataItemDestinations.md)
- [CreateCoinsTransactionRequestFromWalletRData](docs/Model/CreateCoinsTransactionRequestFromWalletRData.md)
- [CreateCoinsTransactionRequestFromWalletRI](docs/Model/CreateCoinsTransactionRequestFromWalletRI.md)
- [CreateCoinsTransactionRequestFromWalletRIRecipients](docs/Model/CreateCoinsTransactionRequestFromWalletRIRecipients.md)
- [CreateTokensTransactionRequestFromAddressR](docs/Model/CreateTokensTransactionRequestFromAddressR.md)
- [CreateTokensTransactionRequestFromAddressRB](docs/Model/CreateTokensTransactionRequestFromAddressRB.md)
- [CreateTokensTransactionRequestFromAddressRBData](docs/Model/CreateTokensTransactionRequestFromAddressRBData.md)
- [CreateTokensTransactionRequestFromAddressRBDataItem](docs/Model/CreateTokensTransactionRequestFromAddressRBDataItem.md)
- [CreateTokensTransactionRequestFromAddressRData](docs/Model/CreateTokensTransactionRequestFromAddressRData.md)
- [CreateTokensTransactionRequestFromAddressRI](docs/Model/CreateTokensTransactionRequestFromAddressRI.md)
- [CreateTokensTransactionRequestFromAddressRIRecipients](docs/Model/CreateTokensTransactionRequestFromAddressRIRecipients.md)
- [CreateTokensTransactionRequestFromAddressRISenders](docs/Model/CreateTokensTransactionRequestFromAddressRISenders.md)
- [CreateTokensTransactionRequestFromAddressRITokenTypeSpecificData](docs/Model/CreateTokensTransactionRequestFromAddressRITokenTypeSpecificData.md)
- [CreateTokensTransactionRequestFromAddressRITokenTypeSpecificDataBitcoinOmniToken](docs/Model/CreateTokensTransactionRequestFromAddressRITokenTypeSpecificDataBitcoinOmniToken.md)
- [CreateTokensTransactionRequestFromAddressRITokenTypeSpecificDataEthereumErc20Token](docs/Model/CreateTokensTransactionRequestFromAddressRITokenTypeSpecificDataEthereumErc20Token.md)
- [DeleteAutomaticCoinsForwardingR](docs/Model/DeleteAutomaticCoinsForwardingR.md)
- [DeleteAutomaticCoinsForwardingRData](docs/Model/DeleteAutomaticCoinsForwardingRData.md)
- [DeleteAutomaticCoinsForwardingRI](docs/Model/DeleteAutomaticCoinsForwardingRI.md)
- [DeleteAutomaticTokensForwardingR](docs/Model/DeleteAutomaticTokensForwardingR.md)
- [DeleteAutomaticTokensForwardingRData](docs/Model/DeleteAutomaticTokensForwardingRData.md)
- [DeleteAutomaticTokensForwardingRI](docs/Model/DeleteAutomaticTokensForwardingRI.md)
- [DeleteAutomaticTokensForwardingRITS](docs/Model/DeleteAutomaticTokensForwardingRITS.md)
- [DeleteAutomaticTokensForwardingRITSBOT](docs/Model/DeleteAutomaticTokensForwardingRITSBOT.md)
- [DeleteAutomaticTokensForwardingRITSET](docs/Model/DeleteAutomaticTokensForwardingRITSET.md)
- [DeleteBlockchainEventSubscriptionR](docs/Model/DeleteBlockchainEventSubscriptionR.md)
- [DeleteBlockchainEventSubscriptionRData](docs/Model/DeleteBlockchainEventSubscriptionRData.md)
- [DeleteBlockchainEventSubscriptionRI](docs/Model/DeleteBlockchainEventSubscriptionRI.md)
- [EndpointNotAllowedForApiKey](docs/Model/EndpointNotAllowedForApiKey.md)
- [EndpointNotAllowedForApiKeyError](docs/Model/EndpointNotAllowedForApiKeyError.md)
- [EndpointNotAllowedForPlan](docs/Model/EndpointNotAllowedForPlan.md)
- [EndpointNotAllowedForPlanError](docs/Model/EndpointNotAllowedForPlanError.md)
- [FeatureMainnetsNotAllowedForPlan](docs/Model/FeatureMainnetsNotAllowedForPlan.md)
- [FeatureMainnetsNotAllowedForPlanError](docs/Model/FeatureMainnetsNotAllowedForPlanError.md)
- [GenerateReceivingAddressR](docs/Model/GenerateReceivingAddressR.md)
- [GenerateReceivingAddressRB](docs/Model/GenerateReceivingAddressRB.md)
- [GenerateReceivingAddressRBData](docs/Model/GenerateReceivingAddressRBData.md)
- [GenerateReceivingAddressRBDataItem](docs/Model/GenerateReceivingAddressRBDataItem.md)
- [GenerateReceivingAddressRData](docs/Model/GenerateReceivingAddressRData.md)
- [GenerateReceivingAddressRI](docs/Model/GenerateReceivingAddressRI.md)
- [GetAddressDetailsR](docs/Model/GetAddressDetailsR.md)
- [GetAddressDetailsRData](docs/Model/GetAddressDetailsRData.md)
- [GetAddressDetailsRI](docs/Model/GetAddressDetailsRI.md)
- [GetAddressDetailsRIConfirmedBalance](docs/Model/GetAddressDetailsRIConfirmedBalance.md)
- [GetAddressDetailsRITotalReceived](docs/Model/GetAddressDetailsRITotalReceived.md)
- [GetAddressDetailsRITotalSpent](docs/Model/GetAddressDetailsRITotalSpent.md)
- [GetBlockDetailsByBlockHashR](docs/Model/GetBlockDetailsByBlockHashR.md)
- [GetBlockDetailsByBlockHashRData](docs/Model/GetBlockDetailsByBlockHashRData.md)
- [GetBlockDetailsByBlockHashRI](docs/Model/GetBlockDetailsByBlockHashRI.md)
- [GetBlockDetailsByBlockHashRIBS](docs/Model/GetBlockDetailsByBlockHashRIBS.md)
- [GetBlockDetailsByBlockHashRIBSB](docs/Model/GetBlockDetailsByBlockHashRIBSB.md)
- [GetBlockDetailsByBlockHashRIBSBC](docs/Model/GetBlockDetailsByBlockHashRIBSBC.md)
- [GetBlockDetailsByBlockHashRIBSD](docs/Model/GetBlockDetailsByBlockHashRIBSD.md)
- [GetBlockDetailsByBlockHashRIBSD2](docs/Model/GetBlockDetailsByBlockHashRIBSD2.md)
- [GetBlockDetailsByBlockHashRIBSE](docs/Model/GetBlockDetailsByBlockHashRIBSE.md)
- [GetBlockDetailsByBlockHashRIBSEC](docs/Model/GetBlockDetailsByBlockHashRIBSEC.md)
- [GetBlockDetailsByBlockHashRIBSL](docs/Model/GetBlockDetailsByBlockHashRIBSL.md)
- [GetBlockDetailsByBlockHeightR](docs/Model/GetBlockDetailsByBlockHeightR.md)
- [GetBlockDetailsByBlockHeightRData](docs/Model/GetBlockDetailsByBlockHeightRData.md)
- [GetBlockDetailsByBlockHeightRI](docs/Model/GetBlockDetailsByBlockHeightRI.md)
- [GetBlockDetailsByBlockHeightRIBS](docs/Model/GetBlockDetailsByBlockHeightRIBS.md)
- [GetBlockDetailsByBlockHeightRIBSB](docs/Model/GetBlockDetailsByBlockHeightRIBSB.md)
- [GetBlockDetailsByBlockHeightRIBSBC](docs/Model/GetBlockDetailsByBlockHeightRIBSBC.md)
- [GetBlockDetailsByBlockHeightRIBSD](docs/Model/GetBlockDetailsByBlockHeightRIBSD.md)
- [GetBlockDetailsByBlockHeightRIBSD2](docs/Model/GetBlockDetailsByBlockHeightRIBSD2.md)
- [GetBlockDetailsByBlockHeightRIBSE](docs/Model/GetBlockDetailsByBlockHeightRIBSE.md)
- [GetBlockDetailsByBlockHeightRIBSEC](docs/Model/GetBlockDetailsByBlockHeightRIBSEC.md)
- [GetBlockDetailsByBlockHeightRIBSL](docs/Model/GetBlockDetailsByBlockHeightRIBSL.md)
- [GetContractDetailsByAddressR](docs/Model/GetContractDetailsByAddressR.md)
- [GetContractDetailsByAddressRData](docs/Model/GetContractDetailsByAddressRData.md)
- [GetContractDetailsByAddressRI](docs/Model/GetContractDetailsByAddressRI.md)
- [GetExchangeRateByAssetSymbolsR](docs/Model/GetExchangeRateByAssetSymbolsR.md)
- [GetExchangeRateByAssetSymbolsRData](docs/Model/GetExchangeRateByAssetSymbolsRData.md)
- [GetExchangeRateByAssetSymbolsRI](docs/Model/GetExchangeRateByAssetSymbolsRI.md)
- [GetExchangeRateByAssetsIDsR](docs/Model/GetExchangeRateByAssetsIDsR.md)
- [GetExchangeRateByAssetsIDsRData](docs/Model/GetExchangeRateByAssetsIDsRData.md)
- [GetExchangeRateByAssetsIDsRI](docs/Model/GetExchangeRateByAssetsIDsRI.md)
- [GetFeeAddressDetailsR](docs/Model/GetFeeAddressDetailsR.md)
- [GetFeeAddressDetailsRData](docs/Model/GetFeeAddressDetailsRData.md)
- [GetFeeAddressDetailsRI](docs/Model/GetFeeAddressDetailsRI.md)
- [GetFeeAddressDetailsRIBalance](docs/Model/GetFeeAddressDetailsRIBalance.md)
- [GetFeeRecommendationsR](docs/Model/GetFeeRecommendationsR.md)
- [GetFeeRecommendationsRData](docs/Model/GetFeeRecommendationsRData.md)
- [GetFeeRecommendationsRI](docs/Model/GetFeeRecommendationsRI.md)
- [GetHDWalletXPubYPubZPubDetailsR](docs/Model/GetHDWalletXPubYPubZPubDetailsR.md)
- [GetHDWalletXPubYPubZPubDetailsRData](docs/Model/GetHDWalletXPubYPubZPubDetailsRData.md)
- [GetHDWalletXPubYPubZPubDetailsRI](docs/Model/GetHDWalletXPubYPubZPubDetailsRI.md)
- [GetInternalTransactionByTransactionHashAndOperationIdR](docs/Model/GetInternalTransactionByTransactionHashAndOperationIdR.md)
- [GetInternalTransactionByTransactionHashAndOperationIdRData](docs/Model/GetInternalTransactionByTransactionHashAndOperationIdRData.md)
- [GetInternalTransactionByTransactionHashAndOperationIdRI](docs/Model/GetInternalTransactionByTransactionHashAndOperationIdRI.md)
- [GetLatestMinedBlockR](docs/Model/GetLatestMinedBlockR.md)
- [GetLatestMinedBlockRData](docs/Model/GetLatestMinedBlockRData.md)
- [GetLatestMinedBlockRI](docs/Model/GetLatestMinedBlockRI.md)
- [GetLatestMinedBlockRIBS](docs/Model/GetLatestMinedBlockRIBS.md)
- [GetLatestMinedBlockRIBSB](docs/Model/GetLatestMinedBlockRIBSB.md)
- [GetLatestMinedBlockRIBSBC](docs/Model/GetLatestMinedBlockRIBSBC.md)
- [GetLatestMinedBlockRIBSD](docs/Model/GetLatestMinedBlockRIBSD.md)
- [GetLatestMinedBlockRIBSD2](docs/Model/GetLatestMinedBlockRIBSD2.md)
- [GetLatestMinedBlockRIBSE](docs/Model/GetLatestMinedBlockRIBSE.md)
- [GetLatestMinedBlockRIBSEC](docs/Model/GetLatestMinedBlockRIBSEC.md)
- [GetLatestMinedBlockRIBSL](docs/Model/GetLatestMinedBlockRIBSL.md)
- [GetLatestMinedXRPRippleBlockR](docs/Model/GetLatestMinedXRPRippleBlockR.md)
- [GetLatestMinedXRPRippleBlockRData](docs/Model/GetLatestMinedXRPRippleBlockRData.md)
- [GetLatestMinedXRPRippleBlockRI](docs/Model/GetLatestMinedXRPRippleBlockRI.md)
- [GetLatestMinedXRPRippleBlockRITotalCoins](docs/Model/GetLatestMinedXRPRippleBlockRITotalCoins.md)
- [GetLatestMinedXRPRippleBlockRITotalFees](docs/Model/GetLatestMinedXRPRippleBlockRITotalFees.md)
- [GetLatestMinedZilliqaBlockR](docs/Model/GetLatestMinedZilliqaBlockR.md)
- [GetLatestMinedZilliqaBlockRData](docs/Model/GetLatestMinedZilliqaBlockRData.md)
- [GetLatestMinedZilliqaBlockRI](docs/Model/GetLatestMinedZilliqaBlockRI.md)
- [GetOmniTransactionDetailsByTransactionIDTxidR](docs/Model/GetOmniTransactionDetailsByTransactionIDTxidR.md)
- [GetOmniTransactionDetailsByTransactionIDTxidRData](docs/Model/GetOmniTransactionDetailsByTransactionIDTxidRData.md)
- [GetOmniTransactionDetailsByTransactionIDTxidRI](docs/Model/GetOmniTransactionDetailsByTransactionIDTxidRI.md)
- [GetOmniTransactionDetailsByTransactionIDTxidRISenders](docs/Model/GetOmniTransactionDetailsByTransactionIDTxidRISenders.md)
- [GetTransactionDetailsByTransactionIDR](docs/Model/GetTransactionDetailsByTransactionIDR.md)
- [GetTransactionDetailsByTransactionIDRData](docs/Model/GetTransactionDetailsByTransactionIDRData.md)
- [GetTransactionDetailsByTransactionIDRI](docs/Model/GetTransactionDetailsByTransactionIDRI.md)
- [GetTransactionDetailsByTransactionIDRIBS](docs/Model/GetTransactionDetailsByTransactionIDRIBS.md)
- [GetTransactionDetailsByTransactionIDRIBSB](docs/Model/GetTransactionDetailsByTransactionIDRIBSB.md)
- [GetTransactionDetailsByTransactionIDRIBSBC](docs/Model/GetTransactionDetailsByTransactionIDRIBSBC.md)
- [GetTransactionDetailsByTransactionIDRIBSBCScriptPubKey](docs/Model/GetTransactionDetailsByTransactionIDRIBSBCScriptPubKey.md)
- [GetTransactionDetailsByTransactionIDRIBSBCVin](docs/Model/GetTransactionDetailsByTransactionIDRIBSBCVin.md)
- [GetTransactionDetailsByTransactionIDRIBSBCVout](docs/Model/GetTransactionDetailsByTransactionIDRIBSBCVout.md)
- [GetTransactionDetailsByTransactionIDRIBSBScriptPubKey](docs/Model/GetTransactionDetailsByTransactionIDRIBSBScriptPubKey.md)
- [GetTransactionDetailsByTransactionIDRIBSBScriptSig](docs/Model/GetTransactionDetailsByTransactionIDRIBSBScriptSig.md)
- [GetTransactionDetailsByTransactionIDRIBSBVin](docs/Model/GetTransactionDetailsByTransactionIDRIBSBVin.md)
- [GetTransactionDetailsByTransactionIDRIBSBVout](docs/Model/GetTransactionDetailsByTransactionIDRIBSBVout.md)
- [GetTransactionDetailsByTransactionIDRIBSD](docs/Model/GetTransactionDetailsByTransactionIDRIBSD.md)
- [GetTransactionDetailsByTransactionIDRIBSD2](docs/Model/GetTransactionDetailsByTransactionIDRIBSD2.md)
- [GetTransactionDetailsByTransactionIDRIBSD2ScriptPubKey](docs/Model/GetTransactionDetailsByTransactionIDRIBSD2ScriptPubKey.md)
- [GetTransactionDetailsByTransactionIDRIBSD2ScriptSig](docs/Model/GetTransactionDetailsByTransactionIDRIBSD2ScriptSig.md)
- [GetTransactionDetailsByTransactionIDRIBSD2Vin](docs/Model/GetTransactionDetailsByTransactionIDRIBSD2Vin.md)
- [GetTransactionDetailsByTransactionIDRIBSD2Vout](docs/Model/GetTransactionDetailsByTransactionIDRIBSD2Vout.md)
- [GetTransactionDetailsByTransactionIDRIBSDScriptPubKey](docs/Model/GetTransactionDetailsByTransactionIDRIBSDScriptPubKey.md)
- [GetTransactionDetailsByTransactionIDRIBSDScriptSig](docs/Model/GetTransactionDetailsByTransactionIDRIBSDScriptSig.md)
- [GetTransactionDetailsByTransactionIDRIBSDVin](docs/Model/GetTransactionDetailsByTransactionIDRIBSDVin.md)
- [GetTransactionDetailsByTransactionIDRIBSDVout](docs/Model/GetTransactionDetailsByTransactionIDRIBSDVout.md)
- [GetTransactionDetailsByTransactionIDRIBSE](docs/Model/GetTransactionDetailsByTransactionIDRIBSE.md)
- [GetTransactionDetailsByTransactionIDRIBSEC](docs/Model/GetTransactionDetailsByTransactionIDRIBSEC.md)
- [GetTransactionDetailsByTransactionIDRIBSECGasPrice](docs/Model/GetTransactionDetailsByTransactionIDRIBSECGasPrice.md)
- [GetTransactionDetailsByTransactionIDRIBSEGasPrice](docs/Model/GetTransactionDetailsByTransactionIDRIBSEGasPrice.md)
- [GetTransactionDetailsByTransactionIDRIBSL](docs/Model/GetTransactionDetailsByTransactionIDRIBSL.md)
- [GetTransactionDetailsByTransactionIDRIBSLScriptPubKey](docs/Model/GetTransactionDetailsByTransactionIDRIBSLScriptPubKey.md)
- [GetTransactionDetailsByTransactionIDRIBSLScriptSig](docs/Model/GetTransactionDetailsByTransactionIDRIBSLScriptSig.md)
- [GetTransactionDetailsByTransactionIDRIBSLVin](docs/Model/GetTransactionDetailsByTransactionIDRIBSLVin.md)
- [GetTransactionDetailsByTransactionIDRIBSLVout](docs/Model/GetTransactionDetailsByTransactionIDRIBSLVout.md)
- [GetTransactionDetailsByTransactionIDRIFee](docs/Model/GetTransactionDetailsByTransactionIDRIFee.md)
- [GetTransactionDetailsByTransactionIDRIRecipients](docs/Model/GetTransactionDetailsByTransactionIDRIRecipients.md)
- [GetTransactionDetailsByTransactionIDRISenders](docs/Model/GetTransactionDetailsByTransactionIDRISenders.md)
- [GetUnconfirmedOmniTransactionByTransactionIDTxidR](docs/Model/GetUnconfirmedOmniTransactionByTransactionIDTxidR.md)
- [GetUnconfirmedOmniTransactionByTransactionIDTxidRData](docs/Model/GetUnconfirmedOmniTransactionByTransactionIDTxidRData.md)
- [GetUnconfirmedOmniTransactionByTransactionIDTxidRI](docs/Model/GetUnconfirmedOmniTransactionByTransactionIDTxidRI.md)
- [GetUnconfirmedOmniTransactionByTransactionIDTxidRIRecipients](docs/Model/GetUnconfirmedOmniTransactionByTransactionIDTxidRIRecipients.md)
- [GetUnconfirmedOmniTransactionByTransactionIDTxidRISenders](docs/Model/GetUnconfirmedOmniTransactionByTransactionIDTxidRISenders.md)
- [GetWalletAssetDetailsR](docs/Model/GetWalletAssetDetailsR.md)
- [GetWalletAssetDetailsRData](docs/Model/GetWalletAssetDetailsRData.md)
- [GetWalletAssetDetailsRI](docs/Model/GetWalletAssetDetailsRI.md)
- [GetWalletAssetDetailsRIConfirmedBalance](docs/Model/GetWalletAssetDetailsRIConfirmedBalance.md)
- [GetWalletAssetDetailsRIRecievedConfirmedAmount](docs/Model/GetWalletAssetDetailsRIRecievedConfirmedAmount.md)
- [GetWalletAssetDetailsRISentConfirmedAmount](docs/Model/GetWalletAssetDetailsRISentConfirmedAmount.md)
- [GetXRPRippleAddressDetailsR](docs/Model/GetXRPRippleAddressDetailsR.md)
- [GetXRPRippleAddressDetailsRData](docs/Model/GetXRPRippleAddressDetailsRData.md)
- [GetXRPRippleAddressDetailsRI](docs/Model/GetXRPRippleAddressDetailsRI.md)
- [GetXRPRippleAddressDetailsRIBalance](docs/Model/GetXRPRippleAddressDetailsRIBalance.md)
- [GetXRPRippleBlockDetailsByBlockHashR](docs/Model/GetXRPRippleBlockDetailsByBlockHashR.md)
- [GetXRPRippleBlockDetailsByBlockHashRData](docs/Model/GetXRPRippleBlockDetailsByBlockHashRData.md)
- [GetXRPRippleBlockDetailsByBlockHashRI](docs/Model/GetXRPRippleBlockDetailsByBlockHashRI.md)
- [GetXRPRippleBlockDetailsByBlockHashRITotalCoins](docs/Model/GetXRPRippleBlockDetailsByBlockHashRITotalCoins.md)
- [GetXRPRippleBlockDetailsByBlockHeightR](docs/Model/GetXRPRippleBlockDetailsByBlockHeightR.md)
- [GetXRPRippleBlockDetailsByBlockHeightRData](docs/Model/GetXRPRippleBlockDetailsByBlockHeightRData.md)
- [GetXRPRippleBlockDetailsByBlockHeightRI](docs/Model/GetXRPRippleBlockDetailsByBlockHeightRI.md)
- [GetXRPRippleBlockDetailsByBlockHeightRITotalCoins](docs/Model/GetXRPRippleBlockDetailsByBlockHeightRITotalCoins.md)
- [GetXRPRippleBlockDetailsByBlockHeightRITotalFees](docs/Model/GetXRPRippleBlockDetailsByBlockHeightRITotalFees.md)
- [GetXRPRippleTransactionDetailsByTransactionIDR](docs/Model/GetXRPRippleTransactionDetailsByTransactionIDR.md)
- [GetXRPRippleTransactionDetailsByTransactionIDRData](docs/Model/GetXRPRippleTransactionDetailsByTransactionIDRData.md)
- [GetXRPRippleTransactionDetailsByTransactionIDRI](docs/Model/GetXRPRippleTransactionDetailsByTransactionIDRI.md)
- [GetXRPRippleTransactionDetailsByTransactionIDRIFee](docs/Model/GetXRPRippleTransactionDetailsByTransactionIDRIFee.md)
- [GetXRPRippleTransactionDetailsByTransactionIDRIOffer](docs/Model/GetXRPRippleTransactionDetailsByTransactionIDRIOffer.md)
- [GetXRPRippleTransactionDetailsByTransactionIDRIReceive](docs/Model/GetXRPRippleTransactionDetailsByTransactionIDRIReceive.md)
- [GetXRPRippleTransactionDetailsByTransactionIDRIRecipients](docs/Model/GetXRPRippleTransactionDetailsByTransactionIDRIRecipients.md)
- [GetXRPRippleTransactionDetailsByTransactionIDRISenders](docs/Model/GetXRPRippleTransactionDetailsByTransactionIDRISenders.md)
- [GetXRPRippleTransactionDetailsByTransactionIDRIValue](docs/Model/GetXRPRippleTransactionDetailsByTransactionIDRIValue.md)
- [GetZilliqaAddressDetailsR](docs/Model/GetZilliqaAddressDetailsR.md)
- [GetZilliqaAddressDetailsRData](docs/Model/GetZilliqaAddressDetailsRData.md)
- [GetZilliqaAddressDetailsRI](docs/Model/GetZilliqaAddressDetailsRI.md)
- [GetZilliqaAddressDetailsRIBalance](docs/Model/GetZilliqaAddressDetailsRIBalance.md)
- [GetZilliqaBlockDetailsByBlockHashR](docs/Model/GetZilliqaBlockDetailsByBlockHashR.md)
- [GetZilliqaBlockDetailsByBlockHashRData](docs/Model/GetZilliqaBlockDetailsByBlockHashRData.md)
- [GetZilliqaBlockDetailsByBlockHashRI](docs/Model/GetZilliqaBlockDetailsByBlockHashRI.md)
- [GetZilliqaBlockDetailsByBlockHeightR](docs/Model/GetZilliqaBlockDetailsByBlockHeightR.md)
- [GetZilliqaBlockDetailsByBlockHeightRData](docs/Model/GetZilliqaBlockDetailsByBlockHeightRData.md)
- [GetZilliqaBlockDetailsByBlockHeightRI](docs/Model/GetZilliqaBlockDetailsByBlockHeightRI.md)
- [GetZilliqaTransactionDetailsByTransactionIDR](docs/Model/GetZilliqaTransactionDetailsByTransactionIDR.md)
- [GetZilliqaTransactionDetailsByTransactionIDRData](docs/Model/GetZilliqaTransactionDetailsByTransactionIDRData.md)
- [GetZilliqaTransactionDetailsByTransactionIDRI](docs/Model/GetZilliqaTransactionDetailsByTransactionIDRI.md)
- [GetZilliqaTransactionDetailsByTransactionIDRIFee](docs/Model/GetZilliqaTransactionDetailsByTransactionIDRIFee.md)
- [GetZilliqaTransactionDetailsByTransactionIDRIRecipients](docs/Model/GetZilliqaTransactionDetailsByTransactionIDRIRecipients.md)
- [GetZilliqaTransactionDetailsByTransactionIDRISenders](docs/Model/GetZilliqaTransactionDetailsByTransactionIDRISenders.md)
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
- [ListAssetsDetailsR](docs/Model/ListAssetsDetailsR.md)
- [ListAssetsDetailsRData](docs/Model/ListAssetsDetailsRData.md)
- [ListAssetsDetailsRI](docs/Model/ListAssetsDetailsRI.md)
- [ListAssetsDetailsRIAssetLogo](docs/Model/ListAssetsDetailsRIAssetLogo.md)
- [ListAssetsDetailsRILatestRate](docs/Model/ListAssetsDetailsRILatestRate.md)
- [ListAssetsDetailsRISpecificData](docs/Model/ListAssetsDetailsRISpecificData.md)
- [ListAssetsDetailsRISpecificDataCryptoTypeData](docs/Model/ListAssetsDetailsRISpecificDataCryptoTypeData.md)
- [ListBlockchainEventsSubscriptionsR](docs/Model/ListBlockchainEventsSubscriptionsR.md)
- [ListBlockchainEventsSubscriptionsRData](docs/Model/ListBlockchainEventsSubscriptionsRData.md)
- [ListBlockchainEventsSubscriptionsRI](docs/Model/ListBlockchainEventsSubscriptionsRI.md)
- [ListCoinsForwardingAutomationsR](docs/Model/ListCoinsForwardingAutomationsR.md)
- [ListCoinsForwardingAutomationsRData](docs/Model/ListCoinsForwardingAutomationsRData.md)
- [ListCoinsForwardingAutomationsRI](docs/Model/ListCoinsForwardingAutomationsRI.md)
- [ListHDWalletXPubYPubZPubTransactionsR](docs/Model/ListHDWalletXPubYPubZPubTransactionsR.md)
- [ListHDWalletXPubYPubZPubTransactionsRData](docs/Model/ListHDWalletXPubYPubZPubTransactionsRData.md)
- [ListHDWalletXPubYPubZPubTransactionsRI](docs/Model/ListHDWalletXPubYPubZPubTransactionsRI.md)
- [ListHDWalletXPubYPubZPubTransactionsRIFee](docs/Model/ListHDWalletXPubYPubZPubTransactionsRIFee.md)
- [ListHDWalletXPubYPubZPubTransactionsRIRecipients](docs/Model/ListHDWalletXPubYPubZPubTransactionsRIRecipients.md)
- [ListHDWalletXPubYPubZPubTransactionsRISenders](docs/Model/ListHDWalletXPubYPubZPubTransactionsRISenders.md)
- [ListInternalTransactionDetailsByTransactionHashR](docs/Model/ListInternalTransactionDetailsByTransactionHashR.md)
- [ListInternalTransactionDetailsByTransactionHashRData](docs/Model/ListInternalTransactionDetailsByTransactionHashRData.md)
- [ListInternalTransactionDetailsByTransactionHashRI](docs/Model/ListInternalTransactionDetailsByTransactionHashRI.md)
- [ListOmniTokensByAddressR](docs/Model/ListOmniTokensByAddressR.md)
- [ListOmniTokensByAddressRData](docs/Model/ListOmniTokensByAddressRData.md)
- [ListOmniTokensByAddressRI](docs/Model/ListOmniTokensByAddressRI.md)
- [ListOmniTransactionsByAddressR](docs/Model/ListOmniTransactionsByAddressR.md)
- [ListOmniTransactionsByAddressRData](docs/Model/ListOmniTransactionsByAddressRData.md)
- [ListOmniTransactionsByAddressRI](docs/Model/ListOmniTransactionsByAddressRI.md)
- [ListOmniTransactionsByAddressRIFee](docs/Model/ListOmniTransactionsByAddressRIFee.md)
- [ListOmniTransactionsByAddressRIRecipients](docs/Model/ListOmniTransactionsByAddressRIRecipients.md)
- [ListOmniTransactionsByAddressRISenders](docs/Model/ListOmniTransactionsByAddressRISenders.md)
- [ListOmniTransactionsByBlockHashR](docs/Model/ListOmniTransactionsByBlockHashR.md)
- [ListOmniTransactionsByBlockHashRData](docs/Model/ListOmniTransactionsByBlockHashRData.md)
- [ListOmniTransactionsByBlockHashRI](docs/Model/ListOmniTransactionsByBlockHashRI.md)
- [ListOmniTransactionsByBlockHashRIFee](docs/Model/ListOmniTransactionsByBlockHashRIFee.md)
- [ListOmniTransactionsByBlockHeightR](docs/Model/ListOmniTransactionsByBlockHeightR.md)
- [ListOmniTransactionsByBlockHeightRData](docs/Model/ListOmniTransactionsByBlockHeightRData.md)
- [ListOmniTransactionsByBlockHeightRI](docs/Model/ListOmniTransactionsByBlockHeightRI.md)
- [ListOmniTransactionsByBlockHeightRIFee](docs/Model/ListOmniTransactionsByBlockHeightRIFee.md)
- [ListOmniTransactionsByBlockHeightRIRecipients](docs/Model/ListOmniTransactionsByBlockHeightRIRecipients.md)
- [ListOmniTransactionsByBlockHeightRISenders](docs/Model/ListOmniTransactionsByBlockHeightRISenders.md)
- [ListReceivingAddressesR](docs/Model/ListReceivingAddressesR.md)
- [ListReceivingAddressesRData](docs/Model/ListReceivingAddressesRData.md)
- [ListReceivingAddressesRI](docs/Model/ListReceivingAddressesRI.md)
- [ListSupportedAssetsR](docs/Model/ListSupportedAssetsR.md)
- [ListSupportedAssetsRData](docs/Model/ListSupportedAssetsRData.md)
- [ListSupportedAssetsRI](docs/Model/ListSupportedAssetsRI.md)
- [ListSupportedTokensR](docs/Model/ListSupportedTokensR.md)
- [ListSupportedTokensRData](docs/Model/ListSupportedTokensRData.md)
- [ListSupportedTokensRI](docs/Model/ListSupportedTokensRI.md)
- [ListTokensByAddressR](docs/Model/ListTokensByAddressR.md)
- [ListTokensByAddressRData](docs/Model/ListTokensByAddressRData.md)
- [ListTokensByAddressRI](docs/Model/ListTokensByAddressRI.md)
- [ListTokensForwardingAutomationsR](docs/Model/ListTokensForwardingAutomationsR.md)
- [ListTokensForwardingAutomationsRData](docs/Model/ListTokensForwardingAutomationsRData.md)
- [ListTokensForwardingAutomationsRI](docs/Model/ListTokensForwardingAutomationsRI.md)
- [ListTokensForwardingAutomationsRITS](docs/Model/ListTokensForwardingAutomationsRITS.md)
- [ListTokensForwardingAutomationsRITSBOT](docs/Model/ListTokensForwardingAutomationsRITSBOT.md)
- [ListTokensForwardingAutomationsRITSET](docs/Model/ListTokensForwardingAutomationsRITSET.md)
- [ListTokensTransfersByAddressR](docs/Model/ListTokensTransfersByAddressR.md)
- [ListTokensTransfersByAddressRData](docs/Model/ListTokensTransfersByAddressRData.md)
- [ListTokensTransfersByAddressRI](docs/Model/ListTokensTransfersByAddressRI.md)
- [ListTokensTransfersByTransactionHashR](docs/Model/ListTokensTransfersByTransactionHashR.md)
- [ListTokensTransfersByTransactionHashRData](docs/Model/ListTokensTransfersByTransactionHashRData.md)
- [ListTokensTransfersByTransactionHashRI](docs/Model/ListTokensTransfersByTransactionHashRI.md)
- [ListTransactionsByAddressR](docs/Model/ListTransactionsByAddressR.md)
- [ListTransactionsByAddressRData](docs/Model/ListTransactionsByAddressRData.md)
- [ListTransactionsByAddressRI](docs/Model/ListTransactionsByAddressRI.md)
- [ListTransactionsByAddressRIBS](docs/Model/ListTransactionsByAddressRIBS.md)
- [ListTransactionsByAddressRIBSB](docs/Model/ListTransactionsByAddressRIBSB.md)
- [ListTransactionsByAddressRIBSBC](docs/Model/ListTransactionsByAddressRIBSBC.md)
- [ListTransactionsByAddressRIBSBCVin](docs/Model/ListTransactionsByAddressRIBSBCVin.md)
- [ListTransactionsByAddressRIBSBScriptPubKey](docs/Model/ListTransactionsByAddressRIBSBScriptPubKey.md)
- [ListTransactionsByAddressRIBSBVin](docs/Model/ListTransactionsByAddressRIBSBVin.md)
- [ListTransactionsByAddressRIBSBVout](docs/Model/ListTransactionsByAddressRIBSBVout.md)
- [ListTransactionsByAddressRIBSD](docs/Model/ListTransactionsByAddressRIBSD.md)
- [ListTransactionsByAddressRIBSD2](docs/Model/ListTransactionsByAddressRIBSD2.md)
- [ListTransactionsByAddressRIBSD2ScriptPubKey](docs/Model/ListTransactionsByAddressRIBSD2ScriptPubKey.md)
- [ListTransactionsByAddressRIBSD2ScriptSig](docs/Model/ListTransactionsByAddressRIBSD2ScriptSig.md)
- [ListTransactionsByAddressRIBSD2Vin](docs/Model/ListTransactionsByAddressRIBSD2Vin.md)
- [ListTransactionsByAddressRIBSD2Vout](docs/Model/ListTransactionsByAddressRIBSD2Vout.md)
- [ListTransactionsByAddressRIBSDScriptSig](docs/Model/ListTransactionsByAddressRIBSDScriptSig.md)
- [ListTransactionsByAddressRIBSDVin](docs/Model/ListTransactionsByAddressRIBSDVin.md)
- [ListTransactionsByAddressRIBSE](docs/Model/ListTransactionsByAddressRIBSE.md)
- [ListTransactionsByAddressRIBSEC](docs/Model/ListTransactionsByAddressRIBSEC.md)
- [ListTransactionsByAddressRIBSECGasPrice](docs/Model/ListTransactionsByAddressRIBSECGasPrice.md)
- [ListTransactionsByAddressRIBSEGasPrice](docs/Model/ListTransactionsByAddressRIBSEGasPrice.md)
- [ListTransactionsByAddressRIBSL](docs/Model/ListTransactionsByAddressRIBSL.md)
- [ListTransactionsByAddressRIBSLScriptSig](docs/Model/ListTransactionsByAddressRIBSLScriptSig.md)
- [ListTransactionsByAddressRIBSLVin](docs/Model/ListTransactionsByAddressRIBSLVin.md)
- [ListTransactionsByBlockHashR](docs/Model/ListTransactionsByBlockHashR.md)
- [ListTransactionsByBlockHashRData](docs/Model/ListTransactionsByBlockHashRData.md)
- [ListTransactionsByBlockHashRI](docs/Model/ListTransactionsByBlockHashRI.md)
- [ListTransactionsByBlockHashRIBS](docs/Model/ListTransactionsByBlockHashRIBS.md)
- [ListTransactionsByBlockHashRIBSB](docs/Model/ListTransactionsByBlockHashRIBSB.md)
- [ListTransactionsByBlockHashRIBSBC](docs/Model/ListTransactionsByBlockHashRIBSBC.md)
- [ListTransactionsByBlockHashRIBSBCScriptPubKey](docs/Model/ListTransactionsByBlockHashRIBSBCScriptPubKey.md)
- [ListTransactionsByBlockHashRIBSBCVin](docs/Model/ListTransactionsByBlockHashRIBSBCVin.md)
- [ListTransactionsByBlockHashRIBSBCVout](docs/Model/ListTransactionsByBlockHashRIBSBCVout.md)
- [ListTransactionsByBlockHashRIBSBVin](docs/Model/ListTransactionsByBlockHashRIBSBVin.md)
- [ListTransactionsByBlockHashRIBSD](docs/Model/ListTransactionsByBlockHashRIBSD.md)
- [ListTransactionsByBlockHashRIBSD2](docs/Model/ListTransactionsByBlockHashRIBSD2.md)
- [ListTransactionsByBlockHashRIBSD2ScriptPubKey](docs/Model/ListTransactionsByBlockHashRIBSD2ScriptPubKey.md)
- [ListTransactionsByBlockHashRIBSD2ScriptSig](docs/Model/ListTransactionsByBlockHashRIBSD2ScriptSig.md)
- [ListTransactionsByBlockHashRIBSD2Vin](docs/Model/ListTransactionsByBlockHashRIBSD2Vin.md)
- [ListTransactionsByBlockHashRIBSD2Vout](docs/Model/ListTransactionsByBlockHashRIBSD2Vout.md)
- [ListTransactionsByBlockHashRIBSDScriptPubKey](docs/Model/ListTransactionsByBlockHashRIBSDScriptPubKey.md)
- [ListTransactionsByBlockHashRIBSDVin](docs/Model/ListTransactionsByBlockHashRIBSDVin.md)
- [ListTransactionsByBlockHashRIBSDVout](docs/Model/ListTransactionsByBlockHashRIBSDVout.md)
- [ListTransactionsByBlockHashRIBSE](docs/Model/ListTransactionsByBlockHashRIBSE.md)
- [ListTransactionsByBlockHashRIBSEC](docs/Model/ListTransactionsByBlockHashRIBSEC.md)
- [ListTransactionsByBlockHashRIBSEGasPrice](docs/Model/ListTransactionsByBlockHashRIBSEGasPrice.md)
- [ListTransactionsByBlockHashRIBSL](docs/Model/ListTransactionsByBlockHashRIBSL.md)
- [ListTransactionsByBlockHashRIBSLScriptPubKey](docs/Model/ListTransactionsByBlockHashRIBSLScriptPubKey.md)
- [ListTransactionsByBlockHashRIBSLVin](docs/Model/ListTransactionsByBlockHashRIBSLVin.md)
- [ListTransactionsByBlockHashRIBSLVout](docs/Model/ListTransactionsByBlockHashRIBSLVout.md)
- [ListTransactionsByBlockHashRIFee](docs/Model/ListTransactionsByBlockHashRIFee.md)
- [ListTransactionsByBlockHashRIRecipients](docs/Model/ListTransactionsByBlockHashRIRecipients.md)
- [ListTransactionsByBlockHashRISenders](docs/Model/ListTransactionsByBlockHashRISenders.md)
- [ListTransactionsByBlockHeightR](docs/Model/ListTransactionsByBlockHeightR.md)
- [ListTransactionsByBlockHeightRData](docs/Model/ListTransactionsByBlockHeightRData.md)
- [ListTransactionsByBlockHeightRI](docs/Model/ListTransactionsByBlockHeightRI.md)
- [ListTransactionsByBlockHeightRIBS](docs/Model/ListTransactionsByBlockHeightRIBS.md)
- [ListTransactionsByBlockHeightRIBSB](docs/Model/ListTransactionsByBlockHeightRIBSB.md)
- [ListTransactionsByBlockHeightRIBSBC](docs/Model/ListTransactionsByBlockHeightRIBSBC.md)
- [ListTransactionsByBlockHeightRIBSBScriptPubKey](docs/Model/ListTransactionsByBlockHeightRIBSBScriptPubKey.md)
- [ListTransactionsByBlockHeightRIBSBVout](docs/Model/ListTransactionsByBlockHeightRIBSBVout.md)
- [ListTransactionsByBlockHeightRIBSD](docs/Model/ListTransactionsByBlockHeightRIBSD.md)
- [ListTransactionsByBlockHeightRIBSD2](docs/Model/ListTransactionsByBlockHeightRIBSD2.md)
- [ListTransactionsByBlockHeightRIBSD2Vin](docs/Model/ListTransactionsByBlockHeightRIBSD2Vin.md)
- [ListTransactionsByBlockHeightRIBSDScriptPubKey](docs/Model/ListTransactionsByBlockHeightRIBSDScriptPubKey.md)
- [ListTransactionsByBlockHeightRIBSDScriptSig](docs/Model/ListTransactionsByBlockHeightRIBSDScriptSig.md)
- [ListTransactionsByBlockHeightRIBSDVin](docs/Model/ListTransactionsByBlockHeightRIBSDVin.md)
- [ListTransactionsByBlockHeightRIBSDVout](docs/Model/ListTransactionsByBlockHeightRIBSDVout.md)
- [ListTransactionsByBlockHeightRIBSE](docs/Model/ListTransactionsByBlockHeightRIBSE.md)
- [ListTransactionsByBlockHeightRIBSEC](docs/Model/ListTransactionsByBlockHeightRIBSEC.md)
- [ListTransactionsByBlockHeightRIBSECGasPrice](docs/Model/ListTransactionsByBlockHeightRIBSECGasPrice.md)
- [ListTransactionsByBlockHeightRIBSL](docs/Model/ListTransactionsByBlockHeightRIBSL.md)
- [ListTransactionsByBlockHeightRIBSLScriptPubKey](docs/Model/ListTransactionsByBlockHeightRIBSLScriptPubKey.md)
- [ListTransactionsByBlockHeightRIBSLScriptSig](docs/Model/ListTransactionsByBlockHeightRIBSLScriptSig.md)
- [ListTransactionsByBlockHeightRIBSLVin](docs/Model/ListTransactionsByBlockHeightRIBSLVin.md)
- [ListTransactionsByBlockHeightRIBSLVout](docs/Model/ListTransactionsByBlockHeightRIBSLVout.md)
- [ListTransactionsByBlockHeightRIFee](docs/Model/ListTransactionsByBlockHeightRIFee.md)
- [ListUnconfirmedOmniTransactionsByAddressR](docs/Model/ListUnconfirmedOmniTransactionsByAddressR.md)
- [ListUnconfirmedOmniTransactionsByAddressRData](docs/Model/ListUnconfirmedOmniTransactionsByAddressRData.md)
- [ListUnconfirmedOmniTransactionsByAddressRI](docs/Model/ListUnconfirmedOmniTransactionsByAddressRI.md)
- [ListUnconfirmedOmniTransactionsByAddressRIFee](docs/Model/ListUnconfirmedOmniTransactionsByAddressRIFee.md)
- [ListUnconfirmedOmniTransactionsByAddressRISenders](docs/Model/ListUnconfirmedOmniTransactionsByAddressRISenders.md)
- [ListUnconfirmedOmniTransactionsByPropertyIDR](docs/Model/ListUnconfirmedOmniTransactionsByPropertyIDR.md)
- [ListUnconfirmedOmniTransactionsByPropertyIDRData](docs/Model/ListUnconfirmedOmniTransactionsByPropertyIDRData.md)
- [ListUnconfirmedOmniTransactionsByPropertyIDRI](docs/Model/ListUnconfirmedOmniTransactionsByPropertyIDRI.md)
- [ListXRPRippleTransactionsByAddressR](docs/Model/ListXRPRippleTransactionsByAddressR.md)
- [ListXRPRippleTransactionsByAddressRData](docs/Model/ListXRPRippleTransactionsByAddressRData.md)
- [ListXRPRippleTransactionsByAddressRI](docs/Model/ListXRPRippleTransactionsByAddressRI.md)
- [ListXRPRippleTransactionsByAddressRIFee](docs/Model/ListXRPRippleTransactionsByAddressRIFee.md)
- [ListXRPRippleTransactionsByAddressRIOffer](docs/Model/ListXRPRippleTransactionsByAddressRIOffer.md)
- [ListXRPRippleTransactionsByAddressRIReceive](docs/Model/ListXRPRippleTransactionsByAddressRIReceive.md)
- [ListXRPRippleTransactionsByAddressRIValue](docs/Model/ListXRPRippleTransactionsByAddressRIValue.md)
- [ListXRPRippleTransactionsByBlockHashR](docs/Model/ListXRPRippleTransactionsByBlockHashR.md)
- [ListXRPRippleTransactionsByBlockHashRData](docs/Model/ListXRPRippleTransactionsByBlockHashRData.md)
- [ListXRPRippleTransactionsByBlockHashRI](docs/Model/ListXRPRippleTransactionsByBlockHashRI.md)
- [ListXRPRippleTransactionsByBlockHashRIFee](docs/Model/ListXRPRippleTransactionsByBlockHashRIFee.md)
- [ListXRPRippleTransactionsByBlockHashRIOffer](docs/Model/ListXRPRippleTransactionsByBlockHashRIOffer.md)
- [ListXRPRippleTransactionsByBlockHashRIReceive](docs/Model/ListXRPRippleTransactionsByBlockHashRIReceive.md)
- [ListXRPRippleTransactionsByBlockHashRIRecipients](docs/Model/ListXRPRippleTransactionsByBlockHashRIRecipients.md)
- [ListXRPRippleTransactionsByBlockHashRISenders](docs/Model/ListXRPRippleTransactionsByBlockHashRISenders.md)
- [ListXRPRippleTransactionsByBlockHashRIValue](docs/Model/ListXRPRippleTransactionsByBlockHashRIValue.md)
- [ListXRPRippleTransactionsByBlockHeightR](docs/Model/ListXRPRippleTransactionsByBlockHeightR.md)
- [ListXRPRippleTransactionsByBlockHeightRData](docs/Model/ListXRPRippleTransactionsByBlockHeightRData.md)
- [ListXRPRippleTransactionsByBlockHeightRI](docs/Model/ListXRPRippleTransactionsByBlockHeightRI.md)
- [ListXRPRippleTransactionsByBlockHeightRIFee](docs/Model/ListXRPRippleTransactionsByBlockHeightRIFee.md)
- [ListXRPRippleTransactionsByBlockHeightRIOffer](docs/Model/ListXRPRippleTransactionsByBlockHeightRIOffer.md)
- [ListXRPRippleTransactionsByBlockHeightRIReceive](docs/Model/ListXRPRippleTransactionsByBlockHeightRIReceive.md)
- [ListXRPRippleTransactionsByBlockHeightRIRecipients](docs/Model/ListXRPRippleTransactionsByBlockHeightRIRecipients.md)
- [ListXRPRippleTransactionsByBlockHeightRISenders](docs/Model/ListXRPRippleTransactionsByBlockHeightRISenders.md)
- [ListXRPRippleTransactionsByBlockHeightRIValue](docs/Model/ListXRPRippleTransactionsByBlockHeightRIValue.md)
- [ListZilliqaTransactionsByAddressR](docs/Model/ListZilliqaTransactionsByAddressR.md)
- [ListZilliqaTransactionsByAddressRData](docs/Model/ListZilliqaTransactionsByAddressRData.md)
- [ListZilliqaTransactionsByAddressRI](docs/Model/ListZilliqaTransactionsByAddressRI.md)
- [ListZilliqaTransactionsByAddressRIRecipients](docs/Model/ListZilliqaTransactionsByAddressRIRecipients.md)
- [ListZilliqaTransactionsByAddressRISenders](docs/Model/ListZilliqaTransactionsByAddressRISenders.md)
- [ListZilliqaTransactionsByBlockHashR](docs/Model/ListZilliqaTransactionsByBlockHashR.md)
- [ListZilliqaTransactionsByBlockHashRData](docs/Model/ListZilliqaTransactionsByBlockHashRData.md)
- [ListZilliqaTransactionsByBlockHashRI](docs/Model/ListZilliqaTransactionsByBlockHashRI.md)
- [ListZilliqaTransactionsByBlockHeightR](docs/Model/ListZilliqaTransactionsByBlockHeightR.md)
- [ListZilliqaTransactionsByBlockHeightRData](docs/Model/ListZilliqaTransactionsByBlockHeightRData.md)
- [ListZilliqaTransactionsByBlockHeightRI](docs/Model/ListZilliqaTransactionsByBlockHeightRI.md)
- [MinedTransactionR](docs/Model/MinedTransactionR.md)
- [MinedTransactionRB](docs/Model/MinedTransactionRB.md)
- [MinedTransactionRBData](docs/Model/MinedTransactionRBData.md)
- [MinedTransactionRBDataItem](docs/Model/MinedTransactionRBDataItem.md)
- [MinedTransactionRData](docs/Model/MinedTransactionRData.md)
- [MinedTransactionRI](docs/Model/MinedTransactionRI.md)
- [MissingApiKey](docs/Model/MissingApiKey.md)
- [MissingApiKeyError](docs/Model/MissingApiKeyError.md)
- [NewBlockR](docs/Model/NewBlockR.md)
- [NewBlockRB](docs/Model/NewBlockRB.md)
- [NewBlockRBData](docs/Model/NewBlockRBData.md)
- [NewBlockRBDataItem](docs/Model/NewBlockRBDataItem.md)
- [NewBlockRData](docs/Model/NewBlockRData.md)
- [NewBlockRI](docs/Model/NewBlockRI.md)
- [NewConfirmedCoinsTransactionsAndEachConfirmationR](docs/Model/NewConfirmedCoinsTransactionsAndEachConfirmationR.md)
- [NewConfirmedCoinsTransactionsAndEachConfirmationRB](docs/Model/NewConfirmedCoinsTransactionsAndEachConfirmationRB.md)
- [NewConfirmedCoinsTransactionsAndEachConfirmationRBData](docs/Model/NewConfirmedCoinsTransactionsAndEachConfirmationRBData.md)
- [NewConfirmedCoinsTransactionsAndEachConfirmationRBDataItem](docs/Model/NewConfirmedCoinsTransactionsAndEachConfirmationRBDataItem.md)
- [NewConfirmedCoinsTransactionsAndEachConfirmationRData](docs/Model/NewConfirmedCoinsTransactionsAndEachConfirmationRData.md)
- [NewConfirmedCoinsTransactionsAndEachConfirmationRI](docs/Model/NewConfirmedCoinsTransactionsAndEachConfirmationRI.md)
- [NewConfirmedCoinsTransactionsR](docs/Model/NewConfirmedCoinsTransactionsR.md)
- [NewConfirmedCoinsTransactionsRB](docs/Model/NewConfirmedCoinsTransactionsRB.md)
- [NewConfirmedCoinsTransactionsRBData](docs/Model/NewConfirmedCoinsTransactionsRBData.md)
- [NewConfirmedCoinsTransactionsRBDataItem](docs/Model/NewConfirmedCoinsTransactionsRBDataItem.md)
- [NewConfirmedCoinsTransactionsRData](docs/Model/NewConfirmedCoinsTransactionsRData.md)
- [NewConfirmedCoinsTransactionsRI](docs/Model/NewConfirmedCoinsTransactionsRI.md)
- [NewConfirmedInternalTransactionsAndEachConfirmationR](docs/Model/NewConfirmedInternalTransactionsAndEachConfirmationR.md)
- [NewConfirmedInternalTransactionsAndEachConfirmationRB](docs/Model/NewConfirmedInternalTransactionsAndEachConfirmationRB.md)
- [NewConfirmedInternalTransactionsAndEachConfirmationRBData](docs/Model/NewConfirmedInternalTransactionsAndEachConfirmationRBData.md)
- [NewConfirmedInternalTransactionsAndEachConfirmationRBDataItem](docs/Model/NewConfirmedInternalTransactionsAndEachConfirmationRBDataItem.md)
- [NewConfirmedInternalTransactionsAndEachConfirmationRData](docs/Model/NewConfirmedInternalTransactionsAndEachConfirmationRData.md)
- [NewConfirmedInternalTransactionsAndEachConfirmationRI](docs/Model/NewConfirmedInternalTransactionsAndEachConfirmationRI.md)
- [NewConfirmedInternalTransactionsR](docs/Model/NewConfirmedInternalTransactionsR.md)
- [NewConfirmedInternalTransactionsRB](docs/Model/NewConfirmedInternalTransactionsRB.md)
- [NewConfirmedInternalTransactionsRBData](docs/Model/NewConfirmedInternalTransactionsRBData.md)
- [NewConfirmedInternalTransactionsRBDataItem](docs/Model/NewConfirmedInternalTransactionsRBDataItem.md)
- [NewConfirmedInternalTransactionsRData](docs/Model/NewConfirmedInternalTransactionsRData.md)
- [NewConfirmedInternalTransactionsRI](docs/Model/NewConfirmedInternalTransactionsRI.md)
- [NewConfirmedTokensTransactionsAndEachConfirmationR](docs/Model/NewConfirmedTokensTransactionsAndEachConfirmationR.md)
- [NewConfirmedTokensTransactionsAndEachConfirmationRB](docs/Model/NewConfirmedTokensTransactionsAndEachConfirmationRB.md)
- [NewConfirmedTokensTransactionsAndEachConfirmationRBData](docs/Model/NewConfirmedTokensTransactionsAndEachConfirmationRBData.md)
- [NewConfirmedTokensTransactionsAndEachConfirmationRBDataItem](docs/Model/NewConfirmedTokensTransactionsAndEachConfirmationRBDataItem.md)
- [NewConfirmedTokensTransactionsAndEachConfirmationRData](docs/Model/NewConfirmedTokensTransactionsAndEachConfirmationRData.md)
- [NewConfirmedTokensTransactionsAndEachConfirmationRI](docs/Model/NewConfirmedTokensTransactionsAndEachConfirmationRI.md)
- [NewConfirmedTokensTransactionsR](docs/Model/NewConfirmedTokensTransactionsR.md)
- [NewConfirmedTokensTransactionsRB](docs/Model/NewConfirmedTokensTransactionsRB.md)
- [NewConfirmedTokensTransactionsRData](docs/Model/NewConfirmedTokensTransactionsRData.md)
- [NewConfirmedTokensTransactionsRI](docs/Model/NewConfirmedTokensTransactionsRI.md)
- [NewUnconfirmedCoinsTransactionsR](docs/Model/NewUnconfirmedCoinsTransactionsR.md)
- [NewUnconfirmedCoinsTransactionsRB](docs/Model/NewUnconfirmedCoinsTransactionsRB.md)
- [NewUnconfirmedCoinsTransactionsRBData](docs/Model/NewUnconfirmedCoinsTransactionsRBData.md)
- [NewUnconfirmedCoinsTransactionsRBDataItem](docs/Model/NewUnconfirmedCoinsTransactionsRBDataItem.md)
- [NewUnconfirmedCoinsTransactionsRData](docs/Model/NewUnconfirmedCoinsTransactionsRData.md)
- [NewUnconfirmedCoinsTransactionsRI](docs/Model/NewUnconfirmedCoinsTransactionsRI.md)
- [NewUnconfirmedTokensTransactionsR](docs/Model/NewUnconfirmedTokensTransactionsR.md)
- [NewUnconfirmedTokensTransactionsRB](docs/Model/NewUnconfirmedTokensTransactionsRB.md)
- [NewUnconfirmedTokensTransactionsRBData](docs/Model/NewUnconfirmedTokensTransactionsRBData.md)
- [NewUnconfirmedTokensTransactionsRBDataItem](docs/Model/NewUnconfirmedTokensTransactionsRBDataItem.md)
- [NewUnconfirmedTokensTransactionsRData](docs/Model/NewUnconfirmedTokensTransactionsRData.md)
- [NewUnconfirmedTokensTransactionsRI](docs/Model/NewUnconfirmedTokensTransactionsRI.md)
- [RequestLimitReached](docs/Model/RequestLimitReached.md)
- [RequestLimitReachedError](docs/Model/RequestLimitReachedError.md)
- [ResourceNotFound](docs/Model/ResourceNotFound.md)
- [ResourceNotFoundError](docs/Model/ResourceNotFoundError.md)
- [SyncHDWalletXPubYPubZPubR](docs/Model/SyncHDWalletXPubYPubZPubR.md)
- [SyncHDWalletXPubYPubZPubRB](docs/Model/SyncHDWalletXPubYPubZPubRB.md)
- [SyncHDWalletXPubYPubZPubRBData](docs/Model/SyncHDWalletXPubYPubZPubRBData.md)
- [SyncHDWalletXPubYPubZPubRBDataItem](docs/Model/SyncHDWalletXPubYPubZPubRBDataItem.md)
- [SyncHDWalletXPubYPubZPubRData](docs/Model/SyncHDWalletXPubYPubZPubRData.md)
- [SyncHDWalletXPubYPubZPubRI](docs/Model/SyncHDWalletXPubYPubZPubRI.md)
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
- [TransactionRequestApprove](docs/Model/TransactionRequestApprove.md)
- [TransactionRequestApproveData](docs/Model/TransactionRequestApproveData.md)
- [TransactionRequestApproveDataItem](docs/Model/TransactionRequestApproveDataItem.md)
- [TransactionRequestBroadcasted](docs/Model/TransactionRequestBroadcasted.md)
- [TransactionRequestBroadcastedData](docs/Model/TransactionRequestBroadcastedData.md)
- [TransactionRequestBroadcastedDataItem](docs/Model/TransactionRequestBroadcastedDataItem.md)
- [TransactionRequestMined](docs/Model/TransactionRequestMined.md)
- [TransactionRequestMinedData](docs/Model/TransactionRequestMinedData.md)
- [TransactionRequestReject](docs/Model/TransactionRequestReject.md)
- [TransactionRequestRejectData](docs/Model/TransactionRequestRejectData.md)
- [TransactionRequestRejectDataItem](docs/Model/TransactionRequestRejectDataItem.md)
- [UnexpectedServerError](docs/Model/UnexpectedServerError.md)
- [UnexpectedServerErrorError](docs/Model/UnexpectedServerErrorError.md)
- [UnsupportedMediaType](docs/Model/UnsupportedMediaType.md)
- [UnsupportedMediaTypeError](docs/Model/UnsupportedMediaTypeError.md)
- [UriNotFound](docs/Model/UriNotFound.md)
- [UriNotFoundError](docs/Model/UriNotFoundError.md)
- [ValidateAddressR](docs/Model/ValidateAddressR.md)
- [ValidateAddressRB](docs/Model/ValidateAddressRB.md)
- [ValidateAddressRBData](docs/Model/ValidateAddressRBData.md)
- [ValidateAddressRBDataItem](docs/Model/ValidateAddressRBDataItem.md)
- [ValidateAddressRData](docs/Model/ValidateAddressRData.md)
- [ValidateAddressRI](docs/Model/ValidateAddressRI.md)
- [WalletAsAServiceDepositAddressesLimitReached](docs/Model/WalletAsAServiceDepositAddressesLimitReached.md)
- [WalletAsAServiceDepositAddressesLimitReachedError](docs/Model/WalletAsAServiceDepositAddressesLimitReachedError.md)
- [WalletAsAServiceNoDepositAddressesFound](docs/Model/WalletAsAServiceNoDepositAddressesFound.md)
- [WalletAsAServiceNoDepositAddressesFoundError](docs/Model/WalletAsAServiceNoDepositAddressesFoundError.md)
- [WalletAsAServiceTokenNotSupported](docs/Model/WalletAsAServiceTokenNotSupported.md)
- [WalletAsAServiceTokenNotSupportedError](docs/Model/WalletAsAServiceTokenNotSupportedError.md)
- [WalletAsAServiceWalletBalanceNotEnough](docs/Model/WalletAsAServiceWalletBalanceNotEnough.md)
- [WalletAsAServiceWalletBalanceNotEnoughError](docs/Model/WalletAsAServiceWalletBalanceNotEnoughError.md)
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
    - Package version: `1.1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`

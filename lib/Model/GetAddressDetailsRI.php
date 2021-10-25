<?php
/**
 * GetAddressDetailsRI
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CryptoAPIs
 *
 * Crypto APIs 2.0 is a complex and innovative infrastructure layer that radically simplifies the development of any Blockchain and Crypto related applications. Organized around REST, Crypto APIs 2.0 can assist both novice Bitcoin/Ethereum enthusiasts and crypto experts with the development of their blockchain applications. Crypto APIs 2.0 provides unified endpoints and data, raw data, automatic tokens and coins forwardings, callback functionalities, and much more.
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: developers@cryptoapis.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace CryptoAPIs\Model;

use \ArrayAccess;
use \CryptoAPIs\ObjectSerializer;

/**
 * GetAddressDetailsRI Class Doc Comment
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetAddressDetailsRI implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetAddressDetailsRI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'transactions_count' => 'int',
        'confirmed_balance' => '\CryptoAPIs\Model\GetAddressDetailsRIConfirmedBalance',
        'total_received' => '\CryptoAPIs\Model\GetAddressDetailsRITotalReceived',
        'total_spent' => '\CryptoAPIs\Model\GetAddressDetailsRITotalSpent',
        'incoming_transactions_count' => 'int',
        'outgoing_transactions_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'transactions_count' => null,
        'confirmed_balance' => null,
        'total_received' => null,
        'total_spent' => null,
        'incoming_transactions_count' => null,
        'outgoing_transactions_count' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'transactions_count' => 'transactionsCount',
        'confirmed_balance' => 'confirmedBalance',
        'total_received' => 'totalReceived',
        'total_spent' => 'totalSpent',
        'incoming_transactions_count' => 'incomingTransactionsCount',
        'outgoing_transactions_count' => 'outgoingTransactionsCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transactions_count' => 'setTransactionsCount',
        'confirmed_balance' => 'setConfirmedBalance',
        'total_received' => 'setTotalReceived',
        'total_spent' => 'setTotalSpent',
        'incoming_transactions_count' => 'setIncomingTransactionsCount',
        'outgoing_transactions_count' => 'setOutgoingTransactionsCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transactions_count' => 'getTransactionsCount',
        'confirmed_balance' => 'getConfirmedBalance',
        'total_received' => 'getTotalReceived',
        'total_spent' => 'getTotalSpent',
        'incoming_transactions_count' => 'getIncomingTransactionsCount',
        'outgoing_transactions_count' => 'getOutgoingTransactionsCount'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['transactions_count'] = $data['transactions_count'] ?? null;
        $this->container['confirmed_balance'] = $data['confirmed_balance'] ?? null;
        $this->container['total_received'] = $data['total_received'] ?? null;
        $this->container['total_spent'] = $data['total_spent'] ?? null;
        $this->container['incoming_transactions_count'] = $data['incoming_transactions_count'] ?? null;
        $this->container['outgoing_transactions_count'] = $data['outgoing_transactions_count'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['transactions_count'] === null) {
            $invalidProperties[] = "'transactions_count' can't be null";
        }
        if ($this->container['confirmed_balance'] === null) {
            $invalidProperties[] = "'confirmed_balance' can't be null";
        }
        if ($this->container['total_received'] === null) {
            $invalidProperties[] = "'total_received' can't be null";
        }
        if ($this->container['total_spent'] === null) {
            $invalidProperties[] = "'total_spent' can't be null";
        }
        if ($this->container['incoming_transactions_count'] === null) {
            $invalidProperties[] = "'incoming_transactions_count' can't be null";
        }
        if ($this->container['outgoing_transactions_count'] === null) {
            $invalidProperties[] = "'outgoing_transactions_count' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets transactions_count
     *
     * @return int
     */
    public function getTransactionsCount()
    {
        return $this->container['transactions_count'];
    }

    /**
     * Sets transactions_count
     *
     * @param int $transactions_count Represents the total number of confirmed coins transactions for this address, both incoming and outgoing. Applies for coins only **and not** tokens transfers e.g. for Ethereum. `transactionsCount` could result as less than incoming and outgoing transactions put together (e.g. in Bitcoin), due to the fact that one and the same address could be in senders and receivers addresses.
     *
     * @return self
     */
    public function setTransactionsCount($transactions_count)
    {
        $this->container['transactions_count'] = $transactions_count;

        return $this;
    }

    /**
     * Gets confirmed_balance
     *
     * @return \CryptoAPIs\Model\GetAddressDetailsRIConfirmedBalance
     */
    public function getConfirmedBalance()
    {
        return $this->container['confirmed_balance'];
    }

    /**
     * Sets confirmed_balance
     *
     * @param \CryptoAPIs\Model\GetAddressDetailsRIConfirmedBalance $confirmed_balance confirmed_balance
     *
     * @return self
     */
    public function setConfirmedBalance($confirmed_balance)
    {
        $this->container['confirmed_balance'] = $confirmed_balance;

        return $this;
    }

    /**
     * Gets total_received
     *
     * @return \CryptoAPIs\Model\GetAddressDetailsRITotalReceived
     */
    public function getTotalReceived()
    {
        return $this->container['total_received'];
    }

    /**
     * Sets total_received
     *
     * @param \CryptoAPIs\Model\GetAddressDetailsRITotalReceived $total_received total_received
     *
     * @return self
     */
    public function setTotalReceived($total_received)
    {
        $this->container['total_received'] = $total_received;

        return $this;
    }

    /**
     * Gets total_spent
     *
     * @return \CryptoAPIs\Model\GetAddressDetailsRITotalSpent
     */
    public function getTotalSpent()
    {
        return $this->container['total_spent'];
    }

    /**
     * Sets total_spent
     *
     * @param \CryptoAPIs\Model\GetAddressDetailsRITotalSpent $total_spent total_spent
     *
     * @return self
     */
    public function setTotalSpent($total_spent)
    {
        $this->container['total_spent'] = $total_spent;

        return $this;
    }

    /**
     * Gets incoming_transactions_count
     *
     * @return int
     */
    public function getIncomingTransactionsCount()
    {
        return $this->container['incoming_transactions_count'];
    }

    /**
     * Sets incoming_transactions_count
     *
     * @param int $incoming_transactions_count Defines the count of the incoming transactions.
     *
     * @return self
     */
    public function setIncomingTransactionsCount($incoming_transactions_count)
    {
        $this->container['incoming_transactions_count'] = $incoming_transactions_count;

        return $this;
    }

    /**
     * Gets outgoing_transactions_count
     *
     * @return int
     */
    public function getOutgoingTransactionsCount()
    {
        return $this->container['outgoing_transactions_count'];
    }

    /**
     * Sets outgoing_transactions_count
     *
     * @param int $outgoing_transactions_count Defines the count of the outgoing transactions.
     *
     * @return self
     */
    public function setOutgoingTransactionsCount($outgoing_transactions_count)
    {
        $this->container['outgoing_transactions_count'] = $outgoing_transactions_count;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



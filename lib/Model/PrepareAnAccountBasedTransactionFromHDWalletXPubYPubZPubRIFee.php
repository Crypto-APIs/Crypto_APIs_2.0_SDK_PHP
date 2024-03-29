<?php
/**
 * PrepareAnAccountBasedTransactionFromHDWalletXPubYPubZPubRIFee
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
 * Crypto APIs is a complex and innovative infrastructure layer that radically simplifies the development of any Blockchain and Crypto related applications. Organized around REST, Crypto APIs can assist both novice Bitcoin/Ethereum enthusiasts and crypto experts with the development of their blockchain applications. Crypto APIs provides unified endpoints and data, raw data, automatic tokens and coins forwardings, callback functionalities, and much more.
 *
 * The version of the OpenAPI document: 2021-03-20
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
 * PrepareAnAccountBasedTransactionFromHDWalletXPubYPubZPubRIFee Class Doc Comment
 *
 * @category Class
 * @description When isConfirmed is True - Defines the amount of the transaction fee When isConfirmed is False - For ETH-based blockchains this attribute represents the max fee value.
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PrepareAnAccountBasedTransactionFromHDWalletXPubYPubZPubRIFee implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PrepareAnAccount_BasedTransactionFromHDWalletXPubYPubZPubRI_fee';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'gas_limit' => 'string',
        'gas_price' => 'string',
        'max_fee_per_gas' => 'string',
        'max_priority_fee_per_gas' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'gas_limit' => null,
        'gas_price' => null,
        'max_fee_per_gas' => null,
        'max_priority_fee_per_gas' => null
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
        'gas_limit' => 'gasLimit',
        'gas_price' => 'gasPrice',
        'max_fee_per_gas' => 'maxFeePerGas',
        'max_priority_fee_per_gas' => 'maxPriorityFeePerGas'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'gas_limit' => 'setGasLimit',
        'gas_price' => 'setGasPrice',
        'max_fee_per_gas' => 'setMaxFeePerGas',
        'max_priority_fee_per_gas' => 'setMaxPriorityFeePerGas'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'gas_limit' => 'getGasLimit',
        'gas_price' => 'getGasPrice',
        'max_fee_per_gas' => 'getMaxFeePerGas',
        'max_priority_fee_per_gas' => 'getMaxPriorityFeePerGas'
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
        $this->container['gas_limit'] = $data['gas_limit'] ?? null;
        $this->container['gas_price'] = $data['gas_price'] ?? null;
        $this->container['max_fee_per_gas'] = $data['max_fee_per_gas'] ?? null;
        $this->container['max_priority_fee_per_gas'] = $data['max_priority_fee_per_gas'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['gas_limit'] === null) {
            $invalidProperties[] = "'gas_limit' can't be null";
        }
        if ($this->container['gas_price'] === null) {
            $invalidProperties[] = "'gas_price' can't be null";
        }
        if ($this->container['max_fee_per_gas'] === null) {
            $invalidProperties[] = "'max_fee_per_gas' can't be null";
        }
        if ($this->container['max_priority_fee_per_gas'] === null) {
            $invalidProperties[] = "'max_priority_fee_per_gas' can't be null";
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
     * Gets gas_limit
     *
     * @return string
     */
    public function getGasLimit()
    {
        return $this->container['gas_limit'];
    }

    /**
     * Sets gas_limit
     *
     * @param string $gas_limit Represents the amount of gas used by this specific transaction alone.
     *
     * @return self
     */
    public function setGasLimit($gas_limit)
    {
        $this->container['gas_limit'] = $gas_limit;

        return $this;
    }

    /**
     * Gets gas_price
     *
     * @return string
     */
    public function getGasPrice()
    {
        return $this->container['gas_price'];
    }

    /**
     * Sets gas_price
     *
     * @param string $gas_price Represents the price offered to the miner to purchase this amount of gas.
     *
     * @return self
     */
    public function setGasPrice($gas_price)
    {
        $this->container['gas_price'] = $gas_price;

        return $this;
    }

    /**
     * Gets max_fee_per_gas
     *
     * @return string
     */
    public function getMaxFeePerGas()
    {
        return $this->container['max_fee_per_gas'];
    }

    /**
     * Sets max_fee_per_gas
     *
     * @param string $max_fee_per_gas Representation of the max fee per gas value
     *
     * @return self
     */
    public function setMaxFeePerGas($max_fee_per_gas)
    {
        $this->container['max_fee_per_gas'] = $max_fee_per_gas;

        return $this;
    }

    /**
     * Gets max_priority_fee_per_gas
     *
     * @return string
     */
    public function getMaxPriorityFeePerGas()
    {
        return $this->container['max_priority_fee_per_gas'];
    }

    /**
     * Sets max_priority_fee_per_gas
     *
     * @param string $max_priority_fee_per_gas Rrepresentation of the max priority fee per gas value
     *
     * @return self
     */
    public function setMaxPriorityFeePerGas($max_priority_fee_per_gas)
    {
        $this->container['max_priority_fee_per_gas'] = $max_priority_fee_per_gas;

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



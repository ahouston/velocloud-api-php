<?php
/**
 * DeviceSettingsDataModelsVirtualAddressing
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Velocloud API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3.0.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * DeviceSettingsDataModelsVirtualAddressing Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeviceSettingsDataModelsVirtualAddressing implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'deviceSettingsData_models_virtual_addressing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'cidr_prefix' => 'int',
        'cidr_ip' => 'string',
        'netmask' => 'string',
        'gateway' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'cidr_prefix' => null,
        'cidr_ip' => null,
        'netmask' => null,
        'gateway' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'type' => 'type',
        'cidr_prefix' => 'cidrPrefix',
        'cidr_ip' => 'cidrIp',
        'netmask' => 'netmask',
        'gateway' => 'gateway'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'cidr_prefix' => 'setCidrPrefix',
        'cidr_ip' => 'setCidrIp',
        'netmask' => 'setNetmask',
        'gateway' => 'setGateway'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'cidr_prefix' => 'getCidrPrefix',
        'cidr_ip' => 'getCidrIp',
        'netmask' => 'getNetmask',
        'gateway' => 'getGateway'
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
        return self::$swaggerModelName;
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['cidr_prefix'] = isset($data['cidr_prefix']) ? $data['cidr_prefix'] : null;
        $this->container['cidr_ip'] = isset($data['cidr_ip']) ? $data['cidr_ip'] : null;
        $this->container['netmask'] = isset($data['netmask']) ? $data['netmask'] : null;
        $this->container['gateway'] = isset($data['gateway']) ? $data['gateway'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        return true;
    }


    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets cidr_prefix
     *
     * @return int
     */
    public function getCidrPrefix()
    {
        return $this->container['cidr_prefix'];
    }

    /**
     * Sets cidr_prefix
     *
     * @param int $cidr_prefix cidr_prefix
     *
     * @return $this
     */
    public function setCidrPrefix($cidr_prefix)
    {
        $this->container['cidr_prefix'] = $cidr_prefix;

        return $this;
    }

    /**
     * Gets cidr_ip
     *
     * @return string
     */
    public function getCidrIp()
    {
        return $this->container['cidr_ip'];
    }

    /**
     * Sets cidr_ip
     *
     * @param string $cidr_ip cidr_ip
     *
     * @return $this
     */
    public function setCidrIp($cidr_ip)
    {
        $this->container['cidr_ip'] = $cidr_ip;

        return $this;
    }

    /**
     * Gets netmask
     *
     * @return string
     */
    public function getNetmask()
    {
        return $this->container['netmask'];
    }

    /**
     * Sets netmask
     *
     * @param string $netmask netmask
     *
     * @return $this
     */
    public function setNetmask($netmask)
    {
        $this->container['netmask'] = $netmask;

        return $this;
    }

    /**
     * Gets gateway
     *
     * @return string
     */
    public function getGateway()
    {
        return $this->container['gateway'];
    }

    /**
     * Sets gateway
     *
     * @param string $gateway gateway
     *
     * @return $this
     */
    public function setGateway($gateway)
    {
        $this->container['gateway'] = $gateway;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



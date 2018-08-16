<?php
/**
 * StandbyVcoDesignee
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
 * StandbyVcoDesignee Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StandbyVcoDesignee implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'standby_vco_designee';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'standby_address' => 'string',
        'standby_replication_address' => 'string',
        'standby_uuid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'standby_address' => null,
        'standby_replication_address' => null,
        'standby_uuid' => null
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
        'standby_address' => 'standbyAddress',
        'standby_replication_address' => 'standbyReplicationAddress',
        'standby_uuid' => 'standbyUuid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'standby_address' => 'setStandbyAddress',
        'standby_replication_address' => 'setStandbyReplicationAddress',
        'standby_uuid' => 'setStandbyUuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'standby_address' => 'getStandbyAddress',
        'standby_replication_address' => 'getStandbyReplicationAddress',
        'standby_uuid' => 'getStandbyUuid'
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
        $this->container['standby_address'] = isset($data['standby_address']) ? $data['standby_address'] : null;
        $this->container['standby_replication_address'] = isset($data['standby_replication_address']) ? $data['standby_replication_address'] : null;
        $this->container['standby_uuid'] = isset($data['standby_uuid']) ? $data['standby_uuid'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['standby_address'] === null) {
            $invalidProperties[] = "'standby_address' can't be null";
        }
        if ($this->container['standby_uuid'] === null) {
            $invalidProperties[] = "'standby_uuid' can't be null";
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

        if ($this->container['standby_address'] === null) {
            return false;
        }
        if ($this->container['standby_uuid'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets standby_address
     *
     * @return string
     */
    public function getStandbyAddress()
    {
        return $this->container['standby_address'];
    }

    /**
     * Sets standby_address
     *
     * @param string $standby_address standby_address
     *
     * @return $this
     */
    public function setStandbyAddress($standby_address)
    {
        $this->container['standby_address'] = $standby_address;

        return $this;
    }

    /**
     * Gets standby_replication_address
     *
     * @return string
     */
    public function getStandbyReplicationAddress()
    {
        return $this->container['standby_replication_address'];
    }

    /**
     * Sets standby_replication_address
     *
     * @param string $standby_replication_address standby_replication_address
     *
     * @return $this
     */
    public function setStandbyReplicationAddress($standby_replication_address)
    {
        $this->container['standby_replication_address'] = $standby_replication_address;

        return $this;
    }

    /**
     * Gets standby_uuid
     *
     * @return string
     */
    public function getStandbyUuid()
    {
        return $this->container['standby_uuid'];
    }

    /**
     * Sets standby_uuid
     *
     * @param string $standby_uuid standby_uuid
     *
     * @return $this
     */
    public function setStandbyUuid($standby_uuid)
    {
        $this->container['standby_uuid'] = $standby_uuid;

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



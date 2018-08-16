<?php
/**
 * DeviceSettingsDataVpn
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
 * DeviceSettingsDataVpn Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeviceSettingsDataVpn implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'deviceSettingsData_vpn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enabled' => 'bool',
        'edge_to_data_center' => 'bool',
        'ref' => 'string',
        'edge_to_edge_hub' => '\Swagger\Client\Model\DeviceSettingsDataVpnEdgeToEdgeHub',
        'edge_to_edge' => 'bool',
        'edge_to_edge_detail' => '\Swagger\Client\Model\DeviceSettingsDataVpnEdgeToEdgeDetail'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enabled' => null,
        'edge_to_data_center' => null,
        'ref' => null,
        'edge_to_edge_hub' => null,
        'edge_to_edge' => null,
        'edge_to_edge_detail' => null
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
        'enabled' => 'enabled',
        'edge_to_data_center' => 'edgeToDataCenter',
        'ref' => 'ref',
        'edge_to_edge_hub' => 'edgeToEdgeHub',
        'edge_to_edge' => 'edgeToEdge',
        'edge_to_edge_detail' => 'edgeToEdgeDetail'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enabled' => 'setEnabled',
        'edge_to_data_center' => 'setEdgeToDataCenter',
        'ref' => 'setRef',
        'edge_to_edge_hub' => 'setEdgeToEdgeHub',
        'edge_to_edge' => 'setEdgeToEdge',
        'edge_to_edge_detail' => 'setEdgeToEdgeDetail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enabled' => 'getEnabled',
        'edge_to_data_center' => 'getEdgeToDataCenter',
        'ref' => 'getRef',
        'edge_to_edge_hub' => 'getEdgeToEdgeHub',
        'edge_to_edge' => 'getEdgeToEdge',
        'edge_to_edge_detail' => 'getEdgeToEdgeDetail'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['edge_to_data_center'] = isset($data['edge_to_data_center']) ? $data['edge_to_data_center'] : null;
        $this->container['ref'] = isset($data['ref']) ? $data['ref'] : null;
        $this->container['edge_to_edge_hub'] = isset($data['edge_to_edge_hub']) ? $data['edge_to_edge_hub'] : null;
        $this->container['edge_to_edge'] = isset($data['edge_to_edge']) ? $data['edge_to_edge'] : null;
        $this->container['edge_to_edge_detail'] = isset($data['edge_to_edge_detail']) ? $data['edge_to_edge_detail'] : null;
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
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets edge_to_data_center
     *
     * @return bool
     */
    public function getEdgeToDataCenter()
    {
        return $this->container['edge_to_data_center'];
    }

    /**
     * Sets edge_to_data_center
     *
     * @param bool $edge_to_data_center edge_to_data_center
     *
     * @return $this
     */
    public function setEdgeToDataCenter($edge_to_data_center)
    {
        $this->container['edge_to_data_center'] = $edge_to_data_center;

        return $this;
    }

    /**
     * Gets ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->container['ref'];
    }

    /**
     * Sets ref
     *
     * @param string $ref ref
     *
     * @return $this
     */
    public function setRef($ref)
    {
        $this->container['ref'] = $ref;

        return $this;
    }

    /**
     * Gets edge_to_edge_hub
     *
     * @return \Swagger\Client\Model\DeviceSettingsDataVpnEdgeToEdgeHub
     */
    public function getEdgeToEdgeHub()
    {
        return $this->container['edge_to_edge_hub'];
    }

    /**
     * Sets edge_to_edge_hub
     *
     * @param \Swagger\Client\Model\DeviceSettingsDataVpnEdgeToEdgeHub $edge_to_edge_hub edge_to_edge_hub
     *
     * @return $this
     */
    public function setEdgeToEdgeHub($edge_to_edge_hub)
    {
        $this->container['edge_to_edge_hub'] = $edge_to_edge_hub;

        return $this;
    }

    /**
     * Gets edge_to_edge
     *
     * @return bool
     */
    public function getEdgeToEdge()
    {
        return $this->container['edge_to_edge'];
    }

    /**
     * Sets edge_to_edge
     *
     * @param bool $edge_to_edge edge_to_edge
     *
     * @return $this
     */
    public function setEdgeToEdge($edge_to_edge)
    {
        $this->container['edge_to_edge'] = $edge_to_edge;

        return $this;
    }

    /**
     * Gets edge_to_edge_detail
     *
     * @return \Swagger\Client\Model\DeviceSettingsDataVpnEdgeToEdgeDetail
     */
    public function getEdgeToEdgeDetail()
    {
        return $this->container['edge_to_edge_detail'];
    }

    /**
     * Sets edge_to_edge_detail
     *
     * @param \Swagger\Client\Model\DeviceSettingsDataVpnEdgeToEdgeDetail $edge_to_edge_detail edge_to_edge_detail
     *
     * @return $this
     */
    public function setEdgeToEdgeDetail($edge_to_edge_detail)
    {
        $this->container['edge_to_edge_detail'] = $edge_to_edge_detail;

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



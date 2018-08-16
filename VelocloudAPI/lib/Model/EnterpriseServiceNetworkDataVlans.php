<?php
/**
 * EnterpriseServiceNetworkDataVlans
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
 * EnterpriseServiceNetworkDataVlans Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnterpriseServiceNetworkDataVlans implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'enterprise_service_network_data_vlans';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'vlan_id' => 'int',
        'advertise' => 'bool',
        'cost' => 'int',
        'static_reserved' => 'int',
        'dhcp' => '\Swagger\Client\Model\EnterpriseServiceNetworkDataDhcp'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'vlan_id' => null,
        'advertise' => null,
        'cost' => null,
        'static_reserved' => null,
        'dhcp' => null
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
        'name' => 'name',
        'vlan_id' => 'vlanId',
        'advertise' => 'advertise',
        'cost' => 'cost',
        'static_reserved' => 'staticReserved',
        'dhcp' => 'dhcp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'vlan_id' => 'setVlanId',
        'advertise' => 'setAdvertise',
        'cost' => 'setCost',
        'static_reserved' => 'setStaticReserved',
        'dhcp' => 'setDhcp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'vlan_id' => 'getVlanId',
        'advertise' => 'getAdvertise',
        'cost' => 'getCost',
        'static_reserved' => 'getStaticReserved',
        'dhcp' => 'getDhcp'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['vlan_id'] = isset($data['vlan_id']) ? $data['vlan_id'] : null;
        $this->container['advertise'] = isset($data['advertise']) ? $data['advertise'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['static_reserved'] = isset($data['static_reserved']) ? $data['static_reserved'] : null;
        $this->container['dhcp'] = isset($data['dhcp']) ? $data['dhcp'] : null;
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets vlan_id
     *
     * @return int
     */
    public function getVlanId()
    {
        return $this->container['vlan_id'];
    }

    /**
     * Sets vlan_id
     *
     * @param int $vlan_id vlan_id
     *
     * @return $this
     */
    public function setVlanId($vlan_id)
    {
        $this->container['vlan_id'] = $vlan_id;

        return $this;
    }

    /**
     * Gets advertise
     *
     * @return bool
     */
    public function getAdvertise()
    {
        return $this->container['advertise'];
    }

    /**
     * Sets advertise
     *
     * @param bool $advertise advertise
     *
     * @return $this
     */
    public function setAdvertise($advertise)
    {
        $this->container['advertise'] = $advertise;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return int
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param int $cost cost
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets static_reserved
     *
     * @return int
     */
    public function getStaticReserved()
    {
        return $this->container['static_reserved'];
    }

    /**
     * Sets static_reserved
     *
     * @param int $static_reserved static_reserved
     *
     * @return $this
     */
    public function setStaticReserved($static_reserved)
    {
        $this->container['static_reserved'] = $static_reserved;

        return $this;
    }

    /**
     * Gets dhcp
     *
     * @return \Swagger\Client\Model\EnterpriseServiceNetworkDataDhcp
     */
    public function getDhcp()
    {
        return $this->container['dhcp'];
    }

    /**
     * Sets dhcp
     *
     * @param \Swagger\Client\Model\EnterpriseServiceNetworkDataDhcp $dhcp dhcp
     *
     * @return $this
     */
    public function setDhcp($dhcp)
    {
        $this->container['dhcp'] = $dhcp;

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



<?php
/**
 * WANDataClassesOfServiceClassesOfService
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
 * WANDataClassesOfServiceClassesOfService Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WANDataClassesOfServiceClassesOfService implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WAN_data_classesOfService_classesOfService';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'dscp_tags' => 'string[]',
        'static_sla' => '\Swagger\Client\Model\WANDataClassesOfServiceStaticSLA',
        'bandwidth_pct' => 'int',
        'bandwidth_guaranteed' => 'bool',
        'default_class_of_service' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'dscp_tags' => null,
        'static_sla' => null,
        'bandwidth_pct' => null,
        'bandwidth_guaranteed' => null,
        'default_class_of_service' => null
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
        'id' => 'id',
        'name' => 'name',
        'dscp_tags' => 'dscpTags',
        'static_sla' => 'staticSLA',
        'bandwidth_pct' => 'bandwidthPct',
        'bandwidth_guaranteed' => 'bandwidthGuaranteed',
        'default_class_of_service' => 'defaultClassOfService'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'dscp_tags' => 'setDscpTags',
        'static_sla' => 'setStaticSla',
        'bandwidth_pct' => 'setBandwidthPct',
        'bandwidth_guaranteed' => 'setBandwidthGuaranteed',
        'default_class_of_service' => 'setDefaultClassOfService'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'dscp_tags' => 'getDscpTags',
        'static_sla' => 'getStaticSla',
        'bandwidth_pct' => 'getBandwidthPct',
        'bandwidth_guaranteed' => 'getBandwidthGuaranteed',
        'default_class_of_service' => 'getDefaultClassOfService'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['dscp_tags'] = isset($data['dscp_tags']) ? $data['dscp_tags'] : null;
        $this->container['static_sla'] = isset($data['static_sla']) ? $data['static_sla'] : null;
        $this->container['bandwidth_pct'] = isset($data['bandwidth_pct']) ? $data['bandwidth_pct'] : null;
        $this->container['bandwidth_guaranteed'] = isset($data['bandwidth_guaranteed']) ? $data['bandwidth_guaranteed'] : null;
        $this->container['default_class_of_service'] = isset($data['default_class_of_service']) ? $data['default_class_of_service'] : null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * Gets dscp_tags
     *
     * @return string[]
     */
    public function getDscpTags()
    {
        return $this->container['dscp_tags'];
    }

    /**
     * Sets dscp_tags
     *
     * @param string[] $dscp_tags dscp_tags
     *
     * @return $this
     */
    public function setDscpTags($dscp_tags)
    {
        $this->container['dscp_tags'] = $dscp_tags;

        return $this;
    }

    /**
     * Gets static_sla
     *
     * @return \Swagger\Client\Model\WANDataClassesOfServiceStaticSLA
     */
    public function getStaticSla()
    {
        return $this->container['static_sla'];
    }

    /**
     * Sets static_sla
     *
     * @param \Swagger\Client\Model\WANDataClassesOfServiceStaticSLA $static_sla static_sla
     *
     * @return $this
     */
    public function setStaticSla($static_sla)
    {
        $this->container['static_sla'] = $static_sla;

        return $this;
    }

    /**
     * Gets bandwidth_pct
     *
     * @return int
     */
    public function getBandwidthPct()
    {
        return $this->container['bandwidth_pct'];
    }

    /**
     * Sets bandwidth_pct
     *
     * @param int $bandwidth_pct bandwidth_pct
     *
     * @return $this
     */
    public function setBandwidthPct($bandwidth_pct)
    {
        $this->container['bandwidth_pct'] = $bandwidth_pct;

        return $this;
    }

    /**
     * Gets bandwidth_guaranteed
     *
     * @return bool
     */
    public function getBandwidthGuaranteed()
    {
        return $this->container['bandwidth_guaranteed'];
    }

    /**
     * Sets bandwidth_guaranteed
     *
     * @param bool $bandwidth_guaranteed bandwidth_guaranteed
     *
     * @return $this
     */
    public function setBandwidthGuaranteed($bandwidth_guaranteed)
    {
        $this->container['bandwidth_guaranteed'] = $bandwidth_guaranteed;

        return $this;
    }

    /**
     * Gets default_class_of_service
     *
     * @return bool
     */
    public function getDefaultClassOfService()
    {
        return $this->container['default_class_of_service'];
    }

    /**
     * Sets default_class_of_service
     *
     * @param bool $default_class_of_service default_class_of_service
     *
     * @return $this
     */
    public function setDefaultClassOfService($default_class_of_service)
    {
        $this->container['default_class_of_service'] = $default_class_of_service;

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



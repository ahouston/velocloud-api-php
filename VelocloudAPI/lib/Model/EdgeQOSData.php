<?php
/**
 * EdgeQOSData
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
 * EdgeQOSData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EdgeQOSData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'edgeQOSData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'rules' => '\Swagger\Client\Model\EdgeQOSDataRules[]',
        'defaults' => 'object[]',
        'web_proxy' => '\Swagger\Client\Model\EdgeQOSDataWebProxy',
        'service_rate_limit' => '\Swagger\Client\Model\EdgeQOSDataServiceRateLimit',
        'cos_mapping' => '\Swagger\Client\Model\EdgeQOSDataCosMapping'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'rules' => null,
        'defaults' => null,
        'web_proxy' => null,
        'service_rate_limit' => null,
        'cos_mapping' => null
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
        'rules' => 'rules',
        'defaults' => 'defaults',
        'web_proxy' => 'webProxy',
        'service_rate_limit' => 'serviceRateLimit',
        'cos_mapping' => 'cosMapping'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rules' => 'setRules',
        'defaults' => 'setDefaults',
        'web_proxy' => 'setWebProxy',
        'service_rate_limit' => 'setServiceRateLimit',
        'cos_mapping' => 'setCosMapping'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rules' => 'getRules',
        'defaults' => 'getDefaults',
        'web_proxy' => 'getWebProxy',
        'service_rate_limit' => 'getServiceRateLimit',
        'cos_mapping' => 'getCosMapping'
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
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
        $this->container['defaults'] = isset($data['defaults']) ? $data['defaults'] : null;
        $this->container['web_proxy'] = isset($data['web_proxy']) ? $data['web_proxy'] : null;
        $this->container['service_rate_limit'] = isset($data['service_rate_limit']) ? $data['service_rate_limit'] : null;
        $this->container['cos_mapping'] = isset($data['cos_mapping']) ? $data['cos_mapping'] : null;
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
     * Gets rules
     *
     * @return \Swagger\Client\Model\EdgeQOSDataRules[]
     */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
     * Sets rules
     *
     * @param \Swagger\Client\Model\EdgeQOSDataRules[] $rules rules
     *
     * @return $this
     */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;

        return $this;
    }

    /**
     * Gets defaults
     *
     * @return object[]
     */
    public function getDefaults()
    {
        return $this->container['defaults'];
    }

    /**
     * Sets defaults
     *
     * @param object[] $defaults defaults
     *
     * @return $this
     */
    public function setDefaults($defaults)
    {
        $this->container['defaults'] = $defaults;

        return $this;
    }

    /**
     * Gets web_proxy
     *
     * @return \Swagger\Client\Model\EdgeQOSDataWebProxy
     */
    public function getWebProxy()
    {
        return $this->container['web_proxy'];
    }

    /**
     * Sets web_proxy
     *
     * @param \Swagger\Client\Model\EdgeQOSDataWebProxy $web_proxy web_proxy
     *
     * @return $this
     */
    public function setWebProxy($web_proxy)
    {
        $this->container['web_proxy'] = $web_proxy;

        return $this;
    }

    /**
     * Gets service_rate_limit
     *
     * @return \Swagger\Client\Model\EdgeQOSDataServiceRateLimit
     */
    public function getServiceRateLimit()
    {
        return $this->container['service_rate_limit'];
    }

    /**
     * Sets service_rate_limit
     *
     * @param \Swagger\Client\Model\EdgeQOSDataServiceRateLimit $service_rate_limit service_rate_limit
     *
     * @return $this
     */
    public function setServiceRateLimit($service_rate_limit)
    {
        $this->container['service_rate_limit'] = $service_rate_limit;

        return $this;
    }

    /**
     * Gets cos_mapping
     *
     * @return \Swagger\Client\Model\EdgeQOSDataCosMapping
     */
    public function getCosMapping()
    {
        return $this->container['cos_mapping'];
    }

    /**
     * Sets cos_mapping
     *
     * @param \Swagger\Client\Model\EdgeQOSDataCosMapping $cos_mapping cos_mapping
     *
     * @return $this
     */
    public function setCosMapping($cos_mapping)
    {
        $this->container['cos_mapping'] = $cos_mapping;

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



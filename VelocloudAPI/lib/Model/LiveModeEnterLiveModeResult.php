<?php
/**
 * LiveModeEnterLiveModeResult
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
 * LiveModeEnterLiveModeResult Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LiveModeEnterLiveModeResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'live_mode_enter_live_mode_result';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'action_id' => 'int',
        'already_live' => 'bool',
        'last_contact' => 'int',
        'refresh_interval_ms' => 'int',
        'token' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'action_id' => null,
        'already_live' => null,
        'last_contact' => null,
        'refresh_interval_ms' => null,
        'token' => null,
        'url' => null
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
        'action_id' => 'actionId',
        'already_live' => 'alreadyLive',
        'last_contact' => 'lastContact',
        'refresh_interval_ms' => 'refreshIntervalMs',
        'token' => 'token',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action_id' => 'setActionId',
        'already_live' => 'setAlreadyLive',
        'last_contact' => 'setLastContact',
        'refresh_interval_ms' => 'setRefreshIntervalMs',
        'token' => 'setToken',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action_id' => 'getActionId',
        'already_live' => 'getAlreadyLive',
        'last_contact' => 'getLastContact',
        'refresh_interval_ms' => 'getRefreshIntervalMs',
        'token' => 'getToken',
        'url' => 'getUrl'
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
        $this->container['action_id'] = isset($data['action_id']) ? $data['action_id'] : null;
        $this->container['already_live'] = isset($data['already_live']) ? $data['already_live'] : null;
        $this->container['last_contact'] = isset($data['last_contact']) ? $data['last_contact'] : null;
        $this->container['refresh_interval_ms'] = isset($data['refresh_interval_ms']) ? $data['refresh_interval_ms'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
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
     * Gets action_id
     *
     * @return int
     */
    public function getActionId()
    {
        return $this->container['action_id'];
    }

    /**
     * Sets action_id
     *
     * @param int $action_id The ID of the action queued
     *
     * @return $this
     */
    public function setActionId($action_id)
    {
        $this->container['action_id'] = $action_id;

        return $this;
    }

    /**
     * Gets already_live
     *
     * @return bool
     */
    public function getAlreadyLive()
    {
        return $this->container['already_live'];
    }

    /**
     * Sets already_live
     *
     * @param bool $already_live already_live
     *
     * @return $this
     */
    public function setAlreadyLive($already_live)
    {
        $this->container['already_live'] = $already_live;

        return $this;
    }

    /**
     * Gets last_contact
     *
     * @return int
     */
    public function getLastContact()
    {
        return $this->container['last_contact'];
    }

    /**
     * Sets last_contact
     *
     * @param int $last_contact last_contact
     *
     * @return $this
     */
    public function setLastContact($last_contact)
    {
        $this->container['last_contact'] = $last_contact;

        return $this;
    }

    /**
     * Gets refresh_interval_ms
     *
     * @return int
     */
    public function getRefreshIntervalMs()
    {
        return $this->container['refresh_interval_ms'];
    }

    /**
     * Sets refresh_interval_ms
     *
     * @param int $refresh_interval_ms refresh_interval_ms
     *
     * @return $this
     */
    public function setRefreshIntervalMs($refresh_interval_ms)
    {
        $this->container['refresh_interval_ms'] = $refresh_interval_ms;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token token
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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


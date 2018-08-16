<?php
/**
 * ControlPlaneDataVpnEdgeToEdgeDetail
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
 * ControlPlaneDataVpnEdgeToEdgeDetail Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ControlPlaneDataVpnEdgeToEdgeDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'control_plane_data_vpn_edgeToEdgeDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dynamic' => '\Swagger\Client\Model\ControlPlaneDataVpnEdgeToEdgeDetailDynamic',
        'encryption_protocol' => 'string',
        'profile_isolation' => '\Swagger\Client\Model\ControlPlaneDataVpnEdgeToEdgeDetailProfileIsolation',
        'use_cloud_gateway' => 'bool',
        'vpn_hubs' => 'object[]',
        'auto_select_vpn_hubs' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dynamic' => null,
        'encryption_protocol' => null,
        'profile_isolation' => null,
        'use_cloud_gateway' => null,
        'vpn_hubs' => null,
        'auto_select_vpn_hubs' => null
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
        'dynamic' => 'dynamic',
        'encryption_protocol' => 'encryptionProtocol',
        'profile_isolation' => 'profileIsolation',
        'use_cloud_gateway' => 'useCloudGateway',
        'vpn_hubs' => 'vpnHubs',
        'auto_select_vpn_hubs' => 'autoSelectVpnHubs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dynamic' => 'setDynamic',
        'encryption_protocol' => 'setEncryptionProtocol',
        'profile_isolation' => 'setProfileIsolation',
        'use_cloud_gateway' => 'setUseCloudGateway',
        'vpn_hubs' => 'setVpnHubs',
        'auto_select_vpn_hubs' => 'setAutoSelectVpnHubs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dynamic' => 'getDynamic',
        'encryption_protocol' => 'getEncryptionProtocol',
        'profile_isolation' => 'getProfileIsolation',
        'use_cloud_gateway' => 'getUseCloudGateway',
        'vpn_hubs' => 'getVpnHubs',
        'auto_select_vpn_hubs' => 'getAutoSelectVpnHubs'
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
        $this->container['dynamic'] = isset($data['dynamic']) ? $data['dynamic'] : null;
        $this->container['encryption_protocol'] = isset($data['encryption_protocol']) ? $data['encryption_protocol'] : null;
        $this->container['profile_isolation'] = isset($data['profile_isolation']) ? $data['profile_isolation'] : null;
        $this->container['use_cloud_gateway'] = isset($data['use_cloud_gateway']) ? $data['use_cloud_gateway'] : null;
        $this->container['vpn_hubs'] = isset($data['vpn_hubs']) ? $data['vpn_hubs'] : null;
        $this->container['auto_select_vpn_hubs'] = isset($data['auto_select_vpn_hubs']) ? $data['auto_select_vpn_hubs'] : null;
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
     * Gets dynamic
     *
     * @return \Swagger\Client\Model\ControlPlaneDataVpnEdgeToEdgeDetailDynamic
     */
    public function getDynamic()
    {
        return $this->container['dynamic'];
    }

    /**
     * Sets dynamic
     *
     * @param \Swagger\Client\Model\ControlPlaneDataVpnEdgeToEdgeDetailDynamic $dynamic dynamic
     *
     * @return $this
     */
    public function setDynamic($dynamic)
    {
        $this->container['dynamic'] = $dynamic;

        return $this;
    }

    /**
     * Gets encryption_protocol
     *
     * @return string
     */
    public function getEncryptionProtocol()
    {
        return $this->container['encryption_protocol'];
    }

    /**
     * Sets encryption_protocol
     *
     * @param string $encryption_protocol encryption_protocol
     *
     * @return $this
     */
    public function setEncryptionProtocol($encryption_protocol)
    {
        $this->container['encryption_protocol'] = $encryption_protocol;

        return $this;
    }

    /**
     * Gets profile_isolation
     *
     * @return \Swagger\Client\Model\ControlPlaneDataVpnEdgeToEdgeDetailProfileIsolation
     */
    public function getProfileIsolation()
    {
        return $this->container['profile_isolation'];
    }

    /**
     * Sets profile_isolation
     *
     * @param \Swagger\Client\Model\ControlPlaneDataVpnEdgeToEdgeDetailProfileIsolation $profile_isolation profile_isolation
     *
     * @return $this
     */
    public function setProfileIsolation($profile_isolation)
    {
        $this->container['profile_isolation'] = $profile_isolation;

        return $this;
    }

    /**
     * Gets use_cloud_gateway
     *
     * @return bool
     */
    public function getUseCloudGateway()
    {
        return $this->container['use_cloud_gateway'];
    }

    /**
     * Sets use_cloud_gateway
     *
     * @param bool $use_cloud_gateway use_cloud_gateway
     *
     * @return $this
     */
    public function setUseCloudGateway($use_cloud_gateway)
    {
        $this->container['use_cloud_gateway'] = $use_cloud_gateway;

        return $this;
    }

    /**
     * Gets vpn_hubs
     *
     * @return object[]
     */
    public function getVpnHubs()
    {
        return $this->container['vpn_hubs'];
    }

    /**
     * Sets vpn_hubs
     *
     * @param object[] $vpn_hubs vpn_hubs
     *
     * @return $this
     */
    public function setVpnHubs($vpn_hubs)
    {
        $this->container['vpn_hubs'] = $vpn_hubs;

        return $this;
    }

    /**
     * Gets auto_select_vpn_hubs
     *
     * @return bool
     */
    public function getAutoSelectVpnHubs()
    {
        return $this->container['auto_select_vpn_hubs'];
    }

    /**
     * Sets auto_select_vpn_hubs
     *
     * @param bool $auto_select_vpn_hubs auto_select_vpn_hubs
     *
     * @return $this
     */
    public function setAutoSelectVpnHubs($auto_select_vpn_hubs)
    {
        $this->container['auto_select_vpn_hubs'] = $auto_select_vpn_hubs;

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


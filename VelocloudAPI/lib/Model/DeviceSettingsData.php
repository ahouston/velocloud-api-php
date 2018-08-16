<?php
/**
 * DeviceSettingsData
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
 * DeviceSettingsData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DeviceSettingsData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'deviceSettingsData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'lan' => '\Swagger\Client\Model\DeviceSettingsDataLan',
        'ospf' => '\Swagger\Client\Model\DeviceSettingsDataOspf',
        'bgp' => '\Swagger\Client\Model\DeviceSettingsDataBgp',
        'dns' => '\Swagger\Client\Model\EdgeDeviceSettingsDataDns',
        'authentication' => '\Swagger\Client\Model\EdgeDeviceSettingsDataDnsPrimaryProvider',
        'software_update' => '\Swagger\Client\Model\DeviceSettingsDataSoftwareUpdate',
        'radio_settings' => '\Swagger\Client\Model\DeviceSettingsDataRadioSettings',
        'netflow' => '\Swagger\Client\Model\DeviceSettingsDataNetflow',
        'vqm' => '\Swagger\Client\Model\DeviceSettingsDataVqm',
        'snmp' => '\Swagger\Client\Model\DeviceSettingsDataSnmp',
        'multi_source_qos' => '\Swagger\Client\Model\DeviceSettingsDataMultiSourceQos',
        'models' => '\Swagger\Client\Model\DeviceSettingsDataModels',
        'vpn' => '\Swagger\Client\Model\DeviceSettingsDataVpn'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'lan' => null,
        'ospf' => null,
        'bgp' => null,
        'dns' => null,
        'authentication' => null,
        'software_update' => null,
        'radio_settings' => null,
        'netflow' => null,
        'vqm' => null,
        'snmp' => null,
        'multi_source_qos' => null,
        'models' => null,
        'vpn' => null
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
        'lan' => 'lan',
        'ospf' => 'ospf',
        'bgp' => 'bgp',
        'dns' => 'dns',
        'authentication' => 'authentication',
        'software_update' => 'softwareUpdate',
        'radio_settings' => 'radioSettings',
        'netflow' => 'netflow',
        'vqm' => 'vqm',
        'snmp' => 'snmp',
        'multi_source_qos' => 'multiSourceQos',
        'models' => 'models',
        'vpn' => 'vpn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lan' => 'setLan',
        'ospf' => 'setOspf',
        'bgp' => 'setBgp',
        'dns' => 'setDns',
        'authentication' => 'setAuthentication',
        'software_update' => 'setSoftwareUpdate',
        'radio_settings' => 'setRadioSettings',
        'netflow' => 'setNetflow',
        'vqm' => 'setVqm',
        'snmp' => 'setSnmp',
        'multi_source_qos' => 'setMultiSourceQos',
        'models' => 'setModels',
        'vpn' => 'setVpn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lan' => 'getLan',
        'ospf' => 'getOspf',
        'bgp' => 'getBgp',
        'dns' => 'getDns',
        'authentication' => 'getAuthentication',
        'software_update' => 'getSoftwareUpdate',
        'radio_settings' => 'getRadioSettings',
        'netflow' => 'getNetflow',
        'vqm' => 'getVqm',
        'snmp' => 'getSnmp',
        'multi_source_qos' => 'getMultiSourceQos',
        'models' => 'getModels',
        'vpn' => 'getVpn'
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
        $this->container['lan'] = isset($data['lan']) ? $data['lan'] : null;
        $this->container['ospf'] = isset($data['ospf']) ? $data['ospf'] : null;
        $this->container['bgp'] = isset($data['bgp']) ? $data['bgp'] : null;
        $this->container['dns'] = isset($data['dns']) ? $data['dns'] : null;
        $this->container['authentication'] = isset($data['authentication']) ? $data['authentication'] : null;
        $this->container['software_update'] = isset($data['software_update']) ? $data['software_update'] : null;
        $this->container['radio_settings'] = isset($data['radio_settings']) ? $data['radio_settings'] : null;
        $this->container['netflow'] = isset($data['netflow']) ? $data['netflow'] : null;
        $this->container['vqm'] = isset($data['vqm']) ? $data['vqm'] : null;
        $this->container['snmp'] = isset($data['snmp']) ? $data['snmp'] : null;
        $this->container['multi_source_qos'] = isset($data['multi_source_qos']) ? $data['multi_source_qos'] : null;
        $this->container['models'] = isset($data['models']) ? $data['models'] : null;
        $this->container['vpn'] = isset($data['vpn']) ? $data['vpn'] : null;
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
     * Gets lan
     *
     * @return \Swagger\Client\Model\DeviceSettingsDataLan
     */
    public function getLan()
    {
        return $this->container['lan'];
    }

    /**
     * Sets lan
     *
     * @param \Swagger\Client\Model\DeviceSettingsDataLan $lan lan
     *
     * @return $this
     */
    public function setLan($lan)
    {
        $this->container['lan'] = $lan;

        return $this;
    }

    /**
     * Gets ospf
     *
     * @return \Swagger\Client\Model\DeviceSettingsDataOspf
     */
    public function getOspf()
    {
        return $this->container['ospf'];
    }

    /**
     * Sets ospf
     *
     * @param \Swagger\Client\Model\DeviceSettingsDataOspf $ospf ospf
     *
     * @return $this
     */
    public function setOspf($ospf)
    {
        $this->container['ospf'] = $ospf;

        return $this;
    }

    /**
     * Gets bgp
     *
     * @return \Swagger\Client\Model\DeviceSettingsDataBgp
     */
    public function getBgp()
    {
        return $this->container['bgp'];
    }

    /**
     * Sets bgp
     *
     * @param \Swagger\Client\Model\DeviceSettingsDataBgp $bgp bgp
     *
     * @return $this
     */
    public function setBgp($bgp)
    {
        $this->container['bgp'] = $bgp;

        return $this;
    }

    /**
     * Gets dns
     *
     * @return \Swagger\Client\Model\EdgeDeviceSettingsDataDns
     */
    public function getDns()
    {
        return $this->container['dns'];
    }

    /**
     * Sets dns
     *
     * @param \Swagger\Client\Model\EdgeDeviceSettingsDataDns $dns dns
     *
     * @return $this
     */
    public function setDns($dns)
    {
        $this->container['dns'] = $dns;

        return $this;
    }

    /**
     * Gets authentication
     *
     * @return \Swagger\Client\Model\EdgeDeviceSettingsDataDnsPrimaryProvider
     */
    public function getAuthentication()
    {
        return $this->container['authentication'];
    }

    /**
     * Sets authentication
     *
     * @param \Swagger\Client\Model\EdgeDeviceSettingsDataDnsPrimaryProvider $authentication authentication
     *
     * @return $this
     */
    public function setAuthentication($authentication)
    {
        $this->container['authentication'] = $authentication;

        return $this;
    }

    /**
     * Gets software_update
     *
     * @return \Swagger\Client\Model\DeviceSettingsDataSoftwareUpdate
     */
    public function getSoftwareUpdate()
    {
        return $this->container['software_update'];
    }

    /**
     * Sets software_update
     *
     * @param \Swagger\Client\Model\DeviceSettingsDataSoftwareUpdate $software_update software_update
     *
     * @return $this
     */
    public function setSoftwareUpdate($software_update)
    {
        $this->container['software_update'] = $software_update;

        return $this;
    }

    /**
     * Gets radio_settings
     *
     * @return \Swagger\Client\Model\DeviceSettingsDataRadioSettings
     */
    public function getRadioSettings()
    {
        return $this->container['radio_settings'];
    }

    /**
     * Sets radio_settings
     *
     * @param \Swagger\Client\Model\DeviceSettingsDataRadioSettings $radio_settings radio_settings
     *
     * @return $this
     */
    public function setRadioSettings($radio_settings)
    {
        $this->container['radio_settings'] = $radio_settings;

        return $this;
    }

    /**
     * Gets netflow
     *
     * @return \Swagger\Client\Model\DeviceSettingsDataNetflow
     */
    public function getNetflow()
    {
        return $this->container['netflow'];
    }

    /**
     * Sets netflow
     *
     * @param \Swagger\Client\Model\DeviceSettingsDataNetflow $netflow netflow
     *
     * @return $this
     */
    public function setNetflow($netflow)
    {
        $this->container['netflow'] = $netflow;

        return $this;
    }

    /**
     * Gets vqm
     *
     * @return \Swagger\Client\Model\DeviceSettingsDataVqm
     */
    public function getVqm()
    {
        return $this->container['vqm'];
    }

    /**
     * Sets vqm
     *
     * @param \Swagger\Client\Model\DeviceSettingsDataVqm $vqm vqm
     *
     * @return $this
     */
    public function setVqm($vqm)
    {
        $this->container['vqm'] = $vqm;

        return $this;
    }

    /**
     * Gets snmp
     *
     * @return \Swagger\Client\Model\DeviceSettingsDataSnmp
     */
    public function getSnmp()
    {
        return $this->container['snmp'];
    }

    /**
     * Sets snmp
     *
     * @param \Swagger\Client\Model\DeviceSettingsDataSnmp $snmp snmp
     *
     * @return $this
     */
    public function setSnmp($snmp)
    {
        $this->container['snmp'] = $snmp;

        return $this;
    }

    /**
     * Gets multi_source_qos
     *
     * @return \Swagger\Client\Model\DeviceSettingsDataMultiSourceQos
     */
    public function getMultiSourceQos()
    {
        return $this->container['multi_source_qos'];
    }

    /**
     * Sets multi_source_qos
     *
     * @param \Swagger\Client\Model\DeviceSettingsDataMultiSourceQos $multi_source_qos multi_source_qos
     *
     * @return $this
     */
    public function setMultiSourceQos($multi_source_qos)
    {
        $this->container['multi_source_qos'] = $multi_source_qos;

        return $this;
    }

    /**
     * Gets models
     *
     * @return \Swagger\Client\Model\DeviceSettingsDataModels
     */
    public function getModels()
    {
        return $this->container['models'];
    }

    /**
     * Sets models
     *
     * @param \Swagger\Client\Model\DeviceSettingsDataModels $models models
     *
     * @return $this
     */
    public function setModels($models)
    {
        $this->container['models'] = $models;

        return $this;
    }

    /**
     * Gets vpn
     *
     * @return \Swagger\Client\Model\DeviceSettingsDataVpn
     */
    public function getVpn()
    {
        return $this->container['vpn'];
    }

    /**
     * Sets vpn
     *
     * @param \Swagger\Client\Model\DeviceSettingsDataVpn $vpn vpn
     *
     * @return $this
     */
    public function setVpn($vpn)
    {
        $this->container['vpn'] = $vpn;

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



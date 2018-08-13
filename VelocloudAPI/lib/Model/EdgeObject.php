<?php
/**
 * EdgeObject
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
 * OpenAPI spec version: 0.9.0
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
 * EdgeObject Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EdgeObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'edge_object';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'created' => 'string',
        'enterprise_id' => 'int',
        'site_id' => 'int',
        'activation_key' => 'string',
        'activation_key_expires' => 'string',
        'activation_state' => 'string',
        'activation_time' => 'string',
        'software_version' => 'string',
        'build_number' => 'string',
        'software_updated' => 'string',
        'self_mac_address' => 'string',
        'logical_id' => 'string',
        'name' => 'string',
        'alerts_enabled' => 'int',
        'operator_alerts_enabled' => 'int',
        'edge_state' => 'string',
        'edge_state_time' => 'string',
        'is_live' => 'int',
        'system_up_since' => 'string',
        'service_up_since' => 'string',
        'last_contact' => 'string',
        'service_state' => 'string',
        'end_point_pki_mode' => 'string',
        'ha_state' => 'string',
        'ha_previous_state' => 'string',
        'ha_last_contact' => 'string',
        'modified' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'created' => null,
        'enterprise_id' => null,
        'site_id' => null,
        'activation_key' => null,
        'activation_key_expires' => null,
        'activation_state' => null,
        'activation_time' => null,
        'software_version' => null,
        'build_number' => null,
        'software_updated' => null,
        'self_mac_address' => null,
        'logical_id' => null,
        'name' => null,
        'alerts_enabled' => null,
        'operator_alerts_enabled' => null,
        'edge_state' => null,
        'edge_state_time' => null,
        'is_live' => null,
        'system_up_since' => null,
        'service_up_since' => null,
        'last_contact' => null,
        'service_state' => null,
        'end_point_pki_mode' => null,
        'ha_state' => null,
        'ha_previous_state' => null,
        'ha_last_contact' => null,
        'modified' => null
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
        'created' => 'created',
        'enterprise_id' => 'enterpriseId',
        'site_id' => 'siteId',
        'activation_key' => 'activationKey',
        'activation_key_expires' => 'activationKeyExpires',
        'activation_state' => 'activationState',
        'activation_time' => 'activationTime',
        'software_version' => 'softwareVersion',
        'build_number' => 'buildNumber',
        'software_updated' => 'softwareUpdated',
        'self_mac_address' => 'selfMacAddress',
        'logical_id' => 'logicalId',
        'name' => 'name',
        'alerts_enabled' => 'alertsEnabled',
        'operator_alerts_enabled' => 'operatorAlertsEnabled',
        'edge_state' => 'edgeState',
        'edge_state_time' => 'edgeStateTime',
        'is_live' => 'isLive',
        'system_up_since' => 'systemUpSince',
        'service_up_since' => 'serviceUpSince',
        'last_contact' => 'lastContact',
        'service_state' => 'serviceState',
        'end_point_pki_mode' => 'endPointPkiMode',
        'ha_state' => 'haState',
        'ha_previous_state' => 'haPreviousState',
        'ha_last_contact' => 'haLastContact',
        'modified' => 'modified'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created' => 'setCreated',
        'enterprise_id' => 'setEnterpriseId',
        'site_id' => 'setSiteId',
        'activation_key' => 'setActivationKey',
        'activation_key_expires' => 'setActivationKeyExpires',
        'activation_state' => 'setActivationState',
        'activation_time' => 'setActivationTime',
        'software_version' => 'setSoftwareVersion',
        'build_number' => 'setBuildNumber',
        'software_updated' => 'setSoftwareUpdated',
        'self_mac_address' => 'setSelfMacAddress',
        'logical_id' => 'setLogicalId',
        'name' => 'setName',
        'alerts_enabled' => 'setAlertsEnabled',
        'operator_alerts_enabled' => 'setOperatorAlertsEnabled',
        'edge_state' => 'setEdgeState',
        'edge_state_time' => 'setEdgeStateTime',
        'is_live' => 'setIsLive',
        'system_up_since' => 'setSystemUpSince',
        'service_up_since' => 'setServiceUpSince',
        'last_contact' => 'setLastContact',
        'service_state' => 'setServiceState',
        'end_point_pki_mode' => 'setEndPointPkiMode',
        'ha_state' => 'setHaState',
        'ha_previous_state' => 'setHaPreviousState',
        'ha_last_contact' => 'setHaLastContact',
        'modified' => 'setModified'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created' => 'getCreated',
        'enterprise_id' => 'getEnterpriseId',
        'site_id' => 'getSiteId',
        'activation_key' => 'getActivationKey',
        'activation_key_expires' => 'getActivationKeyExpires',
        'activation_state' => 'getActivationState',
        'activation_time' => 'getActivationTime',
        'software_version' => 'getSoftwareVersion',
        'build_number' => 'getBuildNumber',
        'software_updated' => 'getSoftwareUpdated',
        'self_mac_address' => 'getSelfMacAddress',
        'logical_id' => 'getLogicalId',
        'name' => 'getName',
        'alerts_enabled' => 'getAlertsEnabled',
        'operator_alerts_enabled' => 'getOperatorAlertsEnabled',
        'edge_state' => 'getEdgeState',
        'edge_state_time' => 'getEdgeStateTime',
        'is_live' => 'getIsLive',
        'system_up_since' => 'getSystemUpSince',
        'service_up_since' => 'getServiceUpSince',
        'last_contact' => 'getLastContact',
        'service_state' => 'getServiceState',
        'end_point_pki_mode' => 'getEndPointPkiMode',
        'ha_state' => 'getHaState',
        'ha_previous_state' => 'getHaPreviousState',
        'ha_last_contact' => 'getHaLastContact',
        'modified' => 'getModified'
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

    const ACTIVATION_STATE_UNASSIGNED = 'UNASSIGNED';
    const ACTIVATION_STATE_PENDING = 'PENDING';
    const ACTIVATION_STATE_ACTIVATED = 'ACTIVATED';
    const ACTIVATION_STATE_REACTIVATION_PENDING = 'REACTIVATION_PENDING';
    const EDGE_STATE_NEVER_ACTIVATED = 'NEVER_ACTIVATED';
    const EDGE_STATE_DEGRADED = 'DEGRADED';
    const EDGE_STATE_OFFLINE = 'OFFLINE';
    const EDGE_STATE_DISABLED = 'DISABLED';
    const EDGE_STATE_EXPIRED = 'EXPIRED';
    const EDGE_STATE_CONNECTED = 'CONNECTED';
    const SERVICE_STATE_IN_SERVICE = 'IN_SERVICE';
    const SERVICE_STATE_OUT_OF_SERVICE = 'OUT_OF_SERVICE';
    const SERVICE_STATE_HISTORICAL = 'HISTORICAL';
    const END_POINT_PKI_MODE_DISABLED = 'CERTIFICATE_DISABLED';
    const END_POINT_PKI_MODE_OPTIONAL = 'CERTIFICATE_OPTIONAL';
    const END_POINT_PKI_MODE_REQUIRED = 'CERTIFICATE_REQUIRED';
    const HA_STATE_UNCONFIGURED = 'UNCONFIGURED';
    const HA_STATE_PENDING_INIT = 'PENDING_INIT';
    const HA_STATE_PENDING_CONFIRMATION = 'PENDING_CONFIRMATION';
    const HA_STATE_PENDING_CONFIRMED = 'PENDING_CONFIRMED';
    const HA_STATE_PENDING_DISSOCIATION = 'PENDING_DISSOCIATION';
    const HA_STATE_READY = 'READY';
    const HA_STATE_FAILED = 'FAILED';
    const HA_PREVIOUS_STATE_UNCONFIGURED = 'UNCONFIGURED';
    const HA_PREVIOUS_STATE_PENDING_INIT = 'PENDING_INIT';
    const HA_PREVIOUS_STATE_PENDING_CONFIRMATION = 'PENDING_CONFIRMATION';
    const HA_PREVIOUS_STATE_PENDING_CONFIRMED = 'PENDING_CONFIRMED';
    const HA_PREVIOUS_STATE_PENDING_DISSOCIATION = 'PENDING_DISSOCIATION';
    const HA_PREVIOUS_STATE_READY = 'READY';
    const HA_PREVIOUS_STATE_FAILED = 'FAILED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActivationStateAllowableValues()
    {
        return [
            self::ACTIVATION_STATE_UNASSIGNED,
            self::ACTIVATION_STATE_PENDING,
            self::ACTIVATION_STATE_ACTIVATED,
            self::ACTIVATION_STATE_REACTIVATION_PENDING,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEdgeStateAllowableValues()
    {
        return [
            self::EDGE_STATE_NEVER_ACTIVATED,
            self::EDGE_STATE_DEGRADED,
            self::EDGE_STATE_OFFLINE,
            self::EDGE_STATE_DISABLED,
            self::EDGE_STATE_EXPIRED,
            self::EDGE_STATE_CONNECTED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getServiceStateAllowableValues()
    {
        return [
            self::SERVICE_STATE_IN_SERVICE,
            self::SERVICE_STATE_OUT_OF_SERVICE,
            self::SERVICE_STATE_HISTORICAL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEndPointPkiModeAllowableValues()
    {
        return [
            self::END_POINT_PKI_MODE_DISABLED,
            self::END_POINT_PKI_MODE_OPTIONAL,
            self::END_POINT_PKI_MODE_REQUIRED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHaStateAllowableValues()
    {
        return [
            self::HA_STATE_UNCONFIGURED,
            self::HA_STATE_PENDING_INIT,
            self::HA_STATE_PENDING_CONFIRMATION,
            self::HA_STATE_PENDING_CONFIRMED,
            self::HA_STATE_PENDING_DISSOCIATION,
            self::HA_STATE_READY,
            self::HA_STATE_FAILED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHaPreviousStateAllowableValues()
    {
        return [
            self::HA_PREVIOUS_STATE_UNCONFIGURED,
            self::HA_PREVIOUS_STATE_PENDING_INIT,
            self::HA_PREVIOUS_STATE_PENDING_CONFIRMATION,
            self::HA_PREVIOUS_STATE_PENDING_CONFIRMED,
            self::HA_PREVIOUS_STATE_PENDING_DISSOCIATION,
            self::HA_PREVIOUS_STATE_READY,
            self::HA_PREVIOUS_STATE_FAILED,
        ];
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
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['enterprise_id'] = isset($data['enterprise_id']) ? $data['enterprise_id'] : null;
        $this->container['site_id'] = isset($data['site_id']) ? $data['site_id'] : null;
        $this->container['activation_key'] = isset($data['activation_key']) ? $data['activation_key'] : null;
        $this->container['activation_key_expires'] = isset($data['activation_key_expires']) ? $data['activation_key_expires'] : null;
        $this->container['activation_state'] = isset($data['activation_state']) ? $data['activation_state'] : null;
        $this->container['activation_time'] = isset($data['activation_time']) ? $data['activation_time'] : null;
        $this->container['software_version'] = isset($data['software_version']) ? $data['software_version'] : null;
        $this->container['build_number'] = isset($data['build_number']) ? $data['build_number'] : null;
        $this->container['software_updated'] = isset($data['software_updated']) ? $data['software_updated'] : null;
        $this->container['self_mac_address'] = isset($data['self_mac_address']) ? $data['self_mac_address'] : null;
        $this->container['logical_id'] = isset($data['logical_id']) ? $data['logical_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['alerts_enabled'] = isset($data['alerts_enabled']) ? $data['alerts_enabled'] : null;
        $this->container['operator_alerts_enabled'] = isset($data['operator_alerts_enabled']) ? $data['operator_alerts_enabled'] : null;
        $this->container['edge_state'] = isset($data['edge_state']) ? $data['edge_state'] : null;
        $this->container['edge_state_time'] = isset($data['edge_state_time']) ? $data['edge_state_time'] : null;
        $this->container['is_live'] = isset($data['is_live']) ? $data['is_live'] : null;
        $this->container['system_up_since'] = isset($data['system_up_since']) ? $data['system_up_since'] : null;
        $this->container['service_up_since'] = isset($data['service_up_since']) ? $data['service_up_since'] : null;
        $this->container['last_contact'] = isset($data['last_contact']) ? $data['last_contact'] : null;
        $this->container['service_state'] = isset($data['service_state']) ? $data['service_state'] : null;
        $this->container['end_point_pki_mode'] = isset($data['end_point_pki_mode']) ? $data['end_point_pki_mode'] : null;
        $this->container['ha_state'] = isset($data['ha_state']) ? $data['ha_state'] : null;
        $this->container['ha_previous_state'] = isset($data['ha_previous_state']) ? $data['ha_previous_state'] : null;
        $this->container['ha_last_contact'] = isset($data['ha_last_contact']) ? $data['ha_last_contact'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getActivationStateAllowableValues();
        if (!in_array($this->container['activation_state'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'activation_state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getEdgeStateAllowableValues();
        if (!in_array($this->container['edge_state'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'edge_state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getServiceStateAllowableValues();
        if (!in_array($this->container['service_state'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'service_state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getEndPointPkiModeAllowableValues();
        if (!in_array($this->container['end_point_pki_mode'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'end_point_pki_mode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getHaStateAllowableValues();
        if (!in_array($this->container['ha_state'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'ha_state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getHaPreviousStateAllowableValues();
        if (!in_array($this->container['ha_previous_state'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'ha_previous_state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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

        $allowedValues = $this->getActivationStateAllowableValues();
        if (!in_array($this->container['activation_state'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getEdgeStateAllowableValues();
        if (!in_array($this->container['edge_state'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getServiceStateAllowableValues();
        if (!in_array($this->container['service_state'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getEndPointPkiModeAllowableValues();
        if (!in_array($this->container['end_point_pki_mode'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getHaStateAllowableValues();
        if (!in_array($this->container['ha_state'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getHaPreviousStateAllowableValues();
        if (!in_array($this->container['ha_previous_state'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param string $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets enterprise_id
     *
     * @return int
     */
    public function getEnterpriseId()
    {
        return $this->container['enterprise_id'];
    }

    /**
     * Sets enterprise_id
     *
     * @param int $enterprise_id enterprise_id
     *
     * @return $this
     */
    public function setEnterpriseId($enterprise_id)
    {
        $this->container['enterprise_id'] = $enterprise_id;

        return $this;
    }

    /**
     * Gets site_id
     *
     * @return int
     */
    public function getSiteId()
    {
        return $this->container['site_id'];
    }

    /**
     * Sets site_id
     *
     * @param int $site_id site_id
     *
     * @return $this
     */
    public function setSiteId($site_id)
    {
        $this->container['site_id'] = $site_id;

        return $this;
    }

    /**
     * Gets activation_key
     *
     * @return string
     */
    public function getActivationKey()
    {
        return $this->container['activation_key'];
    }

    /**
     * Sets activation_key
     *
     * @param string $activation_key activation_key
     *
     * @return $this
     */
    public function setActivationKey($activation_key)
    {
        $this->container['activation_key'] = $activation_key;

        return $this;
    }

    /**
     * Gets activation_key_expires
     *
     * @return string
     */
    public function getActivationKeyExpires()
    {
        return $this->container['activation_key_expires'];
    }

    /**
     * Sets activation_key_expires
     *
     * @param string $activation_key_expires activation_key_expires
     *
     * @return $this
     */
    public function setActivationKeyExpires($activation_key_expires)
    {
        $this->container['activation_key_expires'] = $activation_key_expires;

        return $this;
    }

    /**
     * Gets activation_state
     *
     * @return string
     */
    public function getActivationState()
    {
        return $this->container['activation_state'];
    }

    /**
     * Sets activation_state
     *
     * @param string $activation_state activation_state
     *
     * @return $this
     */
    public function setActivationState($activation_state)
    {
        $allowedValues = $this->getActivationStateAllowableValues();
        if (!is_null($activation_state) && !in_array($activation_state, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'activation_state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['activation_state'] = $activation_state;

        return $this;
    }

    /**
     * Gets activation_time
     *
     * @return string
     */
    public function getActivationTime()
    {
        return $this->container['activation_time'];
    }

    /**
     * Sets activation_time
     *
     * @param string $activation_time activation_time
     *
     * @return $this
     */
    public function setActivationTime($activation_time)
    {
        $this->container['activation_time'] = $activation_time;

        return $this;
    }

    /**
     * Gets software_version
     *
     * @return string
     */
    public function getSoftwareVersion()
    {
        return $this->container['software_version'];
    }

    /**
     * Sets software_version
     *
     * @param string $software_version software_version
     *
     * @return $this
     */
    public function setSoftwareVersion($software_version)
    {
        $this->container['software_version'] = $software_version;

        return $this;
    }

    /**
     * Gets build_number
     *
     * @return string
     */
    public function getBuildNumber()
    {
        return $this->container['build_number'];
    }

    /**
     * Sets build_number
     *
     * @param string $build_number build_number
     *
     * @return $this
     */
    public function setBuildNumber($build_number)
    {
        $this->container['build_number'] = $build_number;

        return $this;
    }

    /**
     * Gets software_updated
     *
     * @return string
     */
    public function getSoftwareUpdated()
    {
        return $this->container['software_updated'];
    }

    /**
     * Sets software_updated
     *
     * @param string $software_updated software_updated
     *
     * @return $this
     */
    public function setSoftwareUpdated($software_updated)
    {
        $this->container['software_updated'] = $software_updated;

        return $this;
    }

    /**
     * Gets self_mac_address
     *
     * @return string
     */
    public function getSelfMacAddress()
    {
        return $this->container['self_mac_address'];
    }

    /**
     * Sets self_mac_address
     *
     * @param string $self_mac_address self_mac_address
     *
     * @return $this
     */
    public function setSelfMacAddress($self_mac_address)
    {
        $this->container['self_mac_address'] = $self_mac_address;

        return $this;
    }

    /**
     * Gets logical_id
     *
     * @return string
     */
    public function getLogicalId()
    {
        return $this->container['logical_id'];
    }

    /**
     * Sets logical_id
     *
     * @param string $logical_id logical_id
     *
     * @return $this
     */
    public function setLogicalId($logical_id)
    {
        $this->container['logical_id'] = $logical_id;

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
     * Gets alerts_enabled
     *
     * @return int
     */
    public function getAlertsEnabled()
    {
        return $this->container['alerts_enabled'];
    }

    /**
     * Sets alerts_enabled
     *
     * @param int $alerts_enabled alerts_enabled
     *
     * @return $this
     */
    public function setAlertsEnabled($alerts_enabled)
    {
        $this->container['alerts_enabled'] = $alerts_enabled;

        return $this;
    }

    /**
     * Gets operator_alerts_enabled
     *
     * @return int
     */
    public function getOperatorAlertsEnabled()
    {
        return $this->container['operator_alerts_enabled'];
    }

    /**
     * Sets operator_alerts_enabled
     *
     * @param int $operator_alerts_enabled operator_alerts_enabled
     *
     * @return $this
     */
    public function setOperatorAlertsEnabled($operator_alerts_enabled)
    {
        $this->container['operator_alerts_enabled'] = $operator_alerts_enabled;

        return $this;
    }

    /**
     * Gets edge_state
     *
     * @return string
     */
    public function getEdgeState()
    {
        return $this->container['edge_state'];
    }

    /**
     * Sets edge_state
     *
     * @param string $edge_state edge_state
     *
     * @return $this
     */
    public function setEdgeState($edge_state)
    {
        $allowedValues = $this->getEdgeStateAllowableValues();
        if (!is_null($edge_state) && !in_array($edge_state, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'edge_state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['edge_state'] = $edge_state;

        return $this;
    }

    /**
     * Gets edge_state_time
     *
     * @return string
     */
    public function getEdgeStateTime()
    {
        return $this->container['edge_state_time'];
    }

    /**
     * Sets edge_state_time
     *
     * @param string $edge_state_time edge_state_time
     *
     * @return $this
     */
    public function setEdgeStateTime($edge_state_time)
    {
        $this->container['edge_state_time'] = $edge_state_time;

        return $this;
    }

    /**
     * Gets is_live
     *
     * @return int
     */
    public function getIsLive()
    {
        return $this->container['is_live'];
    }

    /**
     * Sets is_live
     *
     * @param int $is_live is_live
     *
     * @return $this
     */
    public function setIsLive($is_live)
    {
        $this->container['is_live'] = $is_live;

        return $this;
    }

    /**
     * Gets system_up_since
     *
     * @return string
     */
    public function getSystemUpSince()
    {
        return $this->container['system_up_since'];
    }

    /**
     * Sets system_up_since
     *
     * @param string $system_up_since system_up_since
     *
     * @return $this
     */
    public function setSystemUpSince($system_up_since)
    {
        $this->container['system_up_since'] = $system_up_since;

        return $this;
    }

    /**
     * Gets service_up_since
     *
     * @return string
     */
    public function getServiceUpSince()
    {
        return $this->container['service_up_since'];
    }

    /**
     * Sets service_up_since
     *
     * @param string $service_up_since service_up_since
     *
     * @return $this
     */
    public function setServiceUpSince($service_up_since)
    {
        $this->container['service_up_since'] = $service_up_since;

        return $this;
    }

    /**
     * Gets last_contact
     *
     * @return string
     */
    public function getLastContact()
    {
        return $this->container['last_contact'];
    }

    /**
     * Sets last_contact
     *
     * @param string $last_contact last_contact
     *
     * @return $this
     */
    public function setLastContact($last_contact)
    {
        $this->container['last_contact'] = $last_contact;

        return $this;
    }

    /**
     * Gets service_state
     *
     * @return string
     */
    public function getServiceState()
    {
        return $this->container['service_state'];
    }

    /**
     * Sets service_state
     *
     * @param string $service_state service_state
     *
     * @return $this
     */
    public function setServiceState($service_state)
    {
        $allowedValues = $this->getServiceStateAllowableValues();
        if (!is_null($service_state) && !in_array($service_state, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'service_state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['service_state'] = $service_state;

        return $this;
    }

    /**
     * Gets end_point_pki_mode
     *
     * @return string
     */
    public function getEndPointPkiMode()
    {
        return $this->container['end_point_pki_mode'];
    }

    /**
     * Sets end_point_pki_mode
     *
     * @param string $end_point_pki_mode end_point_pki_mode
     *
     * @return $this
     */
    public function setEndPointPkiMode($end_point_pki_mode)
    {
        $allowedValues = $this->getEndPointPkiModeAllowableValues();
        if (!is_null($end_point_pki_mode) && !in_array($end_point_pki_mode, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'end_point_pki_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['end_point_pki_mode'] = $end_point_pki_mode;

        return $this;
    }

    /**
     * Gets ha_state
     *
     * @return string
     */
    public function getHaState()
    {
        return $this->container['ha_state'];
    }

    /**
     * Sets ha_state
     *
     * @param string $ha_state ha_state
     *
     * @return $this
     */
    public function setHaState($ha_state)
    {
        $allowedValues = $this->getHaStateAllowableValues();
        if (!is_null($ha_state) && !in_array($ha_state, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'ha_state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ha_state'] = $ha_state;

        return $this;
    }

    /**
     * Gets ha_previous_state
     *
     * @return string
     */
    public function getHaPreviousState()
    {
        return $this->container['ha_previous_state'];
    }

    /**
     * Sets ha_previous_state
     *
     * @param string $ha_previous_state ha_previous_state
     *
     * @return $this
     */
    public function setHaPreviousState($ha_previous_state)
    {
        $allowedValues = $this->getHaPreviousStateAllowableValues();
        if (!is_null($ha_previous_state) && !in_array($ha_previous_state, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'ha_previous_state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ha_previous_state'] = $ha_previous_state;

        return $this;
    }

    /**
     * Gets ha_last_contact
     *
     * @return string
     */
    public function getHaLastContact()
    {
        return $this->container['ha_last_contact'];
    }

    /**
     * Sets ha_last_contact
     *
     * @param string $ha_last_contact ha_last_contact
     *
     * @return $this
     */
    public function setHaLastContact($ha_last_contact)
    {
        $this->container['ha_last_contact'] = $ha_last_contact;

        return $this;
    }

    /**
     * Gets modified
     *
     * @return string
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     *
     * @param string $modified modified
     *
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

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


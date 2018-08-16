<?php
/**
 * OperatorEvent
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
 * OperatorEvent Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OperatorEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'operator_event';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'event_time' => '\DateTime',
        'event' => 'string',
        'category' => 'string',
        'severity' => 'string',
        'message' => 'string',
        'detail' => 'string',
        'operator_username' => 'string',
        'network_name' => 'string',
        'gateway_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'event_time' => 'date-time',
        'event' => null,
        'category' => null,
        'severity' => null,
        'message' => null,
        'detail' => null,
        'operator_username' => null,
        'network_name' => null,
        'gateway_name' => null
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
        'event_time' => 'eventTime',
        'event' => 'event',
        'category' => 'category',
        'severity' => 'severity',
        'message' => 'message',
        'detail' => 'detail',
        'operator_username' => 'operatorUsername',
        'network_name' => 'networkName',
        'gateway_name' => 'gatewayName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'event_time' => 'setEventTime',
        'event' => 'setEvent',
        'category' => 'setCategory',
        'severity' => 'setSeverity',
        'message' => 'setMessage',
        'detail' => 'setDetail',
        'operator_username' => 'setOperatorUsername',
        'network_name' => 'setNetworkName',
        'gateway_name' => 'setGatewayName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'event_time' => 'getEventTime',
        'event' => 'getEvent',
        'category' => 'getCategory',
        'severity' => 'getSeverity',
        'message' => 'getMessage',
        'detail' => 'getDetail',
        'operator_username' => 'getOperatorUsername',
        'network_name' => 'getNetworkName',
        'gateway_name' => 'getGatewayName'
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

    const EVENT_EDGE_HEARTBEAT = 'EDGE_HEARTBEAT';
    const EVENT_GATEWAY_HEARTBEAT = 'GATEWAY_HEARTBEAT';
    const EVENT_USER_LOGIN = 'USER_LOGIN';
    const EVENT_EDGE_ACTIVATION = 'EDGE_ACTIVATION';
    const EVENT_GATEWAY_ACTIVATION = 'GATEWAY_ACTIVATION';
    const EVENT_EDGE_FLOW_STATS = 'EDGE_FLOW_STATS';
    const EVENT_EDGE_PATHLINK_STATS = 'EDGE_PATHLINK_STATS';
    const EVENT_EDGE_PROVISION = 'EDGE_PROVISION';
    const EVENT_CREATE_USER = 'CREATE_USER';
    const EVENT_CREATE_PROFILE = 'CREATE_PROFILE';
    const EVENT_SOFTWARE_UPLOAD = 'SOFTWARE_UPLOAD';
    const EVENT_OPERATOR_LOGIN = 'OPERATOR_LOGIN';
    const EVENT_CREATE_SYSTEM_PROPERTY = 'CREATE_SYSTEM_PROPERTY';
    const EVENT_UPDATE_SYSTEM_PROPERTY = 'UPDATE_SYSTEM_PROPERTY';
    const EVENT_DELETE_SYSTEM_PROPERTY = 'DELETE_SYSTEM_PROPERTY';
    const EVENT_CREATE_ENTERPRISE = 'CREATE_ENTERPRISE';
    const EVENT_DELETE_ENTERPRISE = 'DELETE_ENTERPRISE';
    const EVENT_GATEWAY_PROVISION = 'GATEWAY_PROVISION';
    const EVENT_DELETE_GATEWAY = 'DELETE_GATEWAY';
    const EVENT_EDGE_NEW_DEVICE = 'EDGE_NEW_DEVICE';
    const EVENT_EDGE_NEW_USER = 'EDGE_NEW_USER';
    const EVENT_DISABLE_GATEWAY = 'DISABLE_GATEWAY';
    const EVENT_ENABLE_GATEWAY = 'ENABLE_GATEWAY';
    const EVENT_DEACTIVATE_GATEWAY = 'DEACTIVATE_GATEWAY';
    const EVENT_ACTIVATION_EMAIL = 'ACTIVATION_EMAIL';
    const EVENT_DELETE_PROFILE = 'DELETE_PROFILE';
    const EVENT_SOFTWARE_PKG_DELETE = 'SOFTWARE_PKG_DELETE';
    const EVENT_EDGE_REACTIVATION_REQ = 'EDGE_REACTIVATION_REQ';
    const EVENT_EDGE_CANCEL_REACTIVATION_REQ = 'EDGE_CANCEL_REACTIVATION_REQ';
    const EVENT_VPN_DATACENTER_STATUS = 'VPN_DATACENTER_STATUS';
    const EVENT_EDGE_RADIO_SETTINGS = 'EDGE_RADIO_SETTINGS';
    const EVENT_VPN_ENABLE = 'VPN_ENABLE';
    const EVENT_VPN_DISABLE = 'VPN_DISABLE';
    const EVENT_VPN_UPDATE = 'VPN_UPDATE';
    const EVENT_USER_LOCKOUT = 'USER_LOCKOUT';
    const EVENT_FIREWALL_ENABLE = 'FIREWALL_ENABLE';
    const EVENT_FIREWALL_DISABLE = 'FIREWALL_DISABLE';
    const EVENT_CREATE_ENTERPRISE_NETWORK_SERVICE = 'CREATE_ENTERPRISE_NETWORK_SERVICE';
    const EVENT_EDIT_ENTERPRISE_NETWORK_SERVICE = 'EDIT_ENTERPRISE_NETWORK_SERVICE';
    const EVENT_DELETE_ENTERPRISE_NETWORK_SERVICE = 'DELETE_ENTERPRISE_NETWORK_SERVICE';
    const EVENT_CREATE_ENTERPRISE_NETWORK = 'CREATE_ENTERPRISE_NETWORK';
    const EVENT_EDIT_ENTERPRISE_NETWORK = 'EDIT_ENTERPRISE_NETWORK';
    const EVENT_DELETE_ENTERPRISE_NETWORK = 'DELETE_ENTERPRISE_NETWORK';
    const EVENT_EDIT_PROFILE = 'EDIT_PROFILE';
    const EVENT_SUPPORT_EMAIL = 'SUPPORT_EMAIL';
    const EVENT_META_DATA_UPLOAD = 'META_DATA_UPLOAD';
    const EVENT_META_DATA_DELETE = 'META_DATA_DELETE';
    const EVENT_HA_STANDBY_ACTIVATED = 'HA_STANDBY_ACTIVATED';
    const EVENT_HA_READY = 'HA_READY';
    const EVENT_HA_FAILED = 'HA_FAILED';
    const EVENT_HA_GOING_ACTIVE = 'HA_GOING_ACTIVE';
    const EVENT_HA_TERMINATED = 'HA_TERMINATED';
    const EVENT_EDGE_DOWN = 'EDGE_DOWN';
    const EVENT_EDGE_UP = 'EDGE_UP';
    const EVENT_GATEWAY_DOWN = 'GATEWAY_DOWN';
    const EVENT_CREATE_ENTERPRISE_PROXY = 'CREATE_ENTERPRISE_PROXY';
    const EVENT_DELETE_ENTERPRISE_PROXY = 'DELETE_ENTERPRISE_PROXY';
    const EVENT_DIAGNOSTIC_CLEANUP = 'DIAGNOSTIC_CLEANUP';
    const EVENT_GATEWAY_ACTIVATION_FAILURE = 'GATEWAY_ACTIVATION_FAILURE';
    const EVENT_EDGE_ACTIVATION_FAILURE = 'EDGE_ACTIVATION_FAILURE';
    const EVENT_DELETE_EDGE = 'DELETE_EDGE';
    const EVENT_PASSWORD_RESET = 'PASSWORD_RESET';
    const EVENT_CRL_GENERATION = 'CRL_GENERATION';
    const EVENT_EDGE_CERTIFICATE_GENERATION = 'EDGE_CERTIFICATE_GENERATION';
    const EVENT_GATEWAY_CERTIFICATE_GENERATION = 'GATEWAY_CERTIFICATE_GENERATION';
    const EVENT_EDGE_DEACTIVATION = 'EDGE_DEACTIVATION';
    const EVENT_CLEAR_EDGE_HISTORY = 'CLEAR_EDGE_HISTORY';
    const EVENT_PATCH_APPLICATION_SUCCESS = 'PATCH_APPLICATION_SUCCESS';
    const EVENT_PATCH_APPLICATION_FAILURE = 'PATCH_APPLICATION_FAILURE';
    const EVENT_OPERATOR_LOGIN_FAILURE = 'OPERATOR_LOGIN_FAILURE';
    const EVENT_USER_LOGIN_FAILURE = 'USER_LOGIN_FAILURE';
    const EVENT_REMOTE_ACTION = 'REMOTE_ACTION';
    const EVENT_CLONE_APPLICATION_MAP = 'CLONE_APPLICATION_MAP';
    const EVENT_UPDATE_APPLICATION_MAP = 'UPDATE_APPLICATION_MAP';
    const EVENT_ROUTE_UPDATE = 'ROUTE_UPDATE';
    const EVENT_ROUTE_DELETE = 'ROUTE_DELETE';
    const EVENT_HA_ACTIVATION_FAILURE = 'HA_ACTIVATION_FAILURE';
    const EVENT_DR_CONFIGURATION_STARTED = 'DR_CONFIGURATION_STARTED';
    const EVENT_DR_CONFIGURATION_SUCCESS = 'DR_CONFIGURATION_SUCCESS';
    const EVENT_DR_CONFIGURATION_FAILURE = 'DR_CONFIGURATION_FAILURE';
    const EVENT_DR_CONFIGURATION_ABORTED = 'DR_CONFIGURATION_ABORTED';
    const EVENT_STORE_FLOW_STATS = 'STORE_FLOW_STATS';
    const EVENT_ENTERPRISE_ENABLE_OPERATOR_USER_MGMT = 'ENTERPRISE_ENABLE_OPERATOR_USER_MGMT';
    const EVENT_ENTERPRISE_DISABLE_OPERATOR_USER_MGMT = 'ENTERPRISE_DISABLE_OPERATOR_USER_MGMT';
    const EVENT_ENTERPRISE_ENABLE_OPERATOR_ACCESS = 'ENTERPRISE_ENABLE_OPERATOR_ACCESS';
    const EVENT_ENTERPRISE_DISABLE_OPERATOR_ACCESS = 'ENTERPRISE_DISABLE_OPERATOR_ACCESS';
    const EVENT_ENTERPRISE_ENABLE_PROXY_ACCESS = 'ENTERPRISE_ENABLE_PROXY_ACCESS';
    const EVENT_ENTERPRISE_DISABLE_PROXY_ACCESS = 'ENTERPRISE_DISABLE_PROXY_ACCESS';
    const EVENT_PROXY_ENABLE_OPERATOR_ACCESS = 'PROXY_ENABLE_OPERATOR_ACCESS';
    const EVENT_PROXY_DISABLE_OPERATOR_ACCESS = 'PROXY_DISABLE_OPERATOR_ACCESS';
    const EVENT_EDGE_BGP_NEIGHBOR_UP = 'EDGE_BGP_NEIGHBOR_UP';
    const EVENT_EDGE_BGP_NEIGHBOR_DOWN = 'EDGE_BGP_NEIGHBOR_DOWN';
    const EVENT_GATEWAY_BGP_NEIGHBOR_UP = 'GATEWAY_BGP_NEIGHBOR_UP';
    const EVENT_GATEWAY_BGP_NEIGHBOR_DOWN = 'GATEWAY_BGP_NEIGHBOR_DOWN';
    const EVENT_CREATE_NETWORK_SEGMENT = 'CREATE_NETWORK_SEGMENT';
    const EVENT_UPDATE_NETWORK_SEGMENT = 'UPDATE_NETWORK_SEGMENT';
    const EVENT_DELETE_NETWORK_SEGMENT = 'DELETE_NETWORK_SEGMENT';
    const EVENT_ADD_PROFILE_NETWORK_SEGMENT = 'ADD_PROFILE_NETWORK_SEGMENT';
    const EVENT_REMOVE_PROFILE_NETWORK_SEGMENT = 'REMOVE_PROFILE_NETWORK_SEGMENT';
    const EVENT_EDGE_TO_EDGE_VPN_ENABLE = 'EDGE_TO_EDGE_VPN_ENABLE';
    const EVENT_EDGE_TO_EDGE_VPN_DISABLE = 'EDGE_TO_EDGE_VPN_DISABLE';
    const EVENT_FIREWALL_LOG_ENABLE = 'FIREWALL_LOG_ENABLE';
    const EVENT_FIREWALL_LOG_DISABLE = 'FIREWALL_LOG_DISABLE';
    const EVENT_ADD_EDGE_NETWORK_SEGMENT = 'ADD_EDGE_NETWORK_SEGMENT';
    const EVENT_REMOVE_EDGE_NETWORK_SEGMENT = 'REMOVE_EDGE_NETWORK_SEGMENT';
    const EVENT_ENTERPRISE_SET_TEMPLATE_PROFILE = 'ENTERPRISE_SET_TEMPLATE_PROFILE';
    const EVENT_INVENTORY_EDGE_UNASSIGNED = 'INVENTORY_EDGE_UNASSIGNED';
    const EVENT_INVENTORY_EDGE_IN_STAGING = 'INVENTORY_EDGE_IN_STAGING';
    const EVENT_INVENTORY_EDGE_STATE_CHANGE = 'INVENTORY_EDGE_STATE_CHANGE';
    const EVENT_DELETE_USER = 'DELETE_USER';
    const EVENT_CREATE_OPERATOR_USER = 'CREATE_OPERATOR_USER';
    const EVENT_DELETE_OPERATOR_USER = 'DELETE_OPERATOR_USER';
    const EVENT_EDGE_UPDATE_ATTRIBUTES = 'EDGE_UPDATE_ATTRIBUTES';
    const CATEGORY_SYSTEM = 'SYSTEM';
    const CATEGORY_NETWORK = 'NETWORK';
    const CATEGORY_APPLICATION = 'APPLICATION';
    const CATEGORY_USER = 'USER';
    const CATEGORY_SECURITY = 'SECURITY';
    const CATEGORY_EDGE = 'EDGE';
    const CATEGORY_GATEWAY = 'GATEWAY';
    const CATEGORY_CONFIGURATION = 'CONFIGURATION';
    const CATEGORY_ENTERPRISE = 'ENTERPRISE';
    const SEVERITY_EMERGENCY = 'EMERGENCY';
    const SEVERITY_ALERT = 'ALERT';
    const SEVERITY_CRITICAL = 'CRITICAL';
    const SEVERITY_ERROR = 'ERROR';
    const SEVERITY_WARNING = 'WARNING';
    const SEVERITY_NOTICE = 'NOTICE';
    const SEVERITY_INFO = 'INFO';
    const SEVERITY_DEBUG = 'DEBUG';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventAllowableValues()
    {
        return [
            self::EVENT_EDGE_HEARTBEAT,
            self::EVENT_GATEWAY_HEARTBEAT,
            self::EVENT_USER_LOGIN,
            self::EVENT_EDGE_ACTIVATION,
            self::EVENT_GATEWAY_ACTIVATION,
            self::EVENT_EDGE_FLOW_STATS,
            self::EVENT_EDGE_PATHLINK_STATS,
            self::EVENT_EDGE_PROVISION,
            self::EVENT_CREATE_USER,
            self::EVENT_CREATE_PROFILE,
            self::EVENT_SOFTWARE_UPLOAD,
            self::EVENT_OPERATOR_LOGIN,
            self::EVENT_CREATE_SYSTEM_PROPERTY,
            self::EVENT_UPDATE_SYSTEM_PROPERTY,
            self::EVENT_DELETE_SYSTEM_PROPERTY,
            self::EVENT_CREATE_ENTERPRISE,
            self::EVENT_DELETE_ENTERPRISE,
            self::EVENT_GATEWAY_PROVISION,
            self::EVENT_DELETE_GATEWAY,
            self::EVENT_EDGE_NEW_DEVICE,
            self::EVENT_EDGE_NEW_USER,
            self::EVENT_DISABLE_GATEWAY,
            self::EVENT_ENABLE_GATEWAY,
            self::EVENT_DEACTIVATE_GATEWAY,
            self::EVENT_ACTIVATION_EMAIL,
            self::EVENT_DELETE_PROFILE,
            self::EVENT_SOFTWARE_PKG_DELETE,
            self::EVENT_EDGE_REACTIVATION_REQ,
            self::EVENT_EDGE_CANCEL_REACTIVATION_REQ,
            self::EVENT_VPN_DATACENTER_STATUS,
            self::EVENT_EDGE_RADIO_SETTINGS,
            self::EVENT_VPN_ENABLE,
            self::EVENT_VPN_DISABLE,
            self::EVENT_VPN_UPDATE,
            self::EVENT_USER_LOCKOUT,
            self::EVENT_FIREWALL_ENABLE,
            self::EVENT_FIREWALL_DISABLE,
            self::EVENT_CREATE_ENTERPRISE_NETWORK_SERVICE,
            self::EVENT_EDIT_ENTERPRISE_NETWORK_SERVICE,
            self::EVENT_DELETE_ENTERPRISE_NETWORK_SERVICE,
            self::EVENT_CREATE_ENTERPRISE_NETWORK,
            self::EVENT_EDIT_ENTERPRISE_NETWORK,
            self::EVENT_DELETE_ENTERPRISE_NETWORK,
            self::EVENT_EDIT_PROFILE,
            self::EVENT_SUPPORT_EMAIL,
            self::EVENT_META_DATA_UPLOAD,
            self::EVENT_META_DATA_DELETE,
            self::EVENT_HA_STANDBY_ACTIVATED,
            self::EVENT_HA_READY,
            self::EVENT_HA_FAILED,
            self::EVENT_HA_GOING_ACTIVE,
            self::EVENT_HA_TERMINATED,
            self::EVENT_EDGE_DOWN,
            self::EVENT_EDGE_UP,
            self::EVENT_GATEWAY_DOWN,
            self::EVENT_CREATE_ENTERPRISE_PROXY,
            self::EVENT_DELETE_ENTERPRISE_PROXY,
            self::EVENT_DIAGNOSTIC_CLEANUP,
            self::EVENT_GATEWAY_ACTIVATION_FAILURE,
            self::EVENT_EDGE_ACTIVATION_FAILURE,
            self::EVENT_DELETE_EDGE,
            self::EVENT_PASSWORD_RESET,
            self::EVENT_CRL_GENERATION,
            self::EVENT_EDGE_CERTIFICATE_GENERATION,
            self::EVENT_GATEWAY_CERTIFICATE_GENERATION,
            self::EVENT_EDGE_DEACTIVATION,
            self::EVENT_CLEAR_EDGE_HISTORY,
            self::EVENT_PATCH_APPLICATION_SUCCESS,
            self::EVENT_PATCH_APPLICATION_FAILURE,
            self::EVENT_OPERATOR_LOGIN_FAILURE,
            self::EVENT_USER_LOGIN_FAILURE,
            self::EVENT_REMOTE_ACTION,
            self::EVENT_CLONE_APPLICATION_MAP,
            self::EVENT_UPDATE_APPLICATION_MAP,
            self::EVENT_ROUTE_UPDATE,
            self::EVENT_ROUTE_DELETE,
            self::EVENT_HA_ACTIVATION_FAILURE,
            self::EVENT_DR_CONFIGURATION_STARTED,
            self::EVENT_DR_CONFIGURATION_SUCCESS,
            self::EVENT_DR_CONFIGURATION_FAILURE,
            self::EVENT_DR_CONFIGURATION_ABORTED,
            self::EVENT_STORE_FLOW_STATS,
            self::EVENT_ENTERPRISE_ENABLE_OPERATOR_USER_MGMT,
            self::EVENT_ENTERPRISE_DISABLE_OPERATOR_USER_MGMT,
            self::EVENT_ENTERPRISE_ENABLE_OPERATOR_ACCESS,
            self::EVENT_ENTERPRISE_DISABLE_OPERATOR_ACCESS,
            self::EVENT_ENTERPRISE_ENABLE_PROXY_ACCESS,
            self::EVENT_ENTERPRISE_DISABLE_PROXY_ACCESS,
            self::EVENT_PROXY_ENABLE_OPERATOR_ACCESS,
            self::EVENT_PROXY_DISABLE_OPERATOR_ACCESS,
            self::EVENT_EDGE_BGP_NEIGHBOR_UP,
            self::EVENT_EDGE_BGP_NEIGHBOR_DOWN,
            self::EVENT_GATEWAY_BGP_NEIGHBOR_UP,
            self::EVENT_GATEWAY_BGP_NEIGHBOR_DOWN,
            self::EVENT_CREATE_NETWORK_SEGMENT,
            self::EVENT_UPDATE_NETWORK_SEGMENT,
            self::EVENT_DELETE_NETWORK_SEGMENT,
            self::EVENT_ADD_PROFILE_NETWORK_SEGMENT,
            self::EVENT_REMOVE_PROFILE_NETWORK_SEGMENT,
            self::EVENT_EDGE_TO_EDGE_VPN_ENABLE,
            self::EVENT_EDGE_TO_EDGE_VPN_DISABLE,
            self::EVENT_FIREWALL_LOG_ENABLE,
            self::EVENT_FIREWALL_LOG_DISABLE,
            self::EVENT_ADD_EDGE_NETWORK_SEGMENT,
            self::EVENT_REMOVE_EDGE_NETWORK_SEGMENT,
            self::EVENT_ENTERPRISE_SET_TEMPLATE_PROFILE,
            self::EVENT_INVENTORY_EDGE_UNASSIGNED,
            self::EVENT_INVENTORY_EDGE_IN_STAGING,
            self::EVENT_INVENTORY_EDGE_STATE_CHANGE,
            self::EVENT_DELETE_USER,
            self::EVENT_CREATE_OPERATOR_USER,
            self::EVENT_DELETE_OPERATOR_USER,
            self::EVENT_EDGE_UPDATE_ATTRIBUTES,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_SYSTEM,
            self::CATEGORY_NETWORK,
            self::CATEGORY_APPLICATION,
            self::CATEGORY_USER,
            self::CATEGORY_SECURITY,
            self::CATEGORY_EDGE,
            self::CATEGORY_GATEWAY,
            self::CATEGORY_CONFIGURATION,
            self::CATEGORY_ENTERPRISE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSeverityAllowableValues()
    {
        return [
            self::SEVERITY_EMERGENCY,
            self::SEVERITY_ALERT,
            self::SEVERITY_CRITICAL,
            self::SEVERITY_ERROR,
            self::SEVERITY_WARNING,
            self::SEVERITY_NOTICE,
            self::SEVERITY_INFO,
            self::SEVERITY_DEBUG,
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
        $this->container['event_time'] = isset($data['event_time']) ? $data['event_time'] : null;
        $this->container['event'] = isset($data['event']) ? $data['event'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['operator_username'] = isset($data['operator_username']) ? $data['operator_username'] : null;
        $this->container['network_name'] = isset($data['network_name']) ? $data['network_name'] : null;
        $this->container['gateway_name'] = isset($data['gateway_name']) ? $data['gateway_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getEventAllowableValues();
        if (!in_array($this->container['event'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'event', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCategoryAllowableValues();
        if (!in_array($this->container['category'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSeverityAllowableValues();
        if (!in_array($this->container['severity'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'severity', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['detail'] === null) {
            $invalidProperties[] = "'detail' can't be null";
        }
        if ($this->container['operator_username'] === null) {
            $invalidProperties[] = "'operator_username' can't be null";
        }
        if ($this->container['network_name'] === null) {
            $invalidProperties[] = "'network_name' can't be null";
        }
        if ($this->container['gateway_name'] === null) {
            $invalidProperties[] = "'gateway_name' can't be null";
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

        $allowedValues = $this->getEventAllowableValues();
        if (!in_array($this->container['event'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getCategoryAllowableValues();
        if (!in_array($this->container['category'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getSeverityAllowableValues();
        if (!in_array($this->container['severity'], $allowedValues)) {
            return false;
        }
        if ($this->container['detail'] === null) {
            return false;
        }
        if ($this->container['operator_username'] === null) {
            return false;
        }
        if ($this->container['network_name'] === null) {
            return false;
        }
        if ($this->container['gateway_name'] === null) {
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
     * Gets event_time
     *
     * @return \DateTime
     */
    public function getEventTime()
    {
        return $this->container['event_time'];
    }

    /**
     * Sets event_time
     *
     * @param \DateTime $event_time event_time
     *
     * @return $this
     */
    public function setEventTime($event_time)
    {
        $this->container['event_time'] = $event_time;

        return $this;
    }

    /**
     * Gets event
     *
     * @return string
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     *
     * @param string $event event
     *
     * @return $this
     */
    public function setEvent($event)
    {
        $allowedValues = $this->getEventAllowableValues();
        if (!is_null($event) && !in_array($event, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'event', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['event'] = $event;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $allowedValues = $this->getCategoryAllowableValues();
        if (!is_null($category) && !in_array($category, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'category', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets severity
     *
     * @return string
     */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
     * Sets severity
     *
     * @param string $severity severity
     *
     * @return $this
     */
    public function setSeverity($severity)
    {
        $allowedValues = $this->getSeverityAllowableValues();
        if (!is_null($severity) && !in_array($severity, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'severity', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['severity'] = $severity;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets detail
     *
     * @return string
     */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
     * Sets detail
     *
     * @param string $detail detail
     *
     * @return $this
     */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;

        return $this;
    }

    /**
     * Gets operator_username
     *
     * @return string
     */
    public function getOperatorUsername()
    {
        return $this->container['operator_username'];
    }

    /**
     * Sets operator_username
     *
     * @param string $operator_username operator_username
     *
     * @return $this
     */
    public function setOperatorUsername($operator_username)
    {
        $this->container['operator_username'] = $operator_username;

        return $this;
    }

    /**
     * Gets network_name
     *
     * @return string
     */
    public function getNetworkName()
    {
        return $this->container['network_name'];
    }

    /**
     * Sets network_name
     *
     * @param string $network_name network_name
     *
     * @return $this
     */
    public function setNetworkName($network_name)
    {
        $this->container['network_name'] = $network_name;

        return $this;
    }

    /**
     * Gets gateway_name
     *
     * @return string
     */
    public function getGatewayName()
    {
        return $this->container['gateway_name'];
    }

    /**
     * Sets gateway_name
     *
     * @param string $gateway_name gateway_name
     *
     * @return $this
     */
    public function setGatewayName($gateway_name)
    {
        $this->container['gateway_name'] = $gateway_name;

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



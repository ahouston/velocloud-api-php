<?php
/**
 * EnterpriseSetEnterpriseAllAlertRecipients
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
 * EnterpriseSetEnterpriseAllAlertRecipients Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnterpriseSetEnterpriseAllAlertRecipients implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'enterprise_set_enterprise_all_alert_recipients';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enterprise_id' => 'int',
        'enterprise_users' => '\Swagger\Client\Model\EnterprisesetEnterpriseAllAlertsRecipientsEnterpriseUsers[]',
        'sms_enabled' => 'bool',
        'sms_list' => 'object[][]',
        'email_enabled' => 'bool',
        'email_list' => 'string[]',
        'mobile_enabled' => 'bool',
        'mobile_list' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enterprise_id' => null,
        'enterprise_users' => null,
        'sms_enabled' => null,
        'sms_list' => null,
        'email_enabled' => null,
        'email_list' => null,
        'mobile_enabled' => null,
        'mobile_list' => null
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
        'enterprise_id' => 'enterpriseId',
        'enterprise_users' => 'enterpriseUsers',
        'sms_enabled' => 'smsEnabled',
        'sms_list' => 'smsList',
        'email_enabled' => 'emailEnabled',
        'email_list' => 'emailList',
        'mobile_enabled' => 'mobileEnabled',
        'mobile_list' => 'mobileList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enterprise_id' => 'setEnterpriseId',
        'enterprise_users' => 'setEnterpriseUsers',
        'sms_enabled' => 'setSmsEnabled',
        'sms_list' => 'setSmsList',
        'email_enabled' => 'setEmailEnabled',
        'email_list' => 'setEmailList',
        'mobile_enabled' => 'setMobileEnabled',
        'mobile_list' => 'setMobileList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enterprise_id' => 'getEnterpriseId',
        'enterprise_users' => 'getEnterpriseUsers',
        'sms_enabled' => 'getSmsEnabled',
        'sms_list' => 'getSmsList',
        'email_enabled' => 'getEmailEnabled',
        'email_list' => 'getEmailList',
        'mobile_enabled' => 'getMobileEnabled',
        'mobile_list' => 'getMobileList'
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
        $this->container['enterprise_id'] = isset($data['enterprise_id']) ? $data['enterprise_id'] : null;
        $this->container['enterprise_users'] = isset($data['enterprise_users']) ? $data['enterprise_users'] : null;
        $this->container['sms_enabled'] = isset($data['sms_enabled']) ? $data['sms_enabled'] : null;
        $this->container['sms_list'] = isset($data['sms_list']) ? $data['sms_list'] : null;
        $this->container['email_enabled'] = isset($data['email_enabled']) ? $data['email_enabled'] : null;
        $this->container['email_list'] = isset($data['email_list']) ? $data['email_list'] : null;
        $this->container['mobile_enabled'] = isset($data['mobile_enabled']) ? $data['mobile_enabled'] : null;
        $this->container['mobile_list'] = isset($data['mobile_list']) ? $data['mobile_list'] : null;
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
     * Gets enterprise_users
     *
     * @return \Swagger\Client\Model\EnterprisesetEnterpriseAllAlertsRecipientsEnterpriseUsers[]
     */
    public function getEnterpriseUsers()
    {
        return $this->container['enterprise_users'];
    }

    /**
     * Sets enterprise_users
     *
     * @param \Swagger\Client\Model\EnterprisesetEnterpriseAllAlertsRecipientsEnterpriseUsers[] $enterprise_users enterprise_users
     *
     * @return $this
     */
    public function setEnterpriseUsers($enterprise_users)
    {
        $this->container['enterprise_users'] = $enterprise_users;

        return $this;
    }

    /**
     * Gets sms_enabled
     *
     * @return bool
     */
    public function getSmsEnabled()
    {
        return $this->container['sms_enabled'];
    }

    /**
     * Sets sms_enabled
     *
     * @param bool $sms_enabled sms_enabled
     *
     * @return $this
     */
    public function setSmsEnabled($sms_enabled)
    {
        $this->container['sms_enabled'] = $sms_enabled;

        return $this;
    }

    /**
     * Gets sms_list
     *
     * @return object[][]
     */
    public function getSmsList()
    {
        return $this->container['sms_list'];
    }

    /**
     * Sets sms_list
     *
     * @param object[][] $sms_list sms_list
     *
     * @return $this
     */
    public function setSmsList($sms_list)
    {
        $this->container['sms_list'] = $sms_list;

        return $this;
    }

    /**
     * Gets email_enabled
     *
     * @return bool
     */
    public function getEmailEnabled()
    {
        return $this->container['email_enabled'];
    }

    /**
     * Sets email_enabled
     *
     * @param bool $email_enabled email_enabled
     *
     * @return $this
     */
    public function setEmailEnabled($email_enabled)
    {
        $this->container['email_enabled'] = $email_enabled;

        return $this;
    }

    /**
     * Gets email_list
     *
     * @return string[]
     */
    public function getEmailList()
    {
        return $this->container['email_list'];
    }

    /**
     * Sets email_list
     *
     * @param string[] $email_list email_list
     *
     * @return $this
     */
    public function setEmailList($email_list)
    {
        $this->container['email_list'] = $email_list;

        return $this;
    }

    /**
     * Gets mobile_enabled
     *
     * @return bool
     */
    public function getMobileEnabled()
    {
        return $this->container['mobile_enabled'];
    }

    /**
     * Sets mobile_enabled
     *
     * @param bool $mobile_enabled mobile_enabled
     *
     * @return $this
     */
    public function setMobileEnabled($mobile_enabled)
    {
        $this->container['mobile_enabled'] = $mobile_enabled;

        return $this;
    }

    /**
     * Gets mobile_list
     *
     * @return string[]
     */
    public function getMobileList()
    {
        return $this->container['mobile_list'];
    }

    /**
     * Sets mobile_list
     *
     * @param string[] $mobile_list mobile_list
     *
     * @return $this
     */
    public function setMobileList($mobile_list)
    {
        $this->container['mobile_list'] = $mobile_list;

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



<?php
/**
 * RoleCreateRoleCustomization
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
 * RoleCreateRoleCustomization Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RoleCreateRoleCustomization implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'role_create_role_customization';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'for_role_id' => 'int',
        'name' => 'string',
        'description' => 'string',
        'user_id' => 'int',
        'enterprise_id' => 'int',
        'operator_id' => 'int',
        'network_id' => 'int',
        'privilege_ids' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'for_role_id' => null,
        'name' => null,
        'description' => null,
        'user_id' => null,
        'enterprise_id' => null,
        'operator_id' => null,
        'network_id' => null,
        'privilege_ids' => null
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
        'for_role_id' => 'forRoleId',
        'name' => 'name',
        'description' => 'description',
        'user_id' => 'userId',
        'enterprise_id' => 'enterpriseId',
        'operator_id' => 'operatorId',
        'network_id' => 'networkId',
        'privilege_ids' => 'privilegeIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'for_role_id' => 'setForRoleId',
        'name' => 'setName',
        'description' => 'setDescription',
        'user_id' => 'setUserId',
        'enterprise_id' => 'setEnterpriseId',
        'operator_id' => 'setOperatorId',
        'network_id' => 'setNetworkId',
        'privilege_ids' => 'setPrivilegeIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'for_role_id' => 'getForRoleId',
        'name' => 'getName',
        'description' => 'getDescription',
        'user_id' => 'getUserId',
        'enterprise_id' => 'getEnterpriseId',
        'operator_id' => 'getOperatorId',
        'network_id' => 'getNetworkId',
        'privilege_ids' => 'getPrivilegeIds'
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
        $this->container['for_role_id'] = isset($data['for_role_id']) ? $data['for_role_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['enterprise_id'] = isset($data['enterprise_id']) ? $data['enterprise_id'] : null;
        $this->container['operator_id'] = isset($data['operator_id']) ? $data['operator_id'] : null;
        $this->container['network_id'] = isset($data['network_id']) ? $data['network_id'] : null;
        $this->container['privilege_ids'] = isset($data['privilege_ids']) ? $data['privilege_ids'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['for_role_id'] === null) {
            $invalidProperties[] = "'for_role_id' can't be null";
        }
        if ($this->container['privilege_ids'] === null) {
            $invalidProperties[] = "'privilege_ids' can't be null";
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

        if ($this->container['for_role_id'] === null) {
            return false;
        }
        if ($this->container['privilege_ids'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets for_role_id
     *
     * @return int
     */
    public function getForRoleId()
    {
        return $this->container['for_role_id'];
    }

    /**
     * Sets for_role_id
     *
     * @param int $for_role_id for_role_id
     *
     * @return $this
     */
    public function setForRoleId($for_role_id)
    {
        $this->container['for_role_id'] = $for_role_id;

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
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

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
     * Gets operator_id
     *
     * @return int
     */
    public function getOperatorId()
    {
        return $this->container['operator_id'];
    }

    /**
     * Sets operator_id
     *
     * @param int $operator_id operator_id
     *
     * @return $this
     */
    public function setOperatorId($operator_id)
    {
        $this->container['operator_id'] = $operator_id;

        return $this;
    }

    /**
     * Gets network_id
     *
     * @return int
     */
    public function getNetworkId()
    {
        return $this->container['network_id'];
    }

    /**
     * Sets network_id
     *
     * @param int $network_id network_id
     *
     * @return $this
     */
    public function setNetworkId($network_id)
    {
        $this->container['network_id'] = $network_id;

        return $this;
    }

    /**
     * Gets privilege_ids
     *
     * @return int[]
     */
    public function getPrivilegeIds()
    {
        return $this->container['privilege_ids'];
    }

    /**
     * Sets privilege_ids
     *
     * @param int[] $privilege_ids privilege_ids
     *
     * @return $this
     */
    public function setPrivilegeIds($privilege_ids)
    {
        $this->container['privilege_ids'] = $privilege_ids;

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


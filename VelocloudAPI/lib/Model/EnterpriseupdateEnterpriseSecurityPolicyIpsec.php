<?php
/**
 * EnterpriseupdateEnterpriseSecurityPolicyIpsec
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
 * EnterpriseupdateEnterpriseSecurityPolicyIpsec Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnterpriseupdateEnterpriseSecurityPolicyIpsec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'enterpriseupdateEnterpriseSecurityPolicy_ipsec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'hash' => 'string',
        'encryption' => 'string',
        'diffie_hellman_group' => 'string',
        'perfect_forward_secrecy' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'hash' => null,
        'encryption' => null,
        'diffie_hellman_group' => null,
        'perfect_forward_secrecy' => null
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
        'hash' => 'hash',
        'encryption' => 'encryption',
        'diffie_hellman_group' => 'diffieHellmanGroup',
        'perfect_forward_secrecy' => 'perfectForwardSecrecy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hash' => 'setHash',
        'encryption' => 'setEncryption',
        'diffie_hellman_group' => 'setDiffieHellmanGroup',
        'perfect_forward_secrecy' => 'setPerfectForwardSecrecy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hash' => 'getHash',
        'encryption' => 'getEncryption',
        'diffie_hellman_group' => 'getDiffieHellmanGroup',
        'perfect_forward_secrecy' => 'getPerfectForwardSecrecy'
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

    const HASH__1 = 'SHA_1';
    const HASH__256 = 'SHA_256';
    const ENCRYPTION__128_CBC = 'AES_128_CBC';
    const ENCRYPTION__256_CBC = 'AES_256_CBC';
    const DIFFIE_HELLMAN_GROUP__2 = 'GROUP_2';
    const DIFFIE_HELLMAN_GROUP__5 = 'GROUP_5';
    const DIFFIE_HELLMAN_GROUP__14 = 'GROUP_14';
    const PERFECT_FORWARD_SECRECY_DISABLED = 'DISABLED';
    const PERFECT_FORWARD_SECRECY_GROUP_2 = 'GROUP_2';
    const PERFECT_FORWARD_SECRECY_GROUP_5 = 'GROUP_5';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHashAllowableValues()
    {
        return [
            self::HASH__1,
            self::HASH__256,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEncryptionAllowableValues()
    {
        return [
            self::ENCRYPTION__128_CBC,
            self::ENCRYPTION__256_CBC,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDiffieHellmanGroupAllowableValues()
    {
        return [
            self::DIFFIE_HELLMAN_GROUP__2,
            self::DIFFIE_HELLMAN_GROUP__5,
            self::DIFFIE_HELLMAN_GROUP__14,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPerfectForwardSecrecyAllowableValues()
    {
        return [
            self::PERFECT_FORWARD_SECRECY_DISABLED,
            self::PERFECT_FORWARD_SECRECY_GROUP_2,
            self::PERFECT_FORWARD_SECRECY_GROUP_5,
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
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['encryption'] = isset($data['encryption']) ? $data['encryption'] : null;
        $this->container['diffie_hellman_group'] = isset($data['diffie_hellman_group']) ? $data['diffie_hellman_group'] : null;
        $this->container['perfect_forward_secrecy'] = isset($data['perfect_forward_secrecy']) ? $data['perfect_forward_secrecy'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getHashAllowableValues();
        if (!in_array($this->container['hash'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'hash', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getEncryptionAllowableValues();
        if (!in_array($this->container['encryption'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'encryption', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDiffieHellmanGroupAllowableValues();
        if (!in_array($this->container['diffie_hellman_group'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'diffie_hellman_group', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPerfectForwardSecrecyAllowableValues();
        if (!in_array($this->container['perfect_forward_secrecy'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'perfect_forward_secrecy', must be one of '%s'",
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

        $allowedValues = $this->getHashAllowableValues();
        if (!in_array($this->container['hash'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getEncryptionAllowableValues();
        if (!in_array($this->container['encryption'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getDiffieHellmanGroupAllowableValues();
        if (!in_array($this->container['diffie_hellman_group'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getPerfectForwardSecrecyAllowableValues();
        if (!in_array($this->container['perfect_forward_secrecy'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets hash
     *
     * @return string
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     *
     * @param string $hash hash
     *
     * @return $this
     */
    public function setHash($hash)
    {
        $allowedValues = $this->getHashAllowableValues();
        if (!is_null($hash) && !in_array($hash, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'hash', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets encryption
     *
     * @return string
     */
    public function getEncryption()
    {
        return $this->container['encryption'];
    }

    /**
     * Sets encryption
     *
     * @param string $encryption encryption
     *
     * @return $this
     */
    public function setEncryption($encryption)
    {
        $allowedValues = $this->getEncryptionAllowableValues();
        if (!is_null($encryption) && !in_array($encryption, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'encryption', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['encryption'] = $encryption;

        return $this;
    }

    /**
     * Gets diffie_hellman_group
     *
     * @return string
     */
    public function getDiffieHellmanGroup()
    {
        return $this->container['diffie_hellman_group'];
    }

    /**
     * Sets diffie_hellman_group
     *
     * @param string $diffie_hellman_group diffie_hellman_group
     *
     * @return $this
     */
    public function setDiffieHellmanGroup($diffie_hellman_group)
    {
        $allowedValues = $this->getDiffieHellmanGroupAllowableValues();
        if (!is_null($diffie_hellman_group) && !in_array($diffie_hellman_group, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'diffie_hellman_group', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['diffie_hellman_group'] = $diffie_hellman_group;

        return $this;
    }

    /**
     * Gets perfect_forward_secrecy
     *
     * @return string
     */
    public function getPerfectForwardSecrecy()
    {
        return $this->container['perfect_forward_secrecy'];
    }

    /**
     * Sets perfect_forward_secrecy
     *
     * @param string $perfect_forward_secrecy perfect_forward_secrecy
     *
     * @return $this
     */
    public function setPerfectForwardSecrecy($perfect_forward_secrecy)
    {
        $allowedValues = $this->getPerfectForwardSecrecyAllowableValues();
        if (!is_null($perfect_forward_secrecy) && !in_array($perfect_forward_secrecy, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'perfect_forward_secrecy', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['perfect_forward_secrecy'] = $perfect_forward_secrecy;

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



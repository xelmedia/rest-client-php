<?php
/**
 * CsrDecodeCsrResponseData
 *
 * PHP version 5
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Ssl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SSL
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0-beta
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Openprovider\Api\Rest\Client\Ssl\Model;

use \ArrayAccess;
use Openprovider\Api\Rest\Client\Base\ObjectSerializer;
use Openprovider\Api\Rest\Client\Base\ModelInterface;

/**
 * CsrDecodeCsrResponseData Class Doc Comment
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Ssl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CsrDecodeCsrResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'csrDecodeCsrResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'domain_names_count' => 'int',
        'public_key' => '\Openprovider\Api\Rest\Client\Ssl\Model\CsrCsrPublicKey',
        'signature_hash_algorithm' => 'string',
        'subject' => '\Openprovider\Api\Rest\Client\Ssl\Model\CsrCsrSubject',
        'subject_alternative_name' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'domain_names_count' => 'int32',
        'public_key' => null,
        'signature_hash_algorithm' => null,
        'subject' => null,
        'subject_alternative_name' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'domain_names_count' => 'domain_names_count',
        'public_key' => 'public_key',
        'signature_hash_algorithm' => 'signature_hash_algorithm',
        'subject' => 'subject',
        'subject_alternative_name' => 'subject_alternative_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'domain_names_count' => 'setDomainNamesCount',
        'public_key' => 'setPublicKey',
        'signature_hash_algorithm' => 'setSignatureHashAlgorithm',
        'subject' => 'setSubject',
        'subject_alternative_name' => 'setSubjectAlternativeName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'domain_names_count' => 'getDomainNamesCount',
        'public_key' => 'getPublicKey',
        'signature_hash_algorithm' => 'getSignatureHashAlgorithm',
        'subject' => 'getSubject',
        'subject_alternative_name' => 'getSubjectAlternativeName'
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
        return self::$openAPIModelName;
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
        $this->container['domain_names_count'] = isset($data['domain_names_count']) ? $data['domain_names_count'] : null;
        $this->container['public_key'] = isset($data['public_key']) ? $data['public_key'] : null;
        $this->container['signature_hash_algorithm'] = isset($data['signature_hash_algorithm']) ? $data['signature_hash_algorithm'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['subject_alternative_name'] = isset($data['subject_alternative_name']) ? $data['subject_alternative_name'] : null;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets domain_names_count
     *
     * @return int|null
     */
    public function getDomainNamesCount()
    {
        return $this->container['domain_names_count'];
    }

    /**
     * Sets domain_names_count
     *
     * @param int|null $domain_names_count domain_names_count
     *
     * @return $this
     */
    public function setDomainNamesCount($domain_names_count)
    {
        $this->container['domain_names_count'] = $domain_names_count;

        return $this;
    }

    /**
     * Gets public_key
     *
     * @return \Openprovider\Api\Rest\Client\Ssl\Model\CsrCsrPublicKey|null
     */
    public function getPublicKey()
    {
        return $this->container['public_key'];
    }

    /**
     * Sets public_key
     *
     * @param \Openprovider\Api\Rest\Client\Ssl\Model\CsrCsrPublicKey|null $public_key public_key
     *
     * @return $this
     */
    public function setPublicKey($public_key)
    {
        $this->container['public_key'] = $public_key;

        return $this;
    }

    /**
     * Gets signature_hash_algorithm
     *
     * @return string|null
     */
    public function getSignatureHashAlgorithm()
    {
        return $this->container['signature_hash_algorithm'];
    }

    /**
     * Sets signature_hash_algorithm
     *
     * @param string|null $signature_hash_algorithm signature_hash_algorithm
     *
     * @return $this
     */
    public function setSignatureHashAlgorithm($signature_hash_algorithm)
    {
        $this->container['signature_hash_algorithm'] = $signature_hash_algorithm;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return \Openprovider\Api\Rest\Client\Ssl\Model\CsrCsrSubject|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param \Openprovider\Api\Rest\Client\Ssl\Model\CsrCsrSubject|null $subject subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets subject_alternative_name
     *
     * @return string[]|null
     */
    public function getSubjectAlternativeName()
    {
        return $this->container['subject_alternative_name'];
    }

    /**
     * Sets subject_alternative_name
     *
     * @param string[]|null $subject_alternative_name subject_alternative_name
     *
     * @return $this
     */
    public function setSubjectAlternativeName($subject_alternative_name)
    {
        $this->container['subject_alternative_name'] = $subject_alternative_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
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
    public function offsetGet(mixed $offset): mixed
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
    public function offsetSet(mixed $offset, mixed $value): void
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
    public function offsetUnset(mixed $offset): void
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}



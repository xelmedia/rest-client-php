<?php
/**
 * DomainListDomainsRequestOrderBy
 *
 * PHP version 5
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Domain
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Domain
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

namespace Openprovider\Api\Rest\Client\Domain\Model;

use \ArrayAccess;
use Openprovider\Api\Rest\Client\Base\ObjectSerializer;
use Openprovider\Api\Rest\Client\Base\ModelInterface;

/**
 * DomainListDomainsRequestOrderBy Class Doc Comment
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Domain
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DomainListDomainsRequestOrderBy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'domainListDomainsRequestOrderBy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'active_date' => 'string',
        'domain_extension' => 'string',
        'domain_name' => 'string',
        'expiration_date' => 'string',
        'id' => 'string',
        'order_date' => 'string',
        'renewal_date' => 'string',
        'status' => 'string',
        'transfer_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'active_date' => null,
        'domain_extension' => null,
        'domain_name' => null,
        'expiration_date' => null,
        'id' => null,
        'order_date' => null,
        'renewal_date' => null,
        'status' => null,
        'transfer_date' => null
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
        'active_date' => 'active_date',
        'domain_extension' => 'domain_extension',
        'domain_name' => 'domain_name',
        'expiration_date' => 'expiration_date',
        'id' => 'id',
        'order_date' => 'order_date',
        'renewal_date' => 'renewal_date',
        'status' => 'status',
        'transfer_date' => 'transfer_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active_date' => 'setActiveDate',
        'domain_extension' => 'setDomainExtension',
        'domain_name' => 'setDomainName',
        'expiration_date' => 'setExpirationDate',
        'id' => 'setId',
        'order_date' => 'setOrderDate',
        'renewal_date' => 'setRenewalDate',
        'status' => 'setStatus',
        'transfer_date' => 'setTransferDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active_date' => 'getActiveDate',
        'domain_extension' => 'getDomainExtension',
        'domain_name' => 'getDomainName',
        'expiration_date' => 'getExpirationDate',
        'id' => 'getId',
        'order_date' => 'getOrderDate',
        'renewal_date' => 'getRenewalDate',
        'status' => 'getStatus',
        'transfer_date' => 'getTransferDate'
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
        $this->container['active_date'] = isset($data['active_date']) ? $data['active_date'] : null;
        $this->container['domain_extension'] = isset($data['domain_extension']) ? $data['domain_extension'] : null;
        $this->container['domain_name'] = isset($data['domain_name']) ? $data['domain_name'] : null;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['order_date'] = isset($data['order_date']) ? $data['order_date'] : null;
        $this->container['renewal_date'] = isset($data['renewal_date']) ? $data['renewal_date'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['transfer_date'] = isset($data['transfer_date']) ? $data['transfer_date'] : null;
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
     * Gets active_date
     *
     * @return string|null
     */
    public function getActiveDate()
    {
        return $this->container['active_date'];
    }

    /**
     * Sets active_date
     *
     * @param string|null $active_date active_date
     *
     * @return $this
     */
    public function setActiveDate($active_date)
    {
        $this->container['active_date'] = $active_date;

        return $this;
    }

    /**
     * Gets domain_extension
     *
     * @return string|null
     */
    public function getDomainExtension()
    {
        return $this->container['domain_extension'];
    }

    /**
     * Sets domain_extension
     *
     * @param string|null $domain_extension domain_extension
     *
     * @return $this
     */
    public function setDomainExtension($domain_extension)
    {
        $this->container['domain_extension'] = $domain_extension;

        return $this;
    }

    /**
     * Gets domain_name
     *
     * @return string|null
     */
    public function getDomainName()
    {
        return $this->container['domain_name'];
    }

    /**
     * Sets domain_name
     *
     * @param string|null $domain_name domain_name
     *
     * @return $this
     */
    public function setDomainName($domain_name)
    {
        $this->container['domain_name'] = $domain_name;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param string|null $expiration_date expiration_date
     *
     * @return $this
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets order_date
     *
     * @return string|null
     */
    public function getOrderDate()
    {
        return $this->container['order_date'];
    }

    /**
     * Sets order_date
     *
     * @param string|null $order_date order_date
     *
     * @return $this
     */
    public function setOrderDate($order_date)
    {
        $this->container['order_date'] = $order_date;

        return $this;
    }

    /**
     * Gets renewal_date
     *
     * @return string|null
     */
    public function getRenewalDate()
    {
        return $this->container['renewal_date'];
    }

    /**
     * Sets renewal_date
     *
     * @param string|null $renewal_date renewal_date
     *
     * @return $this
     */
    public function setRenewalDate($renewal_date)
    {
        $this->container['renewal_date'] = $renewal_date;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets transfer_date
     *
     * @return string|null
     */
    public function getTransferDate()
    {
        return $this->container['transfer_date'];
    }

    /**
     * Sets transfer_date
     *
     * @param string|null $transfer_date transfer_date
     *
     * @return $this
     */
    public function setTransferDate($transfer_date)
    {
        $this->container['transfer_date'] = $transfer_date;

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



<?php
/**
 * OrderCreateOrderRequest
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
 * OrderCreateOrderRequest Class Doc Comment
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Ssl
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderCreateOrderRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'orderCreateOrderRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'approver_email' => 'string',
        'autorenew' => 'string',
        'csr' => 'string',
        'domain_amount' => 'int',
        'domain_validation_methods' => '\Openprovider\Api\Rest\Client\Ssl\Model\OrderSslOrderDomainValidationMethods[]',
        'enable_dns_automation' => 'bool',
        'host_names' => 'string[]',
        'organization_handle' => 'string',
        'period' => 'int',
        'product_id' => 'int',
        'signature_hash_algorithm' => 'string',
        'software_id' => 'string',
        'start_provision' => 'bool',
        'technical_handle' => 'string',
        'wildcard_domain_amount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'approver_email' => null,
        'autorenew' => null,
        'csr' => null,
        'domain_amount' => 'int32',
        'domain_validation_methods' => null,
        'enable_dns_automation' => 'boolean',
        'host_names' => null,
        'organization_handle' => null,
        'period' => 'int32',
        'product_id' => 'int32',
        'signature_hash_algorithm' => null,
        'software_id' => null,
        'start_provision' => 'boolean',
        'technical_handle' => null,
        'wildcard_domain_amount' => 'int32'
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
        'approver_email' => 'approver_email',
        'autorenew' => 'autorenew',
        'csr' => 'csr',
        'domain_amount' => 'domain_amount',
        'domain_validation_methods' => 'domain_validation_methods',
        'enable_dns_automation' => 'enable_dns_automation',
        'host_names' => 'host_names',
        'organization_handle' => 'organization_handle',
        'period' => 'period',
        'product_id' => 'product_id',
        'signature_hash_algorithm' => 'signature_hash_algorithm',
        'software_id' => 'software_id',
        'start_provision' => 'start_provision',
        'technical_handle' => 'technical_handle',
        'wildcard_domain_amount' => 'wildcard_domain_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'approver_email' => 'setApproverEmail',
        'autorenew' => 'setAutorenew',
        'csr' => 'setCsr',
        'domain_amount' => 'setDomainAmount',
        'domain_validation_methods' => 'setDomainValidationMethods',
        'enable_dns_automation' => 'setEnableDnsAutomation',
        'host_names' => 'setHostNames',
        'organization_handle' => 'setOrganizationHandle',
        'period' => 'setPeriod',
        'product_id' => 'setProductId',
        'signature_hash_algorithm' => 'setSignatureHashAlgorithm',
        'software_id' => 'setSoftwareId',
        'start_provision' => 'setStartProvision',
        'technical_handle' => 'setTechnicalHandle',
        'wildcard_domain_amount' => 'setWildcardDomainAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'approver_email' => 'getApproverEmail',
        'autorenew' => 'getAutorenew',
        'csr' => 'getCsr',
        'domain_amount' => 'getDomainAmount',
        'domain_validation_methods' => 'getDomainValidationMethods',
        'enable_dns_automation' => 'getEnableDnsAutomation',
        'host_names' => 'getHostNames',
        'organization_handle' => 'getOrganizationHandle',
        'period' => 'getPeriod',
        'product_id' => 'getProductId',
        'signature_hash_algorithm' => 'getSignatureHashAlgorithm',
        'software_id' => 'getSoftwareId',
        'start_provision' => 'getStartProvision',
        'technical_handle' => 'getTechnicalHandle',
        'wildcard_domain_amount' => 'getWildcardDomainAmount'
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
        $this->container['approver_email'] = isset($data['approver_email']) ? $data['approver_email'] : null;
        $this->container['autorenew'] = isset($data['autorenew']) ? $data['autorenew'] : 'off';
        $this->container['csr'] = isset($data['csr']) ? $data['csr'] : null;
        $this->container['domain_amount'] = isset($data['domain_amount']) ? $data['domain_amount'] : null;
        $this->container['domain_validation_methods'] = isset($data['domain_validation_methods']) ? $data['domain_validation_methods'] : null;
        $this->container['enable_dns_automation'] = isset($data['enable_dns_automation']) ? $data['enable_dns_automation'] : false;
        $this->container['host_names'] = isset($data['host_names']) ? $data['host_names'] : null;
        $this->container['organization_handle'] = isset($data['organization_handle']) ? $data['organization_handle'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['signature_hash_algorithm'] = isset($data['signature_hash_algorithm']) ? $data['signature_hash_algorithm'] : null;
        $this->container['software_id'] = isset($data['software_id']) ? $data['software_id'] : null;
        $this->container['start_provision'] = isset($data['start_provision']) ? $data['start_provision'] : true;
        $this->container['technical_handle'] = isset($data['technical_handle']) ? $data['technical_handle'] : null;
        $this->container['wildcard_domain_amount'] = isset($data['wildcard_domain_amount']) ? $data['wildcard_domain_amount'] : null;
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
     * Gets approver_email
     *
     * @return string|null
     */
    public function getApproverEmail()
    {
        return $this->container['approver_email'];
    }

    /**
     * Sets approver_email
     *
     * @param string|null $approver_email Email for domain ownership verification. Should start with well-known generic name like admin@, hostmater@, administrator@, etc.
     *
     * @return $this
     */
    public function setApproverEmail($approver_email)
    {
        $this->container['approver_email'] = $approver_email;

        return $this;
    }

    /**
     * Gets autorenew
     *
     * @return string|null
     */
    public function getAutorenew()
    {
        return $this->container['autorenew'];
    }

    /**
     * Sets autorenew
     *
     * @param string|null $autorenew autorenew
     *
     * @return $this
     */
    public function setAutorenew($autorenew)
    {
        $this->container['autorenew'] = $autorenew;

        return $this;
    }

    /**
     * Gets csr
     *
     * @return string|null
     */
    public function getCsr()
    {
        return $this->container['csr'];
    }

    /**
     * Sets csr
     *
     * @param string|null $csr csr
     *
     * @return $this
     */
    public function setCsr($csr)
    {
        $this->container['csr'] = $csr;

        return $this;
    }

    /**
     * Gets domain_amount
     *
     * @return int|null
     */
    public function getDomainAmount()
    {
        return $this->container['domain_amount'];
    }

    /**
     * Sets domain_amount
     *
     * @param int|null $domain_amount domain_amount
     *
     * @return $this
     */
    public function setDomainAmount($domain_amount)
    {
        $this->container['domain_amount'] = $domain_amount;

        return $this;
    }

    /**
     * Gets domain_validation_methods
     *
     * @return \Openprovider\Api\Rest\Client\Ssl\Model\OrderSslOrderDomainValidationMethods[]|null
     */
    public function getDomainValidationMethods()
    {
        return $this->container['domain_validation_methods'];
    }

    /**
     * Sets domain_validation_methods
     *
     * @param \Openprovider\Api\Rest\Client\Ssl\Model\OrderSslOrderDomainValidationMethods[]|null $domain_validation_methods domain_validation_methods
     *
     * @return $this
     */
    public function setDomainValidationMethods($domain_validation_methods)
    {
        $this->container['domain_validation_methods'] = $domain_validation_methods;

        return $this;
    }

    /**
     * Gets enable_dns_automation
     *
     * @return bool|null
     */
    public function getEnableDnsAutomation()
    {
        return $this->container['enable_dns_automation'];
    }

    /**
     * Sets enable_dns_automation
     *
     * @param bool|null $enable_dns_automation enable_dns_automation
     *
     * @return $this
     */
    public function setEnableDnsAutomation($enable_dns_automation)
    {
        $this->container['enable_dns_automation'] = $enable_dns_automation;

        return $this;
    }

    /**
     * Gets host_names
     *
     * @return string[]|null
     */
    public function getHostNames()
    {
        return $this->container['host_names'];
    }

    /**
     * Sets host_names
     *
     * @param string[]|null $host_names host_names
     *
     * @return $this
     */
    public function setHostNames($host_names)
    {
        $this->container['host_names'] = $host_names;

        return $this;
    }

    /**
     * Gets organization_handle
     *
     * @return string|null
     */
    public function getOrganizationHandle()
    {
        return $this->container['organization_handle'];
    }

    /**
     * Sets organization_handle
     *
     * @param string|null $organization_handle organization_handle
     *
     * @return $this
     */
    public function setOrganizationHandle($organization_handle)
    {
        $this->container['organization_handle'] = $organization_handle;

        return $this;
    }

    /**
     * Gets period
     *
     * @return int|null
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param int|null $period period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return int|null
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param int|null $product_id product_id
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

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
     * Gets software_id
     *
     * @return string|null
     */
    public function getSoftwareId()
    {
        return $this->container['software_id'];
    }

    /**
     * Sets software_id
     *
     * @param string|null $software_id software_id
     *
     * @return $this
     */
    public function setSoftwareId($software_id)
    {
        $this->container['software_id'] = $software_id;

        return $this;
    }

    /**
     * Gets start_provision
     *
     * @return bool|null
     */
    public function getStartProvision()
    {
        return $this->container['start_provision'];
    }

    /**
     * Sets start_provision
     *
     * @param bool|null $start_provision start_provision
     *
     * @return $this
     */
    public function setStartProvision($start_provision)
    {
        $this->container['start_provision'] = $start_provision;

        return $this;
    }

    /**
     * Gets technical_handle
     *
     * @return string|null
     */
    public function getTechnicalHandle()
    {
        return $this->container['technical_handle'];
    }

    /**
     * Sets technical_handle
     *
     * @param string|null $technical_handle technical_handle
     *
     * @return $this
     */
    public function setTechnicalHandle($technical_handle)
    {
        $this->container['technical_handle'] = $technical_handle;

        return $this;
    }

    /**
     * Gets wildcard_domain_amount
     *
     * @return int|null
     */
    public function getWildcardDomainAmount()
    {
        return $this->container['wildcard_domain_amount'];
    }

    /**
     * Sets wildcard_domain_amount
     *
     * @param int|null $wildcard_domain_amount wildcard_domain_amount
     *
     * @return $this
     */
    public function setWildcardDomainAmount($wildcard_domain_amount)
    {
        $this->container['wildcard_domain_amount'] = $wildcard_domain_amount;

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



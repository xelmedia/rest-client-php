<?php
/**
 * SettingsPaymentMethodLimit
 *
 * PHP version 5
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Person
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Reseller/Customer
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

namespace Openprovider\Api\Rest\Client\Person\Model;

use \ArrayAccess;
use Openprovider\Api\Rest\Client\Base\ObjectSerializer;
use Openprovider\Api\Rest\Client\Base\ModelInterface;

/**
 * SettingsPaymentMethodLimit Class Doc Comment
 *
 * @category Class
 * @package  Openprovider\Api\Rest\Client\Person
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SettingsPaymentMethodLimit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'settingsPaymentMethodLimit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'aud' => 'double',
        'bgn' => 'double',
        'brl' => 'double',
        'cad' => 'double',
        'chf' => 'double',
        'cny' => 'double',
        'czk' => 'double',
        'dkk' => 'double',
        'eek' => 'double',
        'eur' => 'double',
        'gbp' => 'double',
        'ghs' => 'double',
        'hkd' => 'double',
        'hrk' => 'double',
        'huf' => 'double',
        'idr' => 'double',
        'ils' => 'double',
        'inr' => 'double',
        'jpy' => 'double',
        'krw' => 'double',
        'lkr' => 'double',
        'ltl' => 'double',
        'lvl' => 'double',
        'mxn' => 'double',
        'myr' => 'double',
        'nok' => 'double',
        'nzd' => 'double',
        'php' => 'double',
        'pln' => 'double',
        'ron' => 'double',
        'rub' => 'double',
        'sek' => 'double',
        'sgd' => 'double',
        'thb' => 'double',
        'try' => 'double',
        'usd' => 'double',
        'zar' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'aud' => 'double',
        'bgn' => 'double',
        'brl' => 'double',
        'cad' => 'double',
        'chf' => 'double',
        'cny' => 'double',
        'czk' => 'double',
        'dkk' => 'double',
        'eek' => 'double',
        'eur' => 'double',
        'gbp' => 'double',
        'ghs' => 'double',
        'hkd' => 'double',
        'hrk' => 'double',
        'huf' => 'double',
        'idr' => 'double',
        'ils' => 'double',
        'inr' => 'double',
        'jpy' => 'double',
        'krw' => 'double',
        'lkr' => 'double',
        'ltl' => 'double',
        'lvl' => 'double',
        'mxn' => 'double',
        'myr' => 'double',
        'nok' => 'double',
        'nzd' => 'double',
        'php' => 'double',
        'pln' => 'double',
        'ron' => 'double',
        'rub' => 'double',
        'sek' => 'double',
        'sgd' => 'double',
        'thb' => 'double',
        'try' => 'double',
        'usd' => 'double',
        'zar' => 'double'
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
        'aud' => 'AUD',
        'bgn' => 'BGN',
        'brl' => 'BRL',
        'cad' => 'CAD',
        'chf' => 'CHF',
        'cny' => 'CNY',
        'czk' => 'CZK',
        'dkk' => 'DKK',
        'eek' => 'EEK',
        'eur' => 'EUR',
        'gbp' => 'GBP',
        'ghs' => 'GHS',
        'hkd' => 'HKD',
        'hrk' => 'HRK',
        'huf' => 'HUF',
        'idr' => 'IDR',
        'ils' => 'ILS',
        'inr' => 'INR',
        'jpy' => 'JPY',
        'krw' => 'KRW',
        'lkr' => 'LKR',
        'ltl' => 'LTL',
        'lvl' => 'LVL',
        'mxn' => 'MXN',
        'myr' => 'MYR',
        'nok' => 'NOK',
        'nzd' => 'NZD',
        'php' => 'PHP',
        'pln' => 'PLN',
        'ron' => 'RON',
        'rub' => 'RUB',
        'sek' => 'SEK',
        'sgd' => 'SGD',
        'thb' => 'THB',
        'try' => 'TRY',
        'usd' => 'USD',
        'zar' => 'ZAR'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aud' => 'setAud',
        'bgn' => 'setBgn',
        'brl' => 'setBrl',
        'cad' => 'setCad',
        'chf' => 'setChf',
        'cny' => 'setCny',
        'czk' => 'setCzk',
        'dkk' => 'setDkk',
        'eek' => 'setEek',
        'eur' => 'setEur',
        'gbp' => 'setGbp',
        'ghs' => 'setGhs',
        'hkd' => 'setHkd',
        'hrk' => 'setHrk',
        'huf' => 'setHuf',
        'idr' => 'setIdr',
        'ils' => 'setIls',
        'inr' => 'setInr',
        'jpy' => 'setJpy',
        'krw' => 'setKrw',
        'lkr' => 'setLkr',
        'ltl' => 'setLtl',
        'lvl' => 'setLvl',
        'mxn' => 'setMxn',
        'myr' => 'setMyr',
        'nok' => 'setNok',
        'nzd' => 'setNzd',
        'php' => 'setPhp',
        'pln' => 'setPln',
        'ron' => 'setRon',
        'rub' => 'setRub',
        'sek' => 'setSek',
        'sgd' => 'setSgd',
        'thb' => 'setThb',
        'try' => 'setTry',
        'usd' => 'setUsd',
        'zar' => 'setZar'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aud' => 'getAud',
        'bgn' => 'getBgn',
        'brl' => 'getBrl',
        'cad' => 'getCad',
        'chf' => 'getChf',
        'cny' => 'getCny',
        'czk' => 'getCzk',
        'dkk' => 'getDkk',
        'eek' => 'getEek',
        'eur' => 'getEur',
        'gbp' => 'getGbp',
        'ghs' => 'getGhs',
        'hkd' => 'getHkd',
        'hrk' => 'getHrk',
        'huf' => 'getHuf',
        'idr' => 'getIdr',
        'ils' => 'getIls',
        'inr' => 'getInr',
        'jpy' => 'getJpy',
        'krw' => 'getKrw',
        'lkr' => 'getLkr',
        'ltl' => 'getLtl',
        'lvl' => 'getLvl',
        'mxn' => 'getMxn',
        'myr' => 'getMyr',
        'nok' => 'getNok',
        'nzd' => 'getNzd',
        'php' => 'getPhp',
        'pln' => 'getPln',
        'ron' => 'getRon',
        'rub' => 'getRub',
        'sek' => 'getSek',
        'sgd' => 'getSgd',
        'thb' => 'getThb',
        'try' => 'getTry',
        'usd' => 'getUsd',
        'zar' => 'getZar'
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
        $this->container['aud'] = isset($data['aud']) ? $data['aud'] : null;
        $this->container['bgn'] = isset($data['bgn']) ? $data['bgn'] : null;
        $this->container['brl'] = isset($data['brl']) ? $data['brl'] : null;
        $this->container['cad'] = isset($data['cad']) ? $data['cad'] : null;
        $this->container['chf'] = isset($data['chf']) ? $data['chf'] : null;
        $this->container['cny'] = isset($data['cny']) ? $data['cny'] : null;
        $this->container['czk'] = isset($data['czk']) ? $data['czk'] : null;
        $this->container['dkk'] = isset($data['dkk']) ? $data['dkk'] : null;
        $this->container['eek'] = isset($data['eek']) ? $data['eek'] : null;
        $this->container['eur'] = isset($data['eur']) ? $data['eur'] : null;
        $this->container['gbp'] = isset($data['gbp']) ? $data['gbp'] : null;
        $this->container['ghs'] = isset($data['ghs']) ? $data['ghs'] : null;
        $this->container['hkd'] = isset($data['hkd']) ? $data['hkd'] : null;
        $this->container['hrk'] = isset($data['hrk']) ? $data['hrk'] : null;
        $this->container['huf'] = isset($data['huf']) ? $data['huf'] : null;
        $this->container['idr'] = isset($data['idr']) ? $data['idr'] : null;
        $this->container['ils'] = isset($data['ils']) ? $data['ils'] : null;
        $this->container['inr'] = isset($data['inr']) ? $data['inr'] : null;
        $this->container['jpy'] = isset($data['jpy']) ? $data['jpy'] : null;
        $this->container['krw'] = isset($data['krw']) ? $data['krw'] : null;
        $this->container['lkr'] = isset($data['lkr']) ? $data['lkr'] : null;
        $this->container['ltl'] = isset($data['ltl']) ? $data['ltl'] : null;
        $this->container['lvl'] = isset($data['lvl']) ? $data['lvl'] : null;
        $this->container['mxn'] = isset($data['mxn']) ? $data['mxn'] : null;
        $this->container['myr'] = isset($data['myr']) ? $data['myr'] : null;
        $this->container['nok'] = isset($data['nok']) ? $data['nok'] : null;
        $this->container['nzd'] = isset($data['nzd']) ? $data['nzd'] : null;
        $this->container['php'] = isset($data['php']) ? $data['php'] : null;
        $this->container['pln'] = isset($data['pln']) ? $data['pln'] : null;
        $this->container['ron'] = isset($data['ron']) ? $data['ron'] : null;
        $this->container['rub'] = isset($data['rub']) ? $data['rub'] : null;
        $this->container['sek'] = isset($data['sek']) ? $data['sek'] : null;
        $this->container['sgd'] = isset($data['sgd']) ? $data['sgd'] : null;
        $this->container['thb'] = isset($data['thb']) ? $data['thb'] : null;
        $this->container['try'] = isset($data['try']) ? $data['try'] : null;
        $this->container['usd'] = isset($data['usd']) ? $data['usd'] : null;
        $this->container['zar'] = isset($data['zar']) ? $data['zar'] : null;
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
     * Gets aud
     *
     * @return double|null
     */
    public function getAud()
    {
        return $this->container['aud'];
    }

    /**
     * Sets aud
     *
     * @param double|null $aud aud
     *
     * @return $this
     */
    public function setAud($aud)
    {
        $this->container['aud'] = $aud;

        return $this;
    }

    /**
     * Gets bgn
     *
     * @return double|null
     */
    public function getBgn()
    {
        return $this->container['bgn'];
    }

    /**
     * Sets bgn
     *
     * @param double|null $bgn bgn
     *
     * @return $this
     */
    public function setBgn($bgn)
    {
        $this->container['bgn'] = $bgn;

        return $this;
    }

    /**
     * Gets brl
     *
     * @return double|null
     */
    public function getBrl()
    {
        return $this->container['brl'];
    }

    /**
     * Sets brl
     *
     * @param double|null $brl brl
     *
     * @return $this
     */
    public function setBrl($brl)
    {
        $this->container['brl'] = $brl;

        return $this;
    }

    /**
     * Gets cad
     *
     * @return double|null
     */
    public function getCad()
    {
        return $this->container['cad'];
    }

    /**
     * Sets cad
     *
     * @param double|null $cad cad
     *
     * @return $this
     */
    public function setCad($cad)
    {
        $this->container['cad'] = $cad;

        return $this;
    }

    /**
     * Gets chf
     *
     * @return double|null
     */
    public function getChf()
    {
        return $this->container['chf'];
    }

    /**
     * Sets chf
     *
     * @param double|null $chf chf
     *
     * @return $this
     */
    public function setChf($chf)
    {
        $this->container['chf'] = $chf;

        return $this;
    }

    /**
     * Gets cny
     *
     * @return double|null
     */
    public function getCny()
    {
        return $this->container['cny'];
    }

    /**
     * Sets cny
     *
     * @param double|null $cny cny
     *
     * @return $this
     */
    public function setCny($cny)
    {
        $this->container['cny'] = $cny;

        return $this;
    }

    /**
     * Gets czk
     *
     * @return double|null
     */
    public function getCzk()
    {
        return $this->container['czk'];
    }

    /**
     * Sets czk
     *
     * @param double|null $czk czk
     *
     * @return $this
     */
    public function setCzk($czk)
    {
        $this->container['czk'] = $czk;

        return $this;
    }

    /**
     * Gets dkk
     *
     * @return double|null
     */
    public function getDkk()
    {
        return $this->container['dkk'];
    }

    /**
     * Sets dkk
     *
     * @param double|null $dkk dkk
     *
     * @return $this
     */
    public function setDkk($dkk)
    {
        $this->container['dkk'] = $dkk;

        return $this;
    }

    /**
     * Gets eek
     *
     * @return double|null
     */
    public function getEek()
    {
        return $this->container['eek'];
    }

    /**
     * Sets eek
     *
     * @param double|null $eek eek
     *
     * @return $this
     */
    public function setEek($eek)
    {
        $this->container['eek'] = $eek;

        return $this;
    }

    /**
     * Gets eur
     *
     * @return double|null
     */
    public function getEur()
    {
        return $this->container['eur'];
    }

    /**
     * Sets eur
     *
     * @param double|null $eur eur
     *
     * @return $this
     */
    public function setEur($eur)
    {
        $this->container['eur'] = $eur;

        return $this;
    }

    /**
     * Gets gbp
     *
     * @return double|null
     */
    public function getGbp()
    {
        return $this->container['gbp'];
    }

    /**
     * Sets gbp
     *
     * @param double|null $gbp gbp
     *
     * @return $this
     */
    public function setGbp($gbp)
    {
        $this->container['gbp'] = $gbp;

        return $this;
    }

    /**
     * Gets ghs
     *
     * @return double|null
     */
    public function getGhs()
    {
        return $this->container['ghs'];
    }

    /**
     * Sets ghs
     *
     * @param double|null $ghs ghs
     *
     * @return $this
     */
    public function setGhs($ghs)
    {
        $this->container['ghs'] = $ghs;

        return $this;
    }

    /**
     * Gets hkd
     *
     * @return double|null
     */
    public function getHkd()
    {
        return $this->container['hkd'];
    }

    /**
     * Sets hkd
     *
     * @param double|null $hkd hkd
     *
     * @return $this
     */
    public function setHkd($hkd)
    {
        $this->container['hkd'] = $hkd;

        return $this;
    }

    /**
     * Gets hrk
     *
     * @return double|null
     */
    public function getHrk()
    {
        return $this->container['hrk'];
    }

    /**
     * Sets hrk
     *
     * @param double|null $hrk hrk
     *
     * @return $this
     */
    public function setHrk($hrk)
    {
        $this->container['hrk'] = $hrk;

        return $this;
    }

    /**
     * Gets huf
     *
     * @return double|null
     */
    public function getHuf()
    {
        return $this->container['huf'];
    }

    /**
     * Sets huf
     *
     * @param double|null $huf huf
     *
     * @return $this
     */
    public function setHuf($huf)
    {
        $this->container['huf'] = $huf;

        return $this;
    }

    /**
     * Gets idr
     *
     * @return double|null
     */
    public function getIdr()
    {
        return $this->container['idr'];
    }

    /**
     * Sets idr
     *
     * @param double|null $idr idr
     *
     * @return $this
     */
    public function setIdr($idr)
    {
        $this->container['idr'] = $idr;

        return $this;
    }

    /**
     * Gets ils
     *
     * @return double|null
     */
    public function getIls()
    {
        return $this->container['ils'];
    }

    /**
     * Sets ils
     *
     * @param double|null $ils ils
     *
     * @return $this
     */
    public function setIls($ils)
    {
        $this->container['ils'] = $ils;

        return $this;
    }

    /**
     * Gets inr
     *
     * @return double|null
     */
    public function getInr()
    {
        return $this->container['inr'];
    }

    /**
     * Sets inr
     *
     * @param double|null $inr inr
     *
     * @return $this
     */
    public function setInr($inr)
    {
        $this->container['inr'] = $inr;

        return $this;
    }

    /**
     * Gets jpy
     *
     * @return double|null
     */
    public function getJpy()
    {
        return $this->container['jpy'];
    }

    /**
     * Sets jpy
     *
     * @param double|null $jpy jpy
     *
     * @return $this
     */
    public function setJpy($jpy)
    {
        $this->container['jpy'] = $jpy;

        return $this;
    }

    /**
     * Gets krw
     *
     * @return double|null
     */
    public function getKrw()
    {
        return $this->container['krw'];
    }

    /**
     * Sets krw
     *
     * @param double|null $krw krw
     *
     * @return $this
     */
    public function setKrw($krw)
    {
        $this->container['krw'] = $krw;

        return $this;
    }

    /**
     * Gets lkr
     *
     * @return double|null
     */
    public function getLkr()
    {
        return $this->container['lkr'];
    }

    /**
     * Sets lkr
     *
     * @param double|null $lkr lkr
     *
     * @return $this
     */
    public function setLkr($lkr)
    {
        $this->container['lkr'] = $lkr;

        return $this;
    }

    /**
     * Gets ltl
     *
     * @return double|null
     */
    public function getLtl()
    {
        return $this->container['ltl'];
    }

    /**
     * Sets ltl
     *
     * @param double|null $ltl ltl
     *
     * @return $this
     */
    public function setLtl($ltl)
    {
        $this->container['ltl'] = $ltl;

        return $this;
    }

    /**
     * Gets lvl
     *
     * @return double|null
     */
    public function getLvl()
    {
        return $this->container['lvl'];
    }

    /**
     * Sets lvl
     *
     * @param double|null $lvl lvl
     *
     * @return $this
     */
    public function setLvl($lvl)
    {
        $this->container['lvl'] = $lvl;

        return $this;
    }

    /**
     * Gets mxn
     *
     * @return double|null
     */
    public function getMxn()
    {
        return $this->container['mxn'];
    }

    /**
     * Sets mxn
     *
     * @param double|null $mxn mxn
     *
     * @return $this
     */
    public function setMxn($mxn)
    {
        $this->container['mxn'] = $mxn;

        return $this;
    }

    /**
     * Gets myr
     *
     * @return double|null
     */
    public function getMyr()
    {
        return $this->container['myr'];
    }

    /**
     * Sets myr
     *
     * @param double|null $myr myr
     *
     * @return $this
     */
    public function setMyr($myr)
    {
        $this->container['myr'] = $myr;

        return $this;
    }

    /**
     * Gets nok
     *
     * @return double|null
     */
    public function getNok()
    {
        return $this->container['nok'];
    }

    /**
     * Sets nok
     *
     * @param double|null $nok nok
     *
     * @return $this
     */
    public function setNok($nok)
    {
        $this->container['nok'] = $nok;

        return $this;
    }

    /**
     * Gets nzd
     *
     * @return double|null
     */
    public function getNzd()
    {
        return $this->container['nzd'];
    }

    /**
     * Sets nzd
     *
     * @param double|null $nzd nzd
     *
     * @return $this
     */
    public function setNzd($nzd)
    {
        $this->container['nzd'] = $nzd;

        return $this;
    }

    /**
     * Gets php
     *
     * @return double|null
     */
    public function getPhp()
    {
        return $this->container['php'];
    }

    /**
     * Sets php
     *
     * @param double|null $php php
     *
     * @return $this
     */
    public function setPhp($php)
    {
        $this->container['php'] = $php;

        return $this;
    }

    /**
     * Gets pln
     *
     * @return double|null
     */
    public function getPln()
    {
        return $this->container['pln'];
    }

    /**
     * Sets pln
     *
     * @param double|null $pln pln
     *
     * @return $this
     */
    public function setPln($pln)
    {
        $this->container['pln'] = $pln;

        return $this;
    }

    /**
     * Gets ron
     *
     * @return double|null
     */
    public function getRon()
    {
        return $this->container['ron'];
    }

    /**
     * Sets ron
     *
     * @param double|null $ron ron
     *
     * @return $this
     */
    public function setRon($ron)
    {
        $this->container['ron'] = $ron;

        return $this;
    }

    /**
     * Gets rub
     *
     * @return double|null
     */
    public function getRub()
    {
        return $this->container['rub'];
    }

    /**
     * Sets rub
     *
     * @param double|null $rub rub
     *
     * @return $this
     */
    public function setRub($rub)
    {
        $this->container['rub'] = $rub;

        return $this;
    }

    /**
     * Gets sek
     *
     * @return double|null
     */
    public function getSek()
    {
        return $this->container['sek'];
    }

    /**
     * Sets sek
     *
     * @param double|null $sek sek
     *
     * @return $this
     */
    public function setSek($sek)
    {
        $this->container['sek'] = $sek;

        return $this;
    }

    /**
     * Gets sgd
     *
     * @return double|null
     */
    public function getSgd()
    {
        return $this->container['sgd'];
    }

    /**
     * Sets sgd
     *
     * @param double|null $sgd sgd
     *
     * @return $this
     */
    public function setSgd($sgd)
    {
        $this->container['sgd'] = $sgd;

        return $this;
    }

    /**
     * Gets thb
     *
     * @return double|null
     */
    public function getThb()
    {
        return $this->container['thb'];
    }

    /**
     * Sets thb
     *
     * @param double|null $thb thb
     *
     * @return $this
     */
    public function setThb($thb)
    {
        $this->container['thb'] = $thb;

        return $this;
    }

    /**
     * Gets try
     *
     * @return double|null
     */
    public function getTry()
    {
        return $this->container['try'];
    }

    /**
     * Sets try
     *
     * @param double|null $try try
     *
     * @return $this
     */
    public function setTry($try)
    {
        $this->container['try'] = $try;

        return $this;
    }

    /**
     * Gets usd
     *
     * @return double|null
     */
    public function getUsd()
    {
        return $this->container['usd'];
    }

    /**
     * Sets usd
     *
     * @param double|null $usd usd
     *
     * @return $this
     */
    public function setUsd($usd)
    {
        $this->container['usd'] = $usd;

        return $this;
    }

    /**
     * Gets zar
     *
     * @return double|null
     */
    public function getZar()
    {
        return $this->container['zar'];
    }

    /**
     * Sets zar
     *
     * @param double|null $zar zar
     *
     * @return $this
     */
    public function setZar($zar)
    {
        $this->container['zar'] = $zar;

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



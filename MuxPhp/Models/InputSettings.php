<?php

/**
 * Mux PHP - Copyright 2019 Mux Inc.
 * NOTE: This file is auto generated. Do not edit this file manually.
 */

namespace MuxPhp\Models;

use \ArrayAccess;
use \MuxPhp\ObjectSerializer;

/**
 * InputSettings Class Doc Comment
 *
 * @category Class
 * @description An array of objects that each describe an input file to be used to create the asset. As a shortcut, &#x60;input&#x60; can also be a string URL for a file when only one input file is used. See &#x60;input[].url&#x60; for requirements.
 * @package  MuxPhp
 */
class InputSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'InputSettings';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'url' => 'string',
        'overlay_settings' => '\MuxPhp\Models\InputSettingsOverlaySettings',
        'type' => 'string',
        'text_type' => 'string',
        'language_code' => 'string',
        'name' => 'string',
        'closed_captions' => 'bool',
        'passthrough' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPIFormats = [
        'url' => null,
        'overlay_settings' => null,
        'type' => null,
        'text_type' => null,
        'language_code' => null,
        'name' => null,
        'closed_captions' => null,
        'passthrough' => null
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
        'url' => 'url',
        'overlay_settings' => 'overlay_settings',
        'type' => 'type',
        'text_type' => 'text_type',
        'language_code' => 'language_code',
        'name' => 'name',
        'closed_captions' => 'closed_captions',
        'passthrough' => 'passthrough'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'overlay_settings' => 'setOverlaySettings',
        'type' => 'setType',
        'text_type' => 'setTextType',
        'language_code' => 'setLanguageCode',
        'name' => 'setName',
        'closed_captions' => 'setClosedCaptions',
        'passthrough' => 'setPassthrough'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'overlay_settings' => 'getOverlaySettings',
        'type' => 'getType',
        'text_type' => 'getTextType',
        'language_code' => 'getLanguageCode',
        'name' => 'getName',
        'closed_captions' => 'getClosedCaptions',
        'passthrough' => 'getPassthrough'
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

    const TYPE_VIDEO = 'video';
    const TYPE_AUDIO = 'audio';
    const TYPE_TEXT = 'text';
    const TEXT_TYPE_SUBTITLES = 'subtitles';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_VIDEO,
            self::TYPE_AUDIO,
            self::TYPE_TEXT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTextTypeAllowableValues()
    {
        return [
            self::TEXT_TYPE_SUBTITLES,
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['overlay_settings'] = isset($data['overlay_settings']) ? $data['overlay_settings'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['text_type'] = isset($data['text_type']) ? $data['text_type'] : null;
        $this->container['language_code'] = isset($data['language_code']) ? $data['language_code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['closed_captions'] = isset($data['closed_captions']) ? $data['closed_captions'] : null;
        $this->container['passthrough'] = isset($data['passthrough']) ? $data['passthrough'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTextTypeAllowableValues();
        if (!is_null($this->container['text_type']) && !in_array($this->container['text_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'text_type', must be one of '%s'",
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url The web address of the subtitle text track file that Mux should download and use to create the track. Mux supports [SubRip Text (SRT)](https://en.wikipedia.org/wiki/SubRip) and [Web Video Text Tracks](https://www.w3.org/TR/webvtt1/) format for ingesting Subtitles and Closed Captions.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets overlay_settings
     *
     * @return \MuxPhp\Models\InputSettingsOverlaySettings|null
     */
    public function getOverlaySettings()
    {
        return $this->container['overlay_settings'];
    }

    /**
     * Sets overlay_settings
     *
     * @param \MuxPhp\Models\InputSettingsOverlaySettings|null $overlay_settings overlay_settings
     *
     * @return $this
     */
    public function setOverlaySettings($overlay_settings)
    {
        $this->container['overlay_settings'] = $overlay_settings;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type This parameter is required for the `text` track type.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets text_type
     *
     * @return string|null
     */
    public function getTextType()
    {
        return $this->container['text_type'];
    }

    /**
     * Sets text_type
     *
     * @param string|null $text_type Type of text track. This parameter only supports subtitles value. For more information on Subtitles / Closed Captions, [see this blog post](https://mux.com/blog/subtitles-captions-webvtt-hls-and-those-magic-flags/). This parameter is required for `text` track type.
     *
     * @return $this
     */
    public function setTextType($text_type)
    {
        $allowedValues = $this->getTextTypeAllowableValues();
        if (!is_null($text_type) && !in_array($text_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'text_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['text_type'] = $text_type;

        return $this;
    }

    /**
     * Gets language_code
     *
     * @return string|null
     */
    public function getLanguageCode()
    {
        return $this->container['language_code'];
    }

    /**
     * Sets language_code
     *
     * @param string|null $language_code The language code value must be a valid [BCP 47](https://tools.ietf.org/html/bcp47) specification compliant value. For example, en for English or en-US for the US version of English. This parameter is required for text type and subtitles text type track.
     *
     * @return $this
     */
    public function setLanguageCode($language_code)
    {
        $this->container['language_code'] = $language_code;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the track containing a human-readable description. This value must be unique across all text type and subtitles `text` type tracks. The hls manifest will associate a subtitle text track with this value. For example, the value should be \"English\" for subtitles text track with language_code as en. This optional parameter should be used only for `text` type and subtitles `text` type track. If this parameter is not included, Mux will auto-populate based on the `input[].language_code` value.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets closed_captions
     *
     * @return bool|null
     */
    public function getClosedCaptions()
    {
        return $this->container['closed_captions'];
    }

    /**
     * Sets closed_captions
     *
     * @param bool|null $closed_captions Indicates the track provides Subtitles for the Deaf or Hard-of-hearing (SDH). This optional parameter should be used for `text` type and subtitles `text` type tracks.
     *
     * @return $this
     */
    public function setClosedCaptions($closed_captions)
    {
        $this->container['closed_captions'] = $closed_captions;

        return $this;
    }

    /**
     * Gets passthrough
     *
     * @return string|null
     */
    public function getPassthrough()
    {
        return $this->container['passthrough'];
    }

    /**
     * Sets passthrough
     *
     * @param string|null $passthrough This optional parameter should be used for `text` type and subtitles `text` type tracks.
     *
     * @return $this
     */
    public function setPassthrough($passthrough)
    {
        $this->container['passthrough'] = $passthrough;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}



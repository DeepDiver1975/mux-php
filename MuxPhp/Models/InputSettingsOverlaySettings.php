<?php

/**
 * Mux PHP - Copyright 2019 Mux Inc.
 * NOTE: This file is auto generated. Do not edit this file manually.
 */

namespace MuxPhp\Models;

use \ArrayAccess;
use \MuxPhp\ObjectSerializer;

/**
 * InputSettingsOverlaySettings Class Doc Comment
 *
 * @category Class
 * @description An object that describes how the image file referenced in url should be placed over the video (i.e. watermarking).
 * @package  MuxPhp
 */
class InputSettingsOverlaySettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'InputSettings_overlay_settings';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'vertical_align' => 'string',
        'vertical_margin' => 'string',
        'horizontal_align' => 'string',
        'horizontal_margin' => 'string',
        'width' => 'string',
        'height' => 'string',
        'opacity' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPIFormats = [
        'vertical_align' => null,
        'vertical_margin' => null,
        'horizontal_align' => null,
        'horizontal_margin' => null,
        'width' => null,
        'height' => null,
        'opacity' => null
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
        'vertical_align' => 'vertical_align',
        'vertical_margin' => 'vertical_margin',
        'horizontal_align' => 'horizontal_align',
        'horizontal_margin' => 'horizontal_margin',
        'width' => 'width',
        'height' => 'height',
        'opacity' => 'opacity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vertical_align' => 'setVerticalAlign',
        'vertical_margin' => 'setVerticalMargin',
        'horizontal_align' => 'setHorizontalAlign',
        'horizontal_margin' => 'setHorizontalMargin',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'opacity' => 'setOpacity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vertical_align' => 'getVerticalAlign',
        'vertical_margin' => 'getVerticalMargin',
        'horizontal_align' => 'getHorizontalAlign',
        'horizontal_margin' => 'getHorizontalMargin',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'opacity' => 'getOpacity'
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

    const VERTICAL_ALIGN_TOP = 'top';
    const VERTICAL_ALIGN_MIDDLE = 'middle';
    const VERTICAL_ALIGN_BOTTOM = 'bottom';
    const HORIZONTAL_ALIGN_LEFT = 'left';
    const HORIZONTAL_ALIGN_CENTER = 'center';
    const HORIZONTAL_ALIGN_RIGHT = 'right';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVerticalAlignAllowableValues()
    {
        return [
            self::VERTICAL_ALIGN_TOP,
            self::VERTICAL_ALIGN_MIDDLE,
            self::VERTICAL_ALIGN_BOTTOM,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHorizontalAlignAllowableValues()
    {
        return [
            self::HORIZONTAL_ALIGN_LEFT,
            self::HORIZONTAL_ALIGN_CENTER,
            self::HORIZONTAL_ALIGN_RIGHT,
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
        $this->container['vertical_align'] = isset($data['vertical_align']) ? $data['vertical_align'] : null;
        $this->container['vertical_margin'] = isset($data['vertical_margin']) ? $data['vertical_margin'] : null;
        $this->container['horizontal_align'] = isset($data['horizontal_align']) ? $data['horizontal_align'] : null;
        $this->container['horizontal_margin'] = isset($data['horizontal_margin']) ? $data['horizontal_margin'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['opacity'] = isset($data['opacity']) ? $data['opacity'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getVerticalAlignAllowableValues();
        if (!is_null($this->container['vertical_align']) && !in_array($this->container['vertical_align'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'vertical_align', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getHorizontalAlignAllowableValues();
        if (!is_null($this->container['horizontal_align']) && !in_array($this->container['horizontal_align'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'horizontal_align', must be one of '%s'",
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
     * Gets vertical_align
     *
     * @return string|null
     */
    public function getVerticalAlign()
    {
        return $this->container['vertical_align'];
    }

    /**
     * Sets vertical_align
     *
     * @param string|null $vertical_align Where the vertical positioning of the overlay/watermark should begin from. Defaults to `\"top\"`
     *
     * @return $this
     */
    public function setVerticalAlign($vertical_align)
    {
        $allowedValues = $this->getVerticalAlignAllowableValues();
        if (!is_null($vertical_align) && !in_array($vertical_align, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'vertical_align', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['vertical_align'] = $vertical_align;

        return $this;
    }

    /**
     * Gets vertical_margin
     *
     * @return string|null
     */
    public function getVerticalMargin()
    {
        return $this->container['vertical_margin'];
    }

    /**
     * Sets vertical_margin
     *
     * @param string|null $vertical_margin The distance from the vertical_align starting point and the image's closest edge. Can be expressed as a percent (\"10%\") or as a pixel value (\"100px\"). Negative values will move the overlay offscreen. In the case of 'middle', a positive value will shift the overlay towards the bottom and and a negative value will shift it towards the top.
     *
     * @return $this
     */
    public function setVerticalMargin($vertical_margin)
    {
        $this->container['vertical_margin'] = $vertical_margin;

        return $this;
    }

    /**
     * Gets horizontal_align
     *
     * @return string|null
     */
    public function getHorizontalAlign()
    {
        return $this->container['horizontal_align'];
    }

    /**
     * Sets horizontal_align
     *
     * @param string|null $horizontal_align Where the horizontal positioning of the overlay/watermark should begin from.
     *
     * @return $this
     */
    public function setHorizontalAlign($horizontal_align)
    {
        $allowedValues = $this->getHorizontalAlignAllowableValues();
        if (!is_null($horizontal_align) && !in_array($horizontal_align, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'horizontal_align', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['horizontal_align'] = $horizontal_align;

        return $this;
    }

    /**
     * Gets horizontal_margin
     *
     * @return string|null
     */
    public function getHorizontalMargin()
    {
        return $this->container['horizontal_margin'];
    }

    /**
     * Sets horizontal_margin
     *
     * @param string|null $horizontal_margin The distance from the horizontal_align starting point and the image's closest edge. Can be expressed as a percent (\"10%\") or as a pixel value (\"100px\"). Negative values will move the overlay offscreen. In the case of 'center', a positive value will shift the image towards the right and and a negative value will shift it towards the left.
     *
     * @return $this
     */
    public function setHorizontalMargin($horizontal_margin)
    {
        $this->container['horizontal_margin'] = $horizontal_margin;

        return $this;
    }

    /**
     * Gets width
     *
     * @return string|null
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param string|null $width How wide the overlay should appear. Can be expressed as a percent (\"10%\") or as a pixel value (\"100px\"). If both width and height are left blank the width will be the true pixels of the image, applied as if the video has been scaled to fit a 1920x1080 frame. If height is supplied with no width, the width will scale proportionally to the height.
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return string|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param string|null $height How tall the overlay should appear. Can be expressed as a percent (\"10%\") or as a pixel value (\"100px\"). If both width and height are left blank the height will be the true pixels of the image, applied as if the video has been scaled to fit a 1920x1080 frame. If width is supplied with no height, the height will scale proportionally to the width.
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets opacity
     *
     * @return string|null
     */
    public function getOpacity()
    {
        return $this->container['opacity'];
    }

    /**
     * Sets opacity
     *
     * @param string|null $opacity How opaque the overlay should appear, expressed as a percent. (Default 100%)
     *
     * @return $this
     */
    public function setOpacity($opacity)
    {
        $this->container['opacity'] = $opacity;

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



<?php
/**
 * Incident
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  MuxPhp
 * @author   Mux API team
 * @link     https://docs.mux.com
 */

/**
 * Mux API
 *
 * Mux is how developers build online video. This API encompasses both Mux Video and Mux Data functionality to help you build your video-related projects better and faster than ever before.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MuxPhp\Models;

use \ArrayAccess;
use \MuxPhp\ObjectSerializer;

/**
 * Incident Class Doc Comment
 *
 * @category Class
 * @package  MuxPhp
 * @author   Mux API team
 * @link     https://docs.mux.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Incident implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Incident';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'threshold' => 'double',
        'status' => 'string',
        'started_at' => 'string',
        'severity' => 'string',
        'sample_size_unit' => 'string',
        'sample_size' => 'int',
        'resolved_at' => 'string',
        'notifications' => '\MuxPhp\Models\IncidentNotification[]',
        'notification_rules' => '\MuxPhp\Models\IncidentNotificationRule[]',
        'measurement' => 'string',
        'measured_value_on_close' => 'double',
        'measured_value' => 'double',
        'incident_key' => 'string',
        'impact' => 'string',
        'id' => 'string',
        'error_description' => 'string',
        'description' => 'string',
        'breakdowns' => '\MuxPhp\Models\IncidentBreakdown[]',
        'affected_views_per_hour_on_open' => 'int',
        'affected_views_per_hour' => 'int',
        'affected_views' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'threshold' => 'double',
        'status' => null,
        'started_at' => null,
        'severity' => null,
        'sample_size_unit' => null,
        'sample_size' => 'int64',
        'resolved_at' => null,
        'notifications' => null,
        'notification_rules' => null,
        'measurement' => null,
        'measured_value_on_close' => 'double',
        'measured_value' => 'double',
        'incident_key' => null,
        'impact' => null,
        'id' => null,
        'error_description' => null,
        'description' => null,
        'breakdowns' => null,
        'affected_views_per_hour_on_open' => 'int64',
        'affected_views_per_hour' => 'int64',
        'affected_views' => 'int64'
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
        'threshold' => 'threshold',
        'status' => 'status',
        'started_at' => 'started_at',
        'severity' => 'severity',
        'sample_size_unit' => 'sample_size_unit',
        'sample_size' => 'sample_size',
        'resolved_at' => 'resolved_at',
        'notifications' => 'notifications',
        'notification_rules' => 'notification_rules',
        'measurement' => 'measurement',
        'measured_value_on_close' => 'measured_value_on_close',
        'measured_value' => 'measured_value',
        'incident_key' => 'incident_key',
        'impact' => 'impact',
        'id' => 'id',
        'error_description' => 'error_description',
        'description' => 'description',
        'breakdowns' => 'breakdowns',
        'affected_views_per_hour_on_open' => 'affected_views_per_hour_on_open',
        'affected_views_per_hour' => 'affected_views_per_hour',
        'affected_views' => 'affected_views'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'threshold' => 'setThreshold',
        'status' => 'setStatus',
        'started_at' => 'setStartedAt',
        'severity' => 'setSeverity',
        'sample_size_unit' => 'setSampleSizeUnit',
        'sample_size' => 'setSampleSize',
        'resolved_at' => 'setResolvedAt',
        'notifications' => 'setNotifications',
        'notification_rules' => 'setNotificationRules',
        'measurement' => 'setMeasurement',
        'measured_value_on_close' => 'setMeasuredValueOnClose',
        'measured_value' => 'setMeasuredValue',
        'incident_key' => 'setIncidentKey',
        'impact' => 'setImpact',
        'id' => 'setId',
        'error_description' => 'setErrorDescription',
        'description' => 'setDescription',
        'breakdowns' => 'setBreakdowns',
        'affected_views_per_hour_on_open' => 'setAffectedViewsPerHourOnOpen',
        'affected_views_per_hour' => 'setAffectedViewsPerHour',
        'affected_views' => 'setAffectedViews'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'threshold' => 'getThreshold',
        'status' => 'getStatus',
        'started_at' => 'getStartedAt',
        'severity' => 'getSeverity',
        'sample_size_unit' => 'getSampleSizeUnit',
        'sample_size' => 'getSampleSize',
        'resolved_at' => 'getResolvedAt',
        'notifications' => 'getNotifications',
        'notification_rules' => 'getNotificationRules',
        'measurement' => 'getMeasurement',
        'measured_value_on_close' => 'getMeasuredValueOnClose',
        'measured_value' => 'getMeasuredValue',
        'incident_key' => 'getIncidentKey',
        'impact' => 'getImpact',
        'id' => 'getId',
        'error_description' => 'getErrorDescription',
        'description' => 'getDescription',
        'breakdowns' => 'getBreakdowns',
        'affected_views_per_hour_on_open' => 'getAffectedViewsPerHourOnOpen',
        'affected_views_per_hour' => 'getAffectedViewsPerHour',
        'affected_views' => 'getAffectedViews'
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
        // MUX: enum hack (self::) due to OAS emitting problems.
        //      please re-integrate with mainline when possible.
        //      src: https://github.com/OpenAPITools/openapi-generator/issues/9038
        $this->container['threshold'] = $data['threshold'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['started_at'] = $data['started_at'] ?? null;
        $this->container['severity'] = $data['severity'] ?? null;
        $this->container['sample_size_unit'] = $data['sample_size_unit'] ?? null;
        $this->container['sample_size'] = $data['sample_size'] ?? null;
        $this->container['resolved_at'] = $data['resolved_at'] ?? null;
        $this->container['notifications'] = $data['notifications'] ?? null;
        $this->container['notification_rules'] = $data['notification_rules'] ?? null;
        $this->container['measurement'] = $data['measurement'] ?? null;
        $this->container['measured_value_on_close'] = $data['measured_value_on_close'] ?? null;
        $this->container['measured_value'] = $data['measured_value'] ?? null;
        $this->container['incident_key'] = $data['incident_key'] ?? null;
        $this->container['impact'] = $data['impact'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['error_description'] = $data['error_description'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['breakdowns'] = $data['breakdowns'] ?? null;
        $this->container['affected_views_per_hour_on_open'] = $data['affected_views_per_hour_on_open'] ?? null;
        $this->container['affected_views_per_hour'] = $data['affected_views_per_hour'] ?? null;
        $this->container['affected_views'] = $data['affected_views'] ?? null;
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
     * Gets threshold
     *
     * @return double|null
     */
    public function getThreshold()
    {
        return $this->container['threshold'];
    }

    /**
     * Sets threshold
     *
     * @param double|null $threshold threshold
     *
     * @return self
     */
    public function setThreshold($threshold)
    {
        $this->container['threshold'] = $threshold;

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
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets started_at
     *
     * @return string|null
     */
    public function getStartedAt()
    {
        return $this->container['started_at'];
    }

    /**
     * Sets started_at
     *
     * @param string|null $started_at started_at
     *
     * @return self
     */
    public function setStartedAt($started_at)
    {
        $this->container['started_at'] = $started_at;

        return $this;
    }

    /**
     * Gets severity
     *
     * @return string|null
     */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
     * Sets severity
     *
     * @param string|null $severity severity
     *
     * @return self
     */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;

        return $this;
    }

    /**
     * Gets sample_size_unit
     *
     * @return string|null
     */
    public function getSampleSizeUnit()
    {
        return $this->container['sample_size_unit'];
    }

    /**
     * Sets sample_size_unit
     *
     * @param string|null $sample_size_unit sample_size_unit
     *
     * @return self
     */
    public function setSampleSizeUnit($sample_size_unit)
    {
        $this->container['sample_size_unit'] = $sample_size_unit;

        return $this;
    }

    /**
     * Gets sample_size
     *
     * @return int|null
     */
    public function getSampleSize()
    {
        return $this->container['sample_size'];
    }

    /**
     * Sets sample_size
     *
     * @param int|null $sample_size sample_size
     *
     * @return self
     */
    public function setSampleSize($sample_size)
    {
        $this->container['sample_size'] = $sample_size;

        return $this;
    }

    /**
     * Gets resolved_at
     *
     * @return string|null
     */
    public function getResolvedAt()
    {
        return $this->container['resolved_at'];
    }

    /**
     * Sets resolved_at
     *
     * @param string|null $resolved_at resolved_at
     *
     * @return self
     */
    public function setResolvedAt($resolved_at)
    {
        $this->container['resolved_at'] = $resolved_at;

        return $this;
    }

    /**
     * Gets notifications
     *
     * @return \MuxPhp\Models\IncidentNotification[]|null
     */
    public function getNotifications()
    {
        return $this->container['notifications'];
    }

    /**
     * Sets notifications
     *
     * @param \MuxPhp\Models\IncidentNotification[]|null $notifications notifications
     *
     * @return self
     */
    public function setNotifications($notifications)
    {
        $this->container['notifications'] = $notifications;

        return $this;
    }

    /**
     * Gets notification_rules
     *
     * @return \MuxPhp\Models\IncidentNotificationRule[]|null
     */
    public function getNotificationRules()
    {
        return $this->container['notification_rules'];
    }

    /**
     * Sets notification_rules
     *
     * @param \MuxPhp\Models\IncidentNotificationRule[]|null $notification_rules notification_rules
     *
     * @return self
     */
    public function setNotificationRules($notification_rules)
    {
        $this->container['notification_rules'] = $notification_rules;

        return $this;
    }

    /**
     * Gets measurement
     *
     * @return string|null
     */
    public function getMeasurement()
    {
        return $this->container['measurement'];
    }

    /**
     * Sets measurement
     *
     * @param string|null $measurement measurement
     *
     * @return self
     */
    public function setMeasurement($measurement)
    {
        $this->container['measurement'] = $measurement;

        return $this;
    }

    /**
     * Gets measured_value_on_close
     *
     * @return double|null
     */
    public function getMeasuredValueOnClose()
    {
        return $this->container['measured_value_on_close'];
    }

    /**
     * Sets measured_value_on_close
     *
     * @param double|null $measured_value_on_close measured_value_on_close
     *
     * @return self
     */
    public function setMeasuredValueOnClose($measured_value_on_close)
    {
        $this->container['measured_value_on_close'] = $measured_value_on_close;

        return $this;
    }

    /**
     * Gets measured_value
     *
     * @return double|null
     */
    public function getMeasuredValue()
    {
        return $this->container['measured_value'];
    }

    /**
     * Sets measured_value
     *
     * @param double|null $measured_value measured_value
     *
     * @return self
     */
    public function setMeasuredValue($measured_value)
    {
        $this->container['measured_value'] = $measured_value;

        return $this;
    }

    /**
     * Gets incident_key
     *
     * @return string|null
     */
    public function getIncidentKey()
    {
        return $this->container['incident_key'];
    }

    /**
     * Sets incident_key
     *
     * @param string|null $incident_key incident_key
     *
     * @return self
     */
    public function setIncidentKey($incident_key)
    {
        $this->container['incident_key'] = $incident_key;

        return $this;
    }

    /**
     * Gets impact
     *
     * @return string|null
     */
    public function getImpact()
    {
        return $this->container['impact'];
    }

    /**
     * Sets impact
     *
     * @param string|null $impact impact
     *
     * @return self
     */
    public function setImpact($impact)
    {
        $this->container['impact'] = $impact;

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
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets error_description
     *
     * @return string|null
     */
    public function getErrorDescription()
    {
        return $this->container['error_description'];
    }

    /**
     * Sets error_description
     *
     * @param string|null $error_description error_description
     *
     * @return self
     */
    public function setErrorDescription($error_description)
    {
        $this->container['error_description'] = $error_description;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets breakdowns
     *
     * @return \MuxPhp\Models\IncidentBreakdown[]|null
     */
    public function getBreakdowns()
    {
        return $this->container['breakdowns'];
    }

    /**
     * Sets breakdowns
     *
     * @param \MuxPhp\Models\IncidentBreakdown[]|null $breakdowns breakdowns
     *
     * @return self
     */
    public function setBreakdowns($breakdowns)
    {
        $this->container['breakdowns'] = $breakdowns;

        return $this;
    }

    /**
     * Gets affected_views_per_hour_on_open
     *
     * @return int|null
     */
    public function getAffectedViewsPerHourOnOpen()
    {
        return $this->container['affected_views_per_hour_on_open'];
    }

    /**
     * Sets affected_views_per_hour_on_open
     *
     * @param int|null $affected_views_per_hour_on_open affected_views_per_hour_on_open
     *
     * @return self
     */
    public function setAffectedViewsPerHourOnOpen($affected_views_per_hour_on_open)
    {
        $this->container['affected_views_per_hour_on_open'] = $affected_views_per_hour_on_open;

        return $this;
    }

    /**
     * Gets affected_views_per_hour
     *
     * @return int|null
     */
    public function getAffectedViewsPerHour()
    {
        return $this->container['affected_views_per_hour'];
    }

    /**
     * Sets affected_views_per_hour
     *
     * @param int|null $affected_views_per_hour affected_views_per_hour
     *
     * @return self
     */
    public function setAffectedViewsPerHour($affected_views_per_hour)
    {
        $this->container['affected_views_per_hour'] = $affected_views_per_hour;

        return $this;
    }

    /**
     * Gets affected_views
     *
     * @return int|null
     */
    public function getAffectedViews()
    {
        return $this->container['affected_views'];
    }

    /**
     * Sets affected_views
     *
     * @param int|null $affected_views affected_views
     *
     * @return self
     */
    public function setAffectedViews($affected_views)
    {
        $this->container['affected_views'] = $affected_views;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudtrace/v2/trace.proto

namespace Google\Cloud\Trace\V2\Span;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A set of attributes, each in the format `[KEY]:[VALUE]`.
 *
 * Generated from protobuf message <code>google.devtools.cloudtrace.v2.Span.Attributes</code>
 */
class Attributes extends \Google\Protobuf\Internal\Message
{
    /**
     * The set of attributes. Each attribute's key can be up to 128 bytes
     * long. The value can be a string up to 256 bytes, an integer, or the
     * Boolean values `true` and `false`. For example:
     *     "/instance_id": "my-instance"
     *     "/http/user_agent": ""
     *     "/http/request_bytes": 300
     *     "abc.com/myattribute": true
     *
     * Generated from protobuf field <code>map<string, .google.devtools.cloudtrace.v2.AttributeValue> attribute_map = 1;</code>
     */
    private $attribute_map;
    /**
     * The number of attributes that were discarded. Attributes can be discarded
     * because their keys are too long or because there are too many attributes.
     * If this value is 0 then all attributes are valid.
     *
     * Generated from protobuf field <code>int32 dropped_attributes_count = 2;</code>
     */
    private $dropped_attributes_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $attribute_map
     *           The set of attributes. Each attribute's key can be up to 128 bytes
     *           long. The value can be a string up to 256 bytes, an integer, or the
     *           Boolean values `true` and `false`. For example:
     *               "/instance_id": "my-instance"
     *               "/http/user_agent": ""
     *               "/http/request_bytes": 300
     *               "abc.com/myattribute": true
     *     @type int $dropped_attributes_count
     *           The number of attributes that were discarded. Attributes can be discarded
     *           because their keys are too long or because there are too many attributes.
     *           If this value is 0 then all attributes are valid.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudtrace\V2\Trace::initOnce();
        parent::__construct($data);
    }

    /**
     * The set of attributes. Each attribute's key can be up to 128 bytes
     * long. The value can be a string up to 256 bytes, an integer, or the
     * Boolean values `true` and `false`. For example:
     *     "/instance_id": "my-instance"
     *     "/http/user_agent": ""
     *     "/http/request_bytes": 300
     *     "abc.com/myattribute": true
     *
     * Generated from protobuf field <code>map<string, .google.devtools.cloudtrace.v2.AttributeValue> attribute_map = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAttributeMap()
    {
        return $this->attribute_map;
    }

    /**
     * The set of attributes. Each attribute's key can be up to 128 bytes
     * long. The value can be a string up to 256 bytes, an integer, or the
     * Boolean values `true` and `false`. For example:
     *     "/instance_id": "my-instance"
     *     "/http/user_agent": ""
     *     "/http/request_bytes": 300
     *     "abc.com/myattribute": true
     *
     * Generated from protobuf field <code>map<string, .google.devtools.cloudtrace.v2.AttributeValue> attribute_map = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAttributeMap($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Trace\V2\AttributeValue::class);
        $this->attribute_map = $arr;

        return $this;
    }

    /**
     * The number of attributes that were discarded. Attributes can be discarded
     * because their keys are too long or because there are too many attributes.
     * If this value is 0 then all attributes are valid.
     *
     * Generated from protobuf field <code>int32 dropped_attributes_count = 2;</code>
     * @return int
     */
    public function getDroppedAttributesCount()
    {
        return $this->dropped_attributes_count;
    }

    /**
     * The number of attributes that were discarded. Attributes can be discarded
     * because their keys are too long or because there are too many attributes.
     * If this value is 0 then all attributes are valid.
     *
     * Generated from protobuf field <code>int32 dropped_attributes_count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDroppedAttributesCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->dropped_attributes_count = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Attributes::class, \Google\Cloud\Trace\V2\Span_Attributes::class);


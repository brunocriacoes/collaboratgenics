<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\TransformationSummary;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A collection that informs the user the number of times a particular
 * `TransformationResultCode` and error details occurred.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.TransformationSummary.SummaryResult</code>
 */
class SummaryResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 count = 1;</code>
     */
    private $count = 0;
    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2.TransformationSummary.TransformationResultCode code = 2;</code>
     */
    private $code = 0;
    /**
     * A place for warnings or errors to show up if a transformation didn't
     * work as expected.
     *
     * Generated from protobuf field <code>string details = 3;</code>
     */
    private $details = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $count
     *     @type int $code
     *     @type string $details
     *           A place for warnings or errors to show up if a transformation didn't
     *           work as expected.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 count = 1;</code>
     * @return int|string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Generated from protobuf field <code>int64 count = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2.TransformationSummary.TransformationResultCode code = 2;</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2.TransformationSummary.TransformationResultCode code = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\TransformationSummary_TransformationResultCode::class);
        $this->code = $var;

        return $this;
    }

    /**
     * A place for warnings or errors to show up if a transformation didn't
     * work as expected.
     *
     * Generated from protobuf field <code>string details = 3;</code>
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * A place for warnings or errors to show up if a transformation didn't
     * work as expected.
     *
     * Generated from protobuf field <code>string details = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkString($var, True);
        $this->details = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SummaryResult::class, \Google\Cloud\Dlp\V2\TransformationSummary_SummaryResult::class);


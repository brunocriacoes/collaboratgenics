<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/metric_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `ListMetricDescriptors` request.
 *
 * Generated from protobuf message <code>google.monitoring.v3.ListMetricDescriptorsRequest</code>
 */
class ListMetricDescriptorsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The project on which to execute the request. The format is
     * `"projects/{project_id_or_number}"`.
     *
     * Generated from protobuf field <code>string name = 5;</code>
     */
    private $name = '';
    /**
     * If this field is empty, all custom and
     * system-defined metric descriptors are returned.
     * Otherwise, the [filter](/monitoring/api/v3/filters)
     * specifies which metric descriptors are to be
     * returned. For example, the following filter matches all
     * [custom metrics](/monitoring/custom-metrics):
     *     metric.type = starts_with("custom.googleapis.com/")
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     */
    private $filter = '';
    /**
     * A positive number that is the maximum number of results to return.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;
    /**
     * If this field is not empty then it must contain the `nextPageToken` value
     * returned by a previous call to this method.  Using this field causes the
     * method to return additional results from the previous method call.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The project on which to execute the request. The format is
     *           `"projects/{project_id_or_number}"`.
     *     @type string $filter
     *           If this field is empty, all custom and
     *           system-defined metric descriptors are returned.
     *           Otherwise, the [filter](/monitoring/api/v3/filters)
     *           specifies which metric descriptors are to be
     *           returned. For example, the following filter matches all
     *           [custom metrics](/monitoring/custom-metrics):
     *               metric.type = starts_with("custom.googleapis.com/")
     *     @type int $page_size
     *           A positive number that is the maximum number of results to return.
     *     @type string $page_token
     *           If this field is not empty then it must contain the `nextPageToken` value
     *           returned by a previous call to this method.  Using this field causes the
     *           method to return additional results from the previous method call.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\MetricService::initOnce();
        parent::__construct($data);
    }

    /**
     * The project on which to execute the request. The format is
     * `"projects/{project_id_or_number}"`.
     *
     * Generated from protobuf field <code>string name = 5;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The project on which to execute the request. The format is
     * `"projects/{project_id_or_number}"`.
     *
     * Generated from protobuf field <code>string name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * If this field is empty, all custom and
     * system-defined metric descriptors are returned.
     * Otherwise, the [filter](/monitoring/api/v3/filters)
     * specifies which metric descriptors are to be
     * returned. For example, the following filter matches all
     * [custom metrics](/monitoring/custom-metrics):
     *     metric.type = starts_with("custom.googleapis.com/")
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * If this field is empty, all custom and
     * system-defined metric descriptors are returned.
     * Otherwise, the [filter](/monitoring/api/v3/filters)
     * specifies which metric descriptors are to be
     * returned. For example, the following filter matches all
     * [custom metrics](/monitoring/custom-metrics):
     *     metric.type = starts_with("custom.googleapis.com/")
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * A positive number that is the maximum number of results to return.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * A positive number that is the maximum number of results to return.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * If this field is not empty then it must contain the `nextPageToken` value
     * returned by a previous call to this method.  Using this field causes the
     * method to return additional results from the previous method call.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * If this field is not empty then it must contain the `nextPageToken` value
     * returned by a previous call to this method.  Using this field causes the
     * method to return additional results from the previous method call.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}


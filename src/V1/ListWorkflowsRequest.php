<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/workflows/v1/workflows.proto

namespace Google\Cloud\Workflows\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the
 * [ListWorkflows][google.cloud.workflows.v1.Workflows.ListWorkflows]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.workflows.v1.ListWorkflowsRequest</code>
 */
class ListWorkflowsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Project and location from which the workflows should be listed.
     * Format: projects/{project}/locations/{location}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Maximum number of workflows to return per call. The service might return
     * fewer than this value even if not at the end of the collection. If a value
     * is not specified, a default value of 500 is used. The maximum permitted
     * value is 1000 and values greater than 1000 are coerced down to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * A page token, received from a previous `ListWorkflows` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListWorkflows` must
     * match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';
    /**
     * Filter to restrict results to specific workflows.
     * For details, see <a href="https://google.aip.dev/160"
     * class="external">AIP-160</a>.
     * For example, if you are using the Google APIs Explorer:
     * `state="SUCCEEDED"`
     * or
     * `createTime>"2023-08-01" AND state="FAILED"`
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     */
    private $filter = '';
    /**
     * Comma-separated list of fields that specify the order of the results.
     * Default sorting order for a field is ascending. To specify descending order
     * for a field, append a "desc" suffix.
     * If not specified, the results are returned in an unspecified order.
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     */
    private $order_by = '';

    /**
     * @param string $parent Required. Project and location from which the workflows should be listed.
     *                       Format: projects/{project}/locations/{location}
     *                       Please see {@see WorkflowsClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\Workflows\V1\ListWorkflowsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Project and location from which the workflows should be listed.
     *           Format: projects/{project}/locations/{location}
     *     @type int $page_size
     *           Maximum number of workflows to return per call. The service might return
     *           fewer than this value even if not at the end of the collection. If a value
     *           is not specified, a default value of 500 is used. The maximum permitted
     *           value is 1000 and values greater than 1000 are coerced down to 1000.
     *     @type string $page_token
     *           A page token, received from a previous `ListWorkflows` call.
     *           Provide this to retrieve the subsequent page.
     *           When paginating, all other parameters provided to `ListWorkflows` must
     *           match the call that provided the page token.
     *     @type string $filter
     *           Filter to restrict results to specific workflows.
     *           For details, see <a href="https://google.aip.dev/160"
     *           class="external">AIP-160</a>.
     *           For example, if you are using the Google APIs Explorer:
     *           `state="SUCCEEDED"`
     *           or
     *           `createTime>"2023-08-01" AND state="FAILED"`
     *     @type string $order_by
     *           Comma-separated list of fields that specify the order of the results.
     *           Default sorting order for a field is ascending. To specify descending order
     *           for a field, append a "desc" suffix.
     *           If not specified, the results are returned in an unspecified order.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Workflows\V1\Workflows::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Project and location from which the workflows should be listed.
     * Format: projects/{project}/locations/{location}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Project and location from which the workflows should be listed.
     * Format: projects/{project}/locations/{location}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Maximum number of workflows to return per call. The service might return
     * fewer than this value even if not at the end of the collection. If a value
     * is not specified, a default value of 500 is used. The maximum permitted
     * value is 1000 and values greater than 1000 are coerced down to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Maximum number of workflows to return per call. The service might return
     * fewer than this value even if not at the end of the collection. If a value
     * is not specified, a default value of 500 is used. The maximum permitted
     * value is 1000 and values greater than 1000 are coerced down to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
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
     * A page token, received from a previous `ListWorkflows` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListWorkflows` must
     * match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A page token, received from a previous `ListWorkflows` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListWorkflows` must
     * match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Filter to restrict results to specific workflows.
     * For details, see <a href="https://google.aip.dev/160"
     * class="external">AIP-160</a>.
     * For example, if you are using the Google APIs Explorer:
     * `state="SUCCEEDED"`
     * or
     * `createTime>"2023-08-01" AND state="FAILED"`
     *
     * Generated from protobuf field <code>string filter = 4;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Filter to restrict results to specific workflows.
     * For details, see <a href="https://google.aip.dev/160"
     * class="external">AIP-160</a>.
     * For example, if you are using the Google APIs Explorer:
     * `state="SUCCEEDED"`
     * or
     * `createTime>"2023-08-01" AND state="FAILED"`
     *
     * Generated from protobuf field <code>string filter = 4;</code>
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
     * Comma-separated list of fields that specify the order of the results.
     * Default sorting order for a field is ascending. To specify descending order
     * for a field, append a "desc" suffix.
     * If not specified, the results are returned in an unspecified order.
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Comma-separated list of fields that specify the order of the results.
     * Default sorting order for a field is ascending. To specify descending order
     * for a field, append a "desc" suffix.
     * If not specified, the results are returned in an unspecified order.
     *
     * Generated from protobuf field <code>string order_by = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

}


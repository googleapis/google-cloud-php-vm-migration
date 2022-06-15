<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmmigration/v1/vmmigration.proto

namespace Google\Cloud\VMMigration\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents migration resource error information that can be used with
 * google.rpc.Status message. MigrationError is used to present the user with
 * error information in migration operations.
 *
 * Generated from protobuf message <code>google.cloud.vmmigration.v1.MigrationError</code>
 */
class MigrationError extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The error code.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.MigrationError.ErrorCode code = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $code = 0;
    /**
     * Output only. The localized error message.
     *
     * Generated from protobuf field <code>.google.rpc.LocalizedMessage error_message = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $error_message = null;
    /**
     * Output only. Suggested action for solving the error.
     *
     * Generated from protobuf field <code>.google.rpc.LocalizedMessage action_item = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $action_item = null;
    /**
     * Output only. URL(s) pointing to additional information on handling the current error.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Help.Link help_links = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $help_links;
    /**
     * Output only. The time the error occurred.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp error_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $error_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $code
     *           Output only. The error code.
     *     @type \Google\Rpc\LocalizedMessage $error_message
     *           Output only. The localized error message.
     *     @type \Google\Rpc\LocalizedMessage $action_item
     *           Output only. Suggested action for solving the error.
     *     @type \Google\Rpc\Help\Link[]|\Google\Protobuf\Internal\RepeatedField $help_links
     *           Output only. URL(s) pointing to additional information on handling the current error.
     *     @type \Google\Protobuf\Timestamp $error_time
     *           Output only. The time the error occurred.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmmigration\V1\Vmmigration::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The error code.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.MigrationError.ErrorCode code = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Output only. The error code.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.MigrationError.ErrorCode code = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\VMMigration\V1\MigrationError\ErrorCode::class);
        $this->code = $var;

        return $this;
    }

    /**
     * Output only. The localized error message.
     *
     * Generated from protobuf field <code>.google.rpc.LocalizedMessage error_message = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Rpc\LocalizedMessage|null
     */
    public function getErrorMessage()
    {
        return $this->error_message;
    }

    public function hasErrorMessage()
    {
        return isset($this->error_message);
    }

    public function clearErrorMessage()
    {
        unset($this->error_message);
    }

    /**
     * Output only. The localized error message.
     *
     * Generated from protobuf field <code>.google.rpc.LocalizedMessage error_message = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Rpc\LocalizedMessage $var
     * @return $this
     */
    public function setErrorMessage($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\LocalizedMessage::class);
        $this->error_message = $var;

        return $this;
    }

    /**
     * Output only. Suggested action for solving the error.
     *
     * Generated from protobuf field <code>.google.rpc.LocalizedMessage action_item = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Rpc\LocalizedMessage|null
     */
    public function getActionItem()
    {
        return $this->action_item;
    }

    public function hasActionItem()
    {
        return isset($this->action_item);
    }

    public function clearActionItem()
    {
        unset($this->action_item);
    }

    /**
     * Output only. Suggested action for solving the error.
     *
     * Generated from protobuf field <code>.google.rpc.LocalizedMessage action_item = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Rpc\LocalizedMessage $var
     * @return $this
     */
    public function setActionItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\LocalizedMessage::class);
        $this->action_item = $var;

        return $this;
    }

    /**
     * Output only. URL(s) pointing to additional information on handling the current error.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Help.Link help_links = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHelpLinks()
    {
        return $this->help_links;
    }

    /**
     * Output only. URL(s) pointing to additional information on handling the current error.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Help.Link help_links = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Rpc\Help\Link[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHelpLinks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Rpc\Help\Link::class);
        $this->help_links = $arr;

        return $this;
    }

    /**
     * Output only. The time the error occurred.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp error_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getErrorTime()
    {
        return $this->error_time;
    }

    public function hasErrorTime()
    {
        return isset($this->error_time);
    }

    public function clearErrorTime()
    {
        unset($this->error_time);
    }

    /**
     * Output only. The time the error occurred.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp error_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setErrorTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->error_time = $var;

        return $this;
    }

}


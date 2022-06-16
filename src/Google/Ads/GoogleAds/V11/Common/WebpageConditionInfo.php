<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/common/criteria.proto

namespace Google\Ads\GoogleAds\V11\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Logical expression for targeting webpages of an advertiser's website.
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.common.WebpageConditionInfo</code>
 */
class WebpageConditionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Operand of webpage targeting condition.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.WebpageConditionOperandEnum.WebpageConditionOperand operand = 1;</code>
     */
    protected $operand = 0;
    /**
     * Operator of webpage targeting condition.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.WebpageConditionOperatorEnum.WebpageConditionOperator operator = 2;</code>
     */
    protected $operator = 0;
    /**
     * Argument of webpage targeting condition.
     *
     * Generated from protobuf field <code>optional string argument = 4;</code>
     */
    protected $argument = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $operand
     *           Operand of webpage targeting condition.
     *     @type int $operator
     *           Operator of webpage targeting condition.
     *     @type string $argument
     *           Argument of webpage targeting condition.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * Operand of webpage targeting condition.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.WebpageConditionOperandEnum.WebpageConditionOperand operand = 1;</code>
     * @return int
     */
    public function getOperand()
    {
        return $this->operand;
    }

    /**
     * Operand of webpage targeting condition.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.WebpageConditionOperandEnum.WebpageConditionOperand operand = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOperand($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V11\Enums\WebpageConditionOperandEnum\WebpageConditionOperand::class);
        $this->operand = $var;

        return $this;
    }

    /**
     * Operator of webpage targeting condition.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.WebpageConditionOperatorEnum.WebpageConditionOperator operator = 2;</code>
     * @return int
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Operator of webpage targeting condition.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.enums.WebpageConditionOperatorEnum.WebpageConditionOperator operator = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOperator($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V11\Enums\WebpageConditionOperatorEnum\WebpageConditionOperator::class);
        $this->operator = $var;

        return $this;
    }

    /**
     * Argument of webpage targeting condition.
     *
     * Generated from protobuf field <code>optional string argument = 4;</code>
     * @return string
     */
    public function getArgument()
    {
        return isset($this->argument) ? $this->argument : '';
    }

    public function hasArgument()
    {
        return isset($this->argument);
    }

    public function clearArgument()
    {
        unset($this->argument);
    }

    /**
     * Argument of webpage targeting condition.
     *
     * Generated from protobuf field <code>optional string argument = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setArgument($var)
    {
        GPBUtil::checkString($var, True);
        $this->argument = $var;

        return $this;
    }

}

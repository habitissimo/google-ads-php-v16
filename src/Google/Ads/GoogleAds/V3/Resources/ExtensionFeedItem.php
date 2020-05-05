<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/extension_feed_item.proto

namespace Google\Ads\GoogleAds\V3\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An extension feed item.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.resources.ExtensionFeedItem</code>
 */
class ExtensionFeedItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the extension feed item.
     * Extension feed item resource names have the form:
     * `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The ID of this feed item. Read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = null;
    /**
     * Output only. The extension type of the extension feed item.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.ExtensionTypeEnum.ExtensionType extension_type = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $extension_type = 0;
    /**
     * Start time in which this feed item is effective and can begin serving. The
     * time is in the customer's time zone.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 5;</code>
     */
    protected $start_date_time = null;
    /**
     * End time in which this feed item is no longer effective and will stop
     * serving. The time is in the customer's time zone.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date_time = 6;</code>
     */
    protected $end_date_time = null;
    /**
     * List of non-overlapping schedules specifying all time intervals
     * for which the feed item may serve. There can be a maximum of 6 schedules
     * per day.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v3.common.AdScheduleInfo ad_schedules = 16;</code>
     */
    private $ad_schedules;
    /**
     * The targeted device.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.FeedItemTargetDeviceEnum.FeedItemTargetDevice device = 17;</code>
     */
    protected $device = 0;
    /**
     * The targeted geo target constant.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue targeted_geo_target_constant = 20 [(.google.api.resource_reference) = {</code>
     */
    protected $targeted_geo_target_constant = null;
    /**
     * The targeted keyword.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.KeywordInfo targeted_keyword = 22;</code>
     */
    protected $targeted_keyword = null;
    /**
     * Output only. Status of the feed item.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.FeedItemStatusEnum.FeedItemStatus status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;
    protected $extension;
    protected $serving_resource_targeting;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the extension feed item.
     *           Extension feed item resource names have the form:
     *           `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     *     @type \Google\Protobuf\Int64Value $id
     *           Output only. The ID of this feed item. Read-only.
     *     @type int $extension_type
     *           Output only. The extension type of the extension feed item.
     *           This field is read-only.
     *     @type \Google\Protobuf\StringValue $start_date_time
     *           Start time in which this feed item is effective and can begin serving. The
     *           time is in the customer's time zone.
     *           The format is "YYYY-MM-DD HH:MM:SS".
     *           Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *     @type \Google\Protobuf\StringValue $end_date_time
     *           End time in which this feed item is no longer effective and will stop
     *           serving. The time is in the customer's time zone.
     *           The format is "YYYY-MM-DD HH:MM:SS".
     *           Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *     @type \Google\Ads\GoogleAds\V3\Common\AdScheduleInfo[]|\Google\Protobuf\Internal\RepeatedField $ad_schedules
     *           List of non-overlapping schedules specifying all time intervals
     *           for which the feed item may serve. There can be a maximum of 6 schedules
     *           per day.
     *     @type int $device
     *           The targeted device.
     *     @type \Google\Protobuf\StringValue $targeted_geo_target_constant
     *           The targeted geo target constant.
     *     @type \Google\Ads\GoogleAds\V3\Common\KeywordInfo $targeted_keyword
     *           The targeted keyword.
     *     @type int $status
     *           Output only. Status of the feed item.
     *           This field is read-only.
     *     @type \Google\Ads\GoogleAds\V3\Common\SitelinkFeedItem $sitelink_feed_item
     *           Sitelink extension.
     *     @type \Google\Ads\GoogleAds\V3\Common\StructuredSnippetFeedItem $structured_snippet_feed_item
     *           Structured snippet extension.
     *     @type \Google\Ads\GoogleAds\V3\Common\AppFeedItem $app_feed_item
     *           App extension.
     *     @type \Google\Ads\GoogleAds\V3\Common\CallFeedItem $call_feed_item
     *           Call extension.
     *     @type \Google\Ads\GoogleAds\V3\Common\CalloutFeedItem $callout_feed_item
     *           Callout extension.
     *     @type \Google\Ads\GoogleAds\V3\Common\TextMessageFeedItem $text_message_feed_item
     *           Text message extension.
     *     @type \Google\Ads\GoogleAds\V3\Common\PriceFeedItem $price_feed_item
     *           Price extension.
     *     @type \Google\Ads\GoogleAds\V3\Common\PromotionFeedItem $promotion_feed_item
     *           Promotion extension.
     *     @type \Google\Ads\GoogleAds\V3\Common\LocationFeedItem $location_feed_item
     *           Output only. Location extension. Locations are synced from a GMB account into a feed.
     *           This field is read-only.
     *     @type \Google\Ads\GoogleAds\V3\Common\AffiliateLocationFeedItem $affiliate_location_feed_item
     *           Output only. Affiliate location extension. Feed locations are populated by Google Ads
     *           based on a chain ID.
     *           This field is read-only.
     *     @type \Google\Ads\GoogleAds\V3\Common\HotelCalloutFeedItem $hotel_callout_feed_item
     *           Hotel Callout extension.
     *     @type \Google\Protobuf\StringValue $targeted_campaign
     *           The targeted campaign.
     *     @type \Google\Protobuf\StringValue $targeted_ad_group
     *           The targeted ad group.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Resources\ExtensionFeedItem::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the extension feed item.
     * Extension feed item resource names have the form:
     * `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the extension feed item.
     * Extension feed item resource names have the form:
     * `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. The ID of this feed item. Read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the unboxed value from <code>getId()</code>

     * Output only. The ID of this feed item. Read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getIdUnwrapped()
    {
        return $this->readWrapperValue("id");
    }

    /**
     * Output only. The ID of this feed item. Read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Output only. The ID of this feed item. Read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setIdUnwrapped($var)
    {
        $this->writeWrapperValue("id", $var);
        return $this;}

    /**
     * Output only. The extension type of the extension feed item.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.ExtensionTypeEnum.ExtensionType extension_type = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getExtensionType()
    {
        return $this->extension_type;
    }

    /**
     * Output only. The extension type of the extension feed item.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.ExtensionTypeEnum.ExtensionType extension_type = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setExtensionType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V3\Enums\ExtensionTypeEnum_ExtensionType::class);
        $this->extension_type = $var;

        return $this;
    }

    /**
     * Start time in which this feed item is effective and can begin serving. The
     * time is in the customer's time zone.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getStartDateTime()
    {
        return $this->start_date_time;
    }

    /**
     * Returns the unboxed value from <code>getStartDateTime()</code>

     * Start time in which this feed item is effective and can begin serving. The
     * time is in the customer's time zone.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 5;</code>
     * @return string|null
     */
    public function getStartDateTimeUnwrapped()
    {
        return $this->readWrapperValue("start_date_time");
    }

    /**
     * Start time in which this feed item is effective and can begin serving. The
     * time is in the customer's time zone.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setStartDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->start_date_time = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Start time in which this feed item is effective and can begin serving. The
     * time is in the customer's time zone.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 5;</code>
     * @param string|null $var
     * @return $this
     */
    public function setStartDateTimeUnwrapped($var)
    {
        $this->writeWrapperValue("start_date_time", $var);
        return $this;}

    /**
     * End time in which this feed item is no longer effective and will stop
     * serving. The time is in the customer's time zone.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date_time = 6;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getEndDateTime()
    {
        return $this->end_date_time;
    }

    /**
     * Returns the unboxed value from <code>getEndDateTime()</code>

     * End time in which this feed item is no longer effective and will stop
     * serving. The time is in the customer's time zone.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date_time = 6;</code>
     * @return string|null
     */
    public function getEndDateTimeUnwrapped()
    {
        return $this->readWrapperValue("end_date_time");
    }

    /**
     * End time in which this feed item is no longer effective and will stop
     * serving. The time is in the customer's time zone.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date_time = 6;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setEndDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->end_date_time = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * End time in which this feed item is no longer effective and will stop
     * serving. The time is in the customer's time zone.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date_time = 6;</code>
     * @param string|null $var
     * @return $this
     */
    public function setEndDateTimeUnwrapped($var)
    {
        $this->writeWrapperValue("end_date_time", $var);
        return $this;}

    /**
     * List of non-overlapping schedules specifying all time intervals
     * for which the feed item may serve. There can be a maximum of 6 schedules
     * per day.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v3.common.AdScheduleInfo ad_schedules = 16;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdSchedules()
    {
        return $this->ad_schedules;
    }

    /**
     * List of non-overlapping schedules specifying all time intervals
     * for which the feed item may serve. There can be a maximum of 6 schedules
     * per day.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v3.common.AdScheduleInfo ad_schedules = 16;</code>
     * @param \Google\Ads\GoogleAds\V3\Common\AdScheduleInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdSchedules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V3\Common\AdScheduleInfo::class);
        $this->ad_schedules = $arr;

        return $this;
    }

    /**
     * The targeted device.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.FeedItemTargetDeviceEnum.FeedItemTargetDevice device = 17;</code>
     * @return int
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * The targeted device.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.FeedItemTargetDeviceEnum.FeedItemTargetDevice device = 17;</code>
     * @param int $var
     * @return $this
     */
    public function setDevice($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V3\Enums\FeedItemTargetDeviceEnum_FeedItemTargetDevice::class);
        $this->device = $var;

        return $this;
    }

    /**
     * The targeted geo target constant.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue targeted_geo_target_constant = 20 [(.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTargetedGeoTargetConstant()
    {
        return $this->targeted_geo_target_constant;
    }

    /**
     * Returns the unboxed value from <code>getTargetedGeoTargetConstant()</code>

     * The targeted geo target constant.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue targeted_geo_target_constant = 20 [(.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getTargetedGeoTargetConstantUnwrapped()
    {
        return $this->readWrapperValue("targeted_geo_target_constant");
    }

    /**
     * The targeted geo target constant.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue targeted_geo_target_constant = 20 [(.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTargetedGeoTargetConstant($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->targeted_geo_target_constant = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The targeted geo target constant.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue targeted_geo_target_constant = 20 [(.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setTargetedGeoTargetConstantUnwrapped($var)
    {
        $this->writeWrapperValue("targeted_geo_target_constant", $var);
        return $this;}

    /**
     * The targeted keyword.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.KeywordInfo targeted_keyword = 22;</code>
     * @return \Google\Ads\GoogleAds\V3\Common\KeywordInfo
     */
    public function getTargetedKeyword()
    {
        return $this->targeted_keyword;
    }

    /**
     * The targeted keyword.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.KeywordInfo targeted_keyword = 22;</code>
     * @param \Google\Ads\GoogleAds\V3\Common\KeywordInfo $var
     * @return $this
     */
    public function setTargetedKeyword($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V3\Common\KeywordInfo::class);
        $this->targeted_keyword = $var;

        return $this;
    }

    /**
     * Output only. Status of the feed item.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.FeedItemStatusEnum.FeedItemStatus status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. Status of the feed item.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.FeedItemStatusEnum.FeedItemStatus status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V3\Enums\FeedItemStatusEnum_FeedItemStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Sitelink extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.SitelinkFeedItem sitelink_feed_item = 2;</code>
     * @return \Google\Ads\GoogleAds\V3\Common\SitelinkFeedItem
     */
    public function getSitelinkFeedItem()
    {
        return $this->readOneof(2);
    }

    /**
     * Sitelink extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.SitelinkFeedItem sitelink_feed_item = 2;</code>
     * @param \Google\Ads\GoogleAds\V3\Common\SitelinkFeedItem $var
     * @return $this
     */
    public function setSitelinkFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V3\Common\SitelinkFeedItem::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Structured snippet extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.StructuredSnippetFeedItem structured_snippet_feed_item = 3;</code>
     * @return \Google\Ads\GoogleAds\V3\Common\StructuredSnippetFeedItem
     */
    public function getStructuredSnippetFeedItem()
    {
        return $this->readOneof(3);
    }

    /**
     * Structured snippet extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.StructuredSnippetFeedItem structured_snippet_feed_item = 3;</code>
     * @param \Google\Ads\GoogleAds\V3\Common\StructuredSnippetFeedItem $var
     * @return $this
     */
    public function setStructuredSnippetFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V3\Common\StructuredSnippetFeedItem::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * App extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.AppFeedItem app_feed_item = 7;</code>
     * @return \Google\Ads\GoogleAds\V3\Common\AppFeedItem
     */
    public function getAppFeedItem()
    {
        return $this->readOneof(7);
    }

    /**
     * App extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.AppFeedItem app_feed_item = 7;</code>
     * @param \Google\Ads\GoogleAds\V3\Common\AppFeedItem $var
     * @return $this
     */
    public function setAppFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V3\Common\AppFeedItem::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Call extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.CallFeedItem call_feed_item = 8;</code>
     * @return \Google\Ads\GoogleAds\V3\Common\CallFeedItem
     */
    public function getCallFeedItem()
    {
        return $this->readOneof(8);
    }

    /**
     * Call extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.CallFeedItem call_feed_item = 8;</code>
     * @param \Google\Ads\GoogleAds\V3\Common\CallFeedItem $var
     * @return $this
     */
    public function setCallFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V3\Common\CallFeedItem::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Callout extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.CalloutFeedItem callout_feed_item = 9;</code>
     * @return \Google\Ads\GoogleAds\V3\Common\CalloutFeedItem
     */
    public function getCalloutFeedItem()
    {
        return $this->readOneof(9);
    }

    /**
     * Callout extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.CalloutFeedItem callout_feed_item = 9;</code>
     * @param \Google\Ads\GoogleAds\V3\Common\CalloutFeedItem $var
     * @return $this
     */
    public function setCalloutFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V3\Common\CalloutFeedItem::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Text message extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.TextMessageFeedItem text_message_feed_item = 10;</code>
     * @return \Google\Ads\GoogleAds\V3\Common\TextMessageFeedItem
     */
    public function getTextMessageFeedItem()
    {
        return $this->readOneof(10);
    }

    /**
     * Text message extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.TextMessageFeedItem text_message_feed_item = 10;</code>
     * @param \Google\Ads\GoogleAds\V3\Common\TextMessageFeedItem $var
     * @return $this
     */
    public function setTextMessageFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V3\Common\TextMessageFeedItem::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Price extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.PriceFeedItem price_feed_item = 11;</code>
     * @return \Google\Ads\GoogleAds\V3\Common\PriceFeedItem
     */
    public function getPriceFeedItem()
    {
        return $this->readOneof(11);
    }

    /**
     * Price extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.PriceFeedItem price_feed_item = 11;</code>
     * @param \Google\Ads\GoogleAds\V3\Common\PriceFeedItem $var
     * @return $this
     */
    public function setPriceFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V3\Common\PriceFeedItem::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Promotion extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.PromotionFeedItem promotion_feed_item = 12;</code>
     * @return \Google\Ads\GoogleAds\V3\Common\PromotionFeedItem
     */
    public function getPromotionFeedItem()
    {
        return $this->readOneof(12);
    }

    /**
     * Promotion extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.PromotionFeedItem promotion_feed_item = 12;</code>
     * @param \Google\Ads\GoogleAds\V3\Common\PromotionFeedItem $var
     * @return $this
     */
    public function setPromotionFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V3\Common\PromotionFeedItem::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Output only. Location extension. Locations are synced from a GMB account into a feed.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.LocationFeedItem location_feed_item = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V3\Common\LocationFeedItem
     */
    public function getLocationFeedItem()
    {
        return $this->readOneof(14);
    }

    /**
     * Output only. Location extension. Locations are synced from a GMB account into a feed.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.LocationFeedItem location_feed_item = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V3\Common\LocationFeedItem $var
     * @return $this
     */
    public function setLocationFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V3\Common\LocationFeedItem::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * Output only. Affiliate location extension. Feed locations are populated by Google Ads
     * based on a chain ID.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.AffiliateLocationFeedItem affiliate_location_feed_item = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V3\Common\AffiliateLocationFeedItem
     */
    public function getAffiliateLocationFeedItem()
    {
        return $this->readOneof(15);
    }

    /**
     * Output only. Affiliate location extension. Feed locations are populated by Google Ads
     * based on a chain ID.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.AffiliateLocationFeedItem affiliate_location_feed_item = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V3\Common\AffiliateLocationFeedItem $var
     * @return $this
     */
    public function setAffiliateLocationFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V3\Common\AffiliateLocationFeedItem::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * Hotel Callout extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.HotelCalloutFeedItem hotel_callout_feed_item = 23;</code>
     * @return \Google\Ads\GoogleAds\V3\Common\HotelCalloutFeedItem
     */
    public function getHotelCalloutFeedItem()
    {
        return $this->readOneof(23);
    }

    /**
     * Hotel Callout extension.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.common.HotelCalloutFeedItem hotel_callout_feed_item = 23;</code>
     * @param \Google\Ads\GoogleAds\V3\Common\HotelCalloutFeedItem $var
     * @return $this
     */
    public function setHotelCalloutFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V3\Common\HotelCalloutFeedItem::class);
        $this->writeOneof(23, $var);

        return $this;
    }

    /**
     * The targeted campaign.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue targeted_campaign = 18 [(.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTargetedCampaign()
    {
        return $this->readOneof(18);
    }

    /**
     * Returns the unboxed value from <code>getTargetedCampaign()</code>

     * The targeted campaign.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue targeted_campaign = 18 [(.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getTargetedCampaignUnwrapped()
    {
        return $this->readWrapperValue("targeted_campaign");
    }

    /**
     * The targeted campaign.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue targeted_campaign = 18 [(.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTargetedCampaign($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->writeOneof(18, $var);

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The targeted campaign.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue targeted_campaign = 18 [(.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setTargetedCampaignUnwrapped($var)
    {
        $this->writeWrapperValue("targeted_campaign", $var);
        return $this;}

    /**
     * The targeted ad group.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue targeted_ad_group = 19 [(.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTargetedAdGroup()
    {
        return $this->readOneof(19);
    }

    /**
     * Returns the unboxed value from <code>getTargetedAdGroup()</code>

     * The targeted ad group.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue targeted_ad_group = 19 [(.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getTargetedAdGroupUnwrapped()
    {
        return $this->readWrapperValue("targeted_ad_group");
    }

    /**
     * The targeted ad group.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue targeted_ad_group = 19 [(.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTargetedAdGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->writeOneof(19, $var);

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The targeted ad group.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue targeted_ad_group = 19 [(.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setTargetedAdGroupUnwrapped($var)
    {
        $this->writeWrapperValue("targeted_ad_group", $var);
        return $this;}

    /**
     * @return string
     */
    public function getExtension()
    {
        return $this->whichOneof("extension");
    }

    /**
     * @return string
     */
    public function getServingResourceTargeting()
    {
        return $this->whichOneof("serving_resource_targeting");
    }

}

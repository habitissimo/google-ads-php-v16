<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/resources/hotel_performance_view.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Resources;

class HotelPerformanceView
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
?google/ads/googleads/v10/resources/hotel_performance_view.proto"google.ads.googleads.v10.resourcesgoogle/api/field_behavior.protogoogle/api/resource.proto"�
HotelPerformanceViewL

-googleads.googleapis.com/HotelPerformanceView:`�A]
-googleads.googleapis.com/HotelPerformanceView,customers/{customer_id}/hotelPerformanceViewB�
&com.google.ads.googleads.v10.resourcesBHotelPerformanceViewProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v10/resources;resources�GAA�"Google.Ads.GoogleAds.V10.Resources�"Google\\Ads\\GoogleAds\\V10\\Resources�&Google::Ads::GoogleAds::V10::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/errors/campaign_feed_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V11\Errors;

class CampaignFeedError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
9google/ads/googleads/v11/errors/campaign_feed_error.protogoogle.ads.googleads.v11.errors"�
CampaignFeedErrorEnum"�
CampaignFeedError
UNSPECIFIED 
UNKNOWN,
(FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE"
CANNOT_CREATE_FOR_REMOVED_FEED0
,CANNOT_CREATE_ALREADY_EXISTING_CAMPAIGN_FEED\'
#CANNOT_MODIFY_REMOVED_CAMPAIGN_FEED
INVALID_PLACEHOLDER_TYPE,
(MISSING_FEEDMAPPING_FOR_PLACEHOLDER_TYPE&
"NO_EXISTING_LOCATION_CUSTOMER_FEED	B�
#com.google.ads.googleads.v11.errorsBCampaignFeedErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v11/errors;errors�GAA�Google.Ads.GoogleAds.V11.Errors�Google\\Ads\\GoogleAds\\V11\\Errors�#Google::Ads::GoogleAds::V11::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}


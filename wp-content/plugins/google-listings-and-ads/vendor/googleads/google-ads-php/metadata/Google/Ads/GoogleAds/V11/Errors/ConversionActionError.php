<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/errors/conversion_action_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V11\Errors;

class ConversionActionError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
=google/ads/googleads/v11/errors/conversion_action_error.protogoogle.ads.googleads.v11.errors"�
ConversionActionErrorEnum"�
ConversionActionError
UNSPECIFIED 
UNKNOWN
DUPLICATE_NAME
DUPLICATE_APP_ID7
3TWO_CONVERSION_ACTIONS_BIDDING_ON_SAME_APP_DOWNLOAD1
-BIDDING_ON_SAME_APP_DOWNLOAD_AS_GLOBAL_ACTION)
%DATA_DRIVEN_MODEL_WAS_NEVER_GENERATED
DATA_DRIVEN_MODEL_EXPIRED
DATA_DRIVEN_MODEL_STALE
DATA_DRIVEN_MODEL_UNKNOWN	
CREATION_NOT_SUPPORTED

UPDATE_NOT_SUPPORTEDB�
#com.google.ads.googleads.v11.errorsBConversionActionErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v11/errors;errors�GAA�Google.Ads.GoogleAds.V11.Errors�Google\\Ads\\GoogleAds\\V11\\Errors�#Google::Ads::GoogleAds::V11::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}


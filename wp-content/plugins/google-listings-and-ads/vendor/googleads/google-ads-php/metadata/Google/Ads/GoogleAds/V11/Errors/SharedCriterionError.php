<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/errors/shared_criterion_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V11\Errors;

class SharedCriterionError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
<google/ads/googleads/v11/errors/shared_criterion_error.protogoogle.ads.googleads.v11.errors"�
SharedCriterionErrorEnum"h
SharedCriterionError
UNSPECIFIED 
UNKNOWN2
.CRITERION_TYPE_NOT_ALLOWED_FOR_SHARED_SET_TYPEB�
#com.google.ads.googleads.v11.errorsBSharedCriterionErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v11/errors;errors�GAA�Google.Ads.GoogleAds.V11.Errors�Google\\Ads\\GoogleAds\\V11\\Errors�#Google::Ads::GoogleAds::V11::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/errors/asset_group_asset_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V11\Errors;

class AssetGroupAssetError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
=google/ads/googleads/v11/errors/asset_group_asset_error.protogoogle.ads.googleads.v11.errors"�
AssetGroupAssetErrorEnum"�
AssetGroupAssetError
UNSPECIFIED 
UNKNOWN
DUPLICATE_RESOURCE.
*EXPANDABLE_TAGS_NOT_ALLOWED_IN_DESCRIPTION
AD_CUSTOMIZER_NOT_SUPPORTEDB�
#com.google.ads.googleads.v11.errorsBAssetGroupAssetErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v11/errors;errors�GAA�Google.Ads.GoogleAds.V11.Errors�Google\\Ads\\GoogleAds\\V11\\Errors�#Google::Ads::GoogleAds::V11::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}


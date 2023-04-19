<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/errors/request_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V11\Errors;

class RequestError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�	
3google/ads/googleads/v11/errors/request_error.protogoogle.ads.googleads.v11.errors"�
RequestErrorEnum"�
RequestError
UNSPECIFIED 
UNKNOWN
RESOURCE_NAME_MISSING
RESOURCE_NAME_MALFORMED
BAD_RESOURCE_ID
INVALID_CUSTOMER_ID
OPERATION_REQUIRED
RESOURCE_NOT_FOUND
INVALID_PAGE_TOKEN
EXPIRED_PAGE_TOKEN
INVALID_PAGE_SIZE
REQUIRED_FIELD_MISSING	
IMMUTABLE_FIELD
TOO_MANY_MUTATE_OPERATIONS)
%CANNOT_BE_EXECUTED_BY_MANAGER_ACCOUNT
CANNOT_MODIFY_FOREIGN_FIELD
INVALID_ENUM_VALUE%
!DEVELOPER_TOKEN_PARAMETER_MISSING\'
#LOGIN_CUSTOMER_ID_PARAMETER_MISSING(
$VALIDATE_ONLY_REQUEST_HAS_PAGE_TOKEN9
5CANNOT_RETURN_SUMMARY_ROW_FOR_REQUEST_WITHOUT_METRICS8
4CANNOT_RETURN_SUMMARY_ROW_FOR_VALIDATE_ONLY_REQUESTS)
%INCONSISTENT_RETURN_SUMMARY_ROW_VALUE0
,TOTAL_RESULTS_COUNT_NOT_ORIGINALLY_REQUESTED 
RPC_DEADLINE_TOO_SHORT!B�
#com.google.ads.googleads.v11.errorsBRequestErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v11/errors;errors�GAA�Google.Ads.GoogleAds.V11.Errors�Google\\Ads\\GoogleAds\\V11\\Errors�#Google::Ads::GoogleAds::V11::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}


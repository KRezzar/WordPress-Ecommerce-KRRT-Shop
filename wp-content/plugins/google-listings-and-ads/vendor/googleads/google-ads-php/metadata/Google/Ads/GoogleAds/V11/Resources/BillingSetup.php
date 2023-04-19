<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/resources/billing_setup.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V11\Resources;

class BillingSetup
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
9google/ads/googleads/v11/enums/billing_setup_status.protogoogle.ads.googleads.v11.enums"�
BillingSetupStatusEnum"o
BillingSetupStatus
UNSPECIFIED 
UNKNOWN
PENDING
APPROVED_HELD
APPROVED
	CANCELLEDB�
"com.google.ads.googleads.v11.enumsBBillingSetupStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
.google/ads/googleads/v11/enums/time_type.protogoogle.ads.googleads.v11.enums"N
TimeTypeEnum">
TimeType
UNSPECIFIED 
UNKNOWN
NOW
FOREVERB�
"com.google.ads.googleads.v11.enumsBTimeTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v11/enums;enums�GAA�Google.Ads.GoogleAds.V11.Enums�Google\\Ads\\GoogleAds\\V11\\Enums�"Google::Ads::GoogleAds::V11::Enumsbproto3
�
6google/ads/googleads/v11/resources/billing_setup.proto"google.ads.googleads.v11.resources.google/ads/googleads/v11/enums/time_type.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
BillingSetupD
resource_name (	B-�A�A\'
%googleads.googleapis.com/BillingSetup
id (B�AH�^
status (2I.google.ads.googleads.v11.enums.BillingSetupStatusEnum.BillingSetupStatusB�AO
payments_account (	B0�A�A*
(googleads.googleapis.com/PaymentsAccountH�h
payments_account_info (2D.google.ads.googleads.v11.resources.BillingSetup.PaymentsAccountInfoB�A
start_date_time (	B�AH U
start_time_type
 (25.google.ads.googleads.v11.enums.TimeTypeEnum.TimeTypeB�AH 
end_date_time (	B�AHS
end_time_type (25.google.ads.googleads.v11.enums.TimeTypeEnum.TimeTypeB�AH�
PaymentsAccountInfo%
payments_account_id (	B�AH �\'
payments_account_name (	B�AH�%
payments_profile_id (	B�AH�\'
payments_profile_name	 (	B�AH�/
secondary_payments_profile_id
 (	B�AH�B
_payments_account_idB
_payments_account_nameB
_payments_profile_idB
_payments_profile_nameB 
_secondary_payments_profile_id:d�Aa
%googleads.googleapis.com/BillingSetup8customers/{customer_id}/billingSetups/{billing_setup_id}B

start_timeB

end_timeB
_idB
_payments_accountB�
&com.google.ads.googleads.v11.resourcesBBillingSetupProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v11/resources;resources�GAA�"Google.Ads.GoogleAds.V11.Resources�"Google\\Ads\\GoogleAds\\V11\\Resources�&Google::Ads::GoogleAds::V11::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/errors/account_budget_proposal_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V11\Errors;

class AccountBudgetProposalError
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

Cgoogle/ads/googleads/v11/errors/account_budget_proposal_error.protogoogle.ads.googleads.v11.errors"�
AccountBudgetProposalErrorEnum"�
AccountBudgetProposalError
UNSPECIFIED 
UNKNOWN
FIELD_MASK_NOT_ALLOWED
IMMUTABLE_FIELD
REQUIRED_FIELD_MISSING#
CANNOT_CANCEL_APPROVED_PROPOSAL#
CANNOT_REMOVE_UNAPPROVED_BUDGET 
CANNOT_REMOVE_RUNNING_BUDGET 
CANNOT_END_UNAPPROVED_BUDGET
CANNOT_END_INACTIVE_BUDGET	
BUDGET_NAME_REQUIRED

CANNOT_UPDATE_OLD_BUDGET
CANNOT_END_IN_PAST
CANNOT_EXTEND_END_TIME"
PURCHASE_ORDER_NUMBER_REQUIRED"
PENDING_UPDATE_PROPOSAL_EXISTS=
9MULTIPLE_BUDGETS_NOT_ALLOWED_FOR_UNAPPROVED_BILLING_SETUP/
+CANNOT_UPDATE_START_TIME_FOR_STARTED_BUDGET6
2SPENDING_LIMIT_LOWER_THAN_ACCRUED_COST_NOT_ALLOWED
UPDATE_IS_NO_OP#
END_TIME_MUST_FOLLOW_START_TIME5
1BUDGET_DATE_RANGE_INCOMPATIBLE_WITH_BILLING_SETUP
NOT_AUTHORIZED
INVALID_BILLING_SETUP
OVERLAPS_EXISTING_BUDGET$
 CANNOT_CREATE_BUDGET_THROUGH_APIB�
#com.google.ads.googleads.v11.errorsBAccountBudgetProposalErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v11/errors;errors�GAA�Google.Ads.GoogleAds.V11.Errors�Google\\Ads\\GoogleAds\\V11\\Errors�#Google::Ads::GoogleAds::V11::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}


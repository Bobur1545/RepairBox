<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * The type of discount the reward tier offers. DEPRECATED at version 2020-12-16. Discount details
 * are now defined using a catalog pricing rule and other catalog objects. For more information, see
 * [Get discount details for the reward](https://developer.squareup.com/docs/loyalty-api/overview#get-
 * discount-details).
 */
class LoyaltyProgramRewardDefinitionType
{
    /**
     * The fixed amount discounted.
     */
    public const FIXED_AMOUNT = 'FIXED_AMOUNT';

    /**
     * The fixed percentage discounted.
     */
    public const FIXED_PERCENTAGE = 'FIXED_PERCENTAGE';
}

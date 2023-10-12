<?php

declare(strict_types=1);

namespace Square\Models;

class RenewTokenResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $accessToken;

    /**
     * @var string|null
     */
    private $tokenType;

    /**
     * @var string|null
     */
    private $expiresAt;

    /**
     * @var string|null
     */
    private $merchantId;

    /**
     * @var string|null
     */
    private $subscriptionId;

    /**
     * @var string|null
     */
    private $planId;

    /**
     * Returns Access Token.
     *
     * The renewed access token.
     * This value might be different from the `access_token` you provided in your request.
     * You provide this token in a header with every request to Connect API endpoints.
     * See [Request and response headers](https://developer.squareup.
     * com/docs/api/connect/v2/#requestandresponseheaders) for the format of this header.
     */
    public function getAccessToken(): ?string
    {
        return $this->accessToken;
    }

    /**
     * Sets Access Token.
     *
     * The renewed access token.
     * This value might be different from the `access_token` you provided in your request.
     * You provide this token in a header with every request to Connect API endpoints.
     * See [Request and response headers](https://developer.squareup.
     * com/docs/api/connect/v2/#requestandresponseheaders) for the format of this header.
     *
     * @maps access_token
     */
    public function setAccessToken(?string $accessToken): void
    {
        $this->accessToken = $accessToken;
    }

    /**
     * Returns Token Type.
     *
     * This value is always _bearer_.
     */
    public function getTokenType(): ?string
    {
        return $this->tokenType;
    }

    /**
     * Sets Token Type.
     *
     * This value is always _bearer_.
     *
     * @maps token_type
     */
    public function setTokenType(?string $tokenType): void
    {
        $this->tokenType = $tokenType;
    }

    /**
     * Returns Expires At.
     *
     * The date when access_token expires, in [ISO 8601](http://www.iso.org/iso/home/standards/iso8601.htm)
     * format.
     */
    public function getExpiresAt(): ?string
    {
        return $this->expiresAt;
    }

    /**
     * Sets Expires At.
     *
     * The date when access_token expires, in [ISO 8601](http://www.iso.org/iso/home/standards/iso8601.htm)
     * format.
     *
     * @maps expires_at
     */
    public function setExpiresAt(?string $expiresAt): void
    {
        $this->expiresAt = $expiresAt;
    }

    /**
     * Returns Merchant Id.
     *
     * The ID of the authorizing merchant's business.
     */
    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }

    /**
     * Sets Merchant Id.
     *
     * The ID of the authorizing merchant's business.
     *
     * @maps merchant_id
     */
    public function setMerchantId(?string $merchantId): void
    {
        $this->merchantId = $merchantId;
    }

    /**
     * Returns Subscription Id.
     *
     * __LEGACY FIELD__. The ID of the merchant subscription associated with
     * the authorization. Only present if the merchant signed up for a subscription
     * during authorization..
     */
    public function getSubscriptionId(): ?string
    {
        return $this->subscriptionId;
    }

    /**
     * Sets Subscription Id.
     *
     * __LEGACY FIELD__. The ID of the merchant subscription associated with
     * the authorization. Only present if the merchant signed up for a subscription
     * during authorization..
     *
     * @maps subscription_id
     */
    public function setSubscriptionId(?string $subscriptionId): void
    {
        $this->subscriptionId = $subscriptionId;
    }

    /**
     * Returns Plan Id.
     *
     * __LEGACY FIELD__. The ID of the subscription plan the merchant signed
     * up for. Only present if the merchant signed up for a subscription during
     * authorization.
     */
    public function getPlanId(): ?string
    {
        return $this->planId;
    }

    /**
     * Sets Plan Id.
     *
     * __LEGACY FIELD__. The ID of the subscription plan the merchant signed
     * up for. Only present if the merchant signed up for a subscription during
     * authorization.
     *
     * @maps plan_id
     */
    public function setPlanId(?string $planId): void
    {
        $this->planId = $planId;
    }

    /**
     * Encode this object to JSON
     *
     * @return mixed
     */
    public function jsonSerialize()
    {
        $json = [];
        if (isset($this->accessToken)) {
            $json['access_token']    = $this->accessToken;
        }
        if (isset($this->tokenType)) {
            $json['token_type']      = $this->tokenType;
        }
        if (isset($this->expiresAt)) {
            $json['expires_at']      = $this->expiresAt;
        }
        if (isset($this->merchantId)) {
            $json['merchant_id']     = $this->merchantId;
        }
        if (isset($this->subscriptionId)) {
            $json['subscription_id'] = $this->subscriptionId;
        }
        if (isset($this->planId)) {
            $json['plan_id']         = $this->planId;
        }

        return array_filter($json, function ($val) {
            return $val !== null;
        });
    }
}

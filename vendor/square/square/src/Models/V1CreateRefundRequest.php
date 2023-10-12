<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * V1CreateRefundRequest
 */
class V1CreateRefundRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $paymentId;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $reason;

    /**
     * @var V1Money|null
     */
    private $refundedMoney;

    /**
     * @var string|null
     */
    private $requestIdempotenceKey;

    /**
     * @param string $paymentId
     * @param string $type
     * @param string $reason
     */
    public function __construct(string $paymentId, string $type, string $reason)
    {
        $this->paymentId = $paymentId;
        $this->type = $type;
        $this->reason = $reason;
    }

    /**
     * Returns Payment Id.
     *
     * The ID of the payment to refund. If you are creating a `PARTIAL`
     * refund for a split tender payment, instead provide the id of the
     * particular tender you want to refund.
     */
    public function getPaymentId(): string
    {
        return $this->paymentId;
    }

    /**
     * Sets Payment Id.
     *
     * The ID of the payment to refund. If you are creating a `PARTIAL`
     * refund for a split tender payment, instead provide the id of the
     * particular tender you want to refund.
     *
     * @required
     * @maps payment_id
     */
    public function setPaymentId(string $paymentId): void
    {
        $this->paymentId = $paymentId;
    }

    /**
     * Returns Type.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     *
     * @required
     * @maps type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Reason.
     *
     * The reason for the refund.
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * Sets Reason.
     *
     * The reason for the refund.
     *
     * @required
     * @maps reason
     */
    public function setReason(string $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * Returns Refunded Money.
     */
    public function getRefundedMoney(): ?V1Money
    {
        return $this->refundedMoney;
    }

    /**
     * Sets Refunded Money.
     *
     * @maps refunded_money
     */
    public function setRefundedMoney(?V1Money $refundedMoney): void
    {
        $this->refundedMoney = $refundedMoney;
    }

    /**
     * Returns Request Idempotence Key.
     *
     * An optional key to ensure idempotence if you issue the same PARTIAL refund request more than once.
     */
    public function getRequestIdempotenceKey(): ?string
    {
        return $this->requestIdempotenceKey;
    }

    /**
     * Sets Request Idempotence Key.
     *
     * An optional key to ensure idempotence if you issue the same PARTIAL refund request more than once.
     *
     * @maps request_idempotence_key
     */
    public function setRequestIdempotenceKey(?string $requestIdempotenceKey): void
    {
        $this->requestIdempotenceKey = $requestIdempotenceKey;
    }

    /**
     * Encode this object to JSON
     *
     * @return mixed
     */
    public function jsonSerialize()
    {
        $json = [];
        $json['payment_id']                  = $this->paymentId;
        $json['type']                        = $this->type;
        $json['reason']                      = $this->reason;
        if (isset($this->refundedMoney)) {
            $json['refunded_money']          = $this->refundedMoney;
        }
        if (isset($this->requestIdempotenceKey)) {
            $json['request_idempotence_key'] = $this->requestIdempotenceKey;
        }

        return array_filter($json, function ($val) {
            return $val !== null;
        });
    }
}

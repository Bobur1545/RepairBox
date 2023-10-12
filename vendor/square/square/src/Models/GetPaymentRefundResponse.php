<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Defines the response returned by [GetRefund]($e/Refunds/GetPaymentRefund).
 *
 * Note: If there are errors processing the request, the refund field might not be
 * present or it might be present in a FAILED state.
 */
class GetPaymentRefundResponse implements \JsonSerializable
{
    /**
     * @var Error[]|null
     */
    private $errors;

    /**
     * @var PaymentRefund|null
     */
    private $refund;

    /**
     * Returns Errors.
     *
     * Information about errors encountered during the request.
     *
     * @return Error[]|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     *
     * Information about errors encountered during the request.
     *
     * @maps errors
     *
     * @param Error[]|null $errors
     */
    public function setErrors(?array $errors): void
    {
        $this->errors = $errors;
    }

    /**
     * Returns Refund.
     *
     * Represents a refund of a payment made using Square. Contains information about
     * the original payment and the amount of money refunded.
     */
    public function getRefund(): ?PaymentRefund
    {
        return $this->refund;
    }

    /**
     * Sets Refund.
     *
     * Represents a refund of a payment made using Square. Contains information about
     * the original payment and the amount of money refunded.
     *
     * @maps refund
     */
    public function setRefund(?PaymentRefund $refund): void
    {
        $this->refund = $refund;
    }

    /**
     * Encode this object to JSON
     *
     * @return mixed
     */
    public function jsonSerialize()
    {
        $json = [];
        if (isset($this->errors)) {
            $json['errors'] = $this->errors;
        }
        if (isset($this->refund)) {
            $json['refund'] = $this->refund;
        }

        return array_filter($json, function ($val) {
            return $val !== null;
        });
    }
}

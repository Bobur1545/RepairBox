<?php

declare(strict_types=1);

namespace Square\Models;

class CreateTerminalCheckoutRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $idempotencyKey;

    /**
     * @var TerminalCheckout
     */
    private $checkout;

    /**
     * @param string $idempotencyKey
     * @param TerminalCheckout $checkout
     */
    public function __construct(string $idempotencyKey, TerminalCheckout $checkout)
    {
        $this->idempotencyKey = $idempotencyKey;
        $this->checkout = $checkout;
    }

    /**
     * Returns Idempotency Key.
     *
     * A unique string that identifies this `CreateCheckout` request. Keys can be any valid string but
     * must be unique for every `CreateCheckout` request.
     *
     * See [Idempotency keys](https://developer.squareup.com/docs/basics/api101/idempotency) for more
     * information.
     */
    public function getIdempotencyKey(): string
    {
        return $this->idempotencyKey;
    }

    /**
     * Sets Idempotency Key.
     *
     * A unique string that identifies this `CreateCheckout` request. Keys can be any valid string but
     * must be unique for every `CreateCheckout` request.
     *
     * See [Idempotency keys](https://developer.squareup.com/docs/basics/api101/idempotency) for more
     * information.
     *
     * @required
     * @maps idempotency_key
     */
    public function setIdempotencyKey(string $idempotencyKey): void
    {
        $this->idempotencyKey = $idempotencyKey;
    }

    /**
     * Returns Checkout.
     */
    public function getCheckout(): TerminalCheckout
    {
        return $this->checkout;
    }

    /**
     * Sets Checkout.
     *
     * @required
     * @maps checkout
     */
    public function setCheckout(TerminalCheckout $checkout): void
    {
        $this->checkout = $checkout;
    }

    /**
     * Encode this object to JSON
     *
     * @return mixed
     */
    public function jsonSerialize()
    {
        $json = [];
        $json['idempotency_key'] = $this->idempotencyKey;
        $json['checkout']        = $this->checkout;

        return array_filter($json, function ($val) {
            return $val !== null;
        });
    }
}

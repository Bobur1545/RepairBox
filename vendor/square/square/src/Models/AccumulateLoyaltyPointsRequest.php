<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * A request to accumulate points for a purchase.
 */
class AccumulateLoyaltyPointsRequest implements \JsonSerializable
{
    /**
     * @var LoyaltyEventAccumulatePoints
     */
    private $accumulatePoints;

    /**
     * @var string
     */
    private $idempotencyKey;

    /**
     * @var string
     */
    private $locationId;

    /**
     * @param LoyaltyEventAccumulatePoints $accumulatePoints
     * @param string $idempotencyKey
     * @param string $locationId
     */
    public function __construct(
        LoyaltyEventAccumulatePoints $accumulatePoints,
        string $idempotencyKey,
        string $locationId
    ) {
        $this->accumulatePoints = $accumulatePoints;
        $this->idempotencyKey = $idempotencyKey;
        $this->locationId = $locationId;
    }

    /**
     * Returns Accumulate Points.
     *
     * Provides metadata when the event `type` is `ACCUMULATE_POINTS`.
     */
    public function getAccumulatePoints(): LoyaltyEventAccumulatePoints
    {
        return $this->accumulatePoints;
    }

    /**
     * Sets Accumulate Points.
     *
     * Provides metadata when the event `type` is `ACCUMULATE_POINTS`.
     *
     * @required
     * @maps accumulate_points
     */
    public function setAccumulatePoints(LoyaltyEventAccumulatePoints $accumulatePoints): void
    {
        $this->accumulatePoints = $accumulatePoints;
    }

    /**
     * Returns Idempotency Key.
     *
     * A unique string that identifies the `AccumulateLoyaltyPoints` request.
     * Keys can be any valid string but must be unique for every request.
     */
    public function getIdempotencyKey(): string
    {
        return $this->idempotencyKey;
    }

    /**
     * Sets Idempotency Key.
     *
     * A unique string that identifies the `AccumulateLoyaltyPoints` request.
     * Keys can be any valid string but must be unique for every request.
     *
     * @required
     * @maps idempotency_key
     */
    public function setIdempotencyKey(string $idempotencyKey): void
    {
        $this->idempotencyKey = $idempotencyKey;
    }

    /**
     * Returns Location Id.
     *
     * The [location]($m/Location) where the purchase was made.
     */
    public function getLocationId(): string
    {
        return $this->locationId;
    }

    /**
     * Sets Location Id.
     *
     * The [location]($m/Location) where the purchase was made.
     *
     * @required
     * @maps location_id
     */
    public function setLocationId(string $locationId): void
    {
        $this->locationId = $locationId;
    }

    /**
     * Encode this object to JSON
     *
     * @return mixed
     */
    public function jsonSerialize()
    {
        $json = [];
        $json['accumulate_points'] = $this->accumulatePoints;
        $json['idempotency_key']   = $this->idempotencyKey;
        $json['location_id']       = $this->locationId;

        return array_filter($json, function ($val) {
            return $val !== null;
        });
    }
}

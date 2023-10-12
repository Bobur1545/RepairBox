<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Provides metadata when the event `type` is `ADJUST_POINTS`.
 */
class LoyaltyEventAdjustPoints implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $loyaltyProgramId;

    /**
     * @var int
     */
    private $points;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * @param int $points
     */
    public function __construct(int $points)
    {
        $this->points = $points;
    }

    /**
     * Returns Loyalty Program Id.
     *
     * The Square-assigned ID of the [loyalty program]($m/LoyaltyProgram).
     */
    public function getLoyaltyProgramId(): ?string
    {
        return $this->loyaltyProgramId;
    }

    /**
     * Sets Loyalty Program Id.
     *
     * The Square-assigned ID of the [loyalty program]($m/LoyaltyProgram).
     *
     * @maps loyalty_program_id
     */
    public function setLoyaltyProgramId(?string $loyaltyProgramId): void
    {
        $this->loyaltyProgramId = $loyaltyProgramId;
    }

    /**
     * Returns Points.
     *
     * The number of points added or removed.
     */
    public function getPoints(): int
    {
        return $this->points;
    }

    /**
     * Sets Points.
     *
     * The number of points added or removed.
     *
     * @required
     * @maps points
     */
    public function setPoints(int $points): void
    {
        $this->points = $points;
    }

    /**
     * Returns Reason.
     *
     * The reason for the adjustment of points.
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * Sets Reason.
     *
     * The reason for the adjustment of points.
     *
     * @maps reason
     */
    public function setReason(?string $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * Encode this object to JSON
     *
     * @return mixed
     */
    public function jsonSerialize()
    {
        $json = [];
        if (isset($this->loyaltyProgramId)) {
            $json['loyalty_program_id'] = $this->loyaltyProgramId;
        }
        $json['points']                 = $this->points;
        if (isset($this->reason)) {
            $json['reason']             = $this->reason;
        }

        return array_filter($json, function ($val) {
            return $val !== null;
        });
    }
}

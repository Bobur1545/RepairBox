<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Provides metadata when the event `type` is `DELETE_REWARD`.
 */
class LoyaltyEventDeleteReward implements \JsonSerializable
{
    /**
     * @var string
     */
    private $loyaltyProgramId;

    /**
     * @var string|null
     */
    private $rewardId;

    /**
     * @var int
     */
    private $points;

    /**
     * @param string $loyaltyProgramId
     * @param int $points
     */
    public function __construct(string $loyaltyProgramId, int $points)
    {
        $this->loyaltyProgramId = $loyaltyProgramId;
        $this->points = $points;
    }

    /**
     * Returns Loyalty Program Id.
     *
     * The ID of the [loyalty program]($m/LoyaltyProgram).
     */
    public function getLoyaltyProgramId(): string
    {
        return $this->loyaltyProgramId;
    }

    /**
     * Sets Loyalty Program Id.
     *
     * The ID of the [loyalty program]($m/LoyaltyProgram).
     *
     * @required
     * @maps loyalty_program_id
     */
    public function setLoyaltyProgramId(string $loyaltyProgramId): void
    {
        $this->loyaltyProgramId = $loyaltyProgramId;
    }

    /**
     * Returns Reward Id.
     *
     * The ID of the deleted [loyalty reward]($m/LoyaltyReward).
     * This field is returned only if the event source is `LOYALTY_API`.
     */
    public function getRewardId(): ?string
    {
        return $this->rewardId;
    }

    /**
     * Sets Reward Id.
     *
     * The ID of the deleted [loyalty reward]($m/LoyaltyReward).
     * This field is returned only if the event source is `LOYALTY_API`.
     *
     * @maps reward_id
     */
    public function setRewardId(?string $rewardId): void
    {
        $this->rewardId = $rewardId;
    }

    /**
     * Returns Points.
     *
     * The number of points returned to the loyalty account.
     */
    public function getPoints(): int
    {
        return $this->points;
    }

    /**
     * Sets Points.
     *
     * The number of points returned to the loyalty account.
     *
     * @required
     * @maps points
     */
    public function setPoints(int $points): void
    {
        $this->points = $points;
    }

    /**
     * Encode this object to JSON
     *
     * @return mixed
     */
    public function jsonSerialize()
    {
        $json = [];
        $json['loyalty_program_id'] = $this->loyaltyProgramId;
        if (isset($this->rewardId)) {
            $json['reward_id']      = $this->rewardId;
        }
        $json['points']             = $this->points;

        return array_filter($json, function ($val) {
            return $val !== null;
        });
    }
}

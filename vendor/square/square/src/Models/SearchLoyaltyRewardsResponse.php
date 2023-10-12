<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * A response that includes the loyalty rewards satisfying the search criteria.
 */
class SearchLoyaltyRewardsResponse implements \JsonSerializable
{
    /**
     * @var Error[]|null
     */
    private $errors;

    /**
     * @var LoyaltyReward[]|null
     */
    private $rewards;

    /**
     * @var string|null
     */
    private $cursor;

    /**
     * Returns Errors.
     *
     * Any errors that occurred during the request.
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
     * Any errors that occurred during the request.
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
     * Returns Rewards.
     *
     * The loyalty rewards that satisfy the search criteria.
     * These are returned in descending order by `updated_at`.
     *
     * @return LoyaltyReward[]|null
     */
    public function getRewards(): ?array
    {
        return $this->rewards;
    }

    /**
     * Sets Rewards.
     *
     * The loyalty rewards that satisfy the search criteria.
     * These are returned in descending order by `updated_at`.
     *
     * @maps rewards
     *
     * @param LoyaltyReward[]|null $rewards
     */
    public function setRewards(?array $rewards): void
    {
        $this->rewards = $rewards;
    }

    /**
     * Returns Cursor.
     *
     * The pagination cursor to be used in a subsequent
     * request. If empty, this is the final response.
     */
    public function getCursor(): ?string
    {
        return $this->cursor;
    }

    /**
     * Sets Cursor.
     *
     * The pagination cursor to be used in a subsequent
     * request. If empty, this is the final response.
     *
     * @maps cursor
     */
    public function setCursor(?string $cursor): void
    {
        $this->cursor = $cursor;
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
            $json['errors']  = $this->errors;
        }
        if (isset($this->rewards)) {
            $json['rewards'] = $this->rewards;
        }
        if (isset($this->cursor)) {
            $json['cursor']  = $this->cursor;
        }

        return array_filter($json, function ($val) {
            return $val !== null;
        });
    }
}

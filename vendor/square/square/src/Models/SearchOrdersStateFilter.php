<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Filter by the current order `state`.
 */
class SearchOrdersStateFilter implements \JsonSerializable
{
    /**
     * @var string[]
     */
    private $states;

    /**
     * @param string[] $states
     */
    public function __construct(array $states)
    {
        $this->states = $states;
    }

    /**
     * Returns States.
     *
     * States to filter for.
     * See [OrderState](#type-orderstate) for possible values
     *
     * @return string[]
     */
    public function getStates(): array
    {
        return $this->states;
    }

    /**
     * Sets States.
     *
     * States to filter for.
     * See [OrderState](#type-orderstate) for possible values
     *
     * @required
     * @maps states
     *
     * @param string[] $states
     */
    public function setStates(array $states): void
    {
        $this->states = $states;
    }

    /**
     * Encode this object to JSON
     *
     * @return mixed
     */
    public function jsonSerialize()
    {
        $json = [];
        $json['states'] = $this->states;

        return array_filter($json, function ($val) {
            return $val !== null;
        });
    }
}

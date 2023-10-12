<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * A request to update a `BreakType`.
 */
class UpdateBreakTypeRequest implements \JsonSerializable
{
    /**
     * @var BreakType
     */
    private $breakType;

    /**
     * @param BreakType $breakType
     */
    public function __construct(BreakType $breakType)
    {
        $this->breakType = $breakType;
    }

    /**
     * Returns Break Type.
     *
     * A defined break template that sets an expectation for possible `Break`
     * instances on a `Shift`.
     */
    public function getBreakType(): BreakType
    {
        return $this->breakType;
    }

    /**
     * Sets Break Type.
     *
     * A defined break template that sets an expectation for possible `Break`
     * instances on a `Shift`.
     *
     * @required
     * @maps break_type
     */
    public function setBreakType(BreakType $breakType): void
    {
        $this->breakType = $breakType;
    }

    /**
     * Encode this object to JSON
     *
     * @return mixed
     */
    public function jsonSerialize()
    {
        $json = [];
        $json['break_type'] = $this->breakType;

        return array_filter($json, function ($val) {
            return $val !== null;
        });
    }
}

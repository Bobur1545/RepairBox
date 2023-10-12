<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Represents the unit used to measure a `CatalogItemVariation` and
 * specifies the precision for decimal quantities.
 */
class CatalogMeasurementUnit implements \JsonSerializable
{
    /**
     * @var MeasurementUnit|null
     */
    private $measurementUnit;

    /**
     * @var int|null
     */
    private $precision;

    /**
     * Returns Measurement Unit.
     *
     * Represents a unit of measurement to use with a quantity, such as ounces
     * or inches. Exactly one of the following fields are required: `custom_unit`,
     * `area_unit`, `length_unit`, `volume_unit`, and `weight_unit`.
     */
    public function getMeasurementUnit(): ?MeasurementUnit
    {
        return $this->measurementUnit;
    }

    /**
     * Sets Measurement Unit.
     *
     * Represents a unit of measurement to use with a quantity, such as ounces
     * or inches. Exactly one of the following fields are required: `custom_unit`,
     * `area_unit`, `length_unit`, `volume_unit`, and `weight_unit`.
     *
     * @maps measurement_unit
     */
    public function setMeasurementUnit(?MeasurementUnit $measurementUnit): void
    {
        $this->measurementUnit = $measurementUnit;
    }

    /**
     * Returns Precision.
     *
     * An integer between 0 and 5 that represents the maximum number of
     * positions allowed after the decimal in quantities measured with this unit.
     * For example:
     *
     * - if the precision is 0, the quantity can be 1, 2, 3, etc.
     * - if the precision is 1, the quantity can be 0.1, 0.2, etc.
     * - if the precision is 2, the quantity can be 0.01, 0.12, etc.
     *
     * Default: 3
     */
    public function getPrecision(): ?int
    {
        return $this->precision;
    }

    /**
     * Sets Precision.
     *
     * An integer between 0 and 5 that represents the maximum number of
     * positions allowed after the decimal in quantities measured with this unit.
     * For example:
     *
     * - if the precision is 0, the quantity can be 1, 2, 3, etc.
     * - if the precision is 1, the quantity can be 0.1, 0.2, etc.
     * - if the precision is 2, the quantity can be 0.01, 0.12, etc.
     *
     * Default: 3
     *
     * @maps precision
     */
    public function setPrecision(?int $precision): void
    {
        $this->precision = $precision;
    }

    /**
     * Encode this object to JSON
     *
     * @return mixed
     */
    public function jsonSerialize()
    {
        $json = [];
        if (isset($this->measurementUnit)) {
            $json['measurement_unit'] = $this->measurementUnit;
        }
        if (isset($this->precision)) {
            $json['precision']        = $this->precision;
        }

        return array_filter($json, function ($val) {
            return $val !== null;
        });
    }
}

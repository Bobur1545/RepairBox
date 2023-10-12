<?php

declare(strict_types=1);

namespace Square\Models;

class BatchRetrieveInventoryChangesRequest implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $catalogObjectIds;

    /**
     * @var string[]|null
     */
    private $locationIds;

    /**
     * @var string[]|null
     */
    private $types;

    /**
     * @var string[]|null
     */
    private $states;

    /**
     * @var string|null
     */
    private $updatedAfter;

    /**
     * @var string|null
     */
    private $updatedBefore;

    /**
     * @var string|null
     */
    private $cursor;

    /**
     * Returns Catalog Object Ids.
     *
     * The filter to return results by `CatalogObject` ID.
     * The filter is only applicable when set. The default value is null.
     *
     * @return string[]|null
     */
    public function getCatalogObjectIds(): ?array
    {
        return $this->catalogObjectIds;
    }

    /**
     * Sets Catalog Object Ids.
     *
     * The filter to return results by `CatalogObject` ID.
     * The filter is only applicable when set. The default value is null.
     *
     * @maps catalog_object_ids
     *
     * @param string[]|null $catalogObjectIds
     */
    public function setCatalogObjectIds(?array $catalogObjectIds): void
    {
        $this->catalogObjectIds = $catalogObjectIds;
    }

    /**
     * Returns Location Ids.
     *
     * The filter to return results by `Location` ID.
     * The filter is only applicable when set. The default value is null.
     *
     * @return string[]|null
     */
    public function getLocationIds(): ?array
    {
        return $this->locationIds;
    }

    /**
     * Sets Location Ids.
     *
     * The filter to return results by `Location` ID.
     * The filter is only applicable when set. The default value is null.
     *
     * @maps location_ids
     *
     * @param string[]|null $locationIds
     */
    public function setLocationIds(?array $locationIds): void
    {
        $this->locationIds = $locationIds;
    }

    /**
     * Returns Types.
     *
     * The filter to return results by `InventoryChangeType` values other than `TRANSFER`.
     * The default value is `[PHYSICAL_COUNT, ADJUSTMENT]`.
     *
     * @return string[]|null
     */
    public function getTypes(): ?array
    {
        return $this->types;
    }

    /**
     * Sets Types.
     *
     * The filter to return results by `InventoryChangeType` values other than `TRANSFER`.
     * The default value is `[PHYSICAL_COUNT, ADJUSTMENT]`.
     *
     * @maps types
     *
     * @param string[]|null $types
     */
    public function setTypes(?array $types): void
    {
        $this->types = $types;
    }

    /**
     * Returns States.
     *
     * The filter to return `ADJUSTMENT` query results by
     * `InventoryState`. This filter is only applied when set.
     * The default value is null.
     *
     * @return string[]|null
     */
    public function getStates(): ?array
    {
        return $this->states;
    }

    /**
     * Sets States.
     *
     * The filter to return `ADJUSTMENT` query results by
     * `InventoryState`. This filter is only applied when set.
     * The default value is null.
     *
     * @maps states
     *
     * @param string[]|null $states
     */
    public function setStates(?array $states): void
    {
        $this->states = $states;
    }

    /**
     * Returns Updated After.
     *
     * The filter to return results with their `calculated_at` value
     * after the given time as specified in an RFC 3339 timestamp.
     * The default value is the UNIX epoch of (`1970-01-01T00:00:00Z`).
     */
    public function getUpdatedAfter(): ?string
    {
        return $this->updatedAfter;
    }

    /**
     * Sets Updated After.
     *
     * The filter to return results with their `calculated_at` value
     * after the given time as specified in an RFC 3339 timestamp.
     * The default value is the UNIX epoch of (`1970-01-01T00:00:00Z`).
     *
     * @maps updated_after
     */
    public function setUpdatedAfter(?string $updatedAfter): void
    {
        $this->updatedAfter = $updatedAfter;
    }

    /**
     * Returns Updated Before.
     *
     * The filter to return results with their `created_at` or `calculated_at` value
     * strictly before the given time as specified in an RFC 3339 timestamp.
     * The default value is the UNIX epoch of (`1970-01-01T00:00:00Z`).
     */
    public function getUpdatedBefore(): ?string
    {
        return $this->updatedBefore;
    }

    /**
     * Sets Updated Before.
     *
     * The filter to return results with their `created_at` or `calculated_at` value
     * strictly before the given time as specified in an RFC 3339 timestamp.
     * The default value is the UNIX epoch of (`1970-01-01T00:00:00Z`).
     *
     * @maps updated_before
     */
    public function setUpdatedBefore(?string $updatedBefore): void
    {
        $this->updatedBefore = $updatedBefore;
    }

    /**
     * Returns Cursor.
     *
     * A pagination cursor returned by a previous call to this endpoint.
     * Provide this to retrieve the next set of results for the original query.
     *
     * See the [Pagination](https://developer.squareup.com/docs/working-with-apis/pagination) guide for
     * more information.
     */
    public function getCursor(): ?string
    {
        return $this->cursor;
    }

    /**
     * Sets Cursor.
     *
     * A pagination cursor returned by a previous call to this endpoint.
     * Provide this to retrieve the next set of results for the original query.
     *
     * See the [Pagination](https://developer.squareup.com/docs/working-with-apis/pagination) guide for
     * more information.
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
        if (isset($this->catalogObjectIds)) {
            $json['catalog_object_ids'] = $this->catalogObjectIds;
        }
        if (isset($this->locationIds)) {
            $json['location_ids']       = $this->locationIds;
        }
        if (isset($this->types)) {
            $json['types']              = $this->types;
        }
        if (isset($this->states)) {
            $json['states']             = $this->states;
        }
        if (isset($this->updatedAfter)) {
            $json['updated_after']      = $this->updatedAfter;
        }
        if (isset($this->updatedBefore)) {
            $json['updated_before']     = $this->updatedBefore;
        }
        if (isset($this->cursor)) {
            $json['cursor']             = $this->cursor;
        }

        return array_filter($json, function ($val) {
            return $val !== null;
        });
    }
}

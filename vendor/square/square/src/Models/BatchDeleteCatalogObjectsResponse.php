<?php

declare(strict_types=1);

namespace Square\Models;

class BatchDeleteCatalogObjectsResponse implements \JsonSerializable
{
    /**
     * @var Error[]|null
     */
    private $errors;

    /**
     * @var string[]|null
     */
    private $deletedObjectIds;

    /**
     * @var string|null
     */
    private $deletedAt;

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
     * Returns Deleted Object Ids.
     *
     * The IDs of all CatalogObjects deleted by this request.
     *
     * @return string[]|null
     */
    public function getDeletedObjectIds(): ?array
    {
        return $this->deletedObjectIds;
    }

    /**
     * Sets Deleted Object Ids.
     *
     * The IDs of all CatalogObjects deleted by this request.
     *
     * @maps deleted_object_ids
     *
     * @param string[]|null $deletedObjectIds
     */
    public function setDeletedObjectIds(?array $deletedObjectIds): void
    {
        $this->deletedObjectIds = $deletedObjectIds;
    }

    /**
     * Returns Deleted At.
     *
     * The database [timestamp](https://developer.squareup.com/docs/build-basics/working-with-dates) of
     * this deletion in RFC 3339 format, e.g., "2016-09-04T23:59:33.123Z".
     */
    public function getDeletedAt(): ?string
    {
        return $this->deletedAt;
    }

    /**
     * Sets Deleted At.
     *
     * The database [timestamp](https://developer.squareup.com/docs/build-basics/working-with-dates) of
     * this deletion in RFC 3339 format, e.g., "2016-09-04T23:59:33.123Z".
     *
     * @maps deleted_at
     */
    public function setDeletedAt(?string $deletedAt): void
    {
        $this->deletedAt = $deletedAt;
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
            $json['errors']             = $this->errors;
        }
        if (isset($this->deletedObjectIds)) {
            $json['deleted_object_ids'] = $this->deletedObjectIds;
        }
        if (isset($this->deletedAt)) {
            $json['deleted_at']         = $this->deletedAt;
        }

        return array_filter($json, function ($val) {
            return $val !== null;
        });
    }
}

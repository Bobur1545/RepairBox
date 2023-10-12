<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * A reference to a Catalog object at a specific version. In general this is
 * used as an entry point into a graph of catalog objects, where the objects exist
 * at a specific version.
 */
class CatalogObjectReference implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $objectId;

    /**
     * @var int|null
     */
    private $catalogVersion;

    /**
     * Returns Object Id.
     *
     * The ID of the referenced object.
     */
    public function getObjectId(): ?string
    {
        return $this->objectId;
    }

    /**
     * Sets Object Id.
     *
     * The ID of the referenced object.
     *
     * @maps object_id
     */
    public function setObjectId(?string $objectId): void
    {
        $this->objectId = $objectId;
    }

    /**
     * Returns Catalog Version.
     *
     * The version of the object.
     */
    public function getCatalogVersion(): ?int
    {
        return $this->catalogVersion;
    }

    /**
     * Sets Catalog Version.
     *
     * The version of the object.
     *
     * @maps catalog_version
     */
    public function setCatalogVersion(?int $catalogVersion): void
    {
        $this->catalogVersion = $catalogVersion;
    }

    /**
     * Encode this object to JSON
     *
     * @return mixed
     */
    public function jsonSerialize()
    {
        $json = [];
        if (isset($this->objectId)) {
            $json['object_id']       = $this->objectId;
        }
        if (isset($this->catalogVersion)) {
            $json['catalog_version'] = $this->catalogVersion;
        }

        return array_filter($json, function ($val) {
            return $val !== null;
        });
    }
}

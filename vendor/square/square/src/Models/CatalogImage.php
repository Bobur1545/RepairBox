<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * An image file to use in Square catalogs. It can be associated with
 * `CatalogItem`, `CatalogItemVariation`, `CatalogCategory`, and `CatalogModifierList` objects.
 * Only the images on items and item variations are exposed in Dashboard.
 * Only the first image on an item is displayed in Square Point of Sale (SPOS).
 * Images on items and variations are displayed through Square Online Store.
 * Images on other object types are for use by 3rd party application developers.
 */
class CatalogImage implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $url;

    /**
     * @var string|null
     */
    private $caption;

    /**
     * Returns Name.
     *
     * The internal name to identify this image in calls to the Square API.
     * This is a searchable attribute for use in applicable query filters
     * using the [SearchCatalogObjects]($e/Catalog/SearchCatalogObjects).
     * It is not unique and should not be shown in a buyer facing context.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * The internal name to identify this image in calls to the Square API.
     * This is a searchable attribute for use in applicable query filters
     * using the [SearchCatalogObjects]($e/Catalog/SearchCatalogObjects).
     * It is not unique and should not be shown in a buyer facing context.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Url.
     *
     * The URL of this image, generated by Square after an image is uploaded
     * using the [CreateCatalogImage]($e/Catalog/CreateCatalogImage) endpoint.
     * To modify the image, use the UpdateCatalogImage endpoint. Do not change the URL field.
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Sets Url.
     *
     * The URL of this image, generated by Square after an image is uploaded
     * using the [CreateCatalogImage]($e/Catalog/CreateCatalogImage) endpoint.
     * To modify the image, use the UpdateCatalogImage endpoint. Do not change the URL field.
     *
     * @maps url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    /**
     * Returns Caption.
     *
     * A caption that describes what is shown in the image. Displayed in the
     * Square Online Store. This is a searchable attribute for use in applicable query filters
     * using the [SearchCatalogObjects]($e/Catalog/SearchCatalogObjects).
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * Sets Caption.
     *
     * A caption that describes what is shown in the image. Displayed in the
     * Square Online Store. This is a searchable attribute for use in applicable query filters
     * using the [SearchCatalogObjects]($e/Catalog/SearchCatalogObjects).
     *
     * @maps caption
     */
    public function setCaption(?string $caption): void
    {
        $this->caption = $caption;
    }

    /**
     * Encode this object to JSON
     *
     * @return mixed
     */
    public function jsonSerialize()
    {
        $json = [];
        if (isset($this->name)) {
            $json['name']    = $this->name;
        }
        if (isset($this->url)) {
            $json['url']     = $this->url;
        }
        if (isset($this->caption)) {
            $json['caption'] = $this->caption;
        }

        return array_filter($json, function ($val) {
            return $val !== null;
        });
    }
}
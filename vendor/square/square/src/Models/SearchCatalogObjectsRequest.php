<?php

declare(strict_types=1);

namespace Square\Models;

class SearchCatalogObjectsRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $cursor;

    /**
     * @var string[]|null
     */
    private $objectTypes;

    /**
     * @var bool|null
     */
    private $includeDeletedObjects;

    /**
     * @var bool|null
     */
    private $includeRelatedObjects;

    /**
     * @var string|null
     */
    private $beginTime;

    /**
     * @var CatalogQuery|null
     */
    private $query;

    /**
     * @var int|null
     */
    private $limit;

    /**
     * Returns Cursor.
     *
     * The pagination cursor returned in the previous response. Leave unset for an initial request.
     * See [Pagination](https://developer.squareup.com/docs/basics/api101/pagination) for more information.
     */
    public function getCursor(): ?string
    {
        return $this->cursor;
    }

    /**
     * Sets Cursor.
     *
     * The pagination cursor returned in the previous response. Leave unset for an initial request.
     * See [Pagination](https://developer.squareup.com/docs/basics/api101/pagination) for more information.
     *
     * @maps cursor
     */
    public function setCursor(?string $cursor): void
    {
        $this->cursor = $cursor;
    }

    /**
     * Returns Object Types.
     *
     * The desired set of object types to appear in the search results.
     *
     * @return string[]|null
     */
    public function getObjectTypes(): ?array
    {
        return $this->objectTypes;
    }

    /**
     * Sets Object Types.
     *
     * The desired set of object types to appear in the search results.
     *
     * @maps object_types
     *
     * @param string[]|null $objectTypes
     */
    public function setObjectTypes(?array $objectTypes): void
    {
        $this->objectTypes = $objectTypes;
    }

    /**
     * Returns Include Deleted Objects.
     *
     * If `true`, deleted objects will be included in the results. Deleted objects will have their
     * `is_deleted` field set to `true`.
     */
    public function getIncludeDeletedObjects(): ?bool
    {
        return $this->includeDeletedObjects;
    }

    /**
     * Sets Include Deleted Objects.
     *
     * If `true`, deleted objects will be included in the results. Deleted objects will have their
     * `is_deleted` field set to `true`.
     *
     * @maps include_deleted_objects
     */
    public function setIncludeDeletedObjects(?bool $includeDeletedObjects): void
    {
        $this->includeDeletedObjects = $includeDeletedObjects;
    }

    /**
     * Returns Include Related Objects.
     *
     * If `true`, the response will include additional objects that are related to the
     * requested object, as follows:
     *
     * If a CatalogItem is returned in the object field of the response,
     * its associated CatalogCategory, CatalogTax objects,
     * CatalogImage objects and CatalogModifierList objects
     * will be included in the `related_objects` field of the response.
     *
     * If a CatalogItemVariation is returned in the object field of the
     * response, its parent CatalogItem will be included in the `related_objects` field of
     * the response.
     */
    public function getIncludeRelatedObjects(): ?bool
    {
        return $this->includeRelatedObjects;
    }

    /**
     * Sets Include Related Objects.
     *
     * If `true`, the response will include additional objects that are related to the
     * requested object, as follows:
     *
     * If a CatalogItem is returned in the object field of the response,
     * its associated CatalogCategory, CatalogTax objects,
     * CatalogImage objects and CatalogModifierList objects
     * will be included in the `related_objects` field of the response.
     *
     * If a CatalogItemVariation is returned in the object field of the
     * response, its parent CatalogItem will be included in the `related_objects` field of
     * the response.
     *
     * @maps include_related_objects
     */
    public function setIncludeRelatedObjects(?bool $includeRelatedObjects): void
    {
        $this->includeRelatedObjects = $includeRelatedObjects;
    }

    /**
     * Returns Begin Time.
     *
     * Return objects modified after this [timestamp](https://developer.squareup.com/docs/build-
     * basics/working-with-dates), in RFC 3339
     * format, e.g., `2016-09-04T23:59:33.123Z`. The timestamp is exclusive - objects with a
     * timestamp equal to `begin_time` will not be included in the response.
     */
    public function getBeginTime(): ?string
    {
        return $this->beginTime;
    }

    /**
     * Sets Begin Time.
     *
     * Return objects modified after this [timestamp](https://developer.squareup.com/docs/build-
     * basics/working-with-dates), in RFC 3339
     * format, e.g., `2016-09-04T23:59:33.123Z`. The timestamp is exclusive - objects with a
     * timestamp equal to `begin_time` will not be included in the response.
     *
     * @maps begin_time
     */
    public function setBeginTime(?string $beginTime): void
    {
        $this->beginTime = $beginTime;
    }

    /**
     * Returns Query.
     *
     * A query composed of one or more different types of filters to narrow the scope of targeted objects
     * when calling the `SearchCatalogObjects` endpoint.
     *
     * Although a query can have multiple filters, only certain query types can be combined per call to
     * [SearchCatalogObjects]($e/Catalog/SearchCatalogObjects).
     * Any combination of the following types may be used together:
     * - [exact_query]($m/CatalogQueryExact)
     * - [prefix_query]($m/CatalogQueryPrefix)
     * - [range_query]($m/CatalogQueryRange)
     * - [sorted_attribute_query]($m/CatalogQuerySortedAttribute)
     * - [text_query]($m/CatalogQueryText)
     * All other query types cannot be combined with any others.
     *
     * When a query filter is based on an attribute, the attribute must be searchable.
     * Searchable attributes are listed as follows, along their parent types that can be searched for with
     * applicable query filters.
     *
     * * Searchable attribute and objects queryable by searchable attributes **
     * - `name`:  `CatalogItem`, `CatalogItemVariation`, `CatalogCategory`, `CatalogTax`, `CatalogDiscount`,
     * `CatalogModifier`, 'CatalogModifierList`, `CatalogItemOption`, `CatalogItemOptionValue`
     * - `description`: `CatalogItem`, `CatalogItemOptionValue`
     * - `abbreviation`: `CatalogItem`
     * - `upc`: `CatalogItemVariation`
     * - `sku`: `CatalogItemVariation`
     * - `caption`: `CatalogImage`
     * - `display_name`: `CatalogItemOption`
     *
     * For example, to search for [CatalogItem]($m/CatalogItem) objects by searchable attributes, you can
     * use
     * the `"name"`, `"description"`, or `"abbreviation"` attribute in an applicable query filter.
     */
    public function getQuery(): ?CatalogQuery
    {
        return $this->query;
    }

    /**
     * Sets Query.
     *
     * A query composed of one or more different types of filters to narrow the scope of targeted objects
     * when calling the `SearchCatalogObjects` endpoint.
     *
     * Although a query can have multiple filters, only certain query types can be combined per call to
     * [SearchCatalogObjects]($e/Catalog/SearchCatalogObjects).
     * Any combination of the following types may be used together:
     * - [exact_query]($m/CatalogQueryExact)
     * - [prefix_query]($m/CatalogQueryPrefix)
     * - [range_query]($m/CatalogQueryRange)
     * - [sorted_attribute_query]($m/CatalogQuerySortedAttribute)
     * - [text_query]($m/CatalogQueryText)
     * All other query types cannot be combined with any others.
     *
     * When a query filter is based on an attribute, the attribute must be searchable.
     * Searchable attributes are listed as follows, along their parent types that can be searched for with
     * applicable query filters.
     *
     * * Searchable attribute and objects queryable by searchable attributes **
     * - `name`:  `CatalogItem`, `CatalogItemVariation`, `CatalogCategory`, `CatalogTax`, `CatalogDiscount`,
     * `CatalogModifier`, 'CatalogModifierList`, `CatalogItemOption`, `CatalogItemOptionValue`
     * - `description`: `CatalogItem`, `CatalogItemOptionValue`
     * - `abbreviation`: `CatalogItem`
     * - `upc`: `CatalogItemVariation`
     * - `sku`: `CatalogItemVariation`
     * - `caption`: `CatalogImage`
     * - `display_name`: `CatalogItemOption`
     *
     * For example, to search for [CatalogItem]($m/CatalogItem) objects by searchable attributes, you can
     * use
     * the `"name"`, `"description"`, or `"abbreviation"` attribute in an applicable query filter.
     *
     * @maps query
     */
    public function setQuery(?CatalogQuery $query): void
    {
        $this->query = $query;
    }

    /**
     * Returns Limit.
     *
     * A limit on the number of results to be returned in a single page. The limit is advisory -
     * the implementation may return more or fewer results. If the supplied limit is negative, zero, or
     * is higher than the maximum limit of 1,000, it will be ignored.
     */
    public function getLimit(): ?int
    {
        return $this->limit;
    }

    /**
     * Sets Limit.
     *
     * A limit on the number of results to be returned in a single page. The limit is advisory -
     * the implementation may return more or fewer results. If the supplied limit is negative, zero, or
     * is higher than the maximum limit of 1,000, it will be ignored.
     *
     * @maps limit
     */
    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
    }

    /**
     * Encode this object to JSON
     *
     * @return mixed
     */
    public function jsonSerialize()
    {
        $json = [];
        if (isset($this->cursor)) {
            $json['cursor']                  = $this->cursor;
        }
        if (isset($this->objectTypes)) {
            $json['object_types']            = $this->objectTypes;
        }
        if (isset($this->includeDeletedObjects)) {
            $json['include_deleted_objects'] = $this->includeDeletedObjects;
        }
        if (isset($this->includeRelatedObjects)) {
            $json['include_related_objects'] = $this->includeRelatedObjects;
        }
        if (isset($this->beginTime)) {
            $json['begin_time']              = $this->beginTime;
        }
        if (isset($this->query)) {
            $json['query']                   = $this->query;
        }
        if (isset($this->limit)) {
            $json['limit']                   = $this->limit;
        }

        return array_filter($json, function ($val) {
            return $val !== null;
        });
    }
}

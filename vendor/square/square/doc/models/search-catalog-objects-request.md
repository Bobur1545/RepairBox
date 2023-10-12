
# Search Catalog Objects Request

## Structure

`SearchCatalogObjectsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cursor` | `?string` | Optional | The pagination cursor returned in the previous response. Leave unset for an initial request.<br>See [Pagination](https://developer.squareup.com/docs/basics/api101/pagination) for more information. | getCursor(): ?string | setCursor(?string cursor): void |
| `objectTypes` | [`?(string[]) (CatalogObjectType)`](/doc/models/catalog-object-type.md) | Optional | The desired set of object types to appear in the search results. | getObjectTypes(): ?array | setObjectTypes(?array objectTypes): void |
| `includeDeletedObjects` | `?bool` | Optional | If `true`, deleted objects will be included in the results. Deleted objects will have their<br>`is_deleted` field set to `true`. | getIncludeDeletedObjects(): ?bool | setIncludeDeletedObjects(?bool includeDeletedObjects): void |
| `includeRelatedObjects` | `?bool` | Optional | If `true`, the response will include additional objects that are related to the<br>requested object, as follows:<br><br>If a CatalogItem is returned in the object field of the response,<br>its associated CatalogCategory, CatalogTax objects,<br>CatalogImage objects and CatalogModifierList objects<br>will be included in the `related_objects` field of the response.<br><br>If a CatalogItemVariation is returned in the object field of the<br>response, its parent CatalogItem will be included in the `related_objects` field of<br>the response. | getIncludeRelatedObjects(): ?bool | setIncludeRelatedObjects(?bool includeRelatedObjects): void |
| `beginTime` | `?string` | Optional | Return objects modified after this [timestamp](https://developer.squareup.com/docs/build-basics/working-with-dates), in RFC 3339<br>format, e.g., `2016-09-04T23:59:33.123Z`. The timestamp is exclusive - objects with a<br>timestamp equal to `begin_time` will not be included in the response. | getBeginTime(): ?string | setBeginTime(?string beginTime): void |
| `query` | [`?CatalogQuery`](/doc/models/catalog-query.md) | Optional | A query composed of one or more different types of filters to narrow the scope of targeted objects when calling the `SearchCatalogObjects` endpoint.<br><br>Although a query can have multiple filters, only certain query types can be combined per call to [SearchCatalogObjects](/doc/apis/catalog.md#search-catalog-objects).<br>Any combination of the following types may be used together:<br><br>- [exact_query](/doc/models/catalog-query-exact.md)<br>- [prefix_query](/doc/models/catalog-query-prefix.md)<br>- [range_query](/doc/models/catalog-query-range.md)<br>- [sorted_attribute_query](/doc/models/catalog-query-sorted-attribute.md)<br>- [text_query](/doc/models/catalog-query-text.md)<br>  All other query types cannot be combined with any others.<br><br>When a query filter is based on an attribute, the attribute must be searchable.<br>Searchable attributes are listed as follows, along their parent types that can be searched for with applicable query filters.<br><br>* Searchable attribute and objects queryable by searchable attributes **<br><br>- `name`:  `CatalogItem`, `CatalogItemVariation`, `CatalogCategory`, `CatalogTax`, `CatalogDiscount`, `CatalogModifier`, 'CatalogModifierList`,`CatalogItemOption`,`CatalogItemOptionValue`<br>- `description`: `CatalogItem`, `CatalogItemOptionValue`<br>- `abbreviation`: `CatalogItem`<br>- `upc`: `CatalogItemVariation`<br>- `sku`: `CatalogItemVariation`<br>- `caption`: `CatalogImage`<br>- `display_name`: `CatalogItemOption`<br><br>For example, to search for [CatalogItem](/doc/models/catalog-item.md) objects by searchable attributes, you can use<br>the `"name"`, `"description"`, or `"abbreviation"` attribute in an applicable query filter. | getQuery(): ?CatalogQuery | setQuery(?CatalogQuery query): void |
| `limit` | `?int` | Optional | A limit on the number of results to be returned in a single page. The limit is advisory -<br>the implementation may return more or fewer results. If the supplied limit is negative, zero, or<br>is higher than the maximum limit of 1,000, it will be ignored. | getLimit(): ?int | setLimit(?int limit): void |

## Example (as JSON)

```json
{
  "limit": 100,
  "object_types": [
    "ITEM"
  ],
  "query": {
    "prefix_query": {
      "attribute_name": "name",
      "attribute_prefix": "tea"
    }
  }
}
```


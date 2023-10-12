
# Search Catalog Items Response

Defines the response body returned from the [SearchCatalogItems](/doc/apis/catalog.md#search-catalog-items) endpoint.

## Structure

`SearchCatalogItemsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(Error[])`](/doc/models/error.md) | Optional | Any errors that occurred during the request. | getErrors(): ?array | setErrors(?array errors): void |
| `items` | [`?(CatalogObject[])`](/doc/models/catalog-object.md) | Optional | Returned items matching the specified query expressions. | getItems(): ?array | setItems(?array items): void |
| `cursor` | `?string` | Optional | Pagination token used in the next request to return more of the search result. | getCursor(): ?string | setCursor(?string cursor): void |
| `matchedVariationIds` | `?(string[])` | Optional | Ids of returned item variations matching the specified query expression. | getMatchedVariationIds(): ?array | setMatchedVariationIds(?array matchedVariationIds): void |

## Example (as JSON)

```json
{
  "errors": [
    {
      "category": "AUTHENTICATION_ERROR",
      "code": "UNPROCESSABLE_ENTITY",
      "detail": "detail1",
      "field": "field9"
    },
    {
      "category": "INVALID_REQUEST_ERROR",
      "code": "RATE_LIMITED",
      "detail": "detail2",
      "field": "field0"
    },
    {
      "category": "RATE_LIMIT_ERROR",
      "code": "NOT_IMPLEMENTED",
      "detail": "detail3",
      "field": "field1"
    }
  ],
  "items": [
    {
      "type": "PRODUCT_SET",
      "id": "id7",
      "updated_at": "updated_at7",
      "version": 143,
      "is_deleted": true,
      "custom_attribute_values": {
        "key0": {
          "name": "name8",
          "string_value": "string_value2",
          "custom_attribute_definition_id": "custom_attribute_definition_id4",
          "type": "STRING",
          "number_value": "number_value8"
        }
      },
      "catalog_v1_ids": [
        {
          "catalog_v1_id": "catalog_v1_id1",
          "location_id": "location_id1"
        },
        {
          "catalog_v1_id": "catalog_v1_id2",
          "location_id": "location_id2"
        }
      ]
    },
    {
      "type": "PRICING_RULE",
      "id": "id8",
      "updated_at": "updated_at6",
      "version": 144,
      "is_deleted": false,
      "custom_attribute_values": {
        "key0": {
          "name": "name9",
          "string_value": "string_value3",
          "custom_attribute_definition_id": "custom_attribute_definition_id3",
          "type": "SELECTION",
          "number_value": "number_value9"
        },
        "key1": {
          "name": "name8",
          "string_value": "string_value2",
          "custom_attribute_definition_id": "custom_attribute_definition_id4",
          "type": "STRING",
          "number_value": "number_value8"
        },
        "key2": {
          "name": "name7",
          "string_value": "string_value1",
          "custom_attribute_definition_id": "custom_attribute_definition_id5",
          "type": "BOOLEAN",
          "number_value": "number_value7"
        }
      },
      "catalog_v1_ids": [
        {
          "catalog_v1_id": "catalog_v1_id2",
          "location_id": "location_id2"
        },
        {
          "catalog_v1_id": "catalog_v1_id3",
          "location_id": "location_id3"
        },
        {
          "catalog_v1_id": "catalog_v1_id4",
          "location_id": "location_id4"
        }
      ]
    }
  ],
  "cursor": "cursor6",
  "matched_variation_ids": [
    "matched_variation_ids9",
    "matched_variation_ids0"
  ]
}
```


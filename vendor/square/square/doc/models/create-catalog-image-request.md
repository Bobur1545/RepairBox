
# Create Catalog Image Request

## Structure

`CreateCatalogImageRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `idempotencyKey` | `string` | Required | A unique string that identifies this CreateCatalogImage request.<br>Keys can be any valid string but must be unique for every CreateCatalogImage request.<br><br>See [Idempotency keys](https://developer.squareup.com/docs/basics/api101/idempotency) for more information.<br>**Constraints**: *Minimum Length*: `1` | getIdempotencyKey(): string | setIdempotencyKey(string idempotencyKey): void |
| `objectId` | `?string` | Optional | Unique ID of the `CatalogObject` to attach to this `CatalogImage`. Leave this<br>field empty to create unattached images, for example if you are building an integration<br>where these images can be attached to catalog items at a later time. | getObjectId(): ?string | setObjectId(?string objectId): void |
| `image` | [`CatalogObject`](/doc/models/catalog-object.md) | Required | The wrapper object for the catalog entries of a given object type.<br><br>Depending on the `type` attribute value, a `CatalogObject` instance assumes a type-specific data to yield the corresponding type of catalog object.<br><br>For example, if `type=ITEM`, the `CatalogObject` instance must have the ITEM-specific data set on the `item_data` attribute. The resulting `CatalogObject` instance is also a `CatalogItem` instance.<br><br>In general, if `type=<OBJECT_TYPE>`, the `CatalogObject` instance must have the `<OBJECT_TYPE>`-specific data set on the `<object_type>_data` attribute. The resulting `CatalogObject` instance is also a `Catalog<ObjectType>` instance.<br><br>For a more detailed discussion of the Catalog data model, please see the<br>[Design a Catalog](https://developer.squareup.com/docs/catalog-api/design-a-catalog) guide. | getImage(): CatalogObject | setImage(CatalogObject image): void |

## Example (as JSON)

```json
{
  "idempotency_key": "528dea59-7bfb-43c1-bd48-4a6bba7dd61f86",
  "image": {
    "id": "#TEMP_ID",
    "image_data": {
      "caption": "A picture of a cup of coffee"
    },
    "type": "IMAGE"
  },
  "object_id": "ND6EA5AAJEO5WL3JNNIAQA32"
}
```


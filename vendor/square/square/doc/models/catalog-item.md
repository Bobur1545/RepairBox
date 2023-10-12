
# Catalog Item

A [CatalogObject](/doc/models/catalog-object.md) instance of the `ITEM` type, also referred to as an item, in the catalog.

## Structure

`CatalogItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | The item's name. This is a searchable attribute for use in applicable query filters, its value must not be empty, and the length is of Unicode code points.<br>**Constraints**: *Maximum Length*: `512` | getName(): ?string | setName(?string name): void |
| `description` | `?string` | Optional | The item's description. This is a searchable attribute for use in applicable query filters, and its value length is of Unicode code points.<br>**Constraints**: *Maximum Length*: `4096` | getDescription(): ?string | setDescription(?string description): void |
| `abbreviation` | `?string` | Optional | The text of the item's display label in the Square Point of Sale app. Only up to the first five characters of the string are used.<br>This attribute is searchable, and its value length is of Unicode code points.<br>**Constraints**: *Maximum Length*: `24` | getAbbreviation(): ?string | setAbbreviation(?string abbreviation): void |
| `labelColor` | `?string` | Optional | The color of the item's display label in the Square Point of Sale app. This must be a valid hex color code. | getLabelColor(): ?string | setLabelColor(?string labelColor): void |
| `availableOnline` | `?bool` | Optional | If `true`, the item can be added to shipping orders from the merchant's online store. | getAvailableOnline(): ?bool | setAvailableOnline(?bool availableOnline): void |
| `availableForPickup` | `?bool` | Optional | If `true`, the item can be added to pickup orders from the merchant's online store. | getAvailableForPickup(): ?bool | setAvailableForPickup(?bool availableForPickup): void |
| `availableElectronically` | `?bool` | Optional | If `true`, the item can be added to electronically fulfilled orders from the merchant's online store. | getAvailableElectronically(): ?bool | setAvailableElectronically(?bool availableElectronically): void |
| `categoryId` | `?string` | Optional | The ID of the item's category, if any. | getCategoryId(): ?string | setCategoryId(?string categoryId): void |
| `taxIds` | `?(string[])` | Optional | A set of IDs indicating the taxes enabled for<br>this item. When updating an item, any taxes listed here will be added to the item.<br>Taxes may also be added to or deleted from an item using `UpdateItemTaxes`. | getTaxIds(): ?array | setTaxIds(?array taxIds): void |
| `modifierListInfo` | [`?(CatalogItemModifierListInfo[])`](/doc/models/catalog-item-modifier-list-info.md) | Optional | A set of `CatalogItemModifierListInfo` objects<br>representing the modifier lists that apply to this item, along with the overrides and min<br>and max limits that are specific to this item. Modifier lists<br>may also be added to or deleted from an item using `UpdateItemModifierLists`. | getModifierListInfo(): ?array | setModifierListInfo(?array modifierListInfo): void |
| `variations` | [`?(CatalogObject[])`](/doc/models/catalog-object.md) | Optional | A list of [CatalogItemVariation](/doc/models/catalog-item-variation.md) objects for this item. An item must have<br>at least one variation. | getVariations(): ?array | setVariations(?array variations): void |
| `productType` | [`?string (CatalogItemProductType)`](/doc/models/catalog-item-product-type.md) | Optional | The type of a CatalogItem. Connect V2 only allows the creation of `REGULAR` or `APPOINTMENTS_SERVICE` items. | getProductType(): ?string | setProductType(?string productType): void |
| `skipModifierScreen` | `?bool` | Optional | If `false`, the Square Point of Sale app will present the `CatalogItem`'s<br>details screen immediately, allowing the merchant to choose `CatalogModifier`s<br>before adding the item to the cart.  This is the default behavior.<br><br>If `true`, the Square Point of Sale app will immediately add the item to the cart with the pre-selected<br>modifiers, and merchants can edit modifiers by drilling down onto the item's details.<br><br>Third-party clients are encouraged to implement similar behaviors. | getSkipModifierScreen(): ?bool | setSkipModifierScreen(?bool skipModifierScreen): void |
| `itemOptions` | [`?(CatalogItemOptionForItem[])`](/doc/models/catalog-item-option-for-item.md) | Optional | List of item options IDs for this item. Used to manage and group item<br>variations in a specified order.<br><br>Maximum: 6 item options. | getItemOptions(): ?array | setItemOptions(?array itemOptions): void |
| `sortName` | `?string` | Optional | A name to sort the item by. If this name is unspecified, namely, the `sort_name` field is absent, the regular `name` field is used for sorting.<br><br>It is currently supported for sellers of the Japanese locale only. | getSortName(): ?string | setSortName(?string sortName): void |

## Example (as JSON)

```json
{
  "object": {
    "id": "#Cocoa",
    "item_data": {
      "abbreviation": "Ch",
      "description": "Hot chocolate",
      "name": "Cocoa",
      "visibility": "PRIVATE"
    },
    "present_at_all_locations": true,
    "type": "ITEM"
  }
}
```


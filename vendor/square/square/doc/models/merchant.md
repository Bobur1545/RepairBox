
# Merchant

Represents a Square seller.

## Structure

`Merchant`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | The Square-issued ID of the merchant. | getId(): ?string | setId(?string id): void |
| `businessName` | `?string` | Optional | The business name of the merchant. | getBusinessName(): ?string | setBusinessName(?string businessName): void |
| `country` | [`string (Country)`](/doc/models/country.md) | Required | Indicates the country associated with another entity, such as a business.<br>Values are in [ISO 3166-1-alpha-2 format](http://www.iso.org/iso/home/standards/country_codes.htm). | getCountry(): string | setCountry(string country): void |
| `languageCode` | `?string` | Optional | The language code associated with the merchant account, in BCP 47 format. | getLanguageCode(): ?string | setLanguageCode(?string languageCode): void |
| `currency` | [`?string (Currency)`](/doc/models/currency.md) | Optional | Indicates the associated currency for an amount of money. Values correspond<br>to [ISO 4217](https://wikipedia.org/wiki/ISO_4217). | getCurrency(): ?string | setCurrency(?string currency): void |
| `status` | [`?string (MerchantStatus)`](/doc/models/merchant-status.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `mainLocationId` | `?string` | Optional | The ID of the main `Location` for this merchant. | getMainLocationId(): ?string | setMainLocationId(?string mainLocationId): void |

## Example (as JSON)

```json
{
  "id": "id0",
  "business_name": "business_name4",
  "country": "FO",
  "language_code": "language_code8",
  "currency": "YER",
  "status": "ACTIVE"
}
```



# Search Subscriptions Filter

Represents a set of SearchSubscriptionsQuery filters used to limit the set of Subscriptions returned by SearchSubscriptions.

## Structure

`SearchSubscriptionsFilter`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customerIds` | `?(string[])` | Optional | A filter to select subscriptions based on the customer. | getCustomerIds(): ?array | setCustomerIds(?array customerIds): void |
| `locationIds` | `?(string[])` | Optional | A filter to select subscriptions based the location. | getLocationIds(): ?array | setLocationIds(?array locationIds): void |

## Example (as JSON)

```json
{
  "customer_ids": [
    "customer_ids1",
    "customer_ids2"
  ],
  "location_ids": [
    "location_ids0"
  ]
}
```


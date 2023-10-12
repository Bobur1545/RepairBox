
# List Gift Cards Request

A request to list gift cards. You can optionally specify a filter to retrieve a subset of
gift cards.

## Structure

`ListGiftCardsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `?string` | Optional | If a type is provided, gift cards of this type are returned<br>(see [GiftCardType](/doc/models/gift-card-type.md)).<br>If no type is provided, it returns gift cards of all types. | getType(): ?string | setType(?string type): void |
| `state` | `?string` | Optional | If the state is provided, it returns the gift cards in the specified state<br>(see [GiftCardStatus](/doc/models/gift-card-status.md)).<br>Otherwise, it returns the gift cards of all states. | getState(): ?string | setState(?string state): void |
| `limit` | `?int` | Optional | If a value is provided, it returns only that number of results per page.<br>The maximum number of results allowed per page is 50. The default value is 30.<br>**Constraints**: `>= 1`, `<= 50` | getLimit(): ?int | setLimit(?int limit): void |
| `cursor` | `?string` | Optional | A pagination cursor returned by a previous call to this endpoint.<br>Provide this cursor to retrieve the next set of results for the original query.<br>If a cursor is not provided, it returns the first page of the results.<br>For more information, see [Pagination](https://developer.squareup.com/docs/working-with-apis/pagination). | getCursor(): ?string | setCursor(?string cursor): void |
| `customerId` | `?string` | Optional | If a value is provided, returns only the gift cards linked to the specified customer<br>**Constraints**: *Maximum Length*: `191` | getCustomerId(): ?string | setCustomerId(?string customerId): void |

## Example (as JSON)

```json
{
  "type": "type0",
  "state": "state4",
  "limit": 172,
  "cursor": "cursor6",
  "customer_id": "customer_id8"
}
```


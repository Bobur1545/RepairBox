
# Search Subscriptions Response

Defines the fields that are included in the response from the
[SearchSubscriptions](/doc/apis/subscriptions.md#search-subscriptions) endpoint.

## Structure

`SearchSubscriptionsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(Error[])`](/doc/models/error.md) | Optional | Information about errors encountered during the request. | getErrors(): ?array | setErrors(?array errors): void |
| `subscriptions` | [`?(Subscription[])`](/doc/models/subscription.md) | Optional | The search result. | getSubscriptions(): ?array | setSubscriptions(?array subscriptions): void |
| `cursor` | `?string` | Optional | When a response is truncated, it includes a cursor that you can<br>use in a subsequent request to fetch the next set of subscriptions.<br>If empty, this is the final response.<br><br>For more information, see [Pagination](https://developer.squareup.com/docs/working-with-apis/pagination). | getCursor(): ?string | setCursor(?string cursor): void |

## Example (as JSON)

```json
{
  "subscriptions": [
    {
      "canceled_date": "2020-04-14",
      "card_id": "ccof:mueUsvgajChmjEbp4GB",
      "charged_through_date": "2020-05-14",
      "created_at": "2020-08-03T21:53:10Z",
      "customer_id": "CHFGVKYY8RSV93M5KCYTG4PN0G",
      "id": "de86fc96-8664-474b-af1a-abbe59cacf0e",
      "location_id": "S8GWD5R9QB376",
      "paid_until_date": "2020-05-14",
      "plan_id": "L3TJVDHVBEQEGQDEZL2JJM7R",
      "start_date": "2020-04-14",
      "status": "CANCELED",
      "timezone": "UTC"
    },
    {
      "created_at": "2020-08-03T21:53:10Z",
      "customer_id": "CHFGVKYY8RSV93M5KCYTG4PN0G",
      "id": "56214fb2-cc85-47a1-93bc-44f3766bb56f",
      "location_id": "S8GWD5R9QB376",
      "plan_id": "6JHXF3B2CW3YKHDV4XEM674H",
      "price_override_money": {
        "amount": 100,
        "currency": "USD"
      },
      "start_date": "2020-08-01",
      "status": "PENDING",
      "tax_percentage": "5",
      "timezone": "America/Los_Angeles",
      "version": 1594155459464
    },
    {
      "charged_through_date": "2020-06-11",
      "created_at": "2020-08-03T21:53:10Z",
      "customer_id": "CHFGVKYY8RSV93M5KCYTG4PN0G",
      "id": "8151fc89-da15-4eb9-a685-1a70883cebfc",
      "invoice_ids": [
        "grebK0Q_l8H4fqoMMVvt-Q",
        "rcX_i3sNmHTGKhI4W2mceA"
      ],
      "location_id": "S8GWD5R9QB376",
      "paid_until_date": "2020-06-11",
      "plan_id": "6JHXF3B2CW3YKHDV4XEM674H",
      "price_override_money": {
        "amount": 1000,
        "currency": "USD"
      },
      "start_date": "2020-05-11",
      "status": "ACTIVE",
      "timezone": "America/Los_Angeles"
    }
  ]
}
```



# Retrieve Subscription Response

Defines the fields that are included in the response from the
[RetrieveSubscription](/doc/apis/subscriptions.md#retrieve-subscription) endpoint.

## Structure

`RetrieveSubscriptionResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(Error[])`](/doc/models/error.md) | Optional | Information about errors encountered during the request. | getErrors(): ?array | setErrors(?array errors): void |
| `subscription` | [`?Subscription`](/doc/models/subscription.md) | Optional | Represents a customer subscription to a subscription plan.<br>For an overview of the `Subscription` type, see<br>[Subscription object](https://developer.squareup.com/docs/subscriptions-api/overview#subscription-object-overview). | getSubscription(): ?Subscription | setSubscription(?Subscription subscription): void |

## Example (as JSON)

```json
{
  "subscription": {
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
}
```


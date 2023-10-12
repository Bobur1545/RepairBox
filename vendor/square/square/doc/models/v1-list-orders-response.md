
# V1 List Orders Response

## Structure

`V1ListOrdersResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `items` | [`?(V1Order[])`](/doc/models/v1-order.md) | Optional | - | getItems(): ?array | setItems(?array items): void |

## Example (as JSON)

```json
{
  "items": [
    {
      "errors": [
        {
          "category": "MERCHANT_SUBSCRIPTION_ERROR",
          "code": "INVALID_PHONE_NUMBER",
          "detail": "detail8",
          "field": "field6"
        },
        {
          "category": "API_ERROR",
          "code": "CHECKOUT_EXPIRED",
          "detail": "detail9",
          "field": "field7"
        },
        {
          "category": "AUTHENTICATION_ERROR",
          "code": "BAD_CERTIFICATE",
          "detail": "detail0",
          "field": "field8"
        }
      ],
      "id": "id7",
      "buyer_email": "buyer_email1",
      "recipient_name": "recipient_name5",
      "recipient_phone_number": "recipient_phone_number7"
    },
    {
      "errors": [
        {
          "category": "API_ERROR",
          "code": "CHECKOUT_EXPIRED",
          "detail": "detail9",
          "field": "field7"
        }
      ],
      "id": "id8",
      "buyer_email": "buyer_email0",
      "recipient_name": "recipient_name6",
      "recipient_phone_number": "recipient_phone_number6"
    }
  ]
}
```


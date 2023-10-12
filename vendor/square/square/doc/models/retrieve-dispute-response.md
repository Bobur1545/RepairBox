
# Retrieve Dispute Response

Defines fields in a `RetrieveDispute` response.

## Structure

`RetrieveDisputeResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(Error[])`](/doc/models/error.md) | Optional | Information about errors encountered during the request. | getErrors(): ?array | setErrors(?array errors): void |
| `dispute` | [`?Dispute`](/doc/models/dispute.md) | Optional | Represents a dispute a cardholder initiated with their bank. | getDispute(): ?Dispute | setDispute(?Dispute dispute): void |

## Example (as JSON)

```json
{
  "dispute": {
    "amount_money": {
      "amount": 2000,
      "currency": "USD"
    },
    "brand_dispute_id": "100000282394",
    "card_brand": "VISA",
    "created_at": "2018-10-18T15:59:13.613Z",
    "disputed_payments": [
      {
        "payment_id": "6Ee10wvqhfipStz297mtUhBXvaB"
      }
    ],
    "due_at": "2018-11-01T00:00:00.000Z",
    "id": "XDgyFu7yo1E2S5lQGGpYn",
    "reason": "NO_KNOWLEDGE",
    "state": "LOST",
    "updated_at": "2018-10-18T15:59:13.613Z"
  }
}
```


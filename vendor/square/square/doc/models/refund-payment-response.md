
# Refund Payment Response

Defines the response returned by
[RefundPayment](/doc/apis/refunds.md#refund-payment).

If there are errors processing the request, the `refund` field might not be
present, or it might be present with a status of `FAILED`.

## Structure

`RefundPaymentResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(Error[])`](/doc/models/error.md) | Optional | Information about errors encountered during the request. | getErrors(): ?array | setErrors(?array errors): void |
| `refund` | [`?PaymentRefund`](/doc/models/payment-refund.md) | Optional | Represents a refund of a payment made using Square. Contains information about<br>the original payment and the amount of money refunded. | getRefund(): ?PaymentRefund | setRefund(?PaymentRefund refund): void |

## Example (as JSON)

```json
{
  "refund": {
    "amount_money": {
      "amount": 100,
      "currency": "USD"
    },
    "created_at": "2018-10-17T20:41:55.520Z",
    "id": "UNOE3kv2BZwqHlJ830RCt5YCuaB_xVteEWVFkXDvKN1ddidfJWipt8p9whmElKT5mZtJ7wZ",
    "payment_id": "UNOE3kv2BZwqHlJ830RCt5YCuaB",
    "status": "PENDING",
    "updated_at": "2018-10-17T20:41:55.520Z"
  }
}
```


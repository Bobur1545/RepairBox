
# Calculate Loyalty Points Request

A request to calculate the points that a buyer can earn from
a specified purchase.

## Structure

`CalculateLoyaltyPointsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `orderId` | `?string` | Optional | The [order](/doc/models/order.md) ID for which to calculate the points.<br>Specify this field if your application uses the Orders API to process orders.<br>Otherwise, specify the `transaction_amount_money`. | getOrderId(): ?string | setOrderId(?string orderId): void |
| `transactionAmountMoney` | [`?Money`](/doc/models/money.md) | Optional | Represents an amount of money. `Money` fields can be signed or unsigned.<br>Fields that do not explicitly define whether they are signed or unsigned are<br>considered unsigned and can only hold positive amounts. For signed fields, the<br>sign of the value indicates the purpose of the money transfer. See<br>[Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-monetary-amounts)<br>for more information. | getTransactionAmountMoney(): ?Money | setTransactionAmountMoney(?Money transactionAmountMoney): void |

## Example (as JSON)

```json
{
  "order_id": "RFZfrdtm3mhO1oGzf5Cx7fEMsmGZY"
}
```


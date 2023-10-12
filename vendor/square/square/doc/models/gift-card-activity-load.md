
# Gift Card Activity Load

Present only when `GiftCardActivityType` is LOAD.

## Structure

`GiftCardActivityLoad`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amountMoney` | [`?Money`](/doc/models/money.md) | Optional | Represents an amount of money. `Money` fields can be signed or unsigned.<br>Fields that do not explicitly define whether they are signed or unsigned are<br>considered unsigned and can only hold positive amounts. For signed fields, the<br>sign of the value indicates the purpose of the money transfer. See<br>[Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-monetary-amounts)<br>for more information. | getAmountMoney(): ?Money | setAmountMoney(?Money amountMoney): void |
| `orderId` | `?string` | Optional | The `order_id` of the order associated with the activity.<br>It is populated along with `line_item_uid` and is required if using the Square Orders API. | getOrderId(): ?string | setOrderId(?string orderId): void |
| `lineItemUid` | `?string` | Optional | The `line_item_uid` of the gift card’s line item in the order associated with the activity.<br>It is populated along with `order_id` and is required if using the Square Orders API. | getLineItemUid(): ?string | setLineItemUid(?string lineItemUid): void |
| `referenceId` | `?string` | Optional | A client-specified ID to associate an entity, in another system, with this gift card<br>activity. This can be used to track the order or payment related information when the Square Orders<br>API is not being used. | getReferenceId(): ?string | setReferenceId(?string referenceId): void |
| `buyerPaymentInstrumentIds` | `?(string[])` | Optional | If you are not using the Orders API, this field is required because it is used to identify a buyer<br>to perform compliance checks. | getBuyerPaymentInstrumentIds(): ?array | setBuyerPaymentInstrumentIds(?array buyerPaymentInstrumentIds): void |

## Example (as JSON)

```json
{
  "amount_money": {
    "amount": 186,
    "currency": "NGN"
  },
  "order_id": "order_id6",
  "line_item_uid": "line_item_uid0",
  "reference_id": "reference_id2",
  "buyer_payment_instrument_ids": [
    "buyer_payment_instrument_ids6"
  ]
}
```


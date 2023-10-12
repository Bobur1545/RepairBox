
# Search Orders Fulfillment Filter

Filter based on [order fulfillment](/doc/models/order-fulfillment.md) information.

## Structure

`SearchOrdersFulfillmentFilter`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `fulfillmentTypes` | [`?(string[]) (OrderFulfillmentType)`](/doc/models/order-fulfillment-type.md) | Optional | A list of [fulfillment types](/doc/models/order-fulfillment-type.md) to filter<br>for. The list returns orders if any of its fulfillments match any of the fulfillment types<br>listed in this field.<br>See [OrderFulfillmentType](#type-orderfulfillmenttype) for possible values | getFulfillmentTypes(): ?array | setFulfillmentTypes(?array fulfillmentTypes): void |
| `fulfillmentStates` | [`?(string[]) (OrderFulfillmentState)`](/doc/models/order-fulfillment-state.md) | Optional | A list of [fulfillment states](/doc/models/order-fulfillment-state.md) to filter<br>for. The list returns orders if any of its fulfillments match any of the<br>fulfillment states listed in this field.<br>See [OrderFulfillmentState](#type-orderfulfillmentstate) for possible values | getFulfillmentStates(): ?array | setFulfillmentStates(?array fulfillmentStates): void |

## Example (as JSON)

```json
{
  "fulfillment_types": [
    "SHIPMENT",
    "PICKUP"
  ],
  "fulfillment_states": [
    "PROPOSED"
  ]
}
```


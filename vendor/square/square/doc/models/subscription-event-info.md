
# Subscription Event Info

Provides information about the subscription event.

## Structure

`SubscriptionEventInfo`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `detail` | `?string` | Optional | A human-readable explanation for the event. | getDetail(): ?string | setDetail(?string detail): void |
| `code` | [`?string (SubscriptionEventInfoCode)`](/doc/models/subscription-event-info-code.md) | Optional | The possible subscription event info codes. | getCode(): ?string | setCode(?string code): void |

## Example (as JSON)

```json
{
  "detail": "detail6",
  "code": "CUSTOMER_NO_EMAIL"
}
```


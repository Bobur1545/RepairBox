
# Dispute Evidence Created Webhook Data

## Structure

`DisputeEvidenceCreatedWebhookData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `?string` | Optional | Name of the affected dispute's type. | getType(): ?string | setType(?string type): void |
| `id` | `?string` | Optional | ID of the affected dispute. | getId(): ?string | setId(?string id): void |
| `object` | [`?DisputeEvidenceCreatedWebhookObject`](/doc/models/dispute-evidence-created-webhook-object.md) | Optional | - | getObject(): ?DisputeEvidenceCreatedWebhookObject | setObject(?DisputeEvidenceCreatedWebhookObject object): void |

## Example (as JSON)

```json
{
  "type": "type0",
  "id": "id0",
  "object": {
    "object": {
      "dispute_id": "dispute_id2",
      "id": "id0",
      "amount_money": {
        "amount": 186,
        "currency": "NGN"
      },
      "reason": "NOT_AS_DESCRIBED",
      "state": "EVIDENCE_REQUIRED"
    }
  }
}
```


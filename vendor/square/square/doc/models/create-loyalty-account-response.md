
# Create Loyalty Account Response

A response that includes loyalty account created.

## Structure

`CreateLoyaltyAccountResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(Error[])`](/doc/models/error.md) | Optional | Any errors that occurred during the request. | getErrors(): ?array | setErrors(?array errors): void |
| `loyaltyAccount` | [`?LoyaltyAccount`](/doc/models/loyalty-account.md) | Optional | Describes a loyalty account. For more information, see<br>[Manage Loyalty Accounts Using the Loyalty API](https://developer.squareup.com/docs/loyalty-api/overview). | getLoyaltyAccount(): ?LoyaltyAccount | setLoyaltyAccount(?LoyaltyAccount loyaltyAccount): void |

## Example (as JSON)

```json
{
  "loyalty_account": {
    "balance": 0,
    "created_at": "2020-05-08T21:44:32Z",
    "id": "79b807d2-d786-46a9-933b-918028d7a8c5",
    "lifetime_points": 0,
    "mapping": {
      "created_at": "2020-05-08T21:44:32Z",
      "id": "66aaab3f-da99-49ed-8b19-b87f851c844f",
      "phone_number": "+14155551234"
    },
    "program_id": "d619f755-2d17-41f3-990d-c04ecedd64dd",
    "updated_at": "2020-05-08T21:44:32Z"
  }
}
```


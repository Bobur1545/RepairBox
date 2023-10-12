
# Device Checkout Options

## Structure

`DeviceCheckoutOptions`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceId` | `string` | Required | The unique ID of the device intended for this `TerminalCheckout`.<br>A list of `DeviceCode` objects can be retrieved from the /v2/devices/codes endpoint.<br>Match a `DeviceCode.device_id` value with `device_id` to get the associated device code. | getDeviceId(): string | setDeviceId(string deviceId): void |
| `skipReceiptScreen` | `?bool` | Optional | Instructs the device to skip the receipt screen. Defaults to false. | getSkipReceiptScreen(): ?bool | setSkipReceiptScreen(?bool skipReceiptScreen): void |
| `tipSettings` | [`?TipSettings`](/doc/models/tip-settings.md) | Optional | - | getTipSettings(): ?TipSettings | setTipSettings(?TipSettings tipSettings): void |

## Example (as JSON)

```json
{
  "device_id": "device_id6",
  "skip_receipt_screen": false,
  "tip_settings": {
    "allow_tipping": false,
    "separate_tip_screen": false,
    "custom_tip_field": false,
    "tip_percentages": [
      48
    ],
    "smart_tipping": false
  }
}
```


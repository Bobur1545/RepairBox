
# Charge Request

Defines the parameters that can be included in the body of
a request to the [Charge](/doc/apis/transactions.md#charge) endpoint.

Deprecated - recommend using [CreatePayment](/doc/apis/payments.md#create-payment)

## Structure

`ChargeRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `idempotencyKey` | `string` | Required | A value you specify that uniquely identifies this<br>transaction among transactions you've created.<br><br>If you're unsure whether a particular transaction succeeded,<br>you can reattempt it with the same idempotency key without<br>worrying about double-charging the buyer.<br><br>See [Idempotency keys](https://developer.squareup.com/docs/working-with-apis/idempotency) for more information.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `192` | getIdempotencyKey(): string | setIdempotencyKey(string idempotencyKey): void |
| `amountMoney` | [`Money`](/doc/models/money.md) | Required | Represents an amount of money. `Money` fields can be signed or unsigned.<br>Fields that do not explicitly define whether they are signed or unsigned are<br>considered unsigned and can only hold positive amounts. For signed fields, the<br>sign of the value indicates the purpose of the money transfer. See<br>[Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-monetary-amounts)<br>for more information. | getAmountMoney(): Money | setAmountMoney(Money amountMoney): void |
| `cardNonce` | `?string` | Optional | A payment token generated from the [Card.tokenize()](https://developer.squareup.com/reference/sdks/web/payments/objects/Card#Card.tokenize) that represents the card<br>to charge.<br><br>The application that provides a payment token to this endpoint must be the<br>_same application_ that generated the payment token with the Web Payments SDK.<br>Otherwise, the nonce is invalid.<br><br>Do not provide a value for this field if you provide a value for<br>`customer_card_id`.<br>**Constraints**: *Maximum Length*: `192` | getCardNonce(): ?string | setCardNonce(?string cardNonce): void |
| `customerCardId` | `?string` | Optional | The ID of the customer card on file to charge. Do<br>not provide a value for this field if you provide a value for `card_nonce`.<br><br>If you provide this value, you _must_ also provide a value for<br>`customer_id`.<br>**Constraints**: *Maximum Length*: `192` | getCustomerCardId(): ?string | setCustomerCardId(?string customerCardId): void |
| `delayCapture` | `?bool` | Optional | If `true`, the request will only perform an Auth on the provided<br>card. You can then later perform either a Capture (with the<br>[CaptureTransaction](/doc/apis/transactions.md#capture-transaction) endpoint) or a Void<br>(with the [VoidTransaction](/doc/apis/transactions.md#void-transaction) endpoint).<br><br>Default value: `false` | getDelayCapture(): ?bool | setDelayCapture(?bool delayCapture): void |
| `referenceId` | `?string` | Optional | An optional ID you can associate with the transaction for your own<br>purposes (such as to associate the transaction with an entity ID in your<br>own database).<br><br>This value cannot exceed 40 characters.<br>**Constraints**: *Maximum Length*: `40` | getReferenceId(): ?string | setReferenceId(?string referenceId): void |
| `note` | `?string` | Optional | An optional note to associate with the transaction.<br><br>This value cannot exceed 60 characters.<br>**Constraints**: *Maximum Length*: `60` | getNote(): ?string | setNote(?string note): void |
| `customerId` | `?string` | Optional | The ID of the customer to associate this transaction with. This field<br>is required if you provide a value for `customer_card_id`, and optional<br>otherwise.<br>**Constraints**: *Maximum Length*: `50` | getCustomerId(): ?string | setCustomerId(?string customerId): void |
| `billingAddress` | [`?Address`](/doc/models/address.md) | Optional | Represents a postal address in a country. The address format is based<br>on an [open-source library from Google](https://github.com/google/libaddressinput). For more information,<br>see [AddressValidationMetadata](https://github.com/google/libaddressinput/wiki/AddressValidationMetadata).<br>This format has dedicated fields for four address components: postal code,<br>locality (city), administrative district (state, prefecture, or province), and<br>sublocality (town or village). These components have dedicated fields in the<br>`Address` object because software sometimes behaves differently based on them.<br>For example, sales tax software may charge different amounts of sales tax<br>based on the postal code, and some software is only available in<br>certain states due to compliance reasons.<br><br>For the remaining address components, the `Address` type provides the<br>`address_line_1` and `address_line_2` fields for free-form data entry.<br>These fields are free-form because the remaining address components have<br>too many variations around the world and typical software does not parse<br>these components. These fields enable users to enter anything they want.<br><br>Note that, in the current implementation, all other `Address` type fields are blank.<br>These include `address_line_3`, `sublocality_2`, `sublocality_3`,<br>`administrative_district_level_2`, `administrative_district_level_3`,<br>`first_name`, `last_name`, and `organization`.<br><br>When it comes to localization, the seller's language preferences<br>(see [Language preferences](https://developer.squareup.com/docs/locations-api#location-specific-and-seller-level-language-preferences))<br>are ignored for addresses. Even though Square products (such as Square Point of Sale<br>and the Seller Dashboard) mostly use a seller's language preference in<br>communication, when it comes to addresses, they will use English for a US address,<br>Japanese for an address in Japan, and so on. | getBillingAddress(): ?Address | setBillingAddress(?Address billingAddress): void |
| `shippingAddress` | [`?Address`](/doc/models/address.md) | Optional | Represents a postal address in a country. The address format is based<br>on an [open-source library from Google](https://github.com/google/libaddressinput). For more information,<br>see [AddressValidationMetadata](https://github.com/google/libaddressinput/wiki/AddressValidationMetadata).<br>This format has dedicated fields for four address components: postal code,<br>locality (city), administrative district (state, prefecture, or province), and<br>sublocality (town or village). These components have dedicated fields in the<br>`Address` object because software sometimes behaves differently based on them.<br>For example, sales tax software may charge different amounts of sales tax<br>based on the postal code, and some software is only available in<br>certain states due to compliance reasons.<br><br>For the remaining address components, the `Address` type provides the<br>`address_line_1` and `address_line_2` fields for free-form data entry.<br>These fields are free-form because the remaining address components have<br>too many variations around the world and typical software does not parse<br>these components. These fields enable users to enter anything they want.<br><br>Note that, in the current implementation, all other `Address` type fields are blank.<br>These include `address_line_3`, `sublocality_2`, `sublocality_3`,<br>`administrative_district_level_2`, `administrative_district_level_3`,<br>`first_name`, `last_name`, and `organization`.<br><br>When it comes to localization, the seller's language preferences<br>(see [Language preferences](https://developer.squareup.com/docs/locations-api#location-specific-and-seller-level-language-preferences))<br>are ignored for addresses. Even though Square products (such as Square Point of Sale<br>and the Seller Dashboard) mostly use a seller's language preference in<br>communication, when it comes to addresses, they will use English for a US address,<br>Japanese for an address in Japan, and so on. | getShippingAddress(): ?Address | setShippingAddress(?Address shippingAddress): void |
| `buyerEmailAddress` | `?string` | Optional | The buyer's email address, if available. This value is optional,<br>but this transaction is ineligible for chargeback protection if it is not<br>provided. | getBuyerEmailAddress(): ?string | setBuyerEmailAddress(?string buyerEmailAddress): void |
| `orderId` | `?string` | Optional | The ID of the order to associate with this transaction.<br><br>If you provide this value, the `amount_money` value of your request must<br>__exactly match__ the value of the order's `total_money` field.<br>**Constraints**: *Maximum Length*: `192` | getOrderId(): ?string | setOrderId(?string orderId): void |
| `additionalRecipients` | [`?(ChargeRequestAdditionalRecipient[])`](/doc/models/charge-request-additional-recipient.md) | Optional | The basic primitive of multi-party transaction. The value is optional.<br>The transaction facilitated by you can be split from here.<br><br>If you provide this value, the `amount_money` value in your additional_recipients<br>must not be more than 90% of the `amount_money` value in the charge request.<br>The `location_id` must be the valid location of the app owner merchant.<br><br>This field requires the `PAYMENTS_WRITE_ADDITIONAL_RECIPIENTS` OAuth permission.<br><br>This field is currently not supported in sandbox. | getAdditionalRecipients(): ?array | setAdditionalRecipients(?array additionalRecipients): void |
| `verificationToken` | `?string` | Optional | A token generated by SqPaymentForm's verifyBuyer() that represents<br>customer's device info and 3ds challenge result. | getVerificationToken(): ?string | setVerificationToken(?string verificationToken): void |

## Example (as JSON)

```json
{
  "additional_recipients": [
    {
      "amount_money": {
        "amount": 20,
        "currency": "USD"
      },
      "description": "Application fees",
      "location_id": "057P5VYJ4A5X1"
    }
  ],
  "amount_money": {
    "amount": 200,
    "currency": "USD"
  },
  "billing_address": {
    "address_line_1": "500 Electric Ave",
    "address_line_2": "Suite 600",
    "administrative_district_level_1": "NY",
    "country": "US",
    "locality": "New York",
    "postal_code": "10003"
  },
  "card_nonce": "card_nonce_from_square_123",
  "delay_capture": false,
  "idempotency_key": "74ae1696-b1e3-4328-af6d-f1e04d947a13",
  "note": "some optional note",
  "reference_id": "some optional reference id",
  "shipping_address": {
    "address_line_1": "123 Main St",
    "administrative_district_level_1": "CA",
    "country": "US",
    "locality": "San Francisco",
    "postal_code": "94114"
  }
}
```


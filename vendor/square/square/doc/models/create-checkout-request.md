
# Create Checkout Request

Defines the parameters that can be included in the body of
a request to the `CreateCheckout` endpoint.

## Structure

`CreateCheckoutRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `idempotencyKey` | `string` | Required | A unique string that identifies this checkout among others you have created. It can be<br>any valid string but must be unique for every order sent to Square Checkout for a given location ID.<br><br>The idempotency key is used to avoid processing the same order more than once. If you are<br>unsure whether a particular checkout was created successfully, you can attempt it again with<br>the same idempotency key and all the same other parameters without worrying about creating duplicates.<br><br>You should use a random number/string generator native to the language<br>you are working in to generate strings for your idempotency keys.<br><br>For more information, see [Idempotency](https://developer.squareup.com/docs/working-with-apis/idempotency).<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `192` | getIdempotencyKey(): string | setIdempotencyKey(string idempotencyKey): void |
| `order` | [`CreateOrderRequest`](/doc/models/create-order-request.md) | Required | - | getOrder(): CreateOrderRequest | setOrder(CreateOrderRequest order): void |
| `askForShippingAddress` | `?bool` | Optional | If `true`, Square Checkout collects shipping information on your behalf and stores<br>that information with the transaction information in the Square Seller Dashboard.<br><br>Default: `false`. | getAskForShippingAddress(): ?bool | setAskForShippingAddress(?bool askForShippingAddress): void |
| `merchantSupportEmail` | `?string` | Optional | The email address to display on the Square Checkout confirmation page<br>and confirmation email that the buyer can use to contact the seller.<br><br>If this value is not set, the confirmation page and email display the<br>primary email address associated with the seller's Square account.<br><br>Default: none; only exists if explicitly set.<br>**Constraints**: *Maximum Length*: `254` | getMerchantSupportEmail(): ?string | setMerchantSupportEmail(?string merchantSupportEmail): void |
| `prePopulateBuyerEmail` | `?string` | Optional | If provided, the buyer's email is prepopulated on the checkout page<br>as an editable text field.<br><br>Default: none; only exists if explicitly set.<br>**Constraints**: *Maximum Length*: `254` | getPrePopulateBuyerEmail(): ?string | setPrePopulateBuyerEmail(?string prePopulateBuyerEmail): void |
| `prePopulateShippingAddress` | [`?Address`](/doc/models/address.md) | Optional | Represents a postal address in a country. The address format is based<br>on an [open-source library from Google](https://github.com/google/libaddressinput). For more information,<br>see [AddressValidationMetadata](https://github.com/google/libaddressinput/wiki/AddressValidationMetadata).<br>This format has dedicated fields for four address components: postal code,<br>locality (city), administrative district (state, prefecture, or province), and<br>sublocality (town or village). These components have dedicated fields in the<br>`Address` object because software sometimes behaves differently based on them.<br>For example, sales tax software may charge different amounts of sales tax<br>based on the postal code, and some software is only available in<br>certain states due to compliance reasons.<br><br>For the remaining address components, the `Address` type provides the<br>`address_line_1` and `address_line_2` fields for free-form data entry.<br>These fields are free-form because the remaining address components have<br>too many variations around the world and typical software does not parse<br>these components. These fields enable users to enter anything they want.<br><br>Note that, in the current implementation, all other `Address` type fields are blank.<br>These include `address_line_3`, `sublocality_2`, `sublocality_3`,<br>`administrative_district_level_2`, `administrative_district_level_3`,<br>`first_name`, `last_name`, and `organization`.<br><br>When it comes to localization, the seller's language preferences<br>(see [Language preferences](https://developer.squareup.com/docs/locations-api#location-specific-and-seller-level-language-preferences))<br>are ignored for addresses. Even though Square products (such as Square Point of Sale<br>and the Seller Dashboard) mostly use a seller's language preference in<br>communication, when it comes to addresses, they will use English for a US address,<br>Japanese for an address in Japan, and so on. | getPrePopulateShippingAddress(): ?Address | setPrePopulateShippingAddress(?Address prePopulateShippingAddress): void |
| `redirectUrl` | `?string` | Optional | The URL to redirect to after the checkout is completed with `checkoutId`,<br>`transactionId`, and `referenceId` appended as URL parameters. For example,<br>if the provided redirect URL is `http://www.example.com/order-complete`, a<br>successful transaction redirects the customer to:<br><br><pre><code>http://www.example.com/order-complete?checkoutId=xxxxxx&amp;referenceId=xxxxxx&amp;transactionId=xxxxxx</code></pre><br>If you do not provide a redirect URL, Square Checkout displays an order<br>confirmation page on your behalf; however, it is strongly recommended that<br>you provide a redirect URL so you can verify the transaction results and<br>finalize the order through your existing/normal confirmation workflow.<br><br>Default: none; only exists if explicitly set.<br>**Constraints**: *Maximum Length*: `800` | getRedirectUrl(): ?string | setRedirectUrl(?string redirectUrl): void |
| `additionalRecipients` | [`?(ChargeRequestAdditionalRecipient[])`](/doc/models/charge-request-additional-recipient.md) | Optional | The basic primitive of a multi-party transaction. The value is optional.<br>The transaction facilitated by you can be split from here.<br><br>If you provide this value, the `amount_money` value in your `additional_recipients` field<br>cannot be more than 90% of the `total_money` calculated by Square for your order.<br>The `location_id` must be a valid seller location where the checkout is occurring.<br><br>This field requires `PAYMENTS_WRITE_ADDITIONAL_RECIPIENTS` OAuth permission.<br><br>This field is currently not supported in the Square Sandbox. | getAdditionalRecipients(): ?array | setAdditionalRecipients(?array additionalRecipients): void |
| `note` | `?string` | Optional | An optional note to associate with the `checkout` object.<br><br>This value cannot exceed 60 characters.<br>**Constraints**: *Maximum Length*: `60` | getNote(): ?string | setNote(?string note): void |

## Example (as JSON)

```json
{
  "additional_recipients": [
    {
      "amount_money": {
        "amount": 60,
        "currency": "USD"
      },
      "description": "Application fees",
      "location_id": "057P5VYJ4A5X1"
    }
  ],
  "ask_for_shipping_address": true,
  "idempotency_key": "86ae1696-b1e3-4328-af6d-f1e04d947ad6",
  "merchant_support_email": "merchant+support@website.com",
  "order": {
    "idempotency_key": "12ae1696-z1e3-4328-af6d-f1e04d947gd4",
    "order": {
      "customer_id": "customer_id",
      "discounts": [
        {
          "amount_money": {
            "amount": 100,
            "currency": "USD"
          },
          "scope": "LINE_ITEM",
          "type": "FIXED_AMOUNT",
          "uid": "56ae1696-z1e3-9328-af6d-f1e04d947gd4"
        }
      ],
      "line_items": [
        {
          "applied_discounts": [
            {
              "discount_uid": "56ae1696-z1e3-9328-af6d-f1e04d947gd4"
            }
          ],
          "applied_taxes": [
            {
              "tax_uid": "38ze1696-z1e3-5628-af6d-f1e04d947fg3"
            }
          ],
          "base_price_money": {
            "amount": 1500,
            "currency": "USD"
          },
          "name": "Printed T Shirt",
          "quantity": "2"
        },
        {
          "base_price_money": {
            "amount": 2500,
            "currency": "USD"
          },
          "name": "Slim Jeans",
          "quantity": "1"
        },
        {
          "base_price_money": {
            "amount": 3500,
            "currency": "USD"
          },
          "name": "Woven Sweater",
          "quantity": "3"
        }
      ],
      "location_id": "location_id",
      "reference_id": "reference_id",
      "taxes": [
        {
          "percentage": "7.75",
          "scope": "LINE_ITEM",
          "type": "INCLUSIVE",
          "uid": "38ze1696-z1e3-5628-af6d-f1e04d947fg3"
        }
      ]
    }
  },
  "pre_populate_buyer_email": "example@email.com",
  "pre_populate_shipping_address": {
    "address_line_1": "1455 Market St.",
    "address_line_2": "Suite 600",
    "administrative_district_level_1": "CA",
    "country": "US",
    "first_name": "Jane",
    "last_name": "Doe",
    "locality": "San Francisco",
    "postal_code": "94103"
  },
  "redirect_url": "https://merchant.website.com/order-confirm"
}
```


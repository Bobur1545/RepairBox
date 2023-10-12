# Refunds

```php
$refundsApi = $client->getRefundsApi();
```

## Class Name

`RefundsApi`

## Methods

* [List Payment Refunds](/doc/apis/refunds.md#list-payment-refunds)
* [Refund Payment](/doc/apis/refunds.md#refund-payment)
* [Get Payment Refund](/doc/apis/refunds.md#get-payment-refund)


# List Payment Refunds

Retrieves a list of refunds for the account making the request.

Results are eventually consistent, and new refunds or changes to refunds might take several
seconds to appear.

The maximum results per page is 100.

```php
function listPaymentRefunds(
    ?string $beginTime = null,
    ?string $endTime = null,
    ?string $sortOrder = null,
    ?string $cursor = null,
    ?string $locationId = null,
    ?string $status = null,
    ?string $sourceType = null,
    ?int $limit = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `beginTime` | `?string` | Query, Optional | The timestamp for the beginning of the requested reporting period, in RFC 3339 format.<br><br>Default: The current time minus one year. |
| `endTime` | `?string` | Query, Optional | The timestamp for the end of the requested reporting period, in RFC 3339 format.<br><br>Default: The current time. |
| `sortOrder` | `?string` | Query, Optional | The order in which results are listed:<br><br>- `ASC` - Oldest to newest.<br>- `DESC` - Newest to oldest (default). |
| `cursor` | `?string` | Query, Optional | A pagination cursor returned by a previous call to this endpoint.<br>Provide this cursor to retrieve the next set of results for the original query.<br><br>For more information, see [Pagination](https://developer.squareup.com/docs/basics/api101/pagination). |
| `locationId` | `?string` | Query, Optional | Limit results to the location supplied. By default, results are returned<br>for all locations associated with the seller. |
| `status` | `?string` | Query, Optional | If provided, only refunds with the given status are returned.<br>For a list of refund status values, see [PaymentRefund](/doc/models/payment-refund.md).<br><br>Default: If omitted, refunds are returned regardless of their status. |
| `sourceType` | `?string` | Query, Optional | If provided, only refunds with the given source type are returned.<br><br>- `CARD` - List refunds only for payments where `CARD` was specified as the payment<br>  source.<br><br>Default: If omitted, refunds are returned regardless of the source type. |
| `limit` | `?int` | Query, Optional | The maximum number of results to be returned in a single page.<br><br>It is possible to receive fewer results than the specified limit on a given page.<br><br>If the supplied value is greater than 100, no more than 100 results are returned.<br><br>Default: 100 |

## Response Type

[`ListPaymentRefundsResponse`](/doc/models/list-payment-refunds-response.md)

## Example Usage

```php
$beginTime = 'begin_time2';
$endTime = 'end_time2';
$sortOrder = 'sort_order0';
$cursor = 'cursor6';
$locationId = 'location_id4';
$status = 'status8';
$sourceType = 'source_type0';
$limit = 172;

$apiResponse = $refundsApi->listPaymentRefunds($beginTime, $endTime, $sortOrder, $cursor, $locationId, $status, $sourceType, $limit);

if ($apiResponse->isSuccess()) {
    $listPaymentRefundsResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Refund Payment

Refunds a payment. You can refund the entire payment amount or a
portion of it. You can use this endpoint to refund a card payment or record a
refund of a cash or external payment. For more information, see
[Refund Payment](https://developer.squareup.com/docs/payments-api/refund-payments).

```php
function refundPayment(RefundPaymentRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`RefundPaymentRequest`](/doc/models/refund-payment-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`RefundPaymentResponse`](/doc/models/refund-payment-response.md)

## Example Usage

```php
$body_idempotencyKey = 'a7e36d40-d24b-11e8-b568-0800200c9a66';
$body_amountMoney = new Models\Money;
$body_amountMoney->setAmount(100);
$body_amountMoney->setCurrency(Models\Currency::USD);
$body_paymentId = 'UNOE3kv2BZwqHlJ830RCt5YCuaB';
$body = new Models\RefundPaymentRequest(
    $body_idempotencyKey,
    $body_amountMoney,
    $body_paymentId
);
$body->setAppFeeMoney(new Models\Money);
$body->getAppFeeMoney()->setAmount(114);
$body->getAppFeeMoney()->setCurrency(Models\Currency::GEL);
$body->setReason('reason8');

$apiResponse = $refundsApi->refundPayment($body);

if ($apiResponse->isSuccess()) {
    $refundPaymentResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Get Payment Refund

Retrieves a specific refund using the `refund_id`.

```php
function getPaymentRefund(string $refundId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `refundId` | `string` | Template, Required | The unique ID for the desired `PaymentRefund`. |

## Response Type

[`GetPaymentRefundResponse`](/doc/models/get-payment-refund-response.md)

## Example Usage

```php
$refundId = 'refund_id4';

$apiResponse = $refundsApi->getPaymentRefund($refundId);

if ($apiResponse->isSuccess()) {
    $getPaymentRefundResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


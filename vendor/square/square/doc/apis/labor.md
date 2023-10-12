# Labor

```php
$laborApi = $client->getLaborApi();
```

## Class Name

`LaborApi`

## Methods

* [List Break Types](/doc/apis/labor.md#list-break-types)
* [Create Break Type](/doc/apis/labor.md#create-break-type)
* [Delete Break Type](/doc/apis/labor.md#delete-break-type)
* [Get Break Type](/doc/apis/labor.md#get-break-type)
* [Update Break Type](/doc/apis/labor.md#update-break-type)
* [List Employee Wages](/doc/apis/labor.md#list-employee-wages)
* [Get Employee Wage](/doc/apis/labor.md#get-employee-wage)
* [Create Shift](/doc/apis/labor.md#create-shift)
* [Search Shifts](/doc/apis/labor.md#search-shifts)
* [Delete Shift](/doc/apis/labor.md#delete-shift)
* [Get Shift](/doc/apis/labor.md#get-shift)
* [Update Shift](/doc/apis/labor.md#update-shift)
* [List Team Member Wages](/doc/apis/labor.md#list-team-member-wages)
* [Get Team Member Wage](/doc/apis/labor.md#get-team-member-wage)
* [List Workweek Configs](/doc/apis/labor.md#list-workweek-configs)
* [Update Workweek Config](/doc/apis/labor.md#update-workweek-config)


# List Break Types

Returns a paginated list of `BreakType` instances for a business.

```php
function listBreakTypes(?string $locationId = null, ?int $limit = null, ?string $cursor = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `locationId` | `?string` | Query, Optional | Filter the returned `BreakType` results to only those that are associated with the<br>specified location. |
| `limit` | `?int` | Query, Optional | The maximum number of `BreakType` results to return per page. The number can range between 1<br>and 200. The default is 200. |
| `cursor` | `?string` | Query, Optional | A pointer to the next page of `BreakType` results to fetch. |

## Response Type

[`ListBreakTypesResponse`](/doc/models/list-break-types-response.md)

## Example Usage

```php
$locationId = 'location_id4';
$limit = 172;
$cursor = 'cursor6';

$apiResponse = $laborApi->listBreakTypes($locationId, $limit, $cursor);

if ($apiResponse->isSuccess()) {
    $listBreakTypesResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Create Break Type

Creates a new `BreakType`.

A `BreakType` is a template for creating `Break` objects.
You must provide the following values in your request to this
endpoint:

- `location_id`
- `break_name`
- `expected_duration`
- `is_paid`

You can only have three `BreakType` instances per location. If you attempt to add a fourth
`BreakType` for a location, an `INVALID_REQUEST_ERROR` "Exceeded limit of 3 breaks per location."
is returned.

```php
function createBreakType(CreateBreakTypeRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CreateBreakTypeRequest`](/doc/models/create-break-type-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`CreateBreakTypeResponse`](/doc/models/create-break-type-response.md)

## Example Usage

```php
$body_breakType_locationId = 'CGJN03P1D08GF';
$body_breakType_breakName = 'Lunch Break';
$body_breakType_expectedDuration = 'PT30M';
$body_breakType_isPaid = true;
$body_breakType = new Models\BreakType(
    $body_breakType_locationId,
    $body_breakType_breakName,
    $body_breakType_expectedDuration,
    $body_breakType_isPaid
);
$body_breakType->setId('id2');
$body_breakType->setVersion(124);
$body_breakType->setCreatedAt('created_at0');
$body_breakType->setUpdatedAt('updated_at8');
$body = new Models\CreateBreakTypeRequest(
    $body_breakType
);
$body->setIdempotencyKey('PAD3NG5KSN2GL');

$apiResponse = $laborApi->createBreakType($body);

if ($apiResponse->isSuccess()) {
    $createBreakTypeResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Delete Break Type

Deletes an existing `BreakType`.

A `BreakType` can be deleted even if it is referenced from a `Shift`.

```php
function deleteBreakType(string $id): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | The UUID for the `BreakType` being deleted. |

## Response Type

[`DeleteBreakTypeResponse`](/doc/models/delete-break-type-response.md)

## Example Usage

```php
$id = 'id0';

$apiResponse = $laborApi->deleteBreakType($id);

if ($apiResponse->isSuccess()) {
    $deleteBreakTypeResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Get Break Type

Returns a single `BreakType` specified by `id`.

```php
function getBreakType(string $id): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | The UUID for the `BreakType` being retrieved. |

## Response Type

[`GetBreakTypeResponse`](/doc/models/get-break-type-response.md)

## Example Usage

```php
$id = 'id0';

$apiResponse = $laborApi->getBreakType($id);

if ($apiResponse->isSuccess()) {
    $getBreakTypeResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Update Break Type

Updates an existing `BreakType`.

```php
function updateBreakType(string $id, UpdateBreakTypeRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | The UUID for the `BreakType` being updated. |
| `body` | [`UpdateBreakTypeRequest`](/doc/models/update-break-type-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`UpdateBreakTypeResponse`](/doc/models/update-break-type-response.md)

## Example Usage

```php
$id = 'id0';
$body_breakType_locationId = '26M7H24AZ9N6R';
$body_breakType_breakName = 'Lunch';
$body_breakType_expectedDuration = 'PT50M';
$body_breakType_isPaid = true;
$body_breakType = new Models\BreakType(
    $body_breakType_locationId,
    $body_breakType_breakName,
    $body_breakType_expectedDuration,
    $body_breakType_isPaid
);
$body_breakType->setId('id2');
$body_breakType->setVersion(1);
$body_breakType->setCreatedAt('created_at0');
$body_breakType->setUpdatedAt('updated_at8');
$body = new Models\UpdateBreakTypeRequest(
    $body_breakType
);

$apiResponse = $laborApi->updateBreakType($id, $body);

if ($apiResponse->isSuccess()) {
    $updateBreakTypeResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# List Employee Wages

**This endpoint is deprecated.**

Returns a paginated list of `EmployeeWage` instances for a business.

```php
function listEmployeeWages(?string $employeeId = null, ?int $limit = null, ?string $cursor = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `employeeId` | `?string` | Query, Optional | Filter the returned wages to only those that are associated with the specified employee. |
| `limit` | `?int` | Query, Optional | The maximum number of `EmployeeWage` results to return per page. The number can range between<br>1 and 200. The default is 200. |
| `cursor` | `?string` | Query, Optional | A pointer to the next page of `EmployeeWage` results to fetch. |

## Response Type

[`ListEmployeeWagesResponse`](/doc/models/list-employee-wages-response.md)

## Example Usage

```php
$employeeId = 'employee_id0';
$limit = 172;
$cursor = 'cursor6';

$apiResponse = $laborApi->listEmployeeWages($employeeId, $limit, $cursor);

if ($apiResponse->isSuccess()) {
    $listEmployeeWagesResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Get Employee Wage

**This endpoint is deprecated.**

Returns a single `EmployeeWage` specified by `id`.

```php
function getEmployeeWage(string $id): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | The UUID for the `EmployeeWage` being retrieved. |

## Response Type

[`GetEmployeeWageResponse`](/doc/models/get-employee-wage-response.md)

## Example Usage

```php
$id = 'id0';

$apiResponse = $laborApi->getEmployeeWage($id);

if ($apiResponse->isSuccess()) {
    $getEmployeeWageResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Create Shift

Creates a new `Shift`.

A `Shift` represents a complete workday for a single employee.
You must provide the following values in your request to this
endpoint:

- `location_id`
- `employee_id`
- `start_at`

An attempt to create a new `Shift` can result in a `BAD_REQUEST` error when:

- The `status` of the new `Shift` is `OPEN` and the employee has another
  shift with an `OPEN` status.
- The `start_at` date is in the future.
- The `start_at` or `end_at` date overlaps another shift for the same employee.
- The `Break` instances are set in the request and a break `start_at`
  is before the `Shift.start_at`, a break `end_at` is after
  the `Shift.end_at`, or both.

```php
function createShift(CreateShiftRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CreateShiftRequest`](/doc/models/create-shift-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`CreateShiftResponse`](/doc/models/create-shift-response.md)

## Example Usage

```php
$body_shift_startAt = '2019-01-25T03:11:00-05:00';
$body_shift = new Models\Shift(
    $body_shift_startAt
);
$body_shift->setId('id8');
$body_shift->setEmployeeId('employee_id2');
$body_shift->setLocationId('PAA1RJZZKXBFG');
$body_shift->setTimezone('timezone2');
$body_shift->setEndAt('2019-01-25T13:11:00-05:00');
$body_shift->setWage(new Models\ShiftWage);
$body_shift->getWage()->setTitle('Barista');
$body_shift->getWage()->setHourlyRate(new Models\Money);
$body_shift->getWage()->getHourlyRate()->setAmount(1100);
$body_shift->getWage()->getHourlyRate()->setCurrency(Models\Currency::USD);
$body_shift_breaks = [];

$body_shift_breaks_0_startAt = '2019-01-25T06:11:00-05:00';
$body_shift_breaks_0_breakTypeId = 'REGS1EQR1TPZ5';
$body_shift_breaks_0_name = 'Tea Break';
$body_shift_breaks_0_expectedDuration = 'PT5M';
$body_shift_breaks_0_isPaid = true;
$body_shift_breaks[0] = new Models\MBreak(
    $body_shift_breaks_0_startAt,
    $body_shift_breaks_0_breakTypeId,
    $body_shift_breaks_0_name,
    $body_shift_breaks_0_expectedDuration,
    $body_shift_breaks_0_isPaid
);
$body_shift_breaks[0]->setId('id4');
$body_shift_breaks[0]->setEndAt('2019-01-25T06:16:00-05:00');
$body_shift->setBreaks($body_shift_breaks);

$body_shift->setTeamMemberId('ormj0jJJZ5OZIzxrZYJI');
$body = new Models\CreateShiftRequest(
    $body_shift
);
$body->setIdempotencyKey('HIDSNG5KS478L');

$apiResponse = $laborApi->createShift($body);

if ($apiResponse->isSuccess()) {
    $createShiftResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Search Shifts

Returns a paginated list of `Shift` records for a business.
The list to be returned can be filtered by:

- Location IDs.
- Employee IDs.
- Shift status (`OPEN` and `CLOSED`).
- Shift start.
- Shift end.
- Workday details.

The list can be sorted by:

- `start_at`.
- `end_at`.
- `created_at`.
- `updated_at`.

```php
function searchShifts(SearchShiftsRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`SearchShiftsRequest`](/doc/models/search-shifts-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`SearchShiftsResponse`](/doc/models/search-shifts-response.md)

## Example Usage

```php
$body = new Models\SearchShiftsRequest;
$body->setQuery(new Models\ShiftQuery);
$body_query_filter_locationIds = ['location_ids2'];
$body_query_filter_teamMemberIds = ['team_member_ids9', 'team_member_ids0'];
$body->getQuery()->setFilter(new Models\ShiftFilter(
    $body_query_filter_locationIds,
    $body_query_filter_teamMemberIds
));
$body->getQuery()->getFilter()->setEmployeeIds(['employee_ids7']);
$body->getQuery()->getFilter()->setStatus(Models\ShiftFilterStatus::OPEN);
$body->getQuery()->getFilter()->setStart(new Models\TimeRange);
$body->getQuery()->getFilter()->getStart()->setStartAt('start_at8');
$body->getQuery()->getFilter()->getStart()->setEndAt('end_at4');
$body->getQuery()->getFilter()->setEnd(new Models\TimeRange);
$body->getQuery()->getFilter()->getEnd()->setStartAt('start_at2');
$body->getQuery()->getFilter()->getEnd()->setEndAt('end_at0');
$body->getQuery()->getFilter()->setWorkday(new Models\ShiftWorkday);
$body->getQuery()->getFilter()->getWorkday()->setDateRange(new Models\DateRange);
$body->getQuery()->getFilter()->getWorkday()->getDateRange()->setStartDate('start_date8');
$body->getQuery()->getFilter()->getWorkday()->getDateRange()->setEndDate('end_date4');
$body->getQuery()->getFilter()->getWorkday()->setMatchShiftsBy(Models\ShiftWorkdayMatcher::START_AT);
$body->getQuery()->getFilter()->getWorkday()->setDefaultTimezone('default_timezone8');
$body->getQuery()->setSort(new Models\ShiftSort);
$body->getQuery()->getSort()->setField(Models\ShiftSortField::CREATED_AT);
$body->getQuery()->getSort()->setOrder(Models\SortOrder::DESC);
$body->setLimit(164);
$body->setCursor('cursor0');

$apiResponse = $laborApi->searchShifts($body);

if ($apiResponse->isSuccess()) {
    $searchShiftsResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Delete Shift

Deletes a `Shift`.

```php
function deleteShift(string $id): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | The UUID for the `Shift` being deleted. |

## Response Type

[`DeleteShiftResponse`](/doc/models/delete-shift-response.md)

## Example Usage

```php
$id = 'id0';

$apiResponse = $laborApi->deleteShift($id);

if ($apiResponse->isSuccess()) {
    $deleteShiftResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Get Shift

Returns a single `Shift` specified by `id`.

```php
function getShift(string $id): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | The UUID for the `Shift` being retrieved. |

## Response Type

[`GetShiftResponse`](/doc/models/get-shift-response.md)

## Example Usage

```php
$id = 'id0';

$apiResponse = $laborApi->getShift($id);

if ($apiResponse->isSuccess()) {
    $getShiftResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Update Shift

Updates an existing `Shift`.

When adding a `Break` to a `Shift`, any earlier `Break` instances in the `Shift` have
the `end_at` property set to a valid RFC-3339 datetime string.

When closing a `Shift`, all `Break` instances in the `Shift` must be complete with `end_at`
set on each `Break`.

```php
function updateShift(string $id, UpdateShiftRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | The ID of the object being updated. |
| `body` | [`UpdateShiftRequest`](/doc/models/update-shift-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`UpdateShiftResponse`](/doc/models/update-shift-response.md)

## Example Usage

```php
$id = 'id0';
$body_shift_startAt = '2019-01-25T03:11:00-05:00';
$body_shift = new Models\Shift(
    $body_shift_startAt
);
$body_shift->setId('id8');
$body_shift->setEmployeeId('employee_id2');
$body_shift->setLocationId('PAA1RJZZKXBFG');
$body_shift->setTimezone('timezone2');
$body_shift->setEndAt('2019-01-25T13:11:00-05:00');
$body_shift->setWage(new Models\ShiftWage);
$body_shift->getWage()->setTitle('Bartender');
$body_shift->getWage()->setHourlyRate(new Models\Money);
$body_shift->getWage()->getHourlyRate()->setAmount(1500);
$body_shift->getWage()->getHourlyRate()->setCurrency(Models\Currency::USD);
$body_shift_breaks = [];

$body_shift_breaks_0_startAt = '2019-01-25T06:11:00-05:00';
$body_shift_breaks_0_breakTypeId = 'REGS1EQR1TPZ5';
$body_shift_breaks_0_name = 'Tea Break';
$body_shift_breaks_0_expectedDuration = 'PT5M';
$body_shift_breaks_0_isPaid = true;
$body_shift_breaks[0] = new Models\MBreak(
    $body_shift_breaks_0_startAt,
    $body_shift_breaks_0_breakTypeId,
    $body_shift_breaks_0_name,
    $body_shift_breaks_0_expectedDuration,
    $body_shift_breaks_0_isPaid
);
$body_shift_breaks[0]->setId('X7GAQYVVRRG6P');
$body_shift_breaks[0]->setEndAt('2019-01-25T06:16:00-05:00');
$body_shift->setBreaks($body_shift_breaks);

$body_shift->setVersion(1);
$body_shift->setTeamMemberId('ormj0jJJZ5OZIzxrZYJI');
$body = new Models\UpdateShiftRequest(
    $body_shift
);

$apiResponse = $laborApi->updateShift($id, $body);

if ($apiResponse->isSuccess()) {
    $updateShiftResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# List Team Member Wages

Returns a paginated list of `TeamMemberWage` instances for a business.

```php
function listTeamMemberWages(
    ?string $teamMemberId = null,
    ?int $limit = null,
    ?string $cursor = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `teamMemberId` | `?string` | Query, Optional | Filter the returned wages to only those that are associated with the<br>specified team member. |
| `limit` | `?int` | Query, Optional | The maximum number of `TeamMemberWage` results to return per page. The number can range between<br>1 and 200. The default is 200. |
| `cursor` | `?string` | Query, Optional | A pointer to the next page of `EmployeeWage` results to fetch. |

## Response Type

[`ListTeamMemberWagesResponse`](/doc/models/list-team-member-wages-response.md)

## Example Usage

```php
$teamMemberId = 'team_member_id0';
$limit = 172;
$cursor = 'cursor6';

$apiResponse = $laborApi->listTeamMemberWages($teamMemberId, $limit, $cursor);

if ($apiResponse->isSuccess()) {
    $listTeamMemberWagesResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Get Team Member Wage

Returns a single `TeamMemberWage` specified by `id`.

```php
function getTeamMemberWage(string $id): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | The UUID for the `TeamMemberWage` being retrieved. |

## Response Type

[`GetTeamMemberWageResponse`](/doc/models/get-team-member-wage-response.md)

## Example Usage

```php
$id = 'id0';

$apiResponse = $laborApi->getTeamMemberWage($id);

if ($apiResponse->isSuccess()) {
    $getTeamMemberWageResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# List Workweek Configs

Returns a list of `WorkweekConfig` instances for a business.

```php
function listWorkweekConfigs(?int $limit = null, ?string $cursor = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `limit` | `?int` | Query, Optional | The maximum number of `WorkweekConfigs` results to return per page. |
| `cursor` | `?string` | Query, Optional | A pointer to the next page of `WorkweekConfig` results to fetch. |

## Response Type

[`ListWorkweekConfigsResponse`](/doc/models/list-workweek-configs-response.md)

## Example Usage

```php
$limit = 172;
$cursor = 'cursor6';

$apiResponse = $laborApi->listWorkweekConfigs($limit, $cursor);

if ($apiResponse->isSuccess()) {
    $listWorkweekConfigsResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


# Update Workweek Config

Updates a `WorkweekConfig`.

```php
function updateWorkweekConfig(string $id, UpdateWorkweekConfigRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | The UUID for the `WorkweekConfig` object being updated. |
| `body` | [`UpdateWorkweekConfigRequest`](/doc/models/update-workweek-config-request.md) | Body, Required | An object containing the fields to POST for the request.<br><br>See the corresponding object definition for field details. |

## Response Type

[`UpdateWorkweekConfigResponse`](/doc/models/update-workweek-config-response.md)

## Example Usage

```php
$id = 'id0';
$body_workweekConfig_startOfWeek = Models\Weekday::MON;
$body_workweekConfig_startOfDayLocalTime = '10:00';
$body_workweekConfig = new Models\WorkweekConfig(
    $body_workweekConfig_startOfWeek,
    $body_workweekConfig_startOfDayLocalTime
);
$body_workweekConfig->setId('id4');
$body_workweekConfig->setVersion(10);
$body_workweekConfig->setCreatedAt('created_at2');
$body_workweekConfig->setUpdatedAt('updated_at0');
$body = new Models\UpdateWorkweekConfigRequest(
    $body_workweekConfig
);

$apiResponse = $laborApi->updateWorkweekConfig($id, $body);

if ($apiResponse->isSuccess()) {
    $updateWorkweekConfigResponse = $apiResponse->getResult();
} else {
    $errors = $apiResponse->getErrors();
}

// Get more response info...
// $statusCode = $apiResponse->getStatusCode();
// $headers = $apiResponse->getHeaders();
```


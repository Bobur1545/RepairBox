<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Either the `order_entries` or `orders` field is set, depending on whether
 * `return_entries` is set on the [SearchOrdersRequest]($e/Orders/SearchOrders).
 */
class SearchOrdersResponse implements \JsonSerializable
{
    /**
     * @var OrderEntry[]|null
     */
    private $orderEntries;

    /**
     * @var Order[]|null
     */
    private $orders;

    /**
     * @var string|null
     */
    private $cursor;

    /**
     * @var Error[]|null
     */
    private $errors;

    /**
     * Returns Order Entries.
     *
     * A list of [OrderEntries]($m/OrderEntry) that fit the query
     * conditions. The list is populated only if `return_entries` is set to `true` in the request.
     *
     * @return OrderEntry[]|null
     */
    public function getOrderEntries(): ?array
    {
        return $this->orderEntries;
    }

    /**
     * Sets Order Entries.
     *
     * A list of [OrderEntries]($m/OrderEntry) that fit the query
     * conditions. The list is populated only if `return_entries` is set to `true` in the request.
     *
     * @maps order_entries
     *
     * @param OrderEntry[]|null $orderEntries
     */
    public function setOrderEntries(?array $orderEntries): void
    {
        $this->orderEntries = $orderEntries;
    }

    /**
     * Returns Orders.
     *
     * A list of
     * [Order]($m/Order) objects that match the query conditions. The list is populated only if
     * `return_entries` is set to `false` in the request.
     *
     * @return Order[]|null
     */
    public function getOrders(): ?array
    {
        return $this->orders;
    }

    /**
     * Sets Orders.
     *
     * A list of
     * [Order]($m/Order) objects that match the query conditions. The list is populated only if
     * `return_entries` is set to `false` in the request.
     *
     * @maps orders
     *
     * @param Order[]|null $orders
     */
    public function setOrders(?array $orders): void
    {
        $this->orders = $orders;
    }

    /**
     * Returns Cursor.
     *
     * The pagination cursor to be used in a subsequent request. If unset,
     * this is the final response.
     * For more information, see [Pagination](https://developer.squareup.com/docs/basics/api101/pagination).
     */
    public function getCursor(): ?string
    {
        return $this->cursor;
    }

    /**
     * Sets Cursor.
     *
     * The pagination cursor to be used in a subsequent request. If unset,
     * this is the final response.
     * For more information, see [Pagination](https://developer.squareup.com/docs/basics/api101/pagination).
     *
     * @maps cursor
     */
    public function setCursor(?string $cursor): void
    {
        $this->cursor = $cursor;
    }

    /**
     * Returns Errors.
     *
     * [Errors]($m/Error) encountered during the search.
     *
     * @return Error[]|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     *
     * [Errors]($m/Error) encountered during the search.
     *
     * @maps errors
     *
     * @param Error[]|null $errors
     */
    public function setErrors(?array $errors): void
    {
        $this->errors = $errors;
    }

    /**
     * Encode this object to JSON
     *
     * @return mixed
     */
    public function jsonSerialize()
    {
        $json = [];
        if (isset($this->orderEntries)) {
            $json['order_entries'] = $this->orderEntries;
        }
        if (isset($this->orders)) {
            $json['orders']        = $this->orders;
        }
        if (isset($this->cursor)) {
            $json['cursor']        = $this->cursor;
        }
        if (isset($this->errors)) {
            $json['errors']        = $this->errors;
        }

        return array_filter($json, function ($val) {
            return $val !== null;
        });
    }
}

<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Describes a `SearchInvoices` response.
 */
class SearchInvoicesResponse implements \JsonSerializable
{
    /**
     * @var Invoice[]|null
     */
    private $invoices;

    /**
     * @var string|null
     */
    private $cursor;

    /**
     * @var Error[]|null
     */
    private $errors;

    /**
     * Returns Invoices.
     *
     * The list of invoices returned by the search.
     *
     * @return Invoice[]|null
     */
    public function getInvoices(): ?array
    {
        return $this->invoices;
    }

    /**
     * Sets Invoices.
     *
     * The list of invoices returned by the search.
     *
     * @maps invoices
     *
     * @param Invoice[]|null $invoices
     */
    public function setInvoices(?array $invoices): void
    {
        $this->invoices = $invoices;
    }

    /**
     * Returns Cursor.
     *
     * When a response is truncated, it includes a cursor that you can use in a
     * subsequent request to fetch the next set of invoices. If empty, this is the final
     * response.
     * For more information, see [Pagination](https://developer.squareup.com/docs/working-with-
     * apis/pagination).
     */
    public function getCursor(): ?string
    {
        return $this->cursor;
    }

    /**
     * Sets Cursor.
     *
     * When a response is truncated, it includes a cursor that you can use in a
     * subsequent request to fetch the next set of invoices. If empty, this is the final
     * response.
     * For more information, see [Pagination](https://developer.squareup.com/docs/working-with-
     * apis/pagination).
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
     * Information about errors encountered during the request.
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
     * Information about errors encountered during the request.
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
        if (isset($this->invoices)) {
            $json['invoices'] = $this->invoices;
        }
        if (isset($this->cursor)) {
            $json['cursor']   = $this->cursor;
        }
        if (isset($this->errors)) {
            $json['errors']   = $this->errors;
        }

        return array_filter($json, function ($val) {
            return $val !== null;
        });
    }
}

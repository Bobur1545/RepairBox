<?php

declare(strict_types=1);

namespace Square\Models;

class SearchTerminalCheckoutsResponse implements \JsonSerializable
{
    /**
     * @var Error[]|null
     */
    private $errors;

    /**
     * @var TerminalCheckout[]|null
     */
    private $checkouts;

    /**
     * @var string|null
     */
    private $cursor;

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
     * Returns Checkouts.
     *
     * The requested search result of `TerminalCheckout` objects.
     *
     * @return TerminalCheckout[]|null
     */
    public function getCheckouts(): ?array
    {
        return $this->checkouts;
    }

    /**
     * Sets Checkouts.
     *
     * The requested search result of `TerminalCheckout` objects.
     *
     * @maps checkouts
     *
     * @param TerminalCheckout[]|null $checkouts
     */
    public function setCheckouts(?array $checkouts): void
    {
        $this->checkouts = $checkouts;
    }

    /**
     * Returns Cursor.
     *
     * The pagination cursor to be used in a subsequent request. If empty,
     * this is the final response.
     *
     * See [Pagination](https://developer.squareup.com/docs/basics/api101/pagination) for more information.
     */
    public function getCursor(): ?string
    {
        return $this->cursor;
    }

    /**
     * Sets Cursor.
     *
     * The pagination cursor to be used in a subsequent request. If empty,
     * this is the final response.
     *
     * See [Pagination](https://developer.squareup.com/docs/basics/api101/pagination) for more information.
     *
     * @maps cursor
     */
    public function setCursor(?string $cursor): void
    {
        $this->cursor = $cursor;
    }

    /**
     * Encode this object to JSON
     *
     * @return mixed
     */
    public function jsonSerialize()
    {
        $json = [];
        if (isset($this->errors)) {
            $json['errors']    = $this->errors;
        }
        if (isset($this->checkouts)) {
            $json['checkouts'] = $this->checkouts;
        }
        if (isset($this->cursor)) {
            $json['cursor']    = $this->cursor;
        }

        return array_filter($json, function ($val) {
            return $val !== null;
        });
    }
}

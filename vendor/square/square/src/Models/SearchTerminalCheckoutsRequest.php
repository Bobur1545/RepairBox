<?php

declare(strict_types=1);

namespace Square\Models;

class SearchTerminalCheckoutsRequest implements \JsonSerializable
{
    /**
     * @var TerminalCheckoutQuery|null
     */
    private $query;

    /**
     * @var string|null
     */
    private $cursor;

    /**
     * @var int|null
     */
    private $limit;

    /**
     * Returns Query.
     */
    public function getQuery(): ?TerminalCheckoutQuery
    {
        return $this->query;
    }

    /**
     * Sets Query.
     *
     * @maps query
     */
    public function setQuery(?TerminalCheckoutQuery $query): void
    {
        $this->query = $query;
    }

    /**
     * Returns Cursor.
     *
     * A pagination cursor returned by a previous call to this endpoint.
     * Provide this cursor to retrieve the next set of results for the original query.
     * See [Pagination](https://developer.squareup.com/docs/basics/api101/pagination) for more information.
     */
    public function getCursor(): ?string
    {
        return $this->cursor;
    }

    /**
     * Sets Cursor.
     *
     * A pagination cursor returned by a previous call to this endpoint.
     * Provide this cursor to retrieve the next set of results for the original query.
     * See [Pagination](https://developer.squareup.com/docs/basics/api101/pagination) for more information.
     *
     * @maps cursor
     */
    public function setCursor(?string $cursor): void
    {
        $this->cursor = $cursor;
    }

    /**
     * Returns Limit.
     *
     * Limits the number of results returned for a single request.
     */
    public function getLimit(): ?int
    {
        return $this->limit;
    }

    /**
     * Sets Limit.
     *
     * Limits the number of results returned for a single request.
     *
     * @maps limit
     */
    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
    }

    /**
     * Encode this object to JSON
     *
     * @return mixed
     */
    public function jsonSerialize()
    {
        $json = [];
        if (isset($this->query)) {
            $json['query']  = $this->query;
        }
        if (isset($this->cursor)) {
            $json['cursor'] = $this->cursor;
        }
        if (isset($this->limit)) {
            $json['limit']  = $this->limit;
        }

        return array_filter($json, function ($val) {
            return $val !== null;
        });
    }
}

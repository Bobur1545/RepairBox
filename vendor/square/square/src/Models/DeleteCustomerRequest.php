<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Defines the fields that are included in a request to the `DeleteCustomer`
 * endpoint.
 */
class DeleteCustomerRequest implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $version;

    /**
     * Returns Version.
     *
     * The current version of the customer profile.
     *
     * As a best practice, you should include this parameter to enable [optimistic concurrency](https:
     * //developer.squareup.com/docs/working-with-apis/optimistic-concurrency) control.  For more
     * information, see [Delete a customer profile](https://developer.squareup.com/docs/customers-api/use-
     * the-api/keep-records#delete-customer-profile).
     */
    public function getVersion(): ?int
    {
        return $this->version;
    }

    /**
     * Sets Version.
     *
     * The current version of the customer profile.
     *
     * As a best practice, you should include this parameter to enable [optimistic concurrency](https:
     * //developer.squareup.com/docs/working-with-apis/optimistic-concurrency) control.  For more
     * information, see [Delete a customer profile](https://developer.squareup.com/docs/customers-api/use-
     * the-api/keep-records#delete-customer-profile).
     *
     * @maps version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * Encode this object to JSON
     *
     * @return mixed
     */
    public function jsonSerialize()
    {
        $json = [];
        if (isset($this->version)) {
            $json['version'] = $this->version;
        }

        return array_filter($json, function ($val) {
            return $val !== null;
        });
    }
}

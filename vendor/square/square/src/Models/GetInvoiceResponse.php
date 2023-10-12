<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Describes a `GetInvoice` response.
 */
class GetInvoiceResponse implements \JsonSerializable
{
    /**
     * @var Invoice|null
     */
    private $invoice;

    /**
     * @var Error[]|null
     */
    private $errors;

    /**
     * Returns Invoice.
     *
     * Stores information about an invoice. You use the Invoices API to create and manage
     * invoices. For more information, see [Manage Invoices Using the Invoices API](https://developer.
     * squareup.com/docs/invoices-api/overview).
     */
    public function getInvoice(): ?Invoice
    {
        return $this->invoice;
    }

    /**
     * Sets Invoice.
     *
     * Stores information about an invoice. You use the Invoices API to create and manage
     * invoices. For more information, see [Manage Invoices Using the Invoices API](https://developer.
     * squareup.com/docs/invoices-api/overview).
     *
     * @maps invoice
     */
    public function setInvoice(?Invoice $invoice): void
    {
        $this->invoice = $invoice;
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
        if (isset($this->invoice)) {
            $json['invoice'] = $this->invoice;
        }
        if (isset($this->errors)) {
            $json['errors']  = $this->errors;
        }

        return array_filter($json, function ($val) {
            return $val !== null;
        });
    }
}

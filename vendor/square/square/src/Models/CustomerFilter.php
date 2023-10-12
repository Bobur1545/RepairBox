<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * Represents a set of `CustomerQuery` filters used to limit the set of
 * customers returned by the [SearchCustomers]($e/Customers/SearchCustomers) endpoint.
 */
class CustomerFilter implements \JsonSerializable
{
    /**
     * @var CustomerCreationSourceFilter|null
     */
    private $creationSource;

    /**
     * @var TimeRange|null
     */
    private $createdAt;

    /**
     * @var TimeRange|null
     */
    private $updatedAt;

    /**
     * @var CustomerTextFilter|null
     */
    private $emailAddress;

    /**
     * @var CustomerTextFilter|null
     */
    private $phoneNumber;

    /**
     * @var CustomerTextFilter|null
     */
    private $referenceId;

    /**
     * @var FilterValue|null
     */
    private $groupIds;

    /**
     * Returns Creation Source.
     *
     * The creation source filter.
     *
     * If one or more creation sources are set, customer profiles are included in,
     * or excluded from, the result if they match at least one of the filter criteria.
     */
    public function getCreationSource(): ?CustomerCreationSourceFilter
    {
        return $this->creationSource;
    }

    /**
     * Sets Creation Source.
     *
     * The creation source filter.
     *
     * If one or more creation sources are set, customer profiles are included in,
     * or excluded from, the result if they match at least one of the filter criteria.
     *
     * @maps creation_source
     */
    public function setCreationSource(?CustomerCreationSourceFilter $creationSource): void
    {
        $this->creationSource = $creationSource;
    }

    /**
     * Returns Created At.
     *
     * Represents a generic time range. The start and end values are
     * represented in RFC 3339 format. Time ranges are customized to be
     * inclusive or exclusive based on the needs of a particular endpoint.
     * Refer to the relevant endpoint-specific documentation to determine
     * how time ranges are handled.
     */
    public function getCreatedAt(): ?TimeRange
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * Represents a generic time range. The start and end values are
     * represented in RFC 3339 format. Time ranges are customized to be
     * inclusive or exclusive based on the needs of a particular endpoint.
     * Refer to the relevant endpoint-specific documentation to determine
     * how time ranges are handled.
     *
     * @maps created_at
     */
    public function setCreatedAt(?TimeRange $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Updated At.
     *
     * Represents a generic time range. The start and end values are
     * represented in RFC 3339 format. Time ranges are customized to be
     * inclusive or exclusive based on the needs of a particular endpoint.
     * Refer to the relevant endpoint-specific documentation to determine
     * how time ranges are handled.
     */
    public function getUpdatedAt(): ?TimeRange
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     *
     * Represents a generic time range. The start and end values are
     * represented in RFC 3339 format. Time ranges are customized to be
     * inclusive or exclusive based on the needs of a particular endpoint.
     * Refer to the relevant endpoint-specific documentation to determine
     * how time ranges are handled.
     *
     * @maps updated_at
     */
    public function setUpdatedAt(?TimeRange $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns Email Address.
     *
     * A filter to select customers based on exact or fuzzy matching of
     * customer attributes against a specified query. Depending on the customer attributes,
     * the filter can be case-sensitive. This filter can be exact or fuzzy, but it cannot be both.
     */
    public function getEmailAddress(): ?CustomerTextFilter
    {
        return $this->emailAddress;
    }

    /**
     * Sets Email Address.
     *
     * A filter to select customers based on exact or fuzzy matching of
     * customer attributes against a specified query. Depending on the customer attributes,
     * the filter can be case-sensitive. This filter can be exact or fuzzy, but it cannot be both.
     *
     * @maps email_address
     */
    public function setEmailAddress(?CustomerTextFilter $emailAddress): void
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * Returns Phone Number.
     *
     * A filter to select customers based on exact or fuzzy matching of
     * customer attributes against a specified query. Depending on the customer attributes,
     * the filter can be case-sensitive. This filter can be exact or fuzzy, but it cannot be both.
     */
    public function getPhoneNumber(): ?CustomerTextFilter
    {
        return $this->phoneNumber;
    }

    /**
     * Sets Phone Number.
     *
     * A filter to select customers based on exact or fuzzy matching of
     * customer attributes against a specified query. Depending on the customer attributes,
     * the filter can be case-sensitive. This filter can be exact or fuzzy, but it cannot be both.
     *
     * @maps phone_number
     */
    public function setPhoneNumber(?CustomerTextFilter $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * Returns Reference Id.
     *
     * A filter to select customers based on exact or fuzzy matching of
     * customer attributes against a specified query. Depending on the customer attributes,
     * the filter can be case-sensitive. This filter can be exact or fuzzy, but it cannot be both.
     */
    public function getReferenceId(): ?CustomerTextFilter
    {
        return $this->referenceId;
    }

    /**
     * Sets Reference Id.
     *
     * A filter to select customers based on exact or fuzzy matching of
     * customer attributes against a specified query. Depending on the customer attributes,
     * the filter can be case-sensitive. This filter can be exact or fuzzy, but it cannot be both.
     *
     * @maps reference_id
     */
    public function setReferenceId(?CustomerTextFilter $referenceId): void
    {
        $this->referenceId = $referenceId;
    }

    /**
     * Returns Group Ids.
     *
     * A filter to select resources based on an exact field value. For any given
     * value, the value can only be in one property. Depending on the field, either
     * all properties can be set or only a subset will be available.
     *
     * Refer to the documentation of the field.
     */
    public function getGroupIds(): ?FilterValue
    {
        return $this->groupIds;
    }

    /**
     * Sets Group Ids.
     *
     * A filter to select resources based on an exact field value. For any given
     * value, the value can only be in one property. Depending on the field, either
     * all properties can be set or only a subset will be available.
     *
     * Refer to the documentation of the field.
     *
     * @maps group_ids
     */
    public function setGroupIds(?FilterValue $groupIds): void
    {
        $this->groupIds = $groupIds;
    }

    /**
     * Encode this object to JSON
     *
     * @return mixed
     */
    public function jsonSerialize()
    {
        $json = [];
        if (isset($this->creationSource)) {
            $json['creation_source'] = $this->creationSource;
        }
        if (isset($this->createdAt)) {
            $json['created_at']      = $this->createdAt;
        }
        if (isset($this->updatedAt)) {
            $json['updated_at']      = $this->updatedAt;
        }
        if (isset($this->emailAddress)) {
            $json['email_address']   = $this->emailAddress;
        }
        if (isset($this->phoneNumber)) {
            $json['phone_number']    = $this->phoneNumber;
        }
        if (isset($this->referenceId)) {
            $json['reference_id']    = $this->referenceId;
        }
        if (isset($this->groupIds)) {
            $json['group_ids']       = $this->groupIds;
        }

        return array_filter($json, function ($val) {
            return $val !== null;
        });
    }
}

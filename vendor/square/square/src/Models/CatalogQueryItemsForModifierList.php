<?php

declare(strict_types=1);

namespace Square\Models;

/**
 * The query filter to return the items containing the specified modifier list IDs.
 */
class CatalogQueryItemsForModifierList implements \JsonSerializable
{
    /**
     * @var string[]
     */
    private $modifierListIds;

    /**
     * @param string[] $modifierListIds
     */
    public function __construct(array $modifierListIds)
    {
        $this->modifierListIds = $modifierListIds;
    }

    /**
     * Returns Modifier List Ids.
     *
     * A set of `CatalogModifierList` IDs to be used to find associated `CatalogItem`s.
     *
     * @return string[]
     */
    public function getModifierListIds(): array
    {
        return $this->modifierListIds;
    }

    /**
     * Sets Modifier List Ids.
     *
     * A set of `CatalogModifierList` IDs to be used to find associated `CatalogItem`s.
     *
     * @required
     * @maps modifier_list_ids
     *
     * @param string[] $modifierListIds
     */
    public function setModifierListIds(array $modifierListIds): void
    {
        $this->modifierListIds = $modifierListIds;
    }

    /**
     * Encode this object to JSON
     *
     * @return mixed
     */
    public function jsonSerialize()
    {
        $json = [];
        $json['modifier_list_ids'] = $this->modifierListIds;

        return array_filter($json, function ($val) {
            return $val !== null;
        });
    }
}

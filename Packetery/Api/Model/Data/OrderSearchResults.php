<?php

namespace Packetery\Api\Model\Data;

use Magento\Framework\Api\SearchResults;
use Packetery\Api\Api\Data\OrderSearchResultsInterface;

class OrderSearchResults extends SearchResults implements OrderSearchResultsInterface
{
    /**
     * Get orders list.
     *
     * @return \Packetery\Api\Api\Data\OrderInterface[]
     */
    public function getItems()
    {
       return $this->items;
    }

    /**
     * Set orders list.
     *
     * @param \Packetery\Api\Api\Data\OrderInterface[] $items
     * @return $this
     */
    public function setItems(array $items)
    {
        $this->items = $items;
       return $this;
    }
}
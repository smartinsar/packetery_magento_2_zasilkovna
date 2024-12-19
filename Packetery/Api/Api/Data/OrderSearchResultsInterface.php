<?php
namespace Packetery\Api\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface OrderSearchResultsInterface extends SearchResultsInterface
{

    /**
     * Get orders list.
     *
     * @return \Packetery\Api\Api\Data\OrderInterface[]
     */
    public function getItems();

    /**
     * Set orders list.
     *
     * @param \Packetery\Api\Api\Data\OrderInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
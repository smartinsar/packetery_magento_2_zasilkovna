<?php

namespace Packetery\Api\Api;


interface OrderRepositoryInterface
{

    /**
     * Get packetery order by order number
     * @param string $orderNumber
     * @return \Packetery\Api\Api\Data\OrderSearchResultsInterface
     */
    public function getByOrderNumber(string $orderNumber);
}
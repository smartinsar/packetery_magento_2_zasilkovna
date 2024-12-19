<?php

namespace Packetery\Api\Model;

use Magento\Framework\Api\SearchCriteriaBuilder;
use Packetery\Api\Api\Data\OrderInterface;
use Packetery\Api\Api\Data\OrderSearchResultsInterface;
use Packetery\Api\Api\Data\OrderSearchResultsInterfaceFactory;
use Packetery\Api\Api\OrderRepositoryInterface;
use Packetery\Checkout\Model\ResourceModel\Order\CollectionFactory;

class OrderRepository implements OrderRepositoryInterface
{
    /**
     * @var CollectionFactory
     */
    private $collectionFactory;

    /**
     * @var OrderSearchResultsInterfaceFactory
     */
    private $orderSearchResultsFactory;

    /**
     * @var SearchCriteriaBuilder
     */
    private $searchCriteriaBuilder;

    public function __construct(
        CollectionFactory $collectionFactory,
        OrderSearchResultsInterfaceFactory $orderSearchResultsFactory,
        SearchCriteriaBuilder $searchCriteriaBuilder
    ) {
        $this->collectionFactory = $collectionFactory;
        $this->orderSearchResultsFactory = $orderSearchResultsFactory;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
    }

    /**
     * @inheritDoc
     */
    public function getByOrderNumber(string $orderNumber): OrderSearchResultsInterface
    {
        $searchCriteria = $this->searchCriteriaBuilder
            ->addFilter('order_number', $orderNumber)
            ->create();

        $collection = $this->collectionFactory->create();
        foreach ($searchCriteria->getFilterGroups() as $filterGroup) {
            foreach ($filterGroup->getFilters() as $filter) {
                $condition = $filter->getConditionType() ?: 'eq';
                $collection->addFieldToFilter($filter->getField(), [$condition => $filter->getValue()]);
            }
        }

        $searchResults = $this->orderSearchResultsFactory->create();
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setItems($this->extractOrderData($collection->getItems()));
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

    private function extractOrderData(array $orderItems)
    {
        $items = [];
        /** @var \Packetery\Checkout\Model\Order $orderItem */
        foreach ($orderItems as $orderItem) {
            $order = $this->createDataObject();
            $order->setOrderNumber($orderItem->getOrderNumber());
            $order->setRecipientFirstname($orderItem->getRecipientFirstname());
            $order->setRecipientLastname($orderItem->getRecipientLastname());
            $order->setRecipientCompany($orderItem->getRecipientCompany());
            $order->setRecipientEmail($orderItem->getRecipientEmail());
            $order->setRecipientPhone($orderItem->getRecipientPhone());
            $order->setCod($orderItem->getCod());
            $order->setCurrency($orderItem->getCurrency());
            $order->setValue($orderItem->getValue());
            $order->setWeight($orderItem->getWeight());
            $order->setPointId($orderItem->getPointId());
            $order->setPointName($orderItem->getPointName());
            $order->setIsCarrier($orderItem->getIsCarrier());
            $order->setCarrierPickupPoint($orderItem->getCarrierPickupPoint());
            $order->setSenderLabel($orderItem->getSenderLabel());
            $order->setAddressValidated($orderItem->getAddressValidated());
            $order->setRecipientStreet($orderItem->getRecipientStreet());
            $order->setRecipientHouseNumber($orderItem->getRecipientHouseNumber());
            $order->setRecipientCity($orderItem->getRecipientCity());
            $order->setRecipientZip($orderItem->getRecipientZip());
            $order->setRecipientCountryId($orderItem->getRecipientCountryId());
            $order->setRecipientCounty($orderItem->getRecipientCounty());
            $order->setRecipientLongitude($orderItem->getRecipientLongitude());
            $order->setRecipientLatitude($orderItem->getRecipientLatitude());
            $order->setExported($orderItem->getExported());

            $items[] = $order;
        }
        return $items;
    }

    /**
     * Create Data Object
     *
     * @return OrderInterface
     */
    private function createDataObject()
    {
        return \Magento\Framework\App\ObjectManager::getInstance()->create(\Packetery\Api\Model\Data\Order::class);
    }
}
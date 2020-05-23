<?php

namespace App\Factory;

use App\Entity\Orders\Order;
use DateTime;

class OrderFactory
{
    public function create(DateTime $createdAt, string $productName, float $price, string $shippingInfo): Order
    {
        return (new Order())
            ->setCreatedAt($createdAt)
            ->setProductName($productName)
            ->setPrice($price)
            ->setShippingInfo($shippingInfo)
        ;
    }
}

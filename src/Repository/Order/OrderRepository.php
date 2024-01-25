<?php

declare(strict_types=1);


namespace App\Repository\Order;

use Sylius\Bundle\CoreBundle\Doctrine\ORM\OrderRepository as BaseOrderRepository;
use Sylius\MultiStorePlugin\ChannelAdmin\Infrastructure\Doctrine\ORM\CreateOrderListQueryBuilderTrait;

class OrderRepository extends BaseOrderRepository
{
    use CreateOrderListQueryBuilderTrait;
}

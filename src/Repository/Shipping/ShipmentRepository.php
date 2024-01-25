<?php

declare(strict_types=1);


namespace App\Repository\Shipping;

use Sylius\Bundle\CoreBundle\Doctrine\ORM\ShipmentRepository as BaseShipmentRepository;
use Sylius\MultiStorePlugin\ChannelAdmin\Infrastructure\Doctrine\ORM\CreateShipmentListQueryBuilderTrait;


class ShipmentRepository extends BaseShipmentRepository
{
    use CreateShipmentListQueryBuilderTrait;
}

<?php

declare(strict_types=1);

namespace App\Doctrine\ORM;

use Doctrine\ORM\QueryBuilder;
use Sylius\Bundle\CoreBundle\Doctrine\ORM\PaymentRepository as BasePaymentRepository;
use Sylius\Component\Core\Model\ChannelInterface;
use Sylius\Component\Core\Model\PaymentInterface;
use Sylius\Component\Core\Repository\PaymentMethodRepositoryInterface;
use Sylius\MultiStorePlugin\ChannelAdmin\Infrastructure\Doctrine\ORM\CreatePaymentListQueryBuilderTrait;

class PaymentRepository extends BasePaymentRepository
{
    use CreatePaymentListQueryBuilderTrait;
}

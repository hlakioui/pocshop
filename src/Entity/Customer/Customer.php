<?php

declare(strict_types=1);

namespace App\Entity\Customer;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Customer as BaseCustomer;
use Sylius\Component\Core\Model\CustomerInterface;
use Sylius\LoyaltyPlugin\Domain\Model\CustomerInterface as LoyaltyCustomerInterface;
use Sylius\LoyaltyPlugin\Domain\Model\LoyaltyAwareTrait;


/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_customer")
 */
#[ORM\Entity]
#[ORM\Table(name: 'sylius_customer')]
class Customer extends BaseCustomer implements CustomerInterface, LoyaltyCustomerInterface
{
    use LoyaltyAwareTrait;
}

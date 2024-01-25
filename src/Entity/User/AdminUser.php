<?php

declare(strict_types=1);

namespace App\Entity\User;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\AdminUser as BaseAdminUser;
use Sylius\Component\Core\Model\AdminUserInterface as BaseAdminUserInterface;
use Sylius\PlusRbacPlugin\Domain\Model\AdminUserInterface;
use Sylius\PlusRbacPlugin\Domain\Model\RoleableTrait;
use Sylius\PlusRbacPlugin\Domain\Model\ToggleablePermissionCheckerTrait;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_admin_user")
 */
#[ORM\Entity]
#[ORM\Table(name: 'sylius_admin_user')]
class AdminUser extends BaseAdminUser implements BaseAdminUserInterface, AdminUserInterface
{
    use ToggleablePermissionCheckerTrait;
    use RoleableTrait;

    public function __construct()
    {
        parent::__construct();

        $this->rolesResources = new ArrayCollection();
    }
}

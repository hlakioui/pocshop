<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Sylius\SyliusRector\Set\SyliusPlus;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->importNames();
    $rectorConfig->import(__DIR__ . '/vendor/sylius/sylius-rector/config/config.php');
    $rectorConfig->paths([
        __DIR__ . '/src'
    ]);
    $rectorConfig->sets([SyliusPlus::PLUS_RBAC_PLUGIN]);
    $rectorConfig->sets([SyliusPlus::LOYALTY_PLUGIN]);
    $rectorConfig->sets([SyliusPlus::MULTI_SOURCE_INVENTORY_PLUGIN]);
    $rectorConfig->sets([SyliusPlus::MULTI_STORE_PLUGIN]);
};

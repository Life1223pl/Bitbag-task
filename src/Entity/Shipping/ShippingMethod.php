<?php

declare(strict_types=1);

namespace App\Entity\Shipping;

use Sylius\Component\Core\Model\ShippingMethod as BaseShippingMethod;
use Sylius\Component\Shipping\Model\ShippingMethodTranslationInterface;

class ShippingMethod extends BaseShippingMethod
{
    protected function createTranslation(): ShippingMethodTranslationInterface
    {
        return new ShippingMethodTranslation();
    }
}

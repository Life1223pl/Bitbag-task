<?php

declare(strict_types=1);

namespace App\Entity\Product;

use Sylius\Component\Product\Model\ProductOptionValue as BaseProductOptionValue;
use Sylius\Component\Product\Model\ProductOptionValueTranslationInterface;

class ProductOptionValue extends BaseProductOptionValue
{
    protected function createTranslation(): ProductOptionValueTranslationInterface
    {
        return new ProductOptionValueTranslation();
    }
}

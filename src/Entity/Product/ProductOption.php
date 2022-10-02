<?php

declare(strict_types=1);

namespace App\Entity\Product;

use Sylius\Component\Product\Model\ProductOption as BaseProductOption;
use Sylius\Component\Product\Model\ProductOptionTranslationInterface;

class ProductOption extends BaseProductOption
{
    protected function createTranslation(): ProductOptionTranslationInterface
    {
        return new ProductOptionTranslation();
    }
}

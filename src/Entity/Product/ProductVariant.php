<?php

declare(strict_types=1);

namespace App\Entity\Product;

use Sylius\Component\Core\Model\ProductVariant as BaseProductVariant;
use Sylius\Component\Product\Model\ProductVariantTranslationInterface;

class ProductVariant extends BaseProductVariant
{
    protected function createTranslation(): ProductVariantTranslationInterface
    {
        return new ProductVariantTranslation();
    }
}

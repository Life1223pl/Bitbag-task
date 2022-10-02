<?php

declare(strict_types=1);

namespace App\Entity\Product;

use Sylius\Component\Product\Model\ProductAssociationType as BaseProductAssociationType;
use Sylius\Component\Product\Model\ProductAssociationTypeTranslationInterface;

class ProductAssociationType extends BaseProductAssociationType
{
    protected function createTranslation(): ProductAssociationTypeTranslationInterface
    {
        return new ProductAssociationTypeTranslation();
    }
}

<?php

declare(strict_types=1);

namespace App\Entity\Taxonomy;

use Sylius\Component\Core\Model\Taxon as BaseTaxon;
use Sylius\Component\Taxonomy\Model\TaxonTranslationInterface;

class Taxon extends BaseTaxon
{
    protected function createTranslation(): TaxonTranslationInterface
    {
        return new TaxonTranslation();
    }
}

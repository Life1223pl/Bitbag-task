<?php

declare(strict_types=1);

namespace App\Entity\Payment;

use Sylius\Component\Core\Model\PaymentMethod as BasePaymentMethod;
use Sylius\Component\Payment\Model\PaymentMethodTranslationInterface;

class PaymentMethod extends BasePaymentMethod
{
    protected function createTranslation(): PaymentMethodTranslationInterface
    {
        return new PaymentMethodTranslation();
    }
}

<?php

namespace KKMClient\Models\Queries\Commands;


use KKMClient\Interfaces\CommandInterface;
use KKMClient\Traits\CommonCommandTrait;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class DepositingCash
 * @package KKMClient\Models\Queries\Commands
 */
#[AccessType(type:'public_method')]
class PaymentCash extends DepositingCash
{
    public function getName (): string
    {
        return "PaymentCash";
    }
}

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
class DepositingCash implements CommandInterface
{
    use CommonCommandTrait;

    /**
     * @var float
     */
    #[SerializedName('Amount')]
    #[Type('float')]
    private float $amount;

    /**
     * @return float
     */
    public function getAmount (): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount ( float $amount ): void
    {
        $this->amount = $amount;
    }

    public function getName (): string
    {
        return "DepositingCash";
    }
}

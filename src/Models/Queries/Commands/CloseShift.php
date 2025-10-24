<?php

namespace KKMClient\Models\Queries\Commands;

use KKMClient\Interfaces\CommandInterface;
use KKMClient\Traits\CommonCommandTrait;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\Accessor;

#[AccessType(type: 'public_method')]
class CloseShift implements CommandInterface
{
    use CommonCommandTrait;

    #[SerializedName('CashierName')]
    #[Type('string')]
    #[Accessor(getter: 'getCashierName', setter: 'setCashierName')]
    private string $cashierName = '';

    #[SerializedName('CashierVATIN')]
    #[Type('string')]
    #[Accessor(getter: 'getCashierVATIN', setter: 'setCashierVATIN')]
    private string $cashierVATIN = '';

    public function getName(): string
    {
        return "CloseShift";
    }

    public function setCashierName(string $cashierName): self
    {
        $this->cashierName = $cashierName;
        return $this;
    }

    public function getCashierName(): string
    {
        return $this->cashierName;
    }

    public function setCashierVATIN(string $cashierVATIN): self
    {
        $this->cashierVATIN = $cashierVATIN;
        return $this;
    }

    public function getCashierVATIN(): string
    {
        return $this->cashierVATIN;
    }
}

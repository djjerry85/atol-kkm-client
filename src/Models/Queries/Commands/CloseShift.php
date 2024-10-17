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

    public function getName(): string
    {
        return "CloseShift";
    }
}

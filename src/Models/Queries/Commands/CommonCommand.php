<?php

namespace KKMClient\Models\Queries\Commands;

use KKMClient\Interfaces\CommandInterface;
use KKMClient\Traits\CommonCommandTrait;
use JMS\Serializer\Annotation\AccessType;

/**
 * Class Command
 * @package KKMClient\Queries
 */
#[AccessType(type:'public_method')]
class CommonCommand implements CommandInterface
{
    use CommonCommandTrait;

    public function __construct ( $attributes )
    {

    }
}

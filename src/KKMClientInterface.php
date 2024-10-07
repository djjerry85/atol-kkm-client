<?php

namespace KKMClient;

use KKMClient\Interfaces\CommandInterface;

interface KKMClient
{
    public function executeCommand(CommandInterface $command);
}

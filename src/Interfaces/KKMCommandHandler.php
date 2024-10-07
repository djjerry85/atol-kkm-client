<?php

namespace KKMClient\Interfaces;

interface KKMCommandHandler
{
    public function executeCommand(CommandInterface $command);
}

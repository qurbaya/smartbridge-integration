<?php

namespace SmartBridge;

use SmartBridge\Interfaces\CommunicateInterface;

class SyncCommunicate extends Request implements CommunicateInterface
{

    public function handle(string $value): string
    {
        return $value;
    }
}
<?php
namespace SmartBridge;
use SmartBridge\Interfaces\CommunicateInterface;

class AsyncCommunicate implements CommunicateInterface
{

    public function handle(string $value): string
    {
        return $value;
    }
}
<?php

namespace SmartBridge\Interfaces;

use SmartBridge\Request;

interface CommunicateInterface
{
    public function handle(string $value): string;
}
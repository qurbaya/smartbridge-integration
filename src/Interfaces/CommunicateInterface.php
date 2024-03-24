<?php

namespace SmartBridge\Interfaces;

interface CommunicateInterface
{
    public function handle(string $value): string;
}
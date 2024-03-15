<?php

namespace SmartBridge;

final class Client
{
    private string $soapRequest;

    private ?object $communicator = null;

    public static function createWithSoapRequest(string $soapRequest): self
    {
        $client = new self();
        $client->setSoapRequest($soapRequest);
        return $client;
    }

    public function setSoapRequest(string $value): self
    {
        $this->soapRequest = $value;
        return $this;
    }

    public function sync(): self
    {
        $this->ensureCommunicatorNotSet();
        $this->communicator = new SyncCommunicate();
        return $this;
    }

    public function async(): self
    {
        $this->ensureCommunicatorNotSet();
        $this->communicator = new AsyncCommunicate();
        return $this;
    }

    public function send(): string
    {
        if ($this->communicator === null) {
            throw new \RuntimeException('Communicator is not set');
        }

        return $this->communicator->handle($this->soapRequest);
    }

    private function ensureCommunicatorNotSet(): void
    {
        if ($this->communicator !== null) {
            throw new \RuntimeException('Communicator is already set');
        }
    }
}

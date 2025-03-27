<?php

namespace App\Patterns\behavioral\strategy\QueueStrategy;

interface QueueStrategyInterface
{
    public function send(string $queueName, $data): void;
}

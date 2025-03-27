<?php

namespace App\Patterns\behavioral\strategy\QueueStrategy;

use App\Jobs\SendEmailJob;

class RedisQueueStrategy implements QueueStrategyInterface
{
    public function send(string $queueName, $data): void
    {
        dispatch((new SendEmailJob($data['email'], $data['ebookPath']))->onQueue($queueName));
    }
}

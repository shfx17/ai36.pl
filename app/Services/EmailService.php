<?php

namespace App\Services;

use App\Patterns\behavioral\strategy\QueueStrategy\QueueStrategyInterface;

class EmailService
{
    protected QueueStrategyInterface $queueStrategy;

    public function __construct(QueueStrategyInterface $queueStrategy)
    {
        $this->queueStrategy = $queueStrategy;
    }

    public function sendEbook(string $email): void
    {
        $ebookPath = storage_path('app/public/Kompedium wiedzy - Narzędzia AI.pdf');

        $this->queueStrategy->send('emails', [
            'email' => $email,
            'ebookPath' => $ebookPath
        ]);
    }
}

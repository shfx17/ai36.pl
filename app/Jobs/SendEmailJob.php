<?php

namespace App\Jobs;

use App\Mail\EbookMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public string $email;
    public string $ebookPath;

    public function __construct(string $email, string $ebookPath)
    {
        $this->email = $email;
        $this->ebookPath = $ebookPath;
    }

    public function handle(): void
    {
        if (!$this->email || !$this->ebookPath) {
            return;
        }

        Mail::to($this->email)->send(new EbookMail($this->email, $this->ebookPath));
    }
}

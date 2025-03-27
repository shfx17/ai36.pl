<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EbookMail extends Mailable
{
    use Queueable, SerializesModels;

    public string $email;
    public string $ebookPath;

    public function __construct(string $email, string $ebookPath)
    {
        $this->email = $email;
        $this->ebookPath = $ebookPath;
    }

    public function build(): EbookMail
    {
        return $this->subject('Kompedium wiedzy o 36 narzędziach AI - zamówione')
            ->view('emails.ebook')
            ->attach($this->ebookPath);
    }
}

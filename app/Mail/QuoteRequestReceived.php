<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\QuoteRequest;

class QuoteRequestReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $quoteRequest;

    /**
     * Create a new message instance.
     */
    public function __construct(QuoteRequest $quoteRequest)
    {
        $this->quoteRequest = $quoteRequest;
    }

    /**
     * Build the message.
     */
   public function build()
{
    return $this->from(config('mail.from.address'), config('mail.from.name')) // Gmail as sender
                ->replyTo($this->quoteRequest->email, $this->quoteRequest->name) // replies go to customer
                ->subject('New Quote Request Received')
                ->view('emails.quote-request-admin');
}

}

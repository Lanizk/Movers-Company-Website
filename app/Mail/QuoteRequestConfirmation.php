<?php

namespace App\Mail;

use App\Models\QuoteRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuoteRequestConfirmation extends Mailable
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
                ->replyTo(config('mail.reply_to.address'), config('mail.reply_to.name')) // replies go to your inbox
                ->subject('Quote Request Confirmation')
                ->view('emails.quote-request-confirmation');
}
}

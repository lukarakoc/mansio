<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Mail extends Mailable
{
    use Queueable, SerializesModels;
    protected $sender;
    protected $email;
    protected $message;

    /**
     * Create a new message instance.
     *
     * @param $sender
     * @param $email
     * @param $message
     */
    public function __construct($sender, $email, $message)
    {
        $this->sender = $sender;
        $this->email = $email;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email)
            ->subject('New message from: ' . $this->sender)
            ->view('emails.email')->with([
            'senderProperty' => $this->sender,
            'emailProperty' => $this->email,
            'messageProperty' => $this->message
        ]);
    }
}

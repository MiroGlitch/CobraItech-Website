<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SupportMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('supportemail')
                    ->subject($this->data['category'].' - '.$this->data['name'].' - '.$this->data['number'])
                    ->from('marketplacebefit@gmail.com', 'System')
                    ->replyTo($this->data['email'], $this->data['name'])
                    ->with('data', $this->data);
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminCareerMail extends Mailable
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
        return $this->view('mails.admincareeremail')
            ->subject($this->data['job'] . ' - ' . $this->data['name'])
            ->from('emailtestercorp@gmail.com', 'System')
            ->attach($this->data['cv'])
            ->replyTo($this->data['email'], $this->data['name'])
            ->with('data', $this->data);
    }
}

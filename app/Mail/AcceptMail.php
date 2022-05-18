<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AcceptMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data2)
    {
        $this->data = $data2;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.acceptemail')
            ->subject('Acceptance Offer - Cobra Itech Services Corporation')
            ->from('emailtestercorp@gmail.com', 'System')
            ->attach(public_path() . '\\uploads\\Terms-And-Conditions-Cobra-Itech.docx')
            ->with('data', $this->data);
    }
}

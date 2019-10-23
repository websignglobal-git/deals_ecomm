<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $sub;
    public $mes;

    public function __construct($subject, $message )
    {
        //
        $this->sub=$subject;
        $this->mes=$message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $e_subject=$this->sub;
        $e_message=$this->mes;
        return $this->view('common/mail_template/sendContent', compact("e_message"))->subject($e_subject);
    }
}

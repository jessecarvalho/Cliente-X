<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class newSendMail extends Mailable
{
    use Queueable, SerializesModels;

    private $user;

    /**
     * Create a new message instance.
     *
     * @param $user
     */
    public function __construct(\stdClass $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Nova mensagem em ClienteX');
        $this->to("jesseelias80@gmail.com", $this->user->name);
        return $this->view('mail.newSendMail', [
            'user' => $this->user
        ]);
    }
}

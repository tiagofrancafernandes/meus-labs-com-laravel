<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TesteMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nome;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.teste', [
            'nome' => $this->nome,
        ]);
    }
}

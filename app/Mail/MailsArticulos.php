<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailsArticulos extends Mailable
{
    use Queueable, SerializesModels;

    public $vista_articulos;
    public $categoria;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($vista_articulos,$categoria)
    {
        $this->vista_articulos = $vista_articulos;
        $this->categoria = $categoria;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails/nuevos_articulos')->from('pedrogarit3@gmail.com')->subject('Articulos nuevos');
    }
}

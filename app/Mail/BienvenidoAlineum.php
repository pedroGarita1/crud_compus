<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BienvenidoAlineum extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $avatar;
    public $descripcion;
    public $username;
    public $id_user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$email,$avatar,$descripcion,$username,$id_user)
    {
        $this->name = $name;
        $this->email = $email;
        $this->avatar = $avatar;
        $this->descripcion = $descripcion;
        $this->username = $username;
        $this->id_user = $id_user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.bienvenida_mails')->from('pedrogarit3@gmail.com')->subject('Bienvenido a ALINEUM');
    }
}

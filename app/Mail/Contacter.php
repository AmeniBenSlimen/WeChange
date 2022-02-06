<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
class Contacter extends Mailable
{
    use Queueable, SerializesModels;
    public $contacter;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $contacter)
    {
        $this->contacter = $contacter;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        return $this->from('amenibenslimen9@gmail.com') ->view('contactMail');
        
    }
}

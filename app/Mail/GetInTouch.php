<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class GetInTouch extends Mailable
{
    use Queueable, SerializesModels;

    protected $email;
    protected $name;
    protected $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->email = $request->email;
        $this->name = $request->name;
        $this->message = $request->message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Visit Contact Message')
                    ->from('noreply@agence.com.br')
                    ->markdown('emails.getintouch')
                    ->with([
                        'name'      => $this->name,
                        'message'   => $this->message,
                        'email'     => $this->email
                    ]);
    }
}

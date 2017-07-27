<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Http\Requests\Register;

class SendWelcomeMail extends Mailable
{
    use Queueable, SerializesModels;


    public $full_name; 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Register $request)
    {
        //
        $this->full_name = $request->full_name; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.welcome');
    }
}

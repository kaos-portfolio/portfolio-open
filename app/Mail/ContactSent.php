<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Contact;

class ContactSent extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->view('mail')
        ->from('kaori19891201@gmail.com', 'from name')
        ->to($this->contact->email, $this->contact->name.'様')
        ->cc('kaori19891201@gmail.com')
        ->subject('SUBJECT');
    }
}

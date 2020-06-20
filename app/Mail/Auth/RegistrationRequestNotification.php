<?php

namespace App\Mail\Auth;

use App\Models\RegistrationRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistrationRequestNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $request;

    /**
     * Create a new message instance.
     *
     * @param RegistrationRequest $request
     */
    public function __construct(RegistrationRequest $request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mails.auth.registration-confirmation', ['request' => $this->request])
            ->subject('Nieuwe registratieaanvraag B2B systeem')
            ->to(config('mail.internal_contact.address'), config('mail.internal_contact.name'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function saveContact(Request $request) {
        $contact = new Contact();

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        $contact->save();

        \Mail::send('mails/contact_email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone_number' => $request->get('phone'),
                'user_message' => $request->get('message'),
            ), function($message) use ($request)
            {
                $message->subject("Contactaanvraag via website");
                $message->from($request->email);
                $message->to('info@bdd.be');
            });
        return back()->with('success', 'Thank you for contacting us! We will reply as soon as possible!');

    }
}

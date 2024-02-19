<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class confirmAppointmentMail extends Mailable
{
    use Queueable, SerializesModels;


    public $details;

    public function __construct($details)
    {
        $this->details = $details;
    }


    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('unity.care@gmail.com', 'Hospital UnityCare'),
            subject: 'Confirm The Appointment',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'email.confirmAppointment',
            with: [
                'data' => $this->details,
            ]
        );
    }


    // public function attachments(): array
    // {
    //     return [];
    // }
}

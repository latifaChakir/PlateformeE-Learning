<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendCertificat extends Mailable
{
    public $subject;
    public $body;
    public $userName;

    use Queueable, SerializesModels;

    public function __construct($subject, $body, $userName)
    {
        $this->subject = $subject;
        $this->body = $body;
        $this->userName = $userName;
    }

    public function build()
    {
        $imagePath = public_path('images/certificat.png');

        return $this->subject($this->subject)
                    ->view('user.emails.certificate')
                    ->attach($imagePath, [
                        'as' => 'certificat.png',
                        'mime' => 'image/png',
                    ])
                    ->with([
                        'body' => $this->body,
                        'subject'=> $this->subject,
                        'userName' => $this->userName,
                    ]);
    }

}

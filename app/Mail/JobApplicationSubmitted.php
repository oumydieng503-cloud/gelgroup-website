<?php

namespace App\Mail;

use App\Models\JobApplication;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class JobApplicationSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public JobApplication $application)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nouvelle candidature — ' . $this->application->position,
            replyTo: [$this->application->email],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.job-application',
        );
    }

    public function attachments(): array
    {
        $extension = pathinfo($this->application->cv_path, PATHINFO_EXTENSION) ?: 'pdf';

        return [
            Attachment::fromStorageDisk('public', $this->application->cv_path)
                ->as('CV_' . str_replace(' ', '_', $this->application->name) . '.' . $extension),
        ];
    }
}

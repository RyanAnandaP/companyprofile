<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewJobApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $name/*, $email, $phone, $job, $cv, $photo*/;
    public function __construct($name/*, $email, $phone, $job, $cv, $photo*/)
    {
        //
        $this->name = $name;
        // $this->email = $email;
        // $this->phone = $phone;
        // $this->job = $job;
        // $this->cv = $cv;
        // $this->photo = $photo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('investindosekuritas@gmail.com')->to('tcool2803@gmail.com')->view('mail.new-job-application');
    }
}

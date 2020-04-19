<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReservedSuccessfully extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected  $user;
    protected  $courseName;

    public function __construct($user, $courseName)
    {
        $this->user = $user;
        $this->courseName = $courseName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(ADMIN_EMAIL)
            ->subject('Đăng ký học online 5T')
            ->view('emails.reserved_successfully')
            ->with([
                'user' => $this->user,
                'courseName' => $this->courseName
            ]);
    }
}

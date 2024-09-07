<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
class Askreviews extends Mailable
{
    use Queueable, SerializesModels;
    public $user;    public $property;    public $description;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user,$property,$description)
    {
        $this->user = $user;        $this->property = $property;        $this->description = $description;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("{$this->user->mail}")->subject('Ask for the review')->view('emails.askreviews');
    }
}
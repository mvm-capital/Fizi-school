<?php

namespace App\Jobs;

use App\Mail\VerificationEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendVerificationCode implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;
    protected $verificationCode;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user, $verificationCode)
    {
        $this->user = $user;
        $this->verificationCode = $verificationCode;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->user->email)->queue(new VerificationEmail($this->user, $this->verificationCode));
    }
}

<?php

namespace App\Jobs;

use Mail;
use App\Jobs\Job;
use App\Models\RootAdminToken;
use Illuminate\Queue\SerializesModels;

class SendNewUserAccountInfo extends Job
{
    use SerializesModels;
    
    public $user; 

    public function __construct($user)
    {
        $this->user = $user;
    }
    
    public function handle()
    {
        $user = $this->user;

        Mail::send('emails.user.send_new_user_info', compact('user'), function ($message) use ($user) {
            $message->to($user['email'])->subject("Welcome to Oyster " . $user['name']);
        });
    }
}

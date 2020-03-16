<?php

namespace App\Events\Auth;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use App\User;

class UserActivationEmail
{
    use Dispatchable,  SerializesModels;

    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
}

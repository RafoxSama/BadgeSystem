<?php

namespace App\Events;

use App\User;

class Premium
{

    /**
     * @var User
     */
    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

}
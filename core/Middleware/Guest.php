<?php

namespace PHPFrw\Middleware;

class Guest
{
    public function handle(): void
    {
        if (check_auth()){
            responce()->redirect(base_url('/dashboard'));
        }
    }
}
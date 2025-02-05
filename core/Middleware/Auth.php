<?php

namespace PHPFrw\Middleware;

class Auth
{
    public function handle(): void
    {
        if (!check_auth()){
            session()->setFlash('error', 'нужно зарегаться');
            responce()->redirect(base_url('/login'));
        }
    }
}
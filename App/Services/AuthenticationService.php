<?php

namespace App\Services;

class AuthenticationService
{
    public array $info {
        set => $this->info = $value;
        get => $this->info;
    }

    public function login(string $otpCode, int $mobile)
    {

    }

    public function signUp()
    {

    }
}
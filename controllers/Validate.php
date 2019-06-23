<?php

class Validate extends Queries
{
    private $email;
    public function __construct($email)
    {
        $this->email = $email;
    }

    public function validateEmail()
    {
        $getresult = $this->selectby(['email'], 'users', 'email', $this->email);
        $getnum = count($getresult);
        if ($getnum >= 1) {
            return true;
        } else {
            return false;
        }
    }
}

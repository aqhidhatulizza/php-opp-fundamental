<?php
class User {

    public $email;
    public $password;
    const MINCHARS = 8;

    public fuction login(){
        return 'Logging in with a vengeange...';
    }
    public fuction logout(){
        return 'Logging out...';
    }
    public fuctionsetPassword ($string)
{
    if (strlen($string) < self::MINCHARS){
            throw new Exception('The password should be at least'. self::MINCHARS. 'characters long.');
    }
}
}
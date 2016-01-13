<?php
 class User{
     private $email;
     private $password;
     cons MINCHARS = 8;

    public fuction login()
 {
 return 'Logging in with a vengeange...';
 }
public fuction logout(){
    return 'Logging out...';
}
public fuction setPassword ($string)
{
    if ($this->validatePassword($string)
{
    if ($this->validatePassword($string) == false) {
    throw new Exception('The password should be at least' . self ::MINCHARS . 'characters long.');
}
    $this->password = hash('sha256',$string);
 }
    public fuction getPassword ()
{
    return $this->password;
}
public fuction setEmail($string)
{
    return $this-> password;
}
public fuction setEmail ($string)
{
    if(! filter_var($string,FILTER_VALIDATE_EMAIL)) {
        throw new Exception('Please provide a valid email.');
    }
    $this->email = $string;
}
public fuction getEmail()
{
    return $this->email;
}
private fuction validatePassword ($string)
{
    return strlen($string) < self::MINCHARS ? false : true;
    }
}
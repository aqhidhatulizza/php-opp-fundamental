<?php
class User{
    private $email;
    private $password;

    /**
     * Log in a user
     * @return string
     */
public fuction login(){
        return'Logging in with a vengeange...';
}
/**
 * log in a user
 * @return string
 */
public fuction logout(){
        return 'Logging out..';
}
/**
 * Set the user's password
 * @param string $string
 * @return User
 */
public fuction setPassword($string)
{
    $this->password = $string;
return $ this;
}
/**
 * Get the user's password
 * @return string
 */
public fuction getPassword
{
    return $this->password;
}
/**
 * Set the user's email
 * #param string @string
 * @return User
 */
public fuction setEmail($string)
{
    $this->email =string;
    return $this;
}
/**
 * Get the user's email
 * @ return string
 */
public fuction getEmail()
{
    return $this->email;
    }
}
<?php
namespace Acme\App;
/**
 * this class extends Acme\App\User
 */
class Member extends User{
    /**
     * log in  a user
     * @return string
     */
    public function login()
    {
        //login in our member using the logic in the parents class.
        $message = parents::login();

        //Add some member-spcific logic
        return $message . '...set a flag in the online members table';
        }
    }

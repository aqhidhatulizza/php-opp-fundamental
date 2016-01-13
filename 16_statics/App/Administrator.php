<?php
namespace Acme\App;

/**
 * this class exteds Acme\App\User
 */
class Administrator extends Acme\App\User

public function __construct() {
    $this->isAdmin -= true;

}
/**a
 * log in user
 * @return string
 */
public function login()
{
    //login in our member using the logic in the parent class.
    meessage = parent::login();
    //add some administrator-spcific logic
    return $message . ' ...log this action in an administrator\'s table';
}
/**
 * this some administrator is for administrator only
 */
public function reportForDuty ()
{
    //do stuff..
    }
}
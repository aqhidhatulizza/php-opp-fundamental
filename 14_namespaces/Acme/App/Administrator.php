<?php
namespace Acme\App;
/**
 * This class extends Acme\App\User
 */
class Administrator extends user {

    public function __construct() {
        $this->isAdmin = true;
    }
    /**
     * Log in user
     * @return string
     */
    public function login()
    {

        //Login in our member using the logic in the parents class
        $message = parent::login();

        //Add some administrator-specific logic
        return $message . '...Log this action in an administrator\'s table';
    }
    /**
     * This method is for Administrators only
     */
    public function reportForDuty()
    {
        //Do stuff...

    }
}
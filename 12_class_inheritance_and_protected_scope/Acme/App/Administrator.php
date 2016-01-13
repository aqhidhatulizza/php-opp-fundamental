<?php

namespace Acme\App;
/**
 * This class extends Acme\App\User
 */
class Administrator extends User {

    public function __contruct() {
        $this->isAdmin = true;
    }
    /**
     * Return the result of the Login()
     */
    public function getLogin ()
    {
        //The Login method in the parent class is accesible from here,
        //because it is protected.
        return $this->login();
    }
    /**
     * This method is for Administrator only
     */
    public function reportForDuty ()
    {
        //Do stuff...
    }
}
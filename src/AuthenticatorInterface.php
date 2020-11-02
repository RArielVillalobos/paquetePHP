<?php


namespace Styde;


interface AuthenticatorInterface
{
    /*
    * @return boolean
    */
    public function check();

    /*
    * @return User
    */
    public function user();
}
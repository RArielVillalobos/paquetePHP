<?php


namespace Styde\Stubs;


use Styde\AuthenticatorInterface;
use Styde\User;

class AuthenticatorStub implements AuthenticatorInterface
{

    public function check(){
        return true;
    }

    public function user(){
        return new User([
            'role'=>'admin'
        ]);
    }
}
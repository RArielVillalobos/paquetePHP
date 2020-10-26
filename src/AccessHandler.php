<?php

namespace Styde;


class AccessHandler
{
    public static function check ($role)
    {

        return Authenticator::check() && Authenticator::user()->role == $role;
    }

}
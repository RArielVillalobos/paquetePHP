<?php

use Styde\AccessHandler as Access;
class AccessHandlerTest extends \PHPUnit\Framework\TestCase
{

    public function test_grant_access()
    {
        $sessionFileDriver = new \Styde\SessionFileDrive();
        $sessionManager = new \Styde\SessionManager($sessionFileDriver);
        $auth = new \Styde\Authenticator($sessionManager);
        $access = new Access($auth);
        $this->assertTrue(
            $access->check('admin')
        );
    }

    public function test_deny_access()
    {
        $sessionFileDriver = new \Styde\SessionFileDrive();
        $sessionManager = new \Styde\SessionManager($sessionFileDriver);
        $auth = new \Styde\Authenticator($sessionManager);
        $access = new Access($auth);
        $this->assertFalse($access->check('sub-admin'));
    }

}
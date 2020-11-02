<?php

use Styde\AccessHandler as Access;
class AccessHandlerTest extends \PHPUnit\Framework\TestCase
{

    public function test_grant_access()
    {
        //$sessionFileDriver = new \Styde\SessionFileDrive();
        /*$sessionArray = new \Styde\SessionArrayDriver([
            'user_data'=>[
                'name'=>'Ariel',
                'role'=>'admin'

            ]
        ]);*/
        //$sessionManager = new \Styde\SessionManager($sessionArray );

        //$auth = new \Styde\Authenticator($sessionManager);
        $authStub = new \Styde\Stubs\AuthenticatorStub();
        $access = new Access($authStub);
        $this->assertTrue(
            $access->check('admin')
        );
    }

    public function test_deny_access()
    {
        //$sessionFileDriver = new \Styde\SessionFileDrive();
        //$sessionManager = new \Styde\SessionManager($sessionFileDriver);
        //$auth = new \Styde\Authenticator($sessionManager);
        $authStub = new \Styde\Stubs\AuthenticatorStub();
        $access = new Access($authStub);
        $this->assertFalse($access->check('sub-admin'));
    }

}
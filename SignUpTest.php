<?php

	class SignUpTest extends PHPUNIT\Framework\TestCase
	{
		public function testUserName()
    	{
    		require 'signUp.php';

    		$user = new User;
    		$user->userName = "root";

    		$this->assertEquals('root', $user->getUserName());
    	}		

    	public function testValidUserName()
    	{
    		require 'signUp.php';

    		$user = new User;
    		$user->userName = "root";

    		$this->assertTrue($user->checkValidUserName());
    	}

    	public function testPassword()
    	{
    		require 'signUp.php';

    		$user = new User;
    		$user->password = "password";

    		$this->assertTrue($user->checkValidPassword());
    	}

    	public function testValidPassword()
    	{

    	}

    	public function testEmptyByDefault(){

            require 'signUp.php';
            $user = new User;

            $this->assertEquals('', $user->getUserName());
        }

        public function testIsEmpty(){
            require 'signUp.php';

            $user = new User;

            $this->assertTrue($user->checkEmpty());

        }

        public function testIsNotEmpty(){
            require 'signUp.php';

            $user = new User;
            $user->userName = "root";
            $user->password = "password";

            $this->assertFalse($user->checkEmpty());

        }
	}
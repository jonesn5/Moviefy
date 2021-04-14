<?php

	class LogInTest extends PHPUNIT\Framework\TestCase
	{
		public function testUserName()
    	{
    		require 'login.php';

    		$user = new User;
    		$user->userName = "root";

    		$this->assertEquals('root', $user->getUserName());
    	}		

    	public function testPassword()
    	{
    		require 'login.php';

    		$user = new User;
    		$user->password = "password";

    		$this->assertEquals('password', $user->getPassword());
    	}		

        public function testAdmin()
        {
            require 'login.php';

            $user = new User;
            $user->admin = "1";

            $this->assertEquals('1', $user->getAdmin());
        }       

        public function testEmptyByDefault(){

            require 'login.php';
            $user = new User;

            $this->assertEquals('', $user->getUserName());
        }

        public function testIsEmpty(){
            require 'login.php';

            $user = new User;

            $this->assertTrue($user->checkEmpty());

        }

        public function testIsNotEmpty(){
            require 'login.php';

            $user = new User;
            $user->userName = "root";
            $user->password = "password";

            $this->assertFalse($user->checkEmpty());

        }

	}
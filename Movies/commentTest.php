<?php

	class commentTest extends PHPUNIT\Framework\TestCase
	{
		public function testComment()
    	{
    		require 'blackwidow-2020.php';
    		$comment = new Comment;
    		$comment->content = "Hello";

    		$this->assertEquals('Hello', $comment->getContent());
    	}		
        public function testAdmin()
        {
            require 'blackwidow-2020.php';
            $user = new User;
            $user->admin = 1; 

            $this->assertTrue($comment->removeComment());
        }       

        public function testUser()
        {
            require 'blackwidow-2020.php';
            $comment = new Comment;
            $comment->user = "root";

            $this->assertEquals('root', $comment->getUser());
        }       

        public function testEmptyByDefault(){

            require 'blackwidow-2020.php';
            $comment = new Comment;

            $this->assertEquals('', $user->getContent());
        }

        public function testIsEmpty(){
            require 'blackwidow-2020.php';

            $comment = new Comment;

            $this->assertTrue($comment->checkEmpty());

        }


        
	}
<?php

	class commentTest extends PHPUNIT\Framework\TestCase
	{
		public function testComment()
    	{
    		require 'black-widow-2020.php';
    		$comment = new Comment;
    		$comment->content = "Hello";

    		$this->assertEquals('Hello', $comment->getContent());
    	}		

        public function testLike()
        {
            require 'black-widow-2020.php';
            $comment = new Comment;
            $comment->like = "true";

            $this->assertEquals('True', $comment->isLiked());
        }       

        
	}
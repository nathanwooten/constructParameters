<?php

class Comment {}

abstract class Feature {

	public function __construct( Comment $comment, $name )
	{

		$this->comment = $comment;
		$this->name = $name;

	}

	abstract function do( $something );

}

class Booger extends Feature {

	public function __construct( $name ) //creates no error
	{

		print $name . ' has a nice smile';

	}

//	public function do( $something ) //creates no error
	public function do() {

		print 'Smile back';

	}

}

//find on include
//require_once 'Comment.php';
//require_once 'Feature.php';
//require_once 'Booger.php';

//when working
//$kid = new booger( 'Billy' );
//$kid->do();

//Billy is a booger

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

	public function __construct( $name )
	{

		print $name . ' has a nice smile';

	}

	public function do() {

		print 'Smile back';

	}

}

$kid = new booger( 'Billy' );
var_dump( $kid );

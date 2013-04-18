<?php

// ReflectionTest.php

require_once '../Editor.php';
require_once '../Nettuts.php';

class ReflectionTest extends PHPUnit_Framework_TestCase {

	function testItCanReflect() {
		$editor = new Editor('John Doe');
		$tuts = new Nettuts();
		$tuts->publishNextArticle($editor);
	}

}

?>

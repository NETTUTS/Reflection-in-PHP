<?php

// Editor.php

class Editor {

	private $name;
	public $articleId;

	function __construct($name) {
		$this->name = $name;
	}

	public function setNextArticle($articleId) {
		$this->articleId = $articleId;
	}

	public function publish() {
		// publish logic goes here
		echo ("HERE\n");
		return true;
	}

	function getEditorName() {
		return $this->name;
	}

}

?>

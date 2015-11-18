<?php 

	/**
	*	Contents: generatepage Contents
	*
	*
	*	@package lib
	*	@subpackage constructs
	*	@author gerard
	*	article
	*
	**/

		class Contents{
		private $article;

		public function __construct($article){
			$this->article=$article;
		}

 		public function mostrar()
		 {
 		echo "<div id='cuerpo'>";
 		echo '<h1>'.$this->titulo.'</h1>';
	 		for($f=0;$f<count($this->article);$f++){
	 			echo '<p>'.$this->article[$f].'</p>';
	 		}
	 	echo "</div>";
 		}
	}

<?php 

	/**
	*	Menu: generatepage menu
	*
	*
	*	@package lib
	*	@subpackage constructs
	*	@author gerard
	*	links
	*
	**/

	class Menu {
	
		private $links = array();

 	
 	public function newMenuItem($links) {
 	$this->links[]=$links;
 	}

	 public function mostrar(){
 		echo "<nav id='menu'><ul>";
	 	for($f=0;$f<count($this->links);$f++){
	 	echo '<li><a href="'.$this->links[$f].'"></a></li>';
	 }
	 echo "</ul></nav>";
 }
}



/*
		Class Menu{
			private $links=array();

		public function __construct($links){
			$this->links=$links;
		}
		public function show() {
		echo '<ul>';
		
		foreach ($this->links as $clau =>$valor) {


}

		}
	}
*/
<?php 

	/**
	*	Foot: generatepage Foot
	*
	*
	*	@package lib
	*	@subpackage constructs
	*	@author gerard
	*
	*
	**/

		class Foot{
		private $mostrar;


		public function __construct($mostrar){
			$this->mostrar=$mostrar;
		}


		 public function mostrar()
 		{
		 echo "<footer>";
		 echo "<a href=".$this->url." id='enlace'>".$this->marca."</a> &copy Todos los derechos reservados.";
		 echo "</footer>";
	 
 		}
	}
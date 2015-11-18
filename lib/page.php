<?php
	/**
	*	Header: generatepage header
	*
	*
	*	@package lib
	*	@subpackage constructs
	*	@author gerard
	*
	*
	**/

	class Page{
		private $header;
		private $menu;
		private $contents;
		private $foot;
		private $css;//string - contenido de fichero

		public function __construct($css,$title,$logo,$links,$article,$mostrar){
			$this->header=new header($css,$title,$logo);
			$this->Menu=new Menu($links);
			$this->contents=new contents($article);
			$this->foot=new foot($mostrar);
		}

		public function show(){
			$this->header->show();
			$this->menu->show();
			$this->contents->show();
			$this->foot->show();

		}

	}
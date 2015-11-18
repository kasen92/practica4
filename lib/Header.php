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

	class Header{
		private $title;
		private $logo;
		private $css;

		public function __construct($css,$title,$logo){
			$this->title=$title;
			$this->logo=$logo;
			$this->css=$css;
		}
		public function show(){
			$html=LAYOUT.$this->css.'<style></head>';

			echo '<header>';
			echo '<h1>'.$this->title.'</h1>';
			echo '<img width="200px" src="'.$this->logo.'"/>';
			echo '</header>';
		}
	}
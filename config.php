<?php

	require('lib/page.php');
	require('lib/Header.php');
	require('lib/Contents.php');
	require('lib/Menu.php');
	require('lib/Foot.php');


	define('LAYOUT',
		'<!DOCTYPE html>
		<html>
			<head>
				<style type="text/css">');

	$links=array(
		'Home'=>'/pract4',
		'About us'=>''
		);

	//css de la pagina
	
	$css=file_get_contents('static/mi.css');
	
	define('LOGO','pirata.jpg');





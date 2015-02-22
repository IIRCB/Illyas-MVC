<?php
/**
* Author: Najeem M Illyas
*/
class myView
{
	function header()
	{
	$title = "Illyas MVC - Test";
	$content  = "header has content";
	include "\\box\\layout\\theme\\rose\\header.php";
	}
	
	function footer()
	{
	$content  = "footer has content";
	include "\\box\\layout\\theme\\rose\\footer.php";
	}
	
}

?>
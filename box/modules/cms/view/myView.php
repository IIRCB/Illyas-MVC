<?php namespace box\modules\cms\view;
class myView
{
	function header()
	{
	$title = "Illyas MVC - CMS Module";
	$content  = "CMS Module header has content";
	include "\\box\\layout\\theme\\rose\\header.php";
	}
	
	function footer()
	{
	$content  = "CMS module footer has content";
	include "\\box\\layout\\theme\\rose\\footer.php";
	}
	function homepage()
	{
	//$content  = "footer has content";
	include "/layout/theme/urbanic/home.php";
	}
}

?>
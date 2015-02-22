<?php
class Routes 
{
	function aliases()
	{
	
		
	$default = array(
		//"homepage" => "quiz/index", //homepage is by default "/"
		"join" => "quiz/register",
		"join/us" => "quiz/register",
		"home" => "quiz/index"
		);
		
	/*
	include module routes here, if any
	*/
	include 'modules/cms/routes.php';
	include 'modules/contact/routes.php';	
	$final = array_merge($default, Cmsroutes::aliases(), Contactroutes::aliases());
	return $final;
	}
}
?>
<?php namespace Box;
use Box\Modules\Cms;
use Box\Modules\Contact;
class Routes 
{
	function aliases()
	{
	
		
	$default = array(
		//"homepage" => "quiz/index", //homepage is by default "/"
		"join" => "quiz/register",
		"join/us" => "quiz/register",
		"home" => "quiz/index",
                "getTweets" => "quiz/tweets"
		);
		
	/*
	include module routes here, if any
	*/
	//include 'modules/cms/routes.php';
        $cms = new Modules\Cms\routes();
        $contact = new Modules\Contact\routes();
	//include 'modules/contact/routes.php';	
	$final = array_merge($default, $cms->aliases(), $contact->aliases());
	return $final;
	}
}
?>
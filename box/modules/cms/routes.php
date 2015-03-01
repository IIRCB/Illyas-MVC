<?php namespace box\modules\cms;
class routes 
{
	function aliases()
	{
	
	$cms = array(
		"homepage" => "cms/cms/index",
		"cms/view"	=>	"cms/cms/view"
		);
		
		return $cms;
	}
}
?>
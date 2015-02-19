<?php 
/**
* Author: Najeem M Illyas
*/
//echo "initiated";
/*
 * Its similar to bootstrap
 */
include 'Illyas.php';
$parts = $_SERVER['REQUEST_URI'];
print $parts;

$segments = explode("/", $parts);
//var_dump($parts);
if(!empty($segments))
{
//	foreach ($parts as $value) {
//		
//		$controller = $value;
//	}
print '<pre>';
print_r($segments);
print '</pre>';
if(MODULAR == true)
{
$module = $segments[2]?$segments[2]:'';
$controller = $segments[3];
$action = $segments[4];
}
else
{
$module = '';
$controller = $segments[2];
$action = $segments[3]?$segments[3]:'index';
}

$class = ucfirst($controller).'Controller';
//echo $class.'<br />';
	function __autoload($class) 
	{
	global $module;
		//echo '<br />'.$class.'<br />';
		if (preg_match("/Model/i", $class))
		{
		//$filename = getcwd()."\\box\\controller\\".$class.".php";
	    $filename = "/../../box/model/".$class.".php";
		}
		elseif (preg_match("/Controller/i", $class))
		{
			if(MODULAR == true)
			{
			$filename = "/../../box/modules/".$module."/controller/".$class.".php";
			}
			else
			{
		 	$filename = "/../../box/controller/".$class.".php";
		 	}
		}
		elseif (preg_match("/View/i", $class))
		{
		 $filename = "/../../box/view/".$class.".php";
		}
	    include $filename;
	}
$obj = new $class();

$m1 = ucfirst($action).'Action';
$obj->$m1();
}

?>

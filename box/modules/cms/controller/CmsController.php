<?php
/*
 *  Quiz Controller
 */
class CmsController extends Illyas
{
	public function __construct() 
	{
	  	//echo "CmsController init'ed successfuly form CMS module!!!<br />";
	}	
	function IndexAction()
	{
		//print 'Cms module Index Action is working<br />';
		$user = $this->model('usermodel');
		$cms = $this->model('cmsmodel');
		//$user->test();
		//$cms->save();
		//$this->view('myview')->header();
		//$this->view('myview')->footer();
		$this->view('myview')->homepage();
	}
	function ViewAction()
	{
		//print 'Cms module View action<br />';
		$user = $this->model('usermodel');
		
		//$user->test();
		$this->view('myview')->header();
		$this->view('myview')->footer();
	}
}
?>
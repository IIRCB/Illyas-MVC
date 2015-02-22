<?php
/*
 *  Quiz Controller
 */
class ContactController extends Illyas
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
	function SubmitAction()
	{
		print 'Contact module Submi action<br />';
		//$user = $this->model('usermodel');
		print_r($_POST);
		
		//$this->view('myview')->homepage();
	}
}
?>
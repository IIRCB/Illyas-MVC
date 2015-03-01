<?php namespace box\modules\contact\controller;
/*
 *  Quiz Controller
 */
use Box\Modules\Contact\Model;
class ContactController
{
    public $user,$view;
	public function __construct() 
	{
	  	//echo "CmsController init'ed successfuly form CMS module!!!<br />";
            $this->user = new \Box\Modules\Cms\Model\Usermodel();
            $this->view = new \Box\Modules\Cms\View\Myview();
	}	
	function IndexAction()
	{
		//print 'Cms module Index Action is working<br />';
		
		$this->view->homepage();
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
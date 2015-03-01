<?php namespace box\modules\cms\controller;

use Box\Modules\Cms\Model;
/*
 *  Quiz Controller
 */
class Cmscontroller
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
		$this->user->test();
		
		 $this->view->homepage();
	}
	function ViewAction()
	{
		//print 'Cms module View action<br />';
		$this->user->test();
		
		//$user->test();
		$this->view('myview')->header();
		$this->view('myview')->footer();
	}
}
?>
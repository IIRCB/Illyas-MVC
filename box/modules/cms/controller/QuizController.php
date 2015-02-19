<?php
/*
 *  Quiz Controller
 */
class QuizController extends IllyasController
{
	public function __construct() 
	{
	  	echo "myClass init'ed successfuly!!!";
	}	
	function IndexAction()
	{
		print 'MVC Index Controller is working';
		$user = $this->model('usermodel');
		
		$user->test();
		$this->view('myview')->header();
		$this->view('myview')->footer();
	}
	function RegisterAction()
	{
		print 'MVC Register Controller';
		$user = $this->model('usermodel');
		
		//$user->test();
		$this->view('myview')->header();
		$this->view('myview')->footer();
	}
}
?>
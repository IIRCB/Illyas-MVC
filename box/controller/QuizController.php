<?php
/**
* Author: Najeem M Illyas
*/
/*
 *  Quiz Controller
 */
class QuizController
{
	public function __construct() 
	{
	  	echo "QuizController init'ed successfuly!!!";
	}	
	function IndexAction()
	{
		print 'Quiz Index action is working<br />';
		$user = $this->model('usermodel');
		
		$user->test();
		$this->view('myview')->header();
		$this->view('myview')->footer();
	}
	function RegisterAction()
	{
		print 'Quiz Register action';
		$user = $this->model('usermodel');
		
		//$user->test();
		$this->view('myview')->header();
		$this->view('myview')->footer();
	}
}
?>
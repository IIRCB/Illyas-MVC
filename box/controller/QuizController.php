<?php namespace box\controller;

use Box\Model;
/**
* Author: Najeem M Illyas
*/
/*
 *  Quiz Controller
 */
class Quizcontroller
{
    public $user,$view;
    public function __construct() 
	{
	  	echo "QuizController constructor<br />"; 
                $this->user = new \Box\Model\Usermodel();
                $this->view = new \Box\View\Myview();
	}	
	function IndexAction()
	{
		print 'Quiz Index action is working<br />';
		//$user = $this->model('usermodel');
               
		
		$this->user->test();
		$this->view->header();
                $this->view->footer();
	}
	function RegisterAction()
	{
		print 'Quiz Register action';
		
		
		$this->user->test();
                //$view = new \Box\View\Myview();
		$this->view->header();
                $this->view->footer();
	}
        function TweetsAction() {
            $hash_tag = $_GET['hash_tag'];
        $url = 'http://search.twitter.com/search.atom?q='.urlencode($hash_tag) ;
        echo '<p>Connecting to <strong>'.$url.'</strong>&hellip;</p>';
        $ch = curl_init($url);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $xml = curl_exec ($ch);
        curl_close ($ch);

        //If you want to see the response from Twitter, uncomment this next part out:
        echo '<p>Response:</p>';
        echo '<pre>'.htmlspecialchars($xml).'</pre>';

        $affected = 0;
        $twelement = new SimpleXMLElement($xml);
        foreach ($twelement->entry as $entry) {
            $text = trim($entry->title);
            $author = trim($entry->author->name);
            $time = strtotime($entry->published);
            $id = $entry->id;
            echo '<p>Tweet from '.htmlspecialchars($author).': <strong>'.htmlspecialchars($text).'</strong>  <em>Posted '.date('n/j/y g:i a',$time).'</em></p>';
        }

        return true ;
}


}
?>
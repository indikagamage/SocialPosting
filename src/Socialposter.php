<?php 

namespace Indikagamage\Socialposter;
 
class Socialposter {
 
 //generate post form
  public function postForm($twig)
  {
		echo $twig->render('home.html');
  }

  //submit post in relevent network
  public function postMassage($conf)
  {
  	foreach ($conf as $key => $value) {
  		$this-> $key($value);  		
  	}
		
  }

  //FB posting
  private function fb($conf){
  	//Ini FB
  	$fb = new \Facebook\Facebook([
	'app_id' =>  $conf['app_id'],
	'app_secret' => $conf['app_secret'],
	'default_graph_version' => 'v2.2',
	]);

	$data = [
	'message' => $_POST['massage']
	];

	
	try {
	// Returns a `Facebook\FacebookResponse` object
	$response = $fb->post('/me/feed', $data,$conf['access-token']);

	} catch(Facebook\Exceptions\FacebookResponseException $e) {
	echo 'Graph returned an error: ' . $e->getMessage();
	exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
	echo 'Facebook SDK returned an error: ' . $e->getMessage();
	exit;
	}

	$graphNode = $response->getGraphNode();

	echo 'Post ID: ' . $graphNode['id'];
  }
 
}
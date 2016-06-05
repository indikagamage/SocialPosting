<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */
/**
*Social Posting Application
*
*PHP version 5
* 
* @author    Indika Gamage <indika@indikagamage.com>
*
*/

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);

// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';

// Create Router instance
$router = new \Bramus\Router\Router();

// Ini Socialposter
$socialposter = new Indikagamage\Socialposter\Socialposter();

// Setup path to config file
JsonConfig\Config::setup(__DIR__ .'/config/config.json');
// get social configaration
$conf = JsonConfig\Config::get('clients');


// Ini Twig Tempalte system
$loader = new Twig_Loader_Filesystem(__DIR__ .'/view');
$twig = new Twig_Environment($loader, array(
    'cache' => __DIR__ .'/.cache',
));


// Define routes
$router->get('/', function() use ($socialposter,$twig) {
	 $socialposter->postForm($twig);
   
});

$router->post('/postmassage', function() use ($socialposter,$conf) {
	 $socialposter->postMassage($conf);
   
});

// Run
$router->run();
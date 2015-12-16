<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';
require 'db_config.php';

$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});

// get all user
$app->get("/album",function() use ($app,$db){
 foreach ($db->album() as $value) {
 $album["response"][] = array(
 "id" => $value["id"],
 "title" => $value["title"],
 "desc" => $value["desc"],
 "pictures" => $value["pictures"]
 );
 }

 echo json_encode($album);

});

$app->run();

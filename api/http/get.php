<?php

# Seguridad
defined('INDEX_DIR') OR exit('Ocrend software says .i.');

//------------------------------------------------

/*
$app->get('/example2',function($request, $response){

  $e = new Example;
  $response->withJson($e->Foo($_GET));

  return $response;
});
*/

/**
	* 퓉ue hace (el modelo que se invoca desde aqui)?
	* @return 퓉ue retorna?, 죝n json por favor! 
*/
$app->get('/ejemplo',function($request, $response) {

	$model = new Ejemplo;
	$response->withJson($model->Foo($_GET));

	return $response;
});
/**
	* 퓉ue hace (el modelo que se invoca desde aqui)?
	* @return 퓉ue retorna?, 죝n json por favor! 
*/
$app->get('/productores',function($request, $response) {

	$model = new Productores;
	$response->withJson($model->Foo($_GET));

	return $response;
});
/**
	* 퓉ue hace (el modelo que se invoca desde aqui)?
	* @return 퓉ue retorna?, 죝n json por favor! 
*/
$app->get('/ventas',function($request, $response) {

	$model = new Ventas;
	$response->withJson($model->Foo($_GET));

	return $response;
});
/**
	* 퓉ue hace (el modelo que se invoca desde aqui)?
	* @return 퓉ue retorna?, 죝n json por favor! 
*/
$app->get('/deudas',function($request, $response) {

	$model = new Deudas;
	$response->withJson($model->Foo($_GET));

	return $response;
});
/**
	* 퓉ue hace (el modelo que se invoca desde aqui)?
	* @return 퓉ue retorna?, 죝n json por favor! 
*/
$app->get('/reportes',function($request, $response) {

	$model = new Reportes;
	$response->withJson($model->Foo($_GET));

	return $response;
});
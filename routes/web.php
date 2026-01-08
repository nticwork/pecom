<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return response('<h1>Hello from vercel</h1>');
});


Route::get('/hello1', function () {
    return view('hello');
});


Route::get('/produits/{cat}', function ($cat) {
    $produits=[];

	if($cat=='hicking'){
	$produits=array(
                    array(
                         "nom" => "Sac à dos",
                         "prix"=>200,
                         "image" => "sac_do.jfif"
                          ),
                     array(
                         "nom" => "tente",
                         "prix"=>300,
                         "image" => "tent.jfif"
                          ),
                      array(
                         "nom" => "Montre GPS",
                         "prix"=>150,
                         "image" => "watch_gps.jfif"
                          )
                 );



	}
	else if($cat=='electromenager')
	{
	$produits=array(
                    array(
                         "nom" => "Machine à laver",
                         "prix"=>3000,
                         "image" => "machine_lav.jfif"
                          ),
                     array(
                         "nom" => "Four",
                         "prix"=>1500,
                         "image" => "four.jfif"
                          ),
                      array(
                         "nom" => "Micro onde",
                         "prix"=>1000,
                         "image" => "micro_onde.jfif"
                          )
                 );

	}


	return view('Produits', [
        'products' => $produits,
        'categorie' => $cat
    ]);
});


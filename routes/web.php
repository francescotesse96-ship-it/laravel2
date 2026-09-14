<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::get('/chi-siamo',function(){
    $users = [
        ['name' => 'Mario', 'surname' =>'Rossi', 'role' => 'Senior Manager'],
         ['name' => 'Serena', 'surname' =>'Verdi', 'role' => 'HR'],
          ['name' => 'Walter', 'surname' =>'Bianchi', 'role' => 'Developer']
    ];
    return view('about-us', ['users' =>$users]);
})->name('aboutUs');

Route::get('/chi-siamo/detail/{name}', function($name){
      $users = [
        ['name' => 'Mario', 'surname' =>'Rossi', 'role' => 'Senior Manager'],
         ['name' => 'Serena', 'surname' =>'Verdi', 'role' => 'HR'],
          ['name' => 'Walter', 'surname' =>'Bianchi', 'role' => 'Developer']
    ];
    foreach($users as $user){
        if($name == $user['name']){
            return view('about-us-detail', ['user'=>$user]);
        }
    }
})->name('aboutUsDetail');

Route::get('/contatti',function(){
    return view('contacts');
})->name('contacts');

Route::get('/movies', function(){
    $movies =[
        ['id'=>'1', 'title'=>'Batman', 'director'=>'C. Nolan', 'img'=>'/media/film/batman begins.jpg', 'genres'=> 'Supereroi'],
        ['id'=>'2', 'title'=>'La casa di carta', 'director'=>'A. Pina', 'img'=>'/media/film/la casa di carta.jpg', 'genres'=> 'Azione'],
        ['id'=>'3', 'title'=>'Joker', 'director'=>'S. Silver', 'img'=>'/media/film/Joker.jpg', 'genres'=>'Horror'], 
        ['id'=>'4', 'title'=>'Creed', 'director'=>'R. Coogler', 'img'=>'/media/film/Creed.jpg', 'genres'=> 'Combattimento'],
        ['id'=>'5', 'title'=>'Stranger Things', 'director'=> 'F. Duffer', 'img'=>'/media/film/stranger things.jpg', 'genres'=> 'Fantascinza'],
    ]; 
          return view('movie.movies', ['movies'=>$movies]);
})->name('movie.list');


Route::get('movie/detail/{id}', function($id){
  $movies =[
        ['id'=>'1', 'title'=>'Batman', 'director'=>'C. Nolan', 'img'=>'/media/film/batman begins.jpg', 'genres'=> 'Supereroi'],
        ['id'=>'2', 'title'=>'La casa di carta', 'director'=>'A. Pina', 'img'=>'/media/film/la casa di carta.jpg', 'genres'=> 'Azione'],
        ['id'=>'3', 'title'=>'Joker', 'director'=>'S. Silver', 'img'=>'/media/film/Joker.jpg', 'genres'=>'Horror'], 
        ['id'=>'4', 'title'=>'Creed', 'director'=>'R. Coogler', 'img'=>'/media/film/Creed.jpg', 'genres'=> 'Combattimento'],
        ['id'=>'5', 'title'=>'Stranger Things', 'director'=> 'F. Duffer', 'img'=>'/media/film/stranger things.jpg', 'genres'=> 'Fantascinza'],
    ]; 
    foreach($movies as $movie){
        if($id== $movie['id']){
            return view('movie.movie-detail', ['movie'=>$movie]);
        }
    }
})->name('movie.detail');
     
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public  $movies =[
        ['id'=>'1', 'title'=>'Batman', 'director'=>'C. Nolan', 'img'=>'/media/film/batman begins.jpg', 'genres'=> 'Supereroi'],
        ['id'=>'2', 'title'=>'La casa di carta', 'director'=>'A. Pina', 'img'=>'/media/film/la casa di carta.jpg', 'genres'=> 'Azione'],
        ['id'=>'3', 'title'=>'Joker', 'director'=>'S. Silver', 'img'=>'/media/film/Joker.jpg', 'genres'=>'Horror'], 
        ['id'=>'4', 'title'=>'Creed', 'director'=>'R. Coogler', 'img'=>'/media/film/Creed.jpg', 'genres'=> 'Combattimento'],
        ['id'=>'5', 'title'=>'Stranger Things', 'director'=> 'F. Duffer', 'img'=>'/media/film/stranger things.jpg', 'genres'=> 'Fantascinza'],
    ];
    public  function movieList(){
    
          return view('movie.movies', ['movies'=>$this->movies]);
}

public  function movieDetail($id){

    foreach($this->movies as $movie){
        if($id== $movie['id']){
            return view('movie.movie-detail', ['movie'=>$movie]);
        }
    }
}
}

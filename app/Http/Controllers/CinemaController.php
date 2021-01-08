<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CinemaController extends Controller
{
    public function index(){
        $daftar_movies = DB::table('daftar_movies')->paginate(8);

        return view('home', ['daftar_movies' => $daftar_movies]);
       // return view('home',);
    }
    public function nowplaying(){
        $daftar_movies = DB::table('daftar_movies')->paginate(8);

        return view('cinema.nowplaying.indexnowplaying', ['daftar_movies' => $daftar_movies]);
    }
    public function upcoming(){
        return view('cinema.upcoming.indexupcoming',);
    }
    public function theaters(){
        return view('cinema.theaters.indextheaters',);
    }
    public function detailmovie($id){
        $daftar_movies = DB::table('daftar_movies')->where('id', $id)->first();

        return view('cinema/movie/detailmovie', ['daftar_movies' => $daftar_movies], compact('daftar_movies'));
        //return view('cinema/movie/detailmovie', compact('cinema'));
        //return view('cinema.movie.detailmovie',);
    }
    public function seet(){
        return view('cinema.movie.seet',);
    }
    public function receipt(){
        return view('cinema.movie.receipt',);
    }



}

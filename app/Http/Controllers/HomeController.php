<?php

namespace App\Http\Controllers;

use App\Repositories\MovieRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        $show_times              = DB::select("select * from showtimes");
        $show_time_for_jun       = DB::select("select * from showtimes where showdate = '2022-06-12'");
        $show_time_for_t2_jun    = DB::select("select * from showtimes where showdate = '2022-06-12' AND theaterno = 'T2'");
        $movie_for_jun_12_and_13 = DB::select("select * from showtimes where showdate = '2022-06-12' OR showdate = '2022-06-13'");
        $movie_for_jun_13        = DB::select("select mid from showtimes where showdate = '2022-06-13' AND showdate != '2022-06-12'");
        $movie_title_jun_12      = DB::select("select movie.movie_title, movie.distributor FROM movie LEFT JOIN showtimes ON movie.movie_id = showtimes.mid WHERE showtimes.showdate = '2022-06-12'");
        // $movie= DB::select("select distinct mid, showdate from showtimes where showtime in (select showtime from showtimes group by showtime HAVING COUNT(showtime) > 1)");

        // dd($movie);

        return view('home.index', compact('show_times', 'show_time_for_jun', 'show_time_for_t2_jun', 'movie_for_jun_12_and_13', 'movie_for_jun_13', 'movie_title_jun_12'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

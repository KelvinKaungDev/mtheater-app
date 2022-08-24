<?

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class MovieRepository {
    public static function getAll()
    {
        $movies = DB::select('select * from movie');

        return $movies;
    }
}

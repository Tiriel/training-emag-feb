<?php

namespace App\Movie\Provider;

use App\Entity\Movie;
use App\Movie\Enum\SearchType;

class MovieProvider
{
    public function getMovie(SearchType $type, string $value): Movie
    {
        // check in database with
        // "SELECT * from Movie Where title like $value order by releasedAt ASC"

        // if in db: return Movie

        // if not: fetch from OMDB
        // Build Movie
        // save Movie in DB
        // return Movie
    }
}

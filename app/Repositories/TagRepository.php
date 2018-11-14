<?php 

namespace App\Repositories;

use App\Models\Tag;

class TagRepository extends Repository {
    function model()
    {
        return new Tag();
    }
}

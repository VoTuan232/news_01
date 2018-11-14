<?php 

namespace App\Repositories;

use App\Models\Post;

class PostRepository extends Repository {
    function model()
    {
        return new Post();
    }
}

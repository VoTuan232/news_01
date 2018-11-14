<?php 

namespace App\Repositories;

use App\Models\Comment;

class CommentRepository extends Repository {
    function model()
    {
        return new Comment();
    }
}

<?php 

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository extends Repository {
    function model()
    {
        return new Category();
    }
}

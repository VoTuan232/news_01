<?php 

namespace App\Repositories;

use App\Models\User;

class UserRepository extends Repository {
    function model()
    {
        return new User();
    }
}

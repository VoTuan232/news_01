<?php 

namespace App\Repositories;

use App\Models\Role;

class RoleRepository extends Repository {
    function model()
    {
        return new Role();
    }
}

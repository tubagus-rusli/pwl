<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use spatie\Permission\Models\Role as ModelsRole;

class Role extends ModelsRole
{
    Use HasFactory;
}

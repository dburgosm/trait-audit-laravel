<?php

namespace App;

use App\Traits\Audit;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use Audit;
}

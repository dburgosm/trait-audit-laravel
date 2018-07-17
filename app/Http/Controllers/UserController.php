<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\Audit;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $user = new User();
        $user->name = "Juan Perez";
        $user->email = "jperez@test.cl";
        $user->password = bcrypt("hello");
        $user->save();

        $user->name = "Perez Juan";
        $user->save();

        $user->delete();

        $role = new Role();
        $role->name = "New Role";
        $role->save();

        $role->delete();


        foreach(Audit::all() as $audit) {
            echo 'type: '.$audit->type.' raw: '.$audit->raw;
            echo '</br>';
        }
    }
}

<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function postSignUp(Request $request)
    {
        $id_name = $request['id_name'];
        $first_name = $request['first_name'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->id_name = $id_name;
        $user->first_name = $first_name;
        $user->password = $password;

        $user->save();

        return redirect()->back();
    }
    public function postSignIn(Request $request)
    {

    }
}
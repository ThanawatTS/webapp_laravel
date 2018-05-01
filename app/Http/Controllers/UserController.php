<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
    
class UserController extends Controller
{

    public function getDashboard(){
        return view('dashboard');
    }
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

        return redirect()->route('dashboard');
    }
    public function postSignIn(Request $request)
    {
        if (Auth::attempt(['id_name' => $request['id_name'], 'password' => $request['password']]))
        {
            return redirect()->route('dashboard');
        }
        return redirect()->back();
    }
}
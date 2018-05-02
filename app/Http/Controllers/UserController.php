<?php
namespace App\Http\Controllers;

use App\User;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
    
class UserController extends Controller
{

    public function getDashboard(){
        return view('dashboard');
    }

    public function getProfile(){
        return view('profile', array('user' => Auth::user()));
    }

    public function update_avatar(Request $request){
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . "." . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save( public_path('uploads/avatars/' . $filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return view('profile', array('user' => Auth::user()));
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
            return redirect()->route('profile');
        }
        return redirect()->back();
    }
}
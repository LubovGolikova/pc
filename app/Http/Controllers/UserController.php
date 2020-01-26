<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Auth;


class UserController extends Controller
{
    public function profile(){
        return view('user.profile');
    }

    public function account(){
        $user = Auth::user();
        return view('user.account', compact('user'));
    }
    public function accountUpdate(Request $request){
        $user = Auth::user();

        $request->validate([
            'name' => 'required|max:255|min:3',
            'email' => 'required|email|unique:users,email,'.$user->id,
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->path = $request->filepath;
        $user->description = $request->description;
        $user->role = isset($request->role) ? $request->role : 'guest' ;
        $user->save();
        return redirect('profile/account')->with('success', 'Данные сохранены');
    }

    function show($id){
        $user = User::find($id);
        return view('user.show', compact('user'));
    }
    public function search(Request $request){
        $s = $request->s;
        $users=User::where('name','LIKE', '%'.$s.'%')->simplepaginate(12);
        return view('search',compact('users', 's'));
    }
}

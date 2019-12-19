<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        return view('admin.users.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name'=>'required|min:3|max:150',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8',
            'card'=>[
                function ($attribute, $value, $fail) {
                    if($value){
                        $rx = '~^\\d{16}~x';
                        if ( preg_match($rx, $value) === 0) {
                            $fail($attribute.' is invalid.');
                        }
                    }
                }
            ],
            'fb_account' => [
                'max:255',
                function ($attribute, $value, $fail) {
                    if($value){
                        $rx = '~^(?:https?://)?(?:www[.])?(?:facebook[.]com)~x';
                        if ( preg_match($rx, $value) === 0) {
                            $fail($attribute.' is invalid.');
                        }
                    }
                },
            ],

            'telegram_account' => [
                'max:255',
                function ($attribute, $value, $fail) {
                    if($value){
                        $rx = '~^(?:https?://)?(?:www[.])?(?:telegram)~x';
                        if ( preg_match($rx, $value) === 0) {
                            $fail($attribute.' is invalid.');
                        }
                    }
                },
            ],
            'youtube_account' => [
                'max:255',
                function ($attribute, $value, $fail) {
                    if($value){
                        $rx = '~^(?:https?://)?(?:www[.])?(?:youtube[.]com)~x';
                        if ( preg_match($rx, $value) === 0) {
                            $fail($attribute.' is invalid.');
                        }
                    }
                },
            ],
        ]);


        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = (new User())->fill($request->all());
        $user->save();
        return redirect('/admin/users/'.$user->id.'/edit')->with('success', 'Данные сохранены');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = \Validator::make($request->all(), [
            'name'=>'required|min:3|max:150',
            'email'=>'required|email',
            'card'=>[
                function ($attribute, $value, $fail) {
                    if($value){
                        $rx = '~^\\d{16}~x';
                        if ( preg_match($rx, $value) === 0) {
                            $fail($attribute.' is invalid.');
                        }
                    }
                }
            ],
            'fb_account' => [
                'max:255',
                function ($attribute, $value, $fail) {
                    if($value){
                        $rx = '~^(?:https?://)?(?:www[.])?(?:facebook[.]com)~x';
                        if ( preg_match($rx, $value) === 0) {
                            $fail($attribute.' is invalid.');
                        }
                    }
                },
            ],

            'telegram_account' => [
                'max:255',
                function ($attribute, $value, $fail) {
                    if($value){
                        $rx = '~^(?:https?://)?(?:www[.])?(?:telegram)~x';
                        if ( preg_match($rx, $value) === 0) {
                            $fail($attribute.' is invalid.');
                        }
                    }
                },
            ],
            'youtube_account' => [
                'max:255',
                function ($attribute, $value, $fail) {
                    if($value){
                        $rx = '~^(?:https?://)?(?:www[.])?(?:youtube[.]com)~x';
                        if ( preg_match($rx, $value) === 0) {
                            $fail($attribute.' is invalid.');
                        }
                    }
                },
            ],
        ]);


         if($validator->fails()){
             return redirect()->back()->withErrors($validator)->withInput();
         }

        $user = User::find($id)->fill($request->all());
        $user->save();
        return redirect()->back()->with('success', 'Данные сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->back();
    }
}

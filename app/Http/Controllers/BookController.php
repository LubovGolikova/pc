<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Auth;
use Validator;
use App\User;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required|min:3|max:150',
            'price'=>'required|regex:/^\d+(\.\d{1,2})?$/',
            'path'=>'mimes:jpeg,png,jpg|max:2048',
            'fileBook'=>'mimes:pdf|max:2048',
        ]);

        if($validator->fails()){
            return redirect('/profile/books/create')->withErrors($validator)->withInput();
        }
        $book = new Book();
        $book->name = $request->name;
        $book->price = $request->price;
        $book->description = $request->description;
        $book->path = $request->filepath;
        $book->user_id =Auth::user()->id;
        $book->fileBook = $request->fileBook;
        $book->save();
        return redirect('/profile/books/create')->with('success','Данные сохранены');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

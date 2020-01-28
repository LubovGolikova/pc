<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
class ShopController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $books=Book::simplePaginate(9);
        return view('shop.index',compact('books'));
    }
    function showProduct($id){
        $book = Book::find($id);
        return view('shop.showBook', compact('book'));
    }
}

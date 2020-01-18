<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Verse;
use Auth;
use Validator;
use App\User;
class VerseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Все стихи';
        $verses = Verse::orderBy('likes', 'DESC')->orderBy('views', 'DESC')->paginate(5);
        return view('verses.latest', compact('verses','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('user.verses.create', compact('categories'));
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
            'content'=>'required',
            'audio'=>'mimetypes:audio/mp4,audio/mpeg,audio/ogg',
            'youtube' => [
                'required',
                'max:255',
                function ($attribute, $value, $fail) {
                    $rx = '~^(?:https?://)?(?:www[.])?(?:youtube[.]com/watch[?]v=|youtu[.]be/)([^&]{11})~x';
                    if ( preg_match($rx, $value) === 0) {
                        $fail($attribute.' is invalid.');
                    }
                },
            ],
        ]);

    if($validator->fails()){
        return redirect('/profile/verses/create')->withErrors($validator)->withInput();
    }

        $verse = new Verse();
        $verse->name = $request->name;
        $verse->content = $request->content;
        $verse->category_id = $request->category;
        $verse->youtube = $request->youtube;
        $audio = $request->file('audio');
        if($audio){
            $fName = time() . '_' . $audio->getClientOriginalName();
            $audio->move('uploads/audio', $fName);
            $verse->audio = 'uploads/audio/'.$fName;
        }

        $verse->path = $request->filepath;
        $verse->user_id = Auth::user()->id;
        $verse->save();
        return redirect('/profile/verses/create')->with('success', 'Данные сохранены');
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


    public function latestVerses(){
        $title = 'Новые стихи';
        $verses = Verse::orderBy('created_at', 'DESC')->simplePaginate(9);
        return view('verses.latest', compact('verses','title'));
    }


    public function popularVerses(){
        $title = 'Популярные стихи';
        $verses = Verse::orderBy('likes', 'DESC')->simplePaginate(9);
        return view('verses.latest', compact('verses','title'));
    }
    public function allVerses()
    {
        $title = 'Все стихи';
        $verses = Verse::simplePaginate(9);
        return view('verses.latest', compact('verses','title'));
    }

    public function showCategory($slug){
        $category = Category::where('slug', $slug)->first();
        $title = $category->name;
        $verses = Verse::where('category_id', $category->id)->orderBy('created_at', 'DESC')->paginate(5);
        return view('verses.latest', compact('verses','title'));
    }

    public function authorsVerses(){
        $authors = User::where('role', '=', 'author')->simplePaginate(9);
        return view('verses.authors', compact('authors'));
    }

    public function popularAuthorsVerses(){
        //need remake
        $authors = User::simplePaginate(9);
        return view('verses.authors', compact('authors'));
    }

    public function latestAuthorsVerses(){
        $authors = User::where('role', '=', 'author')->orderBy('created_at', 'DESC')->simplePaginate(9);
        return view('verses.authors', compact('authors'));
    }

    public function authorVerses($id){
        $user = User::find($id);
        $title = 'Все стихи автора ' . $user->name;
        $verses = Verse::where('user_id', '=', $id)->orderBy('created_at', 'DESC')->paginate(5);
        return view('verses.latest', compact('verses','title'));
    }
    public function showVerse($id)
    {
        $verse = Verse::find($id);
        $verse->views++;
        $verse->save();
        return view('verses.verse', compact('verse'));
    }

    public function addLike($id)
    {
        $verse = Verse::find($id);
        $verse->likes++;
        $verse->save();
        echo $verse->likes;
        exit;
    }

    public function getLastViews(Request $request)
    {
        $verses = [];
//        echo gettype($request->ids);
        if($request->ids!='null'){
        foreach(json_decode($request->ids) as $id){
            if($id)
                $verses[] = Verse::find($id);
        }
        }
        echo json_encode($verses);
    }
}

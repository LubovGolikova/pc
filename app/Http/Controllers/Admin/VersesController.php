<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Verse;
use App\Category;

class VersesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $verses = Verse::orderBy('created_at', 'DESC')->get();
        return view('admin.verses.index', compact('verses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $verse = Verse::find($id);
        $categories = Category::all();
        $categories = $categories->pluck('name', 'id');
        return view('admin.verses.edit', compact('verse', 'categories'));
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
            'content'=>'required',
            //'audio'=>'mimes:audio/mp3,audio/mp4,audio/mpeg,audio/ogg,audio/mpeg3,audio/x-mpeg-3,video/x-mpeg,mpga',
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
            'audio' => [
                function ($attribute, $value, $fail) {
                    $arr = ['mp3', 'mpeg', 'ogg', 'mpeg3'];
                        if ( !in_array($value->getClientOriginalExtension(), $arr)) {
                        $fail($attribute.' is invalid.');
                    }
                },
            ],
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $verse = Verse::find($id);
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
        $verse->likes = $request->likes;
        $verse->views = $request->views;
        $verse->writed_at = $request->writed_at;
        $verse->approved = $request->approved ? 1 : 0;
        $verse->save();
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
        //
    }
}

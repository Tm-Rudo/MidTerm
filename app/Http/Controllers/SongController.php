<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Song::latest()->paginate(10);

        return view('index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // public function trashed_songs()
    // {
    //     $data = Song::latest()->paginate(10);

    //     return view('trash-list', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
       
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'          =>  'required|min:3',
            'artist'          =>  'required|min:3',
            'album'          =>  'required|min:3',
            'length'          =>  'required|integer',
            
        ],[
            // 'title.required' => 'Enter a name ',
            // 'title.min' => 'The name cannot be less than :min characters ',

            // 'artist.required' => 'Enter a artist ',
            // 'artist.min' => 'The name cannot be less than :min characters ',

            // 'album.required' => 'Enter a album ',
            // 'album.min' => 'The name cannot be less than :min characters ',

            // 'length.required' => 'Enter length ',
            // 'length.interger' => 'The length must be numeric',

            'require' => 'Required to enter',
            'min' => 'cannot be less than :min characters',
            'integer' => 'must be numeric'
        ]);



        $song = new Song;
        $song -> title = $request->title;       
        $song -> artist = $request->artist;       
        $song -> album = $request->album;       
        $song -> length = $request->length;       
           
        $song->save();

        return redirect()->route('songs.index')->with('success', 'Song Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Song  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        return view('show', compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Song  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        return view('edit', compact('song'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        $request->validate([
            'title'          =>  'required',
            'artist'          =>  'required',
            'album'          =>  'required',
            'length'          =>  'required',
        ]);


        $song = Song::find($request->hidden_id);

        $song -> title = $request->title;       
        $song -> artist = $request->artist;       
        $song -> album = $request->album;       
        $song -> length = $request->length;       

        $song->save();

        return redirect()->route('songs.index')->with('success', 'Song Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Song  $Song
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {
        $song->delete();

        return redirect()->route('songs.index')->with('success', 'Song Data deleted successfully');
    }
}

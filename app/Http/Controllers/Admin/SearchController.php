<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\music;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //

    protected $music, $songs;
    public function add(){
        return view('back.music.add');
    }

    public function create(Request $request){
         Music::musicAdd($request);
         return back()->with('success', 'Successfully added');
    }

    public function manage(){
        return view('back.music.manage',[
            'musics' => Music::all()
        ]);
    }


    public function edit($id){
        $this->music =Music::find($id);
        return view('back.music.edit',['music'=>$this->music]);
    }

    public function update(Request $request, $id){
        Music::updateMusic($request, $id);
        return redirect()->route('add.music')->with('success','Successfully Updated');
    }


    public function delete($id){
        $this->music =Music::find($id);
        if (file_exists($this->music->image_file)){
            unlink($this->music->image_file);
        }
        if (file_exists($this->music->audio_file)){
            unlink($this->music->audio_file);
        }
        $this->music->delete();
        return redirect()->route('add.music')->with('success','Successfully Deleted');

    }


    public function fetchSongData()
    {
        // Fetch the song data from the database
        $songs = Music::all();

        // Return the song data as a JSON response
        return response()->json($songs);
    }



}

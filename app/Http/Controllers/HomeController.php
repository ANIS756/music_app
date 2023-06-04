<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.home.index',[
            'musics' => Music::all()
        ]);
    }
    public function artists()
    {
        return view('front.artists.index');
    }
    public function albums()
    {
        return view('front.albums.index');
    }
    public function stations()
    {
        return view('front.stations.index');
    }
    public function musics()
    {
        return view('front.music.index');
    }
    public function downloads()
    {
        return view('front.downloads.index');
    }
    public function purchased()
    {
        return view('front.purchased.index');
    }
    public function favourites()
    {
        return view('front.favourites.index');
    }

    public function searchMusic(Request $request){

        if ($request->search){
            $searchMusic = Music::where('name','like','%'.$request->search.'%')->latest()->paginate(10);
            return  view('front.home.search', compact('searchMusic'));
        }
        else{
            return redirect()->back()->with('success','empty search');
        }
    }



//    public function handleHomeCommand(){
//
//        return view('front.home.index',[
//            'musics' => Music::all()
//        ]);
//
//    }
//
//    public function handleArtistCommand(){
//
//        return view('front.artists.index');
//
//    }




//    public function fetchSongData(Request $request)
//    {
//        // Fetch the song data from the database
//        $songs = Music::all();
//
//        // Return the song data as a JSON response
//        return response()->json($songs);
//    }


//    public function search(Request $request)
//    {
//        $searchTerm = $request->input('search-term');
//        $results = Music::where('name', 'LIKE', "%{$searchTerm}%")->get();
//        return response()->json($results);
//    }


}

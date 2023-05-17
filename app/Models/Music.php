<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;


    public static $music, $imageName, $imageFile, $imageDirectory, $imageUrl;
    public static $audioFile, $audioName, $audioDirectory, $audioUrl;


    public static function musicAdd($request){


        self::$imageFile = $request->File('image_file');
        if (self::$imageFile)
        {

            self::$imageName        = rand(10, 1000).self::$imageFile->getClientOriginalName();
            self::$imageDirectory   = 'back/image/upload/';
            self::$imageFile->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl         = self::$imageDirectory.self::$imageName;

        }

        // Upload the audio file
        self::$audioFile = $request->file('audio_file');
        if (self::$audioFile) {
            self::$audioName       = rand(10, 1000) . self::$audioFile->getClientOriginalName();
            self::$audioDirectory  = 'back/audio/upload/';
            self::$audioFile->move(self::$audioDirectory, self::$audioName);
            self::$audioUrl        = self::$audioDirectory . self::$audioName;
        }

        self::$music = new Music();
        self::$music->name        =$request->name;
        self::$music->singer_name =$request->singer_name;
        self::$music->image_file  = self::$imageUrl;
        self::$music->audio_file  = self::$audioUrl;
        self::$music->save();

    }
    public static function updateMusic($request, $id){

        self::$music   = music::find($id);

        self::$imageFile = $request->File('image_file');
        if (self::$imageFile)
        {
            if (file_exists(self::$music->image_file))
            {
                unlink(self::$music->image_file);
            }


            self::$imageName        = rand(10, 1000).self::$imageFile->getClientOriginalName();
            self::$imageDirectory   = 'back/image/upload/';
            self::$imageFile->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl         = self::$imageDirectory.self::$imageName;

        } else{

            self::$imageUrl = self::$music->image_file;

        }

        // Upload the audio file
        self::$audioFile = $request->file('audio_file');
        if (self::$audioFile) {


            if (file_exists(self::$music->audio_file))
            {
                unlink(self::$music->audio_file);
            }



            self::$audioName       = rand(10, 1000) . self::$audioFile->getClientOriginalName();
            self::$audioDirectory  = 'back/audio/upload/';
            self::$audioFile->move(self::$audioDirectory, self::$audioName);
            self::$audioUrl        = self::$audioDirectory . self::$audioName;
        }else{

            self::$audioUrl = self::$music->audio_file;

        }


        self::$music->name        =$request->name;
        self::$music->singer_name =$request->singer_name;
        self::$music->image_file  = self::$imageUrl;
        self::$music->audio_file  = self::$audioUrl;
        self::$music->save();

    }

}

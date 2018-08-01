<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use App\Models\Picture;
use App\Models\Place;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    public function addPhoto()
    {
        $places = Place::get();

        return view('addPhoto', compact('places'));
    }

    public function uploadFormAddPhoto(ImageRequest $request)
    {
        $path = $request->file('image')->store('images');

        $placeId = $request->place_id;

        Picture::create(['place_id' => $placeId, 'url' => $path]);

        return redirect(route('showPlace', $placeId));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlaceRequest;
use App\Models\Picture;
use App\Models\Place;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlacesController extends Controller
{
    public function index()
    {
        $places = Place::join('types', 'places.type_id', '=', 'types.t_id')->get();

        return view('places', ['places' => $places]);
    }

    public function getCreate()
    {
        $types = Type::get();

        return view('create', ['types' => $types]);
    }

    public function postCreate(PlaceRequest $request)
    {
        Place::create($request->all());

        return redirect('/places');
    }

    public function getAddPhoto($id)
    {
        $place = Place::findOrFail($id);

        $pictures = Picture::where('place_id', '=', $id)->orderBy('created_at', 'desc')->get();

        return view('addPhoto', ['place' => $place, 'pictures' => $pictures]);
    }

    public function postAddPhoto(Request $request, $id)
    {
        $path = $request->file('image')->store('images');

        Picture::create(['place_id' => $id, 'url' => $path]);

        return redirect('/places');
    }

    public function show($id)
    {
        $place = Place::findOrFail($id);

        $pictures = Picture::where('place_id', '=', $id)->orderBy('created_at', 'desc')->get();

        return view('show', ['place' => $place, 'pictures' => $pictures]);
    }
}

<?php

namespace App\Http\Controllers;


use App\Http\Requests\PlaceRequest;
use App\Models\Place;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlacesController extends Controller
{
    public function index()
    {
        return view('main');
    }

    public function showAll()
    {
        $places = Place::with('type')->get();

        return view('places', compact('places'));
    }

    public function createPlace()
    {
        $types = Type::get();

        return view('create', compact('types'));
    }

    public function uploadFormCreatePlace(PlaceRequest $request)
    {
        Place::create($request->all());

        return redirect(route('showAllPlaces'));
    }


    public function show($id)
    {
        $place = Place::findOrFail($id);

        $pictures = $place->pictures->sortByDesc('created_at');

        return view('show', compact('place','pictures'));
    }
}

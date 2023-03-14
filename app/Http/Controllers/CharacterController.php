<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index()
    {
        return view('characters.index', [
            'title' => 'HP karakterek',
            'characters' => Character::all()
        ]);
    }

    public function show()
    {
        return view('characters.show', []);
    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function destroy()
    {

    }
}

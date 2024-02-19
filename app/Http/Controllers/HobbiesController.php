<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function show()
    {
        return view('Hobbies')
            ->with('Hobbies1', 'Watching Series and Movies')
            ->with('Hobbies2', 'Travelling')
            ->with('Hobbies3', 'Playing Mobile Games');
    }
}
?>
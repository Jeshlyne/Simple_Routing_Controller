<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function show()
    {
        return view('Skills')
            ->with('Skills1', 'Multitasking');
            
    }
}

?>
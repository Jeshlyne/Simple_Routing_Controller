<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function show()
    {
        return view('Skills')
            ->with('Skills1', 'Knowledgeable in programming / scripting language: Java, SQL')
            ->with('Skills2', 'Proficient with multimedia software: Adobe Photoshop, Adobe Premiere, 
            Microsoft Office, Canva')
            ->with('Skills3', 'Knowledgeable in programming language: Python, C++, HTML');
    }
}

?>
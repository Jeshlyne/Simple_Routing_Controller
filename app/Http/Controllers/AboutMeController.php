<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function show()
    {
        return view('AboutMe')
            ->with('name', 'Jeshlyne Ballesteros')
            ->with('age', 20)
            ->with('birthdate', 'June 7, 2003')
            ->with('email', 'abaloslyne@gmail.com')
            ->with('contact', '09670394272');
    }
    
}
?>
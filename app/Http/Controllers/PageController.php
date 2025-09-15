<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
<<<<<<< HEAD
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }
}


=======
    public function home() {
        return "Selamat datang di halaman Home!"; 
    }

    public function about() {
        return "Ini adalah halaman About."; 
    }
}
>>>>>>> b38206ac7376d41bf8af11b27f7f9943d4ab0cac

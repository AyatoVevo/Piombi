<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage(){



        return view('welcome');
    }

    
}

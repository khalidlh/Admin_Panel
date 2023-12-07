<?php

namespace App\Http\Controllers;

use App\Models\companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function Maps(){
        return view('location.maps');
    }
}

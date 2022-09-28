<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

if(Auth::check()){}
class ProfileController extends Controller
{
    public function update(Request $request){
    }
}
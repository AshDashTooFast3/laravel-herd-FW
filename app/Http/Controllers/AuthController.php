<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
   public function create()
   {
     return view ('auth.register');
   }

   public function store(Request $request)
   {
    dd($request->all());
   }
}

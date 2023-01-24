<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    static function validation($request){
        $request->validate([
         'title'=>'required|string|min:1|max:50',
         'description' => 'nullable|string',
         'thumb' => 'nullable|url|max:255',
         'price' => 'required|decimal:2|max:1000',
         'series' => 'required|string|max:100',
         'sale_date' => 'required|date|before:tomorrow',
         'type' => 'required|string|max:50'
     ]); 
     }
}

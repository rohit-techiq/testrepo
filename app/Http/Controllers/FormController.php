<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\FormModel;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }
 
     public function store(Request $request)
     {
 
         $emp = new FormModel;
 
         $emp->name = $request->name;
         $emp->email = $request->email;
         $emp->age = $request->age;
    
 
         $emp->save();
 
         return redirect('form')->with('status', 'Form Data Has Been validated and insert');
 
    }
}

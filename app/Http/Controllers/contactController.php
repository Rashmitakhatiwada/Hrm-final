<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index()
    {
    	 $name="rashmita Khatiwada";
    	 return view('layout.contact.index')->with([
    	 	'first'=> 'rashmita',
    	 	'last' => 'Khatiwada'
    	 ]);
    }
public function show($id)
{

}
}
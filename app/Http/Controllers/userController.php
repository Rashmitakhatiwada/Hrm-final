<?php

namespace App\Http\Controllers;
use App\user;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
    	$users=user::all();
    	return view('users.index', compact('users'));
    }

public function show($id){
	$users = user::find( $id );
	
	//return $users;
	return view('users.show', compact('users'));
}
}


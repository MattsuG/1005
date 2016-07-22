<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MentorController extends Controller
{
  public function index() 
  {
 	return view("index");
  }
  public function store()
  {
  	return view::make("index")
  }
}

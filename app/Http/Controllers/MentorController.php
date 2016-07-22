<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MentorController extends Controller
{

  public function index() 
  {
 	return view("mentor.index");
  }

  public function store(Request $request)
  {
    $this->validate($request, [
        'title' => 'required|max:50',
        'category' => 'required|integer',
        'price' => 'required|integer',
        'detail' => 'required|max:1000',
    ]);
    return view("mentor.confirm");
  }

  public function create()
  {
  	return view("mentor.add");
  }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
  public function create() {
    return "create";
  }

    public function index() {
      $names = "<strong>Lorem</strong>";
      return view("index",compact("names"));
    }

}

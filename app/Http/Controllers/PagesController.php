<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Question;

class PagesController extends Controller
{
//    public function  index()
//    {
//      return redirect()->route('index');
//    }

  public function index()
  {
    $categories = Category::all();
    $questions = Question::all();
    return view('index', compact( 'categories', 'questions'));
  }
}

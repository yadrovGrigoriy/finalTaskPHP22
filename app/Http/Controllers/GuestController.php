<?php

namespace App\Http\Controllers;

use App\Category;
use App\Question;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
      $categories = Category::all();
      $questions = Question::all();
      return view('index', compact( 'categories', 'questions'));
    }

    public function create()
    {
      return view('create');
    }
}

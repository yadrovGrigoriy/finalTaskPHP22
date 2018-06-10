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
      return view('guest.index', compact( 'categories', 'questions'));
    }

    public function create()
    {
      $categories = Category::all();
      return view('guest.create', compact('categories'));
    }

  public function store(Request $request)
  {
    $this->validate($request,[
      'user_name' => 'required',
      'category_id',
      'user_email' => 'required|max:255',
      'question' => 'required',
    ]);

    Question::create($request->all());

    return redirect()->route('guest.index');
  }
}

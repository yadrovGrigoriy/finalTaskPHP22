<?php

namespace App\Http\Controllers;

use App\Question;
use App\Category;
use Illuminate\Http\Request;
//use Symfony\Component\Console\Question\Question;



class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categories = Category::all();
      $questions =  Question::all();
      return view('admin.questions.index', compact('questions', 'categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
         return view('admin.questions.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'user_name' => 'required',
            'category_id',
            'user_email' => 'required|',
            'question' => 'required',

          ]);

      Question::create($request->all());

        return redirect()->route('questions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $withoutAnswer = 0)
    {
      $categories = Category::all();
      if($withoutAnswer == 1){
      $questions = Question::all()
      ->where('category_id', '=', $id)
      ->where('answer','=', null)
      ->orderBy('answer');
      } else {
        $questions = Question::all()
          ->where('category_id', '=', $id);
      }

      return view('admin.questions.indexCategory', compact('questions', 'categories'));
    }
//
//    public function showWithoutAnswer($id)
//    {
//        $categories = Category::all();
//        $questions = Question::all()
//          ->where('category_id', '=', $id)
//          ->where('answer','=', null);
//
//      return view('admin.questions.indexCategory', compact('questions', 'categories'));
//    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {

        $categories = Category::all();
        return view('admin.questions.edit', compact('question','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
      $this->validate($request,[
        'user_name' => 'required',
        'category_id',
        'user_email' => 'required',
        'question' => 'required',
      ]);

        $question->update($request->all());
        return redirect()->route('questions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->back();
    }




}

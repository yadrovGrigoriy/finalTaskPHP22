<?php

namespace App\Http\Controllers;
use App\Question;
use Illuminate\Http\Request;

class AdminQuestionsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return
   */
  public function index()
  {
    $questions =  Question::all();
    return view('/admin.admin', compact('questions'));

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return
   */
  public function create()
  {
    return view('questions.create');
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
      'name' => 'required',
      'category' => 'required',
      'email' => 'required',
      'question' => 'required',

    ]);

    Question::create($request->all());

    return redirect('/admin.admin');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(Question $question)
  {

    return view('questions.edit', compact('question'));
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
    $this->validate($request, [
      'category',
      'question',
    ]);
    $question->update($request->all());
    return redirect('/admin.admin');
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
    return redirect('/admin.admin');
  }


}

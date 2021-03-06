@extends('layouts.app')
@include('layouts.error')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <h2>Заполните все поля</h2>
                    <form action="{{route('questions.update', $question->id)}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('patch') }}
                    <div class="form-group">

                        <label>Имя <input class="form-control" type="text" required name="user_name" value="{{$question->user_name}}"></label>
                    </div>

                        <div class="form-group">

                            <label>Категория:
                                <select class="form-control"  required name="category_id">

                                    @foreach($categories as $category)
                                        <option  value="{{$category->id}}">{{ $category->category }}</option>
                                    @endforeach

                                </select>
                            </label>
                        </div>

                    <div class="form-group">

                        <label>Email: <input class="form-control" type="text" required name="user_email" value="{{$question->user_email}}" ></label>
                    </div>

                    <div class="form-group">

                        <label>Вопрос :<textarea class="form-control" type="text" required name="question"   >{{$question->question}}</textarea></label>
                    </div>
                    <div class="form-group">

                        <label>Ответ : <input class="form-control" type="text"  name="answer" value="{{ $question->answer }}"></label>

                        <label>Опубликовать: <input class="btn btn-group-justified" type="radio"  value="1"  name="publish"></label>

                        <label>Скрыть: <input class="btn btn-group-justified" type="radio"  value="0"  name="publish"></label>


                    </div>



                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Сохранить </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @include('layouts.error')



@endsection
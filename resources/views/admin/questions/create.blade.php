@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
    <h2>Заполните все поля</h2>
    <form action="{{route('questions.store')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">

            <label>Имя <input class="form-control" type="text" required name="user_name"></label>
        </div>

        <div class="form-group">

            <label>Категория:
                <select class="form-control"  required name="category_id" >

                     @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->category}}</option>
                     @endforeach

                </select>
            </label>
        </div>

        <div class="form-group">

            <label>Email: <input class="form-control" type="text" required name="user_email" ></label>
        </div>

        <div class="form-group">

            <label>Вопрос<textarea class="form-control" type="text" required name="question" ></textarea></label>
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Добавить</button>
        </div>
                </div>
            </div>
        </div>
    </div>

    </form>

        @include('layouts.error')



@endsection

@extends('layouts.layout')

@section('content')
    <h2>Заполните поля которые нужно изменить</h2>
    <form action="/questions/{{$question->id}}" method="post">

        {{csrf_field()}}
        {!! method_field('patch') !!}
        <div class="form-group">
            <label class="col-lg-auto">Категория: <input class="form-control" type="text"  name="category" value="{{$question->category}}" ></label>
        </div>

        <div class="form-group">

            <label>Вопрос<textarea class="form-control" type="text" required name="question" >{{$question->question}}</textarea> </label>
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Изменить</button>
        </div>

        @include('layouts.error')

    </form>


@endsection

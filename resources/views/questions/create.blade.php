@extends('layouts.layout')

@section('content')
    <h2>Чтобы вы хотели узнать?</h2>

    <form action="/questions/store" method="post">

        {{csrf_field()}}
        <div class="form-group">

            <label>Имя <input class="form-control" type="text" required name="name"></label>
        </div>

        <div class="form-group">

            <label>Категория: <input class="form-control" type="text" required name="category" ></label>
        </div>

        <div class="form-group">

            <label>Email: <input class="form-control" type="text" required name="email" ></label>
        </div>

        <div class="form-group">

            <label>Вопрос<textarea class="form-control" type="text" required name="question" ></textarea></label>
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Добавить</button>
        </div>

        @include('layouts.error')

    </form>


@endsection

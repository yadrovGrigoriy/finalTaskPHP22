@extends('layouts.app')

@section('content')
    &nbsp;<div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-4 ">
                <a class="btn btn-primary" href="{{ route(  'questions.index') }}">Список Вопросов</a>
                <a class="btn btn-secondary" href="{{ route( 'questions.create') }}">Добавить Вопрос</a>
            </div>
            <div class="col-md-2 col-sm-4">
                <a class="btn btn-primary" href="{{ route( 'categories.index') }}">Список Категорий </a>
                <a class="btn btn-secondary " href="{{ route('categories.create') }}">Добавить Категорию</a>
            </div>
            <div class="col-md-2 col-sm-6">
                <a class="btn btn-primary" href="{{ route(      'users.index') }}">Список Пользователей</a>
                <a class="btn btn-secondary" href="{{ route(     'users.create') }}">Добавить Пользователя</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        {{--<ul class="navbar-nav mr-auto">--}}
                        {{--&nbsp;<li class="dropdown">--}}
                        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Категории <b class="caret"></b></a>--}}
                        {{--<ul class="dropdown-menu">--}}
                        <div class="col-form-label-lg">Категории:

                            @foreach($categories as $category)

                                <a href="{{ route('questions.show', $category->id) }}">{{$category->category}}</a> |
                            @endforeach
                        </div>

                        @if($questions->count() > 0)

                            <table class="table">
                                @foreach($questions as $question)
                                    <tr style="border-top: 2px solid dimgray;">
                                        <td><h4>{{ $question->question }}</h4></td>
                                    </tr>

                                    @if($question->answer != null)
                                        <tr>
                                            <td> <strong>Ответ:</strong> {{ $question->answer }}

                                            </td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <td>{{$question->created_at }} |
                                            {{$question->user_name}}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Статус:
                                            @if($question->publish == 1)
                                                <span style="color:green;">Опубликовано</span>
                                            @elseif ($question->answer == null)
                                                <span style="color:orange;">Ожидает ответа</span>
                                            @else
                                                <span style="color:red;">Скрыт</span>
                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <form action="{{ route('questions.destroy', $question->id) }}" method="POST">
                                                <a type="button" class="btn btn-pri" href="{{ route('questions.edit', $question->id) }}">Редактировать</a>

                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger">Удалить</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </table>

                        @else
                            Нет Вопросов
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


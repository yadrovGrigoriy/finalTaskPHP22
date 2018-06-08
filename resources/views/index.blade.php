@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <ul class="navbar-nav mr-auto">
                            &nbsp;<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Категории <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    @foreach($categories as $category)
                                        <li>{{$category->category}}</li>
                                    @endforeach
                                </ul>

                        </ul>
                        @if($questions->count() > 0)

                            <table class="table">
                                @foreach($questions as $question)
                                @if ($question->publish = 1)
                                    <tr>
                                        <td><h4>{{ $question->question }}</h4></td>
                                    </tr>
                                    <tr>
                                        <td > <strong style="color:blue;border-top: none;">Ответ:</strong> {{ $question->answer }}</td>
                                    <tr style="border-bottom: 2px solid dimgray; ">
                                        <td>{{$question->created_at }} |
                                        {{$question->user_name}}</td>
                                    </tr >
                                @endif
                                @endforeach

                            </table>

                        @else
                            Нет Вопросов
                        @endif
                    </div>
                </div>
            </div>
        </div>

@endsection
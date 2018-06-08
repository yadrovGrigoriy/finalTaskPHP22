@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome</div>

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
                                            {{--@if(!empty($question->answer))--}}
                                            <tr>
                                                <td><h4>{{ $question->question }}</h4></td>
                                            </tr>
                                            <tr>
                                                <td>{{ $question->answer }}</td>
                                            <tr>
                                                <td>{{$question->created_at }}</td>
                                                <td>{{$question->user_name}}</td>
                                            </tr>


                                            <br>
                                            {{--@endif--}}
                                        @endforeach

                                    </table>

                                @else
                                    Нет Вопросов
                                @endif
                            </div>
                        </div>
                    </div>
                </div>


                {{--<div class="card-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--You are logged in!--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <h2>Заполните все поля</h2>
                    <tr>
                        <td><h3>{{ $question->question }}</h3></td>
                    </tr>
                    <form action="{{route('questions.update', $question->id)}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('patch') }}
                        <div class="form-group">
                            <label>Ответ : <input class="form-control" type="text"  name="answer"></label>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Сохранить Ответ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @include('layouts.error')



@endsection
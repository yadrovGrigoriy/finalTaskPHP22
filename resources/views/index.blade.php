@extends('layouts.layout')

@section('content')
   <div class="row">
        @foreach($questions as $question)

            <div class="col-lg-auto" >
                <h2>{{$question->question}}</h2>
                @if ($question->answer != null)
                  <h2 style="border-top:1px dashed #ccc;padding-top:10px;">Ответ: {{$question->answer}}</h2>
                @endif
                <form action="/questions/{{$question->id}}" method="post">
                    <a href="/question/{{$question->id}}/edit" class="btn btn-primary">Редактировать</a>
                    {{csrf_field()}}
                    {!! method_field('delete') !!}
                    <button type="submit" class="btn btn-outline-primary">Удалить</button>
                    <hr>
                </form>
            </div>

        @endforeach
    </div>

@endsection

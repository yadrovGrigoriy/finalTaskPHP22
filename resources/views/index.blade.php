@extends('admin.questions.index')

@section('content')
   <div class="row">
        {{--@foreach($categories as $category)--}}

            <div class="col-lg-auto" >
                {{--<h2>{{$category->question}}</h2>--}}
                {{--@if ($categories->answer != null)--}}
                  <h2 style="border-top:1px dashed #ccc;padding-top:10px;">Ответ: sdfsdfsd</h2>
                {{--@endif--}}
                {{--<form action="/questions/{{$question->id}}" method="post">--}}
                    {{--<a href="/question/{{$question->id}}/edit" class="btn btn-primary">Редактировать</a>--}}
                    {{csrf_field()}}
                    {!! method_field('delete') !!}
                    {{--<button type="submit" class="btn btn-outline-primary">Удалить</button>--}}
                    <hr>
                </form>
            </div>

        {{--@endforeach--}}
    </div>

@endsection

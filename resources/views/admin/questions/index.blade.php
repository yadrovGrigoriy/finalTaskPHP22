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
	</div>
@endsection
@extends('layouts.app')
@include('layouts.error')
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
						@if($categories->count() > 0)
							<table class="table">
								<tr>
									<th>Категория</th>
									<th>Колличество вопросов </th>
									<th>Опубликованные Вопросы</th>
									<th>Ожидает ответа</th>
									<th>Действия </th>
								</tr>
								@foreach($categories as $category)
									<tr>
										<td><a href="{{ route('questions.show', $category->id) }}">{{$category->category}}</a></td>
										<td>{{ $category->questions->count() }}</td>
										<td>{{ $category->questions->where('publish', 1)->count() }}</td>
										<td>{{ $category->questions->where('answer', NULL)->count() }}</td>


										@foreach($category->questions as $question)

										@endforeach
										<td>
											<form action="{{ route('categories.destroy', $category->id, $questions->where('category_id', '=', 'category')) }}" method="POST">
												<a type="button" class="btn btn-pri" href="{{ route('categories.edit', $category->id) }}">Редактировать</a>
												{{ method_field('DELETE') }}
												{{ csrf_field() }}
												<button type="submit" class="btn btn-danger">Удалить</button>
											</form>
										</td>
										</tr>
								@endforeach
							</table>
						@else
							No categories
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
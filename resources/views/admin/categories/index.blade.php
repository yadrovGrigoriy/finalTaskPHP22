@extends('layouts.app')

@section('content')
	&nbsp;<div class="container">

		<p><a class="btn btn-primary" href="{{ route(  'questions.index') }}">Список Вопросов</a>
			<a class="btn btn-primary" href="{{ route( 'categories.index') }}">Список Категорий</a>
			<a class="btn btn-primary" href="{{ route(      'users.index') }}">Список Пользователей</a></p>
		<p><a class="btn btn-primary" href="{{ route(     'users.create') }}">Добавить Пользователя</a>
			<a class="btn btn-primary" href="{{ route('categories.create') }}">Добавить Категорию</a>
			<a class="btn btn-primary" href="{{ route( 'questions.create') }}">Добавить Вопрос</a></p>


	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Категории</div>
					<div class="panel-body">
						@if($categories->count() > 0)
							<table class="table">
								<tr>
									<th>Категория</th>
									<th>Колличество вопросов </th>
									{{--<th>Обупликованные Вопросы</th>--}}
									<th>Действия </th>
								</tr>
								@foreach($categories as $category)
									<tr>
										<td>{{ $category->category }}</td>
										<td>{{ $category->questions->count() }}</td>

										@foreach($category->questions as $question)

										@endforeach
										<td>
											<form action="{{ route('categories.destroy', $category->id) }}" method="POST">
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
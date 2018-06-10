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
					<div class="panel-heading">Пользователи</div>
					<div class="panel-body">
						@if($users->count() > 0)
							<table class="table">
								<tr>
									<th>Имя пользователя</th>
									<th>Email</th>
									<th>Пароль</th>
									<th>Действия </th>
								</tr>
								@foreach($users as $user	)
									<tr>
										<td>{{ $user->name }}</td>
										<td>{{ $user->email }}</td>
										<td> {{$user->password }}</td>
										<td>
											<form action="{{ route('users.destroy', $user->id) }}" method="POST">

												{{ method_field('DELETE') }}
												{{ csrf_field() }}
											<button type="submit" class="btn btn-danger">Удалить</button>
											</form>
										</td>
									</tr>
									<tr>
										<td style="border-top: none">
											<a type="button" class="btn btn-outline-success" href="{{ route('users.edit', $user->id) }}">Редактировать</a>
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
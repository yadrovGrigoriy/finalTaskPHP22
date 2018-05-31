@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Категории</div>
					<div class="panel-body">
						@if($questions->count() > 0)
							<table class="table">
								<tr>
									<th>Вопрос </th>
									<th>Ответ</th>
									<th>Действия </th>
								</tr>

								@foreach($questions as $question)
									<tr>
										<td>{{ $question->question }}</td>
										<td>{{ $question->answer }}</td>
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
							No questions
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
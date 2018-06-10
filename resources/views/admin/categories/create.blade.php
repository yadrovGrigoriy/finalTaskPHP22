@extends('layouts.app')
)
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">

					<div class="panel-heading">Создать Новую Категорию</div>

					<div class="panel-body">
						<form action="{{ route('categories.store') }}" method="POST">
						    {{ csrf_field() }}
							<div class="form-group">
								<label><input class="form-control" type="text" required name="category" placeholder="Категория"></label>
							</div>

							<div class="row">

							</div>
							<input class="btn btn-primary" type="submit" value="Создать Категорию">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
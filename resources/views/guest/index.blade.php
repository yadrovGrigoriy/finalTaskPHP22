<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('css/reset.css') }}" rel="stylesheet">
	<script src="{{ asset('js/modernizr.js') }}" defer></script>
	<title>QA</title>
</head>
<body>
			<ul class="nav-bar">
				<!-- Authentication Links -->
				@guest
				<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
				{{--<li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>--}}
				@else
					<li class="nav-item dropdown">
						<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
							{{ Auth::user()->name }} <span class="caret"></span>
						</a>

						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="{{ route('logout') }}"
							   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
								{{ __('Logout') }}
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</div>
					</li>
					@endguest
			</ul>

<header>
	<h1>QA</h1>
</header>
			<div class="row">
				<div class="center-block">
					<a href="{{ route('guest.create') }}">Добавить Вопрос</a>
				</div>
			</div>
<section class="cd-faq">

	<ul class="cd-faq-categories">
		@foreach($categories as $category)
			<li><a  href="#{{ $category->category }}">{{ $category->category }}</a></li>
		@endforeach
	</ul> <!-- cd-faq-categories -->

	<div class="cd-faq-items">
		@foreach($categories as $category)
			<ul id="{{ $category->category }}" class="cd-faq-group">
				<li class="cd-faq-title"><h2>{{ $category->category }}</h2></li>
				@foreach($questions as $question)
					@if($question->category_id == $category->id)
						<li>
							<a class="cd-faq-trigger" href="#0">{{ $question->question }}</a>
							<div class="cd-faq-content">
								<p>{{ $question->answer }}</p>
							</div> <!-- cd-faq-content -->
						</li>
					@endif
				@endforeach
			</ul> <!-- cd-faq-group -->
		@endforeach


	</div> <!-- cd-faq-items -->
	<a href="#0" class="cd-close-panel">Close</a>
</section> <!-- cd-faq -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mobile.custom.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
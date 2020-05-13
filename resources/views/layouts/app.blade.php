<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title>@yield('title-block')</title>
  <link rel="stylesheet" type="text/css" href="/css/app.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 </head>
 <body>
 	@include('include.header')


 	@if (Request::is('/'))
 		@include('include.hero')
 	@elseif (Request::is('hello'))
 		@include('include.pronas')
 	@elseif (Request::is('contakts'))
 		@include('include.contaktu')
 	@endif

 	<div class="conteiner mt-5">
        @include('include.messages')
 		<div class="row">
 			<div class="col-8">
			@yield('content')
 			</div>
 			<div class="col-4">
			@include('include.aside')
 			</div>
		</div>
	</div>
@include('include.footer')
 </body>
</html>

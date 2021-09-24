<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title','Aprendible')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="/css/app.css">
	<script type="text/javascript" src="/js/app.js" defer></script>

	<style>


	</style>

</head>
<body>
	<div id="app" class="d-flex flex-column h-screen  justify-content-between ">
		<header id="header" class="">


@include('partials.nav')
@include('partials.session-status')
</header><!-- /header -->
<main class="py-4">
@yield('content')
</main>
<footer class="bg-dark text-white-50 text-center py-3 shadow">
	{{config('app.name')}} | Copyright @ {{ date('y')}}

</footer>

</div>
</body>
</html>
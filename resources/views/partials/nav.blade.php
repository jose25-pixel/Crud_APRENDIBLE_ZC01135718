<nav class="navbar navbar-light navbar-expand-lg bg-secundary shadow-sm">
	<div class="container">
		<a class="navbar-brand" href="{{route('home')}} " title=""> {{ config('app.name')}}</a>
		 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
	                    <span class="navbar-toggler-icon"></span>
	                </button>
	      <div class="collapse navbar-collapse" id="navbarSupportedContent">

			<ul class="nav nav-pills">
				<li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ?'active': '' }}" href="{{route('home') }} " title="">@lang('home')</a></li>

				<li class="nav-item"><a class="nav-link {{ request()->routeIs('about') ?'active': '' }}" href="{{route('about') }}" title="">@lang('about')</a></li>

				<li class="nav-item"><a class="nav-link  {{ request()->routeIs('projects.*') ?'active': ''}}" href="{{route('projects.index') }}" title="">  @lang('projects')</a></li>

				<li class="nav-item"><a class="nav-link {{request()->routeIs('contact') ?'active': ''}}" href=" {{route('contact')}} " title="">@lang('Contact')</a></li>
				<li class="nav-item"><a class="nav-link  {{request()->routeIs('register') ?'active': ''}} " href=" {{route('register')}} " title="">registarme</a></li>
				@auth

					<li><a href="#" onclick="event.preventDefault();
	               document.getElementById('logout-form').submit();"> Cerrar Seccion</a></li>
					@else
						<li class="nav-item"><a class="nav-link  {{request()->routeIs('login') ?'active': ''}} " href=" {{route('login')}} " title="">Iniciar Seccion</a></li>

					@endauth

			</ul>
			</div>
		</div>
	</nav>
	    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
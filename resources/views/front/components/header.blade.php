<header id="mdp-header-container">
	<div id="mdp-header-logo-container">
		<img src="{{ asset('img/logo/logo-mdp.jpg') }}" alt="logo ma douce parenthèse" />
	</div>
	<nav>
		<ul>
		@foreach ($main_menu as $menu)
			<li><a href="{{ $menu->url }}">{{ ucfirst($menu->title) }}</a></li>
		@endforeach
		</ul>

	</nav>

</header>
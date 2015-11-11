<footer id="mdp-footer-container">
	<ul>
		@foreach ($menu_footer as $menu)
			<li><a href="{{ $menu->url }}">{{ ucfirst($menu->title) }}</a></li>
		@endforeach
		</ul>
</footer>
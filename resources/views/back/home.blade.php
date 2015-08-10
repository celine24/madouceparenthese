@extends('back.template')

@section('content')
<div class="container mdp-index-home">
	<section class="row">
		<div class="col-md-12">
			<h1>Accueil</h1>
			
			<p class="lead">Bienvenue sur le panneau d'administration de Ma Douce Parenthèse.</p>

			<p>Vous pouvez dès à présent : </p>
			<ul class="list-unstyled">
				<li>- <a href="{{ url('pages') }}#">gérer vos pages</a></li>
				<li>- <a href="#">gérer vos articles</a></li>
				<li>- <a href="#">gérer votre section de mise en avant</a></li>
				<li>- <a href="#">gérer votre galerie</a></li>
			</ul>
		</div>
	</section>
</div>
@endsection
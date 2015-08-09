@extends('back.template')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Bienvenue sur le panneau d'administration de Ma Douce Parenthèse</div>

				<div class="panel-body">
					Vous pouvez dès à présent : 
					<ul class="list-unstyled">
						<li>- <a href="{{ url('pages') }}#">gérer vos pages</a></li>
						<li>- <a href="#">gérer vos articles</a></li>
						<li>- <a href="#">gérer votre section de mise en avant</a></li>
						<li>- <a href="#">gérer votre galerie</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
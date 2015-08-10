@extends('back.template')

@section('content')
<div class="container mdp-sidebar-index">
	<section class="row">
		<h1>Gestion de la mise en avant</h1>
		<div class="col-md-12">
			<p class="bg-primary">Ici vous pouvez gérer votre section de mise en avant.</p>
				<form>
					<div class="form-group">
						<label for="sidebar">Contenu de la section de mise en avant :</label>
						<textarea class="form-control" rows="3">contenu de la mise en avant</textarea>
					</div>
					<input class="btn btn-default pull-right" type="submit" value="Éditer">
					<a class="btn btn-default pull-right" href="#" role="button">Prévisualiser</a>
				</form>
		</div>
	</section>
</div>
@endsection
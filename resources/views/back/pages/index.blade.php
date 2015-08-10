@extends('back.template')

@section('content')
<div class="container mdp-pages-index">
	<section class="row">
		<h1>Gestion des pages</h1>
		<div class="col-md-12">
			<p class="bg-primary">Ici vous pouvez consulter la liste de vos pages, gérer ces dernières et en créer de nouvelles.</p>
			<table class="table table-striped table-bordered table-condensed">
				<caption>Liste des pages</caption>
				<thead>
					<tr>
						<td>Nom de la page</td>
						<td>Edition</td>
						<td>Suppression</td>
						<td>Statut</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Nom de la page</td>
						<td>Editer</td>
						<td>Supprimer</td>
						<td>Statut</td>
					</tr>
				</tbody>
			</table>
			<a class="btn btn-default pull-right" href="#" role="button">Créer une page</a>
		</div>
	</section>
</div>
@endsection
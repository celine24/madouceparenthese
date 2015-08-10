@extends('back.template')

@section('content')
<div class="container mdp-articles-index">
	<section class="row">
		<h1>Gestion des articles</h1>
		<div class="col-md-12">
			<p class="bg-primary">Ici vous pouvez consulter la liste de vos articles, gérer ces derniers et en créer de nouveaux.</p>
			
				<form>
					<div class="form-group">
						<label for="articles-description">En-tête de la page articles :</label>
						<textarea class="form-control" rows="3">description de la page articles</textarea>
					</div>
					<input class="btn btn-default pull-right" type="submit" value="Éditer">
				</form>
					<table class="table table-striped table-bordered table-condensed">
						<caption>Liste des articles</caption>
						<thead>
							<tr>
								<td>Titre de l'article</td>
								<td>Edition</td>
								<td>Suppression</td>
								<td>Statut</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Titre de l'article</td>
								<td>Editer</td>
								<td>Supprimer</td>
								<td>Statut</td>
							</tr>
						</tbody>
						</tfoot>
					</table>
					<a class="btn btn-default pull-right" href="#" role="button">Créer un article</a>
		</div>
	</section>
</div>
@endsection
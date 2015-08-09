@extends('back.template')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Gestion des Articles</div>

				<div class="panel-body">
					<div class="panel panel-default">
						<div class="panel-body">
							<p class="pull-left">Description de la page Articles</p>
							<a class="btn btn-default pull-right" href="#" role="button">Editer</a>
						</div>
					</div>
					<table class="table table-striped table-bordered table-condensed">
						<caption></caption>
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
			</div>
		</div>
	</div>
</div>
@endsection
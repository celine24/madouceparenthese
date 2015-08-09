@extends('back.template')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Gestion des Pages</div>

				<div class="panel-body">
					<table class="table table-striped table-bordered table-condensed">
						<caption></caption>
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
						</tfoot>
					</table>
					<a class="btn btn-default pull-right" href="#" role="button">Créer une page</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
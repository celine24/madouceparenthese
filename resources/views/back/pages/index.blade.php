@extends('back.template')

@section('content')
<div class="container mdp-pages-index">
	<section class="row">
		<h1>Gestion des pages</h1>
		<div class="col-md-12">
			@if(Session::has('message'))
                <p class="alert alert-success">
                    {{Session::get('message')}}
                </p>
            @endif
			<p class="bg-primary">Ici vous pouvez consulter la liste de vos pages, gérer ces dernières et en créer de nouvelles.</p>
			<table class="table table-striped table-bordered table-condensed">
				<caption>Liste des pages</caption>
				<thead>
					<tr>
						<td>Nom de la page</td>
						<td>Url</td>
						<td>Statut</td>
						<td>Action</td>
					</tr>
				</thead>
				<tbody>
				@foreach ($pages as $page)
					<tr>
						<td>{{$page->title}}</td>
						<td>{{$page->url}}</td>
						<td>
							@if ($page->published === 1)
								<p class="text-success bg-success img-circle mdp-published" data-toggle="tooltip" title="En attente de publication"><span class="glyphicon glyphicon-ok success"></span></p>

							@else
								<p class="text-danger bg-danger img-circle mdp-published" data-toggle="tooltip" title="En attente de publication"><span class="glyphicon glyphicon-remove"></span></p>
							@endif	

                    	</td>
						<td>
							<a href="{{ route('admin.pages.edit', $page->id) }}" data-toggle="tooltip" title="Editer la page" class="btn btn-sm btn-info mdp-btn-list"><span class="glyphicon glyphicon-edit"></span></a>
							
							<a href="{{ route('admin.pages.edit', $page->id) }}" data-toggle="tooltip" title="Prévisualiser la page" class="btn btn-sm btn-primary mdp-btn-list"><span class="glyphicon glyphicon-search"></span></a>

							{!! Form::open([
					                    'url' => route('admin.pages.update', $page->id),
					                    'method' => 'PUT'
					                    ]) 
					        !!}
								@if ($page->published === 1)
									<input type="hidden" name="publication" value="0"/>
									<button 
			                    		class="btn btn-sm btn-warning mdp-btn-list"
			                            type="submit"
			                            data-toggle="tooltip"
			                            title="Dépublier la page"
			                            data-confirm="delete"
			                            data-text="Voulez-vous vraiment dépublier cette page ? Elle ne sera plus visible sur le site, mais vous pourrez la remettre en ligne à tout moment."
			                            data-confirm-button="Oui"
			                            data-cancel-button="Mince, non !"
			                            data-placement="top">
			                            <span class="glyphicon glyphicon-open"></span>
		                            </button>
								@else
									<input type="hidden" name="publication" value="1"/>
									<button 
			                    		class="btn btn-sm btn-success mdp-btn-list"
			                            type="submit"
			                            data-toggle="tooltip"
			                            title="Mettre en ligne"
			                            data-confirm="delete"
			                            data-text="Cette page sera visible sur le site si vous la publiez maintenant. Etes-vous certain de vouloir effectuer cette action ?"
			                            data-confirm-button="Oui"
			                            data-cancel-button="Mince, non !"
			                            data-placement="top">
			                            <span class="glyphicon glyphicon-save"></span>
		                            </button>
								@endif
							{!! Form::close() !!}

							{!! Form::open([
					                    'url' => route('admin.pages.destroy', $page->id),
					                    'method' => 'DELETE'
					                    ]) 
					        !!}
	                    		<button 
		                    		class="btn btn-sm btn-danger mdp-btn-list"
		                            type="submit"
		                            data-toggle="tooltip"
		                            title="Supprimer la page"
		                            data-confirm="delete"
		                            data-text="Voulez-vous vraiment supprimer cette page ? Cette action est définitive."
		                            data-confirm-button="Oui"
		                            data-cancel-button="Mince, non !"
		                            data-placement="top">
		                            <span class="glyphicon glyphicon-trash"></span>
	                            </button>
	                    	{!! Form::close() !!}

	                    	<div class="clearfix"></div>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
			<a class="btn btn-default pull-right" href="{{ route('admin.pages.create') }}" role="button">Créer une page</a>
		</div>
	</section>
</div>
@endsection
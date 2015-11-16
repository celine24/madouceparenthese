@extends('back.template')

@section('content')
<div class="container mdp-articles-index">
	<section class="row">
		<h1>Gestion des articles</h1>
		<div class="col-md-12">
			@if(Session::has('message'))
				<p class="alert alert-success">
					{{Session::get('message')}}
				</p>
			@endif
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
								<td>Titre</td>
								<td>Contenu</td>
								<td>Page</td>
								<td>Action</td>
							</tr>
						</thead>
						<tbody>
						@foreach ($posts as $post)
							<tr>
								<td>{{$post->title}}</td>
								<td>{{$post->content}}</td>
								<td>{{$post->page->title}}</td>
								<td>
									<a href="{{ route('admin.articles.edit', $post->id) }}" data-toggle="tooltip" title="Editer l'article" class="btn btn-sm btn-info mdp-btn-list"><span class="glyphicon glyphicon-edit"></span></a>

									<a href="{{ route('admin.articles.edit', $post->id) }}" data-toggle="tooltip" title="Prévisualiser l'article" class="btn btn-sm btn-primary mdp-btn-list"><span class="glyphicon glyphicon-search"></span></a>

									{!! Form::open([
                                                'url' => route('admin.articles.update', $post->id),
                                                'method' => 'PUT'
                                                ])
                                    !!}
									@if ($post->published === 1)
										<input type="hidden" name="publication" value="0"/>
										<button
												class="btn btn-sm btn-warning mdp-btn-list"
												type="submit"
												data-toggle="tooltip"
												title="Dépublier l'article"
												data-confirm="delete"
												data-text="Voulez-vous vraiment dépublier cet article ? Il ne sera plus visible sur le site, mais vous pourrez le remettre en ligne à tout moment."
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
												data-text="Cet article sera visible sur le site si vous le publiez maintenant. Etes-vous certain de vouloir effectuer cette action ?"
												data-confirm-button="Oui"
												data-cancel-button="Mince, non !"
												data-placement="top">
											<span class="glyphicon glyphicon-save"></span>
										</button>
									@endif
									{!! Form::close() !!}

									{!! Form::open([
                                                'url' => route('admin.articles.destroy', $post->id),
                                                'method' => 'DELETE'
                                                ])
                                    !!}
									<button
											class="btn btn-sm btn-danger mdp-btn-list"
											type="submit"
											data-toggle="tooltip"
											title="Supprimer l'article"
											data-confirm="delete"
											data-text="Voulez-vous vraiment supprimer cet article ? Cette action est définitive."
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
						</tfoot>
					</table>
					<a class="btn btn-default pull-right" href="{{ route('admin.articles.create') }}" role="button">Créer un article</a>
		</div>
	</section>
</div>
@endsection
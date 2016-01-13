@extends('back.template')

@section('content')
<div class="container mdp-sidebar-index">
	<section class="row">
		<h1>Gestion de la Section de Mise en Avant</h1>
		<div class="col-md-12">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops !</strong> Il y'a un problème avec les données envoyées !<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

			@foreach ($sidebars as $sidebar)
            <h2>contenu de la mise en avant</h2>
            <p class="bg-primary">

                {{ $sidebar->content }}

            </p>

            <a href="{{ route('admin.mise-en-avant.edit', 1) }}" title="Editer" class="btn mdp-btn-space btn-info pull-right">Éditer</a>

            <a href="{{ route('admin.mise-en-avant.edit', 1) }}" title="Prévisualiser" class="btn mdp-btn-space btn-primary pull-right"><span class="glyphicon glyphicon-search"></span></a>
                
            {!! Form::open(['url' => route('admin.mise-en-avant.update', $sidebar->id),
                                'method' => 'PUT'
                ])!!}
                    @if ($sidebar->published === 1)
                        <input type="hidden" name="publication" value="0"/>
                        <button 
                        class="btn btn-warning mdp-btn-space pull-right"
                        type="submit"
                        data-toggle="tooltip"
                        title="Dépublier la section"
                        data-confirm="delete"
                        data-text="Voulez-vous vraiment dépublier la section de mise en avant ? Elle ne sera plus visible sur le site, mais vous pourrez la remettre en ligne à tout moment."
                        data-confirm-button="Oui"
                        data-cancel-button="Mince, non !"
                        data-placement="top">
                            <span class="glyphicon glyphicon-open"></span>
                        </button>
                    @else
                        <input type="hidden" name="publication" value="1"/>
                        <button 
                        class="btn btn-success mdp-btn-space pull-right"
                        type="submit"
                        data-toggle="tooltip"
                        title="Mettre en ligne"
                        data-confirm="delete"
                        data-text="Le contenu de la section sera visible sur le site si vous le publiez maintenant. Etes-vous certain de vouloir effectuer cette action ?"
                        data-confirm-button="Oui"
                        data-cancel-button="Mince, non !"
                        data-placement="top">
                            <span class="glyphicon glyphicon-save"></span>
                        </button>
                    @endif
                    {!! Form::close() !!}

            <div class="clearfix"></div>
            @endforeach
                        
		</div>
	</section>
</div>
@endsection
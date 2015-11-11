@extends('back.template')

@section('content')
<div class="container mdp-pages-index">
	<section class="row">
		<h1>Créer une page</h1>
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

			{!! Form::open(['route' => ['admin.pages.store'], 'id' => 'form-main', 'class' => 'center-block']) !!}
               
                <!--{{-- {!! Form::hidden('user_id',$auth_id) !!} --}}-->

                <div class="form-group">
                    {!! Form::label('title',
                                    'Titre de la page') 
                    !!}

                    {!! Form::text('title', 
                                    null, 
                                    ['class' => 'form-control', 
                                    'maxlength' => '20',
                                    'placeholder' => 'Entrez ici le titre de votre page (20 caractères maximun)', 
                                    'required']
                    )!!}
                </div>
                <div class="form-group">
                    {!! Form::label('content',
                                    'Contenu de la page') 
                    !!}

                    {!! Form::textarea('content', 
                                        null, 
                                        ['class' => 'form-control', 
                                        'id' => 'ckeditor', 
                                        'placeholder' => 'Entrez votre texte ici...', 
                                        'size' => '30x3',  
                                        'required']
                    )!!}
                    
                </div>

                <div class="mdp-form-inline">
                    <div class="form-group">
                        {!! Form::label('url',
                                        'Url de la page') 
                        !!}

                        {!! Form::text('url', 
                                        null, 
                                        ['class' => 'form-control', 
                                        'maxlength' => '50',
                                        'placeholder' => '20 caractères maximum', 
                                        'required']
                        )!!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('location',
                                        'Emplacement du lien') 
                        !!}

                        {!! Form::select('location', ['main' => 'Menu principal', 'footer' => 'Bas de page'], null, ['class' => 'form-control']
                        )!!}
                    </div>

                    <div class="form-group">
                        <div class="checkbox checkbox-success">
                            {!! Form::checkbox('published', '1', false, ["id" => "checkbox1", "class" => "checkbox checkbox-success"]) !!}
                            {!! Form::label('checkbox1','Mettre en ligne ?') !!}
                        </div>
                    </div>
                </div>

                {!! Form::submit('Envoyer', 
                                ['required', 
                                'name' => 'envoyer', 
                                'class' => 'btn btn-default pull-right']
                )!!}

            {!! Form::close() !!}
		</div>
	</section>
</div>
@endsection
@extends('back.template')

@section('content')
<div class="container mdp-pages-index">
	<section class="row">
		<h1>Créer un article</h1>
		<div class="col-md-12">
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
                                        'id' => 'article-ckeditor', 
                                        'placeholder' => 'Entrez le resume ici...', 
                                        'size' => '30x3',  
                                        'required']
                    )!!}
                </div>
                <div class="form-group">
                    {!! Form::label('url',
                                    'Url de la page') 
                    !!}

                    {!! Form::url('url', 
                                    null, 
                                    ['class' => 'form-control', 
                                    'maxlength' => '50',
                                    'placeholder' => 'Entrez ici l\'url de votre page (50 caractères maximun)', 
                                    'required']
                    )!!}
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
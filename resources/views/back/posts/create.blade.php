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
                                    'Titre de l\'article')
                    !!}

                    {!! Form::text('title', 
                                    null, 
                                    ['class' => 'form-control', 
                                    'maxlength' => '20',
                                    'placeholder' => 'Entrez ici le titre de votre article (20 caractères maximun)',
                                    'required']
                    )!!}
                </div>
                <div class="form-group">
                    {!! Form::label('content',
                                    'Contenu de l\'article')
                    !!}

                    {!! Form::textarea('content', 
                                        null, 
                                        ['class' => 'form-control', 
                                        'id' => 'ckeditor',
                                        'placeholder' => 'Entrez le resume ici...', 
                                        'size' => '30x3',  
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
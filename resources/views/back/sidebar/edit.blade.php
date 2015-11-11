@extends('back.template')

@section('content')
<div class="container mdp-pages-index">
	<section class="row">
		<h1>Éditer la Section de Mise en Avant</h1>
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

			{!! Form::model($sidebar, ['route' => ['admin.mise-en-avant.update', $sidebar->id], 'method' => 'patch', 'id' =>
                    'form-main', 'class' => 'center-block']) !!}
               
                <div class="form-group">
                    {!! Form::label('content',
                                    'Contenu de la page') 
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

                    <div class="form-group">
                        <div class="checkbox checkbox-success">
                        @if ($sidebar->published === 1)
                            {!! Form::checkbox('published', 0, false, ["id" => "checkbox", "class" => "checkbox checkbox-success"]) !!}
                            {!! Form::label('checkbox','Dépublier ?') !!}
                        @else
                            {!! Form::checkbox('published', 1, false, ["id" => "checkbox", "class" => "checkbox checkbox-success"]) !!}
                            {!! Form::label('checkbox','Mettre en ligne ?') !!}
                        @endif
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

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
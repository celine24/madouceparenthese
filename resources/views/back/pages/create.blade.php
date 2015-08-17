@extends('back.template')

@section('content')
<div class="container mdp-pages-index">
	<section class="row">
		<h1>Créer une page</h1>
		<div class="col-md-12">
			{!! Form::open(['route' => ['admin.pages.store'], 'id' => 'form-main', 'class' => 'center-block']) !!}
               
                <!--{{-- {!! Form::hidden('user_id',$auth_id) !!} --}}-->

                <div class="form-group">
                    {!! Form::label('title','Titre de la page') !!}
                    {!! Form::text('title', null, ["class" => "form-control", "placeholder" => "Entrez ici le titre de votre page (50 caractères maximun)", "required"])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('content','Contenu de la page') !!}
                    {!! Form::textarea('resume', null, ["class" => "form-control", "placeholder" => "Entrez le resume ici...", "size" => "30x3", "maxlength" => "200", "required"])!!}
                </div>
		</div>
	</section>
</div>
@endsection
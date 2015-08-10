@extends('back.template')

@section('content')
<div class="container mdp-index-gallery">
	<section class="row">
		<h1>Galerie Photo</h1>
		<div class="col-md-12">
			<form>
		  		<div class="form-group pull-left">
		  			<label for="exampleInputFile">Ajouter des photos</label>
					<input type="file" id="exampleInputFile">
					<p class="help-block">Recherchez des photos dans votre ordinateur pour les ajouter à la galerie.</p>
		  		</div>
		  		<input class="btn btn-default pull-left mdp-gallery-button" type="submit" value="Ajouter les photos">
		  	</form>
		</div>
	</section>

	<div class="clearfix"></div>
	<hr></hr>

	<section class="row">
		<div class="col-xs-6 col-sm-4 col-md-3">
			<img class="thumbnail center-block" src="http://lorempixel.com/200/150/food/" alt="soon">
			<p class="text-center">Titre de l'image</p>
			<p class="text-center">
				<small>description</small>
				<br />
				<a class="btn btn-default btn-xs" href="#" role="button">modifier les informations</a>
			</p>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-3">
			<img class="thumbnail center-block" src="http://lorempixel.com/200/150/food/" alt="soon">
			<p class="text-center">Titre de l'image</p>
			<p class="text-center">
				<small>description</small>
				<br />
				<a class="btn btn-default btn-xs" href="#" role="button">modifier les informations</a>
			</p>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-3">
			<img class="thumbnail center-block" src="http://lorempixel.com/200/150/food/" alt="soon">
			<p class="text-center">Titre de l'image</p>
			<p class="text-center">
				<small>description</small>
				<br />
				<a class="btn btn-default btn-xs" href="#" role="button">modifier les informations</a>
			</p>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-3">
			<img class="thumbnail center-block" src="http://lorempixel.com/200/150/food/" alt="soon">
			<p class="text-center">Titre de l'image</p>
			<p class="text-center">
				<small>description</small>
				<br />
				<a class="btn btn-default btn-xs" href="#" role="button">modifier les informations</a>
			</p>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-3">
			<img class="thumbnail center-block" src="http://lorempixel.com/200/150/food/" alt="soon">
			<p class="text-center">Titre de l'image</p>
			<p class="text-center">
				<small>description</small>
				<br />
				<a class="btn btn-default btn-xs" href="#" role="button">modifier les informations</a>
			</p>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-3">
			<img class="thumbnail center-block" src="http://lorempixel.com/200/150/food/" alt="soon">
			<p class="text-center">Titre de l'image</p>
			<p class="text-center">
				<small>description</small>
				<br />
				<a class="btn btn-default btn-xs" href="#" role="button">modifier les informations</a>
			</p>
		</div>

		<div class="clearfix"></div>

		<div class="col-md-12 col-sm-12 col-xs-12 text-center">
			<ul class="pagination pagination-lg">
			    <li><a href="#">1</a></li>
			    <li class="active"><a href="#">2</a></li>
			    <li><a href="#">3</a></li>
			    <li><a href="#">4</a></li>
			    <li><a href="#">5</a></li>
			    <li><a href="#">6</a></li>
			</ul>
	</div>
	</section>
</div>
@endsection
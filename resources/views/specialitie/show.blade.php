@extends('layouts.app')

@section('content')
    <div class="col-sm-offset-4 col-sm-4">
    	<br>
		<div class="panel panel-primary">	
			<div class="panel-heading">Fiche spécialité</div>
			<div class="panel-body"> 

				@foreach($specialitie as $currentSpecialite)
				<p>Nom : {{ $currentSpecialite->name }}</p>
				
			</div>
		</div>				
		<a href="{{ route('specialitie.index') }}" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
		@endforeach
	</div>
@endsection
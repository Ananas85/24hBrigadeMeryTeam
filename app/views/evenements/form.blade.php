@extends('base')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
		<h1>
			@if ($adding)
				Créer un Evenement
			@else
				Modifier un Evenement
			@endif
		</h1>
			<div class="panel panel-default">
				<div class="panel-body">
					@if ($adding)
						{{ Form::open(array('route'=>'evenements_create', 'autocomplete'=>'off')) }}
					@else
						{{ Form::open(array('route'=>array('evenements_update', 'slug'=>$evenement->slug), 'autocomplete'=>'off')) }}
					@endif
						<div class="form-group">
							{{ Form::label('title', "Titre de l'évenement") }}
							@if ($adding)
								{{ Form::text('title', '', array('id'=>'title', 'class'=>'form-control', 'autocomplete'=>'off')) }}
							@else
								{{ Form::text('title', $product->title, array('id'=>'title', 'class'=>'form-control', 'autocomplete'=>'off')) }}
							@endif
						</div>
						
						
						@if ($adding)
							{{ Form::submit('Créer', array('class'=>'btn btn-success'))}}
						@else
							{{ Form::submit('Enregistrer', array('class'=>'btn btn-default'))}}
						@endif
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
@stop

@extends('base')

@section('content')
	<div class="alert alert-success">
		<h1><span class="glyphicon glyphicon-ok-sign"></span> {{ $message }}</h1>
		{{{ $description }}}
		<div style="margin-top:8px">
			<a href="{{{ URL::route($nextRoute) }}}" class='btn btn-default btn-sm'><i class="icon-reply"></i> {{{ $nextText }}}</a>
		</div>
	</div>
@stop
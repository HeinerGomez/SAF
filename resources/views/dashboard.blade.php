@extends('layouts.base-login')


@section('content')
	<form method="POST" action="{{route('logout')}}">
		{{csrf_field()}}
		<div class="row align-center">
			<div class="column small-12 medium-6 text-center">
				<h3 style="color: white">Tu usuario: {{auth()->user()->name}}</h3>
			</div>
		</div>
		<div class="row align-center">
			<div class="column small-12 medium-6 text-center">
				<input type="submit" class="button expanded" name="btnLogout" value="Cerrar Sessión" />	
			</div>
		</div>
	</form>
@endsection()
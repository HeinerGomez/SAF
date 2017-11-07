@extends('layouts.base-login')

@section('content')
	<section id="section-title">
		<div class="callout text-center">
			<h1>SAF - DEMO<h1>
		</div>
	</section>

	<section id="section-login">
		<ul id="login-tabs" class="tabs text-center" data-tabs >
			<li class="tabs-title is-active"><a href="#panelLogin">Inicia Session</a></li>
			<span>|</span>
	        <li class="tabs-title"><a href="#panelRegister">Registrate</a></li>
		</ul>
		<div class="tabs-continer" data-tabs-content="login-tabs" >
	        <form method="POST" action="{{ route('login') }}" data-abide novalidate >
	        	{{csrf_field()}}
		        <div class="tabs-panel is-active" id="panelLogin">
		          <div class="row align-center">
		          	<div class="column small-12 medium-6 text-center">
		          		<label>E - mail
					    	<input type="text" name="email" placeholder="ejemplo@ejemplos.com" value="{{old('email')}}" required pattern="email" />
					        <span class="form-error">
					          E-mail no valido
					        </span>
					    </label>
		          	</div>
		          </div>
		          <div class="row align-center">
		          	<div class="column small-12 medium-6 text-center">
		          		<label>Contraseña
					    	<input type="password" name="password" placeholder="*******" required />
					        <span class="form-error">
					          Contraseña necesaria
					        </span>
					    </label>
		          	</div>
		          </div>
		          <div class="row align-center">
		          	<div class="column small-12 medium-6 text-center">
		          		<input type="submit" class="button expanded" name="btnLogin" value="Iniciar Sessión" />
		          	</div>
		          </div>
		          <div class="row align-center">
		          	<div class="column small-12 medium-6 text-center">
		          		<a href="#"> Recuperar Contraseña </a>
		          	</div>
		          </div>
		          <div class="row align-center ">
		          	<div class="column small-12 medium-6 text-center">
			          	<div data-alert id="notificationError" class="{{$errors->has('general') ? 'alert callout' : '' }} ">
						  {!! $errors->first('general', '<span>:message</span>') !!}
						</div>
		          	</div>
		          </div>	
		        </div>
		    </form>
	       	<form method="POST" action="{{route('login')}}" data-abide novalidate >
		        <div class="tabs-panel" id="panelRegister">
		          	<div class="row align-center">
		          		<div class="column small-12 medium-6 text-center">
		          			<label>Usuario
		          				<input type="text" name="user-r" placeholder="Juan Marcos" required />
					    		<span class="form-error">
						          Usuario no valido
						        </span>
					    	</label>
		          		</div>
		          	</div>
		          	<div class="row align-center">
		          		<div class="column small-12 medium-6 text-center">
		          			<label> E - mail
			          			<input type="text" name="email-r" placeholder="ejemplo@ejemplos.com" required pattern="email" />
		          			</label>
		          			<span class="form-error">
		          				Email no valido
		          			</span>
		          		</div>
		          	</div>
		          	<div class="row align-center">
		          		<div class="column small-12 medium-3 text-center">
			          		<div class="medium-12 cell">
			          			<label>Contraseña
			          				<input type="password" id="password-r" name="password-r" placeholder="tu contraseña" required />
			          				<span class="form-error">
			          					Contraseña no valida
			          				</span>
			          			</label>
			          		</div>
		          		</div>
		          		<div class="column small-12 medium-3 text-center">
		          			<div class="medium-12 cell">
		          				<label>Repetir Contraseña
			          				<input type="password" name="passwordRepet-r" placeholder="Repitela" required data-equalto="password-r" />
			          				<span class="form-error">
			          					Contraseña no valida
			          				</span>
			          			</label>
			          		</div>
		          		</div>
		          	</div>
		          <div class="row align-center">
		          	<div class="column small-12 medium-6 text-center">
		          		<input type="submit" class="button expanded" name="btnLogin" value="Registrarme" />
		          	</div>
		          </div>
		        </div>
	    	</form>
	        </div>
      	</div>
	</section>	
@endsection
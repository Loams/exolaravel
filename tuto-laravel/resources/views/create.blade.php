@extends('template')
@section('contenu')
	<br>
	<div class="col-sm-offset-4 col-sm-4">
		<div class="panel panel-primary">
			<div class="panel-heading">Creation d'un utilisateur</div>
			<div class="panel-body">
				<div class="col-sm-12">
					{!! Form::open(['route'=>'user.store', 'class'=>'form-horizontal panel']) !!}
					<div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
						{!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nom']) !!}
						{!! $errors->first('name', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
						{!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Email']) !!}
						{!! $errors->first('email', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
						{!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Mot de passe']) !!}
						{!! $errors->first('email', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('password_confirmation') ? 'has-error' : '' !!}">
						{!! Form::password('password_confirmation', ['class'=>'form-control', 'placeholder'=>'Confirmation mot de passe']) !!}
						{!! $errors->first('password_confirmation', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group">
						<div class="checkbox">
							<label>
								{!! Form::checkbox('admin', 1, null) !!} Administrateur
							</label>
						</div>
					</div>
					{!! Form::submit('Envoyer', ['class'=>'btn btn-primary pull-right']) !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>

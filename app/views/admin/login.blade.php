@extends('layouts/master')

@section('content')
	{{ Form::open( array( 'route' => 'sessions.store' ) ) }}

		{{ Form::label('email', 'Email:') }}
		{{ Form::email('email') }}

		{{ Form::label('password', 'Password:' ) }}
		{{ Form::password('password') }}

		{{ Form::submit('login') }}

	{{ Form::close() }}
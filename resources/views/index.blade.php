@extends('layouts.site')

@section('content')
	<div class="row flex-d justify-content-center">
		<div class="card" style="width: 24rem;">
			<div class="card-header">
				Index view.
			</div>
			<div class="card-body">
				@auth
					You are logged in.
					<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
				@endauth
				@unless (Auth::check())
					You are not logged in.
					<a href="/login">Go to login</a>
				@endunless
			</div>
		</div>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		    {{ csrf_field() }}
		</form>
	</div>
@endsection

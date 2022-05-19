@extends('layouts.app')

@section('content')


<div class="container-2">
    <h1 class="text-center">Reset Password</h1>
        <form class="registration-form" method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
		<label>
			<span class="label-text">Email</span>
			<input id="email" type="email" name="email"  required autocomplete="email">
		</label>
		<label class="password">
			<span class="label-text">Password</span>
			<button class="toggle-visibility" title="toggle password visibility" tabindex="-1">
				<span class="glyphicon glyphicon-eye-close"></span>
			</button>

            <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
		</label>
        <label class="password">
			<span class="label-text">ASSWORD-CONFIRMATION</span>
			<button class="toggle-visibility" title="toggle password visibility" tabindex="-1">
				<span class="glyphicon glyphicon-eye-close"></span>
			</button>

            <input id="password-confirm" type="password" class="" name="password_confirmation" required autocomplete="new-password">
		</label>
		<div class="text-center">
			<button class="submit" name="register">Restore password</button>
		</div>
	</form>
</div>
















@endsection

@extends('layouts.app')

@section('content')
<div class="container-2">

    <h1 class="text-center">PASSWORD RESET</h1>
        <form class="registration-form" method="POST" action="{{ route('password.email') }}">
            @csrf

        <label>
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                <h6>{{ session('status') }}</h6>
            </div>
        @endif
            <span class="label-text">Email</span>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </label>

        <div class="text-center">
            <button class="submit" name="register">Отправить</button>
        </div>

    </form>


</div>


@endsection

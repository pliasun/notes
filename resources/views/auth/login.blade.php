@extends('layouts.guest')
@section('content')
<form method="POST" action="{{ route('login') }}" class="form-modals border rounded border-dark d-flex flex-column align-items-md-center p-4">
    @csrf
    <label class="form-modals__title">Войти</label>
    <input class="form-control p-2 col-12 @error('email') is-invalid @enderror"  type="email" name="email" required autocomplete="email" autofocus placeholder="Логин">
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <input class="form-control mt-3 p-2 col-12 @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password" placeholder="Пароль">
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <button class="btn btn-outline-success mt-3 w-50" type="submit">Войти</button>
    <a class="d-flex justify-content-md-center mt-3" href="{{ route('register') }}">Создать аккаунт</a>
</form>
@endsection


@extends('layouts.guest')

@section('content')
<form method="POST" action="{{ route('register') }}" class="form-modals border rounded border-dark d-flex flex-column align-items-md-center p-4">
    @csrf
    <label class="form-modals__title">Регистрация</label>
    <input id="email" type="text" class="form-control p-2 col-12 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail">
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <input id="password" type="password" class="form-control mt-3 p-2 col-12 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Пароль">
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <input id="password-confirm" type="password" class="form-control mt-3 p-2 col-12"" name="password_confirmation" required autocomplete="new-password" placeholder="Пароль еще раз">
    <button class="btn btn-outline-success mt-3 w-50" type="submit">Создать</button>
    <a class="d-flex justify-content-md-center mt-3" href="{{ route('login') }}">Уже есть аккаунт?</a>
</form>
@endsection


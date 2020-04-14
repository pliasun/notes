@extends('layouts.app')
@section('content')
<div class="row justify-content-md-center">
    <div class="col-lg-4 col-xl-4">
        <form action="{{ route('new') }}" method="POST" class="form-modals border rounded border-dark d-flex flex-column align-items-md-center p-4 mt-5">
            @csrf
            <label class="form-modals__title">Новая запись</label>
            <div class="form-group col-12 d-flex align-items-center justify-content-between">
                <label class="mb-0 ml-auto mr-1" for="">ФИО</label>
                <input class="form-control p-2 w-auto @error('name')is-invalid @enderror" type="text" name="name" required="" value="{{ old('name') }}">
            </div>
            <div class="form-group col-12 d-flex align-items-center justify-content-between">
                <label class="mb-0 ml-auto mr-1" for="">Телефон</label>
                <input class="form-control p-2 w-auto @error('phone')is-invalid @enderror" type="number" name="phone" value="{{ old('phone') }}">
            </div>
            <div class="form-group col-12 d-flex align-items-center justify-content-between">
                <label class="mb-0 ml-auto mr-1" for="">Email</label>
                <input class="form-control p-2 w-auto @error('email')is-invalid @enderror" type="email" name="email" value="{{ old('email') }}">
            </div>
            <button class="btn btn-outline-success mt-3" type="submit">Добавить</button>
        </form>
    </div>
</div>
@endsection
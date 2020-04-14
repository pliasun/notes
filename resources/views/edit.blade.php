@extends('layouts.app')
@section('content')
<div class="row justify-content-md-center">
    <div class="col-lg-6 col-xl-6">
        <form action="{{ route('edit', $item->id) }}" method="POST" class="form-modals border rounded border-dark d-flex flex-column align-items-md-center p-4 mt-5">
            @csrf
            <label class="form-modals__title">Редактирование записи {{ $item->id }}</label>
            <div class="form-group col-12 d-flex align-items-center justify-content-between p-0">
                <label class="mb-0 ml-auto mr-1" for="">ФИО</label>
                <input class="form-control p-2 @error('name')is-invalid @enderror" type="text" name="name" required="" value="{{ $item->name }}">
            </div>
            <div class="form-group col-12 d-flex align-items-center justify-content-between p-0">
                <label class="mb-0 ml-auto mr-1" for="">Телефон</label>
                <input class="form-control p-2 @error('phone')is-invalid @enderror" type="number" name="phone" value="{{ $item->phone }}">
            </div>
            <div class="form-group col-12 d-flex align-items-center justify-content-between p-0">
                <label class="mb-0 ml-auto mr-1" for="">Email</label>
                <input class="form-control p-2 @error('email')is-invalid @enderror" type="email" name="email" value="{{ $item->email }}">
            </div>
            <button class="btn btn-outline-success mt-3" type="submit">Сохранить</button>
        </form>
    </div>
</div>
@endsection
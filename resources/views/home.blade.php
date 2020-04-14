@extends('layouts.app')
@section('content')
<div class="row d-flex justify-content-md-center">
    <div class="col-lg-12 col-xl-12">
        <form action="{{ route('new') }}" method="POST" class="form-modals form-modals--tabl my-3">
            @csrf
            <label for="">ФИО</label>
            <input class="form-control p-2 col-sm-12 col-md-2 @error('name')is-invalid @enderror" name="name" type="text" value="{{ old('name') }}">
            <label class="mt-2 mt-sm-2 mt-md-0"  for="">Телефон</label>
            <input class="form-control p-2 col-sm-12 col-md-2 @error('number')is-invalid @enderror" name="phone" type="number" value="{{ old('phone') }}">
            <label class="mt-2 mt-sm-2 mt-md-0" for="">Email</label>
            <input class="form-control p-2 col-sm-12 col-md-2 @error('email')is-invalid @enderror" name="email" type="text" value="{{ old('email') }}">
            <button class="btn btn-outline-success mt-2 mt-sm-2 mt-md-0" type="submit">Сохранить</button>
        </form>
        <div class="tabl-form">
            <table class="table table-striped table-bordered table-responsive-xs dataTable" id="example">
                <thead class="thead-light">
                  <tr>
                    <th scope="col-2">ФИО</th>
                    <th scope="col">Телефон</th>
                    <th scope="col">Email</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($list as $item)
                    <tr>
                        <th scope="row">{{ $item->name }}</th>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            <a href="{{ route('update', $item->id) }}">Изменить</a>
                            <a href="{{ route('delete', $item->id) }}">Удалить</a>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>
</div>
</div>
</div>
@endsection
@extends('layout.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('tampilmerk') }}" class="btn btn-primary">Lihat Data</a>
        </div>
        <div class="card-body">
            <form action="{{ route('simpanmerk') }}" method="post">
                @csrf
            <div class="form-goup">
                <label for="">Merk</label>
                <input type="text" name="merk" class="form-control" placeholder="Merk">
            </div>
            <br>
            <div class="form-goup">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            </form>
        </div>
    </div>
@endsection
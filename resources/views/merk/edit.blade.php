@extends('layout.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('tampilmerk') }}" class="btn btn-primary">Lihat Data</a>
        </div>
        <div class="card-body">
            <form action="{{route('updatemerk',$merk->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Merk</label>
                    <input type="text" name="merk" value="{{ $merk->merk }}" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
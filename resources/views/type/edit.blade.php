@extends('layout.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('type.index') }}" class="btn btn-primary">Lihat Data</a>
        </div>
       
        <div class="card-body">
            <form action="{{ route('type.update', $type->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="">Model</label>
                <input type="text" name="tipe" id="tipe" value="{{ $type->tipe }}" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
           </form>
        </div>
    </div>
@endsection
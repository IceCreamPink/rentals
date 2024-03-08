@extends('layout.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('type.index') }}" class="btn btn-primary">Lihat data</a>
        </div>
        <div class="card-body">
            <form action="{{ route('type.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="Model"></label>
                    <input type="text" name="type" id="type" placeholder="Model" class="form-control">
                </div>
                <br>
                <div class="from-group">
                    <button type="submit" class="btn btn-success">Sumbit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
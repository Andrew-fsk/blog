@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col-1">
            <a class="btn btn-block btn-primary" href="{{ route('admin.categories.create') }}">Add</a>
        </div>
    </div>
@endsection

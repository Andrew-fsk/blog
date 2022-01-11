@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col-6 card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create category</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('admin.categories.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="title" class="form-control @error('title')  is-invalid @enderror" id="exampleInputEmail1" placeholder="Title">
                        @error('title')
                        <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection

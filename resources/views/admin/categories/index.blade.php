@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="card col-12">
            <div class="card-header">
                <h3 class="card-title">Category list</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Title</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}.</td>
                        <td>{{ $category->title }}</td>
                        <td style="width: 40px">
                            <div class="row justify-content-around">

                                <a style="width: 40px;" type="button" class="btn btn-primary"
                                   href="{{ route('admin.categories.edit', $category->id) }}"><i
                                        class="far fa-edit"></i></a>
                                {{--<a target="_blank" style="width: 40px;" type="button" class="btn btn-info"
                                   href="{{ route('post.show', $post->id) }}"><i class="fas fa-external-link-alt"></i></a>--}}

                               {{-- <form action="{{ route('admin.post.delete', $post->id) }}" method="post" class="">
                                    @csrf
                                    @method('delete')
                                    <label style="margin-bottom: 0;" class="btn btn-danger">

                                        <i class="far fa-trash-alt"></i>
                                        <input type="submit" hidden value="Delete"
                                               class="btn btn-block btn-danger">
                                    </label>
                                </form>--}}
                            </div>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <div class="mb-2 ml-auto col-1 p-0">
            <a class="btn btn-block btn-primary" href="{{ route('admin.categories.create') }}">Add</a>
        </div>
    </div>
@endsection

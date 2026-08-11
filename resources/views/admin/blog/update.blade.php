@extends('layouts.admin_template')
@section('tittle', 'Create New Blog')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-center">
                    <h6 class="font-weight-bold mb-0">Update Data Blog</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('blog.update', $item->id) }}" enctype="multipart/form-data" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Title</label>
                            <input type="text" name="title" id="name" class="form-control" value="{{ $item->title }}"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Sub Content</label>
                            <textarea type="text" name="sub_content" id="content" class="form-control"
                                required>{{ $item->sub_content }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Content</label>
                            <textarea type="text" name="content" id="content" class="form-control"
                                required>{{ $item->content }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Photo</label><br>
                            <input type="file" name="photo" id="photo" value="{{ $item->photo }}">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Status</label>
                            <input type="radio" name="is_active" value="1" {{ $item->is_active == 1 ? 'checked' : '' }}>
                            Publish
                            <input type="radio" name="is_active" value="0" {{ $item->is_active == 0 ? 'checked' : '' }}> Draft
                        </div>
                        <div align="center">
                            <button class="btn btn-primary">Submit</button>
                            <button class="btn btn-dark" href="{{ route('blog.index') }}">Back</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
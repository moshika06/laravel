@extends('layouts.admin_template')
@section('tittle', 'Create New Blog')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-center">
                    <h6 class="font-weight-bold mb-0">Add Data Blog</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('blog.store') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Title</label>
                            <input type="text" name="title" id="name" class="form-control" placeholder="Enter Title Blog"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Sub Content</label>
                            <textarea type="text" name="sub_content" id="content" class="form-control"
                                placeholder="Enter Sub Content"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Content</label>
                            <textarea type="text" name="content" id="content" class="form-control"
                                placeholder="Enter Content"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Photo</label>
                            <input type="file" name="photo" id="photo">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Status</label>
                            <input type="radio" name="is_active" value="1" checked> Publish
                            <input type="radio" name="is_active" value="0"> Draft
                        </div>
                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
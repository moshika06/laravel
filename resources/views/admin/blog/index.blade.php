@extends('layouts.admin_template')
@section('tittle', 'Data Blog Us')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="font-weight-bold mb-0">Data Blog</h6>
                    <a href="{{ route('blog.create') }}" class="btn btn-primary btn-sm">Add Blog</a>
                </div>
                <div class="card-body">
                    <table id="database" class="table table-bordered table-striped">
                        <thead align="center">
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Foto</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $index => $item)
                                <tr>
                                    <td>{{ $index += 1 }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->content }}</td>
                                    <td><img src="{{ asset('../storage/' . $item->photo) }}" width="100" alt="Foto"></td>
                                    <td>{{ $item->is_active }}</td>
                                    <td align="center">
                                        <a href="{{ route('blog.edit', $item->id) }}" class="btn btn-success btn-sm">Edit</a>
                                        <form action="{{ route('blog.destroy', $item->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data?')">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
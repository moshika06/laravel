@extends('layouts.admin_template')

@section('tittle', $tittle)

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <div class="col-12">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="font-weight-bold mb-0">Data Student</h6>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <i class="bi bi-plus-circle"></i> Tambah Data
                        </button>
                    </div>
                    <div class="card-body">
                        <table id="database" class="table table-bordered" style="color: #000 !important;">
                            <thead class="bg-white text-center">
                                <tr>
                                    <!-- <th>No</th> -->
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th width="120">Action</th>
                                </tr>
                            </thead>

                            <tbody class="text-center">
                                @foreach ($students as $item)
                                    <tr>
                                        <!-- <td> ($students->currentPage() - 1) * $students->perPage() + $loop->iteration </td> -->
                                        <!-- <td>{{ $loop->iteration }}</td> -->
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td align="center">
                                            <a class="btn btn-success me-2" href="#EditPart{{ $item->id}}" data-toggle="modal"
                                                data-target="#EditPart{{ $item->id }}">
                                                <i class="bi bi-pencil-square"></i> </a>
                                                 <!-- Update </a> -->
                                            <a class="btn btn-danger me-2" href="{{ url('admin/student/hapus/' . $item->id) }}"
                                                onclick="return confirm('data akan di hapus ?')">
                                                <i class="bi bi-trash-fill"></i> </a>
                                                 <!-- Delete </a> -->
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- Pagination: -->
                        <!-- <div class="mb-3">
                                $students->links()
                            </div> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('admin/student/simpan') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Nama Student">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control"
                                    placeholder="Enter Phone Number">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea name="address" id="address" rows="3" class="form-control"
                                    placeholder="Enter Address"></textarea>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Edit -->
        @foreach ($students as $item)
            <div class="modal fade" id="EditPart{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('admin/student/update/' . $item->id) }}" method="POST">
                                @csrf
                                @method('POST')
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Nama Student"
                                        value="{{ $item->name }}">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email"
                                        value="{{ $item->email }}">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" name="phone" id="phone" class="form-control" value="{{ $item->phone }}"
                                        placeholder="Enter Phone Number">
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea name="address" id="address" rows="3" class="form-control"
                                        placeholder="Enter Address">{{ $item->address }}</textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
@endsection
@extends('layouts.admin_template')

@section('tittle', $tittle)

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <div class="col-12">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="font-weight-bold mb-0">Data Mata Pelajaran</h6>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <i class="bi bi-plus-circle"></i> Tambah Data
                        </button>
                    </div>
                    <div class="card-body">
                        <table id="database" class="table table-bordered" style="color: #000 !important;">
                            <thead class="bg-white text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th width="120">Action</th>
                                </tr>
                            </thead>

                            <tbody class="text-center">
                                @foreach ($mapels as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama_pelajaran }}</td>
                                        <td class="d-flex">
                                            <a class="btn btn-success me-2" href="#EditPart{{ $item->id}}" data-toggle="modal"
                                                data-target="#EditPart{{ $item->id }}">Edit</a>
                                            <a href="{{ url('admin/mata_pelajaran/hapus/' . $item->id) }}"
                                                onclick="return confirm('data akan di hapus ?')" class="btn btn-danger me-2">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
                        <form action="{{ url('admin/mata_pelajaran/simpan') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" name="nama_pelajaran" id="nama_pelajaran" class="form-control" placeholder="Nama Mata Pelajaran">
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
        @foreach ($mapels as $item)
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
                            <form action="{{ url('admin/mata_pelajaran/update/' . $item->id) }}" method="POST">
                                @csrf
                                @method('POST')
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" name="nama_pelajaran" id="nama_pelajaran" class="form-control" placeholder="Nama Mata Pelajaran"
                                        value="{{ $item->nama_pelajaran }}">
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
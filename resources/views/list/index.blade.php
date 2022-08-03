@extends('layouts.dashboard')

@section('title')
    List Certificate
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{ route('list.store') }}" method="POST" enctype="multipart/form-data" class="p-5">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Peserta</label>
                        <div class="col-sm-10">
                            <select class="form-control select2 form-select" aria-label="Default select example"
                                name="user">
                                <option value="{{ old('user') }}">Select Peserta</option>
                                @foreach ($user as $key => $value)
                                    <option value="{{ $value->id }}">{{ $value->name }} {{ $value->address }}</option>
                                @endforeach
                            </select>
                            @error('type')
                                <div class="alert alert-danger bg-danger text-white mb-0 border-0" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Sertifikat</label>
                        <div class="col-sm-10">
                            <select class="form-control select2 form-select" aria-label="Default select example"
                                name="certificate">
                                <option value="{{ old('certificate') }}">Select Sertifikat</option>
                                @foreach ($certificate as $key => $value)
                                    <option value="{{ $value->id }}">{{ $value->name }} {{ $value->address }}</option>
                                @endforeach
                            </select>
                            @error('type')
                                <div class="alert alert-danger bg-danger text-white mb-0 border-0" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="group">
                        <button class="save">Save</button>
                    </div>
                </form>
                <div class="card-body table-responsive">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap mb-0"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr align="center">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenis Sertificate</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($list as $item)
                                <tr>
                                    <td align="center">{{ $loop->iteration }}</td>
                                    <td>{{ $item->user->name }} {{ $item->user->address }}</td>
                                    <td>{{ $item->certificate->name }} </td>
                                    <td align="center">
                                        <div>
                                            <!-- delete -->
                                            <form class="d-inline" action="{{ route('list.delete', $item->id) }}"
                                                role="alert" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection

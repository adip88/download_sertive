@extends('layouts.dashboard')

@section('title')
    Employee
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <a href="{{ route('employee.create') }}" class="btn btn-sm btn-primary p-1" role="button">
                    <i class="">Add Data</i>
                </a>
                <div class="card-body table-responsive">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap mb-0"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr align="center">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($user as $item)
                                <tr>
                                    <td align="center">{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }} </td>
                                    <td>{{ $item->email }} </td>
                                    <td>{{ $item->address }} </td>
                                    <td align="center">
                                        <div>
                                            <!-- edit -->
                                            <a href="{{ route('employee.edit', ['id' => $item]) }}"
                                                class="btn btn-sm btn-info" role="button">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <!-- delete -->
                                            <form class="d-inline" action="{{ route('employee.delete', ['id' => $item]) }}"
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

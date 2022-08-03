@extends('layouts.dashboard')

@section('title')
    List Certificate
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body table-responsive">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap mb-0"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr align="center">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenis Sertificate</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($list as $item)
                                <tr>
                                    <td align="center">{{ $loop->iteration }}</td>
                                    <td>{{ $item->user->name }} {{ $item->user->address }}</td>
                                    <td>{{ $item->certificate->name }} </td>

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

@extends('admin.admin-master')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">


            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <h5 class="card-header text-uppercase">View Services</h5>
                        <div class="card-body">
                            <a href="{{ url('admin/create-service') }}" class="float-end btn btn-dark">Create service</a>

                            <br><br>
                            <div class="table-responsive">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Icon</th>
                                            <th class="">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php($i = 1)
                                        @foreach ($services as $item)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>
                                                    <img class="img-thumbnail"
                                                        src="{{ !empty($item->image) ? url($item->image) : url('upload/no_image.png') }}"
                                                        alt="{{ $item->name }}" width="40px" height="40px">
                                                </td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->icon }}</td>
                                                <td>

                                                    <a href="{{ url('admin/edit-service', $item->id) }}" class="btn btn-info sm"
                                                        title="Edit Service"> <i class="fas fa-edit"></i> </a>

                                                    <a href="{{ url('delete-service', $item->id) }}"
                                                        class="btn btn-danger sm" title="Edit Data" id="delete"> <i
                                                            class="fas fa-trash"></i> </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->







        </div>
    </div>
@endsection

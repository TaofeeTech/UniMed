@extends('admin.admin-master')

@section('admin')

    <div class="page-content">
        <div class="container-fluid">


            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <h5 class="card-header">View Gallery Categories</h5>
                        <div class="card-body">

                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Title</th> 
                                    <th>Image</th> 
                                    <th>Edit</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
                                </tr>
                                </thead>

                                <tbody>
                                @php($i = 1)
                                @foreach ($gallery as $item )
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $item['gCategory']['gallery_category'] }}</td>
                                    <td>
                                        <img src="{{ url($item->image) }}" width="50" height="50" alt="{{ $item->image }}" class="rounded-circle">
                                    </td>
                                    <td>
                                        <a href="{{ route("edit.gallery", $item->id) }}" class="btn btn-info sm" title="Edit Data"> <i class="fas fa-edit"></i> </a>
                                        <a href="{{ route("delete.gallery", $item->id) }}" class="btn btn-danger sm" title="Edit Data" id="delete"> <i class="fas fa-trash"></i> </a>
                                    </td>
                                    <td>{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</td>
                                    <td>{{ Carbon\Carbon::parse($item->updated_at)->diffForHumans() }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->







        </div>
    </div>

@endsection 
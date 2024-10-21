@extends('admin.admin-master')

@section('admin')

    <div class="page-content">
        <div class="container-fluid">


            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <h5 class="card-header">View Gallery Categories</h5>
                        <div class="card-body">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <h6>
                                <i class="mdi mdi-alert-outline me-2"></i>
                                    NOTE: Deleting any of these categories will delete every gallery related to this category. You can however edit the category name if you wish or add a new category.
                                </h6>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
                                </tr>
                                </thead>

                                <tbody>
                                @php($i = 1)
                                @foreach ($galleryCat as $item )
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $item->gallery_category }}</td>
                                    <td>
                                        <a href="{{ route('edit.galleryCat', $item->id) }}" class="btn btn-info sm" title="Edit Data"> <i class="fas fa-edit"></i> </a>
                                        <a href="{{ route('delete.galleryCat', $item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete"> <i class="fas fa-trash"></i> </a>
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
@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Multi Images</h4>
                        <div class="page-title-right">
                            <a href="{{ route('about.multi-image') }}" class="btn btn-dark">Add Image</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">


                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                   style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>


                                <tbody>
                                @php($i=1)
                                @foreach($all_multi_image as $image)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td><img src="{{asset($image->multi_image)}}" height="100" alt=""></td>
                                        <td>
                                            <a href="{{route('about.multi-image.edit', $image->id)}}"
                                               class="btn btn-info" title="Edit">
                                                <i class="ri-pencil-fill"></i>
                                            </a>
                                            <a href="" class="btn btn-danger" title="Delete">
                                                <i class="ri-delete-bin-2-fill"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach


                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
@endsection

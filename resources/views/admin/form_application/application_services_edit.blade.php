@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-12">
                                        <div
                                            class="page-title-box d-sm-flex align-items-center justify-content-between">
                                            <h4 class="mb-sm-0">Edit Service</h4>
                                            <div class="page-title-right">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form action="{{ route('form-application.services.update') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$service->id}}">
                                    <div class="row mb-3 mt-5">
                                        <label for="name" class="col-sm-2 col-form-label">Service Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="name"
                                                   name="name"
                                                   style="direction: rtl"
                                                   placeholder="Service Name"
                                                   value="{{!empty($service->name) ? $service->name : ''}}">
                                        </div>
                                    </div>
                                    @if(Auth::user()->username == 'ahmadmerie')
                                        <div class="row mb-3 mt-5">
                                            <label for="icon" class="col-sm-2 col-form-label">Service Icon</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" id="icon"
                                                       name="icon"
                                                       style=""
                                                       placeholder="Icon"
                                                       value="{{!empty($service->icon) ? $service->icon : ''}}">
                                            </div>
                                        </div>
                                    @endif

                                    {{--                                    --}}{{-- <div class="row mb-3 mt-5">--}}
                                    {{--                                         <label for="title" class="col-sm-2 col-form-label">Title</label>--}}
                                    {{--                                         <div class="col-sm-10">--}}
                                    {{--                                             <textarea class="form-control" type="text" id="elm1"--}}
                                    {{--                                                       name="title"></textarea>--}}
                                    {{--                                         </div>--}}
                                    {{--                                     </div>--}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div
                                                class="page-title-box d-sm-flex align-items-center justify-content-between">
                                                <input type="submit" class="btn btn-info waves-effect waves-light"
                                                       value="Update">
                                                <div class="page-title-right">

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                                <div class="row">
                                    <div class="col-12">
                                        <div
                                            class="page-title-box d-sm-flex align-items-center justify-content-between">
                                            <h4 class="mb-sm-0">Edit Service</h4>
                                            <div class="page-title-right">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <table id="datatable"
                                                       class="table table-bordered dt-responsive wrap"
                                                       style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Service Name</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>


                                                    <tbody>
                                                    @php($i=1)
                                                    @foreach($service->form_services as $cat)
                                                        <tr>
                                                            <td>{{ $i++ }}</td>
                                                            <td>{{$cat->name}}</td>
                                                            <td>
                                                                <a href="{{route('form-application.services.category.edit', $cat->id)}}"
                                                                   class="btn btn-info" title="Edit">
                                                                    <i class="ri-pencil-fill"></i>
                                                                </a>
                                                                <a href="{{ route('form-application.services.category.delete', $cat->id) }}"
                                                                   class="btn btn-danger"
                                                                   title="Delete"
                                                                   id="delete"
                                                                >
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
                                <form action="{{ route('form-application.services.category.store') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$service->id}}">
                                    <div class="row mb-3 mt-5">
                                        <label for="category_name" class="col-sm-2 col-form-label">Category Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="category_name"
                                                   name="category_name"
                                                   style=""
                                                   placeholder="Enter Category Name"
                                                   value="">
                                        </div>
                                    </div>
                                    {{-- <div class="row mb-3 mt-5">
                                         <label for="title" class="col-sm-2 col-form-label">Title</label>
                                         <div class="col-sm-10">
                                             <textarea class="form-control" type="text" id="elm1"
                                                       name="title"></textarea>
                                         </div>
                                     </div>--}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div
                                                class="page-title-box d-sm-flex align-items-center justify-content-between">
                                                <input type="submit" class="btn btn-info waves-effect waves-light"
                                                       value="Add Category">
                                                <div class="page-title-right">
                                                    <a href="{{ route('form-application.services') }}"
                                                       class="btn btn-danger">
                                                        Back
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                                <!-- end row -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

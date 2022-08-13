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
                                            <h4 class="mb-sm-0">Add Service</h4>
                                            <div class="page-title-right">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form action="{{ route('form-application.services.store') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="">
                                    <div class="row mb-3 mt-5">
                                        <label for="name" class="col-sm-2 col-form-label">Service Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="name"
                                                   name="name"
                                                   placeholder="Service Name"
                                                   value="{{!empty($category->services_categories_list->service_item) ? $category->services_categories_list->service_item : ''}}">
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
                                                       value="Add">
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

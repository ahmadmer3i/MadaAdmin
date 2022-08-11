@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">About Vision</h4>
                                <form action="{{ route('about.vision.update') }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $vision->id }}">
                                    <div class="row mb-3 mt-5">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                   type="text"
                                                   id="title"
                                                   name="title"
                                                   placeholder="Title"
                                                   value="{{!empty($vision->title) ? $vision->title : ''}}">
                                        </div>
                                    </div>
                                    <div class="row mb-5 mt-5">
                                        <label for="title" class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <textarea
                                                rows="5"
                                                class="form-control"
                                                type="text"
                                                id="description"
                                                name="description"
                                                placeholder="Description"
                                            >{{!empty($vision->description) ? $vision->description : ''}}</textarea>
                                        </div>
                                    </div>
                                    {{-- <div class="row mb-3 mt-5">
                                         <label for="title" class="col-sm-2 col-form-label">Title</label>
                                         <div class="col-sm-10">
                                             <textarea class="form-control" type="text" id="elm1"
                                                       name="title"></textarea>
                                         </div>
                                     </div>--}}
                                    <input type="submit" class="btn btn-info waves-effect waves-light"
                                           value="Update">
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

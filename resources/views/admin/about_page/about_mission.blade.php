@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">About Mission Section</h4>
                                <form action="{{ route('about.mission.update') }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $mission->id }}">
                                    <div class="row mb-3 mt-5">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="title" name="title"
                                                   placeholder="Title"
                                                   value="{{!empty($mission->title) ? $mission->title : ''}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="title" class="col-sm-2 col-form-label">Subtitle</label>
                                        <div class="col-sm-10">
                                            <textarea rows="5" class="form-control" type="text" id="subtitle"
                                                      name="subtitle"
                                                      placeholder="Subtitle"
                                            >{{!empty($mission->title) ? $mission->subtitle : ''}}</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="title" class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <textarea rows="5" class="form-control" type="text" id="elm1"
                                                      name="description"
                                                      placeholder="Description"
                                            >{{!empty($mission->description) ? $mission->description : ''}}</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="about_image" class="col-sm-2 col-form-label">
                                            Mission Image
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                   type="file"
                                                   id="image"
                                                   name="image"
                                                   value=""
                                            >
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <label for="show_image"
                                               class="col-sm-2 col-form-label"
                                        >
                                        </label>
                                        <div class="col-sm-10">
                                            <img id="show_image"
                                                 class="img-thumbnail"
                                                 width="100"
                                                 alt="780x1041"
                                                 style="background-color: transparent"
                                                 src="{{ !empty($mission->image) ? url($mission->image): url('upload/780-1041.png') }}"
                                                 data-holder-rendered="true">
                                        </div>
                                    </div>
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
    <script type="text/javascript">
        $(document).ready(function () {
            $('#image').change(function (e) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $('#show_image').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection

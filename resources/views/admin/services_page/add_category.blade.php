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
                                            <h4 class="mb-sm-0">Add Service Category Item</h4>
                                            <div class="page-title-right">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form action="{{ route('services.category.store') }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $category->id }}">
                                    <div class="row mb-3 mt-5">
                                        <label for="service_title" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="service_title"
                                                   name="service_title"
                                                   placeholder="Service Name"
                                                   value="{{!empty($category->services_category->service_title) ? $category->services_category->service_title : ''}}">
                                        </div>
                                    </div>

                                    <div class="row mb-3 mt-5">
                                        <label for="home_subtitle" class="col-sm-2 col-form-label">Home
                                            Subtitle</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="home_subtitle"
                                                   name="home_subtitle"
                                                   placeholder="Home Subtitle"
                                                   value="{{!empty($service_category_edit->home_subtitle) ? $service_category_edit->home_subtitle : ''}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="title" class="col-sm-2 col-form-label">Subtitle</label>
                                        <div class="col-sm-10">
                                            <textarea rows="5" class="form-control" type="text" id="service_subtitle"
                                                      name="service_subtitle"
                                                      placeholder="Service Subtitle">{{!empty($category->services_category->service_subtitle) ? $category->services_category->service_subtitle : ''}}</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="title" class="col-sm-2 col-form-label">Text</label>
                                        <div class="col-sm-10">
                                            <textarea rows="5" class="form-control" type="text" id="service_text"
                                                      name="service_text"
                                                      placeholder="Service Text"
                                            >{{!empty($category->services_category->service_text) ? $category->services_category->service_text : ''}}</textarea>
                                        </div>
                                    </div>
                                    {{-- <div class="row mb-3 mt-5">
                                         <label for="title" class="col-sm-2 col-form-label">Title</label>
                                         <div class="col-sm-10">
                                             <textarea class="form-control" type="text" id="elm1"
                                                       name="title"></textarea>
                                         </div>
                                     </div>--}}
                                    <div class="row mb-3">
                                        <label for="category_image" class="col-sm-2 col-form-label">Service
                                            Image</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="file" id="category_image"
                                                   name="category_image"
                                                   placeholder="About Header Image" value="">
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <label for="show_image" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <img id="show_image"
                                                 class="img-thumbnail"
                                                 width="100"
                                                 style="background-color: transparent"
                                                 alt="596x1297"
                                                 src="{{ !empty($category->services_category->image) ? url($category->services_category->image): url('upload/596-1297.png') }}"
                                                 data-holder-rendered="true">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="home_image" class="col-sm-2 col-form-label">Service Home
                                            Image</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="file" id="home_image"
                                                   name="home_image" value="">
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <label for="show_image2" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <img
                                                id="show_image2"
                                                class="img-thumbnail"
                                                style="background-color: transparent"
                                                width="100"
                                                alt="622x911"
                                                src="{{ !empty($service_category_edit->home_image) ? url($service_category_edit->home_image): url('upload/622-911.png') }}"
                                                data-holder-rendered="true">
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-info waves-effect waves-light"
                                           value="Add Service">
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
            $('#category_image').change(function (e) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $('#show_image').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#home_image').change(function (e) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $('#show_imag2').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection

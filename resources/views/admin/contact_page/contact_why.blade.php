@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Contact Us Page Why Section</h4>
                                <form action="{{ route('contact-us.why.update') }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $contact_why->id }}">
                                    <div class="row mb-3 mt-5">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="title" name="title"
                                                   placeholder="Title"
                                                   value="{{!empty($contact_why->title) ? $contact_why->title : ''}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="short_description" class="col-sm-2 col-form-label">
                                            Short Description
                                        </label>
                                        <div class="col-sm-10">
                                            <textarea
                                                rows="5"
                                                class="form-control"
                                                type="text"
                                                id="short_description"
                                                name="short_description"
                                                placeholder="Short Description"
                                            >{{!empty($contact_why->short_description) ? $contact_why->short_description : ''}}</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="long_description" class="col-sm-2 col-form-label">
                                            Long Description
                                        </label>
                                        <div class="col-sm-10">
                                            <textarea
                                                rows="10"
                                                class="form-control"
                                                type="text"
                                                id="elm1"
                                                name="long_description"
                                                placeholder="Long Description"
                                            >{{!empty($contact_why->long_description) ? $contact_why->long_description : null}}</textarea>
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
                                        <label for="why_image" class="col-sm-2 col-form-label">Why
                                            Image</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="file" id="why_image"
                                                   name="why_image"
                                                   placeholder="" value="">
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <label for="show_image" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <img id="show_image" class="img-thumbnail" width="140"
                                                 style="background-color: transparent" alt="200x200"
                                                 src="{{ !empty($contact_why->image) ? url($contact_why->image): url('upload/780-1041.png') }}"
                                                 data-holder-rendered="true">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="why_icon" class="col-sm-2 col-form-label">Why
                                            Icon</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="file" id="why_icon"
                                                   name="why_icon"
                                                   placeholder="" value="">
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <label for="show_image2" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <img id="show_image2" class="img-thumbnail" width="60"
                                                 style="background-color: transparent" alt="200x200"
                                                 src="{{ !empty($contact_why->icon) ? url($contact_why->icon): url('upload/60-60.png') }}"
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
            $('#why_image').change(function (e) {
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
            $('#why_icon').change(function (e) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $('#show_image2').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection

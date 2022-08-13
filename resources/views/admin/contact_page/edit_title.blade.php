@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Contact Us Page Title & Image</h4>
                                <form action="{{ route('contact-us.title.update') }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $contact_title->id }}">
                                    <div class="row mb-3 mt-5">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="title" name="title"
                                                   placeholder="Title"
                                                   value="{{!empty($contact_title->title) ? $contact_title->title : ''}}">
                                        </div>
                                    </div>
                                    <div class="row mb-5 mt-5">
                                        <label for="subtitle" class="col-sm-2 col-form-label">Subtitle</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="subtitle" name="subtitle"
                                                   placeholder="Subtitle"
                                                   value="{{!empty($contact_title->subtitle) ? $contact_title->subtitle : ''}}">
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
                                        <label for="contact_image" class="col-sm-2 col-form-label">Header
                                            Image</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="file" id="contact_image"
                                                   name="contact_image"
                                                   placeholder="" value="">
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <label for="show_image" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <img id="show_image" class="img-thumbnail" width="140"
                                                 style="background-color: transparent" alt="200x200"
                                                 src="{{ !empty($contact_title->image) ? url($contact_title->image): url('upload/960-854.png') }}"
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
            $('#contact_image').change(function (e) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $('#show_image').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection

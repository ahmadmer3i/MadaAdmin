@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">


            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Home Hero</h4>
                                <form action="{{ route('hero.update') }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $home_hero->id }}">
                                    <div class="row mb-3 mt-3">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="title" name="title"
                                                   placeholder="Title"
                                                   value="{{!empty($home_hero->title) ? $home_hero->title : ''}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="short_title" class="col-sm-2 col-form-label">Short Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="short_title" name="short_title"
                                                   placeholder="Short Title"
                                                   value="{{!empty($home_hero->short_title) ? $home_hero->short_title : ''}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="contact_text" class="col-sm-2 col-form-label">Contact Text</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="contact_text"
                                                   name="contact_text"
                                                   placeholder="Contact Text"
                                                   value="{{!empty($home_hero->contact_text) ? $home_hero->contact_text : ''}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="contact_phone" class="col-sm-2 col-form-label">Contact Phone</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="contact_phone"
                                                   name="contact_phone"
                                                   placeholder="Contact Phone"
                                                   value="{{!empty($home_hero->contact_phone) ? $home_hero->contact_phone : ''}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="form_button_title" class="col-sm-2 col-form-label">Form Button
                                            Text</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="form_button_title"
                                                   name="form_button_title"
                                                   placeholder="Form Button Text"
                                                   value="{{!empty($home_hero->form_button_title) ? $home_hero->form_button_title : ''}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="hero_image" class="col-sm-2 col-form-label">Hero Image</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="file" id="hero_image"
                                                   name="hero_image"
                                                   placeholder="Hero Image" value="">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="profile_image" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <img id="show_image" class="rounded avatar-lg" alt="200x200"
                                                 src="{{ !empty($home_hero->hero_image) ? url($home_hero->hero_image): url('upload/no_image.png') }}"
                                                 data-holder-rendered="true">
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-info waves-effect waves-light"
                                           value="Update Home Hero">
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
            $('#hero_image').change(function (e) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $('#show_image').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection

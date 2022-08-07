@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="page-content">
        <div class="container-fluid">


            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Edit Profile</h4>
                                <form action="{{ route('update.profile') }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3 mt-3">
                                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="name" name="name"
                                                   placeholder="Name" value="{{$edit_data->name}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="email" id="email" name="email"
                                                   placeholder="Email" value="{{$edit_data->email}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="username" name="username"
                                                   placeholder="Username" value="{{$edit_data->username}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="profile_image" class="col-sm-2 col-form-label">Profile Image</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="file" id="profile_image"
                                                   name="profile_image"
                                                   placeholder="Username" value="">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="profile_image" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <img id="show_image" class="rounded avatar-lg" alt="200x200"
                                                 src="{{ !empty($edit_data->profile_image) ? url('upload/admin_images/'.$edit_data->profile_image): url('upload/no_image.png') }}"
                                                 data-holder-rendered="true">
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-info waves-effect waves-light"
                                           value="Update Profile">
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
            $('#profile_image').change(function (e) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $('#show_image').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection

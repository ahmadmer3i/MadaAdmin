@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="pt-4 pb-4 text-center">
                                <img class="rounded-circle avatar-xl" alt="200x200"
                                     src="{{  (!empty($admin_data->profile_image) ?
                                        url('upload/admin_images/'.$admin_data->profile_image) :
                                        url('upload/no_image.png')) }}"
                                     data-holder-rendered="true">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Name: {{$admin_data->name}}</h4>
                                <hr>
                                <h4 class="card-title">Email: {{$admin_data->email}}</h4>
                                <hr>
                                <h4 class="card-title">Username: {{$admin_data->username}}</h4>
                                <hr>
                                <a href="{{  route('edit.profile') }}" class="btn btn-info waves-effect waves-light">Edit
                                    Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

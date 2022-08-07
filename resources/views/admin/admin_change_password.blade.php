@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Change Password</h4>

                                @if(count($errors))
                                    @foreach($errors->all() as $error)
                                        <p class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ $error }}
                                        </p>
                                    @endforeach

                                @endif
                                <form method="post" action="{{ route('admin.profile.update.password') }}">
                                    @csrf
                                    <div class="row mb-3 mt-5">
                                        <label for="old_password" class="col-sm-2 col-form-label">Old Password</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="password" id="old_password"
                                                   name="old_password"
                                                   placeholder="Old Password">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="password" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="password" id="password" name="password"
                                                   placeholder="New Password">
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <label for="confirm_password" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="password" id="confirm_password"
                                                   name="confirm_password"
                                                   placeholder="Password Confirmation">
                                        </div>
                                    </div>


                                    <input type="submit" class="btn btn-info waves-effect waves-light"
                                           value="Change Password">
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

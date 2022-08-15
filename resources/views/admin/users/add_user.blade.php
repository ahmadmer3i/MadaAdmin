@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="text-muted text-center font-size-18"><b>Add User</b></h4>

                                <div class="p-3">

                                    <form class="form-horizontal mt-3" method="POST"
                                          action="{{route('admin.users.store-user')}}">
                                        @csrf

                                        <div class="form-group mb-3 row">
                                            <div class="col-12">
                                                <input class="form-control" type="text" name="name" id="name"
                                                       required=""
                                                       placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <div class="col-12">
                                                <input class="form-control" type="email" id="email" name="email"
                                                       required=""
                                                       placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="form-group mb-3 row">
                                            <div class="col-12">
                                                <input class="form-control" id="username" name="username" type="text"
                                                       required=""
                                                       placeholder="Username">
                                            </div>
                                        </div>

                                        <div class="form-group mb-3 row">
                                            <div class="col-12">
                                                <input class="form-control" id="password" name="password"
                                                       type="password"
                                                       required=""
                                                       placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <div class="col-12">
                                                <input class="form-control" id="password_confirmation"
                                                       name="password_confirmation" type="password" required=""
                                                       placeholder="Confirm Password">
                                            </div>
                                        </div>

                                        <div class="form-group mb-3 row">
                                            <div class="col-12">

                                            </div>
                                        </div>

                                        <div class="form-group text-center row mt-3 pt-1">
                                            <div class="col-12">
                                                <button class="btn btn-info w-100 waves-effect waves-light"
                                                        type="submit">
                                                    Add User
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- end form -->
                                </div>
                            </div>
                            <!-- end cardbody -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

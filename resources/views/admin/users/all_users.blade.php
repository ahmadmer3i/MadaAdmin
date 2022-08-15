@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div
                                            class="page-title-box d-sm-flex align-items-center justify-content-between">
                                            <h4 class="mb-sm-0">Application Salary Transfer Methods</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <table id="datatable"
                                                       class="table table-bordered dt-responsive wrap"
                                                       style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>


                                                    <tbody>
                                                    @php($i=1)
                                                    @foreach($users as $user)
                                                        <tr>
                                                            <td>{{ $i++ }}</td>

                                                            <td>{{$user->name}}</td>
                                                            <td>{{$user->email}}
                                                            </td>
                                                            <td>
                                                                {{!empty($user->email_verified_at) ? 'Yes' : 'No'}}
                                                            </td>
                                                            <td>
                                                                <a href="{{route('form-application.transfer-way.edit', $user->id)}}"
                                                                   class="btn btn-info" title="Edit">
                                                                    <i class="ri-pencil-fill"></i>
                                                                </a>
                                                                <a href="{{ route('form-application.transfer-way.delete', $user->id) }}"
                                                                   class="btn btn-danger"
                                                                   title="Delete">
                                                                    <i class="ri-delete-bin-2-fill"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach


                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div>

                                <!-- end row -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
@endsection

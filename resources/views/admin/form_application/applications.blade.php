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
                                            <h4 class="mb-sm-0">Applied Applications</h4>
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
                                                        <th>Applicant</th>
                                                        <th>Type</th>
                                                        <th>Status</th>
                                                        <th>Action By</th>
                                                    </tr>
                                                    </thead>


                                                    <tbody>
                                                    @php($i=1)
                                                    @foreach($applications as $application)
                                                        <tr>
                                                            <td>{{ $i++ }}</td>
                                                            <td>
                                                                <a href="{{route('form-application.applications.details', $application->id)}}">{{$application->apply_full_name}}</a>
                                                            </td>
                                                            <td>{{!empty($application->form_services->name) ? $application->form_services->name : 'SERVICE DELETED' }}</td>
                                                            <td>
                                                                @if(($application->approved))
                                                                    {!! '<i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Approved' !!}
                                                                @elseif($application->approved===null)
                                                                    {!! '<i class="ri-checkbox-blank-circle-fill font-size-10 text-warning align-middle me-2"></i>Waiting'  !!}
                                                                @else
                                                                    {!!  '<i class="ri-checkbox-blank-circle-fill font-size-10 text-danger align-middle me-2"></i>Rejected' !!}
                                                                @endif
                                                            </td>
                                                            <td>
                                                                {{--                                                                <a href=""--}}
                                                                {{--                                                                   class="btn btn-info" title="Edit">--}}
                                                                {{--                                                                    <i class="ri-pencil-fill"></i>--}}
                                                                {{--                                                                </a>--}}
                                                                {{--                                                                <a href="{{ route('form-application.delete-application', $application->id) }}"--}}
                                                                {{--                                                                   id="delete"--}}
                                                                {{--                                                                   class="btn btn-danger"--}}
                                                                {{--                                                                   title="Delete">--}}
                                                                {{--                                                                    <i class="ri-delete-bin-2-fill"></i>--}}
                                                                {{--                                                                </a>--}}
                                                                {{$application->user_id}}
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

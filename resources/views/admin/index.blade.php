@extends('admin.admin_master')
@section('admin')
    @php
        $form_counts = \App\Models\ApplyForm::all()->count();
        $forms = \App\Models\ApplyForm::latest()->take(10)->get();
        $services = \App\Models\ApplyFormService::all();
    @endphp
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Dashboard</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-truncate font-size-14 mb-2">Total Forms</p>
                                    <h4 class="mb-2">{{$form_counts->count()}}</h4>
                                </div>
                                <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-primary rounded-3">
                                                    <i class="ri-shopping-cart-2-line font-size-24"></i>
                                                </span>
                                </div>
                            </div>
                        </div><!-- end cardbody -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <!-- end col -->
                @foreach($services as $service)
                    <div class="col-xl-2 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-truncate font-size-14 mb-2">{{$service->name}}</p>
                                        <h4 class="mb-2">{{$service->apply_form->count()}}</h4>
                                        {{--                                    <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i--}}
                                        {{--                                                class="ri-arrow-right-up-line me-1 align-middle"></i>16.2%</span>from--}}
                                        {{--                                        previous period</p>--}}
                                    </div>
                                    <div class="avatar-sm">
                                                                <span
                                                                    class="avatar-title bg-light text-primary rounded-3">
                                                                    <i class="{{!empty($service->icon) ? $service->icon :'ri-user-3-line'}} font-size-24"></i>
                                                                </span>
                                    </div>
                                </div>
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div>
                @endforeach
            </div><!-- end row -->


            <!-- end row -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>

                            </div>

                            <h4 class="card-title mb-4">Latest Applications</h4>

                            <div class="table-responsive">
                                <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                    <thead class="table-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Phone Number</th>
                                        <th>National ID</th>
                                        <th>Application Date</th>
                                    </tr>
                                    </thead><!-- end thead -->
                                    <tbody>
                                    @foreach($forms as $form)
                                        <tr>

                                            <td><h6 class="mb-0"><a
                                                        href="{{route('form-application.applications.details', $form->id)}}">{{$form->apply_full_name}}</a>
                                                </h6></td>
                                            <td>{{(!empty($form->form_services->name) ? $form->form_services->name : 'DELETED')}}</td>
                                            <td>
                                                @if(($form->approved))
                                                    {!! '<i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Approved' !!}
                                                @elseif(is_null($form->approved))
                                                    {!! '<i class="ri-checkbox-blank-circle-fill font-size-10 text-warning align-middle me-2"></i>Waiting'  !!}
                                                @else
                                                    {!!  '<i class="ri-checkbox-blank-circle-fill font-size-10 text-danger align-middle me-2"></i>Rejected' !!}
                                                @endif
                                            </td>
                                            <td>
                                                {{$form->apply_phone}}
                                            </td>
                                            <td>
                                                {{$form->apply_national_id}}
                                            </td>
                                            <td>{{$form->created_at}}</td>
                                            @endforeach
                                        </tr>
                                        <!-- end -->

                                        <!-- end -->
                                    </tbody><!-- end tbody -->
                                </table> <!-- end table -->
                            </div>
                        </div><!-- end card -->
                    </div><!-- end card -->
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->
        </div>

    </div>
@endsection


@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-12">
                                        <div
                                            class="page-title-box d-sm-flex align-items-center justify-content-between">
                                            <h4 class="mb-sm-0">Edit Phone Number | {{ $phone->phone }}</h4>
                                            <div class="page-title-right">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form action="{{ route('contact-us.phones.edit.update') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$phone->id}}">
                                    <div class="row mb-3 mt-5">
                                        <label for="phone" class="col-sm-2 col-form-label">Phone Number</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="tel" id="phone" name="phone"
                                                   placeholder="Phone"
                                                   value="{{ !empty($phone->phone) ? $phone->phone : '' }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <div class="row">
                                            <div class="col-12">
                                                <div
                                                    class="page-title-box d-sm-flex align-items-center justify-content-between">
                                                    <input type="submit" class="btn btn-info waves-effect waves-light"
                                                           value="Edit Phone">
                                                    <div class="page-title-right">
                                                        <a href="{{ route('contact-us.phones') }}"
                                                           class="btn btn-danger">
                                                            Back
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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

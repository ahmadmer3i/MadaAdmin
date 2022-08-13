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
                                            <h4 class="mb-sm-0">Edit {{$transfer->transfer_way}}</h4>
                                            <div class="page-title-right">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form action="{{ route('form-application.transfer-way.update') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $transfer->id }}">
                                    <div class="row mb-3 mt-5">
                                        <label for="transfer_way" class="col-sm-2 col-form-label">Method</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="transfer_way"
                                                   name="transfer_way"
                                                   style="direction: rtl"
                                                   placeholder="تحويل راتب بنكي"
                                                   value="{{!empty($transfer->transfer_way) ? $transfer->transfer_way : ''}}">
                                        </div>
                                    </div>
                                    {{-- <div class="row mb-3 mt-5">
                                         <label for="title" class="col-sm-2 col-form-label">Title</label>
                                         <div class="col-sm-10">
                                             <textarea class="form-control" type="text" id="elm1"
                                                       name="title"></textarea>
                                         </div>
                                     </div>--}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div
                                                class="page-title-box d-sm-flex align-items-center justify-content-between">
                                                <input type="submit" class="btn btn-info waves-effect waves-light"
                                                       value="Update">
                                                <div class="page-title-right">
                                                    <a href="{{ route('form-application.transfer-ways') }}"
                                                       class="btn btn-danger">
                                                        Back
                                                    </a>
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

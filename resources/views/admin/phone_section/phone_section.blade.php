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
                                            <h4 class="mb-sm-0">Phone Section</h4>
                                            <div class="page-title-right">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form action="{{ route('phone-section.update') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $phone->id }}">
                                    <div class="row mb-3 mt-5">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="title" name="title"
                                                   placeholder="Title"
                                                   value="{{ !empty($phone->title) ? $phone->title : '' }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="subtitle" class="col-sm-2 col-form-label">Subtitle</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="subtitle" name="subtitle"
                                                   placeholder="Subtitle"
                                                   value="{{ !empty($phone->subtitle) ? $phone->subtitle : '' }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <div class="row">
                                            <div class="col-12">
                                                <div
                                                    class="page-title-box d-sm-flex align-items-center justify-content-between">
                                                    <input type="submit" class="btn btn-info waves-effect waves-light"
                                                           value="Update">
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

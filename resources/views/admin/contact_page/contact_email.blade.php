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
                                            <h4 class="mb-sm-0">Emails</h4>
                                            <div class="page-title-right">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form action="{{ route('contact-us.email.subtitle.update') }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $email->id }}">
                                    <div class="row mb-3 mt-5">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="title" name="title"
                                                   placeholder="Title"
                                                   value="{{!empty($email->title) ? $email->title : ''}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="subtitle" class="col-sm-2 col-form-label">Subtitle</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="subtitle" name="subtitle"
                                                   placeholder="Subtitle"
                                                   value="{{!empty($email->subtitle) ? $email->subtitle : ''}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="icon" class="col-sm-2 col-form-label">Email Icon</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="file" id="icon"
                                                   name="icon"
                                                   placeholder="" value="">
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <label for="show_image" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <img id="show_image" class="img-thumbnail" width="60"
                                                 style="background-color: transparent" alt="60x60"
                                                 src="{{ !empty($email->icon) ? url($email->icon): url('upload/60-60.png') }}"
                                                 data-holder-rendered="true">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <div class="row">
                                            <div class="col-12">
                                                <div
                                                    class="page-title-box d-sm-flex align-items-center justify-content-between">
                                                    <h4 class="mb-sm-0">Email List</h4>
                                                    <div class="page-title-right">
                                                        <a href="{{ route('contact-us.email.add') }}"
                                                           class="btn btn-dark">
                                                            Add Email
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <table id="datatable"
                                                               class="table table-bordered dt-responsive nowrap"
                                                               style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                            <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Email</th>
                                                                <th>Action</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @php($i=1)
                                                            @foreach($email->contact_email_list as $item)
                                                                <tr>
                                                                    <td>{{ $i++ }}</td>
                                                                    <td>{{$item->email}}</td>
                                                                    <td>
                                                                        <a href="{{route('contact-us.email.edit', $item->id)}}"
                                                                           class="btn btn-info" title="Edit">
                                                                            <i class="ri-pencil-fill"></i>
                                                                        </a>
                                                                        <a href="{{ route('contact-us.email.delete',  $item->id )}}"
                                                                           class="btn btn-danger"
                                                                           id="delete"
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
                                    </div>
                                    <input type="submit" class="btn btn-info waves-effect waves-light"
                                           value="Update Email Subtitle">
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
            $('#icon').change(function (e) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $('#show_image').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection

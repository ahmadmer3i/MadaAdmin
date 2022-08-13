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
                                            <h4 class="mb-sm-0">Contact Phones</h4>
                                            <div class="page-title-right">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form action="{{ route('contact-use.phones.update') }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $phones->id }}">
                                    <div class="row mb-3 mt-5">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="title" name="title"
                                                   placeholder="Title"
                                                   value="{{!empty($phones->title) ? $phones->title : ''}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="subtitle" class="col-sm-2 col-form-label">Subtitle</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="subtitle" name="subtitle"
                                                   placeholder="Subtitle"
                                                   value="{{!empty($phones->subtitle) ? $phones->subtitle : ''}}">
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
                                                 src="{{ !empty($phones->icon) ? url($phones->icon): url('upload/60-60.png') }}"
                                                 data-holder-rendered="true">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <div class="row">
                                            <div class="col-12">
                                                <div
                                                    class="page-title-box d-sm-flex align-items-center justify-content-between">
                                                    <h4 class="mb-sm-0">Phone List</h4>
                                                    <div class="page-title-right">
                                                        <a href="{{ route('contact-use.phones.add') }}"
                                                           class="btn btn-dark">
                                                            Add Phone
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
                                                                <th>Phone</th>
                                                                <th>Action</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @php($i=1)
                                                            @foreach($phones->contact_phone_list as $item)
                                                                <tr>
                                                                    <td>{{ $i++ }}</td>
                                                                    <td>{{$item->phone}}</td>
                                                                    <td>
                                                                        <a href="{{route('contact-us.phones.edit', $item->id)}}"
                                                                           class="btn btn-info" title="Edit">
                                                                            <i class="ri-pencil-fill"></i>
                                                                        </a>
                                                                        <a href="{{ route('contact-us.phones.delete',  $item->id )}}"
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
                                    </div>
                                    <input type="submit" class="btn btn-info waves-effect waves-light"
                                           value="Update">
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

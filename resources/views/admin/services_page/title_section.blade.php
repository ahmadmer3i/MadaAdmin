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
                                            <h4 class="mb-sm-0">Services Titles & Image</h4>
                                            <div class="page-title-right">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form action="{{ route('services.title.update') }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $services_title->id }}">
                                    <div class="row mb-3 mt-5">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="title" name="title"
                                                   placeholder="Title"
                                                   value="{{!empty($services_title->title) ? $services_title->title : ''}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="subtitle" class="col-sm-2 col-form-label">Subtitle</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="subtitle" name="subtitle"
                                                   placeholder="Subtitle"
                                                   value="{{!empty($services_title->subtitle) ? $services_title->subtitle : ''}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="home_title" class="col-sm-2 col-form-label">Home Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="home_title"
                                                   name="home_title"
                                                   placeholder="Home Title"
                                                   value="{{!empty($services_title->home_title) ? $services_title->home_title : ''}}">
                                        </div>
                                    </div>

                                    {{-- <div class="row mb-3 mt-5">
                                         <label for="title" class="col-sm-2 col-form-label">Title</label>
                                         <div class="col-sm-10">
                                             <textarea class="form-control" type="text" id="elm1"
                                                       name="title"></textarea>
                                         </div>
                                     </div>--}}
                                    <div class="row mb-3 mt-5">
                                        <label for="services_image" class="col-sm-2 col-form-label">Services Header
                                            Image</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="file" id="services_image"
                                                   name="services_image"
                                                   placeholder="Services Header Image" value="">
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <label for="show_image" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <img id="show_image" class="rounded avatar-lg" alt="200x200"
                                                 src="{{ !empty($services_title->image) ? url($services_title->image): url('upload/no_image.png') }}"
                                                 data-holder-rendered="true">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <div class="row">
                                            <div class="col-12">
                                                <div
                                                    class="page-title-box d-sm-flex align-items-center justify-content-between">
                                                    <h4 class="mb-sm-0">Categories</h4>
                                                    <div class="page-title-right">
                                                        <a href="{{ route('services.category.add') }}"
                                                           class="btn btn-dark">
                                                            Add Category
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
                                                               class="table table-bordered dt-responsive wrap"
                                                               style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                            <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Service</th>
                                                                <th>Description</th>
                                                                <th>Home Subtitle</th>
                                                                <th>Text</th>
                                                                <th>Image</th>
                                                                <th>Home Image</th>
                                                                <th>Action</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @php($i=1)
                                                            @foreach($services_title->services_category as $cat)
                                                                <tr>
                                                                    <td>{{ $i++ }}</td>
                                                                    <td>{{$cat->service_title}}</td>
                                                                    <td>{{ $cat->service_subtitle }}</td>
                                                                    <td>{{ $cat->home_subtitle }}</td>
                                                                    <td>{{ $cat->service_text }}</td>
                                                                    <td>
                                                                        <img src="{{asset($cat->image)}}" height="100"
                                                                             alt="">
                                                                    </td>
                                                                    <td>
                                                                        <img
                                                                            src="{{!empty($cat->home_image) ? asset($cat->home_image) : url('upload/622-911.png')}}"
                                                                            height="100"
                                                                            alt="">
                                                                    </td>
                                                                    <td nowrap="">


                                                                        <a href="{{route('services.category.edit', $cat->id)}}"
                                                                           class="btn btn-sm btn-info"
                                                                           title="Edit">
                                                                            <i class="ri-pencil-fill"></i>
                                                                        </a>


                                                                        <a href="{{route('services.category.delete', $cat->id)}}"
                                                                           class="btn btn-sm btn-danger"
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
                                           value="Update Services Header">
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
            $('#services_image').change(function (e) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $('#show_image').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection

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
                                            <h4 class="mb-sm-0">Add Client</h4>
                                            <div class="page-title-right">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form action="{{ route('clients.list.add.store') }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="">
                                    <div class="row mb-3 mt-5">
                                        <label for="title" class="col-sm-2 col-form-label">Client Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="name" name="name"
                                                   placeholder="Client Name"
                                                   value="">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="subtitle" class="col-sm-2 col-form-label">Client Description</label>
                                        <div class="col-sm-10">
                                            <textarea
                                                class="form-control"
                                                rows="7"
                                                type="text"
                                                id="description"
                                                name="description"
                                                placeholder="Client Description"
                                            ></textarea>
                                        </div>
                                    </div>

                                    {{-- <div class="row mb-3 mt-5">
                                         <label for="title" class="col-sm-2 col-form-label">Title</label>
                                         <div class="col-sm-10">
                                             <textarea class="form-control" type="text" id="elm1"
                                                       name="title"></textarea>
                                         </div>
                                     </div>--}}
                                    <div class="row mb-3">
                                        <label for="client_image" class="col-sm-2 col-form-label">
                                            Client Image
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                   type="file"
                                                   id="client_image"
                                                   name="client_image"
                                                   placeholder="Services Header Image" value=""
                                            >
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <label for="show_image" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <img id="show_image" class="rounded avatar-lg" alt="200x200"
                                                 src="{{ url('upload/no_image.png') }}"
                                                 data-holder-rendered="true">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="client_logo" class="col-sm-2 col-form-label">
                                            Client Logo
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                   type="file"
                                                   id="client_logo"
                                                   name="client_logo"
                                                   placeholder="Services Header Image" value=""
                                            >
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <label for="show_image2" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <img id="show_image2" class="rounded avatar-lg" alt="200x200"
                                                 src="{{ url('upload/no_image.png') }}"
                                                 data-holder-rendered="true">
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-info waves-effect waves-light"
                                           value="Add Client">
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
            $('#client_image').change(function (e) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $('#show_image').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#client_logo').change(function (e) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $('#show_image2').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection

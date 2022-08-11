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
                                            <h4 class="mb-sm-0">Add Partner</h4>
                                            <div class="page-title-right">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form action="{{ route('partners.list.add.store') }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="">
                                    <div class="row mb-3 mt-5">
                                        <label for="title" class="col-sm-2 col-form-label">Partner Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="name" name="name"
                                                   placeholder="Partner Name"
                                                   value="">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="subtitle" class="col-sm-2 col-form-label">Partner
                                            Description</label>
                                        <div class="col-sm-10">
                                            <textarea
                                                class="form-control"
                                                rows="7"
                                                type="text"
                                                id="description"
                                                name="description"
                                                placeholder="Partner Description"
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
                                        <label for="partner_image" class="col-sm-2 col-form-label">
                                            Partner Image
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                   type="file"
                                                   id="partner_image"
                                                   name="partner_image"
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
                                        <label for="partner_logo" class="col-sm-2 col-form-label">
                                            Partner Logo
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                   type="file"
                                                   id="partner_logo"
                                                   name="partner_logo"
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
                                           value="Add Partner">
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
            $('#partner_image').change(function (e) {
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
            $('#partner_logo').change(function (e) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $('#show_image2').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection

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
                                            <h4 class="mb-sm-0">Add Value</h4>
                                            <div class="page-title-right">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form action="{{ route('about.core-values.add.store') }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="">
                                    <div class="row mb-3 mt-5">
                                        <label for="title" class="col-sm-2 col-form-label">Value Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                   type="text" id="title"
                                                   name="title"
                                                   placeholder="Value Title"
                                                   value=""
                                            >
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="description" class="col-sm-2 col-form-label">
                                            Description</label>
                                        <div class="col-sm-10">
                                            <textarea
                                                class="form-control"
                                                rows="7"
                                                type="text"
                                                id="description"
                                                name="description"
                                                placeholder="Value Description"
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
                                        <label for="value_image" class="col-sm-2 col-form-label">
                                            Image
                                        </label>
                                        <div class="col-sm-10">
                                            <input class="form-control"
                                                   type="file"
                                                   id="value_image"
                                                   name="value_image"
                                                   placeholder="Services Header Image" value=""
                                            >
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <label for="show_image" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <img id="show_image" class="rounded avatar-lg" alt="200x200"
                                                 src="{{ url('upload/780-780.png') }}"
                                                 data-holder-rendered="true">
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-info waves-effect waves-light"
                                           value="Add Value">
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
            $('#value_image').change(function (e) {
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

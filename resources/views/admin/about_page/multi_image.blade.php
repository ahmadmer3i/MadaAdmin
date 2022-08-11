@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">About Multi-Image</h4>
                                <form action="{{ route('about.multi-image.store') }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mb-5 mt-5">
                                        <label for="multi_image" class="col-sm-2 col-form-label">About
                                            Images</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="file" id="multi_image"
                                                   name="multi_image[]" multiple
                                                   placeholder="Images" value="">
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <label for="show_image" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <img id="show_image" class="rounded avatar-lg" alt="200x200"
                                                 src="{{url('upload/no_image.png')}}"
                                                 data-holder-rendered="true">
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-info waves-effect waves-light"
                                           value="Add Images">
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
            $('#multi_image').change(function (e) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $('#show_image').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection

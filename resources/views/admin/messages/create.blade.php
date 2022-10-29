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
                                            <h4 class="mb-sm-0">Send Message</h4>
                                            <div class="page-title-right">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form action="{{ route('messages.send') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="">
                                    <div class="row mb-3 mt-5">
                                        <label for="mobile" class="col-sm-2 col-form-label">Mobile #</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="mobile" name="mobile"
                                                   placeholder="7xxxxxxxx"
                                                   value="">
                                            <span class="text-info">7xxxxxxxx</span>
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="message" class="col-sm-2 col-form-label">Message</label>
                                        <div class="col-sm-10">
                                            <textarea
                                                class="form-control"
                                                rows="7"
                                                type="text"
                                                id="message"
                                                name="message"
                                                placeholder="Text Message"
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
                                    <div class="pb-4"></div>
                                    <input type="submit" class="btn btn-info waves-effect waves-light"
                                           value="Send Message">
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

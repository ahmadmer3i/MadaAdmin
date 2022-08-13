@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Contact Address</h4>
                                <form action="{{ route('contact-us.address.update') }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $contact_address->id }}">
                                    <div class="row mb-3 mt-5">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="title" name="title"
                                                   placeholder="Title"
                                                   value="{{!empty($contact_address->title) ? $contact_address->title : ''}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="office" class="col-sm-2 col-form-label">Office</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="office" name="office"
                                                   placeholder="Office"
                                                   value="{{!empty($contact_address->office) ? $contact_address->office : ''}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="building_name" class="col-sm-2 col-form-label">Building Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="building_name"
                                                   name="building_name"
                                                   placeholder="Building Name"
                                                   value="{{!empty($contact_address->building_name) ? $contact_address->building_name : ''}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="street_name" class="col-sm-2 col-form-label">Street Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="street_name"
                                                   name="street_name"
                                                   placeholder="Street Name"
                                                   value="{{!empty($contact_address->street_name) ? $contact_address->street_name : ''}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="city_country" class="col-sm-2 col-form-label">City - Country</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="city_country"
                                                   name="city_country"
                                                   placeholder="City - Country"
                                                   value="{{!empty($contact_address->city_country) ? $contact_address->city_country : ''}}">
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
                                        <label for="address_icon" class="col-sm-2 col-form-label">Address Icon</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="file" id="address_icon"
                                                   name="address_icon"
                                                   placeholder="" value="">
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <label for="show_image" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <img id="show_image" class="img-thumbnail" width="60"
                                                 style="background-color: transparent" alt="60x60"
                                                 src="{{ !empty($contact_address->address_icon) ? url($contact_address->address_icon): url('upload/60-60.png') }}"
                                                 data-holder-rendered="true">
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
            $('#address_icon').change(function (e) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $('#show_image').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection

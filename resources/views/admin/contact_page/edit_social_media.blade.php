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
                                            <h4 class="mb-sm-0">Edit Social Media Link | {{$social_link->name}}</h4>
                                            <div class="page-title-right">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form action="{{ route('contact-us.social-media.update') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $social_link->id }}">
                                    <div class="row mb-3 mt-5">
                                        <label for="name" class="col-sm-2 col-form-label">
                                            Social Media</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="name" name="name"
                                                   placeholder="Social Media"
                                                   value="{{!empty($social_link->name) ? $social_link->name : ''}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="link" class="col-sm-2 col-form-label">
                                            Link</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="link" name="link"
                                                   placeholder="Social Media Link"
                                                   value="{{ !empty($social_link->link) ? $social_link->link : ''}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-5">
                                        <label for="icon" class="col-sm-2 col-form-label">
                                            Icon</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="icon" name="icon"
                                                   placeholder="Social Media Icon"
                                                   value="{{ !empty($social_link->icon) ? $social_link->icon : '' }}">
                                            <p class="pt-3"><a href="https://ionic.io/ionicons" target="_blank">https://ionic.io/ionicons</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row mb-5 mt-1">
                                        <label for="icon_color" class="col-sm-2 col-form-label">Icon Color</label>
                                        <div class="col-sm-10">
                                            <div id="cp2" class="input-group colorpicker colorpicker-component">
                                                <input type="text" name="icon_color" id="icon_color"
                                                       value="{{ !empty($social_link->icon_color) ? $social_link->icon_color : '' }}"
                                                       class="form-control"/>
                                                <div class="input-group-addon w-1.5"><i
                                                        style="width: 50px; height: 50px"></i></div>
                                            </div>
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
        $('.colorpicker').colorpicker({});
    </script>

@endsection

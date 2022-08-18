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
                                            <h4 class="mb-sm-0">Social Media Section</h4>
                                            <div class="page-title-right">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row mb-3 mt-5">
                                     <label for="title" class="col-sm-2 col-form-label">Title</label>
                                     <div class="col-sm-10">
                                         <textarea class="form-control" type="text" id="elm1"
                                                   name="title"></textarea>
                                     </div>
                                 </div>--}}


                                <form action="{{ route('contact-us.social-media.icon.update') }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row mb-3 mt-5">
                                                <label for="title" class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" id="title" name="title"
                                                           placeholder="Title"
                                                           value="{{!empty($social_media->title) ? $social_media->title : ''}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row mb-3 mt-5">
                                                <label for="footer_title" class="col-sm-2 col-form-label">
                                                    Footer Title
                                                </label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" id="footer_title"
                                                           name="footer_title"
                                                           placeholder="Footer Title"
                                                           value="{{!empty($social_media->footer_title) ? $social_media->footer_title : ''}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row mb-3 mt-5">
                                                <label for="icon" class="col-sm-2 col-form-label">Social Section
                                                    Icon</label>
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
                                                         src="{{ !empty($social_media->icon) ? url($social_media->icon): url('upload/60-60.png') }}"
                                                         data-holder-rendered="true">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="submit" class="btn btn-info waves-effect waves-light "
                                           value="Update Social Media Icon">
                                    <div class="row mt-5">
                                        <div class="col-12">
                                            <div
                                                class="page-title-box d-sm-flex align-items-center justify-content-between">
                                                <h4 class="mb-sm-0">Social Media Links</h4>
                                                <div class="page-title-right">
                                                    <a href="{{ route('contact-us.social-media.add') }}"
                                                       class="btn btn-dark">
                                                        Add
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
                                                            <th>Social Medial</th>
                                                            <th>Link</th>
                                                            <th>Icon</th>
                                                            <th>Color</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        </thead>


                                                        <tbody>
                                                        @php($i=1)
                                                        @foreach($social_media->social_media_link as $social)
                                                            <tr>
                                                                <td>{{ $i++ }}</td>
                                                                <td>{{$social->name}}</td>
                                                                <td style="width: 200px">{{ $social->link }}</td>
                                                                <td id="{{$social->name}}">
                                                                    {!! $social->icon !!}
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        style="width: 50px; background-color:{{$social->icon_color}}; height: 50px; border-radius: 5px"></div>
                                                                </td>
                                                                <td>
                                                                    <a href="{{route('contact-us.social-media.edit', $social->id)}}"
                                                                       class="btn btn-info" title="Edit">
                                                                        <i class="ri-pencil-fill"></i>
                                                                    </a>
                                                                    <a href="{{ route('contact-us.social-media.delete', $social->id) }}"
                                                                       class="btn btn-danger"
                                                                       title="Delete"
                                                                       id="delete"
                                                                    >
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

                                </form>
                                <!-- end row -->

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
        <script>
            $(document).ready(function () {

                let items = <?php echo json_encode($social_media->social_media_link); ?>;
                console.log(items);
                for (let item of items) {
                    console.log(item);

                    let icon = document.querySelector(`#${item.name}`)
                    console.log(icon);

                    icon.firstElementChild.setAttribute('size', 'large')
                    icon.firstElementChild.style.color = `${item.icon_color}`
                }
            });


        </script>
@endsection

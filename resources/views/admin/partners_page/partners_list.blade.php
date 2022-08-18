@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                {{-- <div class="row mb-3 mt-5">
                                     <label for="title" class="col-sm-2 col-form-label">Title</label>
                                     <div class="col-sm-10">
                                         <textarea class="form-control" type="text" id="elm1"
                                                   name="title"></textarea>
                                     </div>
                                 </div>--}}

                                <div class="row">
                                    <div class="col-12">
                                        <div
                                            class="page-title-box d-sm-flex align-items-center justify-content-between">
                                            <h4 class="mb-sm-0">Partners</h4>
                                            <div class="page-title-right">
                                                <a href="{{ route('partners.list.add') }}"
                                                   class="btn btn-dark">
                                                    Add Partner
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
                                                        <th>Client Name</th>
                                                        <th>Client Description</th>
                                                        <th>Client Image</th>

                                                        <th>Client Logo</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>


                                                    <tbody>
                                                    @php($i=1)
                                                    @foreach($partners as $partner)
                                                        <tr>
                                                            <td>{{ $i++ }}</td>
                                                            <td>{{$partner->name}}</td>
                                                            <td style="width: 200px">{{ $partner->description }}</td>
                                                            <td><img
                                                                    src="{{!empty($partner->image) ? asset($partner->image) : asset('backend/assets/images/Image_not_available.png')}}"
                                                                    alt="" width="100">
                                                            </td>

                                                            <td><img
                                                                    src="{{!empty($partner->logo) ? url($partner->logo) : asset('backend/assets/images/Image_not_available.png')}}"
                                                                    alt="" width="200">
                                                            </td>
                                                            <td>
                                                                <a href="{{route('partners.list.edit', $partner->id)}}"
                                                                   class="btn btn-info" title="Edit">
                                                                    <i class="ri-pencil-fill"></i>
                                                                </a>
                                                                <a href="{{ route('partners.list.delete', $partner->id) }}"
                                                                   class="btn btn-danger"
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

                                <!-- end row -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#category_image').change(function (e) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        $('#show_image').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                });
            });
        </script>
@endsection
